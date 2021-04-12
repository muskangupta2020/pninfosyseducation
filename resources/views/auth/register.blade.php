@extends("front.master")

@section("content")
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    * {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
  </style>
</head>
<body>
  @if(session('message'))
           <p class="alert aria-danger" style="background-color: red;color: white">
              {{session('message')}}
           </p>
@endif
<form method="post" action="{{ route('register') }}" style="border:1px solid #ccc;background-image: linear-gradient(#83a4d4,#b6fbff)" >
  @csrf
  <div class="container">
    <div class="row">
    <div class="col-md-6">
      <img src="{{ url('../backend/dist/img/sign.jpg')}}" height="100%" width="100%">
    </div>
    <div class="col-md-6">
      <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
  <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Email" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    
    <label for="psw"><b>Confirmed Password</b></label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</div>
</div>
</form>
</body>
</html>
@endsection