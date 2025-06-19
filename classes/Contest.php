<?php

include('classes/FortuneWheel.php');

class Contest {
    
    const CONTESTANTS_NUMBER = 3;

    private FortuneWheel $wheel;
    
    public function __construct(private Panel $panel, private array $contestants){
        $this->turnNumber = 0;
        $this->wheel = new FortuneWheel();
    }
    
    public function play(): void {
        while(!$this->panel->isSolved()) {
            $currentContestant = $this->turnNumber % self::CONTESTANTS_NUMBER;
            echo $this->contestants[$currentContestant]->getName()." say a letter!".PHP_EOL;
            $wheelValue = $this->wheel->throw();
            var_dump($wheelValue);
            $currentLetter = $this->contestants[$currentContestant]->sayLetter();
            echo PHP_EOL;
            if(!$this->panel->solveLetter($currentLetter)) ++$this->turnNumber;
            $this->panel->show();
        }
    }
}

?>