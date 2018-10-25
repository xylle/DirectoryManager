@extends('layouts.app')

@section('content')
<div class="container">

    <table id="dataTable" class="table table-striped table-hover table-bordered" style="width:100%">
        <thead>
          <tr>
            <th scope="col">GroupName</th>
            <th scope="col">Managed By</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($groups as $group)
            <tr>
                <th><a href="#">{{ $group->getCommonName() }}</a></th>
                <td>{{ $group->getAttribute('managedby', 0) }}</td>
                <td>{{ $group->getDescription() }}</td>
            </tr> 
            @endforeach
        </tbody>
      </table>
</div>
@endsection
