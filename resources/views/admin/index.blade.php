@extends('layout.app')
@section('titre')
    Devis
@endsection

@section('content')
    <div class="container">

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
            </nav>
        </div>

        {{-- Afficher les Devis --}}
        <h1 class="my-2">Afficher les devis</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="button">créer un devis </button>
        </div>
        <hr>

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

        {{-- Afficher les produits --}}
        <h1 class="my-5">Afficher les produits</h1>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('admin.create')}}" class="btn btn-primary me-md-2" type="button">Créer un produit</a>
        </div>
        <hr>
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

                        {{-- Editer le produit--}}
                        <a href="" class="btn btn-info"><i
                                class="far fa-edit"></i></a>

                        {{-- Supprimer le produit--}}
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>

                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
