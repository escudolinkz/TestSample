<nav class="navbar navbar-inverse">
      
      <div class="container">
	  <div class="navbar-header">
	 
<!--       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data target="#navbar"> -->
<!-- 	      <span class="sr-only">Toggle navigation</span> -->
<!-- 	      <span class="icon-bar"></span> -->
<!-- 	      <span class="icon-bar"></span> -->
<!-- 	      <span class="icon-bar"></span> -->
<!--       </button> -->
      
      <a class="navbar-brand" href="#">HRMS</a>
      </div>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
          <li class="{{Request::is('/') ? 'active' : ''}">
            <a href="/">Home</a>
          </li>
            <li class="{{Request::is('login') ? 'active' : ''}">
            <a href="/login">Daftar Masuk</a>
          </li>
          <li class="{{Request::is('senarai') ? 'active' : ''}">
            <a href="/senarai">Senarai</a>
          </li>
          <li class="{{Request::is('about') ? 'active' : ''}">
            <a href="/about">Tentang kami</a>
          </li>
          <li class="{{Request::is('contact') ? 'active' : ''}">
            <a href="/contact">Hubungi Kami</a>
          </li>
      </ul>
        
      </div>
      </div>
    </nav>