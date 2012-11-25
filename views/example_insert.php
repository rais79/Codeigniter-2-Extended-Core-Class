<?php
echo form_open('example/ins');
$name = array('name'=>'name',
				'id' => 'name',
				'placeholder' => 'Insert Name');

$address = array('name'=>'address',
				'id' => 'address',
				'placeholder' => 'Insert Address');

$sex = array('M' => 'Male',
				'F' => 'Female');
								
echo '<br />'.form_input($name);
echo '<br />'.form_textarea($address);
echo '<br />'.form_dropdown('sex', $sex, 'F');
echo '<br /><br /><input type="submit" value="Add"/>';
echo form_close();
?>