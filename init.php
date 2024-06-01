<?php

use Siberian\Assets;
use Siberian\Translation;

/**
 * @param $bootstrap
 */
$init = static function ($bootstrap) {
 
    Translation::registerExtractor(
        'facebookembed',
        'Facebookembed',
        '/app/local/modules/Facebookembed/resources/translations/default/facebookembed.po');

};

