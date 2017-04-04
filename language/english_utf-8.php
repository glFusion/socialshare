<?php
// +--------------------------------------------------------------------------+
// | SocialShare Plugin - glFusion CMS                                        |
// +--------------------------------------------------------------------------+
// | english_utf-8.php                                                        |
// |                                                                          |
// | English language file (UTF-8)                                            |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2009-2015 by the following authors:                        |
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
    die ('This file can not be used on its own.');
}

$LANG_SS00 = array (
    'menulabel'         => 'SocialShare',
    'plugin'            => 'socialshare',
    'save'              => 'Save',
    'cancel'            => 'Cancel',
    'reset'             => 'Reset',
    'general_settings'  => 'General Settings',
    'services'          => 'Services',
    'admin_desc'        => 'Help your users share your content everywhere. Generate traffic back to your site and increase your site\'s search engine ranking. It only takes seconds to get AddThis, and it\'s free! ',
    'saved'             => 'SocialShare Settings were successfully saved.',
    'username'          => 'Username',
    'username_help'     => 'Your AddThis username.  If you have an account with http://addthis.com you can receive statistics on the social networking activity on your site.',
    'click_required'    => 'Click Required',
    'click_required_help' => 'If true, the compact menu will never appear upon mousing over the regular button. Instead, it will be revealed upon clicking the button.',
    'cobranding'        => 'Co-Branding',
    'cobranding_help'   => 'Additional branding message to be rendered in the upper-right-hand corner of the menus. Should be less than 15 characters in most cases to render properly.',
    'button_style'      => 'Button Style',
    'placement'         => 'Placement',
    'story_icons'       => 'Story Icons',
    'story_meta'        => 'Story Meta Data',
    'story_body'        => 'Story Body',
    'story_footer'      => 'Story Footer',
'services_help' => 'Prioritized services will appear on the initial pop-up menu. Excluded services will be removed from the pop-up menu and the more section.',
    'expanded_services_help' => 'Services to use in the expanded menu.  This is the menu that displays when the user selects the <strong>more</strong> entry from the compact menu.',
    'enabled'           => 'Enabled',
    'name'              => 'Name',
    'category'          => 'Category',
    'description'       => 'Description',
    'check_all'         => 'Check All',
    'uncheck_all'       => 'Uncheck All',
    'share'             => 'Share',
    'more'              => 'more',
);


// Localization of the Admin Configuration UI
$LANG_configsections['socialshare'] = array(
    'label'             => 'SocialShare',
    'title'             => 'SocialShare Configuration'
);
$LANG_confignames['socialshare'] = array(
    'pubid'             => 'AddThis Published ID',
    'click'          => 'Click Required',
    'disable'        => 'Disable Compact Menu',
    'placement'         => 'Button Location',
    'delay'          => 'Hover Delay',
);
$LANG_configsubgroups['socialshare'] = array(
    'sg_main'               => 'Configuration Settings'
);
$LANG_fs['socialshare'] = array(
    'ss_general'                 => 'General Settings',
);
// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['socialshare'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => TRUE, 'False' => FALSE),
    2 => array('Up' => 1, 'Down' => -1),
    3 => array('Story Icons' => 1, 'Story Meta Data'=> 2,'Story Body' => 3,'Story Footer' => 4),
);

?>