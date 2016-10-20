<form action="{{url("welcome")}}" method="post">

<center><h2>TAMBAH DATA SEKOLAH</h2>
<input type="text" name="nama" value=""><br>
<input type="text" name="alamat" value=""><br>
<input type="text" name="kota" value=""><br>
<input type="text" name="jumlah_siswa" value=""><br>

<button type="submit"
				class="btn">Save</button>
				</div>
				<input type="hidden" name="_token"
					value="{{csrf_token()}}">

        </center>
</form>
