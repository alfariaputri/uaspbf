@extends('Layout.main')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Penyewa</h3>
									<div class="navbar-btn navbar-btn-right">
										<a class="btn btn-success btn btn-sm" data-toggle="modal"data-target="#exampleModal"><i class="fa fa-plus"></i> <span>Tambah Data Penyewa</span></a>
									</div>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<TH>Nama</TH>
											<TH>Alamat</TH>
											<TH>No_HP</TH>
											<TH>Jenis_Kelamin</TH>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@foreach($data_Datauser as $Datauser)
										<tr>
											<td> {{ $Datauser->nama }} </td>
											<td> {{ $Datauser->alamat }} </td>
											<td> {{ $Datauser->no_hp }} </td>
											<td> {{ $Datauser->jenis_kelamin }} </td>
											<td>
												<a href="{{route('user.edit', $Datauser->id) }}" class="btn btn-warning btn-sm lnr lnr-pencil"> Edit</a>
												<a href="{{route('user.delete', $Datauser->id) }}"" class="btn btn-danger btn-sm lnr lnr-trash" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')"> Delete</a>
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
				    <h3 class="modal-title" id="exampleModalLabel">Tambah Penyewa</h3>
				</div>
				<div class="modal-body">
					<form action="{{route('user.create') }}" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<div class="form-group">
						<label for="exampleInputEmail1" class="form-label">Nama</label>
						<input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
							<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-label">No_HP</label>
							<input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No HP">
						</div>
						<div class="form-group">
							<label for="exampleFormControlSelect1">Jenis Kelamin</label>
							<select name="jenis_kelamin" class="form-control" id="exampleFormControllSelect1">
								<option value="L">Laki-Laki</option>
								<option value="P">Perempuan</option>
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
