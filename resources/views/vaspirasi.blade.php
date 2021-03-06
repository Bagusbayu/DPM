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
            <!-- <a type="button" class="btn btn-primary" href="{{url('inputormawa')}}">Input</a> -->
            <br><br>
            <table class = "table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>NIM</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                    <th>Message</th>
                    <!-- <th>Action</th> -->
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$datas->name}}</td>
                        <td>{{$datas->nim}}</td>
                        <td>{{$datas->email}}</td>
                        <td>{{$datas->jurusan}}</td>
                        <td>{{$datas->prodi}}</td>
                        <td>{{$datas->angkatan}}</td>
                        <td>{{$datas->message}}</td>
                        <td>
                         <!-- <a href="{{ route('vormawa.edit',$datas->id) }}" type="Button" class="btn btn-link"> Update</a> -->
                            <!-- <form action="{{ route('vanggota.destroy', $datas->id) }}" method="post">
                                <a href="{{ route('vanggota.edit',$datas->id) }}" type="Button" class="btn btn-link"> Update</a> |
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-link" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button> 
                            </form> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
             <div class="text-center">
                {!! $data->links(); !!}
            </div>
        </div>
    </section>

@endsection