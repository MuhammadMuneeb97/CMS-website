@extends('layouts.temp')

@section('adddata')
    <section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add Data
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('data.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="text">Enter text here</label>
                                <textarea class="form-control" name="text" id="text" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">Choose Profile Image</label>
                                <input type="file" name="file" class="form-control" />
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