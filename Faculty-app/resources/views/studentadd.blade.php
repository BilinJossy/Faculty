<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Student add</title>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="/">FACULTY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/student">STUDENT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/busadd">BUS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/bookadd">BOOK</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
        <div class="row">
            <div class="col col-sm-0 col-md-0 col-lg-2 col-xl-2 col-xxl-2"></div>
            <div class="col col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
            
             <form action="/studentread" method="post">
             
             {{ csrf_field() }}

             <table class="table">
                <tr>
                    <td>NAME</td>
                    <td><input name="sname" type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>ROLL NO</td>
                    <td><input name="sno" type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>ADMISSION NO</td>
                    <td><input name="sadno" type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>COLLEGE</td>
                    <td><input name="scoll" type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td><button class="btn btn-outline-success">SUBMIT</button></td>
                    <td><button class="btn btn-outline-danger">RESET</button></td>
                </tr>
            </table>
             
             
             </form>
         

            </div>
            <div class="col col-sm-0 col-md-0 col-lg-2 col-xl-2 col-xxl-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>