<?php 

$CI =& get_instance();
 $a= $CI->sessionin() ;
if($a==1)
{
	include('distributer_header.php');
?>

<div style="background-image:url(<?php echo base_url('images/distributerhome.jpg');?>);height:800px;width:auto;">

	


</div>

<?php
	include('footer.php');
	}
	else
	{
		$CI->index() ;
	}
	?>