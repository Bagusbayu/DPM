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
                <form role = "form" action="{{ route('vaktivitasdpm.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class = "form-group">
                    <label for = "judul">Input judul</label>
                    <input type = "judul" class = "form-control" id = "judul" placeholder = "Input judul" name = "judul" value="{{ $datas->judul }}">
                </div>
				<div class = "form-group">
                    <label for = "Deskripsi">Input Deskripsi</label>
                    <textarea type = "Deskripsi" class = "form-control" id = "Deskripsi" placeholder = "Input Deskripsi" name = "Deskripsi" value="{{ $datas->Deskripsi }}"></textarea>
                </div>
                <div class="form-group">
                        <label for="picto">File Lama:</label>
                        <img src="{{ url('uploads/file/'.$data->pict) }}" style="width: 150px; height: 150px;">
                    </div>
                    <div class = "form-group">
                        <label for = "pict">File input</label>
                        <input type = "file" id = "file" name="file">
                    </div>
                    <button type = "submit" class = "btn btn-default">Submit</button>
                    <a type="reset" class="btn btn-md btn-danger" href="{{route('vaktivitasdpm.index')}}">Cancel</a>
                </form>
        </div>

    </section>
@endsection