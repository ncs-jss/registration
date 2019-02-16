<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12 bg-white" style="margin-top: 8rem;">
                <form action="admin/login" method="POST">
                    <br>
                    <div class="mx-auto">
                        <h1 class="font-weight-bold text-center">Login</h1>
                        @if (session('msg'))
                            <div class="alert {{ session('class') }}">
                                {{ session('msg') }}
                            </div>
                        @endif
                    </div>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" required name="username" autocomplete="off" placeholder="Username">
                        @if ($errors->has('username'))
                            <p class="text-danger">
                                {{ $errors->first('username') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="pwd" name="password" required placeholder="Password">
                        @if ($errors->has('password'))
                            <p class="text-danger">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                    <br>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <br>
    </div>
</body>
</html>