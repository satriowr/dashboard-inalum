<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
  .title{
    margin-top: 25px;
  }
  body {
    background-color: #F8F9FA;
  }
  .container-data{
    margin-top: 20px;
    background-color: #FFFFFF;
    border-radius: 10px;
    width: 100%;
    height: 100%;
    padding: 25px;
  }
  .button-submit button{
        margin-top:35px;
        width: 250px;
        border-radius:100px;
        background-color: #3B3E88;
        border-color: #3B3E88;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">  
  <a class="navbar-brand"></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2">
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Admin</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/admin/input">Input Menu</a></li>
            <li><a class="dropdown-item" href="/admin/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="title">
    <h3>Input Data</h3>
  </div>
  <div class="container-data">
  <form action="/admin/input/post" method="post">
  @csrf
  <div class="input-group mb-3 mt-3">
      <input type="number" class="form-control" placeholder="Scanning Material Process" name="scan_material">
      <span class="input-group-text" id="basic-addon2">%</span>
    </div>
    <div class="input-group mb-3 mt-3">
        <input type="number" class="form-control" placeholder="Load Capacity" name="load_capacity">
        <span class="input-group-text" id="basic-addon2">%</span>
    </div>
    <div class="input-group mb-3 mt-3">
      <input type="number" class="form-control" placeholder="Speed Conveyor" name="speed_conveyor">
      <span class="input-group-text" id="basic-addon2">FPS</span>
    </div>
    <div class="input-group mb-3 mt-3">
        <input type="number" class="form-control" value="{{$temperature}}" name="suhu" disabled>
        <span class="input-group-text" id="basic-addon2">°C</span>
    </div>
    <div class="input-group mb-3 mt-3">
        <input type="time" class="form-control" placeholder="Homogenizing Furnace Duration" name="duration">
    </div>
    <div class="input-group mb-3 mt-3">
      <input type="number" class="form-control" placeholder="Power" name="power">
      <span class="input-group-text" id="basic-addon2">Watt/Volt</span>
    </div>

    <div class="button-submit d-flex justify-content-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  </div>

</div>

</body>
</html>