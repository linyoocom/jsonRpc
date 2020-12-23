<?php
/**
 * Created by PhpStorm.
 * User: linyoocom
 * Date: 2020/12/23
 * Time: 下午5:09
 */
declare(strict_types=1);

namespace App\JsonRpc;

interface CalculatorServiceInterface
{
    public function add(int $v1, int $v2): int;
}
