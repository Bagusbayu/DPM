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
            <form role = "form" action="{{ route('vmdpm.store') }}" method="post">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "name">Input Visi </label>
                    <input type = "text" class = "form-control" id="visi" placeholder = "Input Visi" name="visi">
                </div>
                <div class = "form-group">
                    <label for = "misi">Input Misi </label>
                    <textarea type = "text" class = "form-control" id = "misi" placeholder = "Input Misi" name="misi"></textarea>
                </div><!--
                <div class = "form-group">
                    <label  for = "password">Masukan Password</label>
                    <input type = "text" class = "form-control" id = "password" placeholder = "Masukan Password" name="password">
                </div> -->
                <button type = "submit" class = "btn btn-default">Submit</button>
                <a type="reset" class="btn btn-md btn-danger" href="{{route('vmdpm.index')}}">Cancel</a>
            </form>
        </div>
    </section>
@endsection