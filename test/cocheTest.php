<?php

use PHPUnit\Framework\TestCase;
include './src/Coche.php';

class cocheTest extends TestCase {

   public function testReposta() {
       
      $objeto = new Coche("Ferrari", "petroleo", 100, 0);
      $this->assertEquals(100, $objeto->reposta(50));

  }

       
}


?>