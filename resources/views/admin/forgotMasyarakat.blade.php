<style>
html{
    /* background-color: #ffffff; */
    background-image: url('../../../../resources/images/bg.jpg');
    background-size: cover;

    color: #ffffff;
    font-family: 'Nexa-Bold';
    font-weight: 150;
    height: 100vh;
    margin: 0;

}
@font-face {
  font-family: 'Nexa-Bold';
  src: url('../../../../resources/fonts/Nexa-Bold.otf');
}
@font-face {
  font-family: 'Nexa-Regular';
  src: url('../../../../resources/fonts/Nexa-Light.otf');
}
h1{
  font-size: 30px;
  margin-left: 10px;
  text-align: center;
}
.content{
  z-index: 1;
  font-family: "Nexa-Regular";
  text-align: left;
  margin-top: 50px;
  margin-left: 300px;
  margin-right: 300px;
  padding: 10px;
  background: rgba(0,0,0,0.5);
}
.form-group{
  padding: 20px;
}
a{
  color: white;
  text-decoration: none;
}
.btn-submit {
  display: inline-block;
  float:right;
  background-color: #3385ff;
  color: white;
  font-size: 16px;
  border: none;
  padding: 15px;
  font-family: "Nexa-Regular";
  padding-right: 70px;
  padding-left: 70px;
  transition: all 0.5s;
  cursor: pointer;
}

.btn-submit span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.btn-submit span:after {
  content: '>>';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -40px;
  transition: 0.5s;
}

.btn-submit:hover span {
  padding-right: 25px;
}

.btn-submit:hover span:after {
  opacity: 1;
  right: 0;
}

.btn-cancel{
  box-sizing: border-box;
  background-color: #f44336;
  color: white;
  font-size: 16px;
  border: none;
  padding: 15px;
  font-family: "Nexa-Regular";
  padding-right: 70px;
  padding-left: 70px;
}
.btn-cancel:hover{
  box-shadow: 1px 1px 3px 3px #737373;
}
</style>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>RESET PASSWORD</h1>
            <hr>
            @if(\Session::has('error'))
                <div class="alert alert-danger">
                    <div>{{Session::get('error')}}</div>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('admin/masyarakat/forgot'.@$masyarakat->id_user) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input style="padding: 12px 20px;font-size: 16px;font-family:'Nexa-Regular';width: 100%;
                    margin: 8px 0;box-sizing: border-box;border: none;background: rgba(0,0,0,0);border-bottom: 2px solid grey;color:white;"
                     type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="cpassword">Password Confirmation:</label>
                    <input style="padding: 12px 20px;font-size: 16px;font-family:'Nexa-Regular';width: 100%;
                    margin: 8px 0;box-sizing: border-box;border: none;background: rgba(0,0,0,0);border-bottom: 2px solid grey;color:white;"
                    type="password" class="form-control" id="confirmation" name="confirmation">
                </div>
                <div class="form-group">
                  <button type="button"class="btn-cancel"><a href="{{url('admin/masyarakat')}}">Kembali</a></button>
                    <button type="submit" class="btn-submit" style="vertical-align:middle"><span>Selesai</span></button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
