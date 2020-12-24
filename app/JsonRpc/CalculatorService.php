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
 * 目前仅支持通过注解的形式来定义 服务提供者(ServiceProvider)
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性 :publishTo="consul"
 * @RpcService(name="CalculatorService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
class CalculatorService implements CalculatorServiceInterface
{
    // 实现一个加法方法，这里简单的认为参数都是 int 类型
    public function add(int $a, int $b): int
    {
        // 这里是服务方法的具体实现
        return $a + $b;
    }
}
