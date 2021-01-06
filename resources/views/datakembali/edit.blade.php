@extends('Layout.main')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Ubah Data kembali</h3>
						</div>
						<div class="panel-body">
							<form action="{{ route('kembali.update',$data_kembali->id) }}" method="POST">
								{{csrf_field()}}
								<div class="form-group">
									<label for="exampleFormControlSelect1">ID Sewa</label>
									<select name="id_sewa" class="form-control" id="exampleFormControllSelect1">
										@foreach ($data_sewa as $data)
										<option value="{{ $data->id }}" @if($data_kembali->id_sewa == $data->id)selected @endif> {{$data->id}} - {{ $data->nama }}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="datetime" class="col-xl-2 col-form-label">Tanggal Kembali</label>
									<div class="col-xl-5">
										<input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" value="{{ $data_kembali->tanggal_kembali }}">
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1" class="form-label">Durasi terlambat</label>
									<input name="durasi_terlambat" id="telat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dalam hari" value="{{ $data_kembali->durasi_terlambat }}" readonly>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1" class="form-label">Denda</label>
									<input name="denda" type="text" id="denda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rp." value="{{ $data_kembali->denda }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1" class="form-label">Total Bayar</label>
									<input name="total_bayar" id="total" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rp." value="{{ $data_kembali->total_bayar }}" readonly>
								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect1">Status</label>
									<select name="status" id="status" class="form-control" id="exampleFormControllSelect1" required>
										<option value="belum bayar" @if($data_kembali->status == 'belum bayar')selected @endif>Belum Bayar</option>
										<option value="sudah bayar" @if($data_kembali->status == 'sudah bayar')selected @endif>Sudah Bayar</option>
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
				$('#denda').val('');
				$('#total').val('');
			});
		});
		$('#denda').keyup(function() {
			let denda = $(this).val();
			let telat = $('#telat').val();
			let total = parseInt(denda) * parseInt(telat);
			let total_bayar = parseInt(total) + parseInt(harga_sewa);
			$('#total').val(total_bayar);
		});
	});
</script>
@stop
