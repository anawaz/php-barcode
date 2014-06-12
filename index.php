<?php
require_once('class.barcode.php');

$text = (isset($_GET["code"])?$_GET["code"]:"VESICA");

$barcode = new BarcodeGenerator($text, 50, BarcodeGenerator::ORIENTATION_HORIZONTAL, BarcodeGenerator::CODE_128);
$barcode->render();