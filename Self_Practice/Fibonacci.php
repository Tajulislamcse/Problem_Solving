<?php
fscanf(STDIN,"%d",$n);
for ($i=0; $i <$n ; $i++) { 
	fprintf(STDOUT,"%d ",fibo($i));
}
function fibo($i)
{
	# code...
	if($i==0)
		return 0;
	if($i==1||$i==2)
		return 1;
	else
		return fibo($i-2)+fibo($i-1);
}
