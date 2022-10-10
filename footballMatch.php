<?php
class FutboloRungtynes {

    public $patirtaTrauma;
    public $kuriKomandaLaimejo;
    public $rungtyniuRezultatas;
    public $randomValue;
    public $pirmaKomanda;
    public $antraKomanda;

    public function simuliuotiTraumas() {
        $this->randomValue = rand(1,100);
        if ($this->randomValue%3.5==0 && $this->randomValue%10==0){
            echo $this->patirtaTrauma=2;

        }
else{
echo $this->patirtaTrauma=0;

}

    }


    public function simuliuotiRungtynes(){

        $this->pirmaKomanda = rand(0,2);
        $this->antraKomanda = rand(0,2);

       return $this->rungtyniuRezultatas = [$this->pirmaKomanda, $this->antraKomanda];

    }

    public function laimetojai(){

        if($this->pirmaKomanda > $this->pirmaKomanda){
            echo $this->kuriKomandaLaimejo = 1;
        } elseif ($this->pirmaKomanda < $this->antraKomanda){
            echo $this->kuriKomandaLaimejo = 2;
        } else{
            echo "Rungtynes baigesi lygiosiomis";
        }

    }
};

    $futboloRungtynes = new FutboloRungtynes();

    echo $futboloRungtynes->simuliuotiTraumas();
    echo "<br>";
    var_dump($futboloRungtynes->simuliuotiRungtynes());
    echo "<br>";
    echo $futboloRungtynes->laimetojai();
// ?>