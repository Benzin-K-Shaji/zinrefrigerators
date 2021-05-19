<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userview</title>
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
              <a class="nav-link" href="/vieworders">VIEW  ORDERS</a>

              </li>
             
             
            
            </ul>
            <form class="d-flex">
             
              <a href="/logout" class="btn btn-primary">Logout</a>
            </form>
          </div>
        </div>
      </nav>

<div class="container">
<div class="row">

 <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 ">
 <br><br>
 <table style="font-family:verdana;color:rgb(251, 255, 251);" class="table">
 <tr>
     <td>Product id</td>
     <td>Product name</td>
     <td> Product Description</td>
     <td>price</td>
     <td>Brand</td>
     <td>Image</td>
     <td>Action</td>

     
    


 </tr>

  @foreach($user as $userf)
 <tr>
     <td>{{$userf->pid}}</td>
     <td>{{$userf->pname}}</td>
     <td>{{$userf->pdis}}</td>
     <td>{{$userf->price}}</td>
     <td>{{$userf->brand}}</td>
     <td>{{$userf->pimage}}</td>
    <td> <a class="btn btn-warning" href="/edit/{{$userf->id}}">  Edit  </a></td>
    <td> <a class="btn btn-danger" href="/delete/{{$userf->id}}">  Delete  </a></td>



 </tr>
 
 @endforeach
 </table>
 </div>
 
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>