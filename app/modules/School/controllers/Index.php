<?php

// namespace School;

/**
 * 欢迎页.
 */
class IndexController extends \Core\Controller\Web
{

    /**
     * 构造
     * @return [type] [description]
     */
    public function init()
    {
        parent::init();
    }

    /**
     * 首页
     * @return [type] [description]
     */
    public function indexAction()
    {
        // $this->_view->disabledLayout();
        $this->_view->assign("content", "hi,yaf");
    }
}
