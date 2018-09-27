<?php
require 'model/Database.php';
require 'model/ChangTrade.php';
require 'controller/Controller.php';

use \Controller\Controller;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> ATM </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/css/util.css">
    <link rel="stylesheet" type="text/css" href="view/css/main.css">
</head>
<body>
<?php
$controller = new \Controller\Controller();
$page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;

switch ($page){
    case 'addTransfer':
        $controller->addTransfer();
        break;
    case 'view':
        $controller->getAll();
        break;
//    case 'delete':
//
//        $controller->delete();
//        break;
//    case 'edit':
//        $controller->edit();
//        break;
    case 'login':
        $controller->login();
        break;
    default:
        $controller->login();
        break;
}
?>
<!--===============================================================================================-->
<script src="view/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="view/vendor/bootstrap/js/popper.js"></script>
<script src="view/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="view/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="view/vendor/tilt/tilt.jquery.min.js"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<!--===============================================================================================-->
<script src="/view/js/main.js"></script>
</body>
</html>
