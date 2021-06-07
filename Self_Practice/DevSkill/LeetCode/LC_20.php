<?php
fscanf(STDIN,"%s",$s);
echo checkValidParenthesis($s);
function checkValidParenthesis($s)
{
	$brackets=[
		'('=>')',
		'{'=>'}',
		'['=>']'
	];
	$stack=array();
	for ($i=0,$k=0; $i <strlen($s) ; $i++) 
	{ 
		if($s[$i]=='('||$s[$i]=='{'||$s[$i]=='[')
		{
			$stack[$k++]=$s[$i];
		}
		else
		{   $key=implode(array_keys($brackets,$s[$i]));
			if(end($stack)==$key)
				array_pop($stack);
			else
				$stack[$k++]=$s[$i];
		}
	}
	if(count($stack)==0)
		return 'true';
	else
		return 'false';
}