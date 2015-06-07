<?php
/**
 * CKEditor
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 27.10.2014
 * @since 1.0.0
 */
namespace skeeks\widget\ckeditor;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Class CKEditor
 * @package skeeks\widget\ckeditor
 */
class CKEditor extends InputWidget
{
	use CKEditorTrait;

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();
		$this->initOptions();
	}

	/**
	 * @inheritdoc
	 */
	public function run()
	{
		if ($this->hasModel()) {
			echo Html::activeTextarea($this->model, $this->attribute, $this->options);
		} else {
			echo Html::textarea($this->name, $this->value, $this->options);
		}
		$this->registerAssets();
		$this->_registerPlugin();
	}

    /**
     * @return $this
     */
    public function registerAssets()
    {
        $view = $this->getView();
		CKEditorWidgetAsset::register($view);

        return $this;
    }

	/**
	 * Registers CKEditor plugin
	 */
	protected function _registerPlugin()
	{
        $view = $this->getView();
		$id = $this->options['id'];

		$options = $this->clientOptions !== false && !empty($this->clientOptions)
			? Json::encode($this->clientOptions)
			: '{}';

        $js[] = "CKEDITOR.replace('$id', $options);";
        $js[] = "skeeks.ckEditorWidget.registerOnChangeHandler('$id');";

        if(isset($this->clientOptions['filebrowserUploadUrl'])) {
            $js[] = "skeeks.ckEditorWidget.registerCsrfImageUploadHandler();";
        }

        $view->registerJs(implode("\n", $js));
	}
} 