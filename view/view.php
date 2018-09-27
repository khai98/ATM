<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khai Design</title>
</head>
<body>
<div class="container">
    <link rel="stylesheet" href="css/style.css">
    <div class="col-md-12">
        <a class="container" style="margin: 25px auto;">
            <a class="caption">TRANSFER HISTORY</a>
            <a href="http://localhost:8888/WebPHP/Translection/index.php?page=addTransfer">Transfer </a>
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Id Người Nhận </th>
                    <th>Id Người Gửi</th>
                    <th>Content</th>
                    <th>Success</th>
                    <th>Account</th>
                </tr>
                <?php foreach ($results as $result) : ?>
                    <tr>
                        <td class="dark-row"> <?php echo $result['id'] ?></td>
                        <td class="light-row"> <?php echo $result['id_user_nhan'] ?></td>
                        <td class="dark-row"> <?php echo $result['id_user_gui'] ?></td>
                        <td class="light-row"> <?php echo $result['content'] ?></td>
                        <td class="dark-row"> <?php echo $result['success'] ?></td>
                        <td class="light-row"> <?php echo $result['account'] ?> $</td>
                    </tr>
                <?php endforeach; ?>
                </thead>
            </table>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</body>
</html>