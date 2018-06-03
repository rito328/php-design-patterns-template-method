<?php
namespace App\Car;


class MyCarSports extends Car
{
    public function type()
    {
        return 'スポーツ';
    }

    public function engine()
    {
        return 'V8ターボ';
    }

    public function body()
    {
        return 'carbon';
    }

    public function interior()
    {
        return 'red';
    }

    public function wing()
    {
        return 'GTウイング';
    }
}