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
        <hr>
        @if ( session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        <hr>

        {{-- Afficher les Devis --}}
        <h1 class="my-2">Afficher les devis 📃</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('devis.create')}}" class="btn btn-primary me-md-2" type="button">Créer un devis</a>
        </div>
        <hr>
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Date d'ouverture</th>
                <th scope="col">Reference Allianz</th>
                <th scope="col">Reference Commande</th>
                <th scope="col">Cost Center</th>
                <th scope="col">Cost Element</th>
                <th scope="col">Impression</th>
                <th scope="col">Contact</th>
            </tr>
            </thead>
            <tbody>
            @foreach($devis as $devi)
            <tr>
                <td>{{$devi->titre}}</td>
                <td>{{$devi->date_ouverture}}</td>
                <td>{{$devi->ref_allianz}}</td>
                <td>{{$devi->ref_commande}}</td>
                <td>{{$devi->cost_center}}</td>
                <td>{{$devi->cost_element}}</td>
                <td>{{$devi->impression}}</td>
                <td>{{$devi->contact}}</td>
                <td>
                    <form action="{{route ('devis.destroy', $devi)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        {{-- Editer  --}}
                        <a href="{{ route('devis.edit', $devi->id) }}" class="btn btn-info"><i
                                class="far fa-edit"></i></a>

                        {{-- Supprimer  --}}
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <hr>

        {{-- Afficher les produits --}}
        <h1 class="my-5">Afficher les produits 📝</h1>
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
                        <form action="{{route ('produits.destroy', $produit)}}" method="POST" class="btn-group">
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
            @endforeach
            </tbody>
        </table>
        <hr>
    </div>
@endsection
