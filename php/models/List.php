<?php

class Lista {
    //Props
    public 
    $arrayGente = 
    ['Lolo',
    'Cristian',
    'Jaume',
    'Mateo',
    'Jose',
    'Julia',
    'Jorge',
    'Toni'];

//Crear lista random

public function getRandomList()
{
    $newArray = shuffle($this->arrayGente);
    return $newArray;
}

//Pintar lista de gente
public function arrayToList()
{   
    foreach($this->getRandomList() as $value){
    echo '<li> '  .$value .'</li>';
    }
}
}
