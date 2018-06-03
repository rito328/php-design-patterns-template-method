<?php
require_once 'autoload.php';

use App\Car\MyCarNomal;
use App\Car\MyCarSports;
use App\Car\MyCarLuxury;

$normal = new MyCarNomal();
echo "タイプ：" . $normal->type() . "<br>";
echo "エンジン：" . $normal->engine() . "<br>";
echo "アクセル：" . $normal->accelerator() . "<br><br>";

$sports = new MyCarSports();
echo "タイプ：" . $sports->type() . "<br>";
echo "エンジン：" . $sports->engine() . "<br>";
echo "アクセル：" . $sports->accelerator() . "<br>";
echo "独自装備：" . $sports->wing() . "<br><br>";

$luxury = new MyCarLuxury();
echo "タイプ：" . $luxury->type() . "<br>";
echo "エンジン：" . $luxury->engine() . "<br>";
echo "アクセル：" . $luxury->accelerator() . "<br>";
echo "独自装備：" . $luxury->sunroof() . "<br><br>";