<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- icon -->
    <link rel="icon" href="https://png.icons8.com/office/40/000000/investment-portfolio.png">

    <!-- d3js -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>

    <!-- custom css -->
    <link href="css/for_aqi_show.css" rel="stylesheet">

    <title>Open Data</title>

  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">AQI Historical data</h1>
            <p class="lead">這裡顯示了sensor偵測到的數值的紀錄</p>
        </div>
    </div>
    <center>
    <!-- ya -->
    <div class="well form-horizontal col-md-9">
    <fieldset>

      <!-- title -->
      <legend>
        <b></b>

      </legend>

      <!-- course table -->
      <div class="table table-hover">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <!-- <th>date</th> -->
              <th scope="col">O3</th>
              <th scope="col">PM2.5</th>
              <th scope="col">PM10</th>
              <th scope="col">CO</th>
              <th scope="col">SO2</th>
              <th scope="col">NO2</th>
              <th scope="col">AQI</th>
              <th scope="col">地點</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($aqi as $aqis)
              <tr class="success">
                <td>{{$aqis->id}}</td>
                <td>{{$aqis->o3}}</td>
                <td>{{$aqis->pm25}}</td>
                <td>{{$aqis->pm10}}</td>
                <td>{{$aqis->co}}</td>
                <td>{{$aqis->so2}}</td>
                <td>{{$aqis->no2}}</td>
                <td>{{$aqis->aqi}}</td>
                <td></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </fieldset>
  </div>
</div>
    <!-- ya -->

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; CJ3 2018 August</p>
      </div>
    </footer>
    </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>