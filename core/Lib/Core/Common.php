<?php
/**
 * 核心 公共静态类
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
namespace Core;

class Common
{
    /**
     * 分页
     * @param  [type] $page      [description]
     * @param  [type] $pageCount [description]
     * @param  [type] $url       [description]
     * @param  [type] $result    [description]
     * @return [type]            [description]
     */
    public static function page($page, $pageCount, $url, $result)
    {
        $res = "";
        /**
         * 只有一页
         * @var [type]
         */
        if ($page == 1) {
            $res = "<span class=\"disabled\">« 上一页</span>";
        } else {
            $res = "<a href='".$url."/page/".($page-1)."'>« 上一页</a>";
        }
        
        for ($i=$result['start']; $i<=$result['end']; $i++) {
            if ($i == $page) {
                $res .= "<span class='current'>{$i}</span>";
            } else {
                $res .= "<a href='".$url."/page/".$i."'>".$i."</a>";
            }
        }
        
        /**
         * 到最后一页
         * @var string
         */
        if ($page >= $pageCount) {
            $res .= "<span class=\"disabled\">下一页 »</span>";
        } else {
            $res .= "<a href='".$url."/page/".($page+1)."'>下一页 »</a>";
        }

        return $res;
    }

    /**
     * 检查邮箱
     * @return [type] [description]
     */
    public static function checkEmail($email)
    {
        if (!$email) return false;
        $reg = '/^[0-9a-zA-Z\\-_\\.]+(?:[\_\-][a-z0-9\-]+)*@[a-zA-Z0-9]+(?:[-.][a-zA-Z0-9]+)*\.[a-zA-Z]+$/i';
        return preg_match($reg,$email);
    }

    /**
     * 检查密码{只允许 数字、字母、下划线}
     * 最短6位、最长16位
     */
    public static function checkPassword($str)
    {
        if (preg_match('/^[_0-9a-z]{6,20}$/i',$str)) {
            return true;
        } else {
            return false;
        }
    }

}
