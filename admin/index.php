<?php
// load db và thông tin chung
require_once 'core/init.php';

// load header
require_once 'includes/header.php';

// nếu đã đăng nhập
if (!empty($user)) {
    require_once 'templates/sidebar.php';

    require_once 'templates/content.php';
} else {
    require_once 'templates/signin.php';
}

// load footer
require_once 'includes/footer.php';
