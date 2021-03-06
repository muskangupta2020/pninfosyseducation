@extends("front.master")

@section("content")
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<style type="text/css">
		/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 10%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
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
<form action="{{url('front/login_save')}}" method="post" style="background-image: linear-gradient(#83a4d4,#b6fbff);border:1px solid #ccc" >
	@csrf
  <div class="imgcontainer">
  	 <img src="{{ url('../backend/dist/img/logo.jpg')}}" alt="Avatar" class="avatar" width="10%" height="50%">
  </div>
  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
       <a href="{{url('front/signup')}}"><button type="button" class="cancelbtn">Signup</button></a>

  </div>
</form>
</body>
</html>
@endsection