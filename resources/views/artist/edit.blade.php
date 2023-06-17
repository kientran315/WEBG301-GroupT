@extends('layout.layout')
<section class="home">
    <div class="text">Home</div>
        <ol style="margin-left: 5rem; margin-right:5rem" class="list-group list-group-numbered">
<form action="/artists/{{$artist->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Artist Name</label>
        <input type="text" class="form-control" id="name" value="{{$artist->name}}" name="name" placeholder="Artist Name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Author Email</label>
        <input type="text" class="form-control" id="email"  value="{{$artist->email}}" name="email" placeholder="Author Email">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Artist Age</label>
        <input type="text" class="form-control" id="age" value="{{$artist->age}}" name="age" placeholder="Artist Age">
    </div>
    <div class="mb-3">
        <label for="nationality" class="form-label">Artist Nationality</label>
        <input type="text" class="form-control" id="nationality" value="{{$artist->nationality}}" name="nationality" placeholder="Artist Age">
    </div>
    <div class="mb-3">
        <label for="biography" class="form-label">Artist Biography</label>
        <textarea class="form-control" id="biography" name="biography" rows="3">{{$artist->biography}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</ol>
</section>
