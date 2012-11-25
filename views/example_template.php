<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title><?php echo $my_header;?></title>
</head>

<body>
	<?php echo $this->session->flashdata('error');?>
	<?php $this->load->view($mycontent);?>
</body>
</html>