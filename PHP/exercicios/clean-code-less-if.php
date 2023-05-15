<?php

class Order
{
    public $orderStatus = 'in_transport';

    public function getStatus()
    {
        return $this->orderStatus;
    }
}



function mapOrderStatusToLabel($order)
{
    $label = 'Desconhecido';

    if ('complete' === $order->getStatus()) {
        $label = 'Pedido Entregue';
    }

    if ('pending' === $order->getStatus()) {
        $label = 'Aguardando pagamento';
    }

    if ('in_transport' === $order->getStatus()) {
        $label = 'Em transporte';
    }

    if ('new' === $order->getStatus()) {
        $label = 'Pedido aceito';
    }

    return $label;
}


function mapOrderStatusToLabel2($order)
{
    switch ($order->getStatus()) {
        case 'complete':
            return 'Pedido Entregue';

        case 'pending':
            return 'Aguardando pagamento';

        case 'in_transport':
            return 'Em transporte';

        case 'new':
            return 'Pedido aceito';

        default:
            return 'Desconhecido';
    }
}


function mapOrderStatusToLabel3($status)
{
    $labels = [
        'complete' => 'Pedido Entregue',
        'pending' => 'Aguardando pagamento',
        'in_transport' => 'Em transporte',
        'new' => 'Pedido aceito',
        'unknown' => 'Desconhecido'
    ];
    return $labels[$status] ?? $labels['unknown'];
}


$order = new Order();
$orderStatus = mapOrderStatusToLabel($order);
$orderStatus2 = mapOrderStatusToLabel2($order);
$orderStatus3 = mapOrderStatusToLabel3($order->getStatus());
echo $orderStatus;
echo PHP_EOL;
echo $orderStatus2;
echo PHP_EOL;
echo $orderStatus3;
