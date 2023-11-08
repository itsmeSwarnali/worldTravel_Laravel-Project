@extends('adminPanel.master')
@section('main_content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Admin Panel</h2>


              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{route('addPlaces')}}" class="btn btn-info">Add Countries</a>
                </div>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Country Name</th>
                        <th>Places Name</th>
                        <th>Images</th>
                        <th>Expense</th>
                        <th>Action</th>


                    </tr>
                </thead>

                <tbody>
                    <?php $i=0 ?>
                    @foreach($newPlacesList as $value)
                        <tr>
                            <td>{{$loop -> iteration}}</td>
                            <td>{{$value -> countryName}}</td>
                            <td>{{$value -> placeName}}</td>
                            <td><img src="{{asset($value->Image)}}" width="35px"  height="40px"  alt="no img"></td>
                            <td>{{$value -> Expense}}</td>
                            <td>
                                <a type="button" href="{{route('deleteCountry',$value -> id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



@endsection
