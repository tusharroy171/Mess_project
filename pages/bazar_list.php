<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<?php include '../header.php'; ?>

<br><br>

<div>
	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen">Tushar</button>
	  <button class="tablinks" onclick="openCity(event, 'tab2')">Pias</button>
	  <button class="tablinks" onclick="openCity(event, 'tab3')">Robi</button>
	   <button class="tablinks" onclick="openCity(event, 'tab4')">Borhan</button>
	</div>

	<div id="tab1" class="tabcontent">
		<div><p>Bazar Amount: 1500 BDT || Total Meal: 40</p> </div>

		<table class="table_row">
		  <tr>
		    <th>Name</th>
		    <th>Date</th>
		    <th>Amount</th>
		    <th>Shop</th>
		    <th>List Image</th>
		     <th width="15%">Option</th>
		  </tr>
		  <tr>
		    <td>Tushar Roy</td>
		    <td>1/2/2020</td>
		    <td>300</td>
		    <td>Swapna</td>
		     <td><img class="food_img" src="/mess/public/images/Receipt2.jpg"  ></td>
		     <td><a href="#" class="button_edit">Edit</a>
		      <a href="#" class="button_delete" onClick='return confirm("Are you sure want to delete?");'>Delete</a>
		    </td>
		  </tr>
		</table>
	</div>

	<div id="tab2" class="tabcontent">
	   <div><p>Bazar Amount: 1500 BDT || Total Meal: 40</p> </div>

	   <table class="table_row">
		  <tr>
		    <th>Name</th>
		    <th>Date</th>
		    <th>Amount</th>
		    <th>Shop</th>
		    <th>List Image</th>
		     <th width="15%">Option</th>
		  </tr>
		  <tr>
		     <td>Abdur Rob Pias</td>
		     <td>1/2/2020</td>
		     <td>300</td>
		     <td>Swapna</td>
		     <td><img class="food_img" src="/mess/public/images/Receipt2.jpg"  ></td>
		    <td><a href="#" class="button_edit">Edit</a>
		      <a href="#" class="button_delete" onClick='return confirm("Are you sure want to delete?");'>Delete</a>
		    </td>
		  </tr>
		 
		</table>
	</div>

	<div id="tab3" class="tabcontent">
	 <div><p>Bazar Amount: 1500 BDT || Total Meal: 40</p> </div>

	   <table class="table_row">
		  <tr>
		    <th>Name</th>
		    <th>Date</th>
		    <th>Amount</th>
		    <th>Shop</th>
		    <th>List Image</th>
		     <th width="15%">Option</th>
		  </tr>
		  <tr>
		     <td>Robi Ratno</td>
		     <td>10/2/2020</td>
		     <td>800</td>
		     <td>Swapna</td>
		    <td><img class="food_img" src="/mess/public/images/Receipt2.jpg"  ></td>
		    <td><a href="#" class="button_edit">Edit</a>
		      <a href="#" class="button_delete" onClick='return confirm("Are you sure want to delete?");'>Delete</a>
		    </td>
		  </tr>
		 
		</table>
	</div>
	<div id="tab4" class="tabcontent">
	 <div><p>Bazar Amount: 1500 BDT || Total Meal: 40</p> </div>

	   <table class="table_row">
		  <tr>
		    <th>Name</th>
		    <th>Date</th>
		    <th>Amount</th>
		    <th>Shop</th>
		    <th>List Image</th>
		     <th width="15%">Option</th>
		  </tr>
		  <tr>
		     <td>Borhan Uddin</td>
		     <td>1/12/2020</td>
		     <td>1300</td>
		     <td>Daily shopping</td>
		     <td><img class="food_img" src="/mess/public/images/Receipt2.jpg"  ></td>
		    <td><a href="#" class="button_edit">Edit</a>
		      <a href="#" class="button_delete" onClick='return confirm("Are you sure want to delete?");'>Delete</a>
		    </td>
		  </tr>
		 
		</table>
	</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html>
