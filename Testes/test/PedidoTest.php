<?php

use PHPUnit_Framework_TestCase as PHPUnit;
  
require_once '../../../src/casa.php';

class pedidoTest extends PHPUnit{
                 
    //Função de teste de tipo - Compara tipo da variável Preco
    public function testType() {
        $pedido = new Pedido(10,10,10,10,10,100.50);
        $this->assertInternalType('float', $pedido->getPreco());
    }
 
    //Função de teste do id do pedido - Verifica numero de id cadastrado
    public function testNumeroID() {
        $pedido = new Pedido(10,10,10,10,10,100.50);
        $this->assertEquals(10, $pedido->getId());
    }
    
    //Função de teste do id da casa dentro de pedido - Verifica numero de id cadastrado
    public function testNumeroIDCasa() {
        $pedido = new Pedido(10,10,10,10,10,100.50);
        $this->assertEquals(10, $pedido->getIdCasa());
    }
 
}
?>
?>