<!--  page container  -->
<div class="container">

  <!-- navbar wrapper -->
  <div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light p-2 pl-5">
      <a class="navbar-brand" href="{{ route('inicio') }}">SNH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <div class="navbar-nav">

          <!--  Início  -->
          <a class="nav-link nav_link
            @if(TITULO == 'Início')
              active
            @endif
            " 
            href="{{ route('inicio') }}">
            Início 
            <span class="sr-only">
              (current)
            </span>
          </a>
          <!--  Fim Início  -->







          <!-- <a class="nav-link nav_link" href="#">Sobre</a> -->

          <!-- <a class="nav-link nav_link" href="#">História</a> -->

          <!-- <a class="nav-link nav_link" href="#">Parceiros</a> -->

          <a class="nav-link nav_link
          @if(TITULO == 'Blog')
            active
          @endif
          " href="{{ route('blog') }}">
            Blog
          </a>

          <!-- <a class="nav-link nav_link" href="#">Eventos</a> -->

          <!-- <a class="nav-link nav_link" href="#">Fundadores</a> -->

          <!-- <a class="nav-link nav_link" href="#">Atletas</a> -->

          <!-- <a class="nav-link nav_link" href="#">Portifólio</a> -->

          <!-- <a class="nav-link nav_link" href="#">Contato</a> -->
        </div>
      </div>
    </nav>
  </div>
  <!-- navbar wrapper -->

</div>