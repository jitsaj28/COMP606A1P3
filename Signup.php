<!DOCTYPE html>
<html>
<head>
    
  <link href="style.css" rel="stylesheet" type="text/css"> 
    
    </head>
    <body>
      <h1 style="border:2px solid black;background-image: linear-gradient(to right, rgba(31, 14, 214, 0.86), rgba(189, 187, 220, 0.86));">Signup Here</h1>
             
<div class="wrapper1" >
  <div class="container1">   
         <a href="" class="fb-login social-login">
     Signup Form 
    </a>
   
        
    <form class="form-inline form1" action="Signup_insert.php">
  <div class="group">
    <label for="email">Email-Id:</label>
    <input type="email" class="form-control" name="username" required>
  </div>
  <div class="group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pass1"  id = "pass1"  required >
  <div class="group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control"  id="pass2" name="pass2"  required  >
  </div>
  <div class="group">
    <label for="Name">Name:</label>
    <input type="text" class="form-control" name="name"  required  >
  </div>
 <div class="group">
    <label for="Payment">Payment:</label>
    <input type="text" class="form-control" name="payment"  required  >
  </div>
  <div class="group">
    <label for="DOB">DOB:</label>
    <input type="date" class="form-control" name="DOB"  required  >
  </div>
  <div class="group">
    <label for="Address">Address:</label>
    <input type="text" class="form-control" name="address"  required  >
  </div>
          
          
        <div>
  <button type="submit" class="btn btn-default" style="display:none;" id='Submit_btn'>Submit</button>
  <button class="btn btn-default signup" style="" onclick='verify();'>Submit</button>
  <button class="btn btn-default reset" style="" type="reset" >Cancel</button>
        </div>
        
             <a href="index.php" class="forget-link">Go to Login Page ?</a>
 
</form>
</div>
        
</div>    
        <script>
        function verify()
            {
              var password =   document.getElementById('pass1').value;
              var cpassword =   document.getElementById('pass2').value;
                if(password == cpassword)
                {
                document.getElementById('Submit_btn').click();
                }
                else
                {
                    alert('Password and confirm passwod not same');
                    document.getElementById('pass1').value ="";
                     document.getElementById('pass2').value= "";
                }
            }
        </script>
    </body>
</html>
