@extends('layouts.main')
@section('container')


<?php
	$sumber_positif = 'https://api.kawalcorona.com/positif';
	$konten_positif = file_get_contents($sumber_positif);
	$data_positif = json_decode($konten_positif, true);

	$sumber_sembuh = 'https://api.kawalcorona.com/sembuh';
	$konten_sembuh = file_get_contents($sumber_sembuh);
	$data_sembuh = json_decode($konten_sembuh, true);

	$sumber_meninggal = 'https://api.kawalcorona.com/meninggal';
	$konten_meninggal = file_get_contents($sumber_meninggal);
	$data_meninggal = json_decode($konten_meninggal, true);

	$sumber_indonesia = 'https://api.kawalcorona.com/indonesia';
	$konten_indonesia = file_get_contents($sumber_indonesia);
	$data_indonesia = json_decode($konten_indonesia, true);

	$sumber_prov = 'https://data.covid19.go.id/public/api/prov.json';
	$konten_prov = file_get_contents($sumber_prov);
	$data_prov = json_decode($konten_prov, true);


//  ddd($data_prov);
?>

                <!--app-content open-->
				<div class="container app-content">
					<div class="">

<div class="jumbotron">
	<div class="container">
		<p class="lead m-0 text-center">Coronavirus Global & Indonesia Live Data</p>
	</div>
</div>
						<!-- PAGE-HEADER END -->

						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-danger img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font"><?php echo $data_positif['value'] ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="../uploads/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
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
												<h2 class="mb-0 number-font"><?php echo $data_sembuh['value'] ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="../uploads/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
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
												<h2 class="mb-0 number-font"><?php echo $data_meninggal['value'] ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="../uploads/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-primary img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<h2 class="mb-0 number-font">INDONESIA</h2>
												   
												<p class="text-white mb-0"><b><?php echo $data_indonesia['0']['positif'] ?></b> POSITIF, <b><?php echo $data_indonesia['0']['sembuh'] ?></b> SEMBUH, <b><?php echo $data_indonesia['0']['meninggal'] ?></b> MENINGGAL</p>
											</div>
											
											<div class="ml-auto"> <img src="../uploads/indonesia-PZq.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row row-cards">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
									</div>
									<div class="card-body">
										<div class="">
											<table class="table table-hover table-bordered table-stripped" id="example2">
												<thead>
													<tr>
														<th class="atasbro">No.</th>
														<th class="atasbro">Provinsi</th>
														<th class="atasbro">Positif</th>
														<th class="atasbro">Sembuh</th>
														<th class="atasbro">Meninggal</th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>&nbsp;</td>
														<td><?php echo $data_prov['list_data']['0']['key'] ?></td>
														<td>49,884,588</td>
														<td>0</td>
														<td>797,179</td>
													</tr>
												</tbody>
											</table>
											

										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row row-cards">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title">Kasus Coronavirus Global</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive service">
											<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
												<thead>
													<tr>
														<th class="atasbro">NO.</th>
														<th class="atasbro">Negara</th>
														<th class="atasbro">Positif</th>
														<th class="atasbro">Sembuh</th>
														<th class="atasbro">Meninggal</th>
													</tr>
												</thead>
												<tbody>
													  
													<tr>
														<td>&nbsp;</td>
														<td>US</td>
														<td>49,884,588</td>
														<td>0</td>
														<td>797,179</td>
													
													</tr>
													
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 CLOSED -->
				</div>
				<!-- CONTAINER CLOSED -->
@push('js')
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
    </script>
@endpush
@endsection  