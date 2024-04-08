<?php
// funkce pro kontrolu vstupu
function kontrolaVstupu($a, $b)
{
    // not valid input v pripade ze $a a $b nejsou int a jsou mensi nebo rovno nule
    if(!is_int($a) || !is_int($b) || $a <= 0 || $b <= 0){
        echo "not valid input\n";
        return;
    }
    // vypis vetsi cislo
    elseif ($a > $b){
        echo "a is bigger";
    }
    else {
        echo "b is bigger";
    }
}
// ziskej cislo ud uzivatele 
$a = (int) readline("Enter the first value for a\n   ");
$b = (int) readline("Enter the first value for b\n   ");
kontrolaVstupu($a, $b);

?>