<form action="{{url("edit")}}" method="post">

<center><h2>EDIT DATA SEKOLAH</h2>
<input type="text" name="nama" value="{{$sekolah->nama}}"><br>
<input type="text" name="alamat" value="{{$sekolah->alamat}}"><br>
<input type="text" name="kota" value="{{$sekolah->kota}}"><br>
<input type="text" name="jumlah_siswa" value="{{$sekolah->jumlah_siswa}}"><br>
<input type="text" name="id_sekolah" value="{{$sekolah->id_sekolah}}"><br>

<button type="submit"
				class="btn">Save</button>
				</div>
				<input type="hidden" name="_token"
					value="{{csrf_token()}}">

        </center>
</form>
