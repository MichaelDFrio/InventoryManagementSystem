<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Checkout Form</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<!-- Scripts -->



<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/plugins/morris.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        @if (Route::has('login'))
            <div class="top-left links">
                @if (Auth::check())
                  <a class="navbar-brand" href="{{ url('/checkout-form') }}">Center for Excellence in Teaching and Learning</a>
                @else
                  <a class="navbar-brand" href="{{ url('/login') }}">Center for Excellence in Teaching and Learning</a>
                @endif
          </div>
        @endif
      </div>
      <!-- Top Menu Items -->
      <ul class="nav navbar-right top-nav">

        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/checkout-form') }}">Checkout an item</a>
                    <a href="{{ url('/logout') }}">Logout</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif
      </ul>
    </nav>
<div class="container">
  <div class="info">
    <h1>Checkout An Item</h1><span>
  </div>
</div>
<div class="form-login">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <form class="login-form" role="form" method="POST">
        {{ csrf_field() }}



        <div class="col-md-12" style="padding-bottom: 5px">
            <select name="checkoutItem" required="true">
              <option value="Laptop">Laptop</option>
              <option value="iPad">iPad</option>
              <option value="PRS">PRS</option>
              <option value="Web Cam">Web Cam</option>
            </select>
        </div>

        <div class="col-md-12">
            Checkout Date:
            <input type="date" name="checkoutDate" placeholder="Choose Checkout Date" required="true">
        </div>
        <div class="col-md-12">
            Return Date:
            <input type="date" name="returnDate" placeholder="Choose Return Date" required="true">
        </div>


        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    Request Checkout
                </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
