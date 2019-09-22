<?php
namespace smarttextbook\forms;

use std, gui, framework, smarttextbook;
use php\lib\str; 
use php\util\Regex; 
use action\Animation; 
use action\Element; 


class Begin extends AbstractForm
{

    /**
     * @event buttonBegin_Done.mouseDown-Left 
     */
    function doButtonBegin_DoneMouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Element::setText($this->form('Visual')->labelInfo, uiText($this->editBegin_Name));
        $this->ini->set('Name',$this->form('Visual')->labelInfo->text,'information');
        Animation::fadeOut($this, 375, function () use ($e, $event) {});
        $this->loadForm('Visual');
        Animation::fadeIn($this->form('Visual'), 375, function () use ($e, $event) {});
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {
        $e = $event ?: $e;
        
        if ($this->ini->get('Name','information') != 'None'){
            Element::setText($this->form('Visual')->labelInfo,$this->ini->get('Name','information'));
            Animation::fadeOut($this->form('Begin'), 375, function () use ($e, $event) {});        
            $this->loadForm('Visual');
            Animation::fadeIn($this->form('Visual'), 375, function () use ($e, $event) {});
        } 
    }

    /**
     * @event imageButtonBegin_information.mouseDown-Left 
     */
    function doImageButtonBegin_informationMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }



}
