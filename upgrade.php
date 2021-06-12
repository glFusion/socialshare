<?php
/**
* glFusion CMS
*
* SocialShare - SocialShare Plugin for glFusion
*
* Plugin Upgrade
*
* @license GNU General Public License version 2 or later
*     http://www.opensource.org/licenses/gpl-license.php
*
*  Copyright (C) 2009-2021 by the following authors:
*   Mark R. Evans   mark AT glfusion DOT org
*
*/

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
            DB_query("INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('cache', '1');",1);
            DB_query("INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('TypePad Post ', 0, 0, 0, 'typepad_post');",1);

        case '1.1.0' :
        case '1.1.1' :
        case '1.2.0' :
            // no changes
        case '1.2.1' :
        case '1.2.2' :
            // need to remove unsupported services

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