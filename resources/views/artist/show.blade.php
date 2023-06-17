@extends('layout.layout')
<section class="home">
    <div class="text">Home</div>
        <ol style="margin-left: 3rem" class="list-group list-group-numbered">
    <div class="card" style="margin-right: 2rem">
        <div class="card-body">
            <img src="{{url("/upload/upload/".$artist->photo)}} " alt="">
            <h4 class="card-title">{{$artist->name}}</h4>
            <p class="card-text">{{$artist->age}}</p>
            <p class="card-text">{{$artist->email}}</p>
            <p class="card-text">{{$artist->nationality}}</p>
            <p class="card-text">{{$artist->biography}}</p>
        </div>
    </div>
</ol>
</section>
