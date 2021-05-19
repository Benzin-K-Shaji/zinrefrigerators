<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
</head>
<body background="https://wallpapercave.com/wp/wp3264044.jpg">
<center style="font-family:verdana;color:rgb(251, 255, 251);">Welcome!!! {{session('uname')}}</center>

   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="https://images.squarespace-cdn.com/content/v1/554834bbe4b08ea580f5ce5d/1472174878951-3P9ZELBBRTOBQWYO6MDP/ke17ZwdGBToddI8pDm48kPV_8t8qYDH_v8mc-92omtJZw-zPPgdn4jUwVcJE1ZvWhcwhEtWJXoshNdA9f1qD7Xj1nVWs2aaTtWBneO2WM-sHxhTq-bNHvWHXpBeMx1mdq9a3VILVIsn_vpTFrxe7vw/Zin-Logo-7-9-13.jpg" height="45" alt="" >
            <a class="navbar-brand" href="/uh">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
              <li class="nav-item">
                <a class="nav-link active" href="/uc">&#9742;CONTACT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/pv">&#128065;VIEW PRODUCT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/cartlist">&#128722;CART</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/myorders">MY ORDER</a>
              </li>
             
             
            
            </ul>
            <form class="d-flex" method="post" action="/psearch">
      {{csrf_field() }}
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="pname">
              
              <button class="btn btn-outline-success" type="submit">Search</button> &nbsp;&nbsp;
              <a href="/logout" class="btn btn-primary">Logout</a>
            </form>
          </div>
        </div>
      </nav>
      
      <center> <h4 style="font-family:verdana;color:rgb(251, 255, 251);">My Cart&#128722;</h4></center>
 <br>
<div class="container">
<div class="row ">

@foreach($products as $item) 

<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br>
<img width="150" height="150" src="{{ URL ::asset('assets/project_img/'.$item->pimage) }}">
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<p class="card-text"><small class="text-muted"><h4 > </h4></small></p>
<br><br>
<p style="font-family:verdana;color:rgb(251, 255, 251);">{{$item->pid}} {{$item->pname}}</p> 
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br><br>
<p style="font-family:verdana;color:rgb(251, 255, 251);">₹ {{$item->price}}</p>
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br><br>
<a href="/removecart/{{$item->cart_id}}"class="btn btn-warning">Remove</a>
</div>
<br><br>

@endforeach
<br><br>
<!-- <center><button class="btn btn-primary">Order Now</button><center> -->
</div>

</div>
<br>
<center><a href="ordernow" class="btn btn-primary">Order Now<center>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>