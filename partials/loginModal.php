<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="/mess/public/images/login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
          <label class="login_label" for="uname"><b> <br/>Email</b></label>
          <input type="text" placeholder="Enter Email" class="email-text" name="uname" required>
      <br/>
          <label class="login_label" for="psw"><b><br/>Password</b></label>
          <input type="password" class="password-text" placeholder="Enter Password" name="psw" required>
      <br/>  
          <button type="submit">Login</button>
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
           <a class="forget_pass" href="#">Forgot password?</a>
      

      </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>