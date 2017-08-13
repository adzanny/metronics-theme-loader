<?php

class IndexController extends ControllerBase
{
    public function initialize() {
        $this->JsCssHelper->source(['header','footer','components_select2']);
    }

    public function indexAction()
    {
        
    }

}

