@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Groups</div>

                <div class="card-body">
                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">GroupName</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($groups as $group)
                            <tr>
                                <th><a href="#">{{ $group->getCommonName() }}</a></th>
                                <td>{{ $group->getCommonName() }}</td>
                                <td>{{ $group->getCommonName() }}</td>
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
