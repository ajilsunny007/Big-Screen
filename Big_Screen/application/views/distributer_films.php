<?php

$CI =& get_instance();
 $a= $CI->sessionin() ;
if($a==1)
{
	include('distributer_header.php');
?>

<div style="background-image:url(<?php echo base_url('images/distributerhome.jpg');?>);height:800px;width:auto;" align="center">
<?php
  if(!$dis){
    echo '<center><h1 style="font-family:Times New Roman, Times, serif;font-size:36px;color:#FF0090"; >No Film added...!!</h1></center>';
  }
?>

	<div id="myTabContent" class="tab-content" style="padding-top: 30px;padding-left: 20px">
		<?php
			foreach($dis as $row)
			{
          $fid=$row->mid;
					$fname=$row->film_name;
					$pic=$row->poster_pic;


			?>
      <form action="<?php echo site_url('usercontroller/filmviewdistributer');?>" method="post">
		<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab" >
			<div class="w3_agile_featured_movies" >
				<div class="col-md-2 w3l-movie-gride-agile" >
          <input type="hidden" name="fid" value="<?php echo $fid; ?>" >
				<button type="submit" href="" name="submit" class="hvr-shutter-out-horizontal" ><img src="../../images/movie/poster/<?php echo $pic ?>" title="album-name" class="img-responsive" alt=" " />
						<div class="w3l-action-icon"><i class="fa fa-th-large" aria-hidden="true" ></i></div>
					</a>
					<div class="w3l-movie-text" style="background-color: black;padding: 5%;border-radius: 10px">
							<h6 ><a href=""  style="color: gold"><?php echo $fname ?></a></h6>
						</div>
							<div class="clearfix"></div>

					</div>
				</div>
			</div>
    </form>
			<?php } ?>
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
