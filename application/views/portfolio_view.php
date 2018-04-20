<h1>Portdolio</h1>
<p>
<table>
ipsum dolor sit amet, consectetur adipisicing elit, sed do 
<tr><td>Year</td><td>Project</td><td>Description</td></tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
	}
	
?>
</table>
</p>