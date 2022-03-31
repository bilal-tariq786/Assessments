<?php

$arrayOfObjects = [
        [
            'id' => 1,
            'name' => 'John',
            'age' => '20'
        ],
        [
            'id' => 2,
            'name' => 'Jane',
            'age' => '21'
        ],
        [
            'id' => 3,
            'name' => 'Jack',
            'age' => '22',
        ],
    ];

echo "Oringnal Data\n";
print_r($arrayOfObjects); 
echo "Sort By Age\n";
print_r(sortByAge($arrayOfObjects));
echo "Array of Ages\n";
print_r(getArrayOfAges($arrayOfObjects));
echo "Array of Arrays\n";
print_r(convertToArrayOfArray($arrayOfObjects));


function sortByAge($arrayOfObjects) {
    usort($arrayOfObjects, function ($obj1, $obj2) {
        return ($obj1['age'] > $obj2['age']) ? -1: 1;
    });
    return $arrayOfObjects;
}

function getArrayOfAges($arrayOfObjects) {
    return array_column($arrayOfObjects, 'age');
}

function convertToArrayOfArray($arrayOfObjects) {
     return array_column($arrayOfObjects, null, 'age');
}
