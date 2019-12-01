@extends('base')

@section('main')

  <div class="row">
    <div class="col-sm-12">
      <h1 class="display-3">Contacten</h1>
         <table class="table table-striped">
              <thead>
                  <tr>
                    <td>ID</td>
                    <td>Voornaam</td>
                    <td>Achternaam</td>
                    <td>email</td>
                    <td>Staat</td>
                    <td>Land</td>
                    <td>Werk</td>
                    <!-- hier stond meer -->
                    <td colspan = 2>Actions</td>
                  </tr>
              </thead>
          <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->first_name}}</td>
            <td>{{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->city}}</td>
            <td>{{$contact->country}}</td>
            <td>{{$contact->job_title}}</td>
          <!-- hier stond meer -->
            <td>
                <a href="{{route('contacts.show', $contact->id)}}" class="btn btn-warning">show</a>
            </td>

            <td>
                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Aanpassen</a>
            </td>

            <td>
               <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                <button class="btn btn-danger" type="submit">Verwijderen</button>
              </form>
            </td>
         </tr>
        @endforeach
     </tbody>
   </table>
 <div>
</div>
@endsection
