<?php

function FizzBuzz($start,$end,$fizz,$buzz) {
	for ($i = $start; $i <= $end; $i++) {
		$res = "";
		if ($i % $fizz == 0)
			$res .= "Fizz";
		if ($i % $buzz == 0)
			$res .= "Buzz";
		if ($res == "")
			$res = $i;

		echo $res . "\n";
	}
}



FizzBuzz(1,100,3,5);