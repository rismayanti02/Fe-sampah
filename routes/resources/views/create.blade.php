@extends('layout.main')
@section('title', 'create')

@section('content')

@if (Session::get('errors'))
    <p style="color: rgba(0, 17, 255, 0.219)">{{Session::get('errors')}}</p>
@endif


    <form action="{{ route('send') }}" method="POST">
@csrf
 <div class="container mt-4">
  <div class="form-group">
    <label for="Kepala Keluarga"> Kepala Keluarga</label>
    <input type="text" class="form-control" name="kepala_keluarga" id="kepala_keluarga" aria-describedby="emailHelp" placeholder=" kepala keluarga">
  </div>
  <br>
  <div class="form-group">
    <label for="no_rumah"> No Rumah</label>
    <input type="number" class="form-control" id="no_rumah" name="no_rumah" aria-describedby="emailHelp" placeholder=" No rumah">
  </div>
  <br>
  <div class="form-group">
    <label for="rt_rw"> Rt/Rw</label>
    <input type="text" class="form-control" id="rt_rw" name="rt_rw" placeholder="Rt Rw">
  </div>
  <br>
  <div class="form-group">
    <label for="total_karung_sampah">Total Karung</label>
    <input type="number" class="form-control" id="total_karung_sampah" name="total_karung_sampah" placeholder="total">
  </div>
  <br>
  <div class="form-group">
    <label for="tanggal_pengangkutan">Tanggal Pengangkutan</label>
    <input type="date" class="form-control" id="tanggal_pengangkutan" name="tanggal_pengangkutan" placeholder="pengangkutan ">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
 </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
@endsection