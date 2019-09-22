<?php
namespace smarttextbook\forms;

use std, gui, framework, smarttextbook;
use php\lib\str; 
use php\util\Regex; 


class Visual extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        
    }

    /**
     * @event buttonBegin.mouseDown-Left 
     */
    function doButtonBeginMouseDownLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        
        if (uiText($this->editTextbook) == 'Arduino') {
            Animation::fadeOut($this->getContextForm(), 1000, function () use ($e, $event) {});
            open('./Arduino.exe');
            app()->shutdown();
            return;
        }
        $this->toast('Приложение отсутствует.');
    }









}
