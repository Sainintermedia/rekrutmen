@extends('frontend.content.index')
@section('content')
    <div class="container">
        <div class="row">
                <center>
                    <h2> Data Pelamar</h2>
                </center>
                <br/>
                <br/>
                
                    <table class="table table-striped table-bordered data">
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $saradan1 as $bd)
                            <tr>
                            
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$bd->nik}}</td>
                                <td>{{$bd->nama}}</td>
                                <td>{{$bd->tempat_lahir}}</td>
                                <td>{{$bd->tgl_lahir}}</td>
                                <td>{{$bd->jeniskelamin}}</td>
                                <td>{{$bd->kampung}}</td>
                                <td>{{$bd->rt}}</td>
                                <td>{{$bd->rw}}</td>
                                <td>{{$bd->pelamar}}</td>
                                <td>{{$bd->telepon}}</td>
                                <td>{{$bd->pendidikan}}</td>
                                <td>{{$bd->paklaring}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    
                    </table>
        </div>
    </div>
@endsection