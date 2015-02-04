<?php
namespace apollo\yii2\i18next\assets;

use yii\web\AssetBundle;

/**
 * 10 Mar 2014
 *
 * @author Bluezip <serin212@hotmail.com>
 * Class Asset
 * @package bluezip\yii2\backbone\assets\Asset
 */
class Asset extends AssetBundle
{
    public $sourcePath = '@bower/i18next';
    public $path = '';
    public $css = [];
    public $js = [
        'i18next.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}