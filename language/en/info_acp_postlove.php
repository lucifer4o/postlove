<?php

/**
*
* newspage [English]
*
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'POSTLOVE_CONTROL'	=> 'Post like',
	'POSTLOVE_USE_CSS'	=> 'Use provided CSS',
	'POSTLOVE_USE_CSS_EXPLAIN'	=> 'For easier customisation of the POST LOVE extension you could stop it from loading the default CSS. If you want to use your own images, please refer to <code>overall_header_head_append.html</code>.',
	'POSTLOVE_SHOW_LIKES'	=> 'Show number of posts this user has liked',
	'POSTLOVE_SHOW_LIKES_EXPLAIN'	=> 'Show in  <code>viewtopic</code> the number of posts the user has liked.',
	'POSTLOVE_SHOW_LIKED'	=> 'Show the number of liked user\'s posts',
	'POSTLOVE_SHOW_LIKED_EXPLAIN'	=> 'Show in <code>viewtopic</code> how many of the user\'s posts have been liked by others.',

	//Version 1.1 langs
	'ACP_POSTLOVE_GRP'	=> 'Post Love',
	'ACP_POSTLOVE'	=> 'Post love',
	'POSTLOVE_EXPLAIN'	=> 'From here you can change some Post Love settings',
	'CONFIRM_MESSAGE'	=> 'Changes saved!<br><br><a href="%1$s">Back</а>',
	'POSTLOVE_CURRENT_THEME'	=> 'Current theme',
	'THEME_NAME'	=> 'Theme name',
	'THEME_AUTHOR'	=> 'Theme author',
	'THEME_DESCRIPTION'	=> 'Theme description',
	'THEME_SUPPORT_STYLES'	=> 'Supported styles',
	'THEME_PREVIEW'	=> 'Preview',
	'POSTLOVE_CHOOSE_THEME' => 'Select theme',

	'POSTLOVE_NO_THEMES_INSTALLED'	=> 'There are no themes installed!<br>Please add them in <i>$phpbb_root_path/ext/anavaro/postlove/themes</i> folder',
	'THEME_CHANGED'	=> 'Theme changed',
	'POSTLOVE_NO_WRITE_ACTION'	=> 'No write acccess!<br>Please allow write access to<i> $phpbb_root_path/ext/anavaro/postlove/styles </i>folder',

	'POSTLOVE_AUTHOR_LIKE'	=> 'Author can like posts',
	'POSTLOVE_AUTHOR_LIKE_EXPLAIN'	=> 'Can the author like his/her own posts or not',

	//Version 1.2 langs
	'POSTLOVE_INDEX_HOWMANY_MOST_LIKED_DAY'     => 'How many liked-today posts to show',
	'POSTLOVE_INDEX_HOWMANY_MOST_LIKED_WEEK'	=> 'How many this week posts to show',
	'POSTLOVE_INDEX_HOWMANY_MOST_LIKED_MONTH'	=> 'How many this month posts to show',
	'POSTLOVE_INDEX_HOWMANY_MOST_LIKED_YEAR'    => 'How many this year posts to show',
	'POSTLOVE_INDEX_HOWMANY_MOST_LIKED_EVER'	=> 'How many ever posts to show',
	'POSTLOVE_FORUM_HOWMANY_MOST_LIKED_DAY'     => 'How many liked-today posts to show',
	'POSTLOVE_FORUM_HOWMANY_MOST_LIKED_WEEK'	=> 'How many this week posts to show',
	'POSTLOVE_FORUM_HOWMANY_MOST_LIKED_MONTH'	=> 'How many this month posts to show',
	'POSTLOVE_FORUM_HOWMANY_MOST_LIKED_YEAR'	=> 'How many this year posts to show',
	'POSTLOVE_FORUM_HOWMANY_MOST_LIKED_EVER'	=> 'How many ever posts to show',
	'POSTLOVE_INDEX_HOWMANY_MOST_LIKED_EXPLAIN'	=> 'How many would you like to display on the index page?',
	'POSTLOVE_FORUM_HOWMANY_MOST_LIKED_EXPLAIN'	=> 'How many would you like to display on the forum page?',
	'POSTLOVE_QUERY_CACHE_SECONDS_EXPLAIN'		=> 'A larger value will reduce server load but results will lag real-time',
	'POSTLOVE_QUERY_CACHE_SECONDS'         		=> 'How long to cache summary queries (seconds)',
));
