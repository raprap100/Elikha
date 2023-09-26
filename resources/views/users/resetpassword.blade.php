@extends('layout/master')

@section('Body')
   
<div class="container container-fluid text-center">
  <div class="row">
    <div class="col">
      <br><br><br>
      <form class="form" action="{{ route('resetpasswordPost') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
          <style>
          .form {
              display: flex;
              flex-direction: column;
              gap: 10px;
              max-width: 350px;
              background-color: #CCCCCC;
              padding: 20px;
              border-radius: 20px;
              position: relative;
              margin-left: 100px
              
            }
            
            .title {
              font-size: 28px;
              color: royalblue;
              font-weight: 600;
              letter-spacing: -1px;
              position: relative;
              display: flex;
              align-items: center;
              padding-left: 30px;
            }
            
            
            .title::before {
              width: 18px;
              height: 18px;
              background-color: royalblue;
            }
            
            .title::after {
              width: 18px;
              height: 18px;
              animation: pulse 1s linear infinite;
            }
            
            .message, .signin {
              color: rgba(4, 4, 4, 0.822);
              font-size: 14px;
            }
            
            .signin {
              text-align: center;
            }
            
            .signin a {
              color: royalblue;
            }
            
            .signin a:hover {
              text-decoration: underline royalblue;
            }
            
            .flex {
              display: flex;
              width: 100%;
              gap: 6px;
            }
            
            .form label {
              position: relative;
            }
            
            .form label .input  {
              width: 100%;
              padding: 10px 10px 20px 10px;
              outline: 0;
              border: 1px solid rgba(105, 105, 105, 0.397);
              border-radius: 10px;
            }
            
            .form label .input + span {
              position: absolute;
              left: 10px;
              top: 15px;
              color: grey;
              font-size: 0.9em;
              cursor: text;
              transition: 0.3s ease;
            }
            
            .form label .input:placeholder-shown + span  {
              top: 15px;
              font-size: 0.9em;
            }
            
            .form label .input:focus + span,.form label  .input:valid + span {
              top: 30px;
              font-size: 0.7em;
              font-weight: 600;
            }
            
            .form label .input:valid + span {
              color: green;
            }
            
            .submit {
              border: none;
              outline: none;
              background-color: royalblue;
              padding: 10px;
              border-radius: 20px;
              color: #fff;
              font-size: 16px;
              transform: .3s ease;
            }
            
            .submit:hover {
              background-color: rgb(56, 90, 194);
            }
         
            @keyframes pulse {
              from {
                transform: scale(0.9);
                opacity: 1;
              }
            
              to {
                transform: scale(1.8);
                opacity: 0;
              }
            }
            .dropdown-toggle {
                width: 200px; /* set a fixed width for the button */
              }
              </style>
              @if(Session::has('success'))
              <div class="alert alert-success" role="alert">
                  {{Session::get('success')}}
              </div>
          @endif
         <h1>E-Likha</h1>
          <p class="message">Reset Password. </p>
            <label>
              <input required type="email" class="input" id="email" name="email">
              <span>Email</span>
            </label>
            <label>
              <input required type="password" class="input" id="password" name="password">
              <span>New Password</span>
            </label>
            <label>
              <input required type="password" class="input" id="name" name="password_confirmation">
              <span>Confirm password</span>
            </label>
            <button class="submit">Submit</button>
          </form>

      <br><br><br>
    </div>
     
    <div class="col-md-6 my-col "style="background-color: #f2f2f2;">
              <div class="my-content">
              <p class="align-baseline fs-1 " style="font-family:Helvetica Neue">E-Likha</p>
              <p class="align-middle lh-small" style="font-family:Helvetica Neue">Welcome to my hiking website, 
                  where I share my love for exploring the great outdoors. 
                  If you're a fellow hiker or just looking for some inspiration for
                   your next adventure, you've come to the right place.</p>
            </div>
            <style>
            .my-col {
              display: flex;
              align-items: center;
              justify-content: center;
              
              padding-bottom: 0
              
            }
            
            .my-content {
              text-align: center;
            }
            
            </style>
            
            
            </div>
           
    </div>
  
@endsection