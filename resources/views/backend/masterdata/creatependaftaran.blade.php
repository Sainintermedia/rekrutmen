<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recruitment Pegawai</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/backend/css/normalize.css">
    <link rel="stylesheet" href="assets/backend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/backend/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/backend/css/themify-icons.css">
    <link rel="stylesheet" href="assets/backend/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/backend/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/backend/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->



    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
      
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>RECUITMENT DESA SUMURBANDUNG</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

              <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/pendaftaran">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">FORM PENDAFTARAN</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-8">
                                    
                                    <div class="form-group form-group-default">
                                        <label>Nomor Induk Kependudukan</label>
                                        <input id="nik" type="text" class="form-control" placeholder="Input NIK" 
                                        @error('nik') is-invalid @enderror name="nik" value="{{ old('nik') }}">
                                        @error('nik')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Nama</label>
                                        <input id="nama" type="text" class="form-control" placeholder="Input NAMA" 
                                        @error('nama') is-invalid @enderror name="nama" value="{{ old('nama') }}">
                                        @error('nama')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Tempat Lahir</label>
                                        <input id="tempat_lahir" type="text" class="form-control" placeholder="Input Tempat Lahir" 
                                        @error('tempat_lahir') is-invalid @enderror name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                                        @error('tempat_lahir')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Tanggal Lahir</label>
                                        <input id="tgl_lahir" type="date" class="form-control" placeholder="Input Tanggal Lahir" 
                                        @error('tgl_lahir') is-invalid @enderror name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                                        @error('tgl_lahir')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Jenis Kelamin</label>
                                        <input id="jeniskelamin" type="text" class="form-control" placeholder="Input Jenis Kelamin" 
                                        @error('jeniskelamin') is-invalid @enderror name="jeniskelamin" value="{{ old('jeniskelamin') }}">
                                        @error('jeniskelamin')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>
                                    
                                    <div class="form-group form-group-default">
                                        <label>Kampung</label>
                                        <input id="kampung" type="text" class="form-control" placeholder="Input Nama kampung" 
                                        @error('kampung') is-invalid @enderror name="kampung" value="{{ old('kampung') }}">
                                        @error('kampung')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>RT</label>
                                        <input id="rt" type="text" class="form-control" placeholder="Input Nomor RT" 
                                        @error('rt') is-invalid @enderror name="rt" value="{{ old('rt') }}">
                                        @error('rt')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>RW</label>
                                        <input id="rw" type="text" class="form-control" placeholder="Input Nomor RW" 
                                        @error('rw') is-invalid @enderror name="rw" value="{{ old('rw') }}">
                                        @error('rw')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Pelamar</label>
                                        <input id="pelamar" type="text" class="form-control" placeholder="Input Nomor pelamar" 
                                        @error('pelamar') is-invalid @enderror name="pelamar" value="{{ old('pelamar') }}">
                                        @error('pelamar')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Telephon/HP</label>
                                        <input id="telepon" type="text" class="form-control" placeholder="Input Nomor Telepon/HP" 
                                        @error('telepon') is-invalid @enderror name="telepon" value="{{ old('telepon') }}">
                                        @error('telepon')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="form-group form-group-default ">
                                        <label>Pendidikan Terakhir</label>
                                        <input id="pendidikan" type="text" class="form-control" placeholder="Input Pendidikan Terakhir" 
                                        @error('pendidikan') is-invalid @enderror name="pendidikan" value="{{ old('pendidikan') }}">
                                        @error('pendidikan')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Pengalaman Kerja</label>
                                        <input id="paklaring" type="text" class="form-control" placeholder="Input Pengalaman Kerja" 
                                        @error('paklaring') is-invalid @enderror name="paklaring" value="{{ old('paklaring') }}">
                                        @error('paklaring')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Keterangan</label>
                                        <input id="keterangan" type="text" class="form-control" placeholder="Input Keterangan" 
                                        @error('keterangan') is-invalid @enderror name="keterangan" value="{{ old('keterangan') }}">
                                        @error('keterangan')<div class="has-feedback text-danger" role="alert">{{ $message }}</div>@enderror
                                    </div>

                                    {{-- <div class="form-group">
                                        <b>File Gambar</b><br/>
                                        <input type="file" name="pictguru">
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="/"  type="button" class="btn btn-danger">Cancel</a>
                    </div>
                    </form>
                </div>
            </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/backend/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/backend/js/popper.min.js"></script>
    <script src="assets/backend/js/plugins.js"></script>
    <script src="assets/backend/js/main.js"></script>


</body>
</html>
