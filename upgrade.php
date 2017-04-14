<?php
// +--------------------------------------------------------------------------+
// | SocialShare Plugin for glFusion CMS                                      |
// +--------------------------------------------------------------------------+
// | upgrade.php                                                              |
// |                                                                          |
// | Upgrade routines                                                         |
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
    die ('This file can not be used on its own.');
}

// this function is called by lib-plugin whenever the 'Upgrade' option is
// selected in the Plugin Administration screen for this plugin

function socialshare_upgrade()
{
    global $_TABLES, $_CONF, $_SS_CONF, $_DB_table_prefix;

    $currentVersion = DB_getItem($_TABLES['plugins'],'pi_version',"pi_name='socialshare'");

    switch ($currentVersion) {
        case '0.5.0' :
            DB_query("INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES ('ss_summary', '1');",1);

        case '0.5.1' :

        case '1.0.0' :
            DB_query("INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('cache', '0');",1);

        default:
            DB_query("UPDATE {$_TABLES['plugins']} SET pi_version='".$_SS_CONF['pi_version']."',pi_gl_version='".$_SS_CONF['gl_version']."' WHERE pi_name='socialshare' LIMIT 1");
            break;
    }

    CTL_clearCache();

    if ( DB_getItem($_TABLES['plugins'],'pi_version',"pi_name='socialshare'") == $_SS_CONF['pi_version']) {
        return true;
    } else {
        return false;
    }
}
?>