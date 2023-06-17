@extends('layout.layout')
<section class="home">
    <div class="text">Home</div>
        <ol style="margin-left: 3rem" class="list-group list-group-numbered">
<form action="/albums" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Album Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Album Name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Album Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Album description">
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Album Year</label>
        <input type="text" class="form-control" id="year" name="year" placeholder="Album year">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</ol>
</section>
