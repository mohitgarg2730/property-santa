@extends('backend.layouts.index')


@section('content')
    <div class="container mt-5">
     
            <div class="row">
                <div class="mb-6 col-sm-6">
                    <label for="exampleInputtext1" class="form-label">I want to lease my : </label>
                    <input type="text" class="form-control" value={{ $inquirys->step_1 }} readonly id="exampleInputtext1" aria-describedby="textHelp">
                </div>
                <div class=" col-sm-6 mb-6">
                    <label for="exampleInputtext1" class="form-label">Residential Rentals Is this a</label>
                    <input type="text" class="form-control" value={{ $inquirys->step_2 }} readonly id="exampleInputtext1">
                </div>
            </div>
            <div class="row">
                <div class="mb-6 col-sm-6">
                    <label for="exampleInputtext1" class="form-label">What is your desired lease term? </label>
                    <input type="text" class="form-control" id="exampleInputtext1" value={{ $inquirys->step_3 }} readonly aria-describedby="textHelp">
                </div>
                <div class=" col-sm-6 mb-6">
                    <label for="exampleInputtext1" class="form-label">User Price
                    </label>
                    <input type="text" class="form-control" value={{ $inquirys->user_rate }} readonly id="exampleInputtext1">
                </div>
            </div>
            <div class="row">
                <div class="mb-6 col-sm-6">
                    <label for="exampleInputtext1" class="form-label">Address </label>
                    <input type="text" class="form-control" id="exampleInputtext1" value={{ $inquirys->user_address }} readonly aria-describedby="textHelp">
                </div>
                <form method="POST" action="{{ url('admin/inquerysetprice/') }}/{{ $inquirys->id }}">
                  @csrf

                  <div class=" col-sm-6 mb-6">
                    <label for="exampleInputtext1" class="form-label">Please Enter a price
                    </label>
                    <input type="text" class="form-control" name="adminPrice" id="exampleInputtext1" value="{{ (!empty($inquirys->admin_price)?$inquirys->admin_price:'' ) }}" required>
                </div>
                
            <input type="submit" value="submit">
              </form>     
            
            
              </div>


    </div>
@stop
