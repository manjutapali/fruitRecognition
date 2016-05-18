<?php
include ("./connect.php");

/*$sql=mysql_query("SELECT * FROM `fruit_table` WHERE Fruit='Apple'");

if(mysql_num_rows($sql)>0){
	?><table border="1px">
		<tr>
			<th>Fruit Name</th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
		</tr>
		 
		<?php
		while($row = mysql_fetch_array($sql)){
				$fruit=$row['Fruit'];
				$a=$row['Hue Min'];
				$b=$row['Hue max'];
				$c=$row['energy Min'];
				$d=$row['energy max'];

			?><tr>
				<td><b><?php echo "$fruit"; ?></b></td>
				<td><b><?php echo"$a" ?></b></td>
				<td><b><?php echo"$b" ?></b></td>
				<td><b><?php echo"$c" ?></b></td>
				<td><b><?php echo "$d"; ?></b></td>
			</tr> <?php
		}
	}
*/
?>

<?php
$features=array();
$i=0;
$handle = fopen("Query.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        //echo $line," --- ",PHP_EOL;?>
        <?php
        $features[$i]=$line;
        $i++;
        //print($line);
    }

    fclose($handle);
} else {                                                  
   echo "opening the file.";
}

$sql=mysql_query("CREATE TEMPORARY TABLE IF NOT EXISTS `table1` select * from `fruit_table` where hue_min<='$features[0]' and hue_max>='$features[0]' ") or die("sql error");
$sql=mysql_query("SELECT * from table1 where 1");
if (mysql_num_rows($sql)>1) {
	$sql1=mysql_query("CREATE TEMPORARY TABLE IF NOT EXISTS `table2` SELECT * from table1 where entropy_min<='$features[2]' and entropy_max>='$features[2]'");
	$sql1=mysql_query("SELECT * from table2 where 1");
	if (mysql_num_rows($sql1)>1) {
		$sql2=mysql_query("CREATE TEMPORARY TABLE IF NOT EXISTS `table3` SELECT * from table2 where correlation_min<='$features[5]' and correlation_max>='$features[5]'");
		$sql2=mysql_query("SELECT * from table3 where 1");
		if (mysql_num_rows($sql2)>1) {
			$sql3=mysql_query("CREATE TEMPORARY TABLE IF NOT EXISTS `table4` SELECT * from table3 where Homogenity_min<='$features[4]'  and Homogenity_max>='$features[4]' ");
			$sql3=mysql_query("SELECT * from table4 where 1");
			if (mysql_num_rows($sql3)>1) {
				$sql4=mysql_query("CREATE TEMPORARY TABLE IF NOT EXISTS `table5` SELECT * from table4 where prob_min<='$features[6]'  and prob_max>='$features[6]' ");
				$sql4=mysql_query("SELECT * from table5 where 1");
				if (mysql_num_rows($sql4)>1) {
					$sql5=mysql_query("CREATE TEMPORARY TABLE IF NOT EXISTS `table6` SELECT * from table5 where clustertendensity_min<='$features[3]' and clustertendensity_max>='$features[3]'");
					$sql5=mysql_query("SELECT * from table6 where 1");
					if (mysql_num_rows($sql5)>1) {
						$sql6=mysql_query("SELECT Fruit from table6 where energy_min<='$features[1]'and energy_max>='$features[1]'");
						while($row = mysql_fetch_array($sql6)){
							$fruit_name=$row['Fruit'];
							echo $fruit_name,"---",PHP_EOL;
						}
					}
					elseif (mysql_num_rows($sql5)==1) {
						while($row = mysql_fetch_array($sql5)){
				$fruit_name=$row['Fruit'];
				echo $fruit_name,"---",PHP_EOL;
				}
					}
					else{
						echo "no fruit matched";
					}
				}
				elseif (mysql_num_rows($sql4)==1) {
	while($row = mysql_fetch_array($sql4)){
				$fruit_name=$row['Fruit'];
				echo $fruit_name,"---",PHP_EOL;
				}
		}
else{
		echo "no fruit matched";
}
			}
			elseif (mysql_num_rows($sql3)==1) {
	while($row = mysql_fetch_array($sql3)){
				$fruit_name=$row['Fruit'];
				echo $fruit_name,"---",PHP_EOL;
				}
		}
else{
		echo "no fruit matched";
}
		}
		elseif (mysql_num_rows($sql2)==1) {
	while($row = mysql_fetch_array($sql2)){
				$fruit_name=$row['Fruit'];
				echo $fruit_name,"---",PHP_EOL;
				}
		}
else{
		echo "no fruit matched";
}
	}
	elseif (mysql_num_rows($sql1)==1) {
	while($row = mysql_fetch_array($sql1)){
				$fruit_name=$row['Fruit'];
				echo $fruit_name,"---",PHP_EOL;
				}
		}
else{
		echo "no fruit matched";
}
}
elseif (mysql_num_rows($sql)==1) {
	while($row = mysql_fetch_array($sql)){
				$fruit_name=$row['Fruit'];
				echo $fruit_name,"---",PHP_EOL;
				}
		}
else{
		echo "no fruit matched";
}

/*$sql=mysql_query("SELECT Fruit FROM `fruit_table` WHERE (hue_min<='$bucy[0]' and hue_max>='$bucy[0]' )
													 AND (energy_min<='$bucy[1]' and energy_max>='$bucy[1]')
													 AND (entropy_min<='$bucy[2]' and entropy_max>='$bucy[2]')
													 AND (clustertendensity_min<='$bucy[3]' and clustertendensity_max>='$bucy[3]')
													 AND (Homogenity_min<='$bucy[4]' and Homogenity_max>='$bucy[4]')
													 AND (correlation_min<='$bucy[5]' and correlation_max>='$bucy[5]')
													 AND (prob_min<='$bucy[6]' and prob_max>='$bucy[6]') ");

if(mysql_num_rows($sql)>0){
	while($row = mysql_fetch_array($sql)){
		$fruit_name=$row['Fruit'];
		echo $fruit_name,"---",PHP_EOL;
		}
}
else{
	echo "query dint work";
}*/



/*$sql=mysql_query("SELECT Fruit FROM `fruit_table` WHERE (hue_min<='$bucy[0]' and hue_max>='$bucy[0]' )");

if(mysql_num_rows($sql)>0){
	while($row = mysql_fetch_array($sql)){
		$fruit_name=$row['Fruit'];
		echo $fruit_name,"---",PHP_EOL;
		}
}
else{
	echo "query dint work";
}*/
?>