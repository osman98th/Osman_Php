<?php
$square = function ($n) {
    return $n * $n;
};
echo $square(5);
// Outputs: 25


function multiplier($x)
{
    return function ($y) use ($x) {
        return $x * $y;
    };
}

$double = multiplier(2);
echo $double(5); // Outputs: 10

$triple = multiplier(3);
echo $triple(5); // Outputs: 15




//  array
$people = [
    ['name' => 'Alice', 'age' => 30],
    ['name' => 'Bob', 'age' => 25],
    ['name' => 'Carol', 'age' => 35],
];
usort($people, function ($a, $b) {
    return $a['age'] <=> $b['age'];
});
print_r($people);

