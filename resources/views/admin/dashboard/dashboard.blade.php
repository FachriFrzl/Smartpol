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
												<h3 class="card-title font-weight-bolder">Data Per Gender</h3>
											</div>
											{!! $chart1->container() !!}
										  </div>
										</div>
									<div class="col-lg-8">
										<!--begin::Mixed Widget 14-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title font-weight-bolder">Data Per Kota/Kabupaten</h3>
											</div>
											{!! $chart2->container() !!}
										</div>
									</div>
								 </div>
								 <div class="row">
									<div class="col">
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title font-weight-bolder">Data Per Kecamatan</h3>
											</div>
											{!! $chart3->container() !!}
										</div>
									</div>
							   </div>
							</div>
				
							<script src="{{asset('assets/js/pages/features/charts/flotcharts.js')}}"></script>
							<script src="{{$chart1->cdn()}}"> </script>
							{{$chart1->script()}}
							<script src="{{$chart2->cdn()}}"> </script>
							{{$chart2->script()}}
							<script src="{{$chart3->cdn()}}"> </script>
							{{$chart3->script()}}
@endsection