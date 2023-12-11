@extends('layouts.account')

@section('title')
    Edit Uang keluar - UANGKU
@stop

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title"> Form elements </h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Forms</a></li>
              <li class="breadcrumb-item active" aria-current="page">Form elements</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form action="{{ route('account.credit.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NOMINAL (Rp.)</label>
                                <input type="text" name="nominal" value="{{ old('nominal', $credit->nominal) }}" placeholder="Masukkan Nominal" class="form-control currency">

                                @error('nominal')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>TANGGAL</label>
                                <input type="text" class="form-control datetimepicker" value="{{ old('credit_date', $credit->credit_date) }}" name="credit_date" placeholder="Pilih Tanggal">

                                @error('date_credit')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>KATEGORI</label>
                                <select class="form-control select2" name="category_id" style="width: 100%">
                                    <option value="">-- PILIH KATEGORI --</option>
                                    @foreach ($categories as $hasil)
                                        @if($credit->category_id == $hasil->id)
                                            <option value="{{ $hasil->id }}" selected> {{ $hasil->name }}</option>
                                        @else
                                            <option value="{{ $hasil->id }}"> {{ $hasil->name }}</option>
                                        @endif
                                    @endforeach
                                </select>

                                @error('category_id')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>KETERANGAN</label>
                                <textarea class="form-control" name="description" rows="6" placeholder="Masukkan Keterangan">{{ old('description', $credit->description) }}</textarea>

                                @error('description')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>


                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    
    <script>

        var cleaveC = new Cleave('.currency', {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });

        var timeoutHandler = null;

        /**
         * btn submit loader
         */
        $( ".btn-submit" ).click(function()
        {
            $( ".btn-submit" ).addClass('btn-progress');
            if (timeoutHandler) clearTimeout(timeoutHandler);

            timeoutHandler = setTimeout(function()
            {
                $( ".btn-submit" ).removeClass('btn-progress');

            }, 1000);
        });

        /**
         * btn reset loader
         */
        $( ".btn-reset" ).click(function()
        {
            $( ".btn-reset" ).addClass('btn-progress');
            if (timeoutHandler) clearTimeout(timeoutHandler);

            timeoutHandler = setTimeout(function()
            {
                $( ".btn-reset" ).removeClass('btn-progress');

            }, 500);
        })

    </script>
@stop
