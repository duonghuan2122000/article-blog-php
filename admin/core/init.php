<?php

// load các thư viện php
require_once 'classes/DB.php';
require_once 'classes/Session.php';
require_once 'classes/Functions.php';

// kết nối db
$db = new DB();
$db->connect();
$db->set_char("utf8");

// thông tin chung
$_DOMAIN = 'http://localhost/newspage/admin/';

date_default_timezone_set("Asia/Ho_Chi_Minh");
$date_current = date("Y-m-d H:i:sa");

// khởi tạo session
$session = new Session();
$session->start();

// kiểm tra session user
$user = $session->get('user');
