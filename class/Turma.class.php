<?php

class Turma extends Aluno{

    public $turma;
    public $prof;

    function __construct($nome,$turma,$prof){

        parent::__construct($nome);
        $this->turma = $turma;
        $this->prof  = $prof;

    }

    function verTurma(){

        return "Aluno: {$this->nome}<br>
                Turma: {$this->turma}<br>
                Professor: {$this->prof}<br>";

    }

}