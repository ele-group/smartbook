<?php
namespace smarttextbook\forms;

use std, gui, framework, smarttextbook;
use action\Score; 
use php\lib\str; 
use php\util\Regex; 
use action\Element; 
use action\Animation; 
use game\Jumping; 


class Visual extends AbstractForm
{


    /**
     * @event buttonExample_Lesson_1_Done_1.mouseDown-Left 
     */
    function doButtonExample_Lesson_1_Done_1MouseDownLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        Jumping::to($this->rectLesson_1_information_unavailable, -5000, -5000);
        Jumping::to($this->labelLesson_1_information_unavailable, -5000, -5000);
        Score::set('assessmentLesson_class_1', 1);
        $this->toast('Ответы записаны.');
        waitAsync(1500, function () use ($e, $event) {
            $this->toast('Работа оценена.');
        });
        if (uiText($this->labelExample_1_exercise_page_1_Box_1) == 'упорядоченое движение заряженных частиц')
            Score::inc('assessmentLesson_class_1', 1);
        if (uiText($this->labelExample_1_exercise_page_1_Box_2) == 'отрицательно заряженная частица')
            Score::inc('assessmentLesson_class_1', 1);
        if (uiText($this->labelExample_1_exercise_page_1_Box_3) == 'землей (GND, -)')
            Score::inc('assessmentLesson_class_1', 1);
        if (uiText($this->labelExample_1_exercise_page_1_Box_4) == 'от большего потенциала к меньшему, от питания к земеле')
            Score::inc('assessmentLesson_class_1', 1);
        Element::setText($this->form('Achievement')->labelMark_class_1, \action\Score::get('assessmentLesson_class_1'));
        if (Score::get('assessmentLesson_class_1') < 3)
            Score::inc('assessmentLesson_class_1', -5);
        $this->progressKnowledge->progress += Score::get('assessmentLesson_class_1');
        if ($this->progressKnowledge->progress > 50)
        $this->progressKnowledge->colorAdjustEffect->enable();
        else
        $this->progressKnowledge->colorAdjustEffect->disable();
        $this->ini->set('Lesson_class_1',$this->form('Achievement')->labelMark_class_1->text,'assessment');
        Animation::fadeOut($this->labelLesson_1_information_unavailable, 0, function () use ($e, $event) {});
        Animation::fadeOut($this->rectLesson_1_information_unavailable, 0, function () use ($e, $event) {});
        Jumping::toStart($this->rectExample_1_information_to_start);
        Jumping::toStart($this->labelExample_1_information_to_start);
        Jumping::toStart($this->buttonExample_1_information_to_start);
        Animation::fadeIn($this->rectExample_1_information_to_start, 500, function () use ($e, $event) {});
        Animation::fadeIn($this->labelExample_1_information_to_start, 500, function () use ($e, $event) {});
        Animation::fadeIn($this->buttonExample_1_information_to_start, 500, function () use ($e, $event) {});
                            
        if (Score::get('assessmentLesson_class_1') > 2 and uiText($this->form('Achievement')->labelMark_home_1) > '2' and uiText($this->form('Achievement')->labelMark_home_1) != '?')
        {
        $this->rectLock_Lesson_2->free();
        $this->imageLock_Lesson_2->free();
        $this->rectLock_Example_2->free();
        $this->imageLock_Example_2->free();
        waitAsync(3000, function () use ($e, $event) {
            $this->toast('Доступна новая тема.');
        });   
        }
        Score::set('assessmentLesson_class_1', 1);
    }



    /**
     * @event buttonExample_Lesson_1_Done_2.mouseDown-Left 
     */
    function doButtonExample_Lesson_1_Done_2MouseDownLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        Jumping::to($this->rectLesson_1_information_unavailable, -5000, -5000);
        Jumping::to($this->labelLesson_1_information_unavailable, -5000, -5000);
        Score::set('assessmentLesson_home_1', 1);
        $this->toast('Ответы записаны.');
        waitAsync(1500, function () use ($e, $event) {
            $this->toast('Работа оценена.');
        });   
        if (uiText($this->labelExample_1_exercise_page_2_Box_1) == '(U) Напряжение')
            Score::inc('assessmentLesson_home_1', 1);
        
        if (uiText($this->labelExample_1_exercise_page_2_Box_2) == '(I) Сила тока')
            Score::inc('assessmentLesson_home_1', 1);
        
        if (uiText($this->labelExample_1_exercise_page_2_Box_3) == '(R) Сопротивление')
            Score::inc('assessmentLesson_home_1', 1);
        
        if (uiText($this->labelExample_1_exercise_page_2_Box_4) == '(P) Мощность')
            Score::inc('assessmentLesson_home_1', 1);
        Element::setText($this->form('Achievement')->labelMark_home_1, \action\Score::get('assessmentLesson_home_1'));
        
        if (Score::get('assessmentLesson_home_1') < 3)
            Score::inc('assessmentLesson_home_1', -5);
        $this->progressKnowledge->progress += Score::get('assessmentLesson_home_1');
        if ($this->progressKnowledge->progress > 50)
        $this->progressKnowledge->colorAdjustEffect->enable();
        else
        $this->progressKnowledge->colorAdjustEffect->disable();
        $this->ini->set('Lesson_home_1',$this->form('Achievement')->labelMark_home_1->text,'assessment');
        Animation::fadeOut($this->labelLesson_1_information_unavailable, 0, function () use ($e, $event) {});
        Animation::fadeOut($this->rectLesson_1_information_unavailable, 0, function () use ($e, $event) {});
        Jumping::toStart($this->rectExample_1_information_to_start);
        Jumping::toStart($this->labelExample_1_information_to_start);
        Jumping::toStart($this->buttonExample_1_information_to_start);
        Animation::fadeIn($this->rectExample_1_information_to_start, 500, function () use ($e, $event) {});
        Animation::fadeIn($this->labelExample_1_information_to_start, 500, function () use ($e, $event) {});
        Animation::fadeIn($this->buttonExample_1_information_to_start, 500, function () use ($e, $event) {});
        
        if (Score::get('assessmentLesson_home_1') > 2 and uiText($this->form('Achievement')->labelMark_class_1) > '2' and uiText($this->form('Achievement')->labelMark_class_1) != '?') 
        {
        $this->rectLock_Lesson_2->free();
        $this->imageLock_Lesson_2->free();
        $this->rectLock_Example_2->free();
        $this->imageLock_Example_2->free();
        waitAsync(3000, function () use ($e, $event) {
            $this->toast('Доступна новая тема.');
        });   
        }
        Score::set('assessmentLesson_home_1', 1);                   
    }


    /**
     * @event buttonExample_Lesson_2_Done_1.mouseDown-Left 
     */
    function doButtonExample_Lesson_2_Done_1MouseDownLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        Jumping::to($this->rectLesson_2_information_unavailable, -5000, -5000);
        Jumping::to($this->labelLesson_2_information_unavailable, -5000, -5000);
        Score::set('assessmentLesson_class_2', 1);
        $this->toast('Ответы записаны.');
        waitAsync(1500, function () use ($e, $event) {
            $this->toast('Работа оценена.');
        });
        if (str::contains(uiText($this->areaEleCodeExample_2_exercise_page_1_Box_1), 'digitalWrite(2, HIGH);'))
            Score::inc('assessmentLesson_class_2', 1);
        if (str::contains(uiText($this->areaEleCodeExample_2_exercise_page_1_Box_1), 'digitalWrite(2, LOW);'))
            Score::inc('assessmentLesson_class_2', 1);
        if (str::contains(uiText($this->areaEleCodeExample_2_exercise_page_1_Box_1), 'pinMode(2, OUTPUT);'))
            Score::inc('assessmentLesson_class_2', 1);
        if (str::contains(uiText($this->areaEleCodeExample_2_exercise_page_1_Box_1), 'delay(1000);'))
            Score::inc('assessmentLesson_class_2', 1);
        Element::setText($this->form('Achievement')->labelMark_class_2, \action\Score::get('assessmentLesson_class_2'));
        
        if (Score::get('assessmentLesson_class_2') < 3)
            Score::inc('assessmentLesson_class_2', -5);
        $this->progressKnowledge->progress += Score::get('assessmentLesson_class_2');
        if ($this->progressKnowledge->progress > 50)
        $this->progressKnowledge->colorAdjustEffect->enable();
        else
        $this->progressKnowledge->colorAdjustEffect->disable();
        $this->ini->set('Lesson_class_2',$this->form('Achievement')->labelMark_class_2->text,'assessment');
        Animation::fadeOut($this->labelLesson_2_information_unavailable, 0, function () use ($e, $event) {});
        Animation::fadeOut($this->rectLesson_2_information_unavailable, 0, function () use ($e, $event) {});
        Jumping::toStart($this->rectExample_2_information_to_start);
        Jumping::toStart($this->labelExample_2_information_to_start);
        Jumping::toStart($this->buttonExample_2_information_to_start);
        Animation::fadeIn($this->rectExample_2_information_to_start, 500, function () use ($e, $event) {});
        Animation::fadeIn($this->labelExample_2_information_to_start, 500, function () use ($e, $event) {});
        Animation::fadeIn($this->buttonExample_2_information_to_start, 500, function () use ($e, $event) {});
        Score::set('assessmentLesson_class_2', 1);       
    }

    /**
     * @event buttonExample_Lesson_2_Done_2.mouseDown-Left 
     */
    function doButtonExample_Lesson_2_Done_2MouseDownLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        Jumping::to($this->rectLesson_2_information_unavailable, -5000, -5000);
        Jumping::to($this->labelLesson_2_information_unavailable, -5000, -5000);
        Score::set('assessmentLesson_home_2', 1);
        $this->toast('Ответы записаны.');
        waitAsync(1500, function () use ($e, $event) {
            $this->toast('Работа оценена.');
        });
        if (uiText($this->labelExample_2_exercise_page_2_Box_1) == 'Резистор')
            Score::inc('assessmentLesson_home_2', 1);
        
        if (uiText($this->labelExample_2_exercise_page_2_Box_2) == 'Светодиод')
            Score::inc('assessmentLesson_home_2', 1);
        
        if (uiText($this->labelExample_2_exercise_page_2_Box_3) == ';')
            Score::inc('assessmentLesson_home_2', 1);
        
        if (uiText($this->labelExample_2_exercise_page_2_Box_4) == 'настраивает ножку микроконтроллера')
            Score::inc('assessmentLesson_home_2', 1);
        
        
        Element::setText($this->form('Achievement')->labelMark_home_2, \action\Score::get('assessmentLesson_home_2'));
        
        if (Score::get('assessmentLesson_home_2') < 3)
            Score::inc('assessmentLesson_home_2', -5);
        $this->progressKnowledge->progress += Score::get('assessmentLesson_home_2');
        if ($this->progressKnowledge->progress > 50)
        $this->progressKnowledge->colorAdjustEffect->enable();
        else
        $this->progressKnowledge->colorAdjustEffect->disable();
        $this->ini->set('Lesson_home_2',$this->form('Achievement')->labelMark_home_2->text,'assessment');
        Animation::fadeOut($this->labelLesson_2_information_unavailable, 0, function () use ($e, $event) {});
        Animation::fadeOut($this->rectLesson_2_information_unavailable, 0, function () use ($e, $event) {});
        Jumping::toStart($this->rectExample_2_information_to_start);
        Jumping::toStart($this->labelExample_2_information_to_start);
        Jumping::toStart($this->buttonExample_2_information_to_start);
        Animation::fadeIn($this->rectExample_2_information_to_start, 500, function () use ($e, $event) {});
        Animation::fadeIn($this->labelExample_2_information_to_start, 500, function () use ($e, $event) {});
        Animation::fadeIn($this->buttonExample_2_information_to_start, 500, function () use ($e, $event) {});

        Score::set('assessmentLesson_home_2', 1);            
    }

    /**
     * @event buttonExample_1_information_to_start.mouseDown-Left 
     */
    function doButtonExample_1_information_to_startMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }



    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        Jumping::to($this->rectLesson_1_information_unavailable, -5000, -5000);
        Jumping::to($this->labelLesson_1_information_unavailable, -5000, -5000);
        Jumping::to($this->rectLesson_2_information_unavailable, -5000, -5000);
        Jumping::to($this->labelLesson_2_information_unavailable, -5000, -5000);
        Element::setText($this->form('Achievement')->labelMark_class_1,$this->ini->get('Lesson_class_1','assessment'));
        Element::setText($this->form('Achievement')->labelMark_home_1,$this->ini->get('Lesson_home_1','assessment'));
        Element::setText($this->form('Achievement')->labelMark_class_2,$this->ini->get('Lesson_class_2','assessment'));
        Element::setText($this->form('Achievement')->labelMark_home_2,$this->ini->get('Lesson_home_2','assessment'));
        $this->progressKnowledge->progress = $this->ini->get('Progress','information');
        
        if ((uiText($this->form('Achievement')->labelMark_home_1) > '2') and (uiText($this->form('Achievement')->labelMark_class_1) > '2') and (uiText($this->form('Achievement')->labelMark_home_1) != '?') and (uiText($this->form('Achievement')->labelMark_class_1) != '?')) {
            $this->rectLock_Lesson_2->free();
            $this->imageLock_Lesson_2->free();
            $this->rectLock_Example_2->free();
            $this->imageLock_Example_2->free();
        }
        
                
            
        
    }

    /**
     * @event close 
     */
    function doClose(UXWindowEvent $e = null)
    {    
        
    }

    /**
     * @event keyDown-Z 
     */
    function doKeyDownZ(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event keyDown-X 
     */
    function doKeyDownX(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event buttonExample_2_information_to_start.mouseDown-Left 
     */
    function doButtonExample_2_information_to_startMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event progressKnowledge.mouseDown-Left 
     */
    function doProgressKnowledgeMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event labelExample_1_exercise_page_2_Box_3.mouseEnter 
     */
    function doLabelExample_1_exercise_page_2_Box_3MouseEnter(UXMouseEvent $e = null)
    {    
        
    }


}
