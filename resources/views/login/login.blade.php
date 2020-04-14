@extends('base')
@section('content')
    <!-- Main Section -->

    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">

            <!-- Remove This Before You Start -->
            <h1>LOGIN</h1>
            <hr>
            @if(\Session::has('error'))
                <div class="alert alert-danger">
                    <div>{{Session::get('error')}}</div>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <div>{{Session::get('success')}}</div>
                </div>
            @endif
            <form action="{{ url('/loginPost') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <p>Username</p>
                    <input type="username" class="form-control" id="username" name="username" style="padding: 12px 20px;font-size: 16px;font-family:'Nexa-Regular';width: 100%;
                    margin: 8px 0;box-sizing: border-box;border: none;background: rgba(0,0,0,0);border-bottom: 2px solid grey;color:white;">
                </div>
                <div class="form-group">
                  <p>Password</p>
                    <input type="password" class="form-control" id="password" name="password" style="padding: 12px 20px;font-size: 16px;font-family:'Nexa-Regular'; width: 100%;
                    margin: 8px 0;box-sizing: border-box;border: none;background: rgba(0,0,0,0);border-bottom: 2px solid grey;color:white;"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-login">Login</button>
                </div>
            </form>
        </div>
        <div>
          <p style="text-align:center">
            &copy 2020 PLIKEMAS
          </p>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
