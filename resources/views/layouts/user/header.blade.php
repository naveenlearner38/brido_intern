<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="/" target="_blank">
        <strong class="blue-text">RB</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">          

            <li class="nav-item">
                <a class="nav-link waves-effect" href="/" target="_blank">Home</a>
            </li>

            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fa fa-pencil-square mr-2" aria-hidden="true"></i>Create Bike
                </a>
            </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->