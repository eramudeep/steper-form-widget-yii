<?php

/**
 * @copyright Copyright &copy; Odai Alali 2014
 * @package yii2-toastr
 * @version 0.1-dev
 */
namespace app\components\steperform;

use yii\web\AssetBundle;

/**
 * Description of ToastrAsset
 *
 * @author Odai Alali <odai.alali@gmail.com>
 */
class SteperAsset extends AssetBundle {
    public $sourcePath = '@webroot/protected/components/steperform/assets';
    
	public $css = [ 
			'steper.css' 
	];
	public $js = [ 
			'steper.js' 
	];
	public $depends = [ 
		 
	];
}
