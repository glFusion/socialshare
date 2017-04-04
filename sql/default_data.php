<?php
// +--------------------------------------------------------------------------+
// | SocialShare Plugin for glFusion CMS                                      |
// +--------------------------------------------------------------------------+
// | default_data.php                                                         |
// |                                                                          |
// | Data for SocialShare Plugin                                              |
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

$_SQL_DATA['config'] = array(
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('delay', '400');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('click', '0');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('num_services', '10');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('placement', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('button_style', '1');",

    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('replace_ss', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('more', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('sharebutton_style', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('share_counters', '0');",
);

$_SQL_DATA['services'] = array(
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(1, 'AIM Button', 0, 0, 'aim', 'AIM Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(2, 'Amazon Wish List Button', 0, 0, 'amazon_wish_list', 'Amazon Wish List Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(3, 'AOL Mail Button', 0, 0, 'aol_mail', 'AOL Mail Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(4, 'App.net Button', 0, 0, 'app_net', 'App.net Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(5, 'Baidu Button', 0, 0, 'baidu', 'Baidu Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(6, 'Balatarin Button', 0, 0, 'balatarin', 'Balatarin Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(7, 'BibSonomy Button', 0, 0, 'bibsonomy', 'BibSonomy Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(8, 'Bitty Browser Button', 0, 0, 'bitty_browser', 'Bitty Browser Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(9, 'Blinklist Button', 0, 0, 'blinklist', 'Blinklist Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(10, 'Blogger Post Button', 0, 0, 'blogger_post', 'Blogger Post Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(11, 'BlogMarks Button', 0, 0, 'blogmarks', 'BlogMarks Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(12, 'Bookmarks.fr Button', 0, 0, 'bookmarks_fr', 'Bookmarks.fr Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(13, 'Box.net Button', 0, 0, 'box_net', 'Box.net Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(14, 'BuddyMarks Button', 0, 0, 'buddymarks', 'BuddyMarks Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(15, 'Buffer Button', 0, 0, 'buffer', 'Buffer Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(16, 'Care2 News Button', 0, 0, 'care2_news', 'Care2 News Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(17, 'CiteULike Button', 0, 0, 'citeulike', 'CiteULike Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(18, 'Copy Link Button', 0, 0, 'copy_link', 'Copy Link Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(19, 'Delicious Button', 0, 0, 'delicious', 'Delicious Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(20, 'Design Float Button', 0, 0, 'design_float', 'Design Float Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(21, 'Diary.Ru Button', 0, 0, 'diary_ru', 'Diary.Ru Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(22, 'Diaspora Button', 0, 0, 'diaspora', 'Diaspora Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(23, 'Digg Button', 0, 0, 'digg', 'Digg Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(24, 'diHITT Button', 0, 0, 'dihitt', 'diHITT Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(25, 'Diigo Button', 0, 0, 'diigo', 'Diigo Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(26, 'Douban Button', 0, 0, 'douban', 'Douban Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(27, 'Draugiem Button', 0, 0, 'draugiem', 'Draugiem Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(28, 'DZone Button', 0, 0, 'dzone', 'DZone Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(29, 'Email Button', 0, 0, 'email', 'Email Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(30, 'Evernote Button', 0, 0, 'evernote', 'Evernote Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(31, 'Facebook Button', 1, 0, 'facebook', 'Facebook Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(32, 'Facebook Messenger Button', 0, 0, 'facebook_messenger', 'Facebook Messenger Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(33, 'Fark Button', 0, 0, 'fark', 'Fark Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(34, 'Flipboard Button', 0, 0, 'flipboard', 'Flipboard Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(35, 'Folkd Button', 0, 0, 'folkd', 'Folkd Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(36, 'Google+ Button', 1, 0, 'google_plus', 'Google+ Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(37, 'Google Bookmarks Button', 0, 0, 'google_bookmarks', 'Google Bookmarks Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(38, 'Google Classroom Button', 0, 0, 'google_classroom', 'Google Classroom Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(39, 'Google Gmail Button', 0, 0, 'google_gmail', 'Google Gmail Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(40, 'Hacker News Button', 0, 0, 'hacker_news', 'Hacker News Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(41, 'Hatena Button', 0, 0, 'hatena', 'Hatena Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(42, 'Instapaper Button', 0, 0, 'instapaper', 'Instapaper Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(43, 'Jamespot Button', 0, 0, 'jamespot', 'Jamespot Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(44, 'Kakao Button', 0, 0, 'kakao', 'Kakao Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(45, 'Kik Button', 0, 0, 'kik', 'Kik Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(46, 'Kindle It Button', 0, 0, 'kindle_it', 'Kindle It Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(47, 'Known Button', 0, 0, 'known', 'Known Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(48, 'Line Button', 0, 0, 'line', 'Line Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(49, 'LinkedIn Button', 0, 0, 'linkedin', 'LinkedIn Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(50, 'LiveJournal Button', 0, 0, 'livejournal', 'LiveJournal Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(51, 'Mail.Ru Button', 0, 0, 'mail_ru', 'Mail.Ru Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(52, 'Mendeley Button', 0, 0, 'mendeley', 'Mendeley Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(53, 'Meneame Button', 0, 0, 'meneame', 'Meneame Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(54, 'Mixi Button', 0, 0, 'mixi', 'Mixi Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(55, 'MySpace Button', 0, 0, 'myspace', 'MySpace Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(56, 'Netlog Button', 0, 0, 'netlog', 'Netlog Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(57, 'Netvouz Button', 0, 0, 'netvouz', 'Netvouz Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(58, 'NewsVine Button', 0, 0, 'newsvine', 'NewsVine Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(59, 'NUjij Button', 0, 0, 'nujij', 'NUjij Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(60, 'Odnoklassniki Button', 0, 0, 'odnoklassniki', 'Odnoklassniki Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(61, 'Oknotizie Button', 0, 0, 'oknotizie', 'Oknotizie Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(62, 'Outlook.com Button', 0, 0, 'outlook_com', 'Outlook.com Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(63, 'Papaly Button', 0, 0, 'papaly', 'Papaly Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(64, 'Pinboard Button', 0, 0, 'pinboard', 'Pinboard Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(65, 'Pinterest Button', 0, 0, 'pinterest', 'Pinterest Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(66, 'Plurk Button', 0, 0, 'plurk', 'Plurk Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(67, 'Pocket Button', 0, 0, 'pocket', 'Pocket Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(68, 'Polyvore Button', 0, 0, 'polyvore', 'Polyvore Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(69, 'Print Button', 0, 0, 'print', 'Print Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(70, 'PrintFriendly Button', 0, 0, 'printfriendly', 'PrintFriendly Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(71, 'Protopage Bookmarks Button', 0, 0, 'protopage_bookmarks', 'Protopage Bookmarks Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(72, 'Pusha Button', 0, 0, 'pusha', 'Pusha Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(73, 'Qzone Button', 0, 0, 'qzone', 'Qzone Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(74, 'Reddit Button', 1, 0, 'reddit', 'Reddit Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(75, 'Rediff MyPage Button', 0, 0, 'rediff', 'Rediff MyPage Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(76, 'Refind Button', 0, 0, 'refind', 'Refind Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(77, 'Renren Button', 0, 0, 'renren', 'Renren Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(78, 'Segnalo Button', 0, 0, 'segnalo', 'Segnalo Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(79, 'Sina Weibo Button', 0, 0, 'sina_weibo', 'Sina Weibo Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(80, 'SiteJot Button', 0, 0, 'sitejot', 'SiteJot Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(81, 'Skype Button', 0, 0, 'skype', 'Skype Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(82, 'Slashdot Button', 0, 0, 'slashdot', 'Slashdot Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(83, 'SMS Button', 0, 0, 'sms', 'SMS Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(84, 'StumbleUpon Button', 0, 0, 'stumbleupon', 'StumbleUpon Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(85, 'Stumpedia Button', 0, 0, 'stumpedia', 'Stumpedia Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(86, 'Svejo Button', 0, 0, 'svejo', 'Svejo Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(87, 'Symbaloo Feeds Button', 0, 0, 'symbaloo_feeds', 'Symbaloo Feeds Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(88, 'Telegram Button', 0, 0, 'telegram', 'Telegram Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(89, 'Trello Button', 0, 0, 'trello', 'Trello Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(90, 'Tuenti Button', 0, 0, 'tuenti', 'Tuenti Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(91, 'Tumblr Button', 0, 0, 'tumblr', 'Tumblr Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(92, 'Twiddla Button', 0, 0, 'twiddla', 'Twiddla Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(93, 'Twitter Button', 1, 0, 'twitter', 'Twitter Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(94, 'TypePad Post Button', 0, 0, 'typepad_post', 'TypePad Post Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(95, 'Viadeo Button', 0, 0, 'viadeo', 'Viadeo Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(96, 'Viber Button', 0, 0, 'viber', 'Viber Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(97, 'VK Button', 0, 0, 'vk', 'VK Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(98, 'Wanelo Button', 0, 0, 'wanelo', 'Wanelo Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(99, 'WeChat Button', 0, 0, 'wechat', 'WeChat Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(100, 'WhatsApp Button', 0, 0, 'whatsapp', 'WhatsApp Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(101, 'WordPress Button', 0, 0, 'wordpress', 'WordPress Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(102, 'Wykop Button', 0, 0, 'wykop', 'Wykop Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(103, 'XING Button', 0, 0, 'xing', 'XING Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(104, 'Yahoo Bookmarks Button', 0, 0, 'yahoo_bookmarks', 'Yahoo Bookmarks Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(105, 'Yahoo Mail Button', 0, 0, 'yahoo_mail', 'Yahoo Mail Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(106, 'Yahoo Messenger Button', 0, 0, 'yahoo_messenger', 'Yahoo Messenger Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(107, 'Yoolink Button', 0, 0, 'yoolink', 'Yoolink Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(108, 'YouMob Button', 0, 0, 'youmob', 'YouMob Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`id`, `name`, `priority`, `excluded`, `code`, `description`) VALUES(109, 'Yummly Button', 0, 0, 'yummly', 'Yummly Button');",
);

?>