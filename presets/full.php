<?php
/**
 * full
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 27.10.2014
 * @since 1.0.0
 */
return [
	'height' => 400,
	'toolbarGroups' => [
		['name' => 'clipboard', 'groups' => ['mode','undo', 'selection', 'clipboard', 'doctools']],
		['name' => 'editing', 'groups' => ['find', 'spellchecker', 'tools', 'about']],
		'/',
		['name' => 'paragraph', 'groups' => ['templates', 'list', 'indent', 'align']],
		['name' => 'forms'],
		'/',
		['name' => 'styles'],
		['name' => 'blocks'],
		'/',
		['name' => 'basicstyles', 'groups' => ['basicstyles', 'colors','cleanup']],
		['name' => 'links', 'groups' => ['links', 'insert']],
		['name' => 'others'],
	],
];