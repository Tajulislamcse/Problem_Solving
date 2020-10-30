<?php
fscanf(STDIN,"%d",$t);

while ($t--)
{
	
	fscanf(STDIN,"%s",$boringApartmentNo);
	
	if($boringApartmentNo[0]==1)
	    {
	    	$digitSum=0;
	    	for ($i=0,$j=1; $i <strlen($boringApartmentNo) ; $i++,$j++)
	    	{ 
	    		$digitSum+=$j;
	    	}
	    }
	    	if($boringApartmentNo[0]==2)
	    {
	    	$digitSum=10;
	    	for ($i=0,$j=1; $i <strlen($boringApartmentNo) ; $i++,$j++)
	    	{ 
	    		$digitSum+=$j;
	    	}
	    }
	    	if($boringApartmentNo[0]==3)
	    {
	    	$digitSum=20;
	    	for ($i=0,$j=1; $i <strlen($boringApartmentNo) ; $i++,$j++)
	    	{ 
	    		$digitSum+=$j;
	    	}
	    }
	    	if($boringApartmentNo[0]==4)
	    {
	    	$digitSum=30;
	    	for ($i=0,$j=1; $i <strlen($boringApartmentNo) ; $i++,$j++)
	    	{ 
	    		$digitSum+=$j;
	    	}
	    }
	    	if($boringApartmentNo[0]==5)
	    {
	    	$digitSum=40;
	    	for ($i=0,$j=1; $i <strlen($boringApartmentNo) ; $i++,$j++)
	    	{ 
	    		$digitSum+=$j;
	    	}
	    }
	    	if($boringApartmentNo[0]==6)
	    {
	    	$digitSum=50;
	    	for ($i=0,$j=1; $i <strlen($boringApartmentNo) ; $i++,$j++)
	    	{ 
	    		$digitSum+=$j;
	    	}
	    }
	    	if($boringApartmentNo[0]==7)
	    {
	    	$digitSum=60;
	    	for ($i=0,$j=1; $i <strlen($boringApartmentNo) ; $i++,$j++)
	    	{ 
	    		$digitSum+=$j;
	    	}
	    }
	    	if($boringApartmentNo[0]==8)
	    {
	    	$digitSum=70;
	    	for ($i=0,$j=1; $i <strlen($boringApartmentNo) ; $i++,$j++)
	    	{ 
	    		$digitSum+=$j;
	    	}
	    }
	    	if($boringApartmentNo[0]==9)
	    {
	    	$digitSum=80;
	    	for ($i=0,$j=1; $i <strlen($boringApartmentNo) ; $i++,$j++)
	    	{ 
	    		$digitSum+=$j;
	    	}
	    }
	    echo "$digitSum\n";	

}