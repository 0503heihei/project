<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        ul{
            overflow: hidden;
        }
        ul li{
            list-style: none;
            float: left;
            width: 200px;
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        img{
            width: 200px;
        }
        .close{
            position: absolute;
            top:0;
            right:0;
        }
    </style>
</head>
<body>
    <h2>后台管理系统</h2>
    <ul>
        <?php
        mysql_connect("localhost", "root", "");
        mysql_select_db("0503");
        mysql_query("set names utf8");

        $sql = "SELECT * FROM image";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)){
            echo "<li>";
            echo "<img src={$row['imgPath']}>";
            echo "<div class='close'>删除</div>";
            echo "</li>";
        }
        mysql_free_result($result);
        mysql_close();

        ?>
    </ul>
    <div class="control">
        <button>增加</button>
        <button>修改</button>
    </div>
<script type="text/javascript">

</script>
</body>
</html>