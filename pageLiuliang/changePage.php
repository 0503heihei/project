<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/9/18
 * Time: 下午8:34
 */

$page=$_GET['Page'];
if($page) {
    $path = $page .'.php';
    include($path);
}