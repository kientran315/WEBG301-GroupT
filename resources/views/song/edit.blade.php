@extends('layout.layout')
    <section class="home">
        <div class="text">Home</div>
            <ol style="margin-left: 5rem; margin-right:5rem" class="list-group list-group-numbered">
                <form action="/songs/{{$song->id}}" method="post" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label " style="color: red">Song name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$song->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="video" class="form-label" style="color: red">Song file</label>
                        <input type="file" class="form-control" id="video" name="video" placeholder="name" value="{{$song->video}}">
                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label" style="color: red">Artist</label>
                        <select id="artist" name="artist" class="form-select" aria-label="Select Author">
                            <option selected>Please choose one</option>
                            @foreach($artists as $artist)
                            <option {{ ($artist->id == $song->artist->id)?"selected":""}} value="{{$artist->id}}">{{$artist->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="album" class="form-label" style="color: red">Album</label>
                        <select id="album" name="album" class="form-select" aria-label="Select Author">
                            <option selected>Please choose one</option>
                            @foreach($albums as $album)
                            <option {{ ($album->id == $song->album->id)?"selected":""}} value="{{$album->id}}">{{$album->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label" style="color: red">Category</label>
                        <select id="category" name="category" class="form-select" aria-label="Select Author">
                            <option selected>Please choose one</option>
                            @foreach($categories as $category)
                            <option {{ ($category->id == $song->category->id)?"selected":""}} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="national" class="form-label" style="color: red">National</label>
                        <select id="national" name="national" class="form-select" aria-label="Select Author">
                            <option selected>Please choose one</option>
                            @foreach($nationals as $national)
                            <option {{ ($national->id == $song->national->id)?"selected":""}} value="{{$national->id}}">{{$national->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </ol>
            <div style="margin-top: 3rem">
                @include('layout.footer')
            </div>
    </section>
    