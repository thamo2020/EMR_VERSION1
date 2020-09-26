<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" >

</head>
<body>
    
    <section id="background"> 
        <div class="container-fluid bg" >
            <div class="row">
              
                <div class="col-md">
                  <!--form strated-->

                  <form action="{{route('signup.submit')}}" method="POST">
                  @csrf
                    <div class="form-group" >
                     

                        <h2>Sign Up</h2>
                      

                      <label for="name">Name </label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                      @error('name')
                      <p style="color:red">{{$message}}</p>
                      @enderror
                    </div>
                    
                    <div class="form-group">
                      <label for="email">E-mail</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                      @error('email')
                      <p style="color:red">{{$message}}</p>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="Password" class="form-control" name="password" id="password" placeholder="Password">
                      @error('password')
                      <p style="color:red">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="passwordcongif">Retype Password</label>
                      <input type="Password" class="form-control" name="passwordcongif" id="passwordcongif" placeholder="Retype your Password">
                      @error('passwordcongif')
                      <p style="color:red">{{$message}}</p>
                      @enderror
                    </div>
                  
                   <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                    <button type="Submit " class="button  btn btn-primary active btn-lg btn-block">Sign Up Me</button>
                  </form>
                </div>
                  <!--form end-->
                
                <div class="vl"></div>
                <!--div class="col-md-6 col-sm-4 col-xs-12 welcome"-->
                <div class="col-md container" >

                    <img src="images/5016684-medical-logo-png-97-images-in-collection-page-1-medical-logo-png-300_286_preview.png" alt="" class="logo-img">
                    <h1>Welcome to EMR</h1>
                    <p>Do you have a EMR account..??Just LogIn
                      <a href="#">LogIn</a>
                    </p>
                    
                </div>
    
            </div>




        </div>
         </section>


</body>
</html>