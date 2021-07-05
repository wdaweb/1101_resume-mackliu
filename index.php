<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>我的線上履歷表</title>
</head>
<body>
    <h1>線上履歷表</h1>

    <div id="headPic">
        <img src="img/<?=$Title->find(['sh'=>1])['img'];?>" style="width:120px;height:150px">
    
    </div>
</body>
</html>