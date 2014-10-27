<?php
/**
 * CKEditorAsset
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 27.10.2014
 * @since 1.0.0
 */
namespace skeeks\widget\ckeditor;

use yii\web\AssetBundle;

class CKEditorAsset extends AssetBundle
{
	public $sourcePath = '@vendor/ckeditor/ckeditor';

	public $js = [
		'ckeditor.js',
		'adapters/jquery.js'
	];

	public $depends = [
        'yii\web\YiiAsset',
		'yii\web\JqueryAsset'
	];
} 