@extends('layout.layout')
<section class="home">
    <div class="text">Home</div>
        <ol style="margin-left: 5rem; margin-right:5rem" class="list-group list-group-numbered">
<form action="/artists" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label" style="color: red">Artist Name</label> 
        <input type="text" class="form-control" id="name" name="name" placeholder="name">
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label" style="color: red">Artist photo</label>
        <input type="file" class="form-control" id="photo" name="photo" placeholder="photo">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label" style="color: red">Artist age</label>
        <input type="text" class="form-control" id="age" name="age" placeholder="age">
    </div>
    <div class="mb-3">
        <label for="nationality" class="form-label" style="color: red">Nationality</label>
        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="nationality">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label" style="color: red">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email">
    </div>
    <div class="mb-3">
        <label for="biography" class="form-label" style="color: red">Biography</label>
        <textarea class="form-control" id="biography" name="biography" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</ol>
</section>