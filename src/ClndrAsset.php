<?php
/**
 * @link https://github.com/MadAnd/yii2-clndr
 * @copyright Copyright (c) 2015 Andriy Kmit' <dev@madand.net>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace madand\clndr;

use yii\web\AssetBundle;

class ClndrAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/clndr';
    public $js = [
        'clndr.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'madand\momentjs\MomentJsAsset',
        'madand\underscore\UnderscoreAsset',
    ];
}
