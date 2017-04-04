<?php
// +--------------------------------------------------------------------------+
// | SocialShare Plugin for glFusion CMS                                      |
// +--------------------------------------------------------------------------+
// | functions.inc                                                            |
// |                                                                          |
// | Implement the glFusion Plugin API                                        |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2009-2017 by the following authors:                        |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own!');
}

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

$_SS_CONF = array();
require_once $_CONF['path'].'plugins/socialshare/socialshare.php';
$result = DB_query("SELECT * FROM {$_TABLES['ss_config']}");
while ( $row = DB_fetchArray($result) ) {
    $_SS_CONF[$row['conf_name']] = $row['conf_value'];
}

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

    $retval = '';
    $adScript = '';
    $firstCP = 0;
    $firstEX = 0;
    $compact_services = '';
    $excluded_services = '';

    $outputHandle = outputHandler::getInstance();
    $outputHandle->addLinkScript('//static.addtoany.com/menu/page.js',HEADER_PRIO_HIGH);

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

    $adScript = "
    var a2a_config = a2a_config || {};
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
    $script = "$(document).ready (function () { $.each(\$item, function( index, value ) { a2a.init('page'); }); });";
    return $script;
}


function plugin_templatesetvars_socialshare($templatename, &$template)
{
    global $_CONF, $_SS_CONF, $_USER, $_TABLES, $LANG_SS00;

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
        switch ( $_SS_CONF['placement'] ) {
            case 0 :
                $T->set_file (array ('storyshare' => 'story-share-meta.thtml'));
                $location = 'plugin_icon_vars';
                break;
            case 1 :
                if ( $sd != 'index' ) return;
                if ( $_SS_CONF['button_style'] == 7 ) {
                    $T->set_file (array ('storyshare' => 'sharebuttons.thtml'));
                } else {
                    $T->set_file (array ('storyshare' => 'story-share-body.thtml'));
                }
                $location = 'plugin_footer_vars';
                break;
            default :
                $T->set_file (array ('storyshare' => 'story-share-meta.thtml'));
                $location = 'plugin_icon_vars';
                break;
        }

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
                    $T->set_var('share_button','<button onclick="return false;" type="button" class="uk-button uk-button-primary uk-button-mini"><i class="uk-icon uk-icon-share"></i>&nbsp;'.$LANG_SS00['share'].'</button>');
                    break;
                case 4 :
                    $T->set_var('share_button','<button onclick="return false;" class="uk-button uk-button-primary"><i class="uk-icon uk-icon-small uk-icon-share-alt"></i>&nbsp;'.$LANG_SS00['share'].'</button>');
                    break;
                case 5 :
                    $T->set_var('share_button','<button onclick="return false;" type="button" class="uk-button uk-button-success uk-button-mini"><i class="uk-icon uk-icon-share"></i>&nbsp;'.$LANG_SS00['share'].'</button>');
                    break;
                case 6 :
                    $T->set_var('share_button','<button onclick="return false;" class="uk-button uk-button-success"><i class="uk-icon uk-icon-small uk-icon-share-alt"></i>&nbsp;'.$LANG_SS00['share'].'</button>');
                    break;
                case 7 :
                    $button = array();
                    $sql = "SELECT * FROM {$_TABLES['ss_services']} WHERE button=1 ORDER BY name";
                    $result = DB_query($sql);
                    while ( $row = DB_fetchArray($result) ) {
                        $button[] = array('code' => $row['code'],'priority' => $row['priority'],'excluded' => $row['excluded']);
                    }
                    if ( count($button) > 0 || $_SS_CONF['more'] == 1 ) {
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
                        }
                        $T->set_block('storyshare', 'ShareButtons', 'sButtons');
                        foreach ($button AS $bt ) {
                            $T->set_var('button', $bt['code']);
                            if ( $_SS_CONF['share_counters'] == 1 && $bt['priority'] != -1 && $bt['excluded'] != -1 ) {
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
                    }
                    break;
                default :
                    $T->set_var('share_button','<i class="tm-meta-icon uk-icon-small uk-icon-hover uk-icon-share-square"></i>');
                    break;
            }

            $T->parse('output', 'storyshare');
            $replacementText = $T->finish($T->get_var('output'));

            $template->set_var($location, $replacementText,false,true);
        }
    }
    return;
}

function plugin_social_share_override_socialshare()
{
    global $_SS_CONF;

    return ($_SS_CONF['replace_ss']);
}

function plugin_social_share_replacement_socialshare($type,$title,$url,$desc)
{
    global $_TABLES, $_CONF, $_SS_CONF, $LANG_SS00;

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
        }

        $T->set_block('buttons', 'ShareButtons', 'sButtons');

        $T->set_var(array(
            'heading'   => $LANG_SS00['heading'],
            'url'       => ($url != '' ) ? $url : '',
            'title'     => ($title != '' ) ? $title : '',
        ));

        foreach ($button AS $bt ) {
            $T->set_var('button', $bt['code']);
            if ( $_SS_CONF['share_counters'] == 1 && $bt['priority'] != -1 && $bt['excluded'] != -1 ) {
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
?>