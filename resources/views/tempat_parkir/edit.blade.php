<!-- @extends ('base')
@section ('konten')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="{{route('karyawan.update',$karyawan->id_karyawan)}}" method="POST">
                @method('PUT')
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Polisi</label>
                        <input type="text" name="no_polisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan no polisi">
                        </br>
                        <label for="exampleInputEmail1">Nama Kendaraan</label>
                        <input type="text" name="nama_kendaraan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan merk kendaraan">
                        </br>
                        <label for="exampleInputEmail1">Jenis Kendaraan</label>
                        <select name="jenis_kendaraan" class="form-control" id="exampleInputEmail1">
                           
                            <option value="Motor">Pilih Jenis Kendaraan</option>
                            <option value="Mobil">Pilih Jenis Kendaraan</option>
                            
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
                  

@endsection -->