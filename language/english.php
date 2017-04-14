<?php
// +--------------------------------------------------------------------------+
// | SocialShare Plugin - glFusion CMS                                        |
// +--------------------------------------------------------------------------+
// | english.php                                                              |
// |                                                                          |
// | English language file                                                    |
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

$LANG_SS00 = array (
    'admin_desc'            => 'The SocialShare plugin allows you to add sharing options to a story and replace the standard glFusion Social Sharing buttons with a more flexible and feature rich option.',
    'button_style'          => 'Button Style',
    'cancel'                => 'Cancel',
    'cache_prompt'          => 'Cache Share Service scripts locally',
    'cache_help'            => 'Cache AddToAny remote scripts locally with daily cache updates',
    'click_help'            => 'Require user to click share button to open menu',
    'click_prompt'          => 'Display Menu on Click',
    'description'           => 'Description',
    'excluded'              => 'Excluded',
    'false'                 => 'False',
    'heading'               => 'Share It',
    'hover_help'            => 'If Display Menu on Click is False - the # of milliseconds delay before the share menu opens on hover.',
    'hover_prompt'          => 'Hover Delay (ms)',
    'general_settings'      => 'General Settings',
    'menulabel'             => 'SocialShare',
    'mirror_buttons'        => 'Use Individual Share Buttons as defined on Social Share Button Settings tab - Forces placement to story body',
    'more_prompt'           => 'Include More Option (+)',
    'name'                  => 'Name',
    'num_services_help'     => 'The number of services to include in pop-up menu.',
    'num_services_prompt'   => 'Number of Services in Pop-Up Menu',
    'placement_prompt'      => 'Share Button Placement',
    'placement_sb'          => 'Story Body (bottom)',
    'placement_smd'         => 'Story Icons',
    'plugin'                => 'socialshare',
    'pi_name'               => 'Social Share',
    'prioritized'           => 'Prioritized',
    'replace_ss_help'       => 'Replaces glFusion\'s Social Share Buttons',
    'replace_ss_prompt'     => 'Replace glFusion Social Share?',
    'save'                  => 'Save',
    'saved'                 => 'SocialShare Settings were successfully saved.',
    'services'              => 'Services',
    'services_help'         => 'Prioritized services will appear on the initial pop-up menu. Excluded services will be removed from the pop-up menu and the more section. Share Button will display a button for the share service.',
    'share'                 => 'Share',
    'share_button_styles'   => 'Share Button Styles',
    'share_buttons'         => 'Share Buttons',
    'share_counters_prompt' => 'Display Share Counts',
    'social_share_settings' => 'Social Share Button Settings',
    'ss_summary_prompt'     => 'Display Share Buttons in Summary (index) View',
    'ss_summary_help'       => 'True displays social share icons in both the summary and full story view.',
    'story_button_styles'   => 'Story Share Button Styles',
    'story_share_prompt'    => 'Story Share Enabled',
    'story_share_help'      => 'Display Share Icon in the story icon area',
    'story_share_settings'  => 'Story Share Settings',
    'true'                  => 'True',
);

$LANG_SS_SERVICES = array(
    'aim' => 'Aol Instant Message Button',
    'amazon_wish_list' => 'Amazon Wish List Button',
    'aol_mail' => 'AOL Mail Button',
    'baidu' => 'Baidu Button',
    'balatarin' => 'Balatarin Button - A Persian language social and political link-sharing website aimed primarily at Iranian audiences.',
    'bibsonomy' => 'BibSonomy Button - A social bookmarking and publication sharing system.',
    'bitty_browser' => 'Bitty Browser Button - Helps you keep track of your favorite Web stuff by enalbing navigable windows directly within your favorite sites.',
    'blinklist' => 'Blinklist Button - Blinklist provides information and reviews on web and mobile start-ups.',
    'blogger_post' => 'Blogger Post Button - Blogger is a blog-publishing service.',
    'blogmarks' => 'BlogMarks Button - A social bookmarks manager that allows categorization via custom tags.',
    'bookmarks_fr' => 'Bookmarks.fr Button - Bookmarks on your site targeted at French users.',
    'box_net' => 'Box.net Button - Share via Box.net',
    'buddymarks' => 'BuddyMarks Button - An Online Bookmark Manager.',
    'buffer' => '"Buffer Button - An application for the web designed to manage accounts in social networks, by allowing a user to schedule posts to Twitter, Facebook and other social networks."',
    'care2_news' => '"Care2 News Button - A social networking site designed to connect activists from around the world with other individuals, organizations and businesses making an impact."',
    'citeulike' => 'CiteULike Button - Web service which allows users to save and share citations to academic papers.',
    'copy_link' => 'Copy Link Button - Copies the content link to your clipboard.',
    'delicious' => '"Delicious Button - A social bookmarking site for storing, sharing and discovering web bookmarks."',
    'design_float' => 'Design Float Button - Web design news and tips.',
    'diary_ru' => 'Diary.Ru Button - Online diary in RuNet.',
    'diaspora' => 'Diaspora Button - A nonprofit distributed social network based on the free Diaspora software.',
    'digg' => 'Digg Button - A news aggregator.',
    'diigo' => '"Diigo Button - A social bookmarking website that allows signed-up users to bookmark and tag Web pages. Additionally, it allows users to highlight any part of a webpage and attach sticky notes to specific highlights or to a whole page."',
    'douban' => '"Douban Button - A Chinese social networking service website allowing registered users to record information and create content related to film, books, music, recent events and activities in Chinese cities."',
    'draugiem' => '"Draugiem Button - A social networking website that is the largest social networking website in Latvia. The website plays an important role in the everyday life of internet users in Latvia, and is frequently used as a communication tool instead of e-mail."',
    'dzone' => '"DZone Button - Serves technology professionals with the knowledge, tools, and strategies they need to build the future."',
    'email' => 'Email Button - Send content link / description via email.',
    'evernote' => 'Evernote Button - Send content link / description to Evernote.',
    'facebook' => 'Facebook Button - Post content to Facebook',
    'facebook_messenger' => 'Facebook Messenger Button - Send content link / description via Facebook Messenger.',
    'fark' => 'Fark Button - Share via Fark - Allows members to comment on a daily batch of news articles and other items from various websites.',
    'flipboard' => 'Flipboard Button - A news aggregation and social network aggregation service.',
    'folkd' => 'Folkd Button - A social bookmarking service.',
    'google_plus' => 'Google+ Button - Share via Google Plus',
    'google_bookmarks' => 'Google Bookmarks Button - Save to Google bookmarks',
    'google_classroom' => 'Google Classroom Button - Share via Google Classroom',
    'google_gmail' => 'Google Gmail Button - Send content link / description via Gmail.',
    'hacker_news' => 'Hacker News Button - A social news website focusing on computer science and entrepreneurship.',
    'hatena' => 'Hatena Button - A free blogging service.',
    'instapaper' => '"Instapaper Button - a bookmarking service that allows web content to be saved so it can be read later on a different device, such as an e-reader, smartphone, tablet."',
    'jamespot' => 'Jamespot Button - A French corporate social network.',
    'kakao' => 'Kakao Button - A South Korean internet company /server.',
    'kindle_it' => 'Kindle It Button - Lets you send web articles to your Kindle app or device for a better reading experience.',
    'known' => 'Known Button - A social learning platform',
    'line' => '"Line Button - Free Messaging, Whenever, Wherever"',
    'linkedin' => 'LinkedIn Button -  a business and employment-oriented social networking service.',
    'livejournal' => '"LiveJournal Button -  A social networking service where Internet users can keep a blog, journal or diary."',
    'mail_ru' => 'Mail.Ru Button - Russian Social Networking Site.',
    'mendeley' => '"Mendeley Button - A site for sharing research papers, discovering research data and collaborating online."',
    'meneame' => '"Meneame Button - A Spanish social news website based on community participation, made for users to discover and share content on the Internet, by submitting links, which are voted and commented upon."',
    'mixi' => 'Mixi Button - An online Japanese social networking service.',
    'myspace' => '"MySpace Button - A social networking website offering an interactive, user-submitted network of friends, personal profiles, blogs, groups, photos, music, and videos."',
    'netvouz' => '"Netvouz Button - A social bookmarking service that allows you to save your favorite links online and access them from any computer, wherever you are."',
    'newsvine' => '"NewsVine Button - A community-powered, collaborative journalism news website which draws content from its users and syndicated content from mainstream sources such as The Associated Press."',
    'nujij' => 'NUjij Button - Dutch social sharing site.',
    'odnoklassniki' => 'Odnoklassniki Button - A social network service for classmates and old friends. It is popular in the Russian Federation and former Soviet Republics.',
    'oknotizie' => 'Oknotizie Button - Italian Social Sharing',
    'outlook_com' => 'Outlook.com Button - Share via Outlook.com',
    'papaly' => 'Papaly Button - Personalized Social Bookmarking.',
    'pinboard' => 'Pinboard Button - Social bookmarking for introverts.',
    'pinterest' => '"Pinterest Button - A free website where users can upload, save, sort, and manage images—known as pins—and other media content."',
    'plurk' => 'Plurk Button - A free social networking and micro-blogging service that allows users to send updates (otherwise known as plurks) through short messages or links.',
    'pocket' => '"Pocket Button - Put articles, videos or pretty much anything into Pocket."',
    'polyvore' => 'Polyvore Button - A community-powered social commerce website.',
    'print' => 'Print Button - Print the content.',
    'printfriendly' => 'PrintFriendly Button - Make any web page print friendly.',
    'protopage_bookmarks' => '"Protopage Bookmarks Button - An RSS reader, virtual desktop, and Internet start page"',
    'pusha' => 'Pusha Button - A site where members determine the content by posting and push (vote for) links.',
    'qzone' => 'Qzone Button - A Chinese social networking website.',
    'reddit' => '"Reddit Button - A social news aggregation, web content rating, and discussion website."',
    'rediff' => '"Rediff MyPage Button - An Indian news, information, entertainment and shopping web portal."',
    'refind' => '"Refind Button - Discover, save, and read what’s really worth your attention."',
    'renren' => 'Renren Button - A Chinese social networking service.',
    'segnalo' => 'Segnalo Button - An Italian social bookmarking site.',
    'sina_weibo' => 'Sina Weibo Button - A Chinese microblogging (weibo) website.',
    'sitejot' => 'SiteJot Button - A free online bookarmk manager / bookmark organizer.',
    'skype' => 'Skype Button -  An instant messaging app that provides online text message and video chat services.',
    'slashdot' => 'Slashdot Button - A social news website',
    'sms' => 'SMS Button - Send content link via SMS.',
    'stumbleupon' => '"StumbleUpon Button - a discovery engine (a form of web search engine) that finds and recommends web content to its users. Its features allow users to discover and rate Web pages, photos and videos that are personalized to their tastes and interests using peer-sourcing and social-networking principles."',
    'stumpedia' => 'Stumpedia Button - Search for people by people.',
    'svejo' => 'Svejo Button - Bulgarian social news site.',
    'symbaloo_feeds' => 'Symbaloo Feeds Button - Discover and create your own feeds.',
    'telegram' => 'Telegram Button - Share via Telegram Messaging.',
    'trello' => 'Trello Button - Share to your Trello boards.',
    'tuenti' => 'Tuenti Button - Spain based social media.',
    'tumblr' => 'Tumblr Button - A microblogging and social networking website.',
    'twiddla' => 'Twiddla Button - Team Whiteboarding.',
    'twitter' => '"Twitter Button - An online news and social networking service where users post and interact with messages, tweets."',
    'viadeo' => 'Viadeo Button',
    'viber' => '"Viber Button -  A free, cross-platform instant messaging and voice over IP (VoIP) application"',
    'vk' => 'VK Button - The largest European online social media and social networking service.',
    'wanelo' => 'Wanelo Button - A digital mall where people can discover and buy products on the internet.',
    'wechat' => '"WeChat Button - A Chinese social media (instant messaging, commerce and payment services) site."',
    'whatsapp' => '"WhatsApp Button - A freeware, cross-platform and end-to-end encrypted instant messaging application for smartphones"',
    'wordpress' => 'WordPress Button - Share to WordPress.org.',
    'wykop' => 'Wykop Button - A Polish social networking internet service.',
    'xing' => 'XING Button - A career-oriented social networking site for enabling a small-world network for professionals.',
    'yahoo_bookmarks' => 'Yahoo Bookmarks Button - Allows you to store your bookmarks on Yahoo and access them from anywhere with an Internet connection.',
    'yahoo_mail' => 'Yahoo Mail Button - Share via Yahoo Mail.',
    'yahoo_messenger' => 'Yahoo Messenger Button - Share via Yahoo Messenger',
    'yoolink' => '"Yoolink Button - A customizable communication platform that enables you to create a corporate social network, to easily manage external communities or to boost your team productivity."',
    'youmob' => 'YouMob Button - Live mobs on the web.',
    'yummly' => 'Yummly Button - Personalized Recipe Recommendations and Search.',
);
?>