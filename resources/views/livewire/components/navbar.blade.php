<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand ml-5" href="/">WOOOOW</a>
   <ul class="navbar-nav ml-auto mr-5">
      
      <li class="nav-item">
        <a class="nav-link {{request()->is('posts')?'active':''}}" href="/posts">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{request()->is('login')?'active':''}}" href="/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{request()->is('register')?'active':''}}" href="/register">Register</a>
      </li>
    
    </ul>
</nav>
