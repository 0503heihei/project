<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/9/19
 * Time: 下午3:03
 */

mysql_connect("localhost","root","");
mysql_select_db("0503");
mysql_query("set names utf8");

$sql = "SELECT * FROM licheng ORDER by id  ";



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        html,body{
            width: 100%;
            height: 100%;
        }
        #ab_guanli{
            width: 1200px;
            height: 800px;
        }
        #weihu{
            width: 200px;
            height: 700px;
            border: 1px solid black;
            display: inline-block;
        }
        #dakuang{
            width: 800px;
            height: 700px;
            border: 1px solid black;
            display: inline-block;
        }
        button{
            width: 70px;
            height: 20px;
            margin-left: 20px;
        }
        #tiao{
            width: 100%;
            border-bottom: 1px solid black;
            padding: 30px;
        }
        #xieru{
            width: 500px;
            height: 50px;
            display: none;
        }
    </style>
</head>
<body>

<section id="ab_guanli">
    <div id="weihu">
        首页信息维护
    </div>
    <div id="dakuang">
        <div id="tiao">
            <button id="add">新增</button>
            <button>查询</button>
            <button>模糊查询</button>
        </div>
        <div id="xieru">
            事件:<input type="text" id="content">
            时间:<input type="text" id="timer">
            <button id="shangchuan">上传</button>
        </div>
    </div>

</section>
<script src="js/jquery-2.1.3.min.js"></script>
<script>
    $("#add").click(function () {
        $("#xieru").show();
    });

    $("#shangchuan").click(function () {
        $.ajax({
            url:"abzeng_api.php",
            type:"get",
            data:{
                type:"add",
                things:$("#content").val(),
                time:$("#timer").val()
            },
            dataType:"json",
            success:function (data) {
                if(data.err == 0){
                    addLi($("#content").val(),data.time,0,0,data.id);
                }else{
                    alert("提交失败!");
                }
            }
        })
    })

</script>
</body>
</html>
