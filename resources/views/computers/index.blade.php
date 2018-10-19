@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Computers</div>

                <div class="card-body">
                    
                    <table class="table">
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
            </div>
        </div>
    </div>
</div>
@endsection
