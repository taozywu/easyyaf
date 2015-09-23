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
        // test smarty
       $this->_view->content = "dd";

       //$this->_view->assign("content", "hello, yaf!");
       // test db
       $adapter = \Yaf\Registry::get("adapter");
       $data = $adapter['write']->queryAll("select * from test");
       print_r($data);
    }
}
