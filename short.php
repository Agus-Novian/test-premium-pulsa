<?php

$list_of_integer = array(9, 23, 4, 17, 8, 2, 3);

function main($list_of_integer) {
    // please do the logic here
	
	// bubble sort
	$n = count($list_of_integer);
	for($i = 0; $i<$n; $i++){
		for($j = $n-1; $j>$i; $j--){
			if($list_of_integer[$j] < $list_of_integer[$j-1]){
				$dummy = $list_of_integer[$j];
				$list_of_integer[$j] = $list_of_integer[$j - 1];
				$list_of_integer[$j - 1] = $dummy;
			}
		}
	}
	
    return $list_of_integer;
}

echo json_encode(main($list_of_integer));