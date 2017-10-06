<!--<nav class="navbar navbar-inverse" role="navigation">-->
<!--    <div class="container">-->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->

<!--            <a href="#" class="navbar-brand">Home</a>-->
<!--        </div>-->

<!--        <div class="collapse navbar-collapse" id="menu-collapse">-->
<!--            <ul class="nav navbar-nav">-->
<!--                @include('partials.menu.items', ['items'=> $menu_MyNavBar->roots()])-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

  <nav>
    <div class="nav-wrapper">
      <a href="http://territories-tiagofonseca.c9users.io/" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
         @include('partials.menu.items', ['items'=> $menu_MyNavBar->roots()])
      </ul>
      <ul class="side-nav" id="mobile-demo">
         @include('partials.menu.items', ['items'=> $menu_MyNavBar->roots()])
      </ul>
    </div>
  </nav>