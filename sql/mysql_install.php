<?php
// +--------------------------------------------------------------------------+
// | SocialShare Plugin                                                       |
// +--------------------------------------------------------------------------+
// | mysql_install.php                                                        |
// |                                                                          |
// | Contains all the SQL necessary to install the AddThis plugin             |
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

$_SQL['config'] = "CREATE TABLE {$_TABLES['ss_config']} (
  conf_name VARCHAR( 128 ) NOT NULL,
  conf_value VARCHAR( 254 ) NOT NULL DEFAULT '',
  PRIMARY KEY (conf_name)
) Engine=MYISAM;
 ";

$_SQL['services'] = "CREATE TABLE {$_TABLES['ss_services']} (
  id int(11) unsigned NOT NULL auto_increment,
  name varchar(128) NOT NULL DEFAULT '',
  priority tinyint(4) NOT NULL DEFAULT '0',
  excluded tinyint(4) NOT NULL DEFAULT '0',
  button tinyint(4) NOT NULL DEFAULT '0',
  code varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (id),
  UNIQUE KEY code (code)
) Engine=MyISAM;
";

?>