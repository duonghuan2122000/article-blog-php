<?php
// load db và thông tin chung
require_once 'core/init.php';

// load header
require_once 'includes/header.php';

// nếu đã đăng nhập
if (!empty($user)) {
} else {
    require_once 'templates/signin.php';
}

// load footer
require_once 'includes/footer.php';
