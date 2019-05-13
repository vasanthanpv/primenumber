<?php
$count =  $argv[1];
$primenumber=array();
$number = 2 ;
while ($number < $count)
{
			$div_count=0;
			for ( $i=1;$i<=$number;$i++)
			{ 
				if (($number%$i)==0)
				{
				$div_count++;
				}
			//	echo $number."count-".$div_count;echo "<br>";
			}
			if ($div_count<3)
			{
			//$display_num= $number." , ";
			$primenumber[]=$number;
			}
			$number=$number+1;
}
				echo"|";
			  foreach($primenumber as $value)
			  {
				  echo " ". $value;
			  }
			  
			  echo "\n"."\n";
			  
			  
			  for($i=0;$i<count($primenumber);$i++)
			  {
				  
				echo $primenumber[$i];
				  for($j=0;$j<count($primenumber);$j++)
				  {
				
					echo "  ".$primenumber[$i]*$primenumber[$j]; 
				  }
				   echo "\n";
			  }
					  

?>