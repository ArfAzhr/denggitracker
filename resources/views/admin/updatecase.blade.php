<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ongoing project denggitracker">
    <meta name="author" content="arfazhr">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>DenggiTracker | Case {{ $cases->case_id}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.css')}}">
  </head>

  <body class="antialiased" style="background-color:#232323" >
    
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
                    <a class="dropdown-item" href="/viewcase">Update Case</a>
                    <a class="dropdown-item" href="/viewcase">View All Case</a>
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
              <h2 style="color: #fbfbfb;"">Dengue case<em>&nbsp&nbspNo. {{ $cases->case_id}}</em></h2>
              <span>This dengue case is reported at {{ $cases->created_at}} in {{ $cases->area}}</span>
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
              <form action="{{ url('case/update/'.$cases->case_id) }}" method="POST">
              @csrf
                <div class="row">
                  <div class="col-lg-8 col-md-12 col-sm-12">
                    <fieldset>
                    <label for="patientname" > Patient Name </label>
                      <input name="patientname" type="text" class="form-control" id="patientname" value="{{ $cases->patientname}}" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-2 col-md-12 col-sm-12">
                    <fieldset>
                    <label for="sex" > Gender </label>
                      <select name="sex" id="sex" class="form-control" value="{{ $cases->sex}}" required="">
                          <option value="not selected" selected="true" disabled="disabled">{{ $cases->sex}}</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                      </select>
                      <!--input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required=""-->
                    </fieldset>
                  </div>
                  <div class="col-lg-2 col-md-12 col-sm-12">
                    <fieldset>
                      <label for="age"> Age </label>
                      <input name="age" type="number" class="form-control" id="age" value="{{ $cases->age}}" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                    <label for="region"> Region </label>
                      <select name="region" id="region" class="form-control" value="{{ $cases->region}}" required="">
                          <option value="not selected" selected="true" disabled="disabled">{{ $cases->region}}</option>
                          <option value="Petaling">Petaling</option>
                          <option value="Hulu Langat">Hulu Langat</option>
                          <option value="Gombak">Gombak</option>
                          <option value="Klang">Klang</option>
                          <option value="Sepang">Sepang</option>
                          <option value="Sabak Bernam">Sabak Bernam</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                    <label for="area"> Area </label>
                      <select name="area" id="area" class="form-control" value="{{ $cases->area}}" required="">
                          <option value="not selected" selected="true" disabled="disabled">{{ $cases->area}}</option>
                          <option value="Sungai Buloh">Sungai Buloh</option>
                          <option value="Petaling">Petaling</option>
                          <option value="Damansara">Damansara</option>
                          <option value="Bukit Raja">Bukit Raja</option>
                          <option value="Kajang">Kajang</option>
                          <option value="Hulu Langat">Hulu Langat</option>
                          <option value="Ampang">Ampang</option>
                          <option value="Cheras">Cheras</option>
                          <option value="Semenyih">Semenyih</option>
                          <option value="Beranang">Beranang</option>
                          <option value="Hulu Semenyih">Hulu Semenyih</option>
                          <option value="Batu">Batu</option>
                          <option value="Hulu Kelang">Hulu Kelang</option>
                          <option value="Rawang">Rawang</option>
                          <option value="Kuang">Kuang</option>
                          <option value="Setapak">Setapak</option>
                          <option value="Klang">Klang</option>
                          <option value="Kapar">Kapar</option>
                          <option value="Labu">Labu</option>
                          <option value="Dengkil">Dengkil</option>
                          <option value="Sepang">Sepang</option>
                          <option value="Bagan Nakhoda Omar">Bagan Nakhoda Omar</option>
                          <option value="Pancang Bendena">Pancang Bendena</option>
                          <option value="Pasir Panjang">Pasir Panjang</option>
                          <option value="Sabak">Sabak</option>
                          <option value="Sungai Panjang">Sungai Panjang</option>
                      </select>
                    </fieldset>
                  </div>
                  
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                    <label for="denguelevel"> Dengue Level </label>
                      <select name="denguelevel" id="denguelevel" class="form-control" value="{{ $cases->denguelevel}}" required="">
                          <option value="0" selected="true" disabled="disabled">{{ $cases->denguelevel}}</option>
                          <option value="DENV-1">DENV-1</option>
                          <option value="DENV-2">DENV-2</option>
                          <option value="DENV-3">DENV-3</option>
                          <option value="DENV-4">DENV-4</option>
                      </select>
                      <!--input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required=""-->
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                    <label for="date"> Date Reported </label>
                      <input name="date" type="date" class="form-control" id="casedate" value="{{ $cases->date}}" required="" min="2022-04-01">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                    <label for="denguestatus"> Case Status </label>
                      <select name="denguestatus" id="denguestatus" class="form-control" value="{{ $cases->denguestatus}}" required="">
                          <option value="not selected" selected="true" disabled="disabled">{{ $cases->denguestatus}}</option>
                          <option value="Recovered">Recovered</option>
                          <option value="Diagnosed">Diagnosed</option>
                          <option value="Deceased">Deceased</option>
                      </select>
                      <!--input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required=""-->
                    </fieldset>
                  <!--div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div-->
                  <div class="col-lg-12">

                  @error('patientname')
                  <span class="text-danger"> {{ $message }}</span>
                  @enderror

                    <fieldset>
                     <button name="submit" type="submit" id="form-submit" class="border-button" button>Submit</button>
                     <button name="clear" type="reset" id="form-submit" class="border-button" button>Clear</button>
                    </fieldset>
                  </div>
                </div>
              </form>
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