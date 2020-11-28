<?php
$n=readline();
$taxiMax=0;
$pizzaMax=0;
$girlMax=0;
$taxiPerson=array();
$pizzPerson=array();
$girlPerson=array();
for ($i=0; $i <$n ; $i++)
 { 
	 fscanf(STDIN,"%d %s",$number,$name);
	 $compareNumber=array();
	 $taxi=0;
	 $pizza=0;
	 $girl=0;
	 while($number--)
	 {
		 $compareNumber=explode('-',trim(fgets(STDIN)));
		 	//print_r($compareNumber);
		 if(($compareNumber[0][0]==$compareNumber[0][1])&&($compareNumber[0][1]==$compareNumber[1][0])&&($compareNumber[1][0]==$compareNumber[1][1])&&($compareNumber[1][1]==$compareNumber[2][0])&&($compareNumber[2][0]==$compareNumber[2][1]))
		 		$taxi++;
		 	elseif (($compareNumber[0][0]>$compareNumber[0][1])&&($compareNumber[0][1]>$compareNumber[1][0])&&($compareNumber[1][0]>$compareNumber[1][1])&&($compareNumber[1][1]>$compareNumber[2][0])&&($compareNumber[2][0]>$compareNumber[2][1]))
		 	    $pizza++;
		 	else
		 	    $girl++;   


	 }
	 //echo "taxi=$taxi\npizza=$pizza\ngirl=$girl\n";
	 if($taxi>$taxiMax)
	 {
	 	$flag1=1;
	 	$taxiMax=$taxi;
	 	$maxTaxiPerson=$name;
	 	$taxiPerson[$name]=$taxi;
	 }
	 elseif($taxi==$taxiMax)
	 {
       $flag1=0;
       $taxiPerson[$name]=$taxi;
	 }

	 if($pizza>$pizzaMax)
	 {
        $flag2=1;
	 	$pizzaMax=$pizza;
	 	$maxPizzPerson=$name;
	 	$pizzPerson[$name]=$pizza;
	 }
	 elseif($pizza==$pizzaMax)
	 {
      $flag2=0;
	  $pizzPerson[$name]=$pizza;
      
	 }
	 if($girl>$girlMax)
	 {  $flag3=1;
	 	$girlMax=$girl;
	 	$maxGirlPerson=$name;
	 	$girlPerson[$name]=$girl;
	 }
	 elseif($girl==$girlMax)
	 {
       $flag3=0;
       $girlPerson[$name]=$girl;
	 }

 }
if(count($taxiPerson)>0&&$flag1==1)
	echo "If you want to call a taxi, you should call: ".$maxTaxiPerson.".\n";
elseif(count($taxiPerson)>0&&$flag1==0)

	{
			$maxValue=max($taxiPerson);
		 	$lastKey=key(array_slice($taxiPerson, -1, 1, true));
		echo "If you want to call a taxi, you should call: ";
			    foreach ($taxiPerson as $key => $value) 
		{
			if ($value==$maxValue)
			 {
				 if($lastKey==$key)
					echo "$key.\n";
				 else
                     echo "$key, ";
			}
		}

	}
if(count($pizzPerson)>0&&$flag2==1)
	echo "If you want to order a pizza, you should call: ".$maxPizzPerson.".\n";
elseif(count($pizzPerson)>0&&$flag2==0)

	{
			$maxValue=max($pizzPerson);
		 	$lastKey=key(array_slice($pizzPerson, -1, 1, true));
	    echo "If you want to order a pizza, you should call: ";
	    foreach ($pizzPerson as $key => $value) 
		{
			if ($value==$maxValue)
			 {
				 if($lastKey==$key)
					echo "$key.\n";
				 else
                     echo "$key, ";
			}
		}
		
	}
if(count($girlPerson)>0&&$flag3==1)
		echo "If you want to go to a cafe with a wonderful girl, you should call: ".$maxGirlPerson.".\n";

elseif(count($girlPerson)>0&&$flag3==0)

	{
		 	$maxValue=max($girlPerson);
		 	$lastKey=key(array_slice($girlPerson, -1, 1, true));


	echo "If you want to go to a cafe with a wonderful girl, you should call: ";
		foreach ($girlPerson as $key => $value) 
		{
			if ($value==$maxValue)
			 {
				 if($lastKey==$key)
					echo "$key.\n";
				 else
                     echo "$key, ";
			}
		}
	}
