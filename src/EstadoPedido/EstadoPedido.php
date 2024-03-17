<?php

namespace Schons\StatePattern\EstadoPedido;

use Schons\StatePattern\Pedido;

interface EstadoPedido {
    public function processarPagamento(Pedido $pedido) : void;
    public function enviarConfirmacao(Pedido $pedido) : void;
    public function cancelarPedido(Pedido $pedido) : void;
}
