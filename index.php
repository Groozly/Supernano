<?php

/*
 * supernano framework 
 *
 * Copyright (c) 2012 by Dmitry Elfimov
 * Released under the MIT License.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Date: 2012-02-13
 */

$_d = dirname(__FILE__).'/tpl/';
$_c = isset($_GET['c']) ? trim($_GET['c'], "/\/\\ \t\n\r\0\x0B") : '';
$_t = $_d.($_c!='' ? preg_replace('/[^a-zA-Z0-9_-]/', '_', $_c) : 'index').'.php';
if (!file_exists($_t)) {
	header("HTTP/1.0 404 Not Found");
	$_t = $_d.'error404.tpl.php';
}
require($_d.'index.tpl.php');