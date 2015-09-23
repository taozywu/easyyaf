<?php
class ErrorController extends \Yaf\Controller_Abstract
{

    public function errorAction()
    {
        $exception = $this->getRequest()->getException();
        try {
            throw $exception;
        } catch (\Yaf\Exception_LoadFailed $e) {
            die("\\Yaf\\Exception_LoadFailed:" . $e->getMessage() . ";\n" . "code:" . $e->getCode() . "\n\r");
        } catch (\Yaf\Exception $e) {
            die("\\Yaf\\Exception:" . $e->getMessage() . ";\n" . "code:" . $e->getCode() . "\n\r");
        }
    }

}
