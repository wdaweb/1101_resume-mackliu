<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>我的線上履歷表</title>
</head>
<body>
<div class="container">


    <h1>線上履歷表</h1>

<div class="row border-bottom p-5">
    <div class="col-md-4" style='height:200px'>
        <img src="img/<?=$Title->find(['sh'=>1])['img'];?>" class="h-100">
    </div>
    <div class="col-md-8">
        <ul>
        <?php
            $myself=$Ad->all(['sh'=>1]);
            foreach($myself as $my){
        ?>
            <li><?=$my['text'];?></li>

        <?php        
            }

        ?>
     
        </ul>
    </div>

</div>

<div class="row border-bottom pt-2 pb-5">
    <h3>求職目標</h3>
    <h3>職稱</h3>
    <div>求職描述或條件</div>
</div>
<div class="row border-bottom p-5">
<h3>學經歷</h3>
<div class="col-md-6">學歷</div>
<div class="col-md-6">經歷</div>
</div>
<div class="row border-bottom p-5"></div>
<div class="row border-bottom p-5 flex-wrap">
<h3 class="w-100">作品集</h3>
<?php
$ports=$Image->all(['sh'=>1]);

foreach($ports as $port){
?>
<div class="col-md-4 p-3" style="height:400px;">
    <div class="port-img border rounded-circle w-100" style="background:url('img/<?=$port['img'];?>');background-size:cover;height:300px">
        
    </div>
    <div>
        <div class="port-subject">PHP萬年曆</div>
        <div class="port-descript">使用PHP語言製作的線上萬年曆</div>
    </div>
</div>


<?php
}

?>


</div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>