<?php
/**
* glFusion CMS - Social Share Plugin
*
* glFusion API functions
*
* @license GNU General Public License version 2 or later
*     http://www.opensource.org/licenses/gpl-license.php
*
*  Copyright (C) 2009-2021 by the following authors:
*   Mark R. Evans   mark AT glfusion DOT org
*
*/

if (!defined('GVERSION')) {
    die('This file can not be used on its own.');
}

use \glFusion\Log\Log;
use \glFusion\FileSystem;

// load the language file(s), including custom strings if any

$langfile = $_CONF['path'].'plugins/socialshare/language/' . $_CONF['language'] . '.php';
$custfile = $_CONF['path'].'plugins/socialshare/language/custom/' . $_CONF['language'] . '.php';
if (file_exists($langfile)) {
    include_once $langfile;
    if (file_exists($custfile)) {
        include_once $custfile;
    }
} else {
    $langfile = $_CONF['path'].'plugins/socialshare/language/english_utf-8.php';
    $custfile = $_CONF['path'].'plugins/socialshare/language/custom/english_utf-8.php';
    include_once $langfile;
    if (file_exists($custfile)) {
        include_once $custfile;
    }
}

// initialize configuration
// defaults
$_SS_CONF = array(
    'story_enabled' => 1,
    'delay'         => 400,
    'click'         => 0,
    'num_services'  => 6,
    'button_style'  => 1,
    'replace_ss'    => 1,
    'ss_summary'    => 1,
    'more'          => 1,
    'sharebutton_style' => 1,
    'share_counters'    => 0,
    'cache'         => 0
);

require_once $_CONF['path'].'plugins/socialshare/socialshare.php';
$result = DB_query("SELECT * FROM {$_TABLES['ss_config']}");
while ( $row = DB_fetchArray($result) ) {
    $_SS_CONF[$row['conf_name']] = $row['conf_value'];
}
$_SS_CONF['placement'] = 0; // always use story icons

// reddit removed
$share_count_support = array('facebook','linkedin','pinterest','tumblr');

function plugin_chkVersion_socialshare() {
    global $_SS_CONF;

    return $_SS_CONF['pi_version'];
}

function plugin_geticon_socialshare() {
    global $_CONF;

    $retval = $_CONF['site_admin_url'].'/plugins/socialshare/images/socialshare.png';
    return $retval;
}

function plugin_upgrade_socialshare(){
    global $_CONF, $_TABLES, $_SS_CONF, $_DB_table_prefix;

    if ( @file_exists($_CONF['path'].'plugins/socialshare/upgrade.php') ) {
        require_once $_CONF['path'].'plugins/socialshare/upgrade.php';
        return socialshare_upgrade();
    } else {
        COM_errorLog("SocialShare plugin upgrade function not implemented");
        return 3001;
    }
}

function plugin_getadminoption_socialshare() {
    global $_CONF, $_TABLES, $LANG_SS00;

    if (SEC_hasRights('socialshare.admin')) {
        return array($LANG_SS00['menulabel'], $_CONF['site_admin_url'] . '/plugins/socialshare/index.php', '');
    }
}

function plugin_cclabel_socialshare() {
    global $_CONF, $_SS_CONF, $LANG_SS00;

    if (SEC_hasRights('socialshare.admin') ) {
        return array($LANG_SS00['menulabel'],
        $_CONF['site_admin_url'] . '/plugins/socialshare/index.php',
        $_CONF['site_admin_url'] . '/plugins/socialshare/images/socialshare.png');
    } else {
        return '';
    }
}

/**
*   Get the URL to the configuration help file
*
*   @param  string  $doclang    Document language
*   @return string              URL to document
*/
function plugin_getconfigelementhelp_socialshare($option, $doclang='english')
{
    global $_CONF, $_SS_CONF;

    $doc_path = $_CONF['path_html'] . $_SS_CONF['pi_name'] .
    "/docs/$doclang/config.html";
    if (!is_file($doc_path )) {
        $doclang = 'english';
    }
    $doc_url = $_CONF['site_url'] . '/' . $_SS_CONF['pi_name'] .
    '/docs/' . $doclang . '/config.html';

    if (!empty($option)) {
        $doc_url .= '#desc_' . $option;
    }
    return array($doc_url, 0);
}

function plugin_getheadercode_socialshare()
{
    global $_TABLES, $_CONF, $_SS_CONF, $LANG_SS00;

    static $called = 0;
    $retval = '';
    $adScript = '';
    $firstCP = 0;
    $firstEX = 0;
    $compact_services = '';
    $excluded_services = '';
    $cacheLocal = 0;
    $http_or_https = ($_CONF['cookiesecure'] ? 'https://' : 'http://');

    if ( $called == 1 ) return '';

    $called = 1;
    $outputHandle = outputHandler::getInstance();
    $rc = 1;
    if (isset($_SS_CONF['cache']) && $_SS_CONF['cache']) {
        $cacheFile = $_CONF['path_data'].'socialshare/cache/page.js';
        if ( !@file_exists($cacheFile)) {
            $rc = socialshare_refresh_cache();
        }
        clearstatcache();
        if ( $rc != 0 || @file_exists($cacheFile)) {
            $outputHandle->addLinkScript($_CONF['site_url'].'/data/socialshare/cache/page.js',HEADER_PRIO_HIGH,'text/javascript',true);
            $cacheLocal = 1;
        } else {
            $outputHandle->addLinkScript($http_or_https.'static.addtoany.com/menu/page.js',HEADER_PRIO_HIGH,'text/javascript',true);
        }
    } else {
        $outputHandle->addLinkScript($http_or_https.'static.addtoany.com/menu/page.js',HEADER_PRIO_HIGH,'text/javascript',true);
    }
    $result = DB_query("SELECT code, priority, excluded FROM {$_TABLES['ss_services']}");
    while ( $row = DB_fetchArray($result) ) {
        if ( $row['priority'] ) {
            if ( $firstCP > 0 ) {
                $compact_services .= ',';
            } else {
                $firstCP++;
            }
            $compact_services .= "\"".$row['code']."\"";
        }
        if ( $row['excluded'] ) {
            if ( $firstEX > 0 ) {
                $excluded_services .= ',';
            } else {
                $firstEX++;
            }
            $excluded_services .= "\"".$row['code']."\"";
        }
    }
    $cacheFile = $_CONF['path_html'].'socialshare/cache/page.js';
    if ( isset($_SS_CONF['cache']) && $_SS_CONF['cache'] && @file_exists($cacheFile) ) {
        $static_server = $_CONF['site_url'].'/socialshare/cache';
    } else {
        $static_server = $http_or_https.'static.addtoany.com/menu';
    }

    $adScript = "var a2a_config = a2a_config || {};";
    if ( $cacheLocal ) {
        $adScript .= "
        a2a_config.static_server =\"" . $static_server . "\";";
    }
    $adScript .= "
    a2a_config.delay = ".$_SS_CONF['delay'].";
    a2a_config.onclick = ".($_SS_CONF['click'] ? 1 : 0) .";
    a2a_config.num_services = ". $_SS_CONF['num_services'] . ";
    a2a_config.prioritize = [ ".$compact_services." ];
    a2a_config.exclude_services = [ ".$excluded_services." ];
    ";

    $outputHandle->addScript($adScript);

    return '';
}

function plugin_getheadercss_socialshare() {
    global $_CONF;

    $styles = array();

    if ( @file_exists($_CONF['path_html'].'socialshare/css/style.css') ) {
        $styles[] = $_CONF['path_html'].'socialshare/css/style.css';
    }

    return($styles);
}


function plugin_isOnPageLoad_socialshare()
{
    global $_SS_CONF;

    $script = '';

    if ( $_SS_CONF['story_enabled'] ) {
        $script .= "$(document).ready (function () { $.each(\$item, function( index, value ) { a2a.init('page'); }); });";
    }
    if ( $_SS_CONF['ss_summary'] ) {
        $script .= "$(document).ready (function () { $.each(\$item, function( index, value ) { a2a.init('page'); }); });";
    }
    return $script;
}


function plugin_templatesetvars_socialshare($templatename, &$template)
{
    global $share_count_support, $_CONF, $_SS_CONF, $_USER, $_TABLES, $LANG_SS00;

    if ( isset($_SS_CONF['story_enabled'] ) && $_SS_CONF['story_enabled'] == 0 ) return;

    $buttons[1]['name'] = 'sm-addtoany.png';
    $buttons[1]['width'] = '16';
    $buttons[1]['height'] = '16';

    $buttons[2]['name'] = 'uikit';
    $buttons[2]['name'] = 'uikit';
    $sd = $template->get_var('story_display');

    if ( $templatename == 'article' || $templatename == 'featuredarticle' || $templatename == 'archivearticle') {
        $article_url = $template->get_var('article_url');
        $story_title = $template->get_var('story_title');

        $T = new Template($_CONF['path'] . 'plugins/socialshare/templates/');
        $T->set_file (array ('storyshare' => 'story-share-meta.thtml'));
        $location = 'plugin_icon_vars';

        if ( $article_url != '' ) {
            $T->set_var('url', $article_url );
            $T->set_var('title', htmlspecialchars($story_title) );

            switch ( $_SS_CONF['button_style'] ) {
                case 0 :
                case 1 :
                    $T->set_var('share_button','<i class="tm-meta-icon uk-icon-small uk-icon-hover uk-icon-plus-square" onclick="return false;"></i>');
                    break;
                case 2 :
                    $T->set_var('share_button','<i class="tm-meta-icon uk-icon-small uk-icon-hover uk-icon-share-alt" onclick="return false;"></i>');
                    break;
                case 3 :
                    $T->set_var('share_button','<i class="tm-meta-icon uk-icon-small uk-icon-hover uk-icon-share-alt-square" onclick="return false;"></i>');
                    break;
                case 4 :
                    $T->set_var('share_button','<button onclick="return false;" type="button" class="uk-button uk-button-mini"><i class="uk-icon uk-icon-share-alt"></i>&nbsp;'.$LANG_SS00['share'].'</button>');
                    break;
                case 5 :
                    $T->set_var('share_button','<button onclick="return false;" type="button" class="uk-button uk-button-primary uk-button-mini"><i class="uk-icon uk-icon-share-alt"></i>&nbsp;'.$LANG_SS00['share'].'</button>');
                    break;
                case 6 :
                    $T->set_var('share_button','<button onclick="return false;" type="button" class="uk-button uk-button-success uk-button-mini"><i class="uk-icon uk-icon-share-alt"></i>&nbsp;'.$LANG_SS00['share'].'</button>');
                    break;
                case 7 :
                    $T->set_var('share_button','<button onclick="return false;" class="uk-button uk-button-primary"><i class="uk-icon uk-icon-small uk-icon-share-alt"></i>&nbsp;'.$LANG_SS00['share'].'</button>');
                    break;
                case 8 :
                    $T->set_var('share_button','<button onclick="return false;" class="uk-button uk-button-success"><i class="uk-icon uk-icon-small uk-icon-share-alt"></i>&nbsp;'.$LANG_SS00['share'].'</button>');
                    break;
                default :
                    $T->set_var('share_button','<i class="tm-meta-icon uk-icon-small uk-icon-hover uk-icon-share-square"></i>');
                    break;
            }

            $T->parse('output', 'storyshare');
            $replacementText = $T->finish($T->get_var('output'));
            $template->set_var($location, $replacementText,false,true);

            if ( $_SS_CONF['ss_summary'] == 1 && $sd == 'index' ) {
                $SS = new Template($_CONF['path'] . 'plugins/socialshare/templates/');
                $SS->set_file (array ('storyshare' => 'sharebuttons.thtml'));
                $location = 'plugin_footer_vars';
                $button = array();
                $sql = "SELECT * FROM {$_TABLES['ss_services']} WHERE button=1 ORDER BY name";
                $result = DB_query($sql);
                while ( $row = DB_fetchArray($result) ) {
                    $button[] = array('code' => $row['code'],'priority' => $row['priority'],'excluded' => $row['excluded']);
                }
                if ( count($button) > 0 || $_SS_CONF['more'] == 1 ) {
                    switch ($_SS_CONF['sharebutton_style']) {
                        case 1 : // 32
                            $SS->set_var('share_button_size',32);
                            break;
                        case 2 : // 64
                            $SS->set_var('share_button_size',64);
                            break;
                        case 3 : // 16
                            $SS->set_var('share_button_size',16);
                            break;
                        default :
                            $SS->set_var('share_button_size',32);
                    }
                    $SS->set_block('storyshare', 'ShareButtons', 'sButtons');
                    foreach ($button AS $bt ) {
                        $SS->set_var('button', $bt['code']);
                        if ( $_SS_CONF['share_counters'] == 1 && $bt['priority'] != -1 && $bt['excluded'] != -1 && in_array($bt['code'],$share_count_support) ) {
                            $SS->set_var('share_counters',true);
                        } else {
                            $SS->unset_var('share_counters');
                        }
                        $SS->parse('sButtons', 'ShareButtons',true);
                    }
                    if ( $_SS_CONF['more'] ) {
                        $SS->set_var('more',true);
                        if ( $_SS_CONF['share_counters'] ) {
                            $SS->set_var('more_share_counters',true);
                        } else {
                            $SS->unset_var('more_share_counters');
                        }
                    }
                }
                $SS->parse('output', 'storyshare');
                $replacementText = $SS->finish($SS->get_var('output'));
                $template->set_var('plugin_footer_vars', $replacementText,false,true);
            }
        }
    }
    return;
}

function plugin_social_share_override_socialshare()
{
    global $_SS_CONF,$LANG_SS00;

    if ( $_SS_CONF['replace_ss']) {
        return $LANG_SS00['pi_name'];
    }
    return '';
}

function plugin_social_share_replacement_socialshare($type,$title,$url,$desc)
{
    global $share_count_support, $_TABLES, $_CONF, $_SS_CONF, $LANG_SS00;

    if ( $_SS_CONF['replace_ss'] != 1 ) return '';

    $retval = '';

    $button = array();
    $sql = "SELECT * FROM {$_TABLES['ss_services']} WHERE button=1 ORDER BY name";
    $result = DB_query($sql);
    while ( $row = DB_fetchArray($result) ) {
        $button[] = array('code' => $row['code'],'priority' => $row['priority'],'excluded' => $row['excluded']);
    }
    if ( count($button) > 0 || $_SS_CONF['more'] == 1 ) {

        $T = new Template($_CONF['path'] . 'plugins/socialshare/templates/');
        $T->set_file (array ('buttons' => 'sharebuttons.thtml'));

        switch ($_SS_CONF['sharebutton_style']) {
            case 1 : // 32
                $T->set_var('share_button_size',32);
                break;
            case 2 : // 64
                $T->set_var('share_button_size',64);
                break;
            case 3 : // 16
                $T->set_var('share_button_size',16);
                break;
            default :
                $T->set_var('share_button_size',32);
                break;
        }

        $T->set_block('buttons', 'ShareButtons', 'sButtons');

        $T->set_var(array(
        'heading'   => $LANG_SS00['heading'],
        'url'       => ($url != '' ) ? $url : '',
        'title'     => ($title != '' ) ? $title : '',
        ));

        foreach ($button AS $bt ) {
            $T->set_var('button', $bt['code']);
            if ( $_SS_CONF['share_counters'] == 1 && $bt['priority'] != -1 && $bt['excluded'] != -1 && in_array($bt['code'],$share_count_support) ) {
                $T->set_var('share_counters',true);
            } else {
                $T->unset_var('share_counters');
            }
            $T->parse('sButtons', 'ShareButtons',true);
        }
        if ( $_SS_CONF['more'] ) {
            $T->set_var('more',true);
            if ( $_SS_CONF['share_counters'] ) {
                $T->set_var('more_share_counters',true);
            } else {
                $T->unset_var('more_share_counters');
            }
        }
        $T->parse('output', 'buttons');
        $retval = $T->finish($T->get_var('output'));
    }
    return $retval;
}

function socialshare_refresh_cache() {
    global $_CONF, $_TABLES, $_VARS, $_SS_CONF;

    $success = 0;

    $http_or_https = ($_CONF['cookiesecure'] ? 'https://' : 'http://');

    $contents = ss_getRemoteFile( $http_or_https . 'www.addtoany.com/ext/updater/files_list/' );
    $file_urls = explode( "\n", $contents, 20 );
    $file_urls[] = 'https://static.addtoany.com/menu/svg/icons.21.svg.js';
    $upload_dir = $_CONF['path_html'].'data/socialshare/cache/';
    Filesystem::mkDir($upload_dir);
    if ( count( $file_urls ) > 0 ) {
        for ( $i = 0; $i < count( $file_urls ); $i++ ) {
            // Download files
            $file_url = trim( $file_urls[ $i ] );
            $file_name = substr( strrchr( $file_url, '/' ), 1, 99 );
            $data = ss_getRemoteFile( $file_url );
            if ( $data != '' ) {
                $rc = ss_writeFile($upload_dir.$file_name,'',$data);
                if ( $rc == true ) $success++;
            }
        }
        if ( $success > 0 ) {
            $now = time();
            DB_query("REPLACE INTO {$_TABLES['vars']} (name,value) VALUES('ss_cache_refresh',{$now});");
        }
    }
    return $success;
}


function plugin_runScheduledTask_socialshare()
{
    global $_CONF, $_TABLES, $_SS_CONF, $_VARS;

    $retval = true;

    if ( isset($_SS_CONF['cache']) && $_SS_CONF['cache'] ) {
        if ( !isset($_VARS['ss_cache_refresh'] ) ) $_VARS['ss_cache_refresh'] = 0;
        $now = time();
        $delta = $now - $_VARS['ss_cache_refresh'];
        if ( $delta > 86400 ) {
            Log::write('system',Log::INFO,'SocialShare Plugin: Running cache refresh.');
            $rc = socialshare_refresh_cache();
            if ( $rc == 0 ) {
                Log::write('system',Log::ERROR,'SocialShare Plugin - Unable to write local copy of cache files - check directory permissions.');
                $retval = false;
            }
        }
    }
    return $retval;
}

function ss_getRemoteFile($url)
{
    global $_CONF;

    $http=new http_class;
    $http->timeout=0;
    $http->data_timeout=0;
    $http->debug=0;
    $http->html_debug=0;
    $http->user_agent = 'glFusion/' . GVERSION;

    $error = $http->GetRequestArguments($url,$arguments);
    $error=$http->Open($arguments);
    $error=$http->SendRequest($arguments);
    if ( $error == "" ) {
        $error=$http->ReadWholeReplyBody($body);
        if ( $error == "" || strlen($body) > 0 ) {
            return $body;
        }
    }
    return '';
}

function ss_writeFile($filename, $tempfile, $data)
{
    global $_CONF;

    $retval = false; //assume failure of function
    if (! $tempfile) {
        $tempfile = @tempnam(dirname($filename),basename($filename));
    }

    $ft = fopen($tempfile, 'w');
    if (flock($ft, LOCK_EX)) {
        fwrite($ft, $data);
        flock($ft, LOCK_UN);
        fclose($ft);
        @chmod($tempfile, 0644);
        if (@rename($tempfile, $filename)) {
            $retval=true; // The only path to success
        } else {
            @unlink($tempfile);
        }
    } else {
        Log::write('system',Log::ERROR,'SocialShare - Unable to obtain exclusive lock on temp file: ' . $tempfile);
    }

    return $retval;
}
?>