<h4>Example Page</h4>
<?php $this->load->view('example_insert');?>
<br /><br />
<?php
//var_dump($list);
foreach($list as $row):
	echo $row->name.' [ '.anchor('example/del/'.$row->id,'delete').' ] [ '.anchor('example/upd/'.$row->id,'update').' ] <br />';
	echo $row->address.'<br />';
	echo $row->sex.'<br /><br />';
endforeach;
?>