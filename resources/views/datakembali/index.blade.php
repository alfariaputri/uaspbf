@extends('Layout.main')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data Kembali</h3>
							<div class="navbar-btn navbar-btn-right">
								<a class="btn btn-success btn btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> <span>Tambah data kembali</span></a>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<TH>Tanggal kembali</TH>
										<TH>ID Sewa</TH>
										<TH>durasi terlambat</TH>
										<TH>denda</TH>
										<th>total bayar</th>
										<th>status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($datakembali as $data_kembali)
									<tr>
										<td> {{ $data_kembali->tanggal_kembali }} </td>
										<td> {{ $data_kembali->id }} </td>
										<td> {{ $data_kembali->durasi_terlambat }} </td>
										<td> {{ $data_kembali->denda }} </td>
										<td> {{ $data_kembali->total_bayar }} </td>
										<td> {{ $data_kembali->status }} </td>
										<td>
											<a href="{{route('kembali.edit', $data_kembali->id ) }}" class="btn btn-warning btn-sm lnr lnr-pencil"> Edit</a>
											<a href="{{route('kembali.delete', $data_kembali->id ) }}" class="btn btn-danger btn-sm lnr lnr-trash" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')"> Delete</a>
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
				<h3 class="modal-title" id="exampleModalLabel">Tambah data kembali</h3>
			</div>
			<div class="modal-body">
				<form action="{{route('kembali.create') }}" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="exampleFormControlSelect1">ID Sewa</label>
						<select name="id_sewa" id="id" class="form-control" id="exampleFormControllSelect1" required>
							@foreach ($datasewa as $data)
							<option value="{{ $data->id }}">{{ $data->id }} - {{ $data->nama }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="datetime" class="col-xl-2 col-form-label">Tanggal Kembali</label>
						<div class="col-xl-5">
							<input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Durasi terlambat</label>
						<input name="durasi_terlambat" id="telat" type="text" class="form-control" aria-describedby="emailHelp" placeholder="dalam hari" readonly required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Denda</label>
						<input name="denda" id="denda" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Rp2.000/hari" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Total Bayar</label>
						<input name="total_bayar" id="total" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Rp." readonly required>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Status</label>
						<select name="status" id="status" class="form-control" id="exampleFormControllSelect1" required>
							<option value="belum bayar">Belum Bayar</option>
							<option value="sudah bayar">Sudah Bayar</option>
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
</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			var harga_sewa = '';
			$('#tanggal_kembali').change(function() {
				let id = $('#id').val();
				let tanggal_kembali = $(this).val();
				$.get(`ajax/get_telat/${id}/${tanggal_kembali}`, function(data) {
					const objek = JSON.parse(data);
					$('#telat').val(objek.telat);
					harga_sewa = parseInt(objek.harga_sewa);
					$('#denda').val(harga_sewa);
					$('#total').val(harga_sewa*objek.telat);
				});
			});
			$('#denda').keyup(function(){
				let denda = $(this).val();
				let telat = $('#telat').val();
				let total = parseInt(denda) * parseInt(telat);
				console.log(harga_sewa);
				let total_bayar = parseInt(harga_sewa) + parseInt(total);
				$('#total').val(total_bayar);
			});
		});
	</script>
	@stop
