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
            <form role = "form" action="{{ route('vaktivitasdpm.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "judul">Input Judul</label>
                    <input type = "text" class = "form-control" id="judul" placeholder = "Input Judul" name="judul">
                </div>
                <div class = "form-group">
                    <label for = "Deskripsi">Input Deskripsi</label>
                    <textarea type = "text" class = "form-control" id="Deskripsi" placeholder = "Input Deskripsi" name="Deskripsi"> </textarea>
                </div>
                <div class = "form-group">
                   <label for = "pict">File input</label>
                   <input type = "file" id = "pict" name="pict">
                </div>
                <button type = "submit" class = "btn btn-default">Submit</button>
                <a type="reset" class="btn btn-md btn-danger" href="{{route('vaktivitasdpm.index')}}">Cancel</a>
            </form>
        </div>
    </section>

@endsection