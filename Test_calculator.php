<?php

require_once "PHPUnit/Autoload.php";
require_once "Calculator.php";

class Test_calculator extends PHPUnit_Framework_TestCase{
   //Primer prueba usando phpunit
    public function testSumma() {
        $cal = new Calculator();
        $expected = 4;
        $actual = $cal->summa(2,2);
        $this->assertEquals($expected, $actual);
    }

    public function test_suma_2_mas_2(){
        /*se refiere al mismo objeto/por convencion
        todos los metodos deben llevar test*/
        $cal = new Calculator();
        $this->assertEquals(4, $cal->summa(2, 2));
    }
    public function test_suma1_x_mas_y(){
        $cal = new Calculator();
        $this->assertEquals(23.5, $cal->summa(20.0, 3.5));
    }
    public function test_suma2_x_mas_y(){
        $cal = new Calculator();
        $this->assertEquals(4, $cal->summa(2, 2));
    }
    # PRUEBAS DE RESTA

    public function test_resta_30_menos_X(){
        $cal = new Calculator();
        $this->assertEquals(26.5, $cal->resta(30, 3.5));
    }
    public function test_resta1_X_menos_Y(){
        $cal = new Calculator();
        $this->assertEquals(20, $cal->resta(30, 10));
    }
    public function test_resta2_X_menos_Y(){
        $cal = new Calculator();
        $this->assertEquals(-52, $cal->resta(-32, 20));
    }
    # PRUEBAS DE DIVISION

    public function test_divide_30_entre_10(){
        $cal = new Calculator();
        $this->assertEquals(3, $cal->divide(30, 10));
    }
    public function test_divide1_X_entre_Y(){
        $cal = new Calculator();
        $this->assertEquals(2.5, $cal->divide(250.0, 100.0));
    }
    public function test_divide2_X_entre_Y(){
        $cal = new Calculator();
        $this->assertEquals(11, $cal->divide(33, 3));
    }
    # PRUEBAS DE MULTIPLICACION
    public function test_multiplica_4_por_15(){
        $cal = new Calculator();
        $this->assertEquals(60, $cal->multiplica(4, 15));
    }
    public function test_multiplica1_X_por_Y(){
        $cal = new Calculator();
        $this->assertEquals(15, $cal->multiplica(3, 5));
    }
    public function test_multiplica2_X_por_Y(){
        $cal = new Calculator();
        $this->assertEquals(6, $cal->multiplica(3, 2));
    }



}

?>
