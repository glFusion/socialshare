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
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('placement', '0');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('button_style', '1');",

    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('replace_ss', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('more', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('sharebutton_style', '1');",
    "INSERT INTO {$_TABLES['ss_config']} (`conf_name`, `conf_value`) VALUES('share_counters', '0');",
);

$_SQL_DATA['services'] = array(
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('AIM', 0, 0, 0, 'aim', 'Aol Instant Message Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Amazon Wish List', 0, 0, 0, 'amazon_wish_list', 'Amazon Wish List Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('AOL Mail', 0, 0, 0, 'aol_mail', 'AOL Mail Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Baidu', 0, 0, 0, 'baidu', 'Baidu Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Balatarin', 0, 0, 0, 'balatarin', 'Balatarin Button - A Persian language social and political link-sharing website aimed primarily at Iranian audiences.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('BibSonomy', 0, 0, 0, 'bibsonomy', 'BibSonomy Button - A social bookmarking and publication sharing system.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Bitty Browser', 0, 0, 0, 'bitty_browser', 'Bitty Browser Button - Helps you keep track of your favorite Web stuff by enalbing navigable windows directly within your favorite sites.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Blinklist', 0, 0, 0, 'blinklist', 'Blinklist Button - Blinklist provides information and reviews on web and mobile start-ups.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Blogger Post', 0, 0, 0, 'blogger_post', 'Blogger Post Button - Blogger is a blog-publishing service.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('BlogMarks', 0, 0, 0, 'blogmarks', 'BlogMarks Button - A social bookmarks manager that allows categorization via custom tags.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Bookmarks.fr', 0, 0, 0, 'bookmarks_fr', 'Bookmarks.fr Button - Bookmarks on your site targeted at French users.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Box.net', 0, 0, 0, 'box_net', 'Box.net Button - Share via Box.net');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('BuddyMarks', 0, 0, 0, 'buddymarks', 'BuddyMarks Button - An Online Bookmark Manager.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Buffer', 0, 0, 0, 'buffer', 'Buffer Button - An application for the web designed to manage accounts in social networks, by allowing a user to schedule posts to Twitter, Facebook and other social networks.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Care2 News', 0, 0, 0, 'care2_news', 'Care2 News Button - A social networking site designed to connect activists from around the world with other individuals, organizations and businesses making an impact.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('CiteULike', 0, 0, 0, 'citeulike', 'CiteULike Button - Web service which allows users to save and share citations to academic papers.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Copy Link ', 0, 0, 0, 'copy_link', 'Copy Link Button - Copies the content link to your clipboard.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Delicious ', 0, 0, 0, 'delicious', 'Delicious Button - A social bookmarking site for storing, sharing and discovering web bookmarks.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Design Float ', 0, 0, 0, 'design_float', 'Design Float Button - Web design news and tips.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Diary.Ru ', 0, 0, 0, 'diary_ru', 'Diary.Ru Button - Online diary in RuNet.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Diaspora ', 0, 0, 0, 'diaspora', 'Diaspora Button - A nonprofit distributed social network based on the free Diaspora software.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Digg ', 0, 0, 0, 'digg', 'Digg Button - A news aggregator.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Diigo ', 0, 0, 0, 'diigo', 'Diigo Button - A social bookmarking website that allows signed-up users to bookmark and tag Web pages. Additionally, it allows users to highlight any part of a webpage and attach sticky notes to specific highlights or to a whole page.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Douban ', 0, 0, 0, 'douban', 'Douban Button - A Chinese social networking service website allowing registered users to record information and create content related to film, books, music, recent events and activities in Chinese cities.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Draugiem ', 0, 0, 0, 'draugiem', 'Draugiem Button - A social networking website that is the largest social networking website in Latvia. The website plays an important role in the everyday life of internet users in Latvia, and is frequently used as a communication tool instead of e-mail.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('DZone ', 0, 0, 0, 'dzone', 'DZone Button - Serves technology professionals with the knowledge, tools, and strategies they need to build the future.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Email ', 0, 0, 0, 'email', 'Email Button - Send content link / description via email.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Evernote ', 0, 0, 0, 'evernote', 'Evernote Button - Send content link / description to Evernote.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Facebook ', 1, 0, 1, 'facebook', 'Facebook Button - Post content to Facebook');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Facebook Messenger ', 0, 0, 0, 'facebook_messenger', 'Facebook Messenger Button - Send content link / description via Facebook Messenger.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Fark ', 0, 0, 0, 'fark', 'Fark Button - Share via Fark - Allows members to comment on a daily batch of news articles and other items from various websites.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Flipboard ', 0, 0, 0, 'flipboard', 'Flipboard Button - A news aggregation and social network aggregation service.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Folkd ', 0, 0, 0, 'folkd', 'Folkd Button - A social bookmarking service.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Google+ ', 1, 0, 1, 'google_plus', 'Google+ Button - Share via Google Plus');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Google Bookmarks ', 0, 0, 0, 'google_bookmarks', 'Google Bookmarks Button - Save to Google bookmarks');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Google Classroom ', 0, 0, 0, 'google_classroom', 'Google Classroom Button - Share via Google Classroom');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Google Gmail ', 0, 0, 0, 'google_gmail', 'Google Gmail Button - Send content link / description via Gmail.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Hacker News ', 0, 0, 0, 'hacker_news', 'Hacker News Button - A social news website focusing on computer science and entrepreneurship.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Hatena ', 0, 0, 0, 'hatena', 'Hatena Button - A free blogging service.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Instapaper ', 0, 0, 0, 'instapaper', 'Instapaper Button - a bookmarking service that allows web content to be saved so it can be read later on a different device, such as an e-reader, smartphone, tablet.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Jamespot ', 0, 0, 0, 'jamespot', 'Jamespot Button - A French corporate social network.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Kakao ', 0, 0, 0, 'kakao', 'Kakao Button - A South Korean internet company /server.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Kindle It ', 0, 0, 0, 'kindle_it', 'Kindle It Button - Lets you send web articles to your Kindle app or device for a better reading experience.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Known ', 0, 0, 0, 'known', 'Known Button - A social learning platform');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Line ', 0, 0, 0, 'line', 'Line Button - Free Messaging, Whenever, Wherever');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('LinkedIn ', 1, 0, 1, 'linkedin', 'LinkedIn Button -  a business and employment-oriented social networking service.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('LiveJournal ', 0, 0, 0, 'livejournal', 'LiveJournal Button -  A social networking service where Internet users can keep a blog, journal or diary.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Mail.Ru ', 0, 0, 0, 'mail_ru', 'Mail.Ru Button - Russian Social Networking Site.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Mendeley ', 0, 0, 0, 'mendeley', 'Mendeley Button - A site for sharing research papers, discovering research data and collaborating online.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Meneame ', 0, 0, 0, 'meneame', 'Meneame Button - A Spanish social news website based on community participation, made for users to discover and share content on the Internet, by submitting links, which are voted and commented upon.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Mixi ', 0, 0, 0, 'mixi', 'Mixi Button - An online Japanese social networking service.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('MySpace ', 0, 0, 0, 'myspace', 'MySpace Button - A social networking website offering an interactive, user-submitted network of friends, personal profiles, blogs, groups, photos, music, and videos.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Netvouz ', 0, 0, 0, 'netvouz', 'Netvouz Button - A social bookmarking service that allows you to save your favorite links online and access them from any computer, wherever you are.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('NewsVine ', 0, 0, 0, 'newsvine', 'NewsVine Button - A community-powered, collaborative journalism news website which draws content from its users and syndicated content from mainstream sources such as The Associated Press.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('NUjij ', 0, 0, 0, 'nujij', 'NUjij Button - Dutch social sharing site.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Odnoklassniki ', 0, 0, 0, 'odnoklassniki', 'Odnoklassniki Button - A social network service for classmates and old friends. It is popular in the Russian Federation and former Soviet Republics.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Oknotizie ', 0, 0, 0, 'oknotizie', 'Oknotizie Button - Italian Social Sharing');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Outlook.com ', 0, 0, 0, 'outlook_com', 'Outlook.com Button - Share via Outlook.com');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Papaly ', 0, 0, 0, 'papaly', 'Papaly Button - Personalized Social Bookmarking.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Pinboard ', 0, 0, 0, 'pinboard', 'Pinboard Button - Social bookmarking for introverts.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Pinterest ', 1, 0, 1, 'pinterest', 'Pinterest Button - A free website where users can upload, save, sort, and manage images—known as pins—and other media content.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Plurk ', 0, 0, 0, 'plurk', 'Plurk Button - A free social networking and micro-blogging service that allows users to send updates (otherwise known as plurks) through short messages or links.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Pocket ', 0, 0, 0, 'pocket', 'Pocket Button - Put articles, videos or pretty much anything into Pocket.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Polyvore ', 0, 0, 0, 'polyvore', 'Polyvore Button - A community-powered social commerce website.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Print ', 0, 0, 0, 'print', 'Print Button - Print the content.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('PrintFriendly ', 0, 0, 0, 'printfriendly', 'PrintFriendly Button - Make any web page print friendly.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Protopage Bookmarks ', 0, 0, 0, 'protopage_bookmarks', 'Protopage Bookmarks Button - An RSS reader, virtual desktop, and Internet start page');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Pusha ', 0, 0, 0, 'pusha', 'Pusha Button - A site where members determine the content by posting and push (vote for) links.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Qzone ', 0, 0, 0, 'qzone', 'Qzone Button - A Chinese social networking website.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Reddit ', 1, 0, 1, 'reddit', 'Reddit Button - A social news aggregation, web content rating, and discussion website.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Rediff MyPage ', 0, 0, 0, 'rediff', 'Rediff MyPage Button - An Indian news, information, entertainment and shopping web portal.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Refind ', 0, 0, 0, 'refind', 'Refind Button - Discover, save, and read what’s really worth your attention.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Renren ', 0, 0, 0, 'renren', 'Renren Button - A Chinese social networking service.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Segnalo ', 0, 0, 0, 'segnalo', 'Segnalo Button - An Italian social bookmarking site.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Sina Weibo ', 0, 0, 0, 'sina_weibo', 'Sina Weibo Button - A Chinese microblogging (weibo) website.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('SiteJot ', 0, 0, 0, 'sitejot', 'SiteJot Button - A free online bookarmk manager / bookmark organizer.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Skype ', 0, 0, 0, 'skype', 'Skype Button -  An instant messaging app that provides online text message and video chat services.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Slashdot ', 0, 0, 0, 'slashdot', 'Slashdot Button - A social news website');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('SMS ', 0, 0, 0, 'sms', 'SMS Button - Send content link via SMS.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('StumbleUpon ', 0, 0, 0, 'stumbleupon', 'StumbleUpon Button - a discovery engine (a form of web search engine) that finds and recommends web content to its users. Its features allow users to discover and rate Web pages, photos and videos that are personalized to their tastes and interests using peer-sourcing and social-networking principles.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Stumpedia ', 0, 0, 0, 'stumpedia', 'Stumpedia Button - Search for people by people.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Svejo ', 0, 0, 0, 'svejo', 'Svejo Button - Bulgarian social news site.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Symbaloo Feeds ', 0, 0, 0, 'symbaloo_feeds', 'Symbaloo Feeds Button - Discover and create your own feeds.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Telegram ', 0, 0, 0, 'telegram', 'Telegram Button - Share via Telegram Messaging.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Trello ', 0, 0, 0, 'trello', 'Trello Button - Share to your Trello boards.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Tuenti ', 0, 0, 0, 'tuenti', 'Tuenti Button - Spain based social media.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Tumblr ', 0, 0, 0, 'tumblr', 'Tumblr Button - A microblogging and social networking website.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Twiddla ', 0, 0, 0, 'twiddla', 'Twiddla Button - Team Whiteboarding.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Twitter ', 1, 0, 1, 'twitter', 'Twitter Button - An online news and social networking service where users post and interact with messages, tweets.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Viadeo ', 0, 0, 0, 'viadeo', 'Viadeo Button');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Viber ', 0, 0, 0, 'viber', 'Viber Button -  A free, cross-platform instant messaging and voice over IP (VoIP) application');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('VK ', 0, 0, 0, 'vk', 'VK Button - The largest European online social media and social networking service.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Wanelo ', 0, 0, 0, 'wanelo', 'Wanelo Button - A digital mall where people can discover and buy products on the internet.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('WeChat ', 0, 0, 0, 'wechat', 'WeChat Button - A Chinese social media (instant messaging, commerce and payment services) site.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('WhatsApp ', 0, 0, 0, 'whatsapp', 'WhatsApp Button - A freeware, cross-platform and end-to-end encrypted instant messaging application for smartphones');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('WordPress ', 0, 0, 0, 'wordpress', 'WordPress Button - Share to WordPress.org.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Wykop ', 0, 0, 0, 'wykop', 'Wykop Button - A Polish social networking internet service.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('XING ', 0, 0, 0, 'xing', 'XING Button - A career-oriented social networking site for enabling a small-world network for professionals.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Yahoo Bookmarks ', 0, 0, 0, 'yahoo_bookmarks', 'Yahoo Bookmarks Button - Allows you to store your bookmarks on Yahoo and access them from anywhere with an Internet connection.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Yahoo Mail ', 0, 0, 0, 'yahoo_mail', 'Yahoo Mail Button - Share via Yahoo Mail.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Yahoo Messenger ', 0, 0, 0, 'yahoo_messenger', 'Yahoo Messenger Button - Share via Yahoo Messenger');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Yoolink ', 0, 0, 0, 'yoolink', 'Yoolink Button - A customizable communication platform that enables you to create a corporate social network, to easily manage external communities or to boost your team productivity.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('YouMob ', 0, 0, 0, 'youmob', 'YouMob Button - Live mobs on the web.');",
    "INSERT INTO {$_TABLES['ss_services']} (`name`, `priority`, `excluded`, `button`, `code`, `description`) VALUES('Yummly ', 0, 0, 0, 'yummly', 'Yummly Button - Personalized Recipe Recommendations and Search.');"
);

?>