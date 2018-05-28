<?php
/**
 * standard
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 27.10.2014
 * @since 1.0.0
 */
return [
	'height' => 300,
    //'skin' => "kama",
	'toolbarGroups' => [
		['name' => 'clipboard', 'groups' => ['mode','undo', 'selection', 'clipboard','doctools']],
		['name' => 'editing', 'groups' => ['tools', 'about']],
		'/',
		['name' => 'paragraph', 'groups' => ['templates', 'list', 'indent', 'align']],
		['name' => 'insert'],
		'/',
		['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
		['name' => 'colors'],
		['name' => 'links'],
		['name' => 'others'],
	],
	'removeButtons' => 'Smiley,Iframe'
];
