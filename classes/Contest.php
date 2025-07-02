<?php

include('classes/FortuneWheel.php');

class Contest {
    
    const CONTESTANTS_NUMBER = 3;

    private FortuneWheel $wheel;
    private int $currentContestantIndex;
    
    public function __construct(private Panel $panel, private array $contestants){
        $this->turnNumber = 0;
        $this->wheel = new FortuneWheel();
    }
    
    public function play(): void {
        while(!$this->panel->isSolved()) {
            $this->currentContestantIndex = $this->turnNumber % self::CONTESTANTS_NUMBER;
            $currentContestant = $this->contestants[$this->currentContestantIndex];
            echo $currentContestant->getName()." say a letter!".PHP_EOL;
            $wheelValue = $this->wheel->throw();
            if($wheelValue == 'Bankruptcy') {
                $currentContestant->declareBankruptcy();
                ++$this->turnNumber;
            }
            //else if($wheelValue == 'Lose')
            else { 
                $currentLetter = $currentContestant->sayLetter();
                echo PHP_EOL;
                if(!$this->panel->solveLetter($currentLetter)) ++$this->turnNumber;
                $this->panel->show();
            }
        }
    }
}

?>