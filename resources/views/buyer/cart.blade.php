@extends('buyer.master')

@section('Header')
@include('buyer.nav')
@endsection

@section('Body')
<br><br><br>
<div class="row mt-4  justify-content-center align-items-center" style="padding-left: 50px">
    <div class="col colitems justify-content-center align-items-center col-lg-8">
        <div class="row">
            <div class="col">
                <div class="content text-md-left">
                    <h4 style="font-size: 40px; font-family: 'Arial', sans-serif;">Cart</h4>  
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
        
        <div class="card cardcart text-align-center justify-content-center align-items-center d-flex mt-4">
            <div class="col card-text" >
              <h3>Pop Art</h3>                
            </div>
          </div>
          <div class="card cardcart text-align-center justify-content-center align-items-center">
            <div class="col card-text" >
              <h3>Pop Art</h3>                
            </div>
          </div>


          <style>
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
            
          </style>
    </div>

    <div class="col col-md-4 fixed-column">
       
    </div>
</div>
@endsection
