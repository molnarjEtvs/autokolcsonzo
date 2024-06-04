@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <h1>Ügyfeleim</h1>
                    <div class="table-responsive">
                        <table class="table table-info table-striped table-hover">
                            <tr>
                                <th>#</th>
                                <th>Név</th>
                                <th>Cím</th>
                                <th>Telefonszám</th>
                            </tr>

                            @foreach ($ugyfelek as $ugyfel)
                            <tr>
                                <td>{{$ugyfel['u_id']}}</td>
                                <td>{{$ugyfel['nev']}}</td>
                                <td>{{$ugyfel['cim']}}</td>
                                <td>{{$ugyfel['telefonszam']}}</td>
                            </tr>
                            @endforeach
                            

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection