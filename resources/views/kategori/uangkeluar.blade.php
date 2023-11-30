@extends('layouts.layout')
@section('content')
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Uang Keluar</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <a class="btn btn-gradient-success btn-rounded btn-fw" aria-current="page">Tambah Data</a>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-13 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Basic Table</h4>
              </p>
              <table class="table">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Beli Laptop</td>
                    <td>
                      <a class="btn btn-inverse-danger btn-sm">
                        <i class="mdi mdi-close-box">Delete</i>
                      </a>
                      <a class="btn btn-gradient-info btn-sm" href="">
                        <i class="mdi mdi-brush">Edit</i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Bayar Pajak</td>
                    <td>
                      <a class="btn btn-inverse-danger btn-sm">
                        <i class="mdi mdi-close-box">Delete</i>
                      </a>
                      <a class="btn btn-gradient-info btn-sm" href="">
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
@endsection