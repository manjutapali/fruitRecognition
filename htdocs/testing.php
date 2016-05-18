<?php
include ("./connect.php");


/////////////////////////////////////////////////////////////////////////////////
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
///////////////////////////////////////////////////////////////////////////////////////
?>

<?php
$bucy=array();
$i=0;
$handle = fopen("Query.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        //echo $line," --- ",PHP_EOL;?>
        <?php
        $bucy[$i]=$line;
        $i++;
        //print($line);
    }

    fclose($handle);
} else {                                                  
    // error opening the file.
}
//print_r($bucy);
//echo $bucy[0];

$sql=mysql_query("SELECT Fruit FROM `fruit_table` WHERE (hue_min<='$bucy[0]' and hue_max>='$bucy[0]' )
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
}

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
