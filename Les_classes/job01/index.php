<?php 
 class Operation{
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1, $nombre2) {
        $this->nombre1 = $nombre1;
       $this->nombre2 = $nombre2;
    }
 }

 $monOperation = new Operation(0, 0);

 echo $monOperation->nombre1;
 echo $monOperation->nombre2;