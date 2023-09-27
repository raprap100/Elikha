@extends('layout.master')
@section('Header')
        
@include('artistinc.navbar')
@include('artistinc.popup')
@endsection

@section('Body')
<div class="row">
    <div class="col">
      <h6>Upload Photo</h6>
      <input class="form-control" type="file" id="image" name="image" onchange="displayImage()">
      <img id="uploadedImage" style="max-width: 100%" class="img-fluid" style="max-width: 500px; max-height: 500px">
    </div>
    
    <script>
      function displayImage() {
        const fileInput = document.getElementById('image');
        const uploadedImage = document.getElementById('uploadedImage');
        const file = fileInput.files[0];
        const reader = new FileReader();
    
        reader.onload = function (e) {
          uploadedImage.src = e.target.result;
        };
    
        reader.readAsDataURL(file);
      }
    </script>
<div class="d-grid gap-2 d-md-flex justify-content-md-middle">
    <a href="javascript:history.back()">
<button class="btn btn-outline-danger" type="button">Cancel</button></a>
<input type="submit" value="Post" class="btn btn-outline-primary">
</div>
    
@endsection-->