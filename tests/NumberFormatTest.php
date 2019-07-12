<?php
/**
 * 数字转化
 * @author gavin
 */
 
require '../vendor/autoload.php';
 
use \numberFormat;
 
$number = '102400010';
echo numberFormat\NumberFormat::byte_format($number);
