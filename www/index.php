<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('blocks/head.php'); ?>
</head>

<body>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else if (isset($_GET['page']) && strcmp($_GET['page'], "To the clouds") == 0) {
        $page = 'mindcloud.php';
    } else {
        $page = 'login.php';
    }
    include('pages/' . $page);
    ?>

    <?php include('blocks/scripts.php'); ?>
</body>

</html>