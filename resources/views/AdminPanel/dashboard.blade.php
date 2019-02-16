<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <div class="container">
        <ul class="list-group  bg-white" style="margin-top: 8rem;">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                1st Year
                <span class="badge badge-primary badge-pill">{{ $yr_1 }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                2nd Year
                <span class="badge badge-primary badge-pill">{{ $yr_2 }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                3rd Year
               <span class="badge badge-primary badge-pill">{{ $yr_3 }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                4th Year
               <span class="badge badge-primary badge-pill">{{ $yr_4 }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center active">
                Total
               <span class="badge badge-primary badge-pill">{{ $yr_1 + $yr_2 + $yr_3 + $yr_4 }}</span>
            </li>
        </ul>
        <br>
        <div class="text-center">
            <a href="print" target="_blank" class="btn btn-lg btn-success">Print Registration Details</a>
            &nbsp;
            <a href="logout" class="btn btn-lg btn-danger">Logout</a>
        </div>
        <br>
    </div>
</body>
</html>