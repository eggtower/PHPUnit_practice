<?php
require_once "./vendor/autoload.php";
require_once "./src/plus.php";

use PHPUnit\Framework\TestCase;

class FirstTest extends Testcase{
    
    public function testPlus(){
        $result = plus(1,2);

        $this->assertIsInt($result);
        $this->assertEquals(3,$result);
    }

}

?>