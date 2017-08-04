<?php
return array(

	//'配置项'=>'配置值'
    'DEFAULT_C_LAYER'       =>  'Controller', // 默认的控制器层名称
    'MODULE_ALLOW_LIST'     =>  array('Home','Admin'), // 配置你原来的分组列表
    'DEFAULT_MODULE'        =>  'Home', // 配置你原来的默认分组
    'MODULE_DENY_LIST'   => array('Common'),
  /*  'TAGLIB_BUILD_IN' =>'Cx,Cuit',*/
    'URL_MODEL'=> '1', //URL模式
    'UPLOADS_PICPATH'=>'./Upload/',//图片上传根路径

    'VAR_SESSION_ID' =>  'session_id', //sessionID的提交变量
    // 验证码过期时间
    'SEND_LOSE_TIME'=>24,
  /*  'DEFAULT_FILTER'=>'mysqli_real_escape_string',*/

    //数据库设置
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'jianding_beian', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'on_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, //

)

?>