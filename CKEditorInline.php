<?php
/**
 * CKEditorInline
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 27.10.2014
 * @since 1.0.0
 */
namespace skeeks\widget\ckeditor;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Class CKEditorInline
 * @package skeeks\widget\ckeditor
 */
class CKEditorInline extends Widget
{
	use CKEditorTrait;

	/**
	 * @var array the HTML attributes for the input tag.
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $options = [];

	/**
	 * @var string
	 */
	public $tag = 'div';

	/**
	 * @var bool disables creating the inline editor automatically for elements with contenteditable attribute
	 * set to the true. Defaults to true.
	 */
	public $disableAutoInline = true;

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		if (!isset($this->options['id'])) {
			$this->options['id'] = $this->getId();
		}
		$this->options['contenteditable'] = 'true';

		parent::init();

		$this->initOptions();

		echo Html::beginTag($this->tag, $this->options);
	}

	/**
	 * @inheritdoc
	 */
	public function run()
	{
		echo Html::endTag($this->tag);

		$this->registerPlugin();
	}

	/**
	 * Registers CKEditor plugin
	 */
	protected function registerPlugin()
	{
		$view = $this->getView();

		CKEditorAsset::register($view);

		$id = $this->options['id'];

		$options = $this->clientOptions !== false && !empty($this->clientOptions)
			? Json::encode($this->clientOptions)
			: '{}';

		$js = [];
		if ($this->disableAutoInline) {
			$js[] = "CKEDITOR.disableAutoInline = true;";
		}
		$js[] = "CKEDITOR.inline('$id', $options);";

        if(isset($this->clientOptions['filebrowserUploadUrl'])) {
            $js[] = "dosamigos.ckEditorWidget.registerCsrfImageUploadHandler();";
        }

		$view->registerJs(implode("\n", $js));
	}
} 