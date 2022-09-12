<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
      public function admi(){
      $this->view('pages/login');

    }
   // public function insert()
  //  {
     
   //   $models=$this->model('read');

   //   $values=$models->insert();
   //   echo $values;
   // }
    public function edit(){
      if(isset($_SESSION['ad']))
        {
      $this->view('pages/data');
    }
    else{
       header('Location:http://localhost/mvc/index/admi');
    }
  }
  
   public function display()
    {
      $models=$this->model('read');
    $postdata=$_POST;
    $models->readone($postdata);
    }

    public function admi2(){
    
      if(isset($_POST)){
         $ad=$_POST['name'];
         $pas=$_POST['password'];
      if(name==$ad && password==$pas)
      {
       $_SESSION['ad']='name';
       header('Location:http://localhost/mvc/pages/air');
       exit;
      }
   
    else
    { 
      echo "invalid Email and password";
    //   header('Location:http://localhost/mvc/pages/admi');
    $this->view('pages/login');
       
 }
}
    }

     public function air()
     {
      // session_status();
        if(isset($_SESSION['ad']))
        {
        $model=$this->model('read');
        $posts=$model->display();
    
        $data=[
          'posts'=>$posts
        ];
        $this->view('pages/action',$data);
       
      }
      else{
      // $this->view('pages/login');
      // header('Location:http://localhost/mvc/pages/admi');
      header('Location:http://localhost/mvc/index/admi');
        exit;
      }
     }



  public function logout()
  {
   session_unset();
    session_destroy();
    $this->view('pages/login');
  }
 
    public function display1(){
      if(isset($_SESSION['ad'])){
      $model=$this->model('read');
      $posts=$model->display();
      $data=[
        'post'=>$posts
      ];
      $this->view('pages/action1',$data);
    

  }else{
      header('Location:http://localhost/mvc/index/admi');
   }

  }

    public function delete($Emp_id)
    {
      $models=$this->model('read');
      $models1=$models->delete($Emp_id);
     // $models1=$models->delete();
      // $this->view('pages/action',$models1);
     header('location:http://localhost/mvc/pages/table');
    }

  
    public function index(){
      $data = [
        'title' => '',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
    
//public function add(){
    //    $Emp_id=$postdata['Emp_id'];
    //    $Emp_fname=$postdata['Emp_fname']; 
     //   $Emp_lname=$postdata['Emp_lname'];
     //   $Emp_email=$postdata['Emp_email'];
     //   $Emp_phone=$postdata['Empphone'];
     //   $Emp_street=$postdata['Emp_street'];
     //   $Emp_state=$postdata['Emp_state'];
     //   $Emp_country=$postdata['Emp_country']; 
    //    $file=$postdata['file']; 
    //    $image=$postdata['image'];

    //    $images_files=$_FILES['file']['name'];
    //    $data=[$Emp_id,$Emp_fname,$Emp_lname,$Emp_email,$Emp_phone,$Emp_street,$Emp_state,$Emp_country,$file,$image];
 
public function sea()
{
 $model=$this->model('read');
  $posts=$model->searc();
  if($posts){

  
  $data=[
    'post'=>$posts
  ];
  $this->view('pages/act',$data);
}

else
// {
// $data =[
//   'title'=> 'user not found'
// ];
// // $this->view('pages/act',$data);
// }
 echo "Search not found";

}


public function update()
{
  //die('dfdf');
  // $models=$this->model('read');

  $val= $_GET['id'];
  
  $models=$this->model('read');
  $values=$models->getsingle($val);
  $this->view('pages/first',$values);
  if(isset($_POST['save']))
  {
    $models=$this->model('read');
    $values=$models->update($val);
    $this->view('pages/first');
  }

}
public function insert1($val)
{
  $models=$this->model('read');
 $values= $models->update($val);
 header('location:http://localhost/mvc/pages/admintable');
 //$this->view('pages/action');

//  if($values)
//  {
//   echo "done";
//  }
//  else{
//   echo"not";
//  }

//  $model=$this->model('read');
//  $posts=$model->display();
//  $data=[
//    'posts'=>$posts
//  ];
//  $this->view('pages/action',$data);
  }
public function admintable()
{
  
  session_start();
  if(isset($_SESSION['ad']))
{
   $model=$this->model('read');
   $posts=$model->display();
  
   $data=[
     'posts'=>$posts
   ];
   $this->view('pages/action',$data);
}
  else{
//echo "invalid user name and password";
    header('location:http://localhost/mvc/');
  }
}
public function insertdata()
{ 
//die('dfdsfsd');
   $model1=$this->model('read');
 $posts=$model1->insert();
//  $data=[
//   'posts'=>$posts
// ];
// $this->view('pages/action',$data);

header('location:http://localhost/mvc/pages/table');

  
}
  public function table()
  { 
    // session_start();
    // if(isset($_SESSION['ad'])){
      if(isset($_SESSION['ad'])){

      // print_r($_SESSION['ad']);
      // exit;
    
      // if(isset($_POST)){
      // $_SESSION['name']='name';
      $model=$this->model('read');
      $posts=$model->display();
     
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/action',$data);
   }
  
     else{
      header('Location:http://localhost/mvc/index/admi');
   }
  }

  public function export()
  {
    
    $exp = $this->model('read');
    $result = $exp->export();
    $filename =  "mvc1.csv";
    $file = fopen('php://output', 'w');
    $head = array("id", "fname", "lname", "email", "phone", "street", "city", "state", "country", "Zip", "image");
    fputcsv($file, $head);
    foreach ($result as $row) {
      $lineData = array($row->Emp_id, $row->Emp_fname, $row->Emp_lname, $row->Emp_email, $row->Emp_phone, $row->Emp_street, $row->Emp_city, $row->Emp_state, $row->Emp_country, $row->Zip, $row->image);
      fputcsv($file, $lineData);
      header("Content-Description:File Transfer");
      header("content-Disposition: attachment;filename=\"$filename\"");
      header('Content-type:application/csv');
    }
    fclose(($file));
    exit;
  }

  }
 

  

  

 

    

  
  
  
    


  
