@extends('layout.app')
@section('titre')
    Ajouter un Service au Devis
@endsection

@section('content')

    <div class="container">
        <ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                        <h2>Créer un Devis 📃</h2>
                    <hr>
                </li>
            </ul>
            <form action="#" method="POST" >
                @csrf

                {{-- Titre --}}
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" class="form-control @error('titre') is-invalid @enderror"
                           name="titre"
                           placeholder="Veillez attribuer un titre au devis">
                    @error('titre')
                    <div class="invalid-feedback">
                        {{ $errors->first('titre') }}
                    </div>
                    @enderror
                </div>

                {{-- date_ouverture --}}
                <div class="form-group">
                    <label for="date_ouverture">Date d'ouverture</label>
                    <input type="text" id="date_ouverture" class="form-control @error('date_ouverture') is-invalid @enderror"
                           name="date_ouverture"
                           placeholder="Selectionner une date d'ouverture">
                    @error('date_ouverture')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_ouverture') }}
                    </div>
                    @enderror
                </div>

                {{-- ref_allianz --}}
                <div class="form-group">
                    <label for="ref_allianz">reference allianz</label>
                    <input type="text" id="ref_allianz" class="form-control @error('ref_allianz') is-invalid @enderror"
                           name="ref_allianz"
                           placeholder="Rentrez une réference">
                    @error('ref_allianz')
                    <div class="invalid-feedback">
                        {{ $errors->first('ref_allianz') }}
                    </div>
                    @enderror
                </div>

                {{-- ref_commande--}}
                <div class="form-group">
                    <label for="ref_commande">reference commande</label>
                    <input id="ref_commande" class="form-control @error('ref_commande') is-invalid @enderror"
                           name="ref_commande"
                           placeholder="Veillez rentrer la reference de la commande">
                    @error('ref_commande')
                    <div class="invalid-feedback">
                        {{ $errors->first('ref_commande') }}
                    </div>
                    @enderror
                </div>

                {{-- fait_partie_projet--}}
                <div class="form-group">
                    <label for="fait_partie_projet">Fait partie du projet </label>
                    <input id="fait_partie_projet" class="form-control"
                           name="fait_partie_projet"
                           placeholder="Fait partie du projet">
                </div>

                {{-- exemple_sur --}}
                <div class="form-group">
                    <label for="exemple_sur">Exemple de projet</label>
                    <input id="exemple_sur" class="form-control"
                           name="exemple_sur"
                           placeholder="Rentrez un exemple de projet">
                </div>

                {{-- date_1er_PDF --}}
                <div class="form-group">
                    <label for="date_1er_PDF">Date du premier PDF</label>
                    <input id="date_1er_PDF" class="form-control"
                           name="date_1er_PDF"
                           placeholder="Date du permier pdf">
                    @error('date_1er_PDF')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_1er_PDF') }}
                    </div>
                     @enderror
                </div>

                {{-- cost_center --}}
                <div class="form-group">
                    <label for="cost_center">Cost Center</label>
                    <input id="cost_center" class="form-control"
                           name="cost_centerF"
                           placeholder="cost center">
                    @error('cost_center')
                    <div class="invalid-feedback">
                        {{ $errors->first('cost_center') }}
                    </div>
                    @enderror
                </div>

                {{-- cost_element --}}
                <div class="form-group">
                    <label for="cost_element">Cost Element</label>
                    <input id="cost_element" class="form-control"
                           name="cost_element"
                           placeholder="cost element">
                    @error('cost_element')
                    <div class="invalid-feedback">
                        {{ $errors->first('cost_element) }}
                    </div>
                    @enderror
                </div>

                {{-- repartition_si_2_costs_center --}}
                <div class="form-group">
                    <label for="repartition_si_2_costs_center">Repartition si 2 costs center</label>
                    <input id="repartition_si_2_costs_center" class="form-control"
                           name="repartition_si_2_costs_center"
                           placeholder="repartition si 2 costs_center">
                    @error('repartition_si_2_costs_center')
                    <div class="invalid-feedback">
                        {{ $errors->first('repartition_si_2_costs_center') }}
                    </div>
                    @enderror
                </div>

                {{-- impression --}}
                <div class="form-group">
                    <label for="impression">Impression</label>
                    <input id="impression" class="form-control"
                           name="impression"
                           placeholder="impression">
                    @error('impression')
                    <div class="invalid-feedback">
                        {{ $errors->first('impression') }}
                    </div>
                    @enderror
                </div>

                {{-- PDF_dynamique--}}
                <div class="form-group">
                    <label for="PDF_dynamique">PDF Dynamique</label>
                    <input id="PDF_dynamique" class="form-control"
                           name="date_1er_PDF"
                           placeholder="pdf">
                    @error('PDF_dynamique')
                    <div class="invalid-feedback">
                        {{ $errors->first('PDF_dynamique') }}
                    </div>
                    @enderror
                </div>

                {{-- contact--}}
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input id="contact" class="form-control"
                           name="contact"
                           placeholder="contact">
                    @error('contact')
                    <div class="invalid-feedback">
                        {{ $errors->first('contact') }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Ajouter le produit au devis (idDevis)</button>
            </form>
        </ul>
    </div>
@endsection

