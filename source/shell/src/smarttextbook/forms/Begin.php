<?php
namespace smarttextbook\forms;

use std, gui, framework, smarttextbook;


class Begin extends AbstractForm
{

    /**
     * @event buttonBegin_Done.mouseDown-Left 
     */
    function doButtonBegin_DoneMouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Animation::fadeOut($this->form('Visual'), 0, function () use ($e, $event) {});

        
        $this->ini->set('Name',uiText($this->editBegin_Name),'information');
        
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
        if ($this->ini->get('Name','information') != 'None') {
            Animation::fadeOut($this->form('Begin'), 375, function () use ($e, $event) {});        
            $this->loadForm('Visual');
            Animation::fadeIn($this->form('Visual'), 375, function () use ($e, $event) {});
        } 
    }



}
