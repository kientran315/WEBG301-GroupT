@extends ('layout.layout')
    <section class="home">
        <div class="text">Home</div>
     
        <ol style="margin-left: 3rem; " class="list-group list-group-numbered">
            <div class="container">
                <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col">
                        <video style="border-radius:10px" controls width="800" height="500" autoplay src="{{url("/upload/upload/".$song->video)}} " id="myVideo">Video</video>
                       

                    </div>
                    <div class="col" style="margin-top:5rem;">
                        <h4 class="card-title">You are watching MV: {{$song->name}}</h4>
                        <p class="card-text">Artist: 
                            @foreach($song->artists as $artist)
                                {{$artist->name}}
                            @endforeach
                        </p>
                        <p class="card-text">Category: {{$song->category->name}}</p>
                        <p class="card-text">Album: {{$song->album->name}}</p>
                        <p class="card-text">National:{{$song->national->name}}</p>
                        <div style="text-align:center;margin-top:3rem">
                            <a class="btnbackhome" href="/songs" style="padding:4px 6px; border-radius:20px; border:2px solid black;text-decoration:none;color:black; ">
                            Back to home page</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
            </div>
          </ol>
          <div style="margin-top: 3rem">
            @include('layout.footer')
        </div>
       
          
       
    </section>


    
   