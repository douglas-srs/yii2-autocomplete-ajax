<?php

namespace keygenqt\autocompleteAjax;

use \yii\web\AssetBundle;

/**
 * @author KeyGen <keygenqt@gmail.com>
 */
class ActiveAssets extends AssetBundle
{
	public $sourcePath = '@keygenqt/autocompleteAjax/assets';

	public $js = [
		'js/jquery-ui-1.12.1.custom.min.js',
	];

	public $depends = [
		'yii\web\JqueryAsset'
	];

	public $css = [
		'css/jquery-ui-1.12.1.custom.min.css',
		'css/yii2-autocomplete-ajax.css',
	];
}
