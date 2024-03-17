<?php

require __DIR__ . '/vendor/autoload.php';

use Schons\StatePattern\Pedido;

$pedido = new Pedido();

$pedido->processarPagamento();
$pedido->enviarConfirmacao();

$pedido->processarPagamento();
$pedido->enviarConfirmacao();

$pedido->cancelarPedido();
$pedido->processarPagamento();