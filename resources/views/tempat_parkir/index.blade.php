@extends ('base')
 @section ('konten')

                  
                   <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="add-items d-flex">
                  <a href="{{route('tempat_parkir.create')}}" class="float-right btn btn-primary btn-sm">Tambah Data </a>
                    
                  </div>
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> id Parkir </th>
                          <th> No Polisi </th>
                          <th> Waktu Masuk </th>
                          <th> Waktu Keluar </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($tempat_parkir as $value)
                        <tr>
                        <td>{{ $value->id_tempatparkir}} </td>
                        <td>{{ $value->no_polisi}}</td>
                        <td>{{ $value->waktu_masuk}}</td>
                        <td>{{ $value->waktu_keluar}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


 @endsection
