@extends ('layout')
@section ('title', 'Curriculum')

@section('content')

<form method="POST" action ="{{ route('curriculums.store') }}">
@csrf
<div class="container-4">
    <div class="org-accordion">
        <div class="container">
    <div class="py-5 text-center resize-text">
      <p class="title">ME ENCONTRE UM EMPREGO</p>
      <p class="lead">
        Suas informações ficaram disponíveis apenas para recrutadores de empresas
      </p>
    </div>

    @if (session('success'))
      <div class="flash-success">
          {{ session('success')}}
      </div>
    @endif

      <div class="col-md-10 col-lg-12">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6 text-start">
              <label for="fname" class="form-label">Primeiro nome</label>
              @error('fname')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('fname') error-border @enderror" name="fname" value="{{ old('fname') }}" placeholder="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6 text-start">
              <label for="lname" class="form-label">Último nome</label>
              @error('lname')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('lname') error-border @enderror" name="lname" value="{{ old('lname') }}" placeholder="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12 text-start">
              <label for="url" class="form-label">Linkedin <span class="text-muted" style="font-size: 15px;">(Insira apenas o conteúdo após o linkedin.com/in)</span></label>
              @error('linkedin')
                <div class="error">
                  {{$message}}
                </div>
                @enderror
              <div class="input-group has-validation">
                <input type="text" class="form-control @error('linkedin') error-border @enderror" name="linkedin" value="{{ old('linkedin') }}" placeholder="/fernando-caldas-50641824a/" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12 text-start">
              <label for="email" class="form-label">Email <span class="text-muted" style="font-size: 15px;">(Be sure to provide an email that you have access to)</span></label>
              @error('emailforcontact')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('emailforcontact') error-border @enderror" name="emailforcontact" value="{{ old('emailforcontact') }}" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-sm-6 text-start">
              <label for="zip" class="form-label">Cep <span class="text-muted" style="font-size: 15px;">(Opicional)</span></label>
              <input type="text" class="form-control" name="zip" value="{{ old('zip') }}" placeholder="">
            </div>

            <div class="col-sm-6 text-start">
              <label for="twitter" class="form-label">Twitter <span class="text-muted" style="font-size: 15px;">(Opicional)</span></label>
              <input type="text" class="form-control" name="twitter" value="{{ old('twitter') }}" placeholder="@you">
            </div>

            <div class="col-sm-6 text-start">
              <label for="instagram" class="form-label">Instagram <span class="text-muted" style="font-size: 15px;">(Opicional)</span></label>
              <input type="text" class="form-control" name="instagram" value="{{ old('instagram') }}" placeholder="@you">
            </div>

            <div class="col-md-6 text-start">
              <label for="country" class="form-label">País</label>
              @error('country')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('country') error-border @enderror" name="country" value="{{ old('country') }}" placeholder="" required>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-6 text-start">
              <label for="state" class="form-label">Estado</label>
              @error('state')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('state') error-border @enderror" name="state" value="{{ old('state') }}" placeholder="" required>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-6 text-start">
              <label for="city" class="form-label">Cidade</label>
              @error('city')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('city') error-border @enderror" name="city" value="{{ old('city') }}" placeholder="" required>
              <div class="invalid-feedback">
              Please provide a valid city.
              </div>
            </div>
          </div>

          <div class="col-12 text-start">
              <label for="job" class="form-label">Emprego desejado</label>
              @error('job')
                <div class="error">
                  {{$message}}
                </div>
                @enderror
              <div class="input-group has-validation">
                <input type="text" class="form-control @error('job') error-border @enderror" name="job" value="{{ old('job') }}" placeholder="Developer Jr" required>
              <div class="invalid-feedback">
                  Your desired job is required.
                </div>
              </div>
            </div>

            <div class="col-12 text-start">
              <label for="description" class="form-label">Descrição <span class="text-muted" style="font-size: 15px;">(Fale um pouco de você e suas habilidades)</span></label>
              <textarea name="description" style="height: 200px;">{{ old('description') }}</textarea>
            </div>
            <br>
        <div class="g-recaptcha" data-sitekey="6LfKKWIjAAAAAI4EeR27iOd2fmksvdqsZGq3dBlR"></div>
          <hr class="my-4">
          <button class="button-home" style="width: 100%;" type="submit" href="">Enviar</button>
          
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/css/script.js"></script>
</form>

@endsection