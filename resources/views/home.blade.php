@include('layout.navbar')

@section('content')
@endsection

  <h1>{{$Textjudul}}</h1>


    <table class="center" border="1">
      <tr>
        <th>ID</th>
        <th>tanggal</th>
        <th>PASSWORD</th>
        <th>ISILAPORAN</th>
        <th>TELEPON</th>
        <th>TELEPON</th>
      </tr>
      @foreach($pengaduan as $pengaduan)
      <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td>{{$pengaduan->nik}}</td>
      <td>{{$pengaduan->isi_laporan}}</td>
      <td>{{$pengaduan->foto}}</td>
      <td>{{$pengaduan->status}}</td>
    </tr>
      <a href="/hapus-pengaduan/{{$pengaduan->id_ppengaduan}}">hapus</a>
      <a href="/detail-pebgauan/{{$pengaduan->id_pengaduan}}">detail</a>
    @endforeach

    </table>
