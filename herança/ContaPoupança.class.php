<?php
require_once "ContaBancaria.class.php";

class ContaPoupança extends ContaBancaria{

    public function __construct(protected float $saldo){
        parent::__construct($saldo);
    }

}