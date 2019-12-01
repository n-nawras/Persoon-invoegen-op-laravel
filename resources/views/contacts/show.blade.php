@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Contact Kijken</h1>
  <div>

          <div class="form-group">
              <label for="first_name">Voornaam:</label>
              <strong>{{$contact->first_name}}</strong>
          </div>

          <div class="form-group">
              <label for="last_name">Achternaam:</label>
              <strong>{{$contact->last_name}}</strong>
          </div>

          <div class="form-group">
              <label for="email">email:</label>
              <strong>{{$contact->email}}</strong>
          </div>

          <div class="form-group">
              <label for="city">Staat:</label>
              <strong>{{$contact->city}}</strong>
          </div>

          <div class="form-group">
              <label for="country">Land:</label>
              <strong>{{$contact->country}}</strong>
          </div>

          <div class="form-group">
              <label for="job_title">Werk:</label>
              <strong>{{$contact->job_title}}</strong>
          </div>
          <!-- hier staat eigenlijk meer -->
          <a href="{{route('contacts.create')}}" class="btn btn-lg btn-warning">Nieuw</a>
      </form>
  </div>
</div>
</div>
@endsection
