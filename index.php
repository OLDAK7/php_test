<?php 


class Example{
    private $name;
    public function __construct($name){
        $this->name = $name;
    }

    public function show_info(){
        return "Hello {$this->name}";
    }

    public function write(){
        echo $this->show_info();
    }
}

class Example2 extends Example{
    public function __construct($name){
        parent::__construct($name);   
    }
}

$user = new Example2('Almaz Ramilovich');
$user->write();