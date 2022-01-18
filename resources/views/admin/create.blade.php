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
                               placeholder="Rentrer une référence">
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
                               placeholder="Rentrez le nom nom">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                        @enderror
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="tarifUnitaire_type">tarifUnitaire_type</label>
                        <input type="text" id="tarifUnitaire_type" class="form-control @error('tarifUnitaire_type') is-invalid @enderror" name="tarifUnitaire_type"
                               placeholder="tarifUnitaire_type">
                        @error('tarifUnitaire_type')
                        <div class="invalid-feedback">
                            {{ $errors->first('tarifUnitaire_type') }}
                        </div>
                        @enderror
                    </div>

                    {{-- tarifUnitaire_pht --}}
                    <div class="form-group">
                        <label for="tarifUnitaire_pht">tarifUnitaire_pht</label>
                        <input type="text" id="tarifUnitaire_pht" class="form-control @error('tarifUnitaire_pht') is-invalid @enderror"
                               name="tarifUnitaire_pht"
                               placeholder="Rentrez le tarifUnitaire_pht">
                        @error('tarifUnitaire_pht')
                        <div class="invalid-feedback">
                            {{ $errors->first('tarifUnitaire_pht') }}
                        </div>
                        @enderror
                    </div>

                    {{-- prestationDevisee_qté --}}
                    <div class="form-group">
                        <label for="prestationDevisee_qté">prestationDevisee_qté</label>
                        <input type="text" id="prestationDevisee_qté" class="form-control @error('prestationDevisee_qté') is-invalid @enderror"
                               name="prestationDevisee_qté"
                               placeholder="prestationDevisee_qté">
                        @error('prestationDevisee_qté')
                        <div class="invalid-feedback">
                            {{ $errors->first('prestationDevisee_qté') }}
                        </div>
                        @enderror
                    </div>

                    {{-- prestationDevisee_mht --}}
                    <div class="form-group">
                        <label for="prestationDevisee_mht">prestationDevisee_mht</label>
                        <input type="text" id="prestationDevisee_mht" class="form-control @error('prestationDevisee_mht') is-invalid @enderror"
                               name="prestationDevisee_mht"
                               placeholder="prestationDevisee_mht">
                        @error('prestationDevisee_mht')
                        <div class="invalid-feedback">
                            {{ $errors->first('prestationDevisee_mht') }}
                        </div>
                        @enderror

                        {{-- prestationCompl_qté --}}
                        <div class="form-group">
                            <label for="prestationCompl_qté">prestationCompl_qté</label>
                            <input type="text" id="prestationCompl_qté" class="form-control @error('prestationCompl_qté') is-invalid @enderror"
                                   name="prestationCompl_qté"
                                   placeholder="prestationCompl_qté">
                            @error('prestationDevisee_qté')
                            <div class="invalid-feedback">
                                {{ $errors->first('prestationDevisee_qté') }}
                            </div>
                            @enderror
                        </div>

                        {{-- prestationCompl_mht --}}
                        <div class="form-group">
                            <label for="prestationCompl_mht">prestationCompl_mht</label>
                            <input type="text" id="prestationCompl_mht" class="form-control @error('prestationCompl_mht') is-invalid @enderror"
                                   name="prestationCompl_mht"
                                   placeholder="prestationCompl_mht">
                            @error('prestationCompl_mht')
                            <div class="invalid-feedback">
                                {{ $errors->first('prestationCompl_mht') }}
                            </div>
                            @enderror
                        </div>

                        {{-- total_ht --}}
                        <div class="form-group">
                            <label for="total_ht">total_ht</label>
                            <input type="text" id="total_ht" class="form-control @error('total_ht') is-invalid @enderror"
                                   name="total_ht"
                                   placeholder="total_ht">
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

