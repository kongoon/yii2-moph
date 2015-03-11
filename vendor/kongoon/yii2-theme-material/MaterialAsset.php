<?php

/* 
 * 2015-02-20
 * @author Programmer Thailand <contact@programmerthailand>
 * http://www.programmerthailand.com
 * https://github.com/FezVrasta/bootstrap-material-design
 */
namespace kongoon\theme\material;
use yii\web\AssetBundle;

class MaterialAsset extends AssetBundle{
    public $sourcePath='@vendor/kongoon/yii2-theme-material/assets';
    public $baseUrl = '@web';
    
    public $css=[
        'css/material-wfont.min.css',
        'css/material.min.css',
        'css/ripples.min.css',
        'css/style.css',
    ];
    public $js=[
        'js/material.min.js',
        'js/ripples.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        
    ];
    
    public function init(){
        parent::init();
    }
    
}
