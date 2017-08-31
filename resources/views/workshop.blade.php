<html lang="en">

<head>
  <title>Registration | NCS</title>
  <link rel="shortcut icon" href="{{ asset('public/InteractiveRegistrationForm/assets/favicon.ico') }}" type="image/x-icon"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ asset('public/InteractiveRegistrationForm/js/conversational-form.min.js') }}" crossorigin></script>
  <script type="text/javascript" src="{{ asset('public/InteractiveRegistrationForm/js/index.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('public/InteractiveRegistrationForm/css/style.css') }}">
</head>

<body>

  <!-- Button -->
  <div class="button">
    <div class="line line-1"></div>
    <div class="line line-2"></div>
    <div class="line line-3"></div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-12 section1">
        <div class="row">
          <div class="col-sm-12 content">
            <h1 class="heading--primary">Programming Workshop<br/> <span style="font-size: 60px;text-transform: lowercase;">2k17</span></h1>
          </div>
          <div class="col-sm-12 details">
            <span>Computer Center</span>
            <span>Thrusday-Friday</span>
            <span>4:30 PM onwards</span>
          </div>
          <div class="col-sm-12 footer">
            <div class="col-sm-9 col-xs-8">
                <img src="{{ asset('public/InteractiveRegistrationForm/assets/ncsncs_logo.png') }}" style="width: 190px;height: 100px;" alt="">
            </div>
            <div class="col-sm-3 col-xs-4 pull-right social-links">
              <ul>
                <li>
                  <a href="http://hackncs.com/" target="_blank">
                    <i class="fa fa-globe fa-2x" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/nibblecomputersociety/" target="_blank">
                        <fa class="fa fa-facebook fa-2x"></fa>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/ncs-jss" target="_blank">
                        <i class="fa fa-github fa-2x"></i>
                    </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 section2">

        <div class="form" style="visibility: hidden;">

          <form action="#" id="form">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="radio">
                <input cf-questions="Hi, I'm Cersei, Have we met before in Orientation Programme?" cf-label="Yes, let's begin!" type="radio" value="0">
                    Let's Begin
              </label>
            </div>

            <div class="form-group">
              <label for="name">What's your name?</label>
                <input required cf-questions="Great! Tell me your name? 😊" cf-error="Enter your name" type="text" class="form-control" name="name" id="name">
            </div>

              <div class="form-group">
                <label for="admission_no">Admission No.</label>

                <input required class="form-control" cf-input-placeholder="Ex- 15cse075, 15ec075 " cf-questions="Hello, {previous-answer}! What is your Admission No. ?|Nice to meet you, {previous-answer}! What is your Admission No. ?" type="text" name="admission_no" id="admission_no" cf-error="Enter your admission no">
              </div>
            <div class="form-group">
              <label for="year">Year</label>
              <div class="radio">
              <label>
                <input class="form-control" cf-questions="You are from which year?" type="radio" name="year" id="year-1" value="1">
                1 year
              </label>
              </div>
              <div class="radio">
              <label>
                <input class="form-control" type="radio" name="year" id="year-2" value="2">
                2 year
              </label>
              </div>
              <div class="radio">
              <label>
                <input class="form-control" type="radio" name="year" id="year-3" value="3">
                3 year
              </label>
              </div>
              <div class="radio">
                <label>
                  <input class="form-control" type="radio" name="year" id="year-2" value="4">
                  4 year
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input required pattern=".+\@.+\..+" cf-error="E-mail is not correct" cf-input-placeholder="Ex- example@example.com" cf-questions="If you want to stay updated, please give me your email." type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
              <label for="mobile">Mobile</label>
              <input required maxlength=10 cf-error="Mobile No. is not correct" cf-input-placeholder="Ex- 9911994499" cf-questions="And your mobile number too 😄." type="tel" class="form-control" name="mobile" id="mobile">
            </div>

            <div class="form-group">
              <label for="thats-all">Are you ready to submit the form?</label>
              <select cf-questions="Are you ready to submit the form?" name="submit-form" id="submit-form" class="form-control">
                <option>Yupp</option>
                <option>Nope</option>
              </select>
            </div>
          </form>
        </div>
        <section id="cf-context" role="cf-context" cf-context>

        </section>
      </div>
    </div>
  </div>
</body>
</html>
