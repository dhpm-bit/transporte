<?php

function peso ($n)
{
	if ($n <= 3):
		return 3;
	elseif ($n > 3 && $n <= 5):
		return 5;
	elseif ($n > 5 && $n <= 10):
		return 10;
	elseif ($n > 10 && $n <= 20):
		return 20;
	elseif ($n > 20 && $n <= 30):
		return 30;
	elseif ($n > 30 && $n <= 40): 
		return 40;
	elseif ($n > 40 && $n <= 50):
		return 50;
	elseif ($n > 50 && $n <= 60):
		return 60;
	elseif ($n > 60 && $n <= 70):
		return 70;
	elseif ($n > 70 && $n <= 80):
		return 80;
	elseif ($n > 80 && $n <= 90):
		return 90;
	elseif ($n > 90 && $n <= 100):
		return 100;
    elseif ($n > 100 && $n <= 125):
    	return 125;
    elseif ($n > 125 && $n <= 150):
		return 150;
	elseif ($n > 150 && $n <= 175):
		return 175;
	elseif ($n > 175 && $n <= 200):
		return 200;
	elseif ($n > 200 && $n <= 250):
		return 250;
	elseif ($n > 250 && $n <= 300):
		return 300;
	elseif ($n > 300 && $n <= 350):
		return 350;
	elseif ($n > 350 && $n <= 400):
		return 400;
	elseif ($n > 400 && $n <= 450):
		return 450;
	elseif ($n > 450 && $n <= 500):
		return 500;
	elseif ($n > 500 && $n <= 600):
		return 600;
	elseif ($n > 600 && $n <= 700):
		return 700;
	elseif ($n > 700 && $n <= 800):
		return 800;
	elseif ($n > 800 && $n <= 900):
		return 900;
	elseif ($n > 900 && $n <= 1000):
		return 1000;
	elseif ($n > 1000):
		return FALSE;
	endif;
};	  

