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
           <form role = "form" action="/show/proses" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class = "form-group">
                   <label for = "pict">Text Input</label>
                   <textarea type = "text" class="ckeditor form-control" id = "visit" placeholder = "Input About" name="visit"></textarea>
                </div>
                <button type = "submit" class = "btn btn-default">Submit</button>
                <a type="reset" class="btn btn-md btn-danger" href="{{url('visit')}}">Cancel</a>
             </form>
            <br><br>
            <table class = "table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Text</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{!!$datas->visit!!}</td>
                        <td><a class="btn btn-danger" href="/show/hapus/{{ $datas->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection