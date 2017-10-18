<?php

	function Fibo ()
	{
		$x = 0;
		$y = 1;

		for ($i = 0; $i < 11; $i++)
		{
			$c = $x;
			$x = $y;
			$y = $c + $y;

			echo $x . "<br>"; 
    	} 
	}

	echo Fibo(), PHP_EOL;


?>