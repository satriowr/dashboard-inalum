<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<style>
    body {
  background-color: #f8f9fa;
}

.box {
        display: flex;
        height: 300px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        padding: 20px;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 15px;
    }

    .box h3 {
        margin-top: 0;
        font-size: 1em;
        margin-bottom:20px;
    }

    @media (max-width: 767px) {
        .box {
            margin-right: 0;
        }
    }
    #myProgress {
  width: 100%;
  background-color: grey;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: green;
}

.margin{
    margin: 25px;
}

.semi-donut{
  --percentage: 0;
  --fill: #ff0;
  width: 250px;
  height: 125px;
  position: relative;
  color: #fff;
  font-size: 22px;
  font-weight: 600;
  overflow: hidden;
  color: var(--fill);
  display: flex;
  align-items: flex-end;
  justify-content: center;
  box-sizing : border-box;
  &:after{
    content: '';
    width: 250px;
    height: 250px;
    border:50px solid;
    border-color : rgba(0,0,0,0.15) rgba(0,0,0,0.15) var(--fill) var(--fill);
    position: absolute;
    border-radius: 50%;
    left: 0;
    top: 0;
    box-sizing : border-box;
    transform: rotate( calc( 1deg * ( -45 + var(--percentage) * 1.8 ) ) );
    animation : fillAnimation 1s ease-in;
  }
}

.navbar-brand {
        white-space: nowrap; /* Prevent line breaks */
        overflow: hidden; /* Hide overflowing text */
        text-overflow: ellipsis; /* Display ellipsis (...) for hidden text */
        max-width: 100%; /* Ensure the text doesn't overflow its container */
    }

    @media (max-width: 375px) {
        .navbar-brand {
            display: none; /* Hide text on smaller screens (e.g., iPhone 13 Pro) */
        }
    }

    @keyframes fillAnimation{
  0%{transform : rotate(-45deg);}
  50%{transform: rotate(135deg);}
}

@keyframes fillGraphAnimation{
  0%{transform: rotate(0deg);}
  50%{transform: rotate(180deg);}
}
</style>
<body>
<div class="navbar-head">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <a class="navbar-brand" href="#">Dashboard Monitoring Homogenizing Furnace & Conveyor PT. Inalum</a>
        </div>
    </nav>
</div>


<div class="container mt-4">
  <div class="row">
    <!-- Kotak Atas -->
    <div class="col-md-4">
    <div class="box">
        <h3>Scanning Material Process</h3>
        <div class="center-container">
            <div class="semi-donut" 
            style="--percentage : {{$data_sensor->scan_material}}; --fill: #1ad1ff;">
            <span style="color:black;">{{$data_sensor->scan_material}} %</span>
            </div>
        </div>
 
    </div>
    </div>
    <div class="col-md-4">
      <div class="box">
        <h3>Load Capacity</h3>
        <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-minecart-loaded" viewBox="0 0 16 16">
  <path d="M4 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2m0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4m8-1a1 1 0 1 1 0-2 1 1 0 0 1 0 2m0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4M.115 3.18A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 14 12H2a.5.5 0 0 1-.491-.408l-1.5-8a.5.5 0 0 1 .106-.411zm.987.82 1.313 7h11.17l1.313-7H1.102z"/>
  <path fill-rule="evenodd" d="M6 1a2.498 2.498 0 0 1 4 0c.818 0 1.545.394 2 1 .67 0 1.552.57 2 1h-2c-.314 0-.611-.15-.8-.4-.274-.365-.71-.6-1.2-.6-.314 0-.611-.15-.8-.4a1.497 1.497 0 0 0-2.4 0c-.189.25-.486.4-.8.4-.507 0-.955.251-1.228.638-.09.13-.194.25-.308.362H3c.13-.147.401-.432.562-.545a1.63 1.63 0 0 0 .393-.393A2.498 2.498 0 0 1 6 1"/>
</svg>
        </div>
        <div class="h5 mt-4">{{$data_sensor->load_capacity}} %</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box">
        <h3>Speed Conveyor</h3>
        <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
  <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
</svg>
        </div>
        <div class="h5 mt-4">{{$data_sensor->speed_conveyor}} FPS</div>
      </div>
    </div>

    <!-- Kotak Bawah -->
    <div class="col-md-4">
      <div class="box">
        <h3>Homogenezing Temperature</h3>
        <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-droplet-half" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
</svg>
        </div>
        <div class="h5 mt-4">{{$temperature}} °C</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box">
        <h3>Homogenezing Furnace Duration</h3>
        <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
</svg>
        </div>
        <div class="h5 mt-4">{{$data_sensor->duration}}</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box">
        <h3>Power</h3>
        <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-lightning" viewBox="0 0 16 16">
  <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1z"/>
</svg>
        </div>
        <div class="h5 mt-4">{{$data_sensor->power}} watt/volt</div>
      </div>
    </div>
  </div>
</div>

</body>
</html>