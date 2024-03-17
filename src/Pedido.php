<?php

namespace Schons\StatePattern;

use Schons\StatePattern\EstadoPedido\EstadoPedido;
use Schons\StatePattern\EstadoPedido\Novo;

class Pedido {
    private $estado;

    public function __construct() {
        $this->estado = new Novo();
    }

    public function setEstado(EstadoPedido $estado): void
    {
        $this->estado = $estado;
    }

    public function getEstado(): EstadoPedido
    {
        return $this->estado;
    }

    public function processarPagamento(): void
    {
        $this->estado->processarPagamento($this);
    }

    public function enviarConfirmacao(): void
    {
        $this->estado->enviarConfirmacao($this);
    }

    public function cancelarPedido(): void
    {
        $this->estado->cancelarPedido($this);
    }
}