<?php
/**
 * User: Freddy
 * Date: 2/24/14
 */

include_once "lib/twig.php";
include "lib/konstanta.php";
include "lib/db.php";

$twig = new Twig();

$konstanta = new Konstanta();
$db = new Database();
$dbh = $db->init();
$firstName = isset($_GET["firstName"])?$_GET["firstName"]:"";

if ($firstName != "") {
    //TODO : Search if those name already input or not

    $stmt = $dbh->prepare("INSERT INTO `church_member`(`first_name`,`last_name`)
            VALUES (:firstName, :lastName)");

    $lastName = isset($_GET["lastName"])?$_GET["lastName"]:"";
    $stmt->bindParam(':firstName',$_GET["firstName"]);
    $stmt->bindParam(':lastName',$lastName);

    $stat = $stmt->execute();

    $twig->display("membermaster.html",array("stat"=>$stat));
} else {
    $twig->display("membermaster.html");
 }