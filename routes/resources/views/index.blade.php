@extends('layout.main')
@section('content')
<div class="mt-3 d-flex">
  <h2>Pengambilan Sampah</h2>
</div>
  <a href="/create" class="btn btn-success fw-bold rounded-pill mt-3"><i class="bi bi-plus-lg">New Data</i></a>
<div class="container">
    <table class="table mt-5">
      <tr>
      <thead class="bg-dark text-white">
        <th>No</th>
        <th>Kepala Keluarga</th>
        <th>No Rumah</th>
        <th>Rt/Rw</th>
        <th>Total Karung Sampah</th>
        <th>Kriteria</th>
        <th>Tanggal Pengangkutan </th>
        <th>Action</th>
      </thead>
    </tr>
    <tbody>
     @foreach ($sampah as $item)
     <tr>
      <td class ="text-center">{{$loop->iteration}}</td>
      <td>{{$item['kepala_keluarga']}}</td>
      <td width="160" >{{$item['no_rumah']}}</td>
      <td class="text-center">{{$item['rt_rw']}}</td>
        <td>{{$item['total_karung_sampah']}}</td>
        <td width="100" class="text-center">{{$item['kriteria']}}</td>
        <td class="text-center">{{$item['tanggal_pengangkutan']}}</td>
      
       
        <td width="150">
        <form action="/sampah/delete/{{$item['id']}}" method="post" class="mt-3">
          <a href="/sampah/{{$item['id']}}" class="btn btn-primary bi bi-folder-check"></a> 
          <a href="/sampah/edit/{{$item['id']}}" class="btn btn-warning bi bi-pencil-square"></a> 
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger bi bi-trash3-fill "></button>
          @endforeach
        </form>
      </td>
    </tr>
    </tbody>
    </tr>
  </tbody>

  </table>
  </div>
    
      
@endsection