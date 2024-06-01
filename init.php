<?php

use Siberian\Assets;
use Siberian\Translation;

/**
 * @param $bootstrap
 */
$init = static function ($bootstrap) {
    Assets::registerJs([
        '/app/local/modules/Facebookembed/features/facebookembed/scss/platform.js'
    ]);
    Translation::registerExtractor(
        'facebookembed',
        'Facebookembed',
        '/app/local/modules/Facebookembed/resources/translations/default/facebookembed.po');

};

