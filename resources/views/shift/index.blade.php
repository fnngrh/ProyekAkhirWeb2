@extends ('base')
 @section ('konten')


 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> Id Shift </th>
                          <th> Jadwal Shift <th>
                          <th> Hari </th>
                          <th> Jam </th>
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
