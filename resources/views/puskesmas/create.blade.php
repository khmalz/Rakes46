@extends('layouts.dashboard')
@section('isi')

  <div class="main-content">
      <main>
        <div class="container" style="position: relative;">
    
    <form action="{{ route('puskesmas.store') }}" method="post" >
        @csrf
    
        <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="LocID" name="name" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Email</label>
            <input type="email" class="form-control" id="LocID" name="email" required>
        </div>
       
      
            <input type="hidden" class="form-control" id="ProdID" name="level" value="3" required>
       
        <div class="form-group">
            <label for="formGroupExampleInput">Password</label>
            <input type="password" class="form-control" id="ProdID" name="password" required>
        </div>

         <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
         <button type="reset" class="btn btn-danger mt-4">Reset</button>
    </form>
  </div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->






<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection