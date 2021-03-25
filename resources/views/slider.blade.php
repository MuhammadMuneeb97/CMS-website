@extends('layouts.temp')

@section('addimage')
<section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                <div class="card-header">
                    Add New Image
                </div>
                    <div class="card-body">
                        @if(Session::has('image_added'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('image_added')}}
                        </div>
                        @endif
                        <form method="POST" action="{{route ('image.store')}}" enctype="multipart/form-data">
                            @csrf
                            

                            <div class="form-group">
                                <label for="file">Choose Profile Image</label>
                                <input type="file" name="file" class="form-control" />
                                <img id="previewImg" alt="profile image" style="max-width:130px;margin-top:20px;" />
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