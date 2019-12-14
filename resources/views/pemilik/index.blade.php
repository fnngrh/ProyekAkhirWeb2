@extends ('base')
 @section ('konten')


 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> Id_Pemilik </th>
                          <th> Nama </th>
                          <th> No Polisi </th>
                          <th> Alamat </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($pemilik as $value)
                        <tr>
                        <td>{{ $value->id_pemilik}} </td>
                          <td>{{ $value->nama}}</td>
                          <td>{{ $value->no_polisi}}</td>
                          <td>{{ $value->alamat}} </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


 @endsection
