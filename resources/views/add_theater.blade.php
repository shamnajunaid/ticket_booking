@extends('layouts.layout')
@section('title', 'Ticket Booking|Theater New')
@section('content')
 <section class="content-header">
          <h1>
            Theater
            <small>Add New</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Theater</a></li>
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
                <form method="post" id="form" action="{{url('/theater')}}" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="box-body">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="name">Theater Name</label>
                          <input type="title" required="" value="{{ old('name') }}" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="name">No of seats</label>
                          <input type="title" value="{{ old('no_seats') }}" required="" class="form-control" id="name" name="no_seats" placeholder="Title">
                        </div>
                    </div>
                    <div id="customFields">
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="name">Time</label>
                          <input type="title" value="{{ old('no_seats') }}" required="" class="form-control timepicker" id="name" name="time[]" placeholder="Title"> 

                        </div>
                        <div class="form-group col-md-6">  <a href="javascript:void(0);" id="addCF">Add</a> </div>
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