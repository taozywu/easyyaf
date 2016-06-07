<?php
/**
 * 核心ADMIN基类控制器
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 * 
 * @author taozy.wu<taozy.wu@qq.com>
 * @copyright taozy.wu<taozy.wu@qq.com>
 * @link http://www.github.com/taozywu
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Core\Controller;

class Admin extends Base
{
    public function init()
    {
        parent::init();
        $this->initAppModule();
    }
}
