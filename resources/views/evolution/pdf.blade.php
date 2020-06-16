
<div class="container">
    <section id="Obtener Usuarios">
        <h3>{{$evolution->type}}  de {{$patient->name}} {{$patient->lastName}}</h3>
        <br>
        <div class="row">
            <div class="form-group row col-md-6">
                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>
                <div class="col-md-8">
                    <input disabled id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $evolution->type }}" required autocomplete="type" autofocus>
                </div>
            </div>
            <div class="form-group row col-md-6">
                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Sintomas') }}</label>
                <div class="col-md-8">
                    <input disabled id="syptoms" type="text" class="form-control @error('syptoms') is-invalid @enderror" name="syptoms" value="{{ $evolution->syptoms }}" required autocomplete="syptoms" autofocus>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group row col-md-6">
                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Presion') }}</label>
                <div class="col-md-8">
                    <input disabled id="pressure" type="text" class="form-control @error('pressure') is-invalid @enderror" name="pressure" value="{{ $evolution->pressure }}" required autocomplete="pressure" autofocus>
                </div>
            </div>
            <div class="form-group row col-md-6">
                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Temperatura') }}</label>
                <div class="col-md-8">
                    <input disabled id="temp" type="text" class="form-control @error('temp') is-invalid @enderror" name="temp" value="{{ $evolution->temp }}" required autocomplete="temp" autofocus>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group row col-md-6">
                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Ritmo Cardiaco') }}</label>
                <div class="col-md-8">
                    <input disabled id="specialty" type="text" class="form-control @error('rc') is-invalid @enderror" name="rc" value="{{ $evolution->rc }}" autocomplete="rc" autofocus>
                </div>
            </div>
            <div class="form-group row col-md-6">
                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Diagnostico') }}</label>
                <div class="col-md-8">
                    <input disabled id="diagnosis" type="text" class="form-control @error('diagnosis') is-invalid @enderror" name="diagnosis" value="{{ $evolution->diagnosis }}"  autocomplete="diagnosis" autofocus>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group row col-md-12">
                <label for="age" class="col-md-2 col-form-label text-md-right">{{ __('Tratamiento') }}</label>
                <div class="col-md-10">
                    <textarea disabled id="treatment" type="text" class="form-control @error('treatment') is-invalid @enderror" name="treatment" value=""  autocomplete="treatment" autofocus>{{ $evolution->treatment }}</textarea>
                </div>
            </div>
        </div>
    </section>
</div>