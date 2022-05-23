@extends('layouts.main')
@section('container')

<?php
	// $sumber_positif = 'https://api.kawalcorona.com/positif';
	// $konten_positif = file_get_contents($sumber_positif);
	// $data_positif = json_decode($konten_positif, true);

	// $sumber_sembuh = 'https://api.kawalcorona.com/sembuh';
	// $konten_sembuh = file_get_contents($sumber_sembuh);
	// $data_sembuh = json_decode($konten_sembuh, true);

	// $sumber_meninggal = 'https://api.kawalcorona.com/meninggal';
	// $konten_meninggal = file_get_contents($sumber_meninggal);
	// $data_meninggal = json_decode($konten_meninggal, true);

	// $sumber_indonesia = 'https://api.kawalcorona.com/indonesia';
	// $konten_indonesia = file_get_contents($sumber_indonesia);
	// $data_indonesia = json_decode($konten_indonesia, true);

	// $sumber_prov = 'https://data.covid19.go.id/public/api/prov.json';
	// $konten_prov = file_get_contents($sumber_prov);
	// $data_prov = json_decode($konten_prov, true);


//  ddd($data_prov);
?>

	<section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
			<div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
			<div class="col-auto col-md-4 col-lg-auto text-xl-start">
				<div class="d-flex flex-column align-items-center">
					<div class="">
						<h2 class="text-center">Data Coronavirus Dunia & Indonesia Terupdate</h2>
							<!-- ROW-1 OPEN -->
							<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-danger img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font">{{ $positif['value'] }}</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"><img src="./assets/img/icons/icon_mata_cuek.png" width="50" height="50"/> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-success img-card box-secondary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL SEMBUH</p>
												<h2 class="mb-0 number-font">{{ $sembuh['value'] }}</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"><img src="./assets/img/icons/icon_love.png" width="50" height="50"/></div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-secondary img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL MENINGGAL</p>
												<h2 class="mb-0 number-font">{{ $meninggal['value'] }}</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"><img src="./assets/img/icons/icon_sakit.png" width="50" height="50"/> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-primary img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<h2 class="mb-0 text-white">INDONESIA</h2>
												   
												<p class="text-white mb-0"><b>{{ $indo[0]['positif'] }}</b> POSITIF, <b>{{ $indo[0]['sembuh'] }}</b> SEMBUH, <b>{{ $indo[0]['meninggal'] }}</b> MENINGGAL</p>, <b>{{ $indo[0]['dirawat'] }}</b> DIRAWAT</p>
											</div>
											
											<div class="ml-auto"> <img src="./assets/img/icons/icon_mata_love.png" width="50" height="50"/> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 CLOSED -->
						<div class="col text-center"><p>Update data terakhir : {{ $indo2['lastUpdate'] }}</p></div>
					</div>
				</div>
			</div>
			</div>
        </div>
    </section>


		<!-- ============================================-->
	<!-- <section> begin ============================-->
	<section class="py-5" id="departments">

		<div class="container">
			<div class="row">
			<div class="col-12 py-3">
				<div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/bg-departments.png);background-position:top center;background-size:contain;">
				</div>
				<!--/.bg-holder-->

				<h1 class="text-center">DATA KASUS DI INDONESIA</h1>
			</div>
			</div>
		</div>
		<!-- end of .container-->

	</section>
	<!-- <section> close ============================-->
	<!-- ============================================-->




	<!-- ============================================-->
	<!-- <section> begin ============================-->
	<section class="py-0">

		<div class="container">
			<div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
			<div class="col-auto col-md-4 col-lg-auto text-xl-start">
				<div class="d-flex flex-column align-items-center">
					<div class="table-responsive service">
						<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
							<thead>
								<tr>
									<th class="atasbro">No.</th>
									<th class="atasbro">Provinsi</th>
									<th class="atasbro">Jumlah kasus</th>
									<th class="atasbro">Jumlah Dirawat</th>
									<th class="atasbro">Jumlah Sembuh</th>
									<th class="atasbro">Jumlah Meninggal</th>
								</tr>
							</thead>
							<tbody>
								@php
									$n = 0;
								@endphp  
							@foreach($data as $data_c)
								@php
									$n++;
								@endphp  
								<tr>
									<td>{{ $n; }}</td>
									<td>{{ $data_c['provinsi'] }}</td>
									<td>{{ $data_c['kasus'] }}</td>
									<td>{{ $data_c['dirawat'] }}</td>
									<td>{{ $data_c['sembuh'] }}</td>
									<td>{{ $data_c['meninggal'] }}</td>
								</tr>
							@endforeach
								
							</tbody>
						</table>

					</div>
				</div>
			</div>
			</div>
		</div>
		<!-- end of .container-->

	</section>
	<!-- <section> close ============================-->
	<!-- ============================================-->

<!-- footers ========================= -->
	<section class="bg-primary">
		<div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/cta-bg.png);background-position:center right;margin-top:-8.125rem;background-size:contain;">
		</div>
		<!--/.bg-holder-->

		<div class="container">
			<div class="row">
			<div class="col-lg-6">
				<h2 class="fw-bold text-light">Dapatkan pembaruan setiap minggu</h2>
				<p class="text-soft-primary">Cek Covid dibuat untuk memberitahu seputar Coronavirus di Indonesia</p>
			</div>
			<div class="col-lg-6">
				<h5 class="mb-3 text-soft-primary">BERLANGGANAN NEWSLETTER</h5>
				<form class="row gx-2 gy-2 align-items-center">
				<div class="col">
					<div class="input-group-icon">
					<label class="visually-hidden" for="inputEmailCta">Address</label>
					<input class="form-control form-livedoc-control form-cta-control text-soft-primary" id="inputEmailCta" type="email" placeholder="Email" />
					</div>
				</div>
				<div class="d-grid gap-3 col-sm-auto">
					<button class="btn btn-lg btn-light rounded-3 px-5 py-3" type="submit">BERLANGGANAN</button>
				</div>
				</form>
			</div>
			</div>
		</div>
	</section>
    
@endsection  