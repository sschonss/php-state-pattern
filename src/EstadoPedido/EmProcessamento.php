<?php

namespace Schons\StatePattern\EstadoPedido;

use Schons\StatePattern\Pedido;

class EmProcessamento implements EstadoPedido {
    public function processarPagamento(Pedido $pedido): void
    {
        echo "O pagamento já foi processado para o pedido em processamento." . PHP_EOL;
    }

    public function enviarConfirmacao(Pedido $pedido): void
    {
        echo "Enviando confirmação de entrega para o pedido em processamento." . PHP_EOL;
        sleep(3);
        $pedido->setEstado(new Concluido());
    }

    public function cancelarPedido(Pedido $pedido): void
    {
        echo "Cancelando o pedido em processamento." . PHP_EOL;
        sleep(2);
        $pedido->setEstado(new Novo());
    }
}