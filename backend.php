<?php include "base.php";?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>卓越科技大學校園資訊系統</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
	<style>
		.menu-style{
			color:#000; font-size:13px; text-decoration:none;
		}
        a{
            text-decoration:none;
        }
        a:hover{
            text-decoration:underline;
        }
	</style>
</head>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

    <div id="main">
    
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <span class="t botli">後台管理選單</span>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info list-group-item-action">
                    <a href="./backend.php?do=title">網站標題管理</a>
                    </li>
                    <li class="list-group-item list-group-item-info list-group-item-action">
                    <a href="?do=ad">個人資料管理</a>
                    </li>
                    <li class="list-group-item list-group-item-info list-group-item-action">
                    <a href="?do=mvim">動畫圖片管理</a>
                    </li>
                    <li class="list-group-item list-group-item-info list-group-item-action">
                    <a href="?do=image">作品集管理</a>
                    </li>
                    <li class="list-group-item list-group-item-info list-group-item-action">
                    <a href="?do=total">進站總人數管理</a>
                    </li>
                    <li class="list-group-item list-group-item-info list-group-item-action">
                    <a href="?do=bottom">頁尾版權資料管理</a>
                    </li>
                    <li class="list-group-item list-group-item-info list-group-item-action">
                    <a href="?do=news">最新消息資料管理</a>
                    </li>
                    <li class="list-group-item list-group-item-info list-group-item-action">
                    <a href="?do=admin">管理者帳號管理</a>
                    </li>
                    <li class="list-group-item list-group-item-info list-group-item-action">
                    <a href="?do=menu">選單管理</a>
                    </li>
                </ul>

                    
                    
                    
                    
                    
                    
                    
                    
                    


                </div>
                <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    <span class="t">進站總人數 :<?=$Total->find(1)['total'];?></span>
                </div>
            </div>
            <div style="  width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                <!--正中央-->
                <table width="100%">
                    <tbody>
                        <tr>
                            <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;"
                                class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
                            </td>
                            <td><button onclick="location.replace(&#39;../api/logout.php&#39;)"
                                    style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
                        </tr>
                    </tbody>
                </table>
                <?php
								$do=(isset($_GET['do']))?$_GET['do']:'title';
								$file="backend/".$do.".php";
								// 先判斷檔案是否存在
								if(file_exists($file)){
									include $file;
								}else{
									include "backend/title.php";
								}
	

							?>
            </div>

        </div>

</body>

</html>