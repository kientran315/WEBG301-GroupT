@extends('layout.layout')
<section class="home">
 <div class="text">Home</div>
     @foreach ($categories as $category)
     <ol style="margin-left: 3rem" class="list-group list-group-numbered">
         <li class="list-group-item d-flex justify-content-between align-items-start">
           <div class="ms-2 me-auto">
             <div class="fw-bold"><a style="color: #18191a;text-decoration:none;" href="{{url("/categories/".$category->id)}}">{{$category->name}}</a></div>
             {{$category->name}}
           </div>
           <span class="badge bg-secondary rounded-pill">
             <a href="{{url("/categories/".$category->id)}}" class="btn btn-secondary">View</a>
                   <a href="{{url("/categories/".$category->id."/edit")}}" class="btn btn-secondary">Edit</a>
                   <form action="{{url("/categories/".$category->id)}}" method="post" class="d-inline">
                     {{ method_field('DELETE') }}
                     @csrf
                     <button type="submit" class="btn btn-secondary" onclick="return confirm('Are you sure?');">Delete</button>
                   </form>
           </span>
         </li>
       </ol>
       @endforeach
       <div style="margin-top: 3rem">
        @include('layout.footer')
    </div>
     </section>