<?php

namespace Schons\StatePattern\EstadoPedido;

use Schons\StatePattern\Pedido;

class Concluido implements EstadoPedido {
    public function processarPagamento(Pedido $pedido): void
    {
        echo "O pagamento já foi processado para o pedido concluído." . PHP_EOL;
    }

    public function enviarConfirmacao(Pedido $pedido): void
    {
        echo "O pedido já foi entregue e confirmado." . PHP_EOL;
    }

    public function cancelarPedido(Pedido $pedido): void
    {
        echo "Não é possível cancelar um pedido já concluído." . PHP_EOL;
    }
}