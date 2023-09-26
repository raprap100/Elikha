@extends('buyer.master')

@section('Body')
@include('buyer.Nav')

<div class="container shop-container ">
  <div class="row row0 d-flex justify-content-center align-items-center">
    <div class="row row-container1 shadow-1-strong d-flex rounded mb-4 justify-content-center align-items-center ">
      <div class="col justify-content-center align-items-center ">
        <div class="content text-md-left">
          <h5 style="font-size: 40px; font-family: 'Arial', sans-serif;">Get the Latest Art Trends</h5> <br>
          <button type="button" class="btn btn-outline-success" href="#shop-section">SHop Now!</button>          
        </div>
                
      <style>
        .row0{
          padding-top: 75px;
        }
        .row-container1{
          background: linear-gradient(to right, #9ea2a1, #efece6, #c8cccb, #8d8a8a, #3e4040);
          width: 1300px; 
          height: 300px;
          
        }
        .item1{
          width:80rem ;
          height: 20rem; 
        }
    

      </style>
      </div>
      <!-- Content for the carousel goes here -->
      <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/carousel1.png" class="carousel-image" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/carousel2.png" class="carousel-image" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/pic3.png" class="carousel-image " alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div >

    <div class="row mt-2 row-container2 shadow-1-strong d-flex rounded mb-4 justify-content-center align-items-center ">
      <div class="col-md-4 fixed-column">
        <!-- Content for the fixed left column/ categories goes here -->
        <div class="row">
            <div class="card card1 homecard text-align-center justify-content-center align-items-center">
              <div class="card-text  " >
                <h3>Home</h3>               
              </div>          
            </div>

            <div class="card card1 popcard text-align-center justify-content-center align-items-center">
              <div class="card-text" >
                <h3>Pop Art</h3>                
              </div>
            </div>

            <div class="card card1 realismcard text-align-center justify-content-center align-items-center">
              <div class="card-text " >
                <h3>Realism</h3>
              </div>
            </div>

            <div class="card card1 portraitcard text-align-center justify-content-center align-items-center">
              <div class="card-text " >
                <h3>Portrait</h3>
              </div>
            </div>
            <div class="card card1 abstractcard text-align-center justify-content-center align-items-center">
              <div class="card-text " >
                <h3>Abstract</h3>
              </div>
            </div>
            <div class="card card1 expresscard text-align-center justify-content-center align-items-center">
              <div class="card-text " >
                <h5>Expressionism</h5>
              </div>
            </div>
            <div class="card card1 landscapecard text-align-center justify-content-center align-items-center">
              <div class="card-text " >
                <h5>Landscape</h5>
              </div>
            </div>
            <div class="card card1 impresscard text-align-center justify-content-center align-items-center">
              <div class="card-text " >
                <h5>Impressionism</h5>
              </div>
            </div>
            

           
         </div>
        
        <style>
            .carousel-image{
              width: 800px;
              height: 250px;
              object-fit: cover;
            }
            .homecard{
              margin-right: 40px;
            }
          
            .popcard{
              background-image: url('images/popart.png');
              background-size: cover;
              margin-right: 20px;
              
            }

            .realismcard{
              background-image: url('images/realism.png');
              background-size: cover;
            }

            .portraitcard{
              background-image: url('images/portrait.png');
              background-size: cover;
            }

            .abstractcard{
              background-image: url('images/abstract.png');
              background-size: cover;
            }

            .expresscard{
              background-image: url('images/expression.png');
              background-size: cover;
            }
            
            .landscapecard{
              background-image: url('images/landscape.png');
              background-size: cover;
            }
            
            .impresscard{
              background-image: url('images/impression.png');
              background-size: cover;
            }

            .btn:hover {
              background-color: #007bff; 
              color: #fff; 
            }

            .card1{
                    width: 150px; 
                    height: 150px; 
                    border-radius: 10px; 
                    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                    margin-block: 10px;
                    margin-right: 10px;

            }
        </style>

    </div>
    <div class="col">
      <h2>Home</h2>
        <div class="row d-flex">
          <div class="col">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sort
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">For Sale</a></li>
              <li><a class="dropdown-item" href="#">Auctioned</a></li>
             
            </ul>
          </div>
          <div class="col">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Prize Range
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Price : Low to High</a></li>
              <li><a class="dropdown-item" href="#">Price : High to Low</a></li>
              
            </ul>
          </div>
          <div class="col">
            
          </div>
          <div class="col">
            
          </div>
        </div>

    <div class="row-md-8 scrollable-row" style="padding-left: 20px">
        <!-- Content for the scrollable right column/ arts goes here -->
        

        <div class="row mt-4">
          
          <div class="card  " style="width: 16rem; margin-block: 10px;
          margin-right: 20px;">
            <img src="images/pic2.png" class="card-img-top art-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title </h5>
              <h6 class="price">$19.99</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-hover" data-toggle="modal" data-target="#Modalartwork">
                View 
              </button>
            </div>
          </div>

          <div class="card " style="width: 16rem;  margin-block: 10px;
          margin-right: 20px;">
            <img src="images/pic1.png" class="card-img-top  art-image " alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-hover" data-toggle="modal" data-target="#Modalauction">
                View 
              </button>
            </div>
          </div>

          <div class="card" style="width: 16rem;  margin-block: 10px;
          margin-right: 20px;">
            <img src="images/bg.jpg" class="card-img-top  art-image" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          

          
          <!-- Modal-->

          <div class="modal fade" id="Modalartwork" role="dialog" aria-labelledby="artmodal" aria-hidden="true">
            <div class="modal-dialog fixed-modal-dialog " role="document">
              <div class="modal-content modalart">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                <div class="col-6">
                  <div class="row image-container">
                  <img src="images/pic3.png" alt="" class="img-fluid">
                  </div>

                  <div class="row">
                    <div class="col"><img src="images/pic3.png" alt="" class="img-fluid"></div>
                    <div class="col"><img src="images/pic3.png" alt="" class="img-fluid"></div>
                    <div class="col"><img src="images/pic3.png" alt="" class="img-fluid"></div>
                  </div>
                  
                </div>
                <div class="col-6">
                  <H1>Title</H1>
                  <h5>Username</h5>
                  <h6 class="price">$19.99</h6>
                  <br>
                  <p>Description:</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi nihil illum numquam dolores magnam pariatur delectus! Molestiae sunt, laudantium odit alias pariatur, maiores natus consectetur eius tempore numquam at ex.</p>
                  <div class="row">
                    <div class="d-inline">
                      <button type="button buttonaddtocart" class="btn btn-outline-primary">Add to Cart</button>
                      <button class="btn btn-primary buttonbuy" type="submit">Buy</button>
                  </div>
                  </div>
                </div>
                </div>
                <p style="color: rgba(142, 146, 149, 0.491)">dimension</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
              </div>
              </div>
            </div>
          </div>		   
        </div>

        <!-- Modal for auction card-->
        <div class="modal fade" id="Modalauction" role="dialog" aria-labelledby="artmodal" aria-hidden="true">
          <div class="modal-dialog fixed-modal-dialog " role="document">
            <div class="modal-content modalart">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
              <div class="col-6">
                <div class="row image-container">
                <img src="images/pic3.png" alt="" class="img-fluid">
                </div>
                <div class="row">
                  <div class="col"><img src="images/pic3.png" alt="" class="img-fluid"></div>
                  <div class="col"><img src="images/pic3.png" alt="" class="img-fluid"></div>
                  <div class="col"><img src="images/pic3.png" alt="" class="img-fluid"></div>
                </div>
              </div>
              <div class="col-6">
                <H1>Title</H1>
                <h5>Username</h5>
                <h6 class="price">$19.99</h6>
                <br>
                <p>Description:</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi nihil illum numquam dolores magnam pariatur delectus! Molestiae sunt, laudantium odit alias pariatur, maiores natus consectetur eius tempore numquam at ex.</p>
                <div class="row">
                  <div class="d-inline">
                    <button type="button buttonaddtocart" class="btn btn-outline-primary">Add to Cart</button>
                    <button class="btn btn-primary buttonbuy" type="submit">Buy</button>
                </div>
                </div>
              </div>
              </div>
              <p style="color: rgba(142, 146, 149, 0.491)">dimension</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
          </div>
        </div>		   
      </div>

      
      </div>
    </div>

    <style>
        .art-image{
          width: 230px;
          height:290px;
          object-fit: cover;


         }
        .buttonaddtocart{
          width: 110px;
        }
        .buttonbuy{
          width: 110px;
        }
        .fixed-column {
            position: sticky;
            top: 0;
            height: 100vh;
            
        }

        .scrollable-row {
            overflow-y: auto;
            height: 100vh;
        }

        .scrollable-content {
            padding: 20px; 
        }
        .price{
          color: #007bff;
        }
        .modalart{
          width: 800px;
          align-self: center;
        }
        

    </style>

    
    </div>

  </div>
@endsection

@section('Footer')
@include('buyer.footer')
@endsection