<?php


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
        
    }

    /**
     * 首页
     * @return [type] [description]
     */
    public function indexAction()
    {
       $this->_view->content = "dd";

       $this->_view->assign("content", "hello, yaf!");
    }
}
