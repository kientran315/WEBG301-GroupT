@extends('layout.layout')
<section class="home">
 <div class="text">Home</div>
     
     <ol style="margin-left: 3rem" class="list-group list-group-numbered">
         
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{$album->name}}</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title">{{$album->description}}</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title">{{$album->year}}</h4>
    </div>
</div>
       </ol>
      
     </section>