<?php

/**
*
* Post Love [Spanish]
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
	'POSTLOVE_CONTROL'	=> 'Mensaje que gusta',
	'POSTLOVE_USE_CSS'	=> 'Usar CSS proporcionado',
	'POSTLOVE_USE_CSS_EXPLAIN'	=> 'Para facilitar la personalización de la extensión POST LOVE, podría evitar la carga del CSS por defecto. Si desea utilizar sus propias imágenes, por favor, consulte el archivo <code>overall_header_head_append.html</code>',
	'POSTLOVE_SHOW_LIKES'	=> 'Mostrar el número de mensajes que le han gustado.',
	'POSTLOVE_SHOW_LIKES_EXPLAIN'	=> 'Mostrar en <code>viewtopic</code> el número de mensajes que han gustado a este usuario.',
	'POSTLOVE_SHOW_LIKED'	=> 'Mostrar el número de mensajes que han gustado.',
	'POSTLOVE_SHOW_LIKED_EXPLAIN'	=> 'Mostrar en <code>viewtopic</code> cuántos mensajes del usuario han gustado a los demás.',

	//Version 1.1 langs
	'ACP_POSTLOVE_GRP'	=> 'Post Love',
	'ACP_POSTLOVE'	=> 'Post love',
	'POSTLOVE_EXPLAIN'	=> 'Desde aquí puede cambiar algunas opciones de Post Love',
	'CONFIRM_MESSAGE'	=> '¡Cambios guardados!<br><br><a href="%1$s">Volver</а>',

	'POSTLOVE_AUTHOR_LIKE'	=> 'El autor puede enviar me gusta',
	'POSTLOVE_AUTHOR_LIKE_EXPLAIN'	=> 'Puede el autor hacer me gusta sus propios mensajes o no',

	'POSTLOVE_CLEAN_LOVES'	=> 'Limpiar post loves',
	'POSTLOVE_CLEAN_LOVES_EXPLAIN'	=> 'Si ha instalado Post Love antes de la publicación automática, y el usuario ama la limpieza - por favor, presione Limpiar, para limpiar los innecesarios Post Loves',
	'CLEAN'	=> 'Limpiar',

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
