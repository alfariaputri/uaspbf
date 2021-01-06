@extends('Layout.main')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data Sewa</h3>
							<div class="navbar-btn navbar-btn-right">
								<a class="btn btn-success btn btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> <span>Tambah data Sewa</span></a>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<TH>Nama Penyewa</TH>
										<TH>Mobil</TH>
										<TH>Tanggal sewa</TH>
										<TH>Tanggal kembali</TH>
										<TH>durasi(7 hari)</TH>
										<th>Jaminan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($datasewa as $data_sewa)
									<tr>
										<td>{{ $data_sewa->user->nama }}</td>
										<td>{{ $data_sewa->mobil->merek }}</td>
										<td> {{ date('d-m-Y', strtotime($data_sewa->tanggal_sewa)) }} </td>
										<td> {{ date('d-m-Y', strtotime($data_sewa->tanggal_kembali))  }} </td>
										<td> {{ $data_sewa->durasi }} </td>
										<td> {{ $data_sewa->jaminan }} </td>
										<td>
											<a href="{{route('sewa.edit', $data_sewa->id ) }}" class="btn btn-warning btn-sm lnr lnr-pencil"> Edit</a>
											<a href="{{route('sewa.delete', $data_sewa->id ) }}" class="btn btn-danger btn-sm lnr lnr-trash" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')"> Delete</a>
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
				<h3 class="modal-title" id="exampleModalLabel">Tambah data Sewa</h3>
			</div>
			<div class="modal-body">
				<form action="{{route('sewa.create') }}" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="exampleFormControlSelect1">Nama Penyewa</label>
						<select name="id_user" class="form-control" id="exampleFormControllSelect1" required>
						@foreach ($data_penyewa as $data)
						<option value="{{ $data->id }}">{{ $data->nama }}</option>
						@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Mobil</label>
						<select name="id_mobil" class="form-control" id="exampleFormControllSelect1" required>
						@foreach ($data_mobil as $data)
						<option value="{{ $data->id }}">{{ $data->merek }}</option>
						@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="datetime" class="col-xl-2 col-form-label">Tanggal Sewa</label>
						<div class="col-xl-5">
							<input type="date" name="tanggal_sewa" id="datetime" class="form-control" required>
						</div>
					</div>
					{{-- <div class="form-group">
						<label for="datetime" class="col-xl-2 col-form-label">Tanggal Kembali</label>
						<div class="col-xl-5">
							<input type="date" name="tanggal kembali" id="datetime" class="form-control" required>
						</div>
					</div> --}}
					<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Durasi</label>
						<input name="durasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="7" readonly required>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Jaminan</label>
						<select name="jaminan" class="form-control" id="exampleFormControllSelect1" required>
							<option value="KTP">KTP</option>
							<option value="SIM">SIM</option>
							<option value="KK">KK</option>
							<option value="KTM">KTM</option>
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
