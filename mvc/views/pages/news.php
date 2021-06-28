<h2>
	<?php echo $data["SoThich"][2] ?>
</h2>

<?php 
	foreach ($data["SV"] as $row) {
		echo $row['name'];
	}
?>