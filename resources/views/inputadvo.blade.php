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
            <form role = "form" action="{{ route('vadvonews.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "name">Input Judul</label>
                    <input type = "text" class = "form-control" id="judul" placeholder = "Input Judul" name="judul">
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