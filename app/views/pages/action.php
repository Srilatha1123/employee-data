
<link rel="stylesheet" href="<?php echo URLROOT ;?>/css/style2.css">

<div class="c">
  <div class="d">
<form action="<?php echo URLROOT . 'pages/sea'?> "method="post"> 

<input type="search" placeholder="search" name="search">
<button>search</button>
</form>
</div>

<div>
<form action="<?php echo URLROOT . 'pages/logout'?>" method="post">
<button type="submit" name="save">logout</button>
</form>
</div>

<div class="e">
<form action="<?php echo URLROOT . 'pages/edit'?>" method="post">
<button type="submit" name="save" >Insert</button>
</form>
</div>

<div class="f">
<form action="<?php echo URLROOT . 'pages/display1'?>" method="post">
<button type="submit" name="save">view</button>
</form>
</div>

<div class="g">
<form action ="<?php echo URLROOT .'pages/display'?> "methods="post">

<table class="color" border= "1px" >
    <th>Emp_id</th>
    <th>Emp_fname</th>
    <th>Emp_lname</th>
    <th>Emp_email</th>
    <th>Emp_phone</th>
    <th>Emp_street</th>
    <th>Emp_city</th>
    <th>Emp_country</th>
    <th>Zip</th>
    <th>image </th><br>
 <th>Action</th>
    
    
<?php foreach($data['posts'] as $post):?>
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

     <td> <img src="<?= '../public/img/'.$post->image ?> "width="50px" height="50px"></td>

        <td>
        <button><a class="btn" href="http://localhost/mvc/pages/delete/<?php echo $post->Emp_id;?>">Delete</a></button>
<button><a class="btn" href="http://localhost/mvc/pages/update/?id=<?php echo $post->Emp_id;?>">Edit</a></button>
       
            
        </td>
</tr>
<?php endforeach ?>
</table>
</form>
</div>


</form>
<!-- <button onclick="exportReportToExcel(this)">EXPORT REPORT</button> -->
<button><a class="btn" href="http://localhost/mvc/pages/export/">Export</a></button>

</div>

    <!-- <script>
function exportReportToExcel() {
  let table = document.getElementsByTagName("table");
  TableToExcel.convert(table[0], { 
    name: `mvc1.xlsx`, 
    sheet: {
      name: 'Sheet 1' 
    }
  }); -->
 

<!-- </script>
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script> -->

