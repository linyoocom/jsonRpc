<?php
/**
 * Created by PhpStorm.
 * User: linyoocom
 * Date: 2020/12/24
 * Time: 下午3:23
 */

//服务中心  配置完成后，在启动服务时，Hyperf 会自动地将 @RpcService 定义了 publishTo 属性为 consul 的服务注册到服务中心去。
//要使用此功能需安装 hyperf/service-governance 组件
return [
    'uri' => 'http://0.0.0.0:8500',   //这里consul是使用的容器启动的,在同一个网络下
];
