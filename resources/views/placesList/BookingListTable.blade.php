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
                  <h4>Booking List</h4>
                </div>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
                <table class="table table-head-fixed text-nowrap" id="user_table">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>UserName</th>
                            <th>UserMail</th>
                            <th>UserAddress</th>
                            <th>UserConNum</th>
                            <th>BdDes</th>
                            <th>WorldDes</th>
                            <th>DepartDate</th>
                            <th>UserBudget</th>
                            <th>Member</th>
                            <th>PassImage</th>
                            <th>Msg</th>
                            <th>Status</th>

                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=0 ?>
                        @foreach($bookingListView as $value)
                            <tr>
                                <td>{{$loop -> iteration}}</td>
                                <td>{{$value -> UserName}}</td>
                                <td>{{$value -> UserEmail}}</td>
                                <td>{{$value -> UserAddress}}</td>
                                <td>{{$value -> UserConNum}}</td>
                                <td>{{$value -> BdDes}}</td>
                                <td>{{$value -> WorldDes}}</td>
                                <td>{{$value -> DepartDate}}</td>
                                <td>{{$value -> UserBudget}}</td>
                                <td>{{$value -> Member}}</td>
                                <td><img src="{{asset($value->PassImage)}}" width="35px"  height="40px"  alt="no img"></td>
                                <td>{{$value -> UserMsg}}</td>
                                <td>{{$value -> status}}</td>


                                <td>
                                    <a class="btn btn-success" href="{{route('changeStatus',$value->id)}}">Approval</a>

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
