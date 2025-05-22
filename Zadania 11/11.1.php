<?php

class NoweAuto{
    public $model = "";
    public $cena = 0;
    public $kurs = 4.24;

    function __construct($model,$cena,$kurs){
        $this->model=$model;
        $this->cena=$cena;
        $this->kurs=$kurs;
    }
    function ObliczCene(){
        $cena = $this->cena;
        $kurs = $this->kurs;
        return $cena * $kurs;
    }
}
$obj = new NoweAuto("Volvo",2000,4.24);
echo $obj->model . " <br>koszt:  " . $obj->cena . " Euro <br> obecny kurs:" . $obj->kurs;
echo "<br>Cena w PLN: " . $obj->ObliczCene();
echo "<br><br>";

class AutoZDodatkami extends NoweAuto{
    public $alarm = 0;
    public $radio = 0;
    public $klimatyzacja = 0;

    function __construct($model,$cena,$kurs,$alarm,$radio,$klimatyzacja){
        parent::__construct($model,$cena,$kurs);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }

    function get_cena(){
        return $this->cena;
    }

    public function ObliczCene(){
        $cena = $this->cena;
        $kurs = $this->kurs;
        $alarm = $this->alarm;
        $radio = $this->radio;
        $klimatyzacja = $this->klimatyzacja;
        return ($cena + $klimatyzacja + $alarm + $radio) * $kurs;
    }
}

$obj2 = new AutoZDodatkami("Honda",3000,4.24,50,100,400);
echo $obj2->model . " <br>koszt:  " . $obj2->cena . " Euro + dodatki(alarm,radio,klimatyzacja): $obj2->alarm,$obj2->radio,$obj2->klimatyzacja<br> obecny kurs:" . $obj2->kurs;
echo "<br>Cena w PLN: " . $obj2->ObliczCene();
echo "<br><br>";

class Ubezpieczenie extends AutoZDodatkami{
    public $wartoscubezpieczenia = 0;
    public $lataposiadania = 0;

    function __construct($model,$cena,$kurs,$alarm,$radio,$klimatyzacja,$wartoscubezpieczenia,$lataposiadania){
        parent::__construct($model,$cena,$kurs,$alarm,$radio,$klimatyzacja);
        $this->wartoscubezpieczenia =$wartoscubezpieczenia;
        $this->lataposiadania = $lataposiadania;
    }
    public function ObliczCene(){
        $cenacalkowita = ($this->cena + $this->alarm + $this->radio + $this->klimatyzacja) * $this->kurs;
        return $this->wartoscubezpieczenia * $cenacalkowita *((100-$this->lataposiadania)/100);
    }
}
$obj3 = new Ubezpieczenie("Audi", 2500,4.24,75,125,300,0.20,15);
echo $obj3->model . "<br> Koszt calkowity ubezpieczenia: " . $obj3->ObliczCene();
?>
