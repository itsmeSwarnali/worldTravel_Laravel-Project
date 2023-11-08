<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    
    <!---Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap" rel="stylesheet">

    <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/518c1cc943.js" crossorigin="anonymous"></script>

    <!--icon-->
    <link rel="stylesheet" href="frontAssets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="frontAssets/icons/flaticon.css">


    <style type="text/css">

      body{
        background: url('frontAssets/img/Travel.jpg') no-repeat;
        margin:0;
        padding:0;
        font-family:sans-serif;
        height: 100vh;
        background-size: 100% 100%;	
      }
      form{
         background: linear-gradient(150deg, #F2FBFE, #b6e5f8);
         margin-top: 250px !important;
      }
      .text-box .input{
        border: none !important;
        outline: none!important;
        background: transparent!important;
        font-size: 18px!important;
        width: 380px!important;
        margin-top: 18px;
	  	}
      input{
        background:none!important;
        border: none !important;
      }
      .text-box{
        border-bottom:1px solid #4caf50;
      }

      
      input ::placeholder{
        opacity: .4;
      }

      .icon{
          margin-top: 24px;
          margin-left: -22px;
      }
      .btn{
        margin-bottom: 15px;
        
      }
      .mb-3.text-box.checkbox {
          border: none;
          margin-top:35px!important;
      }

      @media screen and (max-width: 991.98px) and (min-width: 768px){
      }

      @media  (min-width: 1024px) and (max-width: 1300px){
      }

      @media  (min-width: 1366px) and (max-width: 1500px) {
         form{
            margin-top: 200px !important;
         }
      }

    </style>

    <!---bootstrap-->
	<link rel="stylesheet" type="text/css" href="frontAssets/css/bootstrap.min.css">


</head>
<body>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                <form class="px-3 py-3 " role = "form" action="{{route('logCheck')}}" method="post" id="quickForm" encrypt="multipart/form-data">
                @csrf
                        <h2 class="text-center pt-4">Log In</h2>

                        <div class="mb-3 mt-3 text-box d-flex">
                          <div class="input">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"  name="email" aria-describedby="emailHelp" required>
                          </div> 
                          <div class="icon">
                            <i class="fas fa-envelope"></i>
                          </div>
                          
                        </div>

                        <div class="mb-3 text-box d-flex">
                          <div class="input">
                            <input type="password" class="form-control" id="password" placeholder="Password"  name="password" required>
                          </div>
                          <div class="icon">
                            <i class="fas fa-lock"></i>
                          </div>
                          
                        </div>  

                        <div class="d-flex flex-row-reverse">
                          <button type="submit" class="mt-3 me-3 btn btn-primary">Log In</button> <br>
                        </div>

                        <div class="ps-2 pt-3">
                          <p class="mb-0">
                            <a href="{{route('signup')}}" class="text-center">Register a new membership</a>
                          </p>
                        </div>

                    </form>
                </div>
                <div class="col"></div>
            </div><!--row-->
            





        </div><!--container-->
    </div><!--form class-->

    <script src="frontAssets/js/bootstrap.min.js"></script>
	  <script src="frontAssets/js/popper.min.js"></script>


</body>
</html>