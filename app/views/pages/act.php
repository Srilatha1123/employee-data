<?php

if(!isset($_SESSION['ad']))
{
  header('localhost:http://localhost/mvc/pages');
  exit;
}

?>
<table border= "1px">
    <th>Emp_id</th>
    <th>Emp_fname</th>
    <th>Emp_lname</th>
    <th>Emp_email</th>
    <th>Emp_phone</th>
    <th>Emp_street</th>
    <th>Emp_city</th>
    <th>Emp_country</th>
    <th>Zip</th>
  <th>image </th>
    <th>Action</th>
 

    <?php foreach($data as $post):?>

    <tr>
        <td><?= $post->Emp_id  ?></td>
        <td><?= $post->Emp_fname  ?></td>
        <td><?=$post->Emp_lname  ?></td>
        <td><?=$post->Emp_email ?></td>
        <td><?=$post->Emp_phone ?></td>
        <td><?=$post->Emp_street  ?></td>
        <td><?=$post->Emp_city  ?></td>
        <td><?=$post->Emp_country ?></td>
        <td><?=$post->Zip ?></td>
        <td> <img src="<?= '../public/img/'.$post->image ?> "width="50px" height="50px"></td>

        <td>
        <a class="btn" href="http://localhost/mvc/pages/delete/<?php echo $post->Emp_id;?>">Delete</a>
        <a class="btn" href="http://localhost/mvc/pages/update/<?php echo $post->Emp_id;?>">Edit</a>
    </td>
    </tr>
<?php endforeach ?>
</table> 
