<?php

namespace Schons\StatePattern\EstadoPedido;

use Schons\StatePattern\Pedido;

class Novo implements EstadoPedido
{
    public function processarPagamento(Pedido $pedido): void
    {
        echo "Processando pagamento para o pedido novo." . PHP_EOL;

        sleep(3);

        $pedido->setEstado(new EmProcessamento());
    }

    public function enviarConfirmacao(Pedido $pedido): void
    {
        echo "Enviando confirmação de pedido para o pedido novo." . PHP_EOL;
        sleep(2);
    }

    public function cancelarPedido(Pedido $pedido): void
    {
        echo "Cancelando o pedido novo." . PHP_EOL;
        sleep(3);
    }

}