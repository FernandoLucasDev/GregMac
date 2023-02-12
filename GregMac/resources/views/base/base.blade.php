<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>

    <section>
        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand">
                    <img src="/img/logo.png" class="logo-header" alt="Logomarca gregmac">
                  </a>
                  <i class="fa-solid fa-caret-down fa-2x text-light m-3 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"></i>
                  <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <div class="btn-header @yield('activate_home')">
                            <a class="nav-link active text-light text-center" aria-current="page" href="/"><i class="fa-solid fa-house header-icon"></i> Home</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <div class="btn-header @yield('activate_courses')">
                            <a class="nav-link active text-light text-center" href="/cursos"><i class="fa-solid fa-book header-icon"></i> Cursos</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <div class="btn-header @yield('activate_services')">
                            <a class="nav-link active text-light text-center" href="/services"><i class="fa-solid fa-briefcase header-icon"></i> Serviços</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <div class="btn-header @yield('activate_services')">
                            <a class="nav-link active text-light text-center" href="/services"><i class="fa-solid fa-right-to-bracket header-icon"></i></i> Cadastre-se</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <div class="btn-header @yield('activate_about')">
                            <a class="nav-link active text-light text-center" href="/about"><i class="fa-solid fa-circle-info header-icon"></i> Sobre</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
    </section>

    @yield('content')

    <section>
        <footer>
            <div class="footer-content">
                <p class="fs-5">&copy;GregMac | {{ date('Y') }}</p>
            </div>
        </footer>
    </section>
    
</body>
</html>