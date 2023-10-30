<?php 

class Computer{
    
    public $ram;
    public $rom;
    public $scheda_video;
    public $hdd;
    public $cpu;
    
 
    public function __construct(cpu $ram, rom $rom, scheda_video $scheda_video, hdd $hdd, cpu $cpu ) {
        $this->ram = $ram;
        $this->rom = $rom;
        $this->scheda_video = $scheda_video;
        $this->hdd = $hdd;
        $this->cpu = $cpu;

    }

};

abstract class Memory{
    public $size;
    public $name;


    public function construct($name, $size){
        $this->size = $size;
        $this->name = $name;
    }
}

class Ram extends Memory{
    public $speed;

    public function construct($name, $size, $speed){
        parent::construct($name, $size);
        $this->speed = $speed;
    }
}

class Rom extends Memory{
    public $width;

    public function construct($name, $size, $width){
        parent::construct($name, $size);
        $this->width = $width;
    }
}

class Scheda_video extends Memory{
    public $frequency;

    public function construct($name, $size, $frequency){
        parent::construct($name, $size);
        $this->frequency = $frequency;
    }
}


$ram = new Ram("Corsair", 50, 30);
$rom = new Rom("Toshiba", 80, 3.5);
$scheda_video = new Scheda_video("Toshiba", 80, 120);
$computer = new Computer($ram, $rom, $scheda_video);

var_dump($computer);


?>



/* ///[ES. 1]:
Creare un Computer con Dependency Injection e Object Composition, composto da 
RAM
ROM
Scheda Video
altro /

class Computer{
    public $ram;
    public $rom;
    public $scheda_video;

    public function construct(Ram $RAM, Rom $ROM, Scheda_video $SCHEDA_VIDEO){
        $this-> ram = $RAM;
        $this->rom = $ROM;
        $this->scheda_video = $SCHEDA_VIDEO;
    }
};

abstract class Memory{
    public $size;
    public $name;

    public function construct($name, $size){
        $this->size = $size;
        $this->name = $name;
    }
}

class Ram extends Memory{
    public $speed;

    public function construct($name, $size, $speed){
        parent::construct($name, $size);
        $this->speed = $speed;
    }
}

class Rom extends Memory{
    public $width;

    public function construct($name, $size, $width){
        parent::construct($name, $size);
        $this->width = $width;
    }
}

class Scheda_video extends Memory{
    public $frequency;

    public function construct($name, $size, $frequency){
        parent::construct($name, $size);
        $this->frequency = $frequency;
    }
}


$ram = new Ram("Corsair", 50, 30);
$rom = new Rom("Toshiba", 80, 3.5);
$scheda_video = new Scheda_video("Toshiba", 80, 120);
$computer = new Computer($ram, $rom, $scheda_video);

var_dump($computer);