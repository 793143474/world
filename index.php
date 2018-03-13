<?php
/**
 * [WeEngine System] Copyright (c) 2014 WE7.CC
 * WeEngine is NOT a free software, it under the license terms, visited http://www.we7.cc/for more details.
 */
require './framework/bootstrap.inc.php';
$host = $_SERVER['HTTP_HOST'];

if ($host == 'www.pujiante.cn') {
	header('Location: http://www.pujiante.cn/app/index.php?i=3&c=entry&m=ewei_shopv2&do=mobile&r=pc');exit;
}elseif ($host == 'sh.pjtwlsj.com'){
	header('Location: http://www.pujiante.cn/web/merchant.php?c=site&a=entry&m=ewei_shopv2&do=web&r=login&i=3');exit;
}

if (!empty($host)) {
	$bindhost = pdo_fetch("SELECT * FROM ".tablename('site_multi')." WHERE bindhost = :bindhost", array(':bindhost' => $host));
	if (!empty($bindhost)) {
		header("Location: ". $_W['siteroot'] . 'app/index.php?i='.$bindhost['uniacid'].'&t='.$bindhost['id']);
		exit;
	}
}
if($_W['os'] == 'mobile' && (!empty($_GPC['i']) || !empty($_SERVER['QUERY_STRING']))) {
	header('Location: ./app/index.php?' . $_SERVER['QUERY_STRING']);
} else {
	header('Location: ./web/index.php?' . $_SERVER['QUERY_STRING']);
}
