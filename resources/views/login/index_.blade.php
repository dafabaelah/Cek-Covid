@extends('layouts.main')

@section('container')

<section class="py-5">

  <div class="container">
    <div class="row">
    <div class="col-12 py-3">
      <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
      </div>
      <!--/.bg-holder-->

      <h1 class="text-center">LOGIN</h1>
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
            @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

          <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Silahkan Masuk</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating mb-4">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus required value="{{ old('email') }}">
                <label for="email" class="form-label">Alamat Email</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating mb-4">
                <input type="password" name="password" class="form-control" id="password" required>
                <label for="password" class="form-label">Kata Sandi</label>
              </div>
              <button class="btn btn-primary rounded-pill" type="submit">Masuk</button>
            </form>
            <small class="d-block text-center mt-3 link-light">Belum Terdaftar ? <a href="/register" class="link-light">Daftar Sekarang !</a></small>
          </main>
        </div>
      </div>
    </div>
</section>

@endsection