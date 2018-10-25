@extends('layouts.app')

@section('content')
<div class="container">
    <table id="dataTable" class="table table-striped table-hover table-bordered" style="width:100%">
        <thead>
          <tr>
            <th scope="col">Host Name</th>
            <th scope="col">Operating System</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($computers as $computer)
            <tr>
                <th><a href="#">{{ $computer->getDnsHostName() }}</a></th>
                <td>{{ $computer->getOperatingSystem() }} {{ $computer->getOperatingSystemVersion() }}</td>
                <td>{{ $computer->getDescription() }}</td>
            </tr> 
            @endforeach
        </tbody>
      </table>
</div>
@endsection
