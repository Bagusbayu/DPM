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
            <form role = "form" action="{{ route('vphukum.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "name">Input Nama</label>
                    <input type = "text" class = "form-control" id="nama" placeholder = "Input Nama" name="nama">
                </div>
                <div class = "form-group">
                   <label for = "pict">File input</label>
                   <input type = "file" id = "file" name="file">
                </div>
                <button type = "submit" class = "btn btn-default">Submit</button>
                <a type="reset" class="btn btn-md btn-danger" href="{{route('vphukum.index')}}">Cancel</a>
            </form>
        </div>
    </section>

@endsection