@extends('layouts.temp')

@section('alldata')
    <section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        All Data
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Text</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{$student->text}}</td>
                                    <td><img src="{{asset('datai')}}/{{$student->image}}" style="max-width:150px;"></td>
                                    <td>
                                        <a href="/edit-data/{{$student->id}}" class="btn btn-info" >Edit</a>
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