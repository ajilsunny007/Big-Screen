<?php
class Mymodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


//user registraion details insert
	function insertdetails($data)
	{
		$this->db->insert('tbl_details',$data);

	}
	function insertlogin($data)
	{
		$this->db->insert('tbl_login',$data);

	}
// END OF usert registraion details insert

//Insert News
	function insertnews($data)
	{
		$this->db->insert('tbl_news',$data);
	}

//insert movie detailes
	function insertmovie($data)
	{
		$this->db->insert('tbl_moviedetails',$data);
	}
//login
	function loguser($username,$password)
	{
		$this->db->join('tbl_details','tbl_login.username=tbl_details.email','inner');
		$querys=$this->db->get_where('tbl_login',array('username'=>$username,'password'=>$password));
		return $querys->result();
	}

//check the user is registerd or not
	function checkreguser($user)
	{
		$querys=$this->db->get_where('tbl_login',array('username'=>$user));
		return $querys->result();
	}

//Not approved theatres list
	function approvetheatrelist($type)
	{
		$this->db->join('tbl_details','tbl_login.username=tbl_details.email','inner');
		$querys=$this->db->get_where('tbl_login',array('type'=>$type,'lstatus'=>'0'));
		return $querys->result();
	}

//distributer approvel
	function approvedistributerlist($type)
	{
		$this->db->join('tbl_details','tbl_login.username=tbl_details.email','inner');
		$querys=$this->db->get_where('tbl_login',array('type'=>$type,'lstatus'=>'0'));
		return $querys->result();
	}
// lists
	function lists($type)
	{
		$status=array(1,2);
		$this->db->join('tbl_details','tbl_login.username=tbl_details.email','inner');
		//$this->db->where('type',$type);
		//$this->db->where('ststus!=',0);
		$querys=$this->db->get_where('tbl_login',array('type'=>$type,'lstatus!='=>0));
		return $querys->result();
	}


//Block update action
	function updateblock($email,$block)
	{
		$this->db->where('username',$email);
		$this->db->update('tbl_login',array('lstatus'=>$block));
	}

//news status update
	function updatenews($id,$data)
	{
		$this->db->where('nid',$id);
		$this->db->update('tbl_news',$data);
	}

//remove news
	function removenews($id,$action)
	{
		$this->db->where('nid',$id);
		$this->db->update('tbl_news',array('nstatus'=>$action));
	}

//count numer of users
	function countlist($a)
	{
		$query=$this->db->get_where('tbl_login',array('type'=>$a,'lstatus!='=>0));
		$c=$query->num_rows();
		return $c;
	}

//count no of appovel
	function countapproval($a)
	{
		$query=$this->db->get_where('tbl_login',array('type'=>$a,'lstatus'=>0));
		$c=$query->num_rows();
		return $c;
	}

//Check new in database
	function checknews($data)
	{
		$quuery=$this->db->get_where('tbl_news',array('heading'=>$data));
		$c=$quuery->num_rows();
		return($c);
	}
//Check film in database
	function checkmovie($data)
	{
		$quuery=$this->db->get_where('tbl_moviedetails',array('film_name'=>$data));
		$c=$quuery->num_rows();
		return($c);
	}
//List newses in admin page
	function newslist()
	{
		$this->db->order_by("nid", "desc");
		$query = $this->db->get_where('tbl_news',array('nstatus'=>0));
		return $query->result();
	}

//update news
	function newsupdate($value)
	{
		$query = $this->db->get_where('tbl_news',array('nid'=>$value));
		return $query->result();
	}

//films select
	function films($data,$msg)
	{
		$this->db->join('tbl_moviedetails','tbl_login.lid=tbl_moviedetails.distributer_id','inner');
		$this->db->join('tbl_details','tbl_login.username=tbl_details.email','inner');
		$this->db->order_by("mid", "desc");
		$query = $this->db->get_where('tbl_login',array($msg=>$data));
		return $query->result();
	}

	function filmsingle($value)
	{
		$query = $this->db->get_where('tbl_moviedetails',array('mid'=>$value));
		return $query->result();

	}
//display details access
	function disuser($user)
	{
		$this->db->join('tbl_details','tbl_login.username=tbl_details.email','inner');
		$querys=$this->db->get_where('tbl_login',array('username'=>$user));
		return $querys->result();
	}
//distributer profile update
function update_profile($data,$email)
{
	$this->db->where('email',$email);
	$this->db->update('tbl_details',$data);
}

function allfilms()
{
	$this->db->order_by("mid", "desc");
	$querys=$this->db->get_where('tbl_moviedetails');
	return $querys->result();
}

function filmbookstatus($data,$mid,$lid)
{
	$this->db->insert('tbl_filmselection',$data);
	$querys=$this->db->get_where('tbl_filmselection',array('mid'=>$mid,'lid'=>$lid));
	return $querys->result();
}

function filmbookstatuscancel($data)
{
		$this->db->where($data);
   	$this->db->delete('tbl_filmselection');
		return 0;
}
function paymentfilm($mid)
{
	$querys=$this->db->get_where('tbl_moviedetails',array('mid'=>$mid));
	return $querys->result();
}

function filmapprove($fid,$action)
{
	$this->db->where('fs_id',$fid);
	$this->db->update('tbl_filmselection',array('status'=>$action));
}

function bookstatus($mid,$lid)
{
		$querys=$this->db->get_where('tbl_filmselection',array('mid'=>$mid,'lid'=>$lid));
		return $querys->result();
}
function filmsselect($lid)
{

	$this->db->join('tbl_moviedetails','tbl_filmselection.mid=tbl_moviedetails.mid','inner');
	$this->db->join('tbl_login','tbl_filmselection.lid=tbl_login.lid','inner');
	$this->db->join('tbl_details','tbl_login.username=tbl_details.email','inner');
	//$this->db->order_by("mid", "desc");
	//$this->db->join('tbl_filmselection','tbl_moviedetails.mid=tbl_filmselection.mid','inner');
	$querys=$this->db->get_where('tbl_filmselection',array('distributer_id'=>$lid,'status'=>0));
	return $querys->result();
}
function filmsrunning($lid)
{
	$this->db->join('tbl_moviedetails','tbl_filmselection.mid=tbl_moviedetails.mid','inner');
	$this->db->join('tbl_login','tbl_filmselection.lid=tbl_login.lid','inner');
	$this->db->join('tbl_details','tbl_login.username=tbl_details.email','inner');
	//$this->db->order_by("mid", "desc");
	//$this->db->join('tbl_filmselection','tbl_moviedetails.mid=tbl_filmselection.mid','inner');
	$querys=$this->db->get_where('tbl_filmselection',array('distributer_id'=>$lid,'status !='=>0));
	return $querys->result();
}

function theatreaccepted($lid)
{
	$this->db->join('tbl_moviedetails','tbl_filmselection.mid=tbl_moviedetails.mid','inner');
	$querys=$this->db->get_where('tbl_filmselection',array('lid'=>$lid,'status'=>'1'));
	return $querys->result();
}

function theatrebooked($lid)
{
	$this->db->join('tbl_moviedetails','tbl_filmselection.mid=tbl_moviedetails.mid','inner');
	$querys=$this->db->get_where('tbl_filmselection',array('lid'=>$lid,'status'=>'2'));
	return $querys->result();
}

function payment($data)
{
	$querys=$this->db->get_where('tbl_bank',$data);
	return $querys->result();
}

function select_id($mid,$lid)
{
	$querys=$this->db->get_where('tbl_filmselection',array('lid'=>$lid,'mid'=>$mid));
	return $querys->result();
}

function select_film_status($fs_id)
{
	$this->db->where('fs_id',$fs_id);
	$this->db->update('tbl_filmselection',array('status'=>2));
}

function update_bank_balabce($balance,$bankid)
{
	$this->db->where('bid',$bankid);
	$this->db->update('tbl_bank',array('amount'=>$balance));
}

function selectfilm($language)
{
	$querys=$this->db->get_where('tbl_moviedetails',array('language'=>$language));
	return $querys->result();
}

function theaterseatingadd($data)
{
	$this->db->insert('tbl_theatreseating',$data);
}

function seatingselection($lid)
{
	$querys=$this->db->get_where('tbl_theatreseating',array('lid'=>$lid));
	return $querys->result();
}

function theaterseatingedit($lid)
{
	$this->db->where('lid',$lid);
	$this->db->update('tbl_theatreseating',array('status'=>1));
	$querys=$this->db->get_where('tbl_theatreseating',array('lid'=>$lid));
	return $querys->result();
}

function theaterseatingupdate($data,$lid)
{
	$this->db->where('lid',$lid);
	$this->db->update('tbl_theatreseating',$data);
}

 function filmrunningtime($mid)
{
	$this->db->join('tbl_moviedetails','tbl_filmselection.mid=tbl_moviedetails.mid','inner');
 	$this->db->join('tbl_theatreseating','tbl_filmselection.lid=tbl_theatreseating.lid','inner');
 	$query = $this->db->get_where('tbl_filmselection',array('tbl_moviedetails.mid'=>$mid));
 	return $query->result();
 }
function tfilmrunningtime($lid)
{
	$this->db->join('tbl_moviedetails','tbl_runningmovietime.mid=tbl_moviedetails.mid','inner');
	$querys=$this->db->get_where('tbl_runningmovietime',array('lid'=>$lid));
	return $querys->result();
}
function runningtimeadd($data,$lid)
{
	$this->db->insert('tbl_runningmovietime',$data);
	$this->db->join('tbl_moviedetails','tbl_runningmovietime.mid=tbl_moviedetails.mid','inner');
	$querys=$this->db->get_where('tbl_runningmovietime',array('lid'=>$lid));
	return $querys->result();
}

function showrunningmoviedetailes($lid,$mid)
{
	$this->db->join('tbl_moviedetails','tbl_runningmovietime.mid=tbl_moviedetails.mid','inner');
	$querys=$this->db->get_where('tbl_runningmovietime',array('lid'=>$lid,'tbl_runningmovietime.mid'=>$mid));
	return $querys->result();
}






	function ForgotPassword($email)
	{
		$querys=$this->db->get_where('tbl_login',array('uname'=>$email));
		return $querys->result();
	}

	public function sendpassword($email)
	{
    $query1=$this->db->get_where('tbl_login',array('uname'=>$email));
    $row=$query1->result_array();
    if ($query1->num_rows()>0)
	{
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['password'] = md5($passwordplain);
        $this->db->where('uname', $email);
        $this->db->update('tbl_login', $newpass);
        $mail_message='Dear '.$row[0]['name'].','. "\r\n";
        $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
        $mail_message.='<br>Please Update your password.';
        $mail_message.='<br>Thanks & Regards';
        $mail_message.='<br>Your company name';
        require 'PHPMailerAutoload.php';
        require 'class.phpmailer.php';
        $mail = new PHPMailer;
        $mail->IsSendmail();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "localhost";
        $subject = 'Testing Email';
        $mail->AddAddress($email);
        $mail->IsMail();
        $mail->From = 'ajilsunny007@gmail.com';
        $mail->FromName = 'admin';
        $mail->IsHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $mail_message;
        $mail->Send();
        if (!$mail->send()) {

            echo "<script>alert('msg','Failed to send password, please try again!')</script>";
        } else {

            echo "<script>alert('msg','Password sent to your email!')</script>";
        }
        redirect(base_url().'controller/index','refresh');
    }
    else
    {

        echo "<script>alert('msg','Email not found try again!')</script>";
        redirect(base_url().'controller/index','refresh');
    }
}

}
?>
