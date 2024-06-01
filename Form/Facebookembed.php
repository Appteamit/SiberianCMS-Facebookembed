<?php

/**
 * Class Facebookembed_Form_Facebookembed
 */
class Facebookembed_Form_Facebookembed extends Siberian_Form_Abstract
{
    /**
     * @throws Zend_Exception
     * @throws Zend_Form_Exception
     */
    public function init()
    {
        parent::init();

        $this
            ->setAction(__path('/facebookembed/application/editpost'))
            ->setAttrib('id', 'form-add-facebookembed');

        self::addClass('create', $this);

        $this->addSimpleHidden('id');
        $valueId = $this->addSimpleHidden('value_id');
        $valueId->setRequired(true);

 /*
        $fbURL = $this->addSimpleTextarea('fb_url',   p__('facebookembed', 'Facebook Embed IFrame Code'), false, ['ckeditor' => 'source'])->setRequired(true);
        $fbURL
            ->setNewDesignLarge()
            ->setRichtext();*/


        $page_name = $this->addSimpleText('page_name', p__('facebookembed', 'Elfsight Code'))->setRequired(true);

      //   $this->addSimpleSelect("tabs", p__('appointmentpro', " Tabs to render"), [
      //      "timeline" => p__('appointmentpro', "Timeline"),
       //     "events" => p__('appointmentpro', "Events"),
       //     "messages" => p__('appointmentpro', "Messages"),
       //     "photos" => p__('appointmentpro', "Photos")
       // ]);

       //   $width = $this->addSimpleText('width', p__('facebookembed', 'Width'))->setRequired(true);

       //    $page_name = $this->addSimpleText('height', p__('facebookembed', 'Height'))->setRequired(true);

     //   $title = $this->addSimpleText('title', p__('facebookembed', 'Title'))->setRequired(false);


        /** message */
      //  $message = $this->addSimpleTextarea('message',  p__('facebookembed', 'Message'));
      //  $message->setRichtext();


        
    }


      /**
     * @param $htmlcode
     * @return $this
     */
    public function setHtmlCode($htmlcode): self
    {
        $this->getElement('fb_url')->setValue($htmlcode);

        return $this;
    }

}
