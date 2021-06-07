<?php
fscanf(STDIN, "%d\n",$tc);
while ($tc--) {
	fscanf(STDIN,"%s\n",$frst);
	fscanf(STDIN,"%s\n",$second);
	fscanf(STDIN,"%s\n",$third);

	for($i=0;$i<strlen($third);$i++)
	{
		if($third[$i]!=$frst[$i])
		{
			$tmp=$third[$i];
			$third[$i]=$frst[$i];
			$frst[$i]=$tmp;
		}
		elseif ($third[$i]!=$second[$i]) {
			$tmp=$third[$i];
			$third[$i]=$second[$i];
			$second[$i]=$tmp;
		}

			

    }
if($frst==$second)
	echo "YES\n";
else
	echo "NO\n";
}
