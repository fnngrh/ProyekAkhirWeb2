@extends ('base')
 @section ('konten')


                <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                  <div class="card-body">
                  <div class="add-items d-flex">
                  <a href="{{route('kendaraan.create')}}" class="float-right btn btn-primary btn-sm">Tambah Data </a>
                    
                  </div>

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> Id Shift </th>
                          <th> Jadwal Shift <th>
                          <th> Hari </th>
                          <th> Jam </th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($shift as $value)
                        <tr>
                        <td>{{$value->id_shift}}</td>
                        <td>{{$value->jadwal_shift}}</td>
                        <td>{{$value->hari}}</td>
                        <td>{{$value->jam}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


 @endsection
