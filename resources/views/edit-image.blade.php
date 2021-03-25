@extends('layouts.temp')

@section('editimage')
<section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                <div class="card-header">
                    Edit Image
                </div>
                    <div class="card-body">
                        @if(Session::has('image-update'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('image-update')}}
                        </div>
                        @endif
                        <form method="POST" action="{{route ('image.update')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$slider->id}}" />

                            <div class="form-group">
                                <label for="file">Choose Profile Image</label>
                                <input type="file" name="file" class="form-control" />
                                <img id="previewImg" alt="profile image" src="{{asset('images')}}/{{$slider->image}}" style="max-width:130px;margin-top:20px;" />
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
    @endsection


   