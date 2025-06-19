<?php

//TODO: Singleton?
class FortuneWheel {
    const VALUES = [25,50,100,250,500,'Lose','Bankruptcy'];
    private int $currentValueIndex;

    public function __construct() {
        $this->currentValueIndex = 0;
    }

    public function throw(): int | string {
        $this->currentValueIndex = array_rand(self::VALUES);
        return self::VALUES[$this->currentValueIndex];
    }

}

?>