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
            <a type="button" class="btn btn-primary" href="{{url('inputphukum')}}">Input</a>
            <br><br>
            <table class = "table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$datas->nama}}</td>
                        <td><a href="{{ url('uploads/file/'.$datas->file) }}" type="Button" class="btn btn-link"> Download </a>
                        </td>
                        <!-- <td><img src="{{ url('uploads/file/'.$datas->file) }}" style="width: 150px; height: 150px;"></td> -->
                        <td>
                        <form action="{{ route('vphukum.destroy', $datas->id) }}" method="post">
                        <a href="{{ route('vphukum.edit',$datas->id) }}" type="Button" class="btn btn-link"> Update</a>|
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-link" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button> 
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection