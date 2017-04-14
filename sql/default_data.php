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
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('story_enabled', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('delay', '400');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('click', '0');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('num_services', '6');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('button_style', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('replace_ss', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('ss_summary', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('more', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('sharebutton_style', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('share_counters', '0');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('cache', '1');",
);

$_SQL_DATA['services'] = array(
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('AIM', 0, 0, 0, 'aim');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Amazon Wish List', 0, 0, 0, 'amazon_wish_list');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('AOL Mail', 0, 0, 0, 'aol_mail');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Baidu', 0, 0, 0, 'baidu');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Balatarin', 0, 0, 0, 'balatarin');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('BibSonomy', 0, 0, 0, 'bibsonomy');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Bitty Browser', 0, 0, 0, 'bitty_browser');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Blinklist', 0, 0, 0, 'blinklist');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Blogger Post', 0, 0, 0, 'blogger_post');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('BlogMarks', 0, 0, 0, 'blogmarks');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Bookmarks.fr', 0, 0, 0, 'bookmarks_fr');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Box.net', 0, 0, 0, 'box_net');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('BuddyMarks', 0, 0, 0, 'buddymarks');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Buffer', 0, 0, 0, 'buffer');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Care2 News', 0, 0, 0, 'care2_news');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('CiteULike', 0, 0, 0, 'citeulike');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Copy Link ', 0, 0, 0, 'copy_link');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Delicious ', 0, 0, 0, 'delicious');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Design Float ', 0, 0, 0, 'design_float');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Diary.Ru ', 0, 0, 0, 'diary_ru');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Diaspora ', 0, 0, 0, 'diaspora');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Digg ', 0, 0, 0, 'digg');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Diigo ', 0, 0, 0, 'diigo');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Douban ', 0, 0, 0, 'douban');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Draugiem ', 0, 0, 0, 'draugiem');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('DZone ', 0, 0, 0, 'dzone');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Email ', 0, 0, 0, 'email');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Evernote ', 0, 0, 0, 'evernote');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Facebook ', 1, 0, 1, 'facebook');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Facebook Messenger ', 0, 0, 0, 'facebook_messenger');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Fark ', 0, 0, 0, 'fark');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Flipboard ', 0, 0, 0, 'flipboard');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Folkd ', 0, 0, 0, 'folkd');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Google+ ', 1, 0, 1, 'google_plus');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Google Bookmarks ', 0, 0, 0, 'google_bookmarks');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Google Classroom ', 0, 0, 0, 'google_classroom');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Google Gmail ', 0, 0, 0, 'google_gmail');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Hacker News ', 0, 0, 0, 'hacker_news');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Hatena ', 0, 0, 0, 'hatena');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Instapaper ', 0, 0, 0, 'instapaper');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Jamespot ', 0, 0, 0, 'jamespot');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Kakao ', 0, 0, 0, 'kakao');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Kindle It ', 0, 0, 0, 'kindle_it');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Known ', 0, 0, 0, 'known');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Line ', 0, 0, 0, 'line');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('LinkedIn ', 1, 0, 1, 'linkedin');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('LiveJournal ', 0, 0, 0, 'livejournal');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Mail.Ru ', 0, 0, 0, 'mail_ru');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Mendeley ', 0, 0, 0, 'mendeley');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Meneame ', 0, 0, 0, 'meneame');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Mixi ', 0, 0, 0, 'mixi');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('MySpace ', 0, 0, 0, 'myspace');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Netvouz ', 0, 0, 0, 'netvouz');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('NewsVine ', 0, 0, 0, 'newsvine');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('NUjij ', 0, 0, 0, 'nujij');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Odnoklassniki ', 0, 0, 0, 'odnoklassniki');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Oknotizie ', 0, 0, 0, 'oknotizie');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Outlook.com ', 0, 0, 0, 'outlook_com');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Papaly ', 0, 0, 0, 'papaly');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Pinboard ', 0, 0, 0, 'pinboard');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Pinterest ', 1, 0, 1, 'pinterest');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Plurk ', 0, 0, 0, 'plurk');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Pocket ', 0, 0, 0, 'pocket');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Polyvore ', 0, 0, 0, 'polyvore');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Print ', 0, 0, 0, 'print');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('PrintFriendly ', 0, 0, 0, 'printfriendly');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Protopage Bookmarks ', 0, 0, 0, 'protopage_bookmarks');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Pusha ', 0, 0, 0, 'pusha');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Qzone ', 0, 0, 0, 'qzone');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Reddit ', 1, 0, 1, 'reddit');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Rediff MyPage ', 0, 0, 0, 'rediff');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Refind ', 0, 0, 0, 'refind');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Renren ', 0, 0, 0, 'renren');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Segnalo ', 0, 0, 0, 'segnalo');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Sina Weibo ', 0, 0, 0, 'sina_weibo');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('SiteJot ', 0, 0, 0, 'sitejot');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Skype ', 0, 0, 0, 'skype');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Slashdot ', 0, 0, 0, 'slashdot');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('SMS ', 0, 0, 0, 'sms');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('StumbleUpon ', 0, 0, 0, 'stumbleupon');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Stumpedia ', 0, 0, 0, 'stumpedia');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Svejo ', 0, 0, 0, 'svejo');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Symbaloo Feeds ', 0, 0, 0, 'symbaloo_feeds');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Telegram ', 0, 0, 0, 'telegram');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Trello ', 0, 0, 0, 'trello');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Tuenti ', 0, 0, 0, 'tuenti');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Tumblr ', 0, 0, 0, 'tumblr');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Twiddla ', 0, 0, 0, 'twiddla');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Twitter ', 1, 0, 1, 'twitter');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Viadeo ', 0, 0, 0, 'viadeo');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Viber ', 0, 0, 0, 'viber');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('VK ', 0, 0, 0, 'vk');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Wanelo ', 0, 0, 0, 'wanelo');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('WeChat ', 0, 0, 0, 'wechat');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('WhatsApp ', 0, 0, 0, 'whatsapp');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('WordPress ', 0, 0, 0, 'wordpress');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Wykop ', 0, 0, 0, 'wykop');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('XING ', 0, 0, 0, 'xing');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Yahoo Bookmarks ', 0, 0, 0, 'yahoo_bookmarks');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Yahoo Mail ', 0, 0, 0, 'yahoo_mail');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Yahoo Messenger ', 0, 0, 0, 'yahoo_messenger');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Yoolink ', 0, 0, 0, 'yoolink');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('YouMob ', 0, 0, 0, 'youmob');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`) VALUES('Yummly ', 0, 0, 0, 'yummly');"
);

?>