@extends('layout.master')
@section('Header')
        
@include('artistinc.navbar')
@include('artistinc.popup')


@section('Body')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container container-fluid text-align:center  " style="padding-left:100px; padding-right:100px ;" >
    <a href="javascript:history.back()">
        <img src="images/back.png" alt="Image" style="width: 40px; height: 25px;"/></a>
<br><br>
    <h2>VERIFICATION</h2><br>
    <form action="{{ route('artistVerify') }}" method="POST" enctype="multipart/form-data">
<div class="row">
  <div class="col">
    <h6>Upload Photo of ID</h6>
<input class="form-control" type="file" id="identification" name="identification" onchange="displayImage('identification')">
<img id="uploadedImageIdentification" style="max-width: 50%" class="img-fluid" style="max-width: 50px; max-height: 50px">

<h6>Upload Selfie</h6>
<input class="form-control" type="file" id="selfie" name="selfie" onchange="displayImage('selfie')">
<img id="uploadedImageSelfie" style="max-width: 50%" class="img-fluid" style="max-width: 50px; max-height: 50px">

<h6>Upload GCash QR Code</h6>
<input class="form-control" type="file" id="gcash" name="gcash" onchange="displayImage('gcash')">
<img id="uploadedImageGcash" style="max-width: 50%" class="img-fluid" style="max-width: 50px; max-height: 50px">
  </div>
  
  <script>
    function displayImage(inputName) {
        const fileInput = document.getElementById(inputName);
        const uploadedImage = document.getElementById('uploadedImage' + inputName.charAt(0).toUpperCase() + inputName.slice(1));
        const file = fileInput.files[0];
        const reader = new FileReader();
    
        reader.onload = function (e) {
            uploadedImage.src = e.target.result;
        };
    
        reader.readAsDataURL(file);
    }
    </script>

  @csrf
 <div class="col">
    <h6>First Name</h6>
    <input required type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" ><br>
    <h6>Middle Name</h6>
    <input required type="text" name="middlename" id="middlename" class="form-control" placeholder="Middle Name" ><br>
    <h6>Last Name</h6>
    <input required type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" ><br>
    <h6>Nationality</h6>
      <select type="type" name="nationality" id="nationality" class="form-control" required>
      <option value="Filipino">Filipino</option>
      </select><br>
    <h6>Age</h6>
    <input required type="text" name="age" id="age" class="form-control" placeholder="Age" ><br>
    

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <script>
    document.addEventListener('DOMContentLoaded', function(e) {
    $('[name="date"]')
        .datepicker({
            format: 'dd/mm/yyyy'
        })
        .on('changeDate', function(e) {
            // do somwthing here
        });
});
.fa {
    position: absolute;
    right: 25px;
    top: 11px;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
   </script>
 </div>
 
 <div class="col">
  <h6>ID Type</h6>
      <select type="type" name="idtype_id" id="idtype_id" class="form-control" required>
      <option value="1">Passport</option>
      <option value="2">National ID</option>
      <option value="3">Social Security Service ID</option>
      <option value="4">Government Service Insurance System e-Card</option>
      <option value="5">Driver’s license</option>
      <option value="6">National Bureau of Investigation clearance</option>
      <option value="7">Police clearance</option>
      <option value="8">Firearms’ License to Own and Possess ID</option>
      <option value="9">Professional Regulation Commission ID</option>
      <option value="10">Integrated Bar of the Philippines ID</option>
      <option value="11">Overseas Workers Welfare Administration ID</option>
      <option value="12">Bureau of Internal Revenue ID</option>
      <option value="13">Voter’s ID</option>
      <option value="14">Senior citizen’s card</option>
      <option value="15">Unified Multi-purpose Identification Card</option>
      <option value="16">Other government-issued ID with photo</option>
      </select>
      <br>
      <h6>Address</h6>
      <input required type="text" name="address" id="address" class="form-control" placeholder="Address" ><br>
      
      
  
      <h6>Sex</h6>
      <select type="type" name="gender_id" id="gender_id" class="form-control" required>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
      <br>
      <h6>Phone Number</h6>
      <input required type="text" name="phonenumber" id="phonenumber" class="form-control" placeholder="Phone Number" ><br>
    
      <h6>Date of Birth</h6>
      <div class="row">
          <div class="col-md-4">
              <input type="date" class="form-control" name="birthday" id="birthday" style="width: 120px" max="2006-12-31" />
          </div>
      </div>
     <input type="hidden" name="users_id" value="{{ Auth::id() }}">
     <br>
      <style>
        .dropdown-toggle {
          width: 400px; /* set a fixed width for the button */
        }
        .dropdown-menu {
            width: 400px;
        }
        
        </style>
      
      <script>
      $(document).ready(function() {
        $('.dropdown-item').click(function() {
          var selectedItem = $(this).text();
          $('#dropdownMenuButton').text(selectedItem);
        });
      });
      </script>
      
      
     
      <div class="d-grid gap-2 d-md-flex justify-content-md-middle">
        <a href="javascript:history.back()">
    <button class="btn btn-outline-danger" type="button">Cancel</button></a>
    <input type="submit" value="Post" class="btn btn-outline-primary">
    
    </div>
    </div>
    @csrf
  </form>
</div>



<br> <br> 
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        What information are required to fully verify?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Before you start the registration process, please prepare the following information:

        <li> Full name </li>
        <li> Date of Birth </li>
        <li> Gender/Sex </li>
        <li>  Address </li>
        <li> Type of government ID presented + ID number </li>
        <li> Valid government ID with photo (max file size: 4MB)</li>

        </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        What kinds of identification cards will be accepted for Full Verification?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">The following are the official ID cards that will be accepted for Full Verification, with a maximum file size of 4MB:

        <li> Passport </li>
        <li>   Philippine Identification System ID, or the Philippine Identification Card </li>
        <li> Social Security Service ID </li>
        <li> Government Service Insurance System e-Card </li>
        <li>  Driver’s license </li>
        <li> National Bureau of Investigation clearance </li>
        <li> Police clearance </li>
        <li> Firearms’ License to Own and Possess ID </li>
        <li> Professional Regulation Commission ID </li>
        <li> Integrated Bar of the Philippines ID </li>
        <li>  Overseas Workers Welfare Administration ID </li>
        <li>Bureau of Internal Revenue ID </li>
        <li>Voter’s ID </li>
        <li> Senior citizen’s card </li>
        <li> Unified Multi-purpose Identification Card </li>
        <li> Person with Disabilities card or </li>
        <li> Other government-issued ID with photo </li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        What happens if I don't verify my account?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">You will be unable to access all the features available in this website, this includes Posting Artworks for Sale, and Upload Auctions.</div>
    </div>
  </div>
</div>
    
@endsection
