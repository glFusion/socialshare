<?php
/**
* glFusion CMS
*
* Testimonials - Testimonials Plugin for glFusion
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

$_SS_CONF['pi_name']           = 'socialshare';
$_SS_CONF['pi_display_name']   = 'SocialShare';
$_SS_CONF['pi_version']        = '1.3.0';
$_SS_CONF['gl_version']        = '2.0.0';
$_SS_CONF['pi_url']            = 'https://www.glfusion.org';

$_TABLES['ss_config']       = $_DB_table_prefix . 'ss_config';
$_TABLES['ss_services']     = $_DB_table_prefix . 'ss_services';
?>