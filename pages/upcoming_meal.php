<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<?php include '../header.php'; ?>
<table class="table_row">

  <tr>
    <th width="15%">Day</th>
    <th>Lunch</th>
    <th>Dinner</th>
     <th width="15%">Option</th>
  </tr>
  <tr>
    <td>Sunday</td>
    <td><img src="/mess/public/images/egg.png" class="food_img" ></td>
    <td><img src="/mess/public/images/veg.jpg"class="food_img"></td>
    <td><a href="#" class="button_edit">Edit</a>
        <a href="#" class="button_delete" onClick='return confirm("Are yoy sure want to delete?");'>Delete</a>
    </td>
  </tr>
  <tr>
     <td>Monday</td>
    <td><img src="/mess/public/images/chicken.png" class="food_img"></td>
    <td><img src="/mess/public/images/chicken.png" class="food_img"></td>
    <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are yoy sure want to delete?");'>Delete</a>
    </td>
  </tr>
  <tr>
     <td>Tuesday</td>
    <td><img src="/mess/public/images/veg.jpg" class="food_img"></td>
    <td><img src="/mess/public/images/egg.png" class="food_img"></td>
   <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are yoy sure want to delete?");'>Delete</a>
    </td>
  </tr>
  <tr>
      <td>Wednesday</td>
    <td><img src="/mess/public/images/fish.jpg"class="food_img"></td>
    <td><img src="/mess/public/images/veg.jpg" class="food_img"></td>
   <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are yoy sure want to delete?");'>Delete</a>
    </td>
  </tr>
   <tr>
      <td>Thursday</td>
    <td><img src="/mess/public/images/egg.png" class="food_img"></td>
    <td><img src="/mess/public/images/fish.jpg"class="food_img" ></td>
   <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are yoy sure want to delete?");'>Delete</a>
    </td>
  </tr>
  <tr>
      <td>Friday</td>
    <td><img src="/mess/public/images/chicken.png" class="food_img" ></td>
    <td><img src="/mess/public/images/chicken.png" class="food_img" ></td>
   <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are yoy sure want to delete?");'>Delete</a>
    </td>
  </tr>
   <tr>
      <td>Saturday</td>
    <td><img src="/mess/public/images/veg.jpg" class="food_img"></td>
    <td><img src="/mess/public/images/fish.jpg"class="food_img"></td>
    <td><a href="#" class="button_edit">Edit</a>
      <a href="#" class="button_delete" onClick='return confirm("Are yoy sure want to delete?");'>Delete</a>
    </td>
  </tr>

</table>

</body>
</html>