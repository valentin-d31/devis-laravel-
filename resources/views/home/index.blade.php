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
                <th scope="col">Objet Devis</th>
                <th scope="col">Entité de Facturation</th>
                <th scope="col">Prestataire</th>
                <th scope="col">Référence Allianz</th>
                <th scope="col">Référence Prestataire</th>
                <th scope="col">Date Ouverture</th>
                <th scope="col">Date de Fermeture</th>
                <th scope="col">Prix total (h.t.)</th>
                <th scope="col">Validation</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
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
