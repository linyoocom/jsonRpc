<?php
/**
 * Created by PhpStorm.
 * User: linyoocom
 * Date: 2020/12/23
 * Time: 下午5:09
 */
namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * Class CalculatorService
 * @RpcService(name="CalculatorService", protocol="jsonrpc", server="jsonrpc")
 */
class CalculatorService implements CalculatorServiceInterface
{
    public function add(int $v1, int $v2): int
    {
        return $v1 + $v2;
    }
}
