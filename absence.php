<?php
/**
 * User: Freddy
 * Date: 2/25/14
 */

include_once "lib/twig.php";
include "lib/konstanta.php";
include "lib/db.php";

$twig = new Twig();

$konstanta = new Konstanta();
$db = new Database();
$dbh = $db->init();
$i = 0;
foreach($dbh->query("SELECT * FROM `church_member`") as $row){
    $data[$i]['id'] = $row['id'];
    $data[$i]['firstName'] = $row['first_name'];
    $data[$i]['lastName'] = $row['last_name'];
    $i++;
}
$twig->display("absence.html",array("data"=>$data));