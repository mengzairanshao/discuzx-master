<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: index.php 33969 2013-09-10 08:32:14Z nemohou $
 */

/**
 * $_SERVER["QUERY_STRING"]  获取查询 语句，实例中可知，获取的是?后面的值
 * $_SERVER["REQUEST_URI"]   获取 http://localhost 后面的值，包括/
 * $_SERVER["SCRIPT_NAME"]   获取当前脚本的路径，如：index.php
 * $_SERVER["PHP_SELF"]      当前正在执行脚本的文件名
 */
if(!empty($_SERVER['QUERY_STRING'])) {
	$plugin = !empty($_GET['oem']) ? 'mobileoem' : 'mobile';
	$dir = '../../source/plugin/'.$plugin.'/';
	chdir($dir);
	if((isset($_GET['check']) && $_GET['check'] == 'check' || $_SERVER['QUERY_STRING'] == 'check') && is_file('check.php')) {
		require_once 'check.php';
	} elseif(is_file('mobile.php')) {
		require_once 'mobile.php';
	}
}

?>