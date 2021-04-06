@extends('layouts.layout')
@section('title', 'Ticket Booking|Movie New')
@section('content')
 <section class="content-header">
          <h1>
            Movie
            <small>Add New</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Movie</a></li>
            <li class="active">Add New</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
           @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
          <div class="row">
          
            <div class="col-md-12 ">
              <!-- general form elements -->
              <div class="box box-primary">
                
                <!-- form start -->
                <form method="post" id="form" action="{{url('/movie')}}" enctype="multipart/form-data"  >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="box-body">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="name">Movie Name</label>
                          <input type="text" required="" value="{{ old('title') }}" class="form-control" id="name" name="title" placeholder="Name">
                        </div>
                    </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                          <label for="name">Theater Name</label>
                          <select name="theater_id" class="form-control" required="">
                            <option>
                              Select One
                            </option>
                            @foreach($result as $res)
                            <option @if(old('theater_id')==$res->id) selected @endif value="{{$res->id}}">{{$res->name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="datepicker">Start Date</label>
                          <input type="text"  id="datepicker" value="{{ old('start_date') }}" readonly="" required="" class="form-control"  name="start_date" placeholder="Start Date">
                        </div>
                    </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                          <label for="name">End Date</label>
                          <input type="text" readonly="" value="{{ old('end_date') }}"  id="datepicker1" required="" class="form-control" id="name" name="end_date" placeholder="End Date">
                        </div>
                    </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                          <label for="img">Upload Image</label>
                          <input type="file"  id="img"  required="" class="form-control"  name="img">
                        </div>
                    </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
          
                </div><!-- /.box-body -->
              </div><!-- /.box -->
             <!-- /.row -->
        </section><!-- /.content -->
      
 @stop
