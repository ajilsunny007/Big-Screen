<?php

$CI =& get_instance();
 $a= $CI->sessionin() ;
if($a==1)
{
	include('admin_header.php');
?>



<div style="background-image:url(<?php echo base_url('images/adminhome.jpg');?>);height:800px;width:auto;">


<br><br><br>
<div align="center" style="margin-top:;font-size:18px;color:#000000;width:100%;height:auto;">
		<table border="5" class="table-condensed" style="background-color:#66FFFF;margin-left:5%;margin-right:3%;opacity:0.7;border:5px #FF6600 solid">
		<tr >
		<th align="center">Name</th><th>Email</th><th>Phone</th><th>Place</th><th>Pin Code</th><th>Action</th>
		</tr>
		<?php
		foreach($theatres as $row)
		{
		$name=$row->name;
		$email=$row->email;
		$phone=$row->phone;
		$place=$row->place;
		$pin=$row->pin;
		$status=$row->lstatus;
		?>
		<form action="<?php echo site_url('usercontroller/blocktheatreaction')?>" method="post" name="userlist">
		<tr>
		<input type="hidden" value="<?php echo $email ?>" id="blockid" name="blockid">
		<input type="hidden" value="<?php echo $status ?>" id="blockstatus" name="blockstatus">
		<td><?php echo $name;?></td><td width="15%"><?php echo $email;?></td><td><?php echo $phone;?></td><td><?php echo $place;?></td><td><?php echo $pin;?><td>
		<?php
		if($status==0)
		{
		echo '<input type="submit" value="Approve" style="background-color:#00FF00">';
		}
		elseif($status==1)
		{
		echo '<input type="submit" value="Unblock" style="background-color:#00FF00">';
		}
		else
		{
		echo '<input type="submit" value="Block" style="background-color:#00FF00">';
		}
		?>
		</td>
		</tr></form>
		 <?php
		}
		?>
		</table>
		</div>






</div>


<?php
	include('footer.php');
	}
	else
	{
		$CI->index() ;
	}
	?>
