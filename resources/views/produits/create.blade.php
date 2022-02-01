@extends('layout.app')
@section('titre')
    Ajouter un Produit au Devis
@endsection

@section('content')

    <div class="container">
            <ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <h2>Ajouter un Produit 📝</h2>
                        <hr>
                    </li>
                </ul>
                <form action="{{route('produits.store')}}" method="POST" >
                    @csrf

                    {{-- Reference du Service --}}
                    <div class="form-group">
                        <label for="reference">Reference</label>
                        <input type="text" id="reference" class="form-control @error('reference') is-invalid @enderror"
                               name="reference"
                               placeholder="Veillez Rentrer la référence du produit">
                        @error('reference')
                        <div class="invalid-feedback">
                            {{ $errors->first('reference') }}
                        </div>
                        @enderror
                    </div>

                    {{-- Nom --}}
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                               name="name"
                               placeholder="Rentrez le nom du produit">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                        @enderror
                    </div>

                    {{-- Type du tarif unitaire --}}
                    <div class="form-group">
                        <label for="tarifUnitaire_type">Type du tarif unitaire</label>
                        <input type="text" id="tarifUnitaire_type" class="form-control @error('tarifUnitaire_type') is-invalid @enderror"
                               name="tarifUnitaire_type"
                               placeholder="Rentrez un type de tarif unitaire">
                        @error('tarifUnitaire_type')
                        <div class="invalid-feedback">
                            {{ $errors->first('tarifUnitaire_type') }}
                        </div>
                        @enderror
                    </div>

                    {{-- prestationDevisee Cout--}}
                    <div class="form-group">
                        <label for="tarifUnitaire_pht">Cout de la prestation hors-taxe</label>
                        <input id="tarifUnitaire_pht" class="form-control @error('tarifUnitaire_pht') is-invalid @enderror"
                               name="tarifUnitaire_pht"
                               placeholder="Veillez rentrer le prix de la prestation hors-taxe">
                        @error('tarifUnitaire_pht')
                        <div class="invalid-feedback">
                            {{ $errors->first('tarifUnitaire_pht') }}
                        </div>
                        @enderror
                    </div>

                    {{-- prestationDevisee quantité--}}
                    <div class="form-group">
                        <label for="prestationDevisee_qté">Quantité de la prestation devisee</label>
                        <input id="prestationDevisee_qté" class="form-control @error('prestationDevisee_qté') is-invalid @enderror"
                               name="prestationDevisee_qté"
                               placeholder="rentrez la quantité de la prestation devisee">
                        @error('prestationDevisee_qté')
                        <div class="invalid-feedback">
                            {{ $errors->first('prestationDevisee_qté') }}
                        </div>
                        @enderror
                    </div>

                    {{-- prestationCompl cout hors-tax --}}
                    <div class="form-group">
                        <label for="prestationDevisee_mht">Cout du montant hors-taxe de la prestation devisee</label>
                        <input id="prestationDevisee_mht" class="form-control @error('prestationDevisee_mht') is-invalid @enderror"
                               name="prestationDevisee_mht"
                               placeholder="rentrer un prix hors_taxe pour la prestation">
                        @error('prestationDevisee_mht')
                        <div class="invalid-feedback">
                            {{ $errors->first('prestationDevisee_mht') }}
                        </div>
                        @enderror

                        {{-- prestationCompl quantité --}}
                        <div class="form-group">
                            <label for="prestationCompl_qté">Quantité de prestation complémentaire</label>
                            <input id="prestationCompl_qté" class="form-control"
                                   name="prestationCompl_qté"
                                   placeholder="rentrer un prix hors_taxe pour la prestation">
                        </div>

                        {{-- prestationCompl_mht --}}
                        <div class="form-group">
                            <label for="prestationCompl_mht">Montant hors-taxe de la prestation complementaire</label>
                            <input id="prestationCompl_mht" class="form-control"
                                   name="prestationCompl_mht"
                                   placeholder="rentrez un montant hors-taxe de la prestation complementaire">
                        </div>

                        {{-- total_ht --}}
                        <div class="form-group">
                            <label for="total_ht">Total hors-taxe</label>
                            <input id="total_ht" class="form-control @error('total_ht') is-invalid @enderror"
                                   name="total_ht"
                                   placeholder="rentrer le total hors-taxe">
                            @error('total_ht')
                            <div class="invalid-feedback">
                                {{ $errors->first('total_ht') }}
                            </div>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Ajouter le produit au devis (idDevis)</button>
                </form>
            </ul>
    </div>
@endsection

