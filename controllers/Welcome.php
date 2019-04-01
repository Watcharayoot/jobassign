<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
			$this->load->library('form_validation');
            $this->load->database();
            $this->load->model('Login_model');
            $this->load->model('Workit_model');

            $this->load->library('session');  // เรียกใช้งาน session
    }  

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{	

		$user = $this->input->post('user');
        $key = $this->input->post('key');
        $this->Login_model->login($user,$key);

        redirect(base_url().'index.php/Welcome/show');
        
	}
	public function home()
	{
        $ss = $this->session->userdata('logged_in');
        

        if($ss["job"]=="master"){
            $entries['data'] = $this->Login_model->get_assign($ss["level"],$ss["dept"]);
        }
        else if($ss["job"]=="assign"){
            $entries['data'] = $this->Login_model->get_worker($ss["level"],$ss["dept"]);
            $entries['ref'] = $this->Workit_model->get_ref($ss["ID"]);

        }
        $this->load->view('work',$entries);

		
	}
    public function show()
    { 

    $ss = $this->session->userdata('logged_in');
    if($ss["job"]=="master"){
        //$this->load->view('table');
        $data['data'] =$this->Workit_model->getall();
        $data['assign']=$this->Workit_model->getdata($ss["ID"]);

        $this->load->view('table',$data);

        //print_r($data);
        
    }
    else if($ss["job"]=="assign"){

        $data['assign']=$this->Workit_model->getdata($ss["ID"]);
        $data['data']=$this->Workit_model->getwork($ss["ID"]);

        $this->load->view('table',$data);
        
    }
       //redirect('http://www.google.com');

       else if($ss["job"]=="worker"){

        $data['data']=$this->Workit_model->getwork($ss["ID"]);
        
        $this->load->view('table',$data);}

        else if($ss["job"]=="Root"){

        echo "I'm Root ";
        print_r($ss);}
        //print_r($data);
            else{echo "<script>alert(\"Authentication failed\");
                    window.location=\"/it/job/\";
                  </script>";
            }

    }
    public function input()
    {
        $ss = $this->session->userdata('logged_in');

        $data=array(
                            'doc_no' =>NULL,
                            'work_ref' => $this->input->post('Ref_no'),
                            'work_event' => $this->input->post('topic'),
                            'worker' => $this->input->post('worker'),
                            'date_start' => $this->input->post('start'),
                            'date_end' => $this->input->post('finish'),
                            'work_detail' => $this->input->post('detail'),
                            'work_status' => '1',
                            'work_note' => null,
                            'assign_by' => $ss["ID"],
                            'time_stamp' => null,
                            'score'=>$this->input->post('score'),
                            'urgent'=>$this->input->post('urgent')
                        );
        $mail = $this->Login_model->get_mail($this->input->post('worker'));

        //print_r($data);

   
    //echo $mail[0]['Email'];



    $strTo = $mail[0]['Email'];
    $strSubject = 'Job Assign';

    $strHeader = "Content-type: text/html; charset=UTF-8\r\n";

    $strHeader .= "From: itsupport@mbjenterprise.co.th"."\r\n";
    $strMessage = 'Job Assign'."<br><br><br>";
    
    

    $strMessage .= "TOPIC :&nbsp;&nbsp;". $this->input->post('topic')."<br><br>";

    $strMessage .= "Detail:&nbsp;&nbsp;".$this->input->post('detail')."<br><br>";

    $strMessage .= "Date-finish:&nbsp;&nbsp;".$this->input->post('finish')."<br><br>";


    $flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader); 
    if($flgSend){
	$this->Workit_model->input_work($data);
        redirect(base_url().'index.php/welcome/show');
}
else echo"don't send";







        //$this->Workit_model->input_work($data);
        //redirect(base_url().'index.php/welcome/show');
        //$this->load->view('table');
    }

     public function data()
    {
        $data['data'] = $this->Workit_model->get($this->uri->segment(3));
        //print_r($data);
        if($data['data'][0]['work_ref']!=null){
        
        $data['ref'] = $this->Workit_model->get($data['data'][0]['work_ref']);}
        else ;
        //echo "<pre>";
//print_r($data);
        //print_r($data);
        $this->load->view('show',$data);
    }
public function update()
    {
        date_default_timezone_set("Asia/Bangkok");

        if($this->input->post('update')){ 
                            $work_event = $this->input->post('work_event');
                            $work_status = '2';
                            $work_note = $this->input->post('work_note');
                            $work_update =$this->input->post('work_note_update');
                            $now = date('Y-m-d'.'  ' .'H:i:s');
                            $mail = $this->Login_model->get_mail($this->input->post('update'));
                        

                            //$this->Workit_model->update_work($work_event,$work_status,$work_update,$now);
                       
            

                                



    $strTo = $mail[0]['Email'];
    $strSubject = 'Job Assign';

    $strHeader = "Content-type: text/html; charset=UTF-8\r\n";

    $strHeader .= "From: itsupport@mbjenterprise.co.th"."\r\n";
    $strMessage = 'Update JOB'."<br><br><br>";
    
    

    $strMessage .= "TOPIC :&nbsp;&nbsp;". $this->input->post('work_event')."<br><br>";

    $strMessage .= "DATA:&nbsp;&nbsp;".$this->input->post('work_note_update')."<br><br>";

    $strMessage .= "TIME:&nbsp;&nbsp;".$now."<br><br>";



    $flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader); 
    if($flgSend){
	$this->Workit_model->update_work($work_event,$work_status,$work_update,$now);
        redirect(base_url().'index.php/welcome/show');
	}
	else echo"don't send";





                               
                            
                
                        //print_r($file);
                        
                        //echo $file;

                            //echo $work_update;

                        //$this->Workit_model->update_work($work_event,$work_status,$work_update,$now,$file);

                      
                       ; }



        elseif ($this->input->post('complete')) { 
                            $work_event = $this->input->post('work_event');
                            $work_status = '3';
                            $work_note = $this->input->post('work_note');
                            $work_update =$this->input->post('work_note_update');
                           // echo $work_update;
                           $now = date('Y-m-d'.'  ' .'H:i:s');
                        

                            //$this->Workit_model->update_work($work_event,$work_status,$work_update,$now);
                            
            
 $mail = $this->Login_model->get_mail($this->input->post('complete'));
                        

                            //$this->Workit_model->update_work($work_event,$work_status,$work_update,$now);
                       
            

                                



    $strTo = $mail[0]['Email'];
    $strSubject = 'Job Assign';

    $strHeader = "Content-type: text/html; charset=UTF-8\r\n";

    $strHeader .= "From: itsupport@mbjenterprise.co.th"."\r\n";
    $strMessage = 'Complete'."<br><br><br>";
    
    

    $strMessage .= "TOPIC :&nbsp;&nbsp;". $this->input->post('work_event')."<br><br>";

    $strMessage .= "DATA:&nbsp;&nbsp;".$this->input->post('work_note_update')."<br><br>";

    $strMessage .= "TIME:&nbsp;&nbsp;".$now."<br><br>";



    $flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader); 
    if($flgSend){
	$this->Workit_model->update_work($work_event,$work_status,$work_update,$now);
        redirect(base_url().'index.php/welcome/show');
	}
	else echo"don't send";



                       ; }

        elseif($this->input->post('edit')){
                            $work_event = $this->input->post('work_event');
                            $work_status = '2';
                            $work_detail = $this->input->post('work_detail_edit');
                            $date_end =$this->input->post('date_end_edit');
                            $this->Workit_model->update_command($work_event,$work_status,$work_detail,$date_end);
                            ?> <script type="text/javascript">
                            
                            window.history.back();

                        </script>;<?php
                            ;}



        elseif($this->input->post('comment')){
                            $work_event = $this->input->post('work_event');
                            $work_status = '2';
                            $comment = $this->input->post('comment_work');
                            $worker = $this->input->post('comment');
                            $mail = $this->Login_model->get_mail($worker);
                             //$this->Workit_model->comment($work_event,$comment,$work_status);
                             //echo $worker ;
	$strTo = $mail[0]['Email'];
    $strSubject = 'Job Assign';

    $strHeader = "Content-type: text/html; charset=UTF-8\r\n";

    $strHeader .= "From: itsupport@mbjenterprise.co.th"."\r\n";
    $strMessage = 'Comment JOB'."<br><br><br>";
    
    

    $strMessage .= "TOPIC :&nbsp;&nbsp;". $this->input->post('work_event')."<br><br>";

    $strMessage .= "Comment:&nbsp;&nbsp;".$this->input->post('comment_work')."<br><br>";



    $flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader); 
    if($flgSend){
	$this->Workit_model->comment($work_event,$comment,$work_status);
        redirect(base_url().'index.php/welcome/show');
	}
	else echo"don't send";







                            //echo  $date_end;
                            ;}



                            elseif($this->input->post('cancle')){
                            $data=array(
                                'doc_no' =>$this->input->post('cancle'),);
                             $this->Workit_model->cancle_job($data);
                             redirect(base_url().'/index.php/welcome/show');
                             
                            
                            }
                             elseif($this->input->post('ok')){
                                $doc_no =$this->input->post('ok');
                                $work_status = '4';
                                //echo$doc_no;
                                //echo$work_status;
                             $this->Workit_model->after_check($doc_no,$work_status);
                             redirect(base_url().'/index.php/welcome/show');
                             
                            
                            }

                            elseif($this->input->post('upload')){
                                $doc_no =$this->input->post('upload');
                                 $now = date('Y-m-d'.'  ' .'H:i:s');
                                
                                //echo$doc_no;
                                //echo$work_status;
                             //$this->Workit_model->after_check($doc_no,$work_status);
                             //redirect(base_url().'/index.php/welcome/show');
                                //$this->Workit_model->update_command($work_event,$work_status,$work_detail,$date_end);
                            $config['upload_path'] = 'upload';
                            $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                            $config['max_size'] = '0';
                            $config['remove_spaces'] = TRUE;
                            $config['encrypt_name']  = true;
                            
                             $this->load->library("upload",$config);
                foreach ($_FILES as $key => $value) {
                    if (!empty($value['tmp_name']) && $value['size'] > 0) {
                        if ($this->upload->do_upload($key)) {
                            // Files Upload Success
                            
                                 $xxx[] = $this->upload->data('full_path') ;
                                 //print_r($xxx);
                        } else {
                            $errors = $this->upload->display_errors();
                            echo $errors;
                                } // End else
                            }
                        }
                        
                             $file = substr($xxx[0],13);

                            //print_r($xxx);
                            //echo $doc_no;
                             $this->Workit_model->upload($doc_no,$file,$now);
                             ?> <script type="text/javascript">
                            
                            window.history.back();

                        </script>;<?php
                             
                            
                            }
        
                           // $work_event = $this->input->post('work_event');
                           // $work_status = '2';
                           // $work_note = $this->input->post('work_note');
                        
        //$now = date('Y-m-d');
        //echo $now;
        //echo $work_note;
        //echo $work_status;
        //echo $work_event;
        //print_r($work_event,$work_status,$work_note,$now);
      // $this->Workit_model->update_work($work_event,$work_status,$work_note,$now);
        //$data['data'] = $this->Workit_model->get($this->uri->segment(3));
        //print_r($data);

        //$this->load->view('show',$data);
      // redirect('refresh');
                            //echo $this->input->post('update') ;
                         
    }
    public function source()
    { 

    $ss = $this->session->userdata('logged_in');
    if($ss["job"]=="master"){
        //$this->load->view('table');
        $data['data'] =$this->Workit_model->getall();
         $data['assign']=$this->Workit_model->getdata($ss["ID"]);


        //print_r($data);
        
    }
    else if($ss["job"]=="assign"){

        $data['assign']=$this->Workit_model->getdata($ss["ID"]);
        $data['data']=$this->Workit_model->getwork($ss["ID"]);
        
    }
       //redirect('http://www.google.com');

       else if($ss["job"]=="worker"){

        $data['data']=$this->Workit_model->getwork($ss["ID"]);}

        

        $this->load->view('source',$data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());

        //$this->load->view('table');
    }
    public function up()
    {
        $this->load->view('upload');

        //$this->load->view('table');
    }
     public function upcheck()
    {
        $config['upload_path'] = 'upload';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
            $config['max_size'] = '0';
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name']  = true;
            
            

                $this->load->library("upload",$config);
                foreach ($_FILES as $key => $value) {
                    if (!empty($value['tmp_name']) && $value['size'] > 0) {
                        if ($this->upload->do_upload($key)) {
                            // Files Upload Success
                            
                                 $xxx[] = $this->upload->data('full_path') ;
                                 print_r($xxx);
                        } else {
                            $errors = $this->upload->display_errors();
                            echo $errors;
                                } // End else
                            }
                        }
                        $file[]= substr($xxx[0],18);
                        print_r($file);



        //$this->load->view('table');
    }
    public function mail()
    {
             $config = Array(
                    'protocol' => 'mail',
                    'smtp_host' => 'mail.mbjenterprise.co.th',
                    'smtp_port' => 587,
                    'smtp_user' => 'watcharayoot.l@mbjenterprise.co.th',
                    'smtp_pass' => 'W20l17t',
                    'mailtype'  => 'html'
                );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

//Add file directory if you need to attach a file
           

            $this->email->from('Jobassign', 'watcharayoot');
            $this->email->to('suphakorn_c@mbjenterprise.co.th'); 

            $this->email->subject('test');
            $this->email->message('test'); 

                if($this->email->send()){
   //Success email Sent
                        echo $this->email->print_debugger();
                }else{
   //Email Failed To Send
                            echo $this->email->print_debugger();
                    }
        }
}
