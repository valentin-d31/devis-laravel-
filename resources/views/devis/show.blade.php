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
        {{-- Afficher le Devis --}}
        <h1 class="my-2">{{$devi->titre}}</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        </div>
        <hr>

        {{-- Afficher le Demandeur --}}
        <h1 class="my-2">Demandeur - Entité de Facturation</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        </div>
        <tbody>
            <ul class="list-group">
                <li class="list-group-item" >Raison Sociale :</li>
                <li class="list-group-item" >Adresse :</li>
                <li class="list-group-item" >Code Postal Ville:</li>
                <li class="list-group-item" >TVA Intracom :</li>
                <li class="list-group-item" >RCS :</li>
                <li class="list-group-item" >Contact Administratif :</li>
            </ul>
        </tbody>

        {{-- Afficher la Commande --}}
        <h1 class="my-2">Commande (Commande->nom)</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        </div>
        <tbody>
        <ul class="list-group">
            <li class="list-group-item" >nom :</li>
            <li class="list-group-item" >Adresse :</li>
            <li class="list-group-item" >Complement d'Adresse:</li>
            <li class="list-group-item" >Code Postal Ville :</li>
            <li class="list-group-item" >TVA Intracom :</li>
            <li class="list-group-item" >Siret :</li>
            <li class="list-group-item" >Responsable Commercial :</li>
            <li class="list-group-item" >Responsable Technique :</li>
            <li class="list-group-item" >Responsable Administratif & Financier :</li>
        </ul>
        </tbody>

        {{-- Afficher le Dossier --}}
        <h1 class="my-2">Dossier</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        </div>
        <tbody>
            <ul class="list-group">
                <li class="list-group-item" >Titre : &nbsp{{$devi->titre}}</li>
                <li class="list-group-item" >Date d'ouverture : &nbsp{{$devi->date_ouverture}}</li>
                <li class="list-group-item" >Référence Allianz : &nbsp{{$devi->ref_allianz}}</li>
                <li class="list-group-item" >Référence Commande : &nbsp{{$devi->ref_commande}}</li>
                <li class="list-group-item" >Fait partie du Projet : &nbsp{{$devi->fait_partie_projet}}</li>
                <li class="list-group-item" >Exemple sur : &nbsp{{$devi->exemple_sur}}</li>
                <li class="list-group-item" >Date du 1er PDF : &nbsp{{$devi->date_1er_PDF}}</li>
                <li class="list-group-item" >Cost Center : &nbsp{{$devi->cost_center}}</li>
                <li class="list-group-item" >Cost Element : &nbsp{{$devi->cost_element}}</li>
                <li class="list-group-item" >Repartition si les 2 Costs Center  : &nbsp{{$devi->repartition_si_2_costs_center}}</li>
                <li class="list-group-item" >Impression  : &nbsp{{$devi->impression}}</li>
                <li class="list-group-item" >PDF Dynamique  : &nbsp{{$devi->pdf_dynamique}}</li>
                <li class="list-group-item" >Contact  : &nbsp{{$devi->contact}}</li>
            </ul>

            {{-- Afficher les Produits sous forme de tableau? --}}
            <h1 class="my-2">Produit(s)</h1>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            </div>
            <tbody>
            <ul class="list-group">
                <li class="list-group-item" >Reference :</li>
                <li class="list-group-item" >Name :</li>
                <li class="list-group-item" >Type Tarif UNITAIRE:</li>
                <li class="list-group-item" >Prix UNITAIRE € h.t. :</li>
                <li class="list-group-item" >Quantité PRESTATION DEVISEE :</li>
                <li class="list-group-item" >Montant € h.t PRESTATION DEVISEE :</li>
                <li class="list-group-item" >Quantité PRESTATION COMPLEMENTAIRE :</li>
                <li class="list-group-item" >Montant € h.t. PRESTATION COMPLEMENTAIRE :</li>
                <li class="list-group-item" >Total € h.t. :</li>
            </ul>
            </tbody>
            <hr>
            <form action="#" method="POST">
                @csrf
                {{-- Editer --}}
                <a href="{{ route('devis.edit', $devi->id) }}" class="btn btn-info"><i
                        class="far fa-edit"></i>Modifier le Devis</a>

                {{-- Download --}}
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-download">Télécharger Devis</i></button>
            </form>
        </tbody>
    </div>
@endsection


