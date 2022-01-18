@extends('layout.app')
@section('titre')
    Ajouter un Service au Devis
@endsection

@section('content')

    <div class="container">
            <ul>
                <form action="#" method="#" >
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

                    <button type="submit" class="btn btn-primary">Ajouter le match</button>
                </form>
            </ul>
    </div>
@endsection

