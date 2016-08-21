# 选择？
```
较之thinkphp,yii,ci,zf,larvale等,最终选择yaf!
在这里很感谢鸟哥、walkor、Rango等！！
```

## 框架分类
```
1）针对中小型公司推荐框架 --- easyYaf!<br>
2）针对大中型公司(web与service分离，分布mysql，分布redis，分布memcache、swoole、workerman等)推荐框架 -- hardYaf!<br>
3）针对移动端接口（支持rewrite/cli/restful）推荐框架 --apiYaf<br>
```
## 构想


## 申明
```
1）代码中很多有借鉴成分,如触及到个人利益请及时联系我，最后感谢开源，感谢！<br>
2）请各位在使用如上代码时，请保留作者相关copyright，and so on。
3）如上基本涵盖db,smarty,memcache,redis。。。其他可以在此基础上进行相关扩展！此版本后面不再单独更新！
```

## 重要说明
```
1.yaf里面除了lib和全局lib外，其他均只能使用自己的yaf命名空间。<br>
2.yaf的model部分可以支持多目录结构 例如 School_Student_V1_CatModel 对应的目录 =》 Models/Schoole/Student/V1/Cat.php<br>
```

#### 目录结构

```
+ public
  |- index.php //入口文件
  |- .htaccess //重写规则    
  |+ css       // css
  |+ img       // img
  |+ js        // js
  |+ xhprofWeb  // xhprof
+ third         // 第三方
  |+ xhprofLib  // xhprof
+ conf
  |- conf.ini //配置文件
  |- config.php // php格式文件路径加载配置
  |- db.php    // 数据库配置
  |- memcache.php  // memcache
  |- redis.php     // redis 配置
  |- safe.php      // 安全配置
  |- smarty.php    // smarty 配置
  |- system.php    // 系统配置
  |- yaf.php       // Yaf框架一些配置
+ logs            // logs
+ core
  |+ Lib           // 类库
     |+ Core       // 核心基类库（封装）
        |— Common.php   // 全局公用静态类
        |- Request.php   // 全局请求类
        |+ Controller  // 核心基类控制器
     |+ Smarty     // Smarty 类库
  |+ System        // 框架（非安装扩展情况）
    |+ Yaf         // 非命名空间框架
    |+ Yaf_Namespace   // 命名空间框架
    |- config.php    // 配置文件
    |- loader.php   // 加载
+ cache             // 缓存
    |- tpls 
    |- tpls_c
+ app
  |+ controllers
     |- Index.php        // 控制器
  |+ views               // 视图
     |+ common           // 公用模板文件
     |+ layout           // 布局
     |+ modules          // 模块目录
        |+ Index         // 控制器
           |- index.html // 视图文件
           |- 404.html
        |+ User
  |+ modules //其他模块
     |+ School           // School 模块
        |+ controllers   
           |- Index.php   // 控制器
           |- Teacher.php
  |+ models  //model目录
     |+ Index             // 模块 - Index
        |- Index.php      // 逻辑文件 - Index
        |- Data           // 数据逻辑文件 - Index
           |- Index.php
  |+ plugins //插件目录
```
