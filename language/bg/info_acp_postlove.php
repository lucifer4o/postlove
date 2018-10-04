<?php

/**
*
* Post Love [Bulgarian]
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
	'POSTLOVE_CONTROL'	=> 'Харесване на постове',
	'POSTLOVE_SHOW_LIKES'	=> 'Покажи броя на харесаните от потребителя постове',
	'POSTLOVE_SHOW_LIKES_EXPLAIN'	=> 'Покажи в <code>viewtopic</code> общия брой на харесаните от този потребител постове.',
	'POSTLOVE_SHOW_LIKED'	=> 'Покажи броя на харесаните постове на потребителя',
	'POSTLOVE_SHOW_LIKED_EXPLAIN'	=> 'Покажи в <code>viewtopic</code> общия брой на харесаните постове на този потребител.',

	//Version 1.1 langs
	'ACP_POSTLOVE_GRP'	=> 'Post Love',
	'ACP_POSTLOVE'	=> 'Post love',
	'POSTLOVE_EXPLAIN'	=> 'От тук можете да контролирате различни настройки на харесването на постове',
	'CONFIRM_MESSAGE'	=> 'Промените запазени!<br><br><a href="%1$s">Върни се обратно </а>',

	'POSTLOVE_AUTHOR_LIKE'	=> 'Author can like posts',
	'POSTLOVE_AUTHOR_LIKE_EXPLAIN'	=> 'Can the author like his/her own posts or not',

	'POSTLOVE_CLEAN_LOVES'	=> 'Почисти излишните харесвания',
	'POSTLOVE_CLEAN_LOVES_EXPLAIN'	=> 'Ако случайно сте използвали Post Love преди да сложат почистването след триене на постове и потребители - натиснете Изчисти, за да почистите излишните записи в базата',
	'CLEAN'	=> 'Почисти',

	//Version 2.0
	'POSTLOVE_HOWMANY_MOST_LIKED_DAY'     => 'How many liked-today posts to show',
	'POSTLOVE_HOWMANY_MOST_LIKED_WEEK'	=> 'How many liked-this-week posts to show',
	'POSTLOVE_HOWMANY_MOST_LIKED_MONTH'	=> 'How many liked-this-month posts to show',
	'POSTLOVE_HOWMANY_MOST_LIKED_YEAR'    => 'How many liked-this-year posts to show',
	'POSTLOVE_HOWMANY_MOST_LIKED_EVER'	=> 'How many liked-ever posts to show',
	'POSTLOVE_FORUM'	=> 'How many to show on Forum pages',
	'POSTLOVE_INDEX'	=> 'How many to show on Index page',
	'POSTLOVE_SHOW_BUTTON'	=> 'Show the Post like count in a Post Button?',
	'POSTLOVE_SHOW_BUTTON_EXPLAIN'	=> 'The Post like count status and action link may be shown as a Post Button at the top of the post or in the old format at the bottom of the post',
));
