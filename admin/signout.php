<?php 

// load db & thông tin chung
require_once 'core/init.php';

// xóa session
$session->destroy('user');
new Redirect($_DOMAIN);