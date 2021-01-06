@extends('Layout.main')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Ubah Data Sewa</h3>
						</div>
						<div class="panel-body">
							<form action="{{route('sewa.update', $datasewa->id ) }}" method="POST">
								{{csrf_field()}}
								<div class="form-group">
									<label for="exampleFormControlSelect1">Nama Penyewa</label>
									<select name="id_user" class="form-control" id="exampleFormControllSelect1">
										@foreach ($data_penyewa as $data)
										<option value="{{ $data->id }}" @if($datasewa->id_user == $data->id)selected @endif>{{ $data->nama }}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect1">Mobil</label>
									<select name="id_mobil" class="form-control" id="exampleFormControllSelect1">
										@foreach ($data_mobil as $data)
										<option value="{{ $data->id }}" @if($datasewa->id_mobil == $data->id)selected @endif>{{ $data->merek }}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="datetime" class="col-xl-2 col-form-label">Tanggal Sewa</label>
									<div class="col-xl-5">
										<input type="date" name="tanggal_sewa" id="datetime" class="form-control" value="{{$datasewa->tanggal_sewa}}">
									</div>
								</div>
								<div class="form-group">
									<label for="datetime" class="col-xl-2 col-form-label">Tanggal Kembali</label>
									<div class="col-xl-5">
										<input type="date" name="tanggal_kembali" readonly id="datetime" class="form-control" value="{{$datasewa->tanggal_kembali}}">
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1" class="form-label">Durasi</label>
									<input name="durasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Durasi" value="{{$datasewa->durasi}}">
								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect1">Jaminan</label>
									<select name="jaminan" class="form-control" id="exampleFormControllSelect1">
										<option value="KTP" @if($datasewa->Jaminan == 'KTP')selected @endif>KTP</option>
										<option value="SIM" @if($datasewa->Jaminan == 'SIM')selected @endif>SIM</option>
										<option value="KK" @if($datasewa->Jaminan == 'KK')selected @endif>KK</option>
										<option value="KTM" @if($datasewa->Jaminan == 'KTM')selected @endif>KTM</option>
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

