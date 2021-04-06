@extends('layouts.layout')
@section('title', 'Ticket Booking|Theater List')
@section('content')
 
  <section class="content">
        <div class="row">
          <div class="col-md-12">
            <h2>Theater List</h2>
            <span class="pull-right">
            
            <a href="theater/create">Add</button></a>

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
                      <th>No OF Seats</th>
                      <th>Show Times</th>
                    </tr>
                    @foreach($result as $res)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{$res->name}}</td>
                      <td>{{$res->no_seats}}</td>
                      <td>
                        <ul>
                          @foreach($res->timings as $time)
                          <li>{{$time->show_time}}</li>
                          @endforeach
                        </ul>
                        </td>
                      
                    </tr>
                    @endforeach
                  </table>

                </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                      <div class="pull-right">
                        {{ $result->links() }}
                      </div>
                  
                </div>
              </div>
              </div><!-- /.box -->
            </div>

          </div>
        </section><!-- /.content -->
      @stop