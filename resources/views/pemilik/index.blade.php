@extends ('base')
 @section ('konten')


                 <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                  <div class="card-body">
                  <div class="add-items d-flex">
                  <a href="{{route('pemilik.create')}}" class="float-right btn btn-primary btn-sm">Tambah Data </a>
                    
                  </div>

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> Id_Pemilik </th>
                          <th> Nama Pemilik </th>
                          <th> Alamat </th>
                          <th> Telepon </th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($pemilik as $value)
                        <tr>
                        <td>{{ $value->id_pemilik}} </td>
                        <td>{{ $value->nama_pemilik}}</td>
                        <td>{{ $value->alamat}} </td>
                        <td>{{ $value->telp}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


 @endsection
