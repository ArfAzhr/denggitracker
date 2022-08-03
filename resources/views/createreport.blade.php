<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your E-Report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="color: #1e1e1e;"">Report Situation of<em style="color:red;">&nbspDengue&nbsp</em>from Your Area!</h2>
              <span>Please fill in all the form below</span>
            </div>
          </div>
          <div class="col-md-12"  >
          @if(session('success'))
              <div class="alert alert-success alert-dissmissible fade show" role="alert">
                <strong>{{ session('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-;abe;="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          @endif
            <div class="contact-form" >
              <form action="{{ route('DengueCase') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="row">
                  <div class="col-lg-8 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="report_title" type="text" class="form-control" id="report_title" placeholder="Report Title" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <select name="report_area" id="report_area" class="form-control" pattern="[^ @]*@[^ @]*" required="">
                          <option value="not selected" selected="true" disabled="disabled">Select City</option>
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
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <textarea id="report_desc" name="report_desc" rows="4" cols="40" class="form-control" placeholder="Report Title" required="">
                            Please describe your report in this section. </textarea>
                      <!-- <input name="report_title" type="textbox" class="form-control" id="report_title" placeholder="Report Title" required=""> -->
                    </fieldset>
                  </div>&nbsp&nbsp&nbsp
                  <div>
                    <fieldset>
                      <input name="report_attach" type="file" class="form-control" id="report_attach" placeholder="Attachment" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="report_date" type="date" class="form-control" id="report_date" placeholder="Date" required="" min="2022-04-01">
                    </fieldset>
                  </div>
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

            </div>
        </div>
    </div>
</x-app-layout>
