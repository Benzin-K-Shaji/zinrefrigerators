<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userview</title>
</head>

<body background=https://wallpaperaccess.com/full/512705.jpg>

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
                <a class="nav-link " href="/userview">VIEW PRODUCT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/vieworders">VIEW ORDER</a>
              </li>
             
             
            
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button> &nbsp;&nbsp;
              <a href="/logout" class="btn btn-primary">Logout</a>
            </form>
          </div>
        </div>
      </nav>
      
<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

<form action="/ordereditprocess/{{$prod->id}}" method="post" >
{{csrf_field()}}<table class="table table-borderless  table-secondary">
<br><br><br>
<tr>
    <td></td><td></td>
</tr>

<tr>
    <td>Order Id</td>
    <td>{{$prod->id}}</td>

</tr>


<tr>
    <td>product Id</td>
    <td>{{$prod->pid}}</td>
</tr>


<tr>
    <td>User Name</td>
    <td>{{$prod->userid}}</td>
</tr>


<tr>
    <td>Address</td>
    <td>{{$prod->address}}</td>
</tr>




<tr>
    <td>Payment Method</td>
    <td>{{$prod->paymentmethod}}</td>
</tr>
<tr>
    <td>Update Customer Status</td>
    <td><select class="form-select" aria-label="Default select example" name="status">
          <option selected value="pending">pending</option>
            <option value="Your Order has been placed">Your Order has been placed</option>
              <option value="Your item has been delivered">Your item has been delivered</option>
              <option value="Order Cancelled">Order Cancelled</option>
       </select></td>



</tr>

<tr>

    <td><td>  <button class="btn btn-secondary"> Update Data </button> &nbsp; &nbsp;<a href="/vieworders" class="btn btn-outline">&#x1F519;</a></td></td>

</tr>
</table>
</form>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>