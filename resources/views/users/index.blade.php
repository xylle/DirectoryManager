@extends('layouts.app')

@section('content')
<div class="container">
    <table id="dataTable" class="table table-striped table-hover table-bordered" style="width:100%">
        <thead>
          <tr>
            <th scope="col">Username</th>
            <th scope="col">Display Name</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th><a href="{{ route('users.show', ['id' => $user->getAccountName()] ) }}">{{ $user->getAccountName() }}</a></th>
                <td>{{ $user->getCommonName() }}</td>
                <td>{{ $user->getDescription() }}</td>
            </tr> 
            @endforeach
        </tbody>
      </table>
</div>
@endsection
