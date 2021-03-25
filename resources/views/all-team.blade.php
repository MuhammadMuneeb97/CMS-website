@extends('layouts.temp')

@section('allteam')
    <section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Team Data <a href="/add-team" class="btn btn-success">Add New</a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('team_deleted'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get('team_deleted')}}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Text</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employes as $employe)
                                <tr>
                                    <td>{{$employe->name}}</td>
                                    <td>{{$employe->text}}</td>
                                    <td><img src="{{asset('teamimage')}}/{{$employe->image}}" style="max-width:150px;"></td>
                                    <td>
                                        <a href="/edit-team/{{$employe->id}}" class="btn btn-info" >Edit</a>
                                    </td>
                                    <td>
                                    <a href="/delete-team/{{$employe->id}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
@endsection