@extends('Layout.main')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Mobil</h3>
									<div class="navbar-btn navbar-btn-right">
										<a class="btn btn-success btn btn-sm" data-toggle="modal"data-target="#exampleModal"><i class="fa fa-plus"></i> <span>Tambah Data Mobil</span></a>
									</div>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<TH>No. Plat</TH>
											<TH>Jenis</TH>
											<TH>Merek</TH>
											<TH>Warna</TH>
											<th>Tahun Keluaran</th>
											<th>Harga Sewa (/7hari)</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@foreach($data_datamobil as $datamobil)
										<tr>
											<td> {{ $datamobil->plat }} </td>
											<td> {{ $datamobil->jenis }} </td>
											<td> {{ $datamobil->merek }} </td>
											<td> {{ $datamobil->warna }} </td>
											<td> {{ $datamobil->tahun_keluaran }} </td>
											<td> {{ $datamobil->harga_sewa }} </td>
											<td> {{ $datamobil->status }} </td>
											<td>
												<a href="{{route('mobil.edit', $datamobil->id ) }}" class="btn btn-warning btn-sm lnr lnr-pencil"> Edit</a>
												<a href="{{route('mobil.delete', $datamobil->id ) }}" class="btn btn-danger btn-sm lnr lnr-trash" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')"> Delete</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
				    <h3 class="modal-title" id="exampleModalLabel">Tambah Mobil</h3>
				</div>
				<div class="modal-body">
					<form action="{{route('mobil.create') }}" method="POST">
					{{csrf_field()}}
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">No. Plat</label>
						<input name="plat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. Plat">
						</div>
						<div class="form-group">
							<label for="exampleFormControlSelect1">Jenis</label>
							<select name="jenis" class="form-control" id="exampleFormControllSelect1">
								<option value="Honda">Honda</option>
								<option value="Toyota">Toyota</option>
								<option value="Daihatsu">Daihatsu</option>
								<option value="Mitsubishi">Mitsubishi</option>
								<option value="Nissan">Nissan</option>
							</select>
						</div>
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Merek</label>
						<input name="merek" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Merek">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Warna</label>
							<input name="warna" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Warna">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Tahun Keluaran</label>
							<input name="tahun_keluaran" type="number" min="1900" max="2021" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Keluaran">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">Harga Sewa (/7hari)</label>
							<input name="harga_sewa" type="number" min="0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Sewa">
						</div>
						<div class="form-group">
							<label for="exampleFormControlSelect1">Status</label>
							<select name="status" class="form-control" id="exampleFormControllSelect1">
								<option value="Tersedia">Tersedia</option>
								<option value="Tidak Tersedia">Tidak Tersedia</option>
							</select>
						</div>
			    </div>
				    <div class="modal-footer">
				    	<button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-success">Submit</button>
				        </form>
				    </div>
				</div>
				</div>
@stop
