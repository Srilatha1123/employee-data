
<link rel="stylesheet" href="<?php echo URLROOT ;?>/css/style2.css">
<div class="y">
<form action="<?php echo URLROOT . 'pages/insert1/'.$data-> Emp_id;?>" method="post" enctype="multipart/form-data">
    
    <h3>Update Employee Details:</h3>
        <h4>Emp_id:<input type="text" name="id" value="<?=$data-> Emp_id?>"></h4>
        <h4>Emp_fname:<input type="text" value='<?=$data-> Emp_fname?>' name="fname" required></h4>
        <h4>Emp_lname:<input type="text" value="<?=$data-> Emp_lname?>" name="lname" required></h4>
        <h4>Emp_email:<input type="email"value="<?=$data-> Emp_email?>" name="email" required></h4>
        <h4>Emp_phone:<input type="number" value="<?=$data-> Emp_phone?>" name="phone"></h4>
        <h4>Emp_street:<input type="text" value="<?=$data-> Emp_street?>" name="street" required></h4>
        <h4>Emp_city:<input type="text" value="<?=$data-> Emp_city?>" name="city" required></h4>
        <h4>Emp_country:<input type="text" value="<?=$data-> Emp_country?>" name="country" required></h4>
        <h4>Zip: <input type="number"value="<?=$data-> Zip?>" name="Zip" required></h4>
      <h4> image: <input type="file" accept="image/jpg, image/jpeg, image/png" name="photo"></h4>
        <button type="submit" name="save" class="btn"> submit</button>

</form>

</div> 
