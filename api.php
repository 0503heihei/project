<?php
/**
 * Created by PhpStorm.
 * User: dingjz
 * Date: 16/9/19
 * Time: 下午3:28
 */

mysql_connect("localhost", "root", "");
mysql_select_db("0503");
mysql_query("set names utf8");

$sql = "SELECT * FROM putao_user";
$result = mysql_query($sql);
$result_arr = array();
while ($row = mysql_fetch_assoc($result)){
    array_push($result_arr, $row);
}
echo json_encode($result_arr);
mysql_free_result($result);
mysql_close();