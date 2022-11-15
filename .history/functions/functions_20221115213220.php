<?php

$db = mysqli_connect("localhost","root","", "ecom_store");

function getPro(){

    global $db;

    $get_products = "select * from products order by 1 DESC LIMIT 0,8";

    $run_products = mysqli_query($db,$get_products);

}
