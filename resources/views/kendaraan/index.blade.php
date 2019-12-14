@extends ('base')
 @section ('konten')


 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> id Kendaraan </th>
                          <th> Nama Pemilik </th>
                          <th> No Polisi </th>
                          <th> Jenis Kendaraan </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($kendaraan as $value)
                        <tr>
                        <td>{{ $value->id_kendaraan}} </td>
                          <td>{{ $value->nama_pemilik}}</td>
                          <td>{{ $value->no_polisi}}</td>
                          <td>{{ $value->jenis_kendaraan}} </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


 @endsection
