<?php
/**
 * User: Freddy
 * Date: 2/26/14
 */

include_once "lib/twig.php";
include "lib/konstanta.php";
include "lib/db.php";

$twig = new Twig();

$konstanta = new Konstanta();
$db = new Database();
$dbh = $db->init();
$departmentName = isset($_GET["departmentName"])?$_GET["departmentName"]:"";

if ($departmentName != "") {
    //TODO : Search if those name already input or not

    $stmt = $dbh->prepare("INSERT INTO `department`(`name`)
            VALUES (:departmentName)");

    $stmt->bindParam(':departmentName',$departmentName);

    $stat = $stmt->execute();
    $twig->display("departmentMaster.html",array("stat"=>$stat));
} else {
    $twig->display("departmentMaster.html");
}