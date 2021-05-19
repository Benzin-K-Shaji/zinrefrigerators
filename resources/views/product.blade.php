<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body background="https://i.pinimg.com/originals/59/e7/58/59e758cd94b6a989aa2cc7b4eeb68098.jpg">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="https://images.squarespace-cdn.com/content/v1/554834bbe4b08ea580f5ce5d/1472174878951-3P9ZELBBRTOBQWYO6MDP/ke17ZwdGBToddI8pDm48kPV_8t8qYDH_v8mc-92omtJZw-zPPgdn4jUwVcJE1ZvWhcwhEtWJXoshNdA9f1qD7Xj1nVWs2aaTtWBneO2WM-sHxhTq-bNHvWHXpBeMx1mdq9a3VILVIsn_vpTFrxe7vw/Zin-Logo-7-9-13.jpg" height="45" alt="" >
          <a class="navbar-brand" href="/ah">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/ap">ADD PRODUCT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/userview">VIEW PRODUCT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/vieworders">VIEW ORDERS</a>
              </li>
             
             
            
            </ul>
            <form class="d-flex">
             
              <a href="/logout" class="btn btn-primary">Logout</a>
            </form>
          </div>
        </div>
      </nav>
      
      
<form action="/app" method="post" enctype="multipart/form-data">
@csrf
    <h2 style="font-family:verdana;color:rgb(251, 255, 251);"><center>PRODUCT</center></h2>
 <table class="table table-borderless" style="font-family:verdana;color:rgb(251, 255, 251);">
    <tr>
        <td>Product ID </td>
        <td><input type="text" name="pid"  class="form-control"value="{{old('pid')}}">
        <span class="text-danger">@error('pid'){{$message}} @enderror  </span></td>

    </tr>
    <tr>
        <td>Product Name</td>
        <td><input type="text" name="pname"  class="form-control"value="{{old('pname')}}">
        <span class="text-danger">@error('pname'){{$message}} @enderror  </span></td>

    </tr>
    <tr>
        <td>Product description</td>
        <td><input type="text" name="pdis"  class="form-control"value="{{old('pdis')}}">
        <span class="text-danger">@error('pdis'){{$message}} @enderror  </span></td>

    </tr>
     <tr>
         <td>Price</td>
         <td><input type="text" name="price" class="form-control"value="{{old('price')}}">
         <span class="text-danger">@error('price'){{$message}} @enderror  </span></td>

     </tr>
     <tr>
         <td>Brand</td>
         <td><input type="text" name="brand" class="form-control"value="{{old('brand')}}">
         <span class="text-danger">@error('brand'){{$message}} @enderror  </span></td>

    </tr>
    <tr>
    <td><center>Image :</center></td>
    <td><input type="file" name="pimage"class="form-control" required></td>
</tr>
     <tr>
         <td></td>
         <td><button type="submit" class="btn btn-success">Add</button></td>
     </tr>
 </table>  
 </form> 
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>