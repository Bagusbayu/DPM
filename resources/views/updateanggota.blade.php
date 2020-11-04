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
                <form role = "form" action="{{ route('vanggota.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class = "form-group">
                    <label for = "nama">Input Nama</label>
                    <input type = "text" class = "form-control" id = "nama" placeholder = "Input Nama" name = "nama" value="{{ $data->nama }}">
                </div>
                <div class = "form-group">
                    <label for = "jurusan">Input Jurusan</label>
                    <select class = "form-control" id="jurusan" name="jurusan">
                      <option value="Keperawatan">Keperawatan</option>
                      <option value="Kebidanan">Kebidanan</option>
                      <option value="TRR">TRR</option>
                      <option value="RNIK">RNIK</option>
                      <option value="Keperawatan Gigi">Keperawatan Gigi</option>
                      <option value="Analis Kesehatan">Analis Kesehatan</option>
                      <option value="Gizi">Gizi</option>
                      <option value="Kesehatan Lingkungan">Kesehatan Lingkungan</option>
                    </select>
                </div>
                <div class = "form-group">
                    <label for = "angkatan">Input Tahun Angkatan</label>
                    <input type = "text" class = "form-control" id = "angkatan" placeholder = "Input Tahun Angkatan" name = "angkatan" value="{{ $data->angkatan }}">
                </div>
                <div class = "form-group">
                <label for = "jurusan">Input Bagian </label>
                     <select class = "form-control" id="bagian" name="bagian">
                      <option value="AKD">AKD</option>
                      <option value="Pimpinan Dewan">Pimpinan Dewan</option>
                    </select>
                </div>
                <div class = "form-group">
                <label for = "jurusan">Input Struktur </label>
                     <select class = "form-control" id="struktur" name="struktur">
                      <option value="Ketua Umum">Ketua Umum</option>
                      <option value="Deputi I">Deputi I</option>
                      <option value="Deputi II">Deputi II</option>
                      <option value="Sekretaris Umum">Sekretaris Umum</option>
                      <option value="Staf Ahli Sekretaris Umum">Staf Ahli Sekretaris Umum</option>
                      <option value="Bendahara Umum">Bendahara Umum</option>
                      <option value="Komisi I">Komisi I</option>
                      <option value="Komisi II">Komisi II</option>
                      <option value="Komisi III">Komisi III</option>
                      <option value="Komisi IV">Komisi IV</option>
                    </select>
                </div>
                <div class = "form-group">
                <label for = "jurusan">Input Jabatan </label>
                     <select class = "form-control" id="jabatan" name="jabatan">
                      <option value="Ketua Umum">Ketua Umum</option>
                      <option value="Deputi I">Deputi I</option>
                      <option value="Deputi II">Deputi II</option>
                      <option value="Sekretaris Umum">Sekretaris Umum</option>
                      <option value="Staf Ahli Sekretaris Umum">Staf Ahli Sekretaris Umum</option>
                      <option value="Bendahara Umum">Bendahara Umum</option>
                      <option value="Koordinator">Koordinator</option>
                      <option value="Pengawasan BEM">Pengawasan BEM</option>
                      <option value="Hukum dan Perundangan">Hukum dan Perundangan</option>
                      <option value="Advokasi Kebijakan Direktorat">Advokasi Kebijakan Direktorat</option>
                      <option value="Jaringan Media">Jaringan Media</option>
                      <option value="Kebijakan Administrasi">Kebijakan Administrasi</option>
                      <option value="Kebijakan Jurusan dan Prodi">Kebijakan Jurusan dan Prodi</option>
                      <option value="Anggaran">Anggaran</option>
                      <option value="Hubungan Luar Negeri">Hubungan Luar Negeri</option>
                      <option value="Staf Ahli">Staf Ahli</option>
                    </select>
                </div>
                    <div class="form-group">
                        <label for="picto">Foto Lama:</label>
                        <img src="{{ url('uploads/file/'.$data->pict) }}" style="width: 150px; height: 150px;">
                    </div>
                    <div class = "form-group">
                        <label for = "pict">File input</label>
                        <input type = "file" id = "pict" name="pict">
                    </div>
                    <button type = "submit" class = "btn btn-default">Submit</button>
                    <a type="reset" class="btn btn-md btn-danger" href="{{route('vanggota.index')}}">Cancel</a>
                </form>
        </div>

    </section>
@endsection