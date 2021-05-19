<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ordernow</title>
</head>



<body background="https://i.pinimg.com/originals/b9/c3/a4/b9c3a43aee11519094c9a39bc6e2f0f3.jpg">
<center >Welcome!!! {{session('uname')}}</center>

   
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
      
<div class="container">
<div class="row">
<div class="col"></div>
<div class="col"><table class="table table-striped">
    
    <tbody >
      <tr>
        <td >Amount</td>
        <td >{{$total}}</td>
      </tr>
      <tr>
        <td >GST</td>
        <td >300</td>
      </tr>
      <tr>
        <td >Delivery Charge</td>
        <td >50</td>
      </tr>
      <tr>
        <td >Total Amount</td>
        <td >{{$total+350}}</td>
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="post">
      {{csrf_field()}}
  <div class="form-group">
    <textarea  name="address" class="form-control" placeholder="Enter your address and mobile number"></textarea>
  </div>
  <div class="form-group">
    <label  for="pwd" >Payment Method</label><br><br>
    <input type="radio" value="card" name="payment"><span>Debit/Credit card</span><br><br>
  
    <input type="radio" value="cod" name="payment" ><span> Cash On delivery</span><br><br>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
  </div></div>
<div class="col"></div></div></div>

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>