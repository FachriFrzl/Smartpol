@extends('admin.layout.app')
@section('content')                  
                   
                <div class="d-flex flex-column-fluid">
									<div class="container">
								<div class="row">
									<div class="col-lg-4">
										<!--begin::Mixed Widget 14-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title font-weight-bolder">Statistik Pengunjung</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											{!! $chart->container() !!}
            									
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 14-->
									</div>
									<div class="col-lg-8">
										<!--begin::Advance Table Widget 4-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Data Anggota Terbaru</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm"></span>
												</h3>
                    								
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0 pb-3">
												<div class="tab-content">
													<!--begin::Table-->
													<div class="table-responsive">
														<table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
															<thead>
																<tr class="text-left text-uppercase">
																	<th style="min-width: 250px" class="pl-7">
																		<span class="text-dark-75">Nama</span>
																	</th>
																	<th style="min-width: 200px">Alamat</th>
																	<th style="min-width: 100px">Usia</th>
																	<th style="min-width: 130px">Gender</th>
																</tr>
															</thead>
															<tbody>
																@foreach($anggotas as $item)
																<tr>
																	<td class="pl-0 py-8">
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50 symbol-light mr-4">
																				<span class="symbol-label">
																					<img src="{{asset('storage/anggotas/'. $item -> image)}}" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																			<div>
																				<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$item -> name}}</a>
																			</div>
																		</div>
																	</td>
																	<td>
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$item -> alamat}}</span>
																	</td>
																	<td>
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{\Carbon\Carbon::parse($item->birth_date)->diffInYears(now())}} Tahun</span>
																	</td>
																	<td>
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$item -> gender}}</span>
																	</td>
																</tr>
																@endforeach
															</tbody>
														</table>
													</div>
													<!--end::Table-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 4-->
									</div>
								</div>
							</div>
							<script src="{{asset('assets/js/pages/features/charts/flotcharts.js')}}"></script>
							<script src="{{$chart->cdn()}}"> </script>
							{{$chart->script()}}

@endsection