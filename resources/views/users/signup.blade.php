@extends('layout/master')
@section ('Body')
<div class="body">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-center align-items-center vh-100">

              <form class="form" action="{{ route('signup') }}" method="POST">
                @csrf
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
                  <p class="message">Signup now and get full access to the website. </p>
                    <label>Are you a Buyer or Artist?</label>
                    <select type="type" name="role" id="role" class="form-control" required>
                        <option value="2">Artist</option>
                        <option value="3">Buyer</option>
                    </select>
                      <label>
                        <input type="text" name="name" id="name" class="input" required>
                        <span>Full Name</span>
                      </label>
                    <label>
                      <input required type="email" class="input" id="email" name="email">
                      <span>Email</span>
                    </label>
                    <label>
                      <input required type="password" class="input" id="password" name="password">
                      <span>Password</span>
                    </label>
                    <label>
                      <input required type="password" class="input" id="name" name="password_confirmation">
                      <span>Confirm password</span>
                    </label>
                    <button class="submit" id="submit-button">Submit</button>
              
                    @if(Session::has('success') && Session::get('success') === 'Register successfully. Please check your email for verification.')
                    <!-- Display the success message -->
                    
                    <!-- Display the Resend Verification Email button -->
                    <form method="POST" action="{{ route('verification.resend') }}">
                      @csrf
                      <button type="button" id="resend-verification-button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#verificationModal">Resend Verification Email</button>
               @endif
                    </form>
                  <!-- Bootstrap Modal -->
              <div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="verificationModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="verificationModalLabel">Resend Verification Email</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            An Email Verification has been resent. Please check your email.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
              </div>
              
            </div>        
        </div>
        <div class="col " style="margin-right: 80px">
            <div class="d-flex flex-column align-items-center justify-content-center vh-100">
                <img src="images/logo1.png" class="logo1" alt="...">
                <p class="text-center mt-3" style="color: #fff">"Welcome to E-Likha, a thriving online art community born out of a shared passion 
                    for creativity and artistic expression. Founded in 2023, we are a group of artists dedicated 
                    to showcasing the beauty of visual arts to the world."</p>
            </div>
        </div>
        
    </div>

    <style>   
        .logo{
            width:100%;
            height:100%;
        }   
        .logo1{
            width:600px;
            height: 120px;
        }               
        body {
            background-image: url('images/bgsignup.png');
            background-size: cover; /* Adjust as needed */
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    
        .row.fullscreen {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity (last value) as needed */
            z-index: -1; /* Place the overlay behind the content */
        }
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
</div>
@endsection