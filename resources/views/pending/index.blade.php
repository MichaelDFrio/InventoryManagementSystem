<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
   <div class="col-lg-6">
      <h1>Contacts</h1>
      <table class="table table-striped">
          @foreach ($pending as $pending)
              <tr>
                  <th><a href="/pending/{{ $pending->id }}">{{ $pending->id }}</a></th>
                  <th>{{ $pending->first_name }}</th>
                  <th>{{ $contact->last_name }}</th>
                  <th>{{ $contact->email }}</th>
              </tr>
          @endforeach
      </table>
    </div>
