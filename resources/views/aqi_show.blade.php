<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- d3js -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <center>
    <!-- ya -->
    <div class="well form-horizontal col-md-9">
    <fieldset>

      <!-- title -->
      <legend>
        <b>show</b>

      </legend>

      <!-- course table -->
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>id</th>
              <!-- <th>date</th> -->
              <th>o3</th>
              <th>pm25</th>
              <th>pm10</th>
              <th>co</th>
              <th>so2</th>
              <th>no2</th>
              <th>aqi</th>
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
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </fieldset>
  </div>
</div>
    <!-- ya -->
    </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>