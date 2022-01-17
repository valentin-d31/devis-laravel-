@extends('layout.app')
@section('titre')
    Devis
@endsection

@section('content')
    <div class="container">

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="#">Créer un Devis</a>
            </nav>
        </div>

        {{-- Afficher les Devis --}}
        <h1 class="my-2">Afficher les devis</h1>
        <table class="table text-center">
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

            <p class="text-center">Listing des Devis</p>

            </tbody>
        </table>
        <hr>

        {{-- Afficher les utilisateurs --}}
        <h1 class="my-5">Afficher les utilisateurs</h1>
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">E-mail</th>
                <th scope="col">Age</th>
                <th scope="col">Tel. M</th>
                <th scope="col">S</th>
                <th scope="col">montant max</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="#"></a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <form action="#" method="post">
                        @csrf
                        {{-- Voir l'utilisateur --}}
                        <a href="#" class="btn btn-success"><i
                                class="fas fa-eye"></i></a>

                        {{-- Editer l'utilisateur --}}
                        <a href="#" class="btn btn-info"><i
                                class="far fa-edit"></i></a>

                        {{-- Supprimer l'utilisateur --}}
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>

                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
