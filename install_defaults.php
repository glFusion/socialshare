<?php
// +--------------------------------------------------------------------------+
// | SocialShare Plugin - glFusion CMS                                        |
// +--------------------------------------------------------------------------+
// | install_defaults.php                                                     |
// |                                                                          |
// | Configuration Defaults                                                   |
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

/**
* Initialize socialshare plugin configuration
*
* Creates the database entries for the configuation if they don't already
* exist.
*
* @return   boolean     true: success; false: an error occurred
*
*/
function plugin_initconfig_socialshare()
{
    $c = config::get_instance();

    $c->add('sg_main', NULL, 'subgroup', 0, 0, NULL, 0, true, 'socialshare');
    $c->add('ss_general', NULL, 'fieldset', 0, 0, NULL, 0, true, 'socialshare');

    $c->add('pubid','','text',0, 0, 0, 10, true,'socialshare');
    $c->add('click',false,'select',0, 0, 1, 20, true,'socialshare');
    $c->add('delay','0','text',0, 0, 0, 30, true,'socialshare');
    $c->add('num_services','10','text',0, 0, 0, 40, true,'socialshare');
    $c->add('placement','1','text',0,0,0,50,true,'socialshare');
    $c->add('button_style','1','text',99, 0, 1, 10, true,'socialshare');
    return true;
}
?>