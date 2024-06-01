<?php

/**
 * Class Facebookembed_ApplicationController
 */
class Facebookembed_ApplicationController extends Application_Controller_Default
{

    /**
     *
     */
    public function editAction()
    {
        parent::editAction();
    }

    /**
     *
     */
    public function editpostAction()
    {
        try {
            $values = $this->getRequest()->getPost();
           
            $form = new Facebookembed_Form_Facebookembed();

            if ($form->isValid($values)) {
                $settings = new Facebookembed_Model_Facebookembed();
                $settings->addData($values);
                $settings->save();

                $payload = [
                    'success' => true,
                    'message' => p__('facebookembed', 'Saved successfully'),
                ];

            }
            else
            {
                /** Do whatever you need when form is not valid */
                $payload = ["error" => true, 
                            "message" => $form->getTextErrors() , 
                            "errors" => $form->getTextErrors(true) 
                        ];
            }

        } catch (\Exception $e) {
            $payload = [
                'error' => true,
                'message' => $e->getMessage(),
            ];
        }

        $this->_sendJson($payload);
    }

}
