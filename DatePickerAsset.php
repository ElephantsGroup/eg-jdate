<?php

namespace elephantsGroup\jDate;

use yii\web\AssetBundle;

/**
 *
 * @name : eg-jdate
 * @Version 1.0.0
 * @Author : Jalal Jaberi
 *
 * based on Mohammad Mahdi Gholomian jDate
 */

class DatePickerAsset extends AssetBundle
{
	public $sourcePath = '@vendor/elephantsgroup/eg-jdate/assets';
	public $js = [
		'js/persianDatepicker.min.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
