<?php

namespace Kalenderliebe\Observer\ObserveVerify;

class ObserverSite implements ObserveVerify {

    /**
     * Question if var @int is enough for that or giving out a Message is better we for now
     * @int works
     */
    public $state;

    private $observers;
    
    /**
     * Second Thing is if thats right? Dont really know shit about PHP Still in learning phase
     */
    public function __construct() {
        $this -> $observers = new \SplObjectStorage;
    }

    /**
     * Attach self to Verify php 
     */
    public function attach(\SplObserver $observers): void {
    }

}