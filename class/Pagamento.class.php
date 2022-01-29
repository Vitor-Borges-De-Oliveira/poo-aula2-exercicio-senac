<?php

class Pagamento{

    public $mensal;
    public $escola;

    function __construct($escola,$mensal){
        
        $this->escola = $escola;
        $this->mensal = $mensal;

    }

    function verPagamento(){

        return "Escola: {$this->escola}<br>
                Mensalidade: {$this->mensal}<br>";

    }

}
