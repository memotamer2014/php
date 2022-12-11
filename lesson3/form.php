<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  </head>
<body>
    
<div class="container mt-5 pt-5 mb-5">
  <div class="row justify-content-center">
     <div class="col-md-6 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-body">
              <div class="text-center m-auto">
                 <h4 class="text-uppercase text-center">Login</h4>
              </div>
              <form action="verify.php" method="post">
                
                 <div class="form-group mb-3">
                    <label for="emailaddress">Email </label>
                    <input type="email" name="email" placeholder="Enter email" class="form-control" >
                 </div>
                 <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <div class="input-group bg-light" id="show_hide_password">
                       <input type="password" class="form-control" id="password" value="Passwords" name="password"  placeholder="Enter Password" required="">
                       <div class="input-group-addon">
                          <a href=""><i class="fa fa-lg fa-eye" style="padding-top: 10px; padding-left: 10px; padding-right: 10px;" aria-hidden="true"></i></a>
                       </div>
                    </div>
                 </div>
                 <div class="form-group mb-3">
                    <div class="custom-control custom-checkbox checkbox-success">
                       <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                       <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                    </div>
                 </div>
                 <div class="form-group mb-0 text-center">
                    <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                 </div>
                 <script>
                    $(document).ready(function() {
                        $("#show_hide_password a").on('click', function(event) {
                            event.preventDefault();
                            if($('#show_hide_password input').attr("type") == "text"){
                                $('#show_hide_password input').attr('type', 'password');
                                $('#show_hide_password i').addClass( "fa-eye-slash" );
                                $('#show_hide_password i').removeClass( "fa-eye" );
                            }else if($('#show_hide_password input').attr("type") == "password"){
                                $('#show_hide_password input').attr('type', 'text');
                                $('#show_hide_password i').removeClass( "fa-eye-slash" );
                                $('#show_hide_password i').addClass( "fa-eye" );
                            }
                        });
                    });
                 </script>
              </form>
           </div>
        </div>
     </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>