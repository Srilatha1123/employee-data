
<link rel="stylesheet" href="<?php echo URLROOT ;?>/css/style2.css">
<div class="x">
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
 

    <?php foreach($data['post'] as $post):?>
    <tr>
        <td><?=$post->Emp_id  ?></td>
        <td><?=$post->Emp_fname  ?></td>
        <td><?=$post->Emp_lname  ?></td>
        <td><?=$post->Emp_email ?></td>
        <td><?=$post->Emp_phone ?></td>
        <td><?=$post->Emp_street  ?></td>
        <td><?=$post->Emp_city  ?></td>
        <td><?=$post->Emp_country ?></td>
        <td><?=$post->Zip ?></td>
        <td> <img src="<?= '../public/img/'.$post->image ?> "width="40px" height="40px"></td>
    </tr>
<?php endforeach ?>
    </div>
</table>
