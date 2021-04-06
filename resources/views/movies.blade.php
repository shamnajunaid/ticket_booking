@extends('layouts.layout')
@section('title', 'Ticket Booking|Theater List')
@section('content')
 
  <section class="content">
        <div class="row">
          <div class="col-md-12">
            <h2>Movies List</h2>
            <span class="pull-right">
            
            <a href="movie/create">Add</button>

                </span>
          </div>
        </div>
      
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  
                  <div class="box-tools">
                    <div class="input-group">
                     
                     
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Theater</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Image</th>
                    </tr>
                    @foreach($result as $res)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{$res->title}}</td>
                      <td>{{$res->theater->name}}</td>
                      <td>{{ \Carbon\Carbon::parse($res->start_date)->format('d-m-Y')}}</td>
                      <td>{{ \Carbon\Carbon::parse($res->end_date)->format('d-m-Y')}}</td>
                      <td><img height="100" width="100" src="{{ asset('public/movies/'.$res->img)}}"></td>
                    </tr>
                    @endforeach
                  </table>

                </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                  {{ $result->links() }}
                </div>
              </div>
              </div><!-- /.box -->
            </div>

          </div>
        </section><!-- /.content -->
      @stop