<?php
include_once 'MyList.php';
$list = new MyList(5);
$list->add(1);
$list->add(2);
$list->add(3);
$list->add(4);
$list->add(5);
$list->add(6);
$list->remove(0);
echo '<pre>';
var_dump($list->elements);
$list->insert(2,'ma');
$list->get(2);
var_dump($list->elements);