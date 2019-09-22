<?php
namespace smarttextbook\forms;

use std, gui, framework, smarttextbook;
use action\Animation; 


class Source extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        
    }

    /**
     * @event imageSource.destroy 
     */
    function doImageSourceDestroy(UXEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        Animation::fadeOut($this->form('Begin'), 375, function () use ($e, $event) {
            $this->loadForm('Begin');
            Animation::fadeIn($this->form('Begin'), 375, function () use ($e, $event) {
            });
        });
    }

    /**
     * @event imageButtonBegin_information.mouseDown-Left 
     */
    function doImageButtonBegin_informationMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }


}
