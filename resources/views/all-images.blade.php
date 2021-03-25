@extends('layouts.temp')

@section('allimage')
<section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">
                    All Images <a href="/add-image" class="btn btn-success">Add Image</a>
                </div>
                    <div class="card-body">
                        @if(Session::has('Image_deleted'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get('Image_deleted')}}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach ($slider as $slider)
                                    <tr>
                                        <td><img src="{{asset ('/images')}}/{{$slider->image}}" style="max-width:60px;"></td>
                                        <td>
                                            <a href="/edit-image/{{$slider->id}}" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>
                                            <a href="/delete-image/{{$slider->id}}" class="btn btn-danger">Delete</a>
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