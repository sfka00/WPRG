<?php
function is_prime($a){

    for($i=2;$i<=$a/2;$i++){
        if($a%$i==0){
            return false;
        }
    }
    return true;
}

function print_primes($a,$b){

    if($a<=1 || $b<=1){
        echo "Start and stop must be positive number! Given: $a and $b! <br>";
        return false;
    }

    if(!is_numeric($a) || !is_numeric($b)){
        echo "$a,$b: Start and stop must be numeric!";
        return false;
    }
    if($a>$b){
        $temp=$a;
        $a=$b;
        $b=$temp;
    }

    echo "$a, $b: ";
    $a=round($a);
    $b=round($b);

    for($i=$a;$i<=$b;$i++){
        if(is_prime($i)){
            echo "$i ";
        }
    }
}

print_primes(5,10);
echo "<br>";
print_primes(10,5);
echo "<br>";
print_primes(5.5,10);
echo "<br>";
print_primes(-5,10);
echo "<br>";
print_primes("prime",10);

?>
