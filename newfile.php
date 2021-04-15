<?php 

$arr = array(array("Vivek","7894561235","Developer"),array("Arun","5512244635","Manager"),array("Javed","9988547856","Assistant"));

?>

<table>
	<tr>
		<th>Name</th>
		<th>Phone</th>
		<th>Designation</th>
	</tr>
	<?php foreach($arr as $value): foreach($value as $val): ?>
	<tr>
		<td><?php echo $val; ?></td>
	</tr>
	<?php endforeach;endforeach; ?>
</table>