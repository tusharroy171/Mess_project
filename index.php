<!DOCTYPE html>
<html>
<head>
	<title>Mes</title>
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="public/css/home.css">
</head>
<body>

<?php include 'header.php'; ?>
<br/>

<div class="row">
  <div class="column">
    <div class="card">
      <img class="img_pic"  src="/mess/public/images/login.png" alt="Jane" style="width:100%">
      <div class="container">
        <h3>Tushar Roy</h3>
        <p>Meal Count:35</p>
        <p>Bazar Cost:1600 BDT</p>
        <small><a href="#">tusharroy796@gmail.com</a></small>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img class="img_pic" src="/mess/public/images/login.png" alt="Mike" style="width:100%">
      <div class="container">
        <h3>Robi Ratna</h3>
       <p>Meal Count:32</p>
        <p>Bazar Cost:1700 BDT</p>
        <small><a href = "#">robi.r.mazumder@gmail.com</a></small>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img class="img_pic"  src="/mess/public/images/login.png" alt="John" style="width:100%">
      <div class="container">
        <h3>Abdur Rob Pias</h3>
        <p>Meal Count:35</p>
        <p>Bazar Cost:1400 BDT</p>
         <small><a href = "#">piashabdurrob@gmail.com</a></small>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img class="img_pic"  src="/mess/public/images/login.png" alt="John" style="width:100%">
      <div class="container">
        <h3>Borhan Uddin</h3>
        <p>Meal Count:45</p>
        <p>Bazar Cost:1900 BDT</p>
         <small><a href = "#">borhanhridoy625@gmail.com</a></small>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column_accordion">
    <button class="accordion">News 1 <b>|| &nbsp; 2.2.2020</b></button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">News 2 <b>|| &nbsp; 2.2.2020</b> </button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">News 3 <b>|| &nbsp; 2.2.2020</b> </button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          } 
        });
      }
    </script>
  </div>
</div>





</body>
</html>