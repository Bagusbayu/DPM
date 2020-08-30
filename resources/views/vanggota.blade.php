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
            <a type="button" class="btn btn-primary" href="{{url('inputanggota')}}">Input</a>
            <br><br>
            <table class = "table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Angkatan</th>
                    <th>Jabatan</th>
                    <th>Pict</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$datas->nama}}</td>
                        <td>{{$datas->jurusan}}</td>
                        <td>{{$datas->angkatan}}</td>
                        <td>{{$datas->jabatan}}</td>
                        <td><img src="{{ url('uploads/file/'.$datas->pict) }}" style="width: 150px; height: 150px;"></td>
                        <td>
                        <form action="{{ route('vanggota.destroy', $datas->id) }}" method="post">
                        <a href="{{ route('vanggota.edit',$datas->id) }}" type="Button" class="btn btn-link"> Update</a>
                         |      {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-link" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button> 
                            </form> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </section>

@endsection