@extends('layout.app')
@section('titre')
    Devis
@endsection

@section('content')
    <div class="container">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <div class="container">
                    <nav class="nav d-flex justify-content-between">
                        <a href="{{ route('produits.index') }}" type="button" class="btn btn-primary my-2">Panel Administrateur</a>
                    </nav>
                </div>
            </nav>
        </div>

        {{-- Afficher les Devis --}}
        <h1 class="my-2">Afficher les devis</h1>
        <tbody>
        <table class="table text-center">
            <form action="{{ route('home.search') }}" method="POST" id="search-form" class="d-flex mr-3">
                <div class="input-group">
                    <input type="text" name="q" id="q" class="form-control" value="{{ request()->q ?? '' }}">
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
            <div id="produits">
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
                            <form action="#" method="post">
                                {{-- Voir  --}}
                                <a href="#" class="btn btn-success"><i
                                        class="fas fa-eye"></i></a>

                                {{-- Editer  --}}
                                <a href="{{ route('produits.create') }}" class="btn btn-info"><i
                                        class="far fa-edit"></i></a>

                                {{-- Supprimer  --}}
                                <button type="submit" class="btn btn-danger"><i class="fa fa-download"></i></button>
                            </form>

                        </td>
                    </tr>

                    <p class="text-center"></p>
                @endforeach
            </div>
                <script>
                    const form = document.getElementById('search-form');

                    form.addEventListener('submit', function(e) {
                        e.preventDefault();

                        const token = document.querySelector('meta[name="csrf-token"]').content;
                        const url = this.getAttribute('action');
                        const  q = document.getElementById('q').value;

                        fetch(url, {
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': token
                            },
                            method: 'post',
                            body: JSON.stringify({
                                q: q
                            })
                        }).then(response => {
                            response.json().then(data => {
                                const produits = document.getElementById('produits');
                                produits.innerHTML = '';

                                {{--console.log(data)--}}
                                {{--object.entries pour transforrmer les datas en [] de proprietes--}}
                                Object.entries(data)[0][1].forEach(element => {
                                    produits.innerHTML += `<h1>${element.name}</h1>
                                    <p>${element.reference}</p>
                                    `
                                });
                            })
                        }).catch(error => {
                            console.log(error)
                        })
                    });

                </script>
                 </table>
            </tbody>
        <hr>
        @if ( session()->has('success'))
            <div class="alert alert-success" role="alert">
               {{ session()->get('success') }}
            </div>
        @endif
    </div>
@endsection

