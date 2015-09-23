[common]
application.directory = ROOT_PATH "/app/"
application.cache_config = 1
application.bootstrap = ROOT_PATH "/app/" "/Bootstrap.php"
application.library = ROOT_PATH "/lib/"
application.modules = Index

;生产环境
[pro:common]

;开发环境
[dev:common]
;first = rpcserver; second = app; third=...
;rpcserver.Test.uri = "tcp://127.0.0.1:9501";
;rpcserver.Test.user = "www";
;rpcserver.Test.secret = "{1BA09530-F9E6-478D-9965-7EB31A59537E}";
;rpcserver.Test.showlog = 1;
;rpcserver.Test.logfile = "/tmp/rpc_test.log";

;benchmark
application.benchmark = true
;间隔时间超过0.01则会记录日志
application.benchmark.time = 0.001
;日志文件
application.benchmark.log_file = "/logs/benchmark.log"

;smarty
;smarty.left_delimiter   = "{{"
;smarty.right_delimiter  = "}}"
smarty.template_dir     = ROOT_PATH "/app/views/"
smarty.compile_dir      = ROOT_PATH "/cache/smarty/templates_c/"
;smarty.cache_dir        = ROOT_PATH "/cache/smarty/templates_d/"
;smarty.caching = true
;smarty.force_compile = true
;smarty.compile_check = true
;smarty.cache_lifetime = 600
application.view.ext    = "phtml"


database.db_file = "/conf/db.php";

;database adapter
;database.adapter = PDO_MYSQL

;database master
database.master = `array(
    'driver' => 'Pdo',
    'username' => 'xxxxxx',
    'password' => 'xxxxxx',
    'dsn' => 'mysql:dbname=xxxx;host=xxxxx',
    'driver_options' => array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
    )
)`;

;database.master.dbname   = test
;database.master.hostname = localhost
;database.master.username = root
;database.master.password = 
;database.master.charset = utf-8
;database.master.profiler = true
;database.master.port = 3306

;database slave
database.slave = `array(
    array(
        'driver' => 'Pdo',
        'username' => 'xxxxxx',
        'password' => 'xxxxxx',
        'dsn' => 'mysql:dbname=xxxx;host=xxxxx',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        )
    ),
    array(
        'driver' => 'Pdo',
        'username' => 'xxxxxx',
        'password' => 'xxxxxx',
        'dsn' => 'mysql:dbname=xxxx;host=xxxxx',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        )
    )
)`;

;database.slave.1.dbname = test
;database.slave.1.hostname = localhost
;database.slave.1.username = root
;database.slave.1.password = 
;database.slave.1.charset = utf-8
;database.slave.1.profiler = true
;database.slave.1.port = 3306

;database slave 2
;database.slave.2.dbname = test
;database.slave.2.hostname = localhost
;database.slave.2.username = root
;database.slave.2.password = 
;database.slave.2.charset = utf-8
;database.slave.2.profiler = true
;database.slave.2.port = 3306

;dispatcher
application.dispatcher.catchException = true
application.dispatcher.throwException = true

