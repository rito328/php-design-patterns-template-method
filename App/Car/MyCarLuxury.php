<?php
namespace App\Car;


class MyCarLuxury extends Car
{
    public function type()
    {
        return 'ラグジュアリー';
    }

    public function engine()
    {
        return '3.0L直列6気筒ターボ';
    }

    public function body()
    {
        return 'Fiber reinforced plastic';
    }

    public function interior()
    {
        return 'black';
    }

    public function sunroof()
    {
        return 'サンルーフ';
    }
}