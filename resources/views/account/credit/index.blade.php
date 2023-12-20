@extends('layouts.account')

@section('title')
    Uang Keluar - UANGKU
@stop

@section('content')
    <div class="content-wrapper">
      @if (auth()->user()->role == 'user')
        <form action="{{ route('account.credit.search') }}" method="GET">
          <div class="form-group">
              <div class="input-group">
                  <div class="input-group-prepend">
                      <a href="{{ route('account.credit.create') }}" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> TAMBAH</a>
                  </div>
                  <input type="text" class="form-control" name="q"
                         placeholder="cari berdasarkan nama kategori">
                  <div class="input-group-append">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                      </button>
                  </div>
              </div>
          </div>
      </form>
      @endif

        <div class="page-header">
        </div>
        <div class="row">
          <div class="col-lg-13 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Basic Table</h4>
                <a href="{{ route('export_credit')}}">EXPORT EXEL</a>
                </p>
                <table class="table">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama Kategori</th>
                      <th>Nominal</th>
                      <th>Keterangan</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                @endphp
                @foreach ($credit as $hasil)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $hasil->name }}</td>
                      <td>{{ $hasil->nominal}}</td>
                      <td>{{ $hasil->description }}</td>
                      <td>{{ $hasil->credit_date }}</td>
                   @if (auth()->user()->role == 'user')
                      <td>
                        <button onClick="Delete(this.id)" class="btn btn-inverse-danger btn-sm" id="{{ $hasil->id }}">
                          <i class="mdi mdi-close-box">Delete</i>
                        </button>
                        <a class="btn btn-gradient-info btn-sm" href="{{ route('account.credit.edit', $hasil->id) }}">
                          <i class="mdi mdi-brush">Edit</i>
                        </a>
                      </td>
                 @endif
                    </tr>
                     @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script>
        /**
         * Sweet alert
         */
        @if($message = Session::get('success'))
        swal({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: "{{ $message }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @elseif($message = Session::get('error'))
        swal({
            type: "error",
            icon: "error",
            title: "GAGAL!",
            text: "{{ $message }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @endif

        // delete
        function Delete(id)
        {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            swal({
                title: "APAKAH KAMU YAKIN ?",
                text: "INGIN MENGHAPUS DATA INI!",
                icon: "warning",
                buttons: [
                    'TIDAK',
                    'YA'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {

                    //ajax delete
                    jQuery.ajax({
                        url: "{{ route("account.credit.index") }}/"+id,
                        data: 	{
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function (response) {
                            if (response.status == "success") {
                                swal({
                                    title: 'BERHASIL!',
                                    text: 'DATA BERHASIL DIHAPUS!',
                                    icon: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }else{
                                swal({
                                    title: 'GAGAL!',
                                    text: 'DATA GAGAL DIHAPUS!',
                                    icon: 'error',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }
                        }
                    });

                } else {
                    return true;
                }
            })
        }
    </script>

@stop
