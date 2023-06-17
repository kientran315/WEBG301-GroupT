<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <a href="http://127.0.0.1:8000/"><img style="width:60px; height:60px;border-radius:50%;" src="{{ asset('a3.png') }}" alt=""></a>
            </span>
            @if (Auth::check()) 
          <div style=" margin-left:2rem;" class="text logo-text">
              <span class="name">{{ Auth::user()->name }} </span>
              <a class="btnlg" style="text-decoration: none;color:red" href="/logout">
                Logout
              </a>
          </div>
          @else
          <div style=" margin-left:2rem;" class="text logo-text">
            
            <a class="nav-link" href="/login">Login <span class="visually-hidden"></span></a>
            <a class="nav-link" href="/register">Register <span class="visually-hidden"></span></a>
        </div>
          
        @endif
        </div>
  
        <i class='bx bx-chevron-right toggle'></i>
    </header>
  
    <div class="menu-bar">
        <div class="menu">
  
            <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Search...">
            </li>
  
            <ul class="menu-links">
              <li class="nav-link">
                  <a href="/songs">
                    <i class='bx bx-play icon' ></i>
                      <span class="text nav-text">ALL MV</span>
                  </a>
              </li>
              <li class="nav-link">
                <a href="/songs/create">
                  <i class='bx bx-plus-circle icon' ></i>
                    <span class="text nav-text">New MV</span>
                </a>
            </li>
              <li class="nav-link">
                  <a href="/artists">
                      <i class='bx bx-heart icon' ></i>
                      <span class="text nav-text">Artists</span>
                  </a>
              </li>
              <li class="nav-link">
                  <a href="/artists/create">
                    <i class='bx bx-plus-circle icon' ></i>
                      <span class="text nav-text">New Artist</span>
                  </a>
              </li>
              
               
                <li class="nav-link">
                    <a href="/albums">
                      <i class='bx bx-album icon'></i>
                        <span class="text nav-text">Albums</span>
                    </a>
                </li>
                <li class="nav-link">
                  <a href="/albums/create">
                    <i class='bx bx-plus-circle icon' ></i>
                      <span class="text nav-text">New Album</span>
                  </a>
              </li>
                <li class="nav-link">
                    <a href="/categories">
                      <i class='bx bx-category-alt icon' ></i>
                        <span class="text nav-text">Categories</span>
                    </a>
                </li>
                <li class="nav-link">
                  <a href="/categories/create">
                    <i class='bx bx-plus-circle icon' ></i>
                      <span class="text nav-text">New Category</span>
                  </a>
              </li>
                <li class="nav-link">
                    <a href="/nationals">
                      <i class='bx bx-flag icon' ></i>
                        <span class="text nav-text">Nationals</span>
                    </a>
                </li>
                <li class="nav-link">
                  <a href="/nationals/create">
                    <i class='bx bx-plus-circle icon' ></i>
                      <span class="text nav-text">New National</span>
                  </a>
              </li>
                
            </ul>
        </div>
  
        <div class="bottom-content">
         
  
            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark mode</span>
  
                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
  
        </div>
    </div>
  
  </nav>
  <style>
    .nav-link:hover{
      color: red;
    }
  </style>