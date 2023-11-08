<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Status</title>


  <!---bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css"/>


  <style>
      .status{
          background-color: #1fa165!important;
          width: 130px;

      }
  </style>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Place in Bangladesh</th>
                <th scope="col">Country</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=0 ?>
                    @foreach($bookingStatus as $value)
                        <tr>
                            <td>{{$loop -> iteration}}</td>
                            <td>{{$value -> BdDes}}</td>
                            <td>{{$value -> WorldDes}}</td>
                            <td>{{$value -> FlyingDate}}</td>

                            <td class="status">
                                {{$value -> status}}
                            </td>

                        </tr>
                    @endforeach
            </tbody>
          </table>

        </div><!--col-md-8-->
        <div class="col-md-2"></div>
      </div><!--row-->
    </div><!--container-->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
