@extends('layout.app')
@section('titre')
    Devis
@endsection

@section('content')
    <div class="container">

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <div class="container">
                    <nav class="nav d-flex justify-content-between">
                        <a href="{{route('admin.index')}}" type="button" class="btn btn-primary my-2">Panel Administrateur</a>
                    </nav>
                </div>
            </nav>
        </div>

        {{-- Afficher les Devis --}}
        <h1 class="my-2">Afficher les devis</h1>
        <table class="table text-center">
            <form action="#" class="d-flex mr-3">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" value="{{ request()->q ?? '' }}">
                    <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </form>
            <thead>
            <tr>
                <th scope="col">Cote</th>
                <th scope="col">devis</th>
                <th scope="col">blala</th>
                <th scope="col">Pays</th>
                <th scope="col">Durée</th>
                <th scope="col">Création</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>#</td>
                <td><a href="#">#</a></td>
                <td>

                </td>
                </a>
                <td></td>
                <td>min</td>
                <td></td>
                <td></td>
                <td>
                    <form action="#" method="post">
                        @csrf
                        {{-- Voir  --}}
                        <a href="#" class="btn btn-success"><i
                                class="fas fa-eye"></i></a>

                        {{-- Editer  --}}
                        <a href="#" class="btn btn-info"><i
                                class="far fa-edit"></i></a>

                        {{-- Supprimer  --}}
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>

                </td>
            </tr>

            <p class="text-center"></p>

            </tbody>
        </table>
        <hr>
    </div>
@endsection
