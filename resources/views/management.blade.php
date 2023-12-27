@extends('layouts.account')

@section('title')
    Uang Keluar - UANGKU
@stop

@section('content')
    <div class="content-wrapper">
      <form>
        <div class="form-group">
          <div class="input-group">
            @if (auth()->user()->role == 'user')
            <div class="input-group-prepend">
                      <a href="{{ route('account.credit.create') }}" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> TAMBAH</a>
                  </div>
                  @endif
                  <input type="text" class="form-control" name="q"
                         placeholder="cari berdasarkan nama kategori">
                  <div class="input-group-append">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                      </button>
                  </div>
              </div>
          </div>
        </form>
        
        <div class="page-header">
        </div>
        <div class="row">
          <div class="col-lg-13 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Basic Table</h4>
                <!-- <a href="{{ route('export_credit')}}">EXPORT EXCEL</a>
                </p> -->
                <!-- button EXPORT EXCEL -->
                <a href="{{ route('export_credit')}}" class="btn btn-success mb-3">
                  <i class="fa fa-download"></i>Export Excel
                </a>
                <table class="table">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NAMA</th>
                      <th>EMAIL</th>
                      <th>USERNAME</th>
                      <th>ROLE</th>
                      <th>PASSWORD</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>user</td>
                      <td>user@gmail.com</td>
                      <td>user</td>
                      <td>user</td>
                      <td>user</td>
                      <td>
                        <button onClick="Delete(this.id)" class="btn btn-inverse-danger btn-sm" >
                          <i class="mdi mdi-close-box">Delete</i>
                        </button>
                        <a class="btn btn-gradient-info btn-sm">
                          <i class="mdi mdi-brush">Edit</i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>admmin</td>
                        <td>usr@gmail.com</td>
                        <td>admin</td>
                        <td>admin</td>
                        <td>admin</td>
                        <td>
                          <button onClick="Delete(this.id)" class="btn btn-inverse-danger btn-sm" >
                            <i class="mdi mdi-close-box">Delete</i>
                          </button>
                          <a class="btn btn-gradient-info btn-sm">
                            <i class="mdi mdi-brush">Edit</i>
                          </a>
                        </td>
                      </tr>
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
