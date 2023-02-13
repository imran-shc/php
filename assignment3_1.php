<?php

function even_odd($number){
    if($number % 2 == 0){
        return "Even number";
    }else{
        return "Odd number";
    }
}

echo even_odd(8);
