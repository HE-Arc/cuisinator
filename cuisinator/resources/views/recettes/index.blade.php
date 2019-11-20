@extends('template.app')

@section('page-title') Cuisinator @endsection

@section('content')
    <main class="container-fluid">
        <h1 class="pb-4 mt-4 mb-2 border-bottom text-center title">Cuisinator</h1>

        <div class="row">
            <div class="col-md-3 container-fluid spaced-inside">
                <div class="container-fluid">
                    <div class="row p-3 border bg-light rounded-lg" id="liste-aliments">

                        <div class="col-md-12 spaced-bottom">
                            <form class="form-inline">
                                <input class="form-control col" type="search" placeholder="Chercher un aliment" />
                                <button class="form-control btn btn-success justify-content-end" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>

                        @foreach($aliments as $a)
                            <figure class="figure col-md-3">
                                <div>
                                    <img src="{{ URL::asset('photos-aliments/' . ((!is_null($a->nom_photo))? $a->nom_photo : "default.jpg" )) }}"
                                         alt="{{$a->nom}}" class="figure-img rounded aliment-image-icon" />
                                </div>

                                <figcaption class="figure-caption">{{$a->nom}}</figcaption>
                            </figure>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3 container-fluid">
                <div class="container-fluid">
                    <div class="row p-3 border bg-light rounded-lg" id="liste-aliments-possedes">

                    </div>
                </div>
            </div>
            <div class="col-md-6 container-fluid">
                <div class="container-fluid">
                    <div class="row p-3 border bg-light rounded-lg" id="liste-recettes">

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
