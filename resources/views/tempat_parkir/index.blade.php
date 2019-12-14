@extends ('base')
 @section ('konten')


 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> id Parkir </th>
                          <th> Waktu Masuk </th>
                          <th> Waktu Keluar </th>
                          <th> Lama Parkir </th>
                          <th> Total Tarif </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($tempat_parkir as $value)
                        <tr>
                        <td>{{ $value->id_tempatparkir}} </td>
                          <td>{{ $value->waktu_masuk}}</td>
                          <td>{{ $value->waktu_keluar}}</td>
                          <td>{{ $value->lama_parkir}}</td>
                          <td>{{ $value->total_tarif}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


 @endsection
