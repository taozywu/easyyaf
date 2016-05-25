<?php
/**
 * 
 */
namespace Core\Controller;

class Admin extends Base
{
    public function init()
    {
        parent::init();
        $this->initAppModule();
        $this->initSite();
    }
}