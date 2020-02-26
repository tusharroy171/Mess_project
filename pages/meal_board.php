<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

<?php include '../header.php'; ?>



<!--    <br/>
Month name: <input type="text" ><br>
 <br/> -->

<table class="table_row">
  <tr>
    <th>Name</th>
    <?php $month = 31; ?>
    <?php for($i=1;$i <= $month ; $i++){ ?>
       <th><?php echo $i; ?> </th>    
    <?php } ?>
     <th>Total</th>
    <th>Option</th>

  </tr>
  <tr>
    <td>Pias</td>

    <?php $month = 31; ?>
    <?php for($i=1;$i <= $month ; $i++) {?>
       <td><?php echo "1"; ?> </td>    
    <?php } ?>
   
    
     <td> </td>
    <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are yoy sure want to delete?");'>Delete</a>
    </td>
  </tr>
  <tr>
    <td>Borhan</td>
    <?php $month = 31; ?>
    <?php for($i=1;$i <= $month ; $i++){ ?>
       <td><?php echo "1"; ?> </td>    
    <?php } ?>
    <td> </td>
    <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are yoy sure want to delete?");'>Delete</a>
    </td>
  </tr>
  <tr>
    <td>Tushar</td>
    <?php $month = 31; ?>
    <?php for($i=1;$i <= $month ; $i++){ ?>
       <td><?php echo "1"; ?> </td>    
    <?php } ?>
    <td> </td>
    <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are yoy sure want to delete?");'>Delete</a>
    </td>
  </tr>
  <tr>
    <td>Robi</td>
    <?php $month = 31; ?>
    <?php for($i=1;$i <= $month ; $i++){ ?>
       <td><?php echo "1"; ?> </td>    
    <?php } ?>
    <td> </td>
    <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are yoy sure want to delete?");'>Delete</a>
    </td>
  </tr>

</table>
</body>
</html>