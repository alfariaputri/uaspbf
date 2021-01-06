@extends('Layout.main')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Ubah Data Penyewa</h3>
							</div>
							<div class="panel-body">
								<form action="{{route('user.update', $Datauser->id) }}" method="POST">
						 	{{csrf_field()}}
									<div class="form-group">
									    <label for="exampleInputEmail1" class="form-label">Nama</label>
									    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$Datauser->nama}}">
									</div>
									<div class="form-group">
									     <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
									     <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$Datauser->alamat}}</textarea>
								    </div>
								    <div class="form-group">
									    <label for="exampleInputEmail1" class="form-label">No_HP</label>
									    <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No HP" value="{{$Datauser->no_hp}}">
									  </div>
									  <div class="form-group">
									  	<label for="exampleFormControlSelect1">Jenis Kelamin</label>
									  	<select name="jenis_kelamin" class="form-control" id="exampleFormControllSelect1">
									  		<option value="L" @if($Datauser->jenis_kelamin == 'L')selected @endif>Laki - Laki</option>
									  		<option value="P" @if($Datauser->jenis_kelamin == 'P')selected @endif>Perempuan</option>
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




