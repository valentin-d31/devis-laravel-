@extends('layout.app')
@section('titre')
    Ajouter un Service au Devis
@endsection

@section('content')

    <div class="container">
            <ul>
                <form action="{{route('admin.store')}}" method="POST" >
                    @csrf

                    {{-- Reference du Service --}}
                    <div class="form-group">
                        <label for="reference">Reference</label>
                        <input type="text" id="reference" class="form-control @error('reference') is-invalid @enderror" name="reference"
                               placeholder="Veillez Rentrer la référence du produit">
                        @error('reference')
                        <div class="invalid-feedback">
                            {{ $errors->first('reference') }}
                        </div>
                        @enderror
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name"
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
                        <input type="text" id="tarifUnitaire_type" class="form-control @error('tarifUnitaire_type') is-invalid @enderror" name="tarifUnitaire_type"
                               placeholder="Rentrez un type de tarif unitaire">
                        @error('tarifUnitaire_type')
                        <div class="invalid-feedback">
                            {{ $errors->first('tarifUnitaire_type') }}
                        </div>
                        @enderror
                    </div>

                    {{-- prestationDevisee_qté--}}
                    <div class="form-group">
                        <label for="tarifUnitaire_pht">Cout de la prestation hors-taxe</label>
                        <input type="text" id="tarifUnitaire_pht" class="form-control @error('tarifUnitaire_pht') is-invalid @enderror"
                               name="tarifUnitaire_pht"
                               placeholder="Veillez rentrer le prix de la prestation hors-taxe">
                        @error('tarifUnitaire_pht')
                        <div class="invalid-feedback">
                            {{ $errors->first('tarifUnitaire_pht') }}
                        </div>
                        @enderror
                    </div>

                    {{-- prestationDevisee_mht--}}
                    <div class="form-group">
                        <label for="prestationDevisee_qté">Quantité de la prestation devisee</label>
                        <input type="text" id="prestationDevisee_qté" class="form-control @error('prestationDevisee_qté') is-invalid @enderror"
                               name="prestationDevisee_qté"
                               placeholder="rentrez la quantité de la prestation devisee">
                        @error('prestationDevisee_qté')
                        <div class="invalid-feedback">
                            {{ $errors->first('prestationDevisee_qté') }}
                        </div>
                        @enderror
                    </div>

                    {{-- prestationCompl_qté --}}
                    <div class="form-group">
                        <label for="prestationDevisee_mht">Cout du montant hors-taxe de la prestation devisee</label>
                        <input type="text" id="prestationDevisee_mht" class="form-control @error('prestationDevisee_mht') is-invalid @enderror"
                               name="rentrer un prix hors_taxe pour la prestation"
                               placeholder="prestationDevisee_mht">
                        @error('prestationDevisee_mht')
                        <div class="invalid-feedback">
                            {{ $errors->first('prestationDevisee_mht') }}
                        </div>
                        @enderror

                        {{-- prestationCompl_mht --}}
                        <div class="form-group">
                            <label for="prestationCompl_qté">quantité de prestation complémentaire</label>
                            <input type="text" id="prestationCompl_qté" class="form-control @error('prestationCompl_qté') is-invalid @enderror"
                                   name="rentrer un prix hors_taxe pour la prestation"
                                   placeholder="rentrez le nombre de prestation à rajouter au devis">
                            @error('prestationDevisee_qté')
                            <div class="invalid-feedback">
                                {{ $errors->first('prestationDevisee_qté') }}
                            </div>
                            @enderror
                        </div>

                        {{-- prestationCompl_mht --}}
                        <div class="form-group">
                            <label for="prestationCompl_mht"> quantité de prestation complémentaire</label>
                            <input type="text" id="prestationCompl_mht" class="form-control @error('prestationCompl_mht') is-invalid @enderror"
                                   name="prestationCompl_mht"
                                   placeholder="rentrez le nombre de prestation à rajouter au devis">
                            @error('prestationCompl_mht')
                            <div class="invalid-feedback">
                                {{ $errors->first('prestationCompl_mht') }}
                            </div>
                            @enderror
                        </div>

                        {{-- total_ht --}}
                        <div class="form-group">
                            <label for="total_ht">total hors-taxe</label>
                            <input type="text" id="total_ht" class="form-control @error('total_ht') is-invalid @enderror"
                                   name="total_ht"
                                   placeholder="rentrer le total hors-taxe">
                            @error('total_ht')
                            <div class="invalid-feedback">
                                {{ $errors->first('total_ht') }}
                            </div>
                            @enderror
                        </div>

                    <button type="submit" class="btn btn-primary">Ajouter le match</button>
                </form>
            </ul>
    </div>
@endsection

