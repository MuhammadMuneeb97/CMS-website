@extends('layouts.temp')

@section('editteam')
    <section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Edit Team Member
                    </div>
                    <div class="card-body">
                    @if(Session::has('team_updated'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('team_updated')}}
                        </div>
                        @endif
                        <form method="POST" action="{{route('team.update')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$employe->id}}" />
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{$employe->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="text">Enter text here</label>
                                <textarea class="form-control" name="text" id="text" cols="30" rows="10">{{$employe->text}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">Choose Profile Image</label>
                                <input type="file" name="file" class="form-control" />
                                <img src="{{asset('teamimage')}}/{{$employe->image}}" alt="teamimage" style="max-width:130px;margin-top:20px;">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#text').summernote({
        placeholder: 'Enter Text Here',
        tabsize: 2,
        height: 100
      });
    </script>
    </section>
@endsection