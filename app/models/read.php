<?php
class read extends Database
{
    public function insert()

    {
        $postdata=$_POST;
       // $id=$_POST['id'];
        $fname=$_POST['fname']; 
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $street=$_POST['street'];
        $city=$_POST['city'];
        $country=$_POST['country'];
        $Zip=$_POST['Zip'];

        $file=basename($_FILES['photo']['name']);
      
        $target_dir = "../public/img/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    
        move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
        
        $this->query("insert into info1(Emp_fname,Emp_lname,Emp_email,Emp_phone,Emp_street,Emp_city,Emp_country,Zip,image) values('$fname','$lname','$email','$phone','$street','$city','$country','$Zip','$file')");
       $this->execute();
        
      
       
    }
    
    // public function readone()
    // {         $models=$this->model('read');
    //     $postdata=$_POST;
    //     $models->readone($postdata);
    //     $Emp_id=$postdata['Emp_id'];
    //     $Emp_fname=$postdata['Emp_fname']; 
    //     $Emp_lname=$postdata['Emp_lname'];
    //     $Emp_email=$postdata['Emp_email'];
    //     $Emp_phone=$postdata['Emp_phone'];
    //     $Emp_street=$postdata['Emp_street'];
    //     $Emp_state=$postdata['Emp_state'];
    //     $Emp_country=$postdata['Emp_country']; 
        
       

    //     $this->query("insert into data(Emp_id,Emp_fname,Emp_lname,Emp_email,Emp_phone,Emp_street,Emp_state,Emp_country),
    //     values('$Emp_id','$Emp_fname','$Emp_lname','$Emp_email','$Emp_phone','$Emp_street','$Emp_state','$Emp_country')");

    //     $this->execute();
    //     echo "done";

       
   // }
    public function display(){
        $this->query("select * from info1");
        return $this->resultSet();
       
        
    }

public function delete($Emp_id)
{
    try{
        $this->query("DELETE from info1 WHERE Emp_id='$Emp_id'");
        $data = $this->single();
        return $data;
    }

catch(Exception $e){
    return $e;
}


}
public function getsingle($Emp_id)
{$this->query("select * from info1 WHERE Emp_id='$Emp_id'");
    $data = $this->single();
    return $data;

}

public function searc(){
    $fname=$_POST['search'];
    $this->query("SELECT * FROM info1 WHERE Emp_fname='$fname' ");
    return $this->single();
}

public function update($val)
{
    $id=$_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $Zip= $_POST['Zip'];

    $file=basename($_FILES['photo']['name']);
      
    $target_dir = "../public/img/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
  
  $this->query("UPDATE info1 SET Emp_id='$id',Emp_fname='$fname',Emp_lname='$lname',Emp_email='$email',Emp_phone='$phone',Emp_street='$street',Emp_city='$city',Emp_country='$country',Zip='$Zip' ,image='$file' WHERE Emp_id='$val'");
  return $this->execute();


}
public function export(){
    $this->query("select * from info1");
    return $this->resultSet();
   }
}
?>