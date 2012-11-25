<?php
echo form_open('example/upd/'.$list->id);
echo '<br />Go to: '.anchor('example','Home');
$name = array('name'=>'name',
				'id' => 'name',
				'value' => $list->name);

$address = array('name'=>'address',
				'id' => 'address',
				'value' => $list->address);

$sex = array('F'=>'Female',
				'M' => 'Male');

echo '<br />Id: '.$list->id;
echo '<br />Name: '.form_input($name);
echo '<br />Address:<br />'.form_textarea($address);
echo '<br />Sex: '.form_dropdown('sex',$sex,$list->sex);
echo '<br /><br /><input type="submit" value="Update"/>';
echo form_close();
?>