

 <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">AIW</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('category.show', ['id'=>'1']) }}">Category One</a></li>
            <li><a href="{{ route('category.show', ['id'=>'2']) }}">Category Two</a></li>
            <li class="dropdown">
              <a href="{{ route('category.show', ['id'=>'3']) }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorie Three<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('category.show', ['id'=>'4']) }}">Children One</a></li>
                <li><a href="{{ route('category.show', ['id'=>'5']) }}">Children Two</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>