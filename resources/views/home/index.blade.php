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
                        <a href="{{ route('admin.index') }}" type="button" class="btn btn-primary my-2">Panel Administrateur</a>
                    </nav>
                </div>
            </nav>
        </div>

        {{-- Afficher les Devis --}}
        <h1 class="my-2">Afficher les devis 📃</h1>
        <tbody>
        <table class="table text-center">
            <form action="{{route('home.search')}}"   class="d-flex mr-3">

            <form action="{{ route('home.search') }}" method="POST" id="search-form" class="d-flex mr-3">
                <div class="input-group">
                    <input type="text" name="q" id="search-form" class="form-control" value="{{ request()->q ?? '' }}">
                    <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </form>
            <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Date d'ouverture projet</th>
                <th scope="col">Reference Allianz</th>
                <th scope="col">Nom Commande(_id)</th>
                <th scope="col">Référence Commande</th>
                <th scope="col"> Produit(s)(_id)</th>
                <th scope="col">Prix total (h.t.)(P_id)</th>
                <th scope="col">Date de Fermeture</th>
                <th scope="col">Contact</th>
            </tr>
            </thead>
            <div id="devis">
                @foreach($devis as $devi)
                    <tr>
                        <td>{{$devi->titre}}</td>
                        <td>{{$devi->date_ouverture}}</td>
                        <td>{{$devi->ref_allianz}}</td>
                        <td>->nom</td>
                        <td>{{$devi->ref_commande}}</td>
                        <td>nbr produits</td>
                        <td>->total_ht</td>
                        <td>Ajout fermeture dossier ?</td>
                        <td>{{$devi->contact}}</td>
                        <td>
                            <form action="#" method="post">
                                {{-- Voir --}}
                                <a href="{{ route('devis.show', $devi ) }}" class="btn btn-success"><i
                                        class="fas fa-eye">voir détails Devis</i></a>

                                {{-- Editer --}}
                                <a href="{{ route('produits.create') }}" class="btn btn-info"><i
                                        class="far fa-edit">Ajouter Produit(s)</i></a>

                                {{-- Download --}}
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-download">Télécharger Devis</i></button>
                            </form>

                        </td>
                    </tr>

                    <p class="text-center"></p>
                @endforeach
                {{-- Script Search JS --}}
            </div>
                <script>
                    $( document ).ready(function() {

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
                                const devis = document.getElementById('devis');
                                devis.innerHTML = '';

                                {{--console.log(data)--}}
                                {{--object.entries pour transforrmer les datas en [] de proprietes--}}
                                Object.entries(data)[0][1].forEach(element => {
                                    devis.innerHTML += `<h1>${element.name}</h1>
                                    <p>${element.reference}</p>
                                    `
                                });
                            })
                        }).catch(error => {
                            console.log(error)
                        })
                    });
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
<script>
    console.log('laBiteDeAlex');
</script>

