<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<?php include '../header.php'; ?>
<table class="table_row">
  <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Room</th>
     <th width="15%">Option</th>
  </tr>
  <tr>
    <td>Tushar Roy</td>
    <td>Masterpara</td>
    <td>01623981875</td>
    <td>tusharroy796@gmail.com</td>
     <td>Middle room</td>
   <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are you sure want to delete?");'>Delete</a>
    </td>
  </tr>
  <tr>
     <td>Robi Ratna</td>
    <td>Sultan Colony</td>
    <td>01758112484</td>
    <td>robi.r.mazumder@gmail.com</td>
     <td>West corner room</td>
    <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are you sure want to delete?");'>Delete</a>
    </td>
  </tr>
  <tr>
    <td>Borhan Uddin</td>
    <td>Jomiderhat</td>
    <td>01853663930</td>
    <td>borhanhridoy625@gmail.com</td>
     <td>East Corner room</td>
     <td><a href="#" class="button_edit">Edit</a>
     <a href="#" class="button_delete" onClick='return confirm("Are you sure want to delete?");'>Delete</a>
    </td>
  </tr>
  <tr>
     <td>Abdur Rob Pias</td>
    <td>Sonapur</td>
    <td>01707341213</td>
    <td>piashabdurrob@gmail.com</td>
     <td>East Corner room</td>
    <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are you sure want to delete?");'>Delete</a>
    </td>
  </tr>
 
</table>


</body>
</html>