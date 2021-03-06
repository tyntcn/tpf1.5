<?php
!defined('TF_IN') && exit('Access Denied');
return array(
	'FILE_ISNOT_EXIST'				=>	'文件\\1不存在',
    'FILE_ISNOT_EXISTORNULL'    => '文件\\1不存在或为空文件',
    'HTTP_NO_FILE'          =>  '未找到文件“\\1”',
	'STRING_LEN_NOMORETHAN_20'		=>	'长度不要超过20个字符',
	'VIEW_ISNOT_EXIST'				=>	'视图文件不存在',
	'ROUTER_ENTRY_DISABLE'			=>	'默认路由入口不允许直接访问',
	'CONTROLLER_FILE_ISNOT_EXIST'	=>	'控制器文件\\1不存在',
	'CONTROLLER_ISNOT_EXIST'		=>	'控制器\\1不存在',
	'CONTROLLER_ISNOT_INTERFACE'	=>	'控制器\\1未继承抽象类Controller',
	'PARAM_SUFFIX_ERROR'			=>	'url扩展名\\1未设置，路由不正确',
	'ACTION_ISNOT_EXIST'			=>	'控制器\\1不存在\\2方法',
	'COMPONENT_FILE_ISNOT_EXIST'	=>	'组件文件\\1不存在',
	'COMPONENT_IMPLEMENT_INTERFACE'	=>	'组件\\1未继承抽象类Component',
    'WIDGET_FILE_ISNOT_EXIST'   =>  '挂件\\1文件不存在',
    'WIDGET_ISNOT_INTERFACE'	=>	'挂件\\1未继承抽象类Widget',
    'WIDGET_ISNOT_ACTION'	=>	'挂件\\1不存在\\2方法',
    'FILTER_FILE_ISNOT_EXIST'   =>  '过滤器\\1文件不存在',
    'FILTER_ISNOT_INTERFACE'        => '过滤器\\1未继承抽象类Filter',
	'MODEL_ISNOT_EXIST'				=>	'模型\\1文件不存在',
	'MODEL_ISNOT_FOUND'				=>	'模型\\1未找到，请确认是否设置$this->models',
	'MODEL_IMPLEMENT_INTERFACE'		=>	'模型\\1未继承模型父类Model',
    'MODEL_NOT_DEFINED_TABLENAME'   => '模型\\1未设置表名，无法使用数据查询',
	'MYSQL_ISNOT_EXTENSION'			=>	'php.ini中未启用mysql模块',
    'MYSQLI_ISNOT_EXTENSION'		=>	'php.ini中未启用mysqli模块',
    'PDOMYSQL_ISNOT_EXTENSION'		=>	'php.ini中未启用pdo_mysql模块',
	'MYSQL_CONNECT_ERROR'			=>	'mysql数据库连接错误，数据服务器，用户名，密码是否异常(\\1)',
	'MYSQL_CHECK_DBCONFIG'			=>	'请检查应用程序db配置项',
	'DB_QUERY_EXECUTE_TIME'			=>	'数据查询（\\1）消耗时间\\2s',
	'DB_ISNOT_DRIVERS'				=>	'数据驱动[\\1]不存在，检查应用程序db配置项',
    'PARAM_ISNOT_STRING'                 => '参数必须为字符串',
	'DBCONFIG_ISNOT_EXIST'			=>	'数据配置文件配置项[\\1]数组未找到',
	'DBCONFIG_ERROR'				=>	'数据配置文件配置项[\\1]设置不正确，检查应用程序db配置项',
	'DBCONFIG_WRCONFIG_ERROR'		=>	'数据配置文件配置项[\\1]中，读写库未找到该配置文件config配置项中的对应数据服务器配置',
    'DBCONFIG_FIELD_ISNOT_EXIST'    =>  '数据表\\1不存在\\2字段',
	'SESSION_ISNOT_STORAGE'			=>	'不存在session存储区域[\\1]',
	'SESSION_ISNOT_MODULE'			=>	'session使用的Storage未加载 \\1模块',
    'SESSION_CONNECT_FAIL'         => 'session存储链接失败，不能正常链接\\1',
	'CACHE_ISNOT_STORAGE'			=>	'不存在cache存储区域[\\1]',
	'CACHE_FILE_OPEN_ERROR'			=>	'缓存存储路径打开失败',
	'CACHE_ISNOT_MODULE'			=>	'cache使用的Storage未加载\\1模块',
    'CACHE_CONNECT_FAIL'         => 'cache存储链接失败，不能正常链接\\1',
	'PLUGIN_ISNOT_EXIST'				=>	'扩展插件\\1不存在',
	'HELPER_ISNOT_EXIST'			=>	'助手类[\\1]不存在',
	'HELPER_IMPLEMENT_INTERFACE'	=>	'助手类[\\1]未继承父类Helper',
    'SCAFFOLD_ISNOT_MODEL'          =>  '脚手架模型未找到',
    'JSON_VIEW_TITLE'               =>  '返回JSON结果如下',
    'JSONP_VIEW_TITLE'               =>  '返回JSONP结果如下',
	'TYNT_404_TITLE'				=>	'Sorry!页面未找到',
	'TYNT_404_CONTENT'				=>	'对不起！访问的页面不存在，请重试',
	'TYNT_DEBUG_TITLE'				=>	'应用程序调试信息',
	'TYNT_DEBUG_MEMERY'				=>	'消耗内存',
	'TYNT_DEBUG_TIME'				=>	'运行时间',
	'TYNT_DEBUG_LOG'				=>	'日志情况',
	'TYNT_DEBUG_ROUTER'				=>	'路由情况',
	'TYNT_DEBUG_MODULE'				=>	'模块',
	'TYNT_DEBUG_CONTROLLER'			=>	'控制器',
	'TYNT_DEBUG_ACTION'				=>	'方法',
    'TYNT_DEBUG_MODEL'             => '模型',
    'TYNT_DEBUG_VIEW'               => '视图路径',
	'TYNT_DEBUG_PARAM'				=>	'路由参数',
	'TYNT_DEBUG_URI'				=>	'路由后的uri',
	'TYNT_DEBUG_ENV'				=>	'环境变量情况',
	'TYNT_DEBUG_SERVER_NAME'		=>	'主机名',
	'TYNT_DEBUG_SERVER_ADDR'		=>	'服务器IP',
	'TYNT_DEBUG_SERVER_PORT'		=>	'服务器端口',
	'TYNT_DEBUG_MOTHOD'				=>	'提交方式',
	'TYNT_DEBUG_SCRIPT'				=>	'脚本路径',
	'TYNT_DEBUG_USER_AGENT'			=>	'请求头信息',
	'TYNT_DEBUG_CLIENT_ADDR'		=>	'客户端IP',
	'TYNT_DEBUG_CLIENT_PORT'		=>	'客户端端口',
	'TYNT_DEBUG_QUERY_TIMES'		=>	'数据查询次数',
	'TYNT_DEBUG_INCLUDE_FILE'		=>	'包含文件',
	'TYNT_DEBUG_VARIABLE'			=>	'自定义调试变量',
	'TYNT_DEBUG_UNIT'				=>	'单元调试信息',
	'TYNT_DEBUG_UNIT_MEMERY'		=>	'内存使用情况',
	'TYNT_DEBUG_UNIT_TIME'			=>	'消耗时间',
	'TYNT_DEBUG_UNIT_QUERY_TIMES'	=>	'数据查询次数',
    'TYNT_DEBUG_SESSION_ID'         =>  '会话ID',
	'TYNT_ERROR_TITLE'				=>	'系统发生错误',
	'TYNT_ERROR_TITLEINTRO'			=>	'应用程序中发生错误',
	'TYNT_ERROR_INTRO'				=>	'说明',
	'TYNT_ERROR_REPLAY'				=>	'重试',
	'TYNT_ERROR_BACK'				=>	'返回',
	'TYNT_ERROR_SITE'				=>	'错误位置',
	'TYNT_ERROR_TRACE'				=>	'堆栈跟踪',
    'TYNT_TABLEDATA_TITLE'          =>  '表数据情况',
    'TYNT_DICTIONARY_TITLE'         =>  '数据字典',
    'TYNT_DICTIONARY_PRI'           =>  '主键约束',
    'TYNT_DICTIONARY_UNI'           =>  '唯一约束',
    'TYNT_DICTIONARY_MUL'           =>  '可重复',
    'TYNT_DICTIONARY_FIELDNAME'     =>  '字段名',
    'TYNT_DICTIONARY_FIELDISNULL'   =>  '是否空',
    'TYNT_DICTIONARY_FIELDTYPE'     =>  '类型',
    'TYNT_DICTIONARY_FIELDDEFAULT'  =>  '默认值',
    'TYNT_DICTIONARY_FIELDCOMMENT'  =>  '字段说明',
    'TYNT_DICTIONARY_FIELDAUTO'     =>  '自增',
    'TYNT_DICTIONARY_INDEXNAME'     =>  '索引名',
    'TYNT_DICTIONARY_INDEXCOMMENT'  =>  '索引内容',
    'TYNT_DICTIONARY_INDEXUNIQUE'   =>  '聚族索引',
    'TYNT_LEFT_BRACKET'             =>  '【',
    'TYNT_RIGHT_BRACKET'            =>  '】',
    'TYNT_MODEL_TITLE'              =>  '模型文件生成结果',
    'TYNT_MODEL_CREATE'             =>  '模型文件\\1生成:',
    'TYNT_MODEL_REPLACEPERFIX'      =>  '数据表前缀替换结果',
    'TYNT_MODEL_REPLACERESULT'      =>  '表名\\1替换为\\2:'
);