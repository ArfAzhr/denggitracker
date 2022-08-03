<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ongoing project denggitracker">
    <meta name="author" content="arfazhr">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>DenggiTracker | Insert Data</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body class="antialiased" style="background-color:#232323" >
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
      @if (Route::has('login'))
      <div class="hidden fixed col-md-8 col-xs-12">
        @auth
            <ul class="left-info">
              <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-envelope"></i>Dashboard</a></li>
            </ul>
          @else
            <ul class="left-info">
              <li><a href="{{ route('login') }}"><i class="fa fa-envelope"></i>Log in</a></li>
            </ul>
          @if (Route::has('register'))
            <ul class="left-info">
              <li><a href="{{ route('register') }}"><i class="fa fa-envelope"></i>Register</a></li>
            </ul>
          @endif
        @endauth
      </div>
      @endif

          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand" href="/"><h2> <img src="{{URL::asset('/img/dtlogo.png')}}" height="50" width="50">Denggi<em> tracker</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
              <li class="nav-item dropdown nav-item active">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dengue Case</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/newcase">Add New Case</a>
                    <a class="dropdown-item" href="/newcase">Update Case</a>
                    <a class="dropdown-item" href="/newcase">View All Case</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dengue Information</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/newcase">Add Information</a>
                    <a class="dropdown-item" href="/newcase">Update Information</a>
                    <a class="dropdown-item" href="/newcase">View All Case</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">Emergency Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
              
                <div class="dropdown-menu">
                <a class="dropdown-item" href="about.html">About Us</a>
                    <a class="dropdown-item" href="blog.html">Blog</a>
                    <a href="{{ route('login') }}" class="dropdown-item">Log in</a>
                    <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content --> 
     
    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="color: #fbfbfb;"">Register new <em>Dengue cases</em></h2>
              <span>Please fill in all the required data</span>
            </div>
          </div>
          <div class="col-md-12" >
          @if(session('success'))
              <div class="alert alert-success alert-dissmissible fade show" role="alert">
                <strong>{{ session('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-;abe;="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          @endif
            <div class="contact-form">
              @csrf
                
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Case ID</th>
                  <th scope="col">Patient Name</th>
                  <th scope="col">Sex</th>
                  <th scope="col">Age</th>
                  <th scope="col">Region</th>
                  <th scope="col">Area</th>
                  <th scope="col">Date</th>
                  <th scope="col">Dengue Level</th>
                  <th scope="col">Dengue Status</th>
                  <th scope="col">Action</th>
                  
                </tr>
              </thead>
              <tbody>

                  @foreach($cases as $cs) 
                <tr>
                  <td> {{ $cs->case_id}} </td>
                  <td> {{ $cs->patientname}} </td>
                  <td> {{ $cs->sex}} </td>
                  <td> {{ $cs->age}} </td>
                  <td> {{ $cs->region}} </td>
                  <td> {{ $cs->area}} </td>
                  <td> {{ $cs->date}} </td>
                  <td> {{ $cs->denguelevel}} </td>
                  <td> {{ $cs->denguestatus}} </td>
                  <td>
                      <a href="/viewcase/{{ $cs->case_id}}" class="btn btn-danger">Delete</a>
                      <a href="{{ url('viewcase/update/'.$cs->case_id)}}" class="btn btn-info">Edit</a>
                  </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
<br><br><br>


  <footer>
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2022 DenggiTracker Project
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </p>
          </div>
        </div>
      </div>
    </div>
</footer>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>