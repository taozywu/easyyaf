<?php
/**
 * Yaf 全局配置
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
return array(
    // 开启的情况下, Yaf将会使用命名空间方式注册自己的类, 比如Yaf_Application将会变成Yaf\Application
    "use_namespace" => 1,
    // 全局类库的目录路径
    "library" => ROOT_PATH . "/../YBase",
    // 路径小写
    "lowcase_path" => 0,
    // 在处理Controller, Action, Plugin, Model的时候, 类名中关键信息是否是后缀式
    // 比如UserModel, 而在前缀模式下则是ModelUser
    "name_suffix" => 1,
    // 开启的情况下, Yaf在加载不成功的情况下, 会继续让PHP的自动加载函数加载
    // 从性能考虑, 除非特殊情况, 否则保持这个选项关闭
    "use_spl_autoload" => 0,
    // 在处理Controller, Action, Plugin, Model的时候, 前缀和名字之间的分隔符, 默认为空, 也就是UserPlugin
    // 加入设置为"_", 则判断的依据就会变成:"User_Plugin", 这个主要是为了兼容ST已有的命名规范
    "name_separator" => "",
    // 是否缓存配置文件(只针对INI配置文件生效), 打开此选项可在复杂配置的情况下提高性能
    "cache_config" => 0,
    // forward最大嵌套深度
    "forward_limit" => 5,
    // Yaf Frame自动加载的路径
    "autoload_dir" => array(
        ROOT_PATH . "/core/Frame/",
    ),
);
