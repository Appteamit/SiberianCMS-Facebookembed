<?php

class Facebookembed_Model_Facebookembed extends Core_Model_Default {

    /**
     * @var null
     */
    public static $acl = null;

    /**
     * @var string
     */
    protected $_db_table = Facebookembed_Model_Db_Table_Facebookembed::class;
 

     /**
     * @param $valueId
     * @return array|bool
     */
    public function getInappStates($valueId)
    {
        $inAppStates = [
            [
                "state" => "facebookembed-home",
                "offline" => false,
                "params" => [
                    'value_id' => $valueId,
                ],
            ],
        ];

        return $inAppStates;
    }

    /**
     * @return null
     */
    public static function getCurrentValueId()
    {
        $app = self::getApplication();
        if ($app) {
            $options = $app->getOptions();
            foreach ($options as $option) {
                if ($option->getCode() === "facebookembed") {
                    return $option->getId();
                }
            }
        }
        return null;
    }

    /**
     * @return null
     */
    public static function getCurrent()
    {
        $app = self::getApplication();
        if ($app) {
            $options = $app->getOptions();
            foreach ($options as $option) {
                if ($option->getCode() === "facebookembed") {
                    return $option;
                }
            }
        }
        return null;
    }
  
     
}
