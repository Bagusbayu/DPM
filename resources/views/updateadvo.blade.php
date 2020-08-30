@extends('base')
@section('content')
    <section class="main-section">

        <div class="container">
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
                <form role = "form" action="{{ route('vadvonews.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class = "form-group">
                    <label for = "nama">Input Judul</label>
                    <input type = "text" class = "form-control" id = "judul" placeholder = "Input Judul" name = "judul" value="{{ $data->judul }}">
                </div><div class="form-group">
                        <label for="picto">File Lama:</label>
                        <a src="{{ url('uploads/file/'.$data->file) }}">File lama</a>
                        <!-- <img src="{{ url('uploads/file/'.$data->file) }}" style="width: 150px; height: 150px;"> -->
                    </div>
                    <div class = "form-group">
                        <label for = "pict">File input</label>
                        <input type = "file" id = "file" name="file">
                    </div>
                    <button type = "submit" class = "btn btn-default">Submit</button>
                    <a type="reset" class="btn btn-md btn-danger" href="{{route('vadvonews.index')}}">Cancel</a>
                </form>
        </div>

    </section>
@endsection