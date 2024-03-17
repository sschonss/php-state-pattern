# State Pattern - PHP

## Introdução

Este é um exemplo de implementação do padrão de projeto State em PHP. O padrão State permite que um objeto altere seu comportamento quando seu estado interno muda.

Neste exemplo, modelamos um sistema de pedido de compra online, onde um pedido pode estar em três estados: Novo, Em Processamento e Concluído.
Estado do Pedido

A interface EstadoPedido define os métodos que cada estado do pedido deve implementar.

~~~php
interface EstadoPedido {
public function processarPagamento(Pedido $pedido);
public function enviarConfirmacao(Pedido $pedido);
public function cancelarPedido(Pedido $pedido);
}
~~~

## Implementação dos Estados

Há três classes que implementam a interface EstadoPedido: Novo, EmProcessamento e Concluido. Cada classe representa um estado específico do pedido e implementa os métodos de acordo com o comportamento esperado para esse estado.
Classe Pedido

A classe Pedido representa um pedido em si e mantém uma referência para o estado atual do pedido. Ela delega as chamadas de método para o estado atual.

~~~php
class Pedido {
private $estado;

    // Métodos para definir e obter o estado, além de métodos para realizar ações no pedido.
}
~~~

Exemplo de Uso

~~~php
// Criando um pedido
$pedido = new Pedido();

// Processando pagamento
$pedido->processarPagamento();

// Enviando confirmação
$pedido->enviarConfirmacao();

// Cancelando pedido
$pedido->cancelarPedido();
~~~

## Conclusão

O padrão de projeto State é útil quando você tem um objeto que pode mudar de comportamento dependendo de seu estado interno. Ele ajuda a manter o código mais organizado e flexível, permitindo fácil extensão para novos estados e evitando condicionais complexas.

