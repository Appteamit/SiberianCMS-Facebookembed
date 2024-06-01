<?php

use Siberian\Assets;
use Siberian\Translation;

/**
 * @param $bootstrap
 */
$init = static function ($bootstrap) {
    Assets::registerScss([
        '/app/local/modules/Facebookembed/features/facebookembed/scss/facebookembed.scss'
    ]);
    Translation::registerExtractor(
        'facebookembed',
        'Facebookembed',
        '/app/local/modules/Facebookembed/resources/translations/default/facebookembed.po');

};

