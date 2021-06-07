<?php
fscanf(STDIN,"%d",$n);
$totalFaces=0;
for($i=0;$i<$n;$i++)
{
	fscanf(STDIN,"%s",$str[$i]);
	if($str[$i]=="Tetrahedron")
		$totalFaces+=4;
	elseif ($str[$i]=="Cube") {

		$totalFaces+=6;
	}
	elseif ($str[$i]=="Octahedron") {

		$totalFaces+=8;
	}
    	elseif ($str[$i]=="Dodecahedron") {

		$totalFaces+=12;
	}
	else
		$totalFaces+=20;
}
echo $totalFaces;

