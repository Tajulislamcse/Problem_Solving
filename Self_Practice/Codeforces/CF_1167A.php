<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
		fscanf(STDIN,"%d",$n);
		fscanf(STDIN,"%s",$str);
		$len=strlen($str);
        $flag=0;
		for ($i=0; $i <$len ; $i++)
		 { 
			if($str[$i]=='8')
			{
				if($len-$i>=11)
				{
					$flag=1;
					break;
				}
				
			}
		 }
		  if($flag==1)
		 	echo "YES\n";
		 else
		 	echo "NO\n";

}