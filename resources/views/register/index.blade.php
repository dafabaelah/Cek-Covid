@extends('layouts.main')

@section('container')


<section class="py-5">

  <div class="container">
    <div class="row">
    <div class="col-12 py-3">
      <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
      </div>
      <!--/.bg-holder-->

      <h1 class="text-center">Register</h1>
    </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<section class="bg-secondary">
  <div class="bg-holder" style="background-image:url(assets/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;"></div>
    <!--/.bg-holder-->

    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 col-xxl-6"></div>
          <div class="col-md-7 col-xxl-6 text-center text-md-start">

          <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Silahkan Buat Akun</h1>
            <form action="/register" method="post">
              @csrf
              <div class="form-floating mb-3">
                <input type="name" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name"  required value="{{ old('name') }}">
                <label for="name">Nama</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror          
              </div>
              <div class="form-floating mb-3">
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username"  required value="{{ old('username') }}">
                <label for="username">Nama Panggilan</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror    
              </div>
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"  required value="{{ old('email') }}">
                <label for="floatingInput">Alamat Email</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror    
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"  required>
                <label for="password">Kata Sandi</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror    
              </div>
              <button class="btn btn-primary rounded-pill" type="submit">Daftar Sekarang</button>
            </form>
            <small class="d-block text-center mt-3 link-light">Sudah memiliki akun ? <a href="/login" class="link-light">Login Sekarang !</a></small>
          </main>
        </div>
      </div>
    </div>
</section>

@endsection