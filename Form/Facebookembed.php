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

        $page_name = $this->addSimpleText('page_name', p__('facebookembed', 'Elfsight Social Feed Key'))->setRequired(true);

        $title = $this->addSimpleText('title', p__('facebookembed', 'Title'))->setRequired(false);

        $message = $this->addSimpleTextarea('message',  p__('facebookembed', 'Footer Message'));
        $message->setRichtext();


        
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
