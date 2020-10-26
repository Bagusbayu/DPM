@extends('base')
@section('content')
  <section class="main-section">
        <div class="container">
        @if(Session::has('alert-success'))
                <div class="alert alert-success">
                   <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong> 
                </div>
        @endif
           <hr>
           <form role = "form" action="/upload/proses" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class = "form-group">
                   <label for = "pict">File input</label>
                   <input type = "file" id = "photo" name="photo">
                </div>
                <button type = "submit" class = "btn btn-default">Submit</button>
                <a type="reset" class="btn btn-md btn-danger" href="{{url('photovmdpm')}}">Cancel</a>
             </form>
            <br><br>
            <table class = "table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>photo</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{$no++}}</td>
                        <td><img src="{{ url('uploads/file/'.$datas->photo) }}" style="width: 150px; height: 150px;"></td>
                        <td><a class="btn btn-danger" href="/upload/hapus/{{ $datas->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection