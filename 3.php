<?php 
	$char = 9;
	$onehalf = floor($char / 2);
	$onehalf_var = $onehalf;
	$char1 = '=';
	$char2 = '@';

	echo '<div style="font:bold 16px courier new; line-height:10px">';
	for ($row = 1; $row <= $char; $row++)
	{
		for ($col = 1; $col <= $char; $col++)
		{
			$kar = $col > $onehalf_var && $col <=($char - $onehalf_var) ? 
			$char2 : $char1;
			echo $kar;
		}
		 	$row <= $onehalf ? $onehalf_var-- : $onehalf_var++;
		 	echo  '<br/>';
	 	}
	 	echo '</div>';
	 	?>
