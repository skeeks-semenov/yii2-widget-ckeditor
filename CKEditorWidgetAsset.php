<?php
/**
 * CKEditorWidgetAsset
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 27.10.2014
 * @since 1.0.0
 */
namespace skeeks\widget\ckeditor;

use yii\web\AssetBundle;

/**
 * Class CKEditorWidgetAsset
 * @package skeeks\widget\ckeditor
 */
class CKEditorWidgetAsset extends AssetBundle
{
	public $sourcePath = '@vendor/skeeks/yii2-widget-ckeditor/assets';

	public $depends = [
		'skeeks\widget\ckeditor\CKEditorAsset'
	];

	public $js = [
		'js/skeeks-ckeditor.widget.js'
	];
} 