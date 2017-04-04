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
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('AIM Button', 0, 1, 0, 'aim', 'AIM Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Amazon Wish List Button', 0, 1, 0, 'amazon_wish_list', 'Amazon Wish List Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('AOL Mail Button', 0, 1, 0, 'aol_mail', 'AOL Mail Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('App.net Button', 0, 1, 0, 'app_net', 'App.net Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Baidu Button', 0, 0, 0, 'baidu', 'Baidu Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Balatarin Button', 0, 1, 0, 'balatarin', 'Balatarin Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('BibSonomy Button', 0, 1, 0, 'bibsonomy', 'BibSonomy Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Bitty Browser Button', 0, 1, 0, 'bitty_browser', 'Bitty Browser Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Blinklist Button', 0, 1, 0, 'blinklist', 'Blinklist Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Blogger Post Button', 0, 0, 0, 'blogger_post', 'Blogger Post Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('BlogMarks Button', 0, 0, 0, 'blogmarks', 'BlogMarks Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Bookmarks.fr Button', 0, 1, 0, 'bookmarks_fr', 'Bookmarks.fr Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Box.net Button', 0, 1, 0, 'box_net', 'Box.net Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('BuddyMarks Button', 0, 0, 0, 'buddymarks', 'BuddyMarks Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Buffer Button', 0, 1, 0, 'buffer', 'Buffer Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Care2 News Button', 0, 1, 0, 'care2_news', 'Care2 News Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('CiteULike Button', 0, 0, 0, 'citeulike', 'CiteULike Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Copy Link Button', 0, 0, 0, 'copy_link', 'Copy Link Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Delicious Button', 0, 0, 0, 'delicious', 'Delicious Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Design Float Button', 0, 0, 0, 'design_float', 'Design Float Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Diary.Ru Button', 0, 1, 0, 'diary_ru', 'Diary.Ru Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Diaspora Button', 0, 1, 0, 'diaspora', 'Diaspora Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Digg Button', 0, 1, 0, 'digg', 'Digg Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('diHITT Button', 0, 1, 0, 'dihitt', 'diHITT Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Diigo Button', 0, 1, 0, 'diigo', 'Diigo Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Douban Button', 0, 1, 0, 'douban', 'Douban Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Draugiem Button', 0, 1, 0, 'draugiem', 'Draugiem Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('DZone Button', 0, 1, 0, 'dzone', 'DZone Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Email Button', 0, 0, 0, 'email', 'Email Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Evernote Button', 0, 0, 0, 'evernote', 'Evernote Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Facebook Button', 1, 0, 1, 'facebook', 'Facebook Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Facebook Messenger Button', 0, 0, 0, 'facebook_messenger', 'Facebook Messenger Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Fark Button', 0, 1, 0, 'fark', 'Fark Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Flipboard Button', 0, 0, 0, 'flipboard', 'Flipboard Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Folkd Button', 0, 1, 0, 'folkd', 'Folkd Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Google+ Button', 1, 0, 1, 'google_plus', 'Google+ Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Google Bookmarks Button', 0, 0, 0, 'google_bookmarks', 'Google Bookmarks Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Google Classroom Button', 0, 0, 0, 'google_classroom', 'Google Classroom Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Google Gmail Button', 0, 0, 0, 'google_gmail', 'Google Gmail Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Hacker News Button', 0, 0, 0, 'hacker_news', 'Hacker News Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Hatena Button', 0, 1, 0, 'hatena', 'Hatena Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Instapaper Button', 0, 0, 0, 'instapaper', 'Instapaper Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Jamespot Button', 0, 1, 0, 'jamespot', 'Jamespot Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Kakao Button', 0, 0, 0, 'kakao', 'Kakao Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Kik Button', 0, 1, 0, 'kik', 'Kik Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Kindle It Button', 0, 0, 0, 'kindle_it', 'Kindle It Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Known Button', 0, 0, 0, 'known', 'Known Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Line Button', 0, 1, 0, 'line', 'Line Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('LinkedIn Button', 1, 0, 1, 'linkedin', 'LinkedIn Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('LiveJournal Button', 0, 0, 0, 'livejournal', 'LiveJournal Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Mail.Ru Button', 0, 1, 0, 'mail_ru', 'Mail.Ru Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Mendeley Button', 0, 1, 0, 'mendeley', 'Mendeley Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Meneame Button', 0, 1, 0, 'meneame', 'Meneame Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Mixi Button', 0, 1, 0, 'mixi', 'Mixi Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('MySpace Button', 0, 1, 0, 'myspace', 'MySpace Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Netlog Button', 0, 1, 0, 'netlog', 'Netlog Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Netvouz Button', 0, 1, 0, 'netvouz', 'Netvouz Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('NewsVine Button', 0, 1, 0, 'newsvine', 'NewsVine Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('NUjij Button', 0, 1, 0, 'nujij', 'NUjij Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Odnoklassniki Button', 0, 1, 0, 'odnoklassniki', 'Odnoklassniki Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Oknotizie Button', 0, 1, 0, 'oknotizie', 'Oknotizie Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Outlook.com Button', 0, 0, 0, 'outlook_com', 'Outlook.com Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Papaly Button', 0, 1, 0, 'papaly', 'Papaly Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Pinboard Button', 0, 0, 0, 'pinboard', 'Pinboard Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Pinterest Button', 1, 0, 1, 'pinterest', 'Pinterest Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Plurk Button', 0, 0, 0, 'plurk', 'Plurk Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Pocket Button', 0, 0, 0, 'pocket', 'Pocket Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Polyvore Button', 0, 1, 0, 'polyvore', 'Polyvore Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Print Button', 0, 0, 0, 'print', 'Print Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('PrintFriendly Button', 0, 0, 0, 'printfriendly', 'PrintFriendly Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Protopage Bookmarks Button', 0, 1, 0, 'protopage_bookmarks', 'Protopage Bookmarks Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Pusha Button', 0, 0, 0, 'pusha', 'Pusha Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Qzone Button', 0, 0, 0, 'qzone', 'Qzone Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Reddit Button', 1, 0, 1, 'reddit', 'Reddit Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Rediff MyPage Button', 0, 0, 0, 'rediff', 'Rediff MyPage Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Refind Button', 0, 0, 0, 'refind', 'Refind Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Renren Button', 0, 0, 0, 'renren', 'Renren Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Segnalo Button', 0, 1, 0, 'segnalo', 'Segnalo Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Sina Weibo Button', 0, 1, 0, 'sina_weibo', 'Sina Weibo Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('SiteJot Button', 0, 0, 0, 'sitejot', 'SiteJot Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Skype Button', 0, 1, 0, 'skype', 'Skype Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Slashdot Button', 0, 0, 0, 'slashdot', 'Slashdot Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('SMS Button', 0, 0, 0, 'sms', 'SMS Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('StumbleUpon Button', 0, 0, 0, 'stumbleupon', 'StumbleUpon Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Stumpedia Button', 0, 0, 0, 'stumpedia', 'Stumpedia Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Svejo Button', 0, 1, 0, 'svejo', 'Svejo Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Symbaloo Feeds Button', 0, 0, 0, 'symbaloo_feeds', 'Symbaloo Feeds Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Telegram Button', 0, 0, 0, 'telegram', 'Telegram Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Trello Button', 0, 0, 0, 'trello', 'Trello Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Tuenti Button', 0, 1, 0, 'tuenti', 'Tuenti Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Tumblr Button', 0, 0, 0, 'tumblr', 'Tumblr Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Twiddla Button', 0, 0, 0, 'twiddla', 'Twiddla Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Twitter Button', 1, 0, 0, 'twitter', 'Twitter Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('TypePad Post Button', 0, 0, 0, 'typepad_post', 'TypePad Post Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Viadeo Button', 0, 1, 0, 'viadeo', 'Viadeo Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Viber Button', 0, 1, 0, 'viber', 'Viber Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('VK Button', 0, 1, 0, 'vk', 'VK Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Wanelo Button', 0, 1, 0, 'wanelo', 'Wanelo Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('WeChat Button', 0, 0, 0, 'wechat', 'WeChat Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('WhatsApp Button', 0, 0, 0, 'whatsapp', 'WhatsApp Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('WordPress Button', 0, 1, 0, 'wordpress', 'WordPress Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Wykop Button', 0, 1, 0, 'wykop', 'Wykop Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('XING Button', 0, 1, 0, 'xing', 'XING Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Yahoo Bookmarks Button', 0, 0, 0, 'yahoo_bookmarks', 'Yahoo Bookmarks Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Yahoo Mail Button', 0, 0, 0, 'yahoo_mail', 'Yahoo Mail Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Yahoo Messenger Button', 0, 0, 0, 'yahoo_messenger', 'Yahoo Messenger Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Yoolink Button', 0, 0, 0, 'yoolink', 'Yoolink Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('YouMob Button', 0, 1, 0, 'youmob', 'YouMob Button');",
"INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Yummly Button', 0, 1, 0, 'yummly', 'Yummly Button');"

);

?>