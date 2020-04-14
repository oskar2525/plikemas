@extends('admin.base')
@section('content')

<style media="screen">
@font-face {
  font-family: 'Nexa-Bold';
  src: url('../../../../resources/fonts/Nexa-Bold.otf');
}
@font-face {
  font-family: 'Nexa-Regular';
  src: url('../../../../resources/fonts/Nexa-Light.otf');
}
html{
  font-family: "Nexa-Regular";
}
.content{
  background: rgba(0,0,0,0.5);
  text-align: center;
  padding: 10px;
}

</style>

    @if(session('error'))
      <div class="">
        {{ session('error') }}
      </div>
    @endif

    @if(count($errors)>0)
      <div class="">
          <strong>Perhatian</strong>
          <br>
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
      </div>
    @endif

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>SUNTING PENGADUAN </h1>

            <form action="{{url('admin/tanggapan/editPost',@$tanggapan->id_pengaduan)}}" method="post" enctype="multipart/form-data">
    @csrf

      <div>
        <p> Tanggapan : </p><input style="padding: 12px 20px;font-size: 16px;font-family:'Nexa-Regular';width: 70%;
        margin: 8px 0;box-sizing: border-box;border: none;background-color: white;border-bottom: 2px solid grey;color:black;"
        type="text" name="tanggapan" id="tanggapan" value="{{old('tanggapan',@$tanggapan->tanggapan)}}"><br>
      </div>
      <button type="submit" style="background-color:#f44336;padding: 20px;margin-top: 10px;font-family:'Nexa-Regular';border:none;" >Kirim</button>
            </form>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
