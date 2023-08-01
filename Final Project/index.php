
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/png" href="images/favicon.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Admin Login | Coding Cush</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#" style="font-size:30px;"><strong>Course Management System</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        
      </li>
      
        </a>
        <div>
        </div>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
  <div>
    <form class="form-inline my-2 my-lg-0">
      <a href="regdes.php"class="btn btn-success my-2 my-sm-0" type="submit">Create Account</a>
    </form>
  </div>
</nav>

    <div class="container my-4">

    <div class="card mx-auto" style="width: 20rem;"><br>
  <img class="card-img-top mx-auto" src="https://icon-library.com/images/admin-login-icon/admin-login-icon-15.jpg" style="width: 60%; " alt="Card image cap">
  <div class="card-body">

       


            <form class="loginpage" action="login.php" method="post">
                       <br> 
                       <label class="h3" for="email">EMAIL :</label>
                        <input type="email" name="email" id="email" placeholder="ENTER YOUR EMAIL ADDRESS">
                        
                        <br>
                        <br>
                        
                        <label class="h3" for="password">PASSWORD :</label>

                        <input type="password" name="password" id="password" placeholder="ENTER YOUR PASSWORD">
                     <br>
                     <br>
                    <div class="logcondition">
                        
                        
            
 <button type="submit" class="btn btn-warning"><i class="fa fa-lock">&nbsp;</i> Login</button> &nbsp; &nbsp; 
 
        
         
        </form>
  </div>
  <div> </div>
</div>
    </div>

    <!--footer section-->
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>









    
                
                   
                     <br>
                     <br>
                    </div>
                    <br>
                    <br>
                       
                    </form>

                </div>

            </div>
        </div>

    </section>
   
 <script>
        const validation=getElementbyid("h3");
        if(validation == "")
        {
            console.log("error");
        }    
        else {
           console.log("ok")
        
        }
</script>

</body>
</html>