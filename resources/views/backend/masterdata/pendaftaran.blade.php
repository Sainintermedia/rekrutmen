@extends('frontend.content.index')
@section('content')
    <div class="container">
        <div class="row">
                <center>
                    <h2> Data Pelamar</h2>
                </center>
                <br/>
                <br/>
                
                    <table class="table-responsive-sm table-bordered data">
                        <thead>
                            <tr>	
                                <th>NO</th>		
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tgl Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Kampung</th>
                                <th>RT</th>
                                <th>RW</th>
                                <th>Pelamar</th>
                                <th>Telepon / WA</th>
                                <th>Pendidikan</th>
                                <th>Paklaring</th>
                                <th>keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $Warga as $wr)
                            <tr>
                            
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$wr->nik}}</td>
                                <td>{{$wr->nama}}</td>
                                <td>{{$wr->tempat_lahir}}</td>
                                <td>{{$wr->tgl_lahir}}</td>
                                <td>{{$wr->jeniskelamin}}</td>
                                <td>{{$wr->kampung}}</td>
                                <td>{{$wr->rt}}</td>
                                <td>{{$wr->rw}}</td>
                                <td>{{$wr->pelamar}}</td>
                                <td>{{$wr->telepon}}</td>
                                <td>{{$wr->pendidikan}}</td>
                                <td>{{$wr->paklaring}}</td>
                                <td>{{$wr->keterangan}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    
                    </table>
        </div>
    </div>
@endsection