<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-sm-5">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-sm-5">
        <li class="nav-item mx-sm-3">
          <a class="nav-link" href="{{route("welcome")}}">Accueil</a>
        </li>
        <li class="nav-item mx-sm-3">
          <a class="nav-link" href="{{route("contact")}}">Contact</a>
        </li>
        <li class="nav-item mx-sm-3">
          <a class="nav-link" href="{{route("post.create")}}">Nouveau poste</a>
        </li>
      </ul>
    </div>
  </div>
</nav>