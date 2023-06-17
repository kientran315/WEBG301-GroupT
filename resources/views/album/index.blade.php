
@extends('layout.layout')
<section class="home">
 <div class="text">Home</div>
     @foreach ($albums as $album)
     <ol style="margin-left: 3rem" class="list-group list-group-numbered">
         <li class="list-group-item d-flex justify-content-between align-items-start">
           <div class="ms-2 me-auto">
             <div class="fw-bold"><a style="color: #18191a;text-decoration:none;" href="{{url("/artalbumsists/".$album->id)}}">{{$album->name}}</a></div>
             {{$album->name}}
           </div>
           <span class="badge bg-secondary rounded-pill">
             <a href="{{url("/albums/".$album->id)}}" class="btn btn-secondary">View</a>
                   <a href="{{url("/albums/".$album->id."/edit")}}" class="btn btn-secondary">Edit</a>
                   <form action="{{url("/albums/".$album->id)}}" method="post" class="d-inline">
                     {{ method_field('DELETE') }}
                     @csrf
                     <button type="submit" class="btn btn-secondary" onclick="return confirm('Are you sure?');">Delete</button>
                   </form>
           </span>
         </li>
       </ol>
       @endforeach
     </section>
     