<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Load thư viện bootstrap -->
    <link rel="stylesheet" href="<?php echo $_DOMAIN ?>bootstrap/css/bootstrap.min.css">
</head>

<body>
    <?php if (!empty($user)) { ?>
        <div class="container">
            <div class="page-header">
                <h1>Newspage <small>Administration</small></h1>
            </div><!-- div.page-header -->
        </div><!-- div.container -->
    <?php } else { ?>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo $_DOMAIN; ?>">Newspage Administration</a>
                </div><!-- div.navbar-header -->
            </div><!-- div.container-fluid -->
        </nav>
    <?php } ?>
