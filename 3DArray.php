<?php
$marks=array(array(array(52,22),
					array(32,22),
					array(65,67),
					array(56,67),
					array(98,67)),
		array(array(52,22),
					array(32,22),
					array(65,67),
					array(56,67),
					array(98,67)),
		array(array(52,22),
					array(32,22),
					array(65,67),
					array(56,67),
					array(98,67)));
					for($i=0;$i<3;$i++)
					{
						for($j=0;$j<5;$j++)
						{
							for($k=0;$k<2;$k++)
							{
								echo $marks[$i][$j][$k]."    ";
							}
							echo ",";
						}
						echo "<br>";
					}
?>