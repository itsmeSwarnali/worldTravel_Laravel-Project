@extends('adminPanel.master')
@section('main_content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header bg-info">
                        <h3 class="card-title"><small>Our Popular</small> Places</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('newPlaces')}}" method="post" id="quickForm" enctype="multipart/form-data">
                            @csrf
                        <div class="card-body">

                            <div class="form-group">

                                <label for="exampleInputPassword1">Country Name</label>
                                <input type="text" name="country_name" class="form-control" id="exampleInputPassword1" >

                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Place Name</label>
                                <input type="text" name="place_name_oc" class="form-control" id="exampleInputPassword1" >

                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Image</label>
                                <input type="file" name="image" class="form-control" id="exampleInputPassword1" >

                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Expense</label>
                                <input type="number" name="expense" class="form-control" id="exampleInputPassword1" >

                            </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div><!--/.col (left) -->

                <!-- right column -->
                <div class="col-md-2">

                </div><!--/.col (right) -->

            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
@endsection
