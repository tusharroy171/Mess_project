<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
  <?php include '../header.php'; ?>
  
  <div class="wrapper">
    <h3>Bazar List</h3>
    <form action="" method="">
       <select class="form-control column1">
        <option value="" selected disabled>Select Name</option>
        <option value="1">Tushar</option>
        <option value="2">Robi</option>
        <option value="3">Pias</option>
        <option value="4">Borhan</option>
      </select>
      <input type="date" class="form-control column1" value="<?php echo date('Y-m-d'); ?>">
        <input type="number" class="form-control column1" placeholder="Bazar Amoun...">
        <input type="text" class="form-control column1" placeholder="Shop..">
        <input type="file" class="form-control column1" >
        <button type="submit" class="admin_button">ADD</button>
    </form>
  </div>
 
  <div class="wrapper">
    <h3>Meal List</h3>
    <form action="" method="">
       <select class="form-control column2">
        <option value="" selected disabled>Select Name</option>
        <option value="1">Tushar</option>
        <option value="2">Robi</option>
        <option value="3">Pias</option>
        <option value="4">Borhan</option>
      </select>
      <input type="number" class="form-control column2" placeholder="Meal Number...">
    <input type="date" class="form-control column2" value="<?php echo date('Y-m-d'); ?>">

        <button type="submit" class="admin_button">ADD</button>
    </form>
  </div>
</body>
</html>