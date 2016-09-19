<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/9/18
 * Time: 下午8:34
 */

$page=$_GET['page'];
if($page) {
    $path = $page .'.html';
    include($path);
}