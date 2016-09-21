<?php
/**
 * Created by PhpStorm.
 * User: liuliang
 * Date: 16/9/20
 * Time: 下午7:43
 */
$page = $_GET['page'];
if ($page){
    $path = $page.'.php';
    include ($path);
}