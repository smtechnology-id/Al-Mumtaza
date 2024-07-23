@extends('layouts.userLayout')


@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Data Santri</h5>
            <div class="card-body">
              <h5 class="card-title">Tabel Data Santri Ponpes Mumtaza</h5>
              <table class="table" id="dataTables">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Point Santri</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                  @foreach ($data as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                          @if ($data->photo)
                              <img src="{{ asset('images/students-images/'. $data->photo) }}" class="rounded" style="height: 200px; width: 200px" alt="" srcset="">
                          @else
                              <img src="{{ asset('images/students-images/default.jpg') }}" class="rounded" style="height: 200px; width: 200px" alt="Default Image" srcset="">
                          @endif
                      </td>                        <td>{{ $data->nama_lengkap }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->total_poin }}</td>
                        <td>
                          <a href="{{ route('SantriDataDetail', ['id' => $data->id_user]) }}" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                          <a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-history" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection