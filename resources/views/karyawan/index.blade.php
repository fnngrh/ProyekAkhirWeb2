@extends ('base')
 @section ('konten')


 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> id Karyawan </th>
                          <th> Nama </th>
                          <th> Lokasi Pos </th>
                          <th> Jadwal Shift </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($karyawan as $value)
                        <tr>
                        <td>{{ $value->id_karyawan}} </td>
                          <td>{{ $value->nama}}</td>
                          <td>{{ $value->lokasi_pos}}</td>
                          <td>{{ $value->jadwal_shift}} </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


 @endsection
