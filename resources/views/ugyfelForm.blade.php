@extends('layouts.master')
@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div>
                <a href="{{route('fooldal')}}" class="btn btn-dark"><-vissza</a>
                <h1>Új ügyfél felvétele</h1>
                <div class="bg-primary p-3 text-white">

                    @if (session()->has('sikeres'))
                        <div class="alert alert-success">
                            Adatok mentése sikeres!
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $hiba)
                                    <li>{{$hiba}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post">
                        @csrf

                        <div>
                            <label for="nev">Név:</label>
                            <input type="text" name="nev" id="nev" class="form-control @error("nev") is-invalid @enderror" 
                            value="{{old('nev', isset($ugyfel) ? $ugyfel->nev : '' )}}">
                            @error("nev")
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="cim">Cím:</label>
                            <input type="text" name="cim" id="cim" class="form-control" 
                            value="{{old('cim', isset($ugyfel) ? $ugyfel->cim : '' )}}">
                            @error("cim")
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="telefonszam">Telefonszám:</label>
                            <input type="text" name="telefonszam" id="telefonszam" class="form-control" value="{{old('telefonszam', isset($ugyfel) ? $ugyfel->telefonszam : '' )}}">
                            @error("telefonszam")
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-light w-100">Mentés</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection