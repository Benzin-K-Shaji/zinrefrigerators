<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP</title>
</head>
<body background="https://images-na.ssl-images-amazon.com/images/I/014m2zoaPrL.png">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="https://images.squarespace-cdn.com/content/v1/554834bbe4b08ea580f5ce5d/1472174878951-3P9ZELBBRTOBQWYO6MDP/ke17ZwdGBToddI8pDm48kPV_8t8qYDH_v8mc-92omtJZw-zPPgdn4jUwVcJE1ZvWhcwhEtWJXoshNdA9f1qD7Xj1nVWs2aaTtWBneO2WM-sHxhTq-bNHvWHXpBeMx1mdq9a3VILVIsn_vpTFrxe7vw/Zin-Logo-7-9-13.jpg" height="45" alt="" >
          <a class="navbar-brand" href="/">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/cg">&#8471;POPULAR BRANDS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/cc">&#9742;CONTACT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/l">&#10148;LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/reg">&#8592;SIGN UP</a>
              </li>
            </ul>
            <form class="d-flex" method="post" action="/usearch">
      {{csrf_field() }}
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="pname">
              
              <button class="btn btn-outline-success" type="submit">Search</button> &nbsp;&nbsp;
            
            </form>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col"></div>
       <div class="col"> 
       <form action="/login" method="post">
{{ csrf_field() }}
    <h2 style="font-family:verdana;color:rgb(251, 255, 251);"><center>SIGN UP</center></h2>
    <table  class="table table-borderless">
    <tr>
        <td style="color:white">Name</td>
        <td><input type="text"  name="name" class="form-control"value="{{old('name')}}">
        <span class="text-danger">@error('name'){{$message}} @enderror  </span></td>
    </tr>
    <tr>
        <td style="color:white">Username</td>
        <td><input type="text" name="uname" class="form-control"value="{{old('uname')}}">
        <span class="text-danger">@error('uname'){{$message}} @enderror  </span></td>
    </tr>
     <tr>
         <td style="color:white">Email</td>
         <td><input type="text" name="email" class="form-control"value="{{old('email')}}">
         <span class="text-danger">@error('email'){{$message}} @enderror  </span></td>
     </tr>
     <tr>
         <td style="color:white">Phone NO</td>
         <td><input type="text"  name="mob" class="form-control"value="{{old('mob')}}">
         <span class="text-danger">@error('mob'){{$message}} @enderror  </span></td>
     </tr>
     <tr>
        <td style="color:white">Address</td>
        <td><input type="text" name="add" class="form-control"value="{{old('add')}}">
        <span class="text-danger">@error('add'){{$message}} @enderror  </span></td>
    </tr>
    <tr>
        <td style="color:white">Password</td>
        <td><input type="password" name="pass"  class="form-control"value="{{old('pass')}}">
        <span class="text-danger">@error('pass'){{$message}} @enderror  </span></td>
    </tr>
     <tr>
         <td style="color:white">Confirm Password</td>
         <td><input type="password" name="cpass" class="form-control"value="{{old('cpass')}}">
         <span class="text-danger">@error('cpass'){{$message}} @enderror  </span></td>
     </tr>
     <tr>
         <td></td>
         <td style="color:white"><button class="btn btn-success">Signup</button></td>
     </tr>
 </table> 
 </form>
</div><div class="col"></div>  
</div>
</div>



<div class="row">
  <table class="table table-borderless">
      
      </table>
 
<div class="col col-12 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-9">
<br>
<br>
<h6 style="font-family:verdana;color:rgb(251, 255, 251);">USEFUL LINKS</h6>
<table class="table table-borderless">
  <tr><td><a class="navbar-brand" href="/"style="font-family:verdana;color:rgb(251, 255, 251);">Home</a></td></tr>  
  <tr><td><a class="navbar-brand" href="/cc"style="font-family:verdana;color:rgb(251, 255, 251);">Contact us</a></td></tr>
  
  <tr><td><a class="navbar-brand" href="/cg"style="font-family:verdana;color:rgb(251, 255, 251);">Gallery</a></td></tr>
  <tr><td><a class="navbar-brand" href="/reg"style="font-family:verdana;color:rgb(251, 255, 251);">signup</a></td></tr>
 
</table>
  </div>
  <div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-3">
      <br>
      <br>
      <h6 style="font-family:verdana;color:rgb(240, 236, 236);">CONTACT</h6>
      <table class="table table-borderless">
          <tr><td><a class="navbar-brand" href="" style="font-family:verdana;color:rgb(251, 255, 251);">                                                
              
              ZIN SECONDS REFRIGERATORS<br>
              contact for further enquiries<br>
              <span>&#9742;</span>0460-2285433  <span>&#x1F4F2;</span>9656992960</li>

  
      </table>
     
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>