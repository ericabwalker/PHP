<?php 
namespace Name;

class Computer {
    public function test_namespace($test) {
        echo "This is using a namespace to print the following: " . $test;
    }
}

class Mac {
    public function mac_namespace($mac) {
        echo "This is also using a namespace: " . $mac;
    }
}

?>