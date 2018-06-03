<?php
namespace App\Car;


class MyCarNomal extends Car
{
    public function type()
    {
        return 'ノーマル';
    }

    public function engine()
    {
        return '直列4気筒DOHC';
    }

    public function body()
    {
        return 'Basic';
    }

    public function interior()
    {
        return 'white';
    }
}