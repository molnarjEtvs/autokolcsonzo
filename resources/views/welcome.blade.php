@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <h1>Ügyfeleim 
                        <a href="{{route('ujugyfel')}}" class="btn btn-warning">+ ügyfél</a>
                    </h1>
                    <div class="table-responsive">
                        <table class="table table-info table-striped table-hover">
                            <tr>
                                <th>#</th>
                                <th>Név</th>
                                <th>Cím</th>
                                <th>Telefonszám</th>
                                <th>Módosítás</th>
                            </tr>

                            @foreach ($ugyfelek as $ugyfel)
                            <tr>
                                <td>{{$ugyfel['u_id']}}</td>
                                <td>{{$ugyfel['nev']}}</td>
                                <td>{{$ugyfel['cim']}}</td>
                                <td>{{$ugyfel['telefonszam']}}</td>
                                <td>
                                    <a href="{{route('ugyfelmod',['uid' => $ugyfel->u_id])}}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                                      </svg></a>
                                </td>
                            </tr>
                            @endforeach
                            

                        </table>
                    </div>
                    <div class="text-center">
                        {{ $ugyfelek->links() }}
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection