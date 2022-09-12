<link rel="stylesheet" href="<?php echo URLROOT ;?>/css/style2.css">
    <form action="<?php echo URLROOT . 'pages/insertdata'?> "method="post" enctype="multipart/form-data">
    <div class="z">
    <h3> Employee Details:</h3>
        <h4>Emp_id:<input type="text" name="id"></h4>
        <h4>Emp_fname:<input type="text" name="fname" required></h4>
        <h4>Emp_lname:<input type="text" name="lname" required></h4>
        <h4>Emp_email:<input type="email" name="email" required></h4>
        <h4>Emp_phone:<input type="number" name="phone" required></h4>
        <h4>Emp_street:<input type="text" name="street" required></h4>
        <h4>Emp_city:<input type="text" name="city" required></h4>
        <h4>Emp_country:<input type="text" name="country" required></h4>
        <h4>Zip: <input type="number" name="Zip" required></h4>

      <h4> image: <input type="file" accept="image/jpg, image/jpeg, image/png" name="photo"></h4>
        <button type="submit" name="save" class="btn">submit</button>
</div>

</form>


