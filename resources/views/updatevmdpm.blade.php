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
            @foreach($data as $datas)
                <form role = "form" action="{{ route('vmdpm.update', $datas->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class = "form-group">
                    <label for = "nama">Input Visi</label>
                    <input type = "text" class = "form-control" id = "visi" placeholder = "Input Visi" name = "visi" value="{{ $datas->visi }}">
                </div>
                <div class = "form-group">
                    <label for = "misi">Input Misi</label>
                    <input type = "text" class = "form-control" id = "misi" placeholder = "Input Misi" name = "misi" value="{{ $datas->misi }}">
                </div>
                <!--<div class = "form-group">
                    <label  for = "password">Input Password</label>
                    <input type = "text" class = "form-control" id = "password" placeholder = "Input Password" name="password" value="{{ $datas->password }}">
                </div> -->
                    <button type = "submit" class = "btn btn-default">Submit</button>
                    <a type="reset" class="btn btn-md btn-danger" href="{{route('vmdpm.index')}}">Cancel</a>
                </form>
            @endforeach
        </div>

    </section>
@endsection