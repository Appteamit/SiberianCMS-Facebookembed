<?php

use Siberian\Exception;
use Siberian\File;
use Siberian\Json;

/**
 * Class Facebookembed_Mobile_ViewController
 */
class Facebookembed_Mobile_ViewController extends Application_Controller_Mobile_Default
{
    
     public function findallAction() {
        $payload = [];       
        
        try{
            $value_id = $this->getRequest()->getParam('value_id');            
            $settingModel = (new Facebookembed_Model_Facebookembed())->find(['value_id' => $value_id]);
             
            $payload = [
                'success' => true,
                'page_title' => $this->getCurrentOptionValue()->getTabbarName(),
                'settings' => $settingModel->getData()
            ];

        } catch (\Exception $e) {
            $payload = [
                "error" => true,
                "message" => $e->getMessage()
            ];
        }

        $this->_sendJson($payload);
    }

}

