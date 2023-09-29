@extends('buyer.master')

@section('Header')
@include('buyer.Nav')
@endsection
<br>
@section('Body')

<div class="container">
    <div class="row">  
        <div class="col min-vh-100 d-flex justify-content-center align-items-center ">
            <div class="content text-md-center">
                <h3 style="font-size: 80px; font-family: 'Arial', sans-serif;">Let your Imagination<br> take over</h3>
                <p class="narrow-paragraph">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ullam atque, quidem perferendis saepe deleniti ea sapiente modi quisquam praesentium? Illum autem porro adipisci eaque aut error iure doloremque eveniet.
                </p>
                <a href="#signin" class="link-btn">Be an Artist or Collector</a>
            </div>
        </div>
        <div class="col" style="padding-top: 90px">
            <div id="carouselExampleIndicators" class="carousel slide carousel-size " data-bs-ride="carousel" data-bs-interval="3000" >
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="images/art.png" class="d-block w-75 mx-auto carousel-image shadow p-3 mb-5 bg-body-tertiary rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/art1.png" class="d-block w-75 mx-auto carousel-image shadow p-3 mb-5 bg-body-tertiary rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/art3.png" class="d-block w-75 mx-auto carousel-image shadow p-3 mb-5 bg-body-tertiary rounded" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <script>
          $(document).ready(function () {
            var interval = 5000; 
        
            function autoAdvanceCarousel() {
              $('.carousel').carousel('next'); 
            }
        
            var carouselInterval = setInterval(autoAdvanceCarousel, interval);
        
            $('.carousel').hover(
              function () {
                clearInterval(carouselInterval);
              },
              function () {
                carouselInterval = setInterval(autoAdvanceCarousel, interval);
              }
            );
          });
        </script>
    </div>

    
    <div class="row">
        <div class="col justify-content-center align-items-center ">
            <div class="content text-md-center">
                <h4 style="font-size: 40px; font-family: 'Arial', sans-serif;">Buy and Sell ARTS</h3>      
            </div>
        </div>
         
    </div> 

    <div class="row mt-4">
        <div class="container ">
            <div class="row row-cols-4 d-flex justify-content-center">
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                </div>
              </div>

              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">  
                </div>
              </div>

              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                  </div>
              </div>

              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                  </div>
              </div>

             
            </div>

            <style>
                .card{
                    width: 18rem; 
                    border-radius: 10px; 
                    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                }
            </style>
        </div>

    </div>
    <br><br><br>
    <div class="row mt-4 padding-top:100px">
        <div class="col justify-content-center align-items-center ">
            <div class="content text-md-center">
                <h4 style="font-size: 40px; font-family: 'Arial', sans-serif;">Upcoming Auctions</h3>      
            </div>
        </div>
    </div> 

    <div class="row mt-4">
     
       <!-- Gallery -->
    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Boat on Calm Water"
        />

        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Wintry Mountain Landscape"
        />
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Mountains in the Clouds"
        />

        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Boat on Calm Water"
        />
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Waves at Sea"
        />

        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Yosemite National Park"
        />
      </div>
    </div>  
  <!-- Gallery -->
    </div>

    <br><br>
  <div class="row mt-4 padding-top:100px justify-content-center align-items-center" id="about-section">
      <div class="col justify-content-center align-items-center ">
          <div class="content text-md-center">
              <h4 style="font-size: 40px; font-family: 'Arial', sans-serif;">About Us</h4>      
          </div>
      </div>
  </div> 

  <div class="row mt-4 padding-top:100px justify-content-center align-items-center">
    <div class="col justify-content-center align-items-center ">
        <div class="content text-md-center">
          <h3 style="font-size: 80px; font-family: 'Arial', sans-serif;">E-Likha</h3>
                
          <p class="narrow-paragraph">
            "Welcome to E-Likha, a thriving online art community born out of a shared passion 
            for creativity and artistic expression. Founded in 2023, we are a group of artists dedicated 
            to showcasing the beauty of visual arts to the world."</p>
        </div>
    </div>
  </div>

  <div class="row mt-4 padding-top:100px justify-content-center align-items-center">
    <div class="col justify-content-center align-items-center ">
        <div class="content text-md-center">
          <h5 style="font-size: 40px; font-family: 'Arial', sans-serif;">Get the Latest Art Trends</h5>
                
          <p class="narrow-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ipsa cupiditate at ab deleniti deserunt aut, quo voluptatum autem amet repudiandae excepturi corporis dolorum dolore aspernatur ducimus nihil vitae? Temporibus?
            </p>
        </div>
    </div>
    <div class="col justify-content-center align-items-center ">
      <div class="content text-md-center">
       
              
        <p class="narrow-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ipsa cupiditate at ab deleniti deserunt aut, quo voluptatum autem amet repudiandae excepturi corporis dolorum dolore aspernatur ducimus nihil vitae? Temporibus?
          </p>
      </div>
  </div>
  </div>
</div> 


</div>

@endsection

@section('Footer')
@include('buyer.footer')
@endsection