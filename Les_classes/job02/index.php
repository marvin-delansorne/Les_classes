<?php 
 class Operation{
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1, $nombre2) {
        $this->nombre1 = $nombre1;
       $this->nombre2 = $nombre2;
    }

    public function addition(){
        return $this->nombre1 + $this->nombre2;
    }
 }

 $monOperation = new Operation(20, 30);

echo $monOperation->addition();