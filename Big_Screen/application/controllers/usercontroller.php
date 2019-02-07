<?php
class Usercontroller extends CI_Controller
{
	function __construct()

	{
		parent::__construct();
		$this->load->model('Mymodel');
		$this->load->helpers(array('url','form'));
		$this->load->library(array('session','upload'));
	}

	//NORMAL USER
	function index()
	{
		$this->load->view('home');
	}

	function about()
	{
		$this->load->view('about');
	}
	function contact()
	{
		$this->load->view('contact');
	}

	function forgotpassword()
	{
		$this->load->view('forgotpassword');
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('home');

	}

	function uindex()
	{
		$uname=$this->session->userdata('username');
		$result['dis']=$this->Mymodel->disuser($uname);
		$this->load->view('user_home',$result);
	}
	function aindex()
	{
		$uname=$this->session->userdata('username');
		$this->load->view('admin_home',$uname);
	}
	function dindex()
	{
		$uname=$this->session->userdata('username');
		$this->load->view('donor_home',$uname);
	}
	//END NORMAL USER

	//ADMIN PAGES
	function adminhome()
	{
		$this->load->view('admin_home');
	}
	function admintheatreapprovel()
	{
		$type='2';
		$result['theatres']=$this->Mymodel->approvetheatrelist($type);
		$this->load->view('admin_theatreapprove',$result);
	}
	function admindistributerapprovel()
	{
		$type='3';
		$result['distributer']=$this->Mymodel->approvedistributerlist($type);
		$this->load->view('admin_distributerapprove',$result);
	}
	function admintheatrelist()
	{
		$type='2';
		$result['theatres']=$this->Mymodel->lists($type);
		$this->load->view('admin_theatrelist',$result);
	}
	function adminuserlist()
	{
		$type='1';
		$result['user']=$this->Mymodel->lists($type);
		$this->load->view('admin_userslist',$result);
	}
	function admindistributerlist()
	{
		$type='3';
		$result['distributer']=$this->Mymodel->lists($type);
		$this->load->view('admin_distributerlist',$result);
	}
	function adminpayment()
	{
		$this->load->view('admin_payment');
	}
	function adminaddnews()
	{
		$result['dis']=$this->Mymodel->newsupdate(0);
		$this->load->view('admin_addnews',$result);
	}
	function admindnews()
	{
		$result['list']=$this->Mymodel->newslist();
		$this->load->view('admin_news',$result);
	}
	function admincontact()
	{
		$this->load->view('admin_contact');
	}
	//END ADMIN PAGES

	//DISTRIBUTER PAGES
	function distributerhome()
	{
		$username=$this->session->userdata('username');
		$result['dis']=$this->Mymodel->disuser($username);
		$this->load->view('distributer_home',$result);
	}
	function distributeraddfilms()
	{
		$username=$this->session->userdata('username');
		$result['dis']=$this->Mymodel->disuser($username);
		$this->load->view('distributer_addfilmdetails',$result);
	}
	function distributerfilms()
	{
		$lid=$this->session->userdata('id');
		$msg='lid';
		$result['dis']=$this->Mymodel->films($lid,$msg);
		$this->load->view('distributer_films',$result);
	}
	function distributerselectedfilms()
	{
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->filmsselect($lid);
		$this->load->view('distributer_selectedfilmdetails',$result);
	}
	function distributerrunningstatus()
	{
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->filmsrunning($lid);
		$this->load->view('distributer_runningtheaters',$result);
	}
	function distributerprofile()
	{
		$username=$this->session->userdata('username');
		$result['dis']=$this->Mymodel->disuser($username);
		$this->load->view('distributer_profile',$result);
	}
	function distributercontact()
	{
		$username=$this->session->userdata('username');
		$result['dis']=$this->Mymodel->disuser($username);
		$this->load->view('distributer_contact',$result);
	}
	//end distributer

	//Theatre page
	function theatrehome()
	{
		$this->load->view('theatre_home');
	}
	function theatreseating()
	{
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->seatingselection($lid);
		$this->load->view('theatre_seating',$result);
	}
	function theatrerunningtime()
	{
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->theatrebooked($lid);
		$this->load->view('theatre_runningfilmtime',$result);
	}
	function theatrefilmrunningtime()
	{
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->tfilmrunningtime($lid);
		$this->load->view('theatre_runningtime',$result);
	}
	function theatrefilmselection()
	{
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->allfilms();
		$this->load->view('theatre_filmselection',$result);
	}
	function theatreacceptfilm()
	{
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->theatreaccepted($lid);
		$this->load->view('theatre_acceptedfilms',$result);
	}
	function theatrebookedfilm()
	{
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->theatrebooked($lid);
		$this->load->view('theatre_bookedfilms',$result);
	}
	function theatreownerprofile()
	{
		$this->load->view('theatre_owner_profile');
	}
	function theatreprofile()
	{
		$username=$this->session->userdata('username');
		$result['dis']=$this->Mymodel->disuser($username);
		$this->load->view('theatre_profile',$result);
	}
	function theatrecontact()
	{
		$this->load->view('theatre_contact');
	}
	//end Theatre page

//user PAGES
function userhome()
{
	$result['dis']=$this->Mymodel->allfilms();
	$this->load->view('user_home',$result);
}
function userprofile()
{
	$username=$this->session->userdata('username');
	$result['dis']=$this->Mymodel->disuser($username);
	$this->load->view('user_profile',$result);
}
function englishfilms()
{
	$language='English';
	$result['dis']=$this->Mymodel->selectfilm($language);
	$this->load->view('user_choosefilms',$result);
}
function malayalamfilms()
{
	$language='Malayalam';
	$result['dis']=$this->Mymodel->selectfilm($language);
	$this->load->view('user_choosefilms',$result);
}
function hindifilms()
{
	$language='Hindi';
	$result['dis']=$this->Mymodel->selectfilm($language);
	$this->load->view('user_choosefilms',$result);
}
function kannadafilms()
{
	$language='Kannada';
	$result['dis']=$this->Mymodel->selectfilm($language);
	$this->load->view('user_choosefilms',$result);
}
function tamilfilms()
{
	$language='Tamil';
	$result['dis']=$this->Mymodel->selectfilm($language);
	$this->load->view('user_choosefilms',$result);
}
function telugufilms()
{
	$language='Telugu';
	$result['dis']=$this->Mymodel->selectfilm($language);
	$this->load->view('user_choosefilms',$result);
}
function usercontact()
{
	$this->load->view('user_contact');
}
//end user page
	//REGISTRATION ACTION
	function insert()
	{
		$name=$this->input->post('Name');
		if(isset($name))
		{
					$email=$this->input->post('Email');
					$phone=$this->input->post('Phone');
					$type=$this->input->post('Type');
					$place=$this->input->post('Place');
					$pin=$this->input->post('Pin');
					$cpassword=$this->input->post('psw2');
					$pass=md5($cpassword);
					$result['id']=$this->Mymodel->checkreguser($email);
					if(!$result['id'])
					{
						$data=array('regid'=>NULL,'name'=>$name,'email'=>$email,'phone'=>$phone,'place'=>$place,'pin'=>$pin,'profile_pic'=>'profilepic.png');
						$this->Mymodel->insertdetails($data);
						if($type=='1')
						{
							$data1=array('lid'=>NULL,'username'=>$email,'password'=>$pass,'type'=>$type,'lstatus'=>'1');
							$this->Mymodel->insertlogin($data1);
						}
						else
						{
							$data1=array('lid'=>NULL,'username'=>$email,'password'=>$pass,'type'=>$type,'lstatus'=>'0');
							$this->Mymodel->insertlogin($data1);
						}
						$this->session->set_userdata('msg','Registration Succesfull!!');
						$this->load->view('home');
					}
					else
					{
						$this->session->set_userdata('msg','User already exist...!!');
						$this->load->view('home');
					}
			}
			else
			{
				$this->load->view('home');
			}
	}
	//END REGISTRATION


	//LOGIN ACTION
	function loginn()
	{
		$username=$this->input->post('Username');
		if(isset($username))
		{
				$password1=$this->input->post('Password');
				$password=md5($password1);
				$loginresult['login']=$this->Mymodel->loguser($username,$password);
				if(!$loginresult['login'])
				{
					$this->session->set_userdata('msg','Username or Password Wrong...!!');
					$this->load->view('home');
				}
				else
				{
					foreach($loginresult['login'] as $row)
					{
						$lid=$row->lid;
						$name=$row->name;
						$username=$row->username;
						$password=$row->password;
						$type=$row->type;
						$status=$row->lstatus;
						if($status=='0')
						{
							$this->session->set_userdata('msg','Not Approved..!!');
							$this->load->view('home');
						}
						elseif($status=='2')
						{
							$this->session->set_userdata('msg','Blocked login..!!');
							$this->load->view('home');
						}
						else
						{
							if($type=='0')
							{
								$this->session->set_userdata('id',$lid);
								$this->session->set_userdata('username',$username);
								$this->session->set_userdata('password',$password);
								$this->load->view('admin_home');
							}
							else if($type=='1')
							{
								$this->session->set_userdata('id',$lid);
								$this->session->set_userdata('username',$username);
								$this->session->set_userdata('password',$password);
								$this->session->set_userdata('name',$name);
								$result['dis']=$this->Mymodel->allfilms();
								$this->load->view('user_home',$result);
							}
							else if($type=='2')
							{
								$this->session->set_userdata('id',$lid);
								$this->session->set_userdata('username',$username);
								$this->session->set_userdata('password',$password);
								$this->session->set_userdata('name',$name);
								$result['dis']=$this->Mymodel->disuser($username);

								$this->load->view('theatre_home',$result);
							}
							else
							{
								$this->session->set_userdata('id',$lid);
								$this->session->set_userdata('username',$username);
								$this->session->set_userdata('password',$password);
								$this->session->set_userdata('name',$name);
								$result['dis']=$this->Mymodel->disuser($username);

								$this->load->view('distributer_home',$result);
							}

						}
					}
				}
			}
			else
			{
				$this->load->view('home');
			}
	}
	//END LOGIN

	//THEATRE APPROVEL
	function approvetheatreaction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==0)
		{
			$action=1;
			$this->Mymodel->updateblock($email,$action);
			$type='2';
			$result['theatres']=$this->Mymodel->approvetheatrelist($type);
			$this->load->view('admin_theatreapprove',$result);
		}
	}
	//END APPROVEL THEATRE

	//DISTRIBUTER APPROVEL
	function approvedistributeraction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==0)
		{
			$action=1;
			$this->Mymodel->updateblock($email,$action);
			$type='3';
			$result['distributer']=$this->Mymodel->approvedistributerlist($type);
			$this->load->view('admin_distributerapprove',$result);
		}
	}
	//END DISTRIBUTER

	//THEATRE BLOCK ACTION
	function blocktheatreaction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==2)
		{
			$action=1;
			$this->Mymodel->updateblock($email,$action);
			$type='2';
			$result['theatres']=$this->Mymodel->lists($type);
			$this->load->view('admin_theatrelist',$result);
		}
		else
		{
			$action=2;
			$this->Mymodel->updateblock($email,$action);
			$type='2';
			$result['theatres']=$this->Mymodel->lists($type);
			$this->load->view('admin_theatrelist',$result);
		}
	}
	//END BLOCK ACTION

	//USER BLOCK ACTION
	function blockuseraction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==2)
		{
			$action=1;
			$this->Mymodel->updateblock($email,$action);
			$type='1';
			$result['user']=$this->Mymodel->lists($type);
			$this->load->view('admin_userslist',$result);
		}
		else
		{
			$action=2;
			$this->Mymodel->updateblock($email,$action);
			$type='1';
			$result['user']=$this->Mymodel->lists($type);
			$this->load->view('admin_userslist',$result);
		}
	}
	//END USER BLOCK

	//DISTRIBUTER BLOCK ACTION
	function blockdistributeraction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==2)
		{
			$action=1;
			$this->Mymodel->updateblock($email,$action);
			$type='3';
			$result['distributer']=$this->Mymodel->lists($type);
			$this->load->view('admin_distributerlist',$result);
		}
		else
		{
			$action=2;
			$this->Mymodel->updateblock($email,$action);
			$type='3';
			$result['distributer']=$this->Mymodel->lists($type);
			$this->load->view('admin_distributerlist',$result);
		}
	}
	//END DISTRIBUTER BLOCK

	//NEWS VIEW CHANGE
	function newsviewchange()
	{

		$id=$this->input->post('id');
				$status=$this->input->post('status');
				$remove=$this->input->post('remove');
				$edit=$this->input->post('edit');
				if($remove=='Remove')
				{
					$action=1;
					$this->Mymodel->removenews($id,$action);
					$result['list']=$this->Mymodel->newslist();
					$this->load->view('admin_news',$result);
				}
				else
				{
					$result['dis']=$this->Mymodel->newsupdate($id);
					$this->load->view('admin_addnews',$result);
				}
			}
	//END VIEW CHANGE
	function sessionin()
	{
		$username=$this->session->userdata('username');
		$password=$this->session->userdata('password');
		$loginresult['login']=$this->Mymodel->loguser($username,$password);
		if($loginresult['login'])
		{
			return(1);
		}
		else
		{
			return(0);
		}
	}

	//DISPLAY USER LIST
	function listdisplay()
	{
		$display['dis']=$this->Mymodel->diss();
		$this->load->view('list',$display);
	}

	//COUNT THE USERS
	function countall($a)
	{
		$userreg=$this->Mymodel->countlist($a);
		return($userreg);
	}

	//COUNT APPROVEL
	function countapprove($a)
	{
		$approve=$this->Mymodel->countapproval($a);
		return($approve);
	}

	//UPLOAD NEWS
	function newsupload()
	{
		$heading=$this->input->post('heading');
		$res=$this->Mymodel->checknews($heading);
		if($res == 0)
		{
			$date=date("Y/m/d  h:i:sa");
			$description=$this->input->post('newsdescription');
			$image =  time().$_FILES['newsimage']['name'];
			move_uploaded_file($_FILES['newsimage']['tmp_name'],"../Big_Screen/images/news/".$image);
			$data=array('nid'=>NULL,'heading'=>$heading,'photo'=>$image,'description'=>$description,'ndate'=>$date,'nstatus'=>0);
			$s=$this->Mymodel->insertnews($data);
			$this->session->set_flashdata('msg', 'News Added Sucessfully');
			$result['dis']=$this->Mymodel->newsupdate(0);
			$this->load->view('admin_addnews',$result);
		}else{
			$this->session->set_flashdata('msg', 'The news already uploaded');
			$result['dis']=$this->Mymodel->newsupdate(0);
			$this->load->view('admin_addnews',$result);
		}

	}

	function newsupdate()
	{
		$heading=$this->input->post('heading');
		$res=$this->Mymodel->checknews($heading);
		if($res == 1)
		{
			$nid=$this->input->post('nid');
			$date=date("Y/m/d  h:i:sa");
			$description=$this->input->post('newsdescription');
			if($_FILES['newsimage']['name'] !=="")
			{
					$image =  time().$_FILES['newsimage']['name'];
					move_uploaded_file($_FILES['newsimage']['tmp_name'],"../Big_Screen/images/news/".$image);
					$data=array('heading'=>$heading,'photo'=>$image,'description'=>$description,'ndate'=>$date,'nstatus'=>0);
					$s=$this->Mymodel->updatenews($nid,$data);
					$this->session->set_flashdata('msg', 'News Update Sucessfully');
					$result['list']=$this->Mymodel->newslist();
					$this->load->view('admin_news',$result);
				}
				else {
					$data=array('heading'=>$heading,'description'=>$description,'ndate'=>$date,'nstatus'=>0);
					$s=$this->Mymodel->updatenews($nid,$data);
					$this->session->set_flashdata('msg', 'News Update Sucessfully');
					$result['list']=$this->Mymodel->newslist();
					$this->load->view('admin_news',$result);
				}
		}
		else
		{
			$this->session->set_flashdata('msg', 'The news already uploaded');
			$result['list']=$this->Mymodel->newslist();
			$this->load->view('admin_news',$result);
		}
	}

	//Movie details insert
	function moviedetailesinsert()
	{
		$filmName=$this->input->post('filmName');
		$res=$this->Mymodel->checkmovie($filmName);
		if($res == 0)
		{
			$id=$this->session->userdata('id');
			$directer=$this->input->post('directer');
			$producer=$this->input->post('producer');
			$mdirector=$this->input->post('mdirector');
			$language=$this->input->post('language');
			$actor=$this->input->post('actor');
			$actress=$this->input->post('actress');
			$description=$this->input->post('description');
			$cost=$this->input->post('cost');
			$filmposterpic=time().$_FILES['filmposterpic']['name'];
			$coverpic=time().$_FILES['coverpic']['name'];
			$directerpic=time().$_FILES['directerpic']['name'];
			$producerpic=time().$_FILES['producerpic']['name'];
			$actorpic=time().$_FILES['actorpic']['name'];
			$actresspic=time().$_FILES['actresspic']['name'];
			$posterpath="../Big_Screen/images/movie/poster/";
			$coverpath="../Big_Screen/images/movie/cover/";
			$directorpath="../Big_Screen/images/movie/directer/";
			$producerpath="../Big_Screen/images/movie/producer/";
			$actorpath="../Big_Screen/images/movie/actor/";
			$actresspath="../Big_Screen/images/movie/actress/";
			move_uploaded_file($_FILES['filmposterpic']['tmp_name'],$posterpath.$filmposterpic);
			move_uploaded_file($_FILES['coverpic']['tmp_name'],$coverpath.$coverpic);
			move_uploaded_file($_FILES['directerpic']['tmp_name'],$directorpath.$directerpic);
			move_uploaded_file($_FILES['producerpic']['tmp_name'],$producerpath.$producerpic);
			move_uploaded_file($_FILES['actorpic']['tmp_name'],$actorpath.$actorpic);
			move_uploaded_file($_FILES['actresspic']['tmp_name'],$actresspath.$actresspic);

			$sourceProperties = getimagesize($posterpath.$filmposterpic);
			$this->imagecheckposter($sourceProperties,$posterpath.$filmposterpic);

			$sourceProperties = getimagesize($coverpath.$coverpic);
			$this->imagecheckcover($sourceProperties,$coverpath.$coverpic);

			$sourceProperties = getimagesize($directorpath.$directerpic);
			$this->imagecheck($sourceProperties,$directorpath.$directerpic);

			$sourceProperties1 = getimagesize($producerpath.$producerpic);
			$this->imagecheck($sourceProperties1,$producerpath.$producerpic);

			$sourceProperties2 = getimagesize($actorpath.$actorpic);
			$this->imagecheck($sourceProperties2,$actorpath.$actorpic);

			$sourceProperties3 = getimagesize($actresspath.$actresspic);
			$this->imagecheck($sourceProperties3,$actresspath.$actresspic);

			$data=array('mid'=>NULL,'distributer_id'=>$id,'film_name'=>$filmName,'poster_pic'=>$filmposterpic,'cover_pic'=>$coverpic,'directer'=>$directer,'directer_pic'=>$directerpic,'producer'=>$producer,'producer_pic'=>$producerpic,'mdirector'=>$mdirector,'language'=>$language,'actor'=>$actor,'actor_pic'=>$actorpic,'actress'=>$actress,'actress_pic'=>$actresspic,'description'=>$description,'date'=>'2018','price'=>$cost);
			$this->Mymodel->insertmovie($data);
			$username=$this->session->userdata('username');
			$this->session->set_flashdata('msg', 'Film Update Sucessfully');
			$result['dis']=$this->Mymodel->disuser($username);
			$this->load->view('distributer_addfilmdetails',$result);
		}
		else
		{
			$username=$this->session->userdata('username');
			$this->session->set_flashdata('msg', 'The Film Already Uploaded');
			$result['dis']=$this->Mymodel->disuser($username);
			$this->load->view('distributer_addfilmdetails',$result);
		}
	}

	//Film detailes view distributer
	function filmviewdistributer()
	{
		$lid=$this->session->userdata('id');
		$fid=$this->input->post('fid');
		if(isset($fid))
		{
			$result['dis']=$this->Mymodel->filmsingle($fid);
			$this->load->view('distributer_film_single',$result);
		}
		else
		{
			$result['dis']=$this->Mymodel->theatreaccepted($lid);
			$this->load->view('distributer_selectedfilmdetails',$result);
		}
	}
	//films view in theaters
	function filmviewtheatres()
	{
		$lid=$this->session->userdata('id');
		$fid=$this->input->post('fid');
		if(isset($fid))
		{
			$result['dis']=$this->Mymodel->filmsingle($fid);
			$this->load->view('theatre_selected_single',$result);
		}
		else
		{

				$result['dis']=$this->Mymodel->theatreaccepted($lid);
				$this->load->view('theatre_acceptedfilms',$result);
		}
	}
	//distributer edit profile
	function distributer_profile_edit()
	{
		$email=$this->input->post('email');
		if(isset($email))
		{
		$result['dis']=$this->Mymodel->disuser($email);
		$this->load->view('distributer_profileedit',$result);
	}
	else {
		$username=$this->session->userdata('username');
		$result['dis']=$this->Mymodel->disuser($username);
		$this->load->view('distributer_profile',$result);
	}
	}
	//theatre edit profile

	function theatre_profile_edit()
	{
		$email=$this->input->post('email');
		if(isset($email))
		{
			$result['dis']=$this->Mymodel->disuser($email);
			$this->load->view('theatre_profileedit',$result);
		}
		else {
			$username=$this->session->userdata('username');
			$result['dis']=$this->Mymodel->disuser($username);
			$this->load->view('theatre_profile',$result);
		}
	}

	//updeate distributer profile

	function user_profile_edit()
	{
		$email=$this->input->post('email');
		if(isset($email))
		{
			$result['dis']=$this->Mymodel->disuser($email);
			$this->load->view('user_editprofile',$result);
		}
		else {
			$username=$this->session->userdata('username');
			$result['dis']=$this->Mymodel->disuser($username);
			$this->load->view('user_profile',$result);
		}
	}

	function distributer_profile_update()
	{
		$name=$this->input->post('name');
		if(isset($name))
		{
				$email=$this->input->post('email');
				$phone=$this->input->post('phone');
				$place=$this->input->post('place');
				$pin=$this->input->post('pin');
				$button=$this->input->post('action');
				if($button=='cancel')
				{
					$username=$this->session->userdata('username');
					$result['dis']=$this->Mymodel->disuser($username);
					$this->load->view('distributer_profile',$result);
				}
				else
				{
					if($_FILES['profilepic']['name'] !=="")
						{
							$folderPath = "../Big_Screen/images/profile/";
							$image =  time().$_FILES['profilepic']['name'];
							move_uploaded_file($_FILES['profilepic']['tmp_name'],$folderPath.$image);
							$sourceProperties = getimagesize($folderPath.$image);
							$ext = pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION);
							$this->imagecheck($sourceProperties,$folderPath.$image);
							$data=array('name'=>$name,'phone'=>$phone,'place'=>$place,'pin'=>$pin,'profile_pic'=>$image);
							$this->Mymodel->update_profile($data,$email);
							$result['dis']=$this->Mymodel->disuser($email);
							$this->session->set_userdata('name',$name);
							$this->load->view('distributer_profile',$result);
						}
						else
						{
							$data=array('name'=>$name,'phone'=>$phone,'place'=>$place,'pin'=>$pin);
							$this->Mymodel->update_profile($data,$email);
							$result['dis']=$this->Mymodel->disuser($email);
							$this->load->view('distributer_profile',$result);
						}
				}
			}
			else
			{
				$username=$this->session->userdata('username');
				$result['dis']=$this->Mymodel->disuser($username);
				$this->load->view('distributer_profile',$result);
			}

	}
	//update theatre profile
	function theatre_profile_update()
	{
		$name=$this->input->post('name');
		if(isset($name))
		{
				$email=$this->input->post('email');
				$phone=$this->input->post('phone');
				$place=$this->input->post('place');
				$pin=$this->input->post('pin');
				$button=$this->input->post('action');
				if($button=='cancel')
				{
					$username=$this->session->userdata('username');
					$result['dis']=$this->Mymodel->disuser($username);
					$this->load->view('theatre_profile',$result);
				}
				else
				{
					if($_FILES['profilepic']['name'] !=="")
					{
						$p=$_FILES['profilepic']['name']	;
						$folderPath = "../Big_Screen/images/profile/";
						$image =  time().$_FILES['profilepic']['name'];
						move_uploaded_file($_FILES['profilepic']['tmp_name'],$folderPath.$image);
						$sourceProperties = getimagesize($folderPath.$image);
						$ext = pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION);
						$this->imagecheck($sourceProperties,$folderPath.$image);
						$data=array('name'=>$name,'phone'=>$phone,'place'=>$place,'pin'=>$pin,'profile_pic'=>$image);
						$this->Mymodel->update_profile($data,$email);
						$result['dis']=$this->Mymodel->disuser($email);
						$this->session->set_userdata('name',$name);
						$this->load->view('theatre_profile',$result);
					}
					else
					{
						$data=array('name'=>$name,'phone'=>$phone,'place'=>$place,'pin'=>$pin);
						$this->Mymodel->update_profile($data,$email);
						$result['dis']=$this->Mymodel->disuser($email);
						$this->load->view('theatre_profile',$result);
					}
				}
		}
		else
	 	{
			$username=$this->session->userdata('username');
			$result['dis']=$this->Mymodel->disuser($username);
			$this->load->view('theatre_profile',$result);
		}
	}

	
	function user_profile_update()
	{
		$name=$this->input->post('name');
		if(isset($name))
		{
				$email=$this->input->post('email');
				$phone=$this->input->post('phone');
				$place=$this->input->post('place');
				$pin=$this->input->post('pin');
				$button=$this->input->post('action');
				if($button=='cancel')
				{
					$username=$this->session->userdata('username');
					$result['dis']=$this->Mymodel->disuser($username);
					$this->load->view('user_profile',$result);
				}
				else
				{
					if($_FILES['profilepic']['name'] !=="")
					{
						$p=$_FILES['profilepic']['name']	;
						$folderPath = "../Big_Screen/images/profile/";
						$image =  time().$_FILES['profilepic']['name'];
						move_uploaded_file($_FILES['profilepic']['tmp_name'],$folderPath.$image);
						$sourceProperties = getimagesize($folderPath.$image);
						$ext = pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION);
						$this->imagecheck($sourceProperties,$folderPath.$image);
						$data=array('name'=>$name,'phone'=>$phone,'place'=>$place,'pin'=>$pin,'profile_pic'=>$image);
						$this->Mymodel->update_profile($data,$email);
						$result['dis']=$this->Mymodel->disuser($email);
						$this->session->set_userdata('name',$name);
						$this->load->view('user_profile',$result);
					}
					else
					{
						$data=array('name'=>$name,'phone'=>$phone,'place'=>$place,'pin'=>$pin);
						$this->Mymodel->update_profile($data,$email);
						$result['dis']=$this->Mymodel->disuser($email);
						$this->load->view('user_profile',$result);
					}
				}
		}
		else
		{
			$username=$this->session->userdata('username');
			$result['dis']=$this->Mymodel->disuser($username);
			$this->load->view('user_profile',$result);
		}
	}

	function imagecheckposter($sourceProperties,$path)
	{
		$imageType = $sourceProperties[2];
		switch ($imageType) {


			case IMAGETYPE_PNG:
			$imageResourceId = imagecreatefrompng($path);
			$targetLayer = $this->imageResizeposter($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagepng($targetLayer,$path);
			break;


			case IMAGETYPE_GIF:
			$imageResourceId = imagecreatefromgif($path);
			$targetLayer = $this->imageResizeposter($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagegif($targetLayer,$path);
			break;


			case IMAGETYPE_JPEG:
			$imageResourceId = imagecreatefromjpeg($path);
			$targetLayer =$this->imageResizeposter($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagejpeg($targetLayer,$path);
			break;


			default:
			echo "Invalid Image type.";
			exit;
			break;

		}
	}

	function imagecheckcover($sourceProperties,$path)
	{
		$imageType = $sourceProperties[2];
		switch ($imageType) {


			case IMAGETYPE_PNG:
			$imageResourceId = imagecreatefrompng($path);
			$targetLayer = $this->imageResizecover($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagepng($targetLayer,$path);
			break;


			case IMAGETYPE_GIF:
			$imageResourceId = imagecreatefromgif($path);
			$targetLayer = $this->imageResizecover($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagegif($targetLayer,$path);
			break;


			case IMAGETYPE_JPEG:
			$imageResourceId = imagecreatefromjpeg($path);
			$targetLayer =$this->imageResizecover($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagejpeg($targetLayer,$path);
			break;


			default:
			echo "Invalid Image type.";
			exit;
			break;

		}
	}


	//check image type
	function imagecheck($sourceProperties,$path)
	{
		$imageType = $sourceProperties[2];
		switch ($imageType) {


			case IMAGETYPE_PNG:
			$imageResourceId = imagecreatefrompng($path);
			$targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagepng($targetLayer,$path);
			break;


			case IMAGETYPE_GIF:
			$imageResourceId = imagecreatefromgif($path);
			$targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagegif($targetLayer,$path);
			break;


			case IMAGETYPE_JPEG:
			$imageResourceId = imagecreatefromjpeg($path);
			$targetLayer =$this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagejpeg($targetLayer,$path);
			break;


			default:
			echo "Invalid Image type.";
			exit;
			break;

		}
	}
	function imageResize($imageResourceId,$width,$height)
	{
		$targetWidth =200;
		$targetHeight =200;
		$targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
		imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
		return $targetLayer;
	}

	function imageResizeposter($imageResourceId,$width,$height)
	{
		$targetWidth =236;
		$targetHeight =328;
		$targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
		imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
		return $targetLayer;
	}

	function imageResizecover($imageResourceId,$width,$height)
	{
		$targetWidth =1280;
		$targetHeight =720;
		$targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
		imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
		return $targetLayer;
	}

	function filmbookrequest()
	{

		$mid=$this->input->post('mid');
		$lid=$this->input->post('lid');
		$date=date("Y/m/d");
		//$data1=array('lid'=>NULL,'username'=>$email,'password'=>$pass,'type'=>$type,'status'=>'1');
		$data=array('fs_id'=>NULL,'mid'=>$mid,'lid'=>$lid,'status'=>'0','date'=>$date);
		$a['dis']=$this->Mymodel->filmbookstatus($data,$mid,$lid);
		foreach($a['dis'] as $row)
		{
			$fid=$row->status;
			echo $fid;
		}
	}

	function filmapprove()
	{
		$status=$this->input->post('status');
		$fid=$this->input->post('fid');
		$action=1;
		$a=$this->Mymodel->filmapprove($fid,$action);
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->filmsselect($lid);
		$this->load->view('distributer_selectedfilmdetails',$result);

	}

	function filmbookrequestcancel()
	{
		$mid=$this->input->post('mid');
		$lid=$this->input->post('lid');
		//$data1=array('lid'=>NULL,'username'=>$email,'password'=>$pass,'type'=>$type,'status'=>'1');
		$data=array('mid'=>$mid,'lid'=>$lid);
		$a=$this->Mymodel->filmbookstatuscancel($data);
		echo $a;
	}

	function bookstatus($mid,$lid)
	{
		$a['dis']=$this->Mymodel->bookstatus($mid,$lid);
		foreach($a['dis'] as $row)
		{
			$fid=$row->status;
			return $fid;
		}
	}

	function bankpayment()
	{
		$mid = $this->input->post('mid');
		if(isset($mid))
		{
			$result['dis']=$this->Mymodel->paymentfilm($mid);
			$this->load->view('bank_payment',$result);
		}
		else
		{
			$lid=$this->session->userdata('id');
			$result['dis']=$this->Mymodel->theatreaccepted($lid);
			$this->load->view('theatre_acceptedfilms',$result);
		}
	}

	function payment()
	{
		$bank = $this->input->post('banktype');
		if(isset($bank))
		{
			$cardnumber = $this->input->post('cardnumber');
			$month = $this->input->post('month');
			$year = $this->input->post('year');
			$cardCVV = $this->input->post('cardCVV');
			$holdername = $this->input->post('holdername');
			$price = $this->input->post('price');
			$mid = $this->input->post('mid');
			$lid=$this->session->userdata('id');
			$data=array('banktype'=>$bank,'card_no'=>$cardnumber,'month'=>$month,'year'=>$year,'cvv'=>$cardCVV,'name'=>$holdername);
			$count['dis']=$this->Mymodel->payment($data);
			if($count['dis'])
			{
				foreach ($count['dis'] as $row)
				{
					$bankid=$row->bid;
					$amount=$row->amount;
					if($amount > $price)
					{
						$balance=$amount - $price;
						$count1['dis1']=$this->Mymodel->select_id($mid,$lid);
						foreach ($count1['dis1'] as $row1)
						{
							$fs_id=$row1->fs_id;
							$this->Mymodel->select_film_status($fs_id);
							$this->Mymodel->update_bank_balabce($balance,$bankid);
							echo "<script>alert('Payment Successful')</script>";
							$result['dis']=$this->Mymodel->theatrebooked($lid);
							$this->load->view('theatre_bookedfilms',$result);
						}
					}
					else
					{
						echo "<script>alert('Account contain insufficient balance')</script>";
						$lid=$this->session->userdata('id');
						$result['dis']=$this->Mymodel->theatreaccepted($lid);
						$this->load->view('theatre_acceptedfilms',$result);
					}
				}
			}
			else
			{
				echo "<script>alert('Payment Card Details Incorrect')</script>";
				$lid=$this->session->userdata('id');
				$result['dis']=$this->Mymodel->theatreaccepted($lid);
				$this->load->view('theatre_acceptedfilms',$result);
			}
		}
		else
		{
			$lid=$this->session->userdata('id');
			$result['dis']=$this->Mymodel->theatreaccepted($lid);
			$this->load->view('theatre_acceptedfilms',$result);
		}
	}

function theaterseatingadd()
{
	$lid=$this->session->userdata('id');
	$c_rows = $this->input->post('c_rows');
	if(isset($c_rows))
	{
	$c_column = $this->input->post('c_column');
	$c_price = $this->input->post('c_price');
	$l_rows = $this->input->post('l_rows');
	$l_column = $this->input->post('l_column');
	$l_price = $this->input->post('l_price');
	$b_rows = $this->input->post('b_rows');
	$b_column = $this->input->post('b_column');
	$b_price = $this->input->post('b_price');
	$shows = $this->input->post('shows');
	$time1 = $this->input->post('time1');
	$time2 = $this->input->post('time2');
	$time3 = $this->input->post('time3');
	$time4 = $this->input->post('time4');
	$time5 = $this->input->post('time5');
	$data=array('lid'=>$lid,'c_row'=>$c_rows,'c_column'=>$c_column,'c_price'=>$c_price,'l_rows'=>$l_rows,'l_column'=>$l_column,'l_price'=>$l_price,'b_rows'=>$b_rows,'b_column'=>$b_column,'b_price'=>$b_price,'no_of_shows'=>$shows,'time1'=>$time1,'time2'=>$time2,'time3'=>$time3,'time4'=>$time4,'time5'=>$time5,'status'=>'0');
	$this->Mymodel->theaterseatingadd($data);
	$result['dis']=$this->Mymodel->seatingselection($lid);
	$this->load->view('theatre_seating',$result);
}
else
{
	$lid=$this->session->userdata('id');
	$result['dis']=$this->Mymodel->seatingselection($lid);
	$this->load->view('theatre_seating',$result);
}
}

function seatingselection()
{
	$lid=$this->session->userdata('id');
	$result['dis']=$this->Mymodel->seatingselection($lid);
	return $result;
}

function theaterseatingedit()
{
	$lid=$this->session->userdata('id');
	$result['dis']=$this->Mymodel->theaterseatingedit($lid);
	$this->load->view('theatre_seating',$result);
}

function theaterseatingupdate()
{
	$lid=$this->session->userdata('id');
	$c_rows = $this->input->post('c_rows');
	if(isset($c_rows))
	{
			$c_column = $this->input->post('c_column');
			$c_price = $this->input->post('c_price');
			$l_rows = $this->input->post('l_rows');
			$l_column = $this->input->post('l_column');
			$l_price = $this->input->post('l_price');
			$b_rows = $this->input->post('b_rows');
			$b_column = $this->input->post('b_column');
			$b_price = $this->input->post('b_price');
			$shows = $this->input->post('shows');
			$time1 = $this->input->post('time1');
			$time2 = $this->input->post('time2');
			$time3 = $this->input->post('time3');
			$time4 = $this->input->post('time4');
			$time5 = $this->input->post('time5');
			$data=array('lid'=>$lid,'c_row'=>$c_rows,'c_column'=>$c_column,'c_price'=>$c_price,'l_rows'=>$l_rows,'l_column'=>$l_column,'l_price'=>$l_price,'b_rows'=>$b_rows,'b_column'=>$b_column,'b_price'=>$b_price,'no_of_shows'=>$shows,'time1'=>$time1,'time2'=>$time2,'time3'=>$time3,'time4'=>$time4,'time5'=>$time5,'status'=>'0');
			$this->Mymodel->theaterseatingupdate($data,$lid);
			$result['dis']=$this->Mymodel->seatingselection($lid);
			$this->load->view('theatre_seating',$result);
	}
	else
	{
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->seatingselection($lid);
		$this->load->view('theatre_seating',$result);
	}
}

function runningfilmtime()
{
	$mid = $this->input->post('fid');
	if(isset($mid))
	{
		$result['dis']=$this->Mymodel->filmrunningtime($mid);
		$this->load->view('theatre_filmtimesetting',$result);
	}
	else
	{
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->theatrebooked($lid);
		$this->load->view('theatre_runningtime',$result);
	}
}

function runningtimeadd()
{
	$mid = $this->input->post('mid');
	if(isset($mid))
	{
			$noofshows= $this->input->post('noofshows');
			$lid=$this->session->userdata('id');
			$time1 = $this->input->post('time1');
			$time2 = $this->input->post('time2');
			$time3 = $this->input->post('time3');
			$time4 = $this->input->post('time4');
			$time5 = $this->input->post('time5');
			if(!isset($time1)){	$time1='00:00';	}
			if(!isset($time2)){	$time2='00:00';	}
			if(!isset($time3)){	$time3='00:00';	}
			if(!isset($time4)){	$time4='00:00';	}
			if(!isset($time5)){	$time5='00:00';	}
			$data=array('mid'=>$mid,'lid'=>$lid,'no_of_shows'=>$noofshows,'time1'=>$time1,'time2'=>$time2,'time3'=>$time3,'time4'=>$time4,'time5'=>$time5,'status'=>'1');
			$result['dis']=$this->Mymodel->runningtimeadd($data,$lid);
			$this->load->view('theatre_runningtime',$result);

		}
		else
		{
			$lid=$this->session->userdata('id');
			$result['dis']=$this->Mymodel->theatrebooked($lid);
			$this->load->view('theatre_filmtimesetting',$result);
		}

}

function showrunningfilmtime()
{
	$lid=$this->session->userdata('id');
	$mid = $this->input->post('fid');
	if(isset($mid))
	{
		$result['dis']=$this->Mymodel->showrunningmoviedetailes($lid,$mid);
		$this->load->view('theatre_filmtimeshow',$result);
	}
	else
	{
		$lid=$this->session->userdata('id');
		$result['dis']=$this->Mymodel->tfilmrunningtime($lid);
		$this->load->view('theatre_runningtime',$result);
	}
}



	function ForgotPass()
	{
		$email = $this->input->post('email');
		$findemail = $this->Mymodel->ForgotPassword($email);
		if ($findemail)
		{
			$this->Mymodel->sendpassword($findemail);
		}
		else
		{
			echo "<script>alert(' $email not found, please enter correct email id')</script>";
			redirect('controller/login');
		}
	}

	function myprof()
	{
		$this->load->view('user');
	}

}

?>
