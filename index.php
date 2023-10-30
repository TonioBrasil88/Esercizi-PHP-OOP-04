<?php 

/* ///Esercizio */

class Computer{
    
    public $ram;
    public $rom;
    public $scheda_video;
    public $cpu;
    
 
    public function __construct(ram $ram, rom $rom, scheda_video $scheda_video, hdd $hdd, cpu $cpu ) {
        $this->ram = $ram;
        $this->rom = $rom;
        $this->scheda_video = $scheda_video;
        $this->hdd = $hdd;
        $this->cpu = $cpu;
      

    }

};

abstract class memory{
    public $name;
    public $size;


    public function construct($name, $size){
        $this->name = $name;
        $this->size = $size;

    }
}

class ram extends memory{
    public $gb;

    public function construct($name, $size, $gb){
        parent::construct($name, $size);
        $this->gb = $gb;
    }
}

class rom extends memory{
    public $rpm;

    public function construct($name, $size, $rpm){
        parent::construct($name, $size);
        $this->width = $width;
    }
}

class scheda_video extends memory{
    public $frequency;

    public function construct($name, $size, $frequency)
    {
        parent::construct($name, $size);
        $this->frequency = $frequency;
    }
}

class hdd extends memory{
    public function construct($name, $size)
    {
        parent::construct($name, $size);
        $this->size = $size;
    } 
}

class cpu extends memory{
    public $frequency;

    public function construct($name, $size, $frequency){
        parent::construct($name, $size);
        $this->frequency = $frequency;
    }
}



$RAM = new ram("G.Skill", 32, 5.000);
$rom = new rom("Crucial", 500, 3.5);
$scheda_video = new scheda_video("Nvidea", 16, 2.200);
$hdd = new hdd("Seagate", 1000, 7200);
$cpu = new cpu("Intel", 300, 3.2,);
$computer = new Computer($ram, $rom, $scheda_video, $hdd, $cpu);

var_dump($computer);




/* [Esercizio 2] */

abstract class Attacco{
    abstract public function attaccare();

}

abstract class Difesa{
    abstract public function difendere(); 

}

class Guerra {
    public $attacco;
    public $difesa;

    public function __construct(Attacco $attacco,Difesa $difesa){
        $this->attacco = $attacco;
        $this->difesa = $difesa;

    } 
    public function scenario(){
        $this->attacco->attaccare();
        $this->difesa->difendere();
    }

}


class Decurione extends Attacco{
public function attaccare(){
    echo "Decurioni! Alla caricaaaa! \n";
}
}

class Equiti extends Attacco{
public function attaccare(){
    echo "Equiti, attaccate ai fianchi \n";
}
}

class Arcieri extends Attacco{
public function attaccare(){
    echo "Scaliate le vostre frecce, non abbiate pieta! \n";
}
}


class Fossato extends Difesa{
public function difendere(){
    echo "Nemici! L'acqua sarà la vostra tomba! \n";
}
}


class Castello extends Difesa{
public function difendere(){
   echo "Fate fuoco sul nemico e difendete queste mura con la vita \n";
}
}


class OlioBollente extends Difesa{
public function difendere(){
    echo "Bruciatili con l'olio \n";
}
}


$fanteria = new Decurione();
$cavalleria = new Equiti();
$arcieri = new Arcieri();
$catapulte = new Fossato();
$MuradiCinta = new Castello();
$fossato = new OlioBollente();
$scenario1 = new Guerra($decurione, $fossatto);
$scenario2 = new Guerra($equiti, $castello);
$scenario3 = new Guerra($arcieri, $oliobollente);


$scenario1->scenario();
$scenario2->scenario();
$scenario3->scenario();


?>



