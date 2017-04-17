<?php
// +--------------------------------------------------------------------------+
// | SocialShare Plugin for glFusion CMS                                      |
// +--------------------------------------------------------------------------+
// | index.php                                                                |
// |                                                                          |
// | Administrative Interface                                                 |
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

require_once '../../../lib-common.php';
require_once '../../auth.inc.php';

USES_lib_admin();

// Only let admin users access this page
if (!SEC_hasRights('socialshare.admin')) {
    // Someone is trying to illegally access this page
    COM_errorLog("Someone tried to access the SocialShare Administration page without the necessary permissions.  User id: {$_USER['uid']}, Username: {$_USER['username']}, IP: " . $_SERVER['REMOTE_ADDR'],1);
    $display  = COM_siteHeader();
    $display .= COM_startBlock($LANG27[12]);
    $display .= $LANG27[12];
    $display .= COM_endBlock();
    $display .= COM_siteFooter(true);
    echo $display;
    exit;
}

$display = '';
$mode = '';

if ( isset($_POST['cancel'] ) ) COM_refresh($_CONF['site_admin_url']);

if (isset ($_POST['mode'])) {
    $mode = COM_applyFilter($_POST['mode']);
} else if (isset ($_GET['mode'])) {
    $mode = COM_applyFilter($_GET['mode']);
} else {
    $mode = '';
}

function _services_edit()
{
    global $_CONF, $_SS_CONF, $_TABLES, $LANG_SS_SERVICES;

    $class = 0;

    $T = new Template($_CONF['path'] . 'plugins/socialshare/templates/admin/');
    $T->set_file (array ('services' => 'services.thtml'));


    $T->set_block('services', 'ServicesRow', 'sRow');

    $sql = "SELECT * FROM {$_TABLES['ss_services']} ORDER BY name";
    $result = DB_query($sql);
    while ( $row = DB_fetchArray($result) ) {
        $priorityDisabled = '';
        $excludedDisabled = '';
        $priorityChecked = '';
        $excludedChecked = '';

        if ( $row['priority'] == 1 ) {
            $priorityChecked = ' checked="checked" ';
        } elseif ( $row['priority'] == -1 ) {
            $priorityChecked = '';
            $priorityDisabled = ' disabled="disabled" ';
        }
        if ( $row['excluded'] == 1 ) {
            $excludedChecked = ' checked="checked" ';
        } elseif ( $row['excluded'] == -1 ) {
            $excludedChecked = '';
            $excludedDisabled = ' disabled="disabled" ';
        }
        if ( $row['button'] == 1 ) {
            $buttonChecked = ' checked="checked" ';
        } else {
            $buttonChecked = '';
        }

        $T->set_var(array(
            'id'          => $row['id'],
            'name'        => $row['name'],
            'description' => isset($LANG_SS_SERVICES[$row['code']]) ? $LANG_SS_SERVICES[$row['code']] : '',
            'priority_checked' => $priorityChecked,
            'excluded_checked' => $excludedChecked,
            'button_checked'   => $buttonChecked,
            'priority_disabled' => $priorityDisabled,
            'excluded_disabled' => $excludedDisabled,
        ));

        $T->parse('sRow', 'ServicesRow',true);
    }
    $T->parse('all_services', 'services');
    return $T->finish($T->get_var('all_services'));
}


function _ss_saveSettings()
{
    global $_CONF, $_SS_CONF, $_TABLES;

    $settings = array();

    // story share options
    $settings['story_enabled'] = isset($_POST['story_enabled']) ? 1 : 0;
    if ( $settings['story_enabled'] == 1 ) {
        $settings['button_style']   = isset($_POST['button_style']) ? COM_applyFilter($_POST['button_style'],true) : 1;
        $settings['click'] = isset($_POST['click']) ? COM_applyFilter($_POST['click'],true) : 0;
        $settings['delay'] = isset($_POST['delay']) ? COM_applyFilter($_POST['delay'],true) : 400;
        $settings['num_services'] = isset($_POST['num_services']) ? COM_applyFilter($_POST['num_services'],true) : 10;
        $settings['cache'] = isset($_POST['cache']) ? 1 : 0;
    }
    // social share options
    $settings['replace_ss'] = isset($_POST['replace_ss']) ? 1 : 0;
    if ( $settings['replace_ss'] == 1 ) {
        $settings['more'] = isset($_POST['more']) ? COM_applyFilter($_POST['more'],true) : 1;
        $settings['sharebutton_style']   = isset($_POST['sharebutton_style']) ? COM_applyFilter($_POST['sharebutton_style'],true) : 1;
        $settings['share_counters'] = isset($_POST['share_counters']) ? COM_applyFilter($_POST['share_counters'],true) : 0;
        $settings['ss_summary'] = isset($_POST['ss_summary']) ? COM_applyFilter($_POST['ss_summary'],true) : 1;
    }
    foreach ($settings AS $name => $value ) {
        DB_query("UPDATE {$_TABLES['ss_config']} SET conf_value = '".(int) $settings[$name]."' WHERE conf_name='".$name."'");
        $_SS_CONF[$name] = $settings[$name];
    }

    $priority = array();
    $priority = $_POST['priority'];

    DB_query("UPDATE {$_TABLES['ss_services']} SET priority=0 WHERE priority != -1");
    if ( is_array($priority) && count($priority) > 0 ) {
        foreach ( $priority AS $id => $value ) {
            DB_query("UPDATE {$_TABLES['ss_services']} SET priority=1 WHERE id=".(int) $id);
        }
    }

    $excluded = array();
    $excluded = (isset($_POST['excluded']) ? $_POST['excluded'] : 0);

    DB_query("UPDATE {$_TABLES['ss_services']} SET excluded=0 WHERE excluded != -1");
    if ( is_array($excluded) && count($excluded) > 0 ) {
        foreach ( $excluded AS $id => $value ) {
            DB_query("UPDATE {$_TABLES['ss_services']} SET excluded=1 WHERE id=".(int) $id);
        }
    }

    $sbuttons = array();
    $sbuttons = (isset($_POST['sbutton']) ? $_POST['sbutton'] : 0);

    DB_query("UPDATE {$_TABLES['ss_services']} SET button=0");
    if ( is_array($sbuttons) && count($sbuttons) > 0 ) {
        foreach ( $sbuttons AS $id => $value ) {
            DB_query("UPDATE {$_TABLES['ss_services']} SET button=1 WHERE id=".(int) $id);
        }
    }

    CTL_clearCache();

    return 1;
}

$rc = 0;

if ( isset($_POST['save'])) {
    $rc = _ss_saveSettings();
}

$T = new Template($_CONF['path'] . 'plugins/socialshare/templates/admin/');
$T->set_file (array ('admin' => 'admin.thtml'));

// configuration data
$T->set_var('s_0_selected', $_SS_CONF['story_enabled'] == 0 ? ' selected="selected" ' : '');
$T->set_var('s_1_selected', $_SS_CONF['story_enabled'] == 1 ? ' selected="selected" ' : '');

$T->set_var('s_checked', $_SS_CONF['story_enabled'] == 1 ? ' checked="checked" ' : '');

$T->set_var('c_0_selected', $_SS_CONF['click'] == 0 ? ' selected="selected" ' : '');
$T->set_var('c_1_selected', $_SS_CONF['click'] == 1 ? ' selected="selected" ' : '');
$T->set_var('delay',$_SS_CONF['delay']);
$T->set_var('num_services',$_SS_CONF['num_services']);
$T->set_var('smd_0_selected', $_SS_CONF['placement'] == 0 ? ' selected="selected" ' : '');
$T->set_var('smd_1_selected', $_SS_CONF['placement'] == 1 ? ' selected="selected" ' : '');
$T->set_var('rss_0_selected', $_SS_CONF['replace_ss'] == 0 ? ' selected="selected" ' : '');
$T->set_var('rss_1_selected', $_SS_CONF['replace_ss'] == 1 ? ' selected="selected" ' : '');
$T->set_var('rss_checked', $_SS_CONF['replace_ss'] == 1 ? ' checked="checked" ' : '');
$T->set_var('m_0_selected', $_SS_CONF['more'] == 0 ? ' selected="selected" ' : '');
$T->set_var('m_1_selected', $_SS_CONF['more'] == 1 ? ' selected="selected" ' : '');
$T->set_var('button'.$_SS_CONF['button_style'].'_checked', ' checked="checked" ');
$T->set_var('sharebutton'.$_SS_CONF['sharebutton_style'].'_checked',' checked="checked" ');
$T->set_var('sc_0_selected', $_SS_CONF['share_counters'] == 0 ? ' selected="selected" ' : '');
$T->set_var('sc_1_selected', $_SS_CONF['share_counters'] == 1 ? ' selected="selected" ' : '');
$T->set_var('sss_0_selected', $_SS_CONF['ss_summary'] == 0 ? ' selected="selected" ' : '');
$T->set_var('sss_1_selected', $_SS_CONF['ss_summary'] == 1 ? ' selected="selected" ' : '');
$T->set_var('cache_checked', $_SS_CONF['cache'] == 1 ? ' checked="checked" ' : '');

$T->set_var(array(
    'services'  => _services_edit(),
    'lang_save' => $LANG_SS00['save'],
));

$T->parse('output', 'admin');

$page = '';

$menu_arr = array(
        array('url'  => $_CONF['site_admin_url'],
              'text' => $LANG_ADMIN['admin_home']),
);
$page  .= COM_startBlock($LANG_SS00['menulabel'],'', COM_getBlockTemplate('_admin_block', 'header'));
$page  .= ADMIN_createMenu($menu_arr, $LANG_SS00['admin_desc'],
                            $_CONF['site_admin_url'] . '/plugins/socialshare/images/socialshare.png');

if ( $rc == 1 ) {
    $page .= COM_showMessageText($LANG_SS00['saved'],'SocialShare');
}

$page .= $T->finish($T->get_var('output'));

$page .= COM_endBlock(COM_getBlockTemplate('_admin_block', 'footer'));

$display = COM_siteHeader('menu');
$display .= $page;
$display .= COM_siteFooter();
echo $display;
exit;
?>