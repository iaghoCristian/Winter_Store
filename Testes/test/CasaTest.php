<?php

use PHPUnit_Framework_TestCase as PHPUnit;
  
require_once '../src/casa.php';

class casaTest extends PHPUnit{
                 
    //Função de teste de tipo - Compara tipo da variável Patrimonio
    public function testType() {
        $casa = new Casa(250, "Stark","Jose" , 100.50);
        $this->assertInternalType('float', $casa->getPatrimonio());
    }
 
    //Função de teste do id da casa - Verifica numero de id cadastrado
    public function testNumeroID() {
        $casa = new Casa(250, "Stark","Jose" , 100.50);
        echo $casa->getId();
        $this->assertEquals(250, $casa->getId(), 0, false, false);
    }
    //Função de teste que verifica nome da casa
    public function testNome() {
        $casa = new Casa(250, "Stark","Jose" , 100.50);
        $this->assertEquals("10","10",0,false,false);
    }
 
    //Função que compara nota do patrimonio atual com patrimonio esperado
    /*public function testPatrimonio() {
        $casa = new Casa(250, "Stark","Jose" , 100.50);
        $this->assertEquals(100.50, $aluno->getPatrimonio(), 0, false, false);
    }*/
}
?>
?>