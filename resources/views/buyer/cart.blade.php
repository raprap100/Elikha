@extends('buyer.master')

@section('Header')
@include('buyer.nav')
@endsection

@section('Body')
<br><br><br>
<div class="row mt-4 " style="padding-left: 50px; padding-right:50px">
    <div class="col colitems justify-content-center align-items-center col-lg-8" style="padding-left: 50px">
        <div class="row">
            <div class="col-md-2">
                <div class="content text-md-left">
                    <h4 style="font-size: 40px; font-family:Helvetica Neue">Cart</h4>  
                </div>
            </div>
            <div class="col">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sort
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">For Sale</a></li>
                    <li><a class="dropdown-item" href="#">Auctioned</a></li>
                   
                  </ul>
            </div>
        </div>
        
        <!--
        <div class="card cardcart-checkbox text-align-center justify-content-center align-items-center">
          <div class="col card-text" >
                           
          </div>
       </div>-->

        <!-- ito yung cards na i loop-->
        <div class="card cardcart text-align-center  d-flex mt-4">
          <div class="row cart-card-row">
              <div class="col-md-1 d-flex justify-content-center" style="margin-left: 10px">           
                  <input class="form-check-input align-self-center" type="checkbox" value="" id="flexCheckDefault"> 
              </div>
              <div class="col-md-1 d-flex justify-content-center">
                  <img src="images/pic3.png" class="art-image-cart align-self-center" alt="...">
              </div>
              <div class="col-md-6 p-3" style="margin-left: 20px">
                  <h3 class="title-cart">Pop Art</h3>
                  <p class="username-cart">User Name <span class="dimension">dimension </span></p>
                  <p class="cart-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat totam illum distinctio recusandae praesentium reiciendis dicta? Quae qui atque, accusamus cumque ex delectus velit quam non praesentium, repellat cupiditate distinctio!</p>
              </div>
              <div class="col-md-3 p-3 text-center">
                <br>
                  <p>Price <span class="price ">P200.00</span></p>
                  
                  <button type="button" class="btn btn-danger">Delete</button>
              </div>
          </div>
        </div>
      
        <!-- card to para sa auction-->
        <div class="card cardcart text-align-center  d-flex mt-4">
          <div class="row cart-card-row">
              <div class="col-md-1 d-flex justify-content-center" style="margin-left: 10px">           
                  <input class="form-check-input align-self-center" type="checkbox" value="" id="flexCheckDefault"> 
              </div>
              <div class="col-md-1 d-flex justify-content-center">
                  <img src="images/pic3.png" class="art-image-cart align-self-center" alt="...">
              </div>
              <div class="col-md-6 p-3" style="margin-left: 20px">
                  <h3 class="title-cart">Pop Art</h3>
                  <p class="username-cart">User Name <span class="dimension">dimension </span></p>
                  <p class="cart-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat totam illum distinctio recusandae praesentium reiciendis dicta? Quae qui atque, accusamus cumque ex delectus velit quam non praesentium, repellat cupiditate distinctio!</p>
              </div>
              <div class="col-md-3 p-3 text-center">
                <p>Leading Bid P<span class="price1">300.00</span></p>
                <p>Your Bid P<span class="price">200.00</span></p>
                <button type="button" class="btn btn-primary" onclick="toggleBidInput()">Bid</button>
                <button type="button" class="btn btn-danger">Delete</button>
                <div id="bidInput"style="display: none;">
                    <input type="text" placeholder="Enter your bid" class="form-control">
                    <button type="button" class="btn btn-success">Submit Bid</button>
                </div>
            </div>
            
            <script>
                function toggleBidInput() {
                    var bidInput = document.getElementById("bidInput");
                    if (bidInput.style.display === "none" || bidInput.style.display === "") {
                        bidInput.style.display = "block";
                    } else {
                        bidInput.style.display = "none";
                    }
                }
            </script>
            
          </div>
        </div>


          <style>
            .dimension{
              font-size: 10px;
              color:darkgray;
            }
            .price1{
              color:red;
            }
            .price{
              color:dodgerblue;
            }
            .title-cart{
              margin-bottom:0%;
            }
            .username-cart{
              font-size: 15px;
              margin-bottom: 0%;
              color:dodgerblue;
            }
            .cart-text{
              font-size: 10px;
            }
            .cart-card-row{
              height: 150px;
              width: 800px;
            }
            .art-image-cart{
              max-width: 100px;
              max-height: 100px;     
              margin-top: 0px;
              margin-bottom: 10px;
              
            }
            .realismcard{
              background-image: url('images/realism.png');
              background-size: cover;
            }
            .cardcart{
              width: 800px; 
              height: 150px; 
              border-radius: 10px; 
              box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
              margin-block: 10px;
              margin-right: 10px;     
            }
            .cardcart-checkbox{
              width: 800px;
              height: 50px;
              border-radius: 10px; 
              box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
              margin-block: 10px;
              margin-right: 10px;  
            }
            
          </style>
    </div>

    <div class="col col-md-4 flex-grow-0">
      <div class="card cardcart-sum">
          <h4 class="mt-4 text-center">Order Details</h4><br>
          <p style="margin-left: 30px; margin-right: 30px;">Cart Total <span style="float: right;" class="price"><b>P2392.00</b></span></p>
          <button type="button" class="btn btn-primary" style="margin-left:30px; margin-right:30px">Proceed to Check out</button>
      </div>
  </div>
  <style>
      .cardcart-sum {
          width: 400px;
          height: 400px;
          border-radius: 10px;
          box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
          margin-block: 10px;
          margin-right: 10px;
      }
  </style>
  
</div>
@endsection
