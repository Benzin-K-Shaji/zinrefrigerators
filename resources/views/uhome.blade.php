<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="https://images-na.ssl-images-amazon.com/images/I/014m2zoaPrL.png">
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
      @if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="400px" width="400px" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/LA/Naqia_DW/04._CB658126082_SY500_.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="400px" width="400px" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/LA/Reshma_LA/SUMMER_FEST-2021/Ref_AZ_FF-Freshness_1242x450._CB660347083_SY250_.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="400px" width="400px" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/LA/naireshm_LA/Summer-event-19-22-coop_1242x450_2._CB660156259_SY250_.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <p style="font-family:verdana;color:rgb(251, 255, 251);" >Planning on buying a new refrigerator for your daily needs? Choose from a wide selection of single-door, double-door, side-by-side, multi door, mini refrigerators, frost-free and direct-cool refrigerators from LG, Samsung, Haier, Whirlpool, Godrej, BPL, Mitashi, Hitachi, Bosch and other top brands at ZIN REFRIGERATORS</p>

     


      <div class="card mb-3">
        <img src="images/Screenshot 2021-04-29 001206.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Best sellers</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>


      <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col col-12 col-sm-3 col-md-3 col-lg-3  col-xl-3 col-xxl-3">

          <div class="card" style="width: 18rem;">
            <img src="https://images.samsung.com/is/image/samsung/in-french-door-rf50k5910sl-rf50k5910sl-tl-frontsilver-thumb-93943022?$160_160_PNG$" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">RF50K5910SL French Door with Triple Cooling, 594L</h5>
              <p class="card-text"> From ₹4707.34/mo for 24 mos at 12% Interest or ₹ 100000.00<br>
                MRP (Inclusive of all taxes) Original Price:₹ 125500.00Save ₹25500.00</p>
                <a href="/pv" class="btn btn-primary">view more</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3  col-xl-3 col-xxl-3">

          <div class="card" style="width: 18rem;">
            <img src="https://images.samsung.com/is/image/samsung/in-rf9500kf-akg-rf28n9780sg-tl-lperspectiveblack-thumb-107074179?$160_160_PNG$" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">RF28N9780SG French Door with Family Hub 810L</h5>
              <p class="card-text">From ₹13853.72/mo for 24 mos at 12% Interest or ₹ 294300.00
               <br> MRP (Inclusive of all taxes) Original Price:₹ 350000.00Save ₹55700.00
                </p>
              <a href="/pv" class="btn btn-primary">view more</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3  col-xl-3 col-xxl-3">

          <div class="card" style="width: 18rem;">
            <img src="https://images.samsung.com/is/image/samsung/in-french-door-rf60j9090sl-rf60j9090sl-tl-002-front-open-silver-thumb?$160_160_PNG$" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">RF60J9090SL French Door  693L</h5>
              <p class="card-text">From ₹6147.79/mo for 24 mos at 12% Interest or ₹ 130600.00
               <br> MRP (Inclusive of all taxes) Original Price:₹ 165000.00Save ₹34400.00</p>
              <a href="/pv" class="btn btn-primary">view more</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3  col-xl-3 col-xxl-3">

          <div class="card" style="width: 18rem;">
            <img src="https://images.samsung.com/is/image/samsung/in-side-by-side-rs74r5101sl-rs74r5101sl-tl-frontsilver-thumb-155205069?$160_160_PNG$" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">RS74R5101SL Side by Side with SpaceMax™ </h5>
              <p class="card-text">From ₹4608.49/mo for 24 mos at 12% Interest or ₹ 97900.00 <br>
                MRP (Inclusive of all taxes) Original Price:₹ 119990.00Save ₹22090.00</p>
              <a href="/pv" class="btn btn-primary">view more</a>
            </div>
          </div>
        </div>
        </div>
        <br>
        <div class="row row-cols-1 row-cols-md-3 lg-4">

        <div class="col col-12 col-sm-3 col-md-3 col-lg-3  col-xl-3 col-xxl-3">

          <div class="card" style="width: 18rem;">
            <img src="https://images.samsung.com/is/image/samsung/p6pim/in/rs72a5fc1b4-tl/gallery/in-family-hub%E2%84%A2-rs72a5fc1b4-tl-thumb-408983753?$160_160_PNG$" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">673L Curd Maestro™ Family Hub™ Side By Side Refrigerator RS72A5FC1B4</h5>
              <p class="card-text">From ₹9023.98/mo for 24 mos at 12% Interest or ₹ 191700.00 <br>
                MRP (Inclusive of all taxes) Original Price:₹ 229990.00Save ₹38290.00</p>
                <a href="/pv" class="btn btn-primary">view more</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">

          <div class="card" style="width: 18rem;">
            <img src="https://images.samsung.com/is/image/samsung/p6pim/in/rr23a2k3ybx-hl/gallery/in-curd-maestro-rr23a2k3ybx-hl-thumb-383466687?$160_160_PNG$" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">220L Curd Maestro™ One Door RR23A2K3YBX</h5>
              <p class="card-text">From ₹974.42/mo for 24 mos at 12% Interest or ₹ 20700.00 <br>
                MRP (Inclusive of all taxes) Original Price:₹ 23990.00Save ₹3290.00</p>
                <a href="/pv" class="btn btn-primary">view more</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
        <div class="card" style="width: 18rem;">
            <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRR0lrqAgl5613f5KQjUFzr3GCq2Xp8psG2VvILY2i4P4lfqHeniUA6qEtbnjzIVfJjfsw4s4fY8w&usqp=CAc" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kelvinator 584 litres Side By Side Refrigerator</h5>
              <p class="card-text">From ₹974.42/mo for 24 mos at 12% Interest or ₹ 20700.00 <br>
                MRP (Inclusive of all taxes) Original Price:₹ 24990.00Save ₹3290.00</p>
              <a href="/pv" class="btn btn-primary">view more</a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3  col-xl-3 col-xxl-3">
        <div class="card" style="width: 18rem;">
        <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRR0lrqAgl5613f5KQjUFzr3GCq2Xp8psG2VvILY2i4P4lfqHeniUA6qEtbnjzIVfJjfsw4s4fY8w&usqp=CAc" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kelvinator 533 L Smart Wifi Enabled Frost Free Multi-Door Refrigerator </h5>
              <p class="card-text">From ₹29000<br>
                MRP (Inclusive of all taxes) Original Price:₹ 32290.00Save ₹3290.00</p>
              <a href="/pv" class="btn btn-primary">view more</a>
            </div>
          </div>
        </div>
      </div>
      <br>
   


   
      <div class="card mb-3">
        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/LA/Reshma_LA/SUMMER_FEST-2021/stripes_1500x120_1.jpg" class="card-img-top" alt="...">
      </div>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/LA/Reshma_LA/SUMMER_FEST-2021/Shop-by-price_440x460_1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Godrej ViroShield 4.0-30L UV-C Disinfecting Device | SD VIROSHIELD 30UV 4BRMO WT M
                3.5 out of 5 stars
                ₹8,990 </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/LA/Reshma_LA/SUMMER_FEST-2021/SBP02.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Samsung 192 L 2 Star Direct Cool Single Door Refrigerator (RR19A241BGS/NL, Gray Silver)
                4.3 out of 5 stars
                ₹12,290 </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/LA/Reshma_LA/SUMMER_FEST-2021/SBP03.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Whirlpool 265 L 3 Star Inverter Frost-Free Double Door Refrigerator 
                4.2 out of 5 stars 1,
                ₹26,490</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card text-center">
        <div class="card-header">
        </div>
        <div class="card-body">
          <a href="/ug" class="btn btn-primary">View More</a>
        </div>
        
      </div>

<br>

<div class="card mb-3">
  <img src="images/Screenshot 2021-04-29 004121.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  </div>
</div>
   <div class="card mb-3">
      <img src="images/Screenshot 2021-04-29 004154.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      </div>
    </div>




<br>
      <div class="card text-center">
        <div class="card-header">
          
        </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
          <a href="/uh" class="btn btn-primary">Back To Top</a>
        </div>
        <div class="card-footer text-muted">
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
        <tr><td><a class="navbar-brand" href="/uh">Home</a></td></tr>  
        <tr><td><a class="navbar-brand" href="/uc">Contact us</a></td></tr>
        
        <tr><td><a class="navbar-brand" href="/ug">Explore</a></td></tr>
        <tr><td><a class="navbar-brand" href="/myorders">Booking</a></td></tr>
       
      </table>
        </div>
        <div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-3">
            <br>
            <br>
            <h6 style="font-family:verdana;color:rgb(251, 255, 251);">CONTACT</h6>
            <table class="table table-borderless">
                <tr><td><a style="font-family:verdana;color:rgb(251, 255, 251);" class="navbar-brand" href="" style="font-family:verdana;color:rgb(12, 11, 11);">                                                
                    
                    ZIN SECONDS REFRIGERATORS<br>
                    contact for further enquiries<br>
                    9656992958
        
            </table>
           
        </div>
      </div>  
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>