<?php
namespace App\Car;


abstract class Car
{
    /**
     * ハンドル
     * @return array
     */
    public function handle()
    {
        return ['right', 'left', 'horn'];
    }

    /**
     * アクセル
     * @return string
     */
    public function accelerator()
    {
        return 'move on!';
    }

    /**
     * ブレーキ
     * @return string
     */
    public function brake()
    {
        return 'stop';
    }

    // タイプ
    protected abstract function type();
    // エンジン
    protected abstract function engine();
    // ボディ
    protected abstract function body();
    // 内装
    protected abstract function interior();
}