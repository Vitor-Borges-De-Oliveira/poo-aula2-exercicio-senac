<?php

class Aluno{

    public $nome;

    function __construct($nome){

        $this->nome = $nome;

    }

    function verAluno(){

        return "Dados do aluno<br><br>
                Aluno: {$this->nome}<br>";

    }



}