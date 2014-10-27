<?php
/**
 * basic
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 27.10.2014
 * @since 1.0.0
 */
return [
	'height' => 200,
	'toolbarGroups' => [
		['name' => 'undo'],
		['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
		['name' => 'colors'],
		['name' => 'links', 'groups' => ['links', 'insert']],
		['name' => 'others','groups' => ['others', 'about']],
	],
	'removeButtons' => 'Subscript,Superscript,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe',
	'removePlugins' => 'elementspath',
	'resize_enabled' => false
];
