<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT ;?>/css/emp.css">



  <h1><?php echo $data['title']; ?></h1>
  <div class="b">
 <h2>Employee Managment</h2>
  <h4>user</h4>
  <form action="<?php echo URLROOT .'pages/admi'?>" method="post">
  <button type ="submit" name="save" class="btn">Admin</button>
</form><br>

<form action="<?php echo URLROOT .'/pages/display1'?>" method="post">
  <button type ="submit" name="save" class="btn1">Guest</button>
</form>

</div>

<!--<p>This is the TraversyMVC PHP framework. Please refer to the docs on how to use it</p> -->
<?php require APPROOT . '/views/inc/footer.php'; ?>
