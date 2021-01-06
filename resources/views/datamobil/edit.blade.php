@extends('Layout.main')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Ubah Data Mobil</h3>
							</div>
							<div class="panel-body">
								<form action="{{route('mobil.update', $datamobil->id ) }}" method="POST">
						 	{{csrf_field()}}
						 		<div class="form-group">
									<label for="exampleInputEmail1" class="form-label">No. Plat</label>
									<input name="plat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. Plat" value="{{$datamobil->plat}}">
									</div>
									<div class="form-group">
										<label for="exampleFormControlSelect1">Jenis</label>
										<select name="jenis" class="form-control" id="exampleFormControllSelect1">
											<option value="Honda" @if($datamobil->jenis == 'Honda')selected @endif>Honda</option>
											<option value="Toyota" @if($datamobil->jenis == 'Toyota')selected @endif>Toyota</option>
											<option value="Daihatsu" @if($datamobil->jenis == 'Daihatsu')selected @endif>Daihatsu</option>
											<option value="Mitsubishi" @if($datamobil->jenis == 'Mitsubishi')selected @endif>Mitsubishi</option>
											<option value="Nissan" @if($datamobil->jenis == 'Nissan')selected @endif>Nissan</option>
										</select>
									</div>
									<div class="form-group">
									<label for="exampleInputEmail1" class="form-label">Merek</label>
									<input name="merek" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Merek" value="{{$datamobil->merek}}">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-label">Warna</label>
										<input name="warna" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Warna" value="{{$datamobil->warna}}">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-label">Tahun Keluaran</label>
										<input name="tahun_keluaran" type="number" min="1900" max="2021" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Keluaran" value="{{$datamobil->tahun_keluaran}}">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-label">Harga Sewa (MAKS/7hari)</label>
										<input name="harga_sewa" type="number" min="0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Sewa" value="{{$datamobil->harga_sewa}}">
									</div>
									<div class="form-group">
										<label for="exampleFormControlSelect1">Status</label>
										<select name="status" class="form-control" id="exampleFormControllSelect1">
											<option value="Tersedia" @if($datamobil->status == 'Tersedia')selected @endif>Tersedia</option>
											<option value="Tidak Tersedia" @if($datamobil->status == 'Tidak Tersedia')selected @endif>Tidak Tersedia</option>
										</select>
									</div>
				      		</div>
				      			<div class="modal-footer">
						        <button type="submit" class="btn btn-warning btn-lg">Update</button>
						        </form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop




