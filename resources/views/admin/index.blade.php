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
            <a href="{{route('devis.create')}}" class="btn btn-primary me-md-2" type="button">Créer un devis</a>
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
            </tbody>
        </table>
        <hr>

        {{-- Afficher les produits --}}
        <h1 class="my-5">Afficher les produits</h1>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('produits.create')}}" class="btn btn-primary me-md-2" type="button">Créer un produit</a>
        </div>
        <hr>
        <table class="table text-center">
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
            @foreach($produits as $produit)
                <tr>
                    <td>{{$produit->reference}}</td>
                    <td>{{$produit->name}}</td>
                    <td>{{$produit->tarifUnitaire_type}}</td>
                    <td>{{$produit->tarifUnitaire_pht}}</td>
                    <td>{{$produit->prestationDevisee_qté}}</td>
                    <td>{{$produit->prestationDevisee_mht}}</td>
                    <td>{{$produit->prestationCompl_qté}}</td>
                    <td>{{$produit->prestationCompl_mht}}</td>
                    <td>{{$produit->total_ht}}</td>
                    <td>
                        <form action=" {{ route('produits.destroy', $produit) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            {{-- Editer  --}}
                            <a href="{{ route('produits.edit', $produit) }}" class="btn btn-info"><i
                                    class="far fa-edit"></i></a>
                            {{-- Supprimer  --}}
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>

                    </td>
                </tr>

                <p class="text-center"></p>
            @endforeach
            </tbody>
        </table>
        <hr>
        @if ( session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
@endsection
