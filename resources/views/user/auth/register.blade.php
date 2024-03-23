<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Orbitron:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome CSS (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Phudu&display=swap" rel="stylesheet">
    <title>CN constructora</title>
    <link rel="icon" href="{{asset('img/EMPRESA.png')}}">

</head>
<body>

    <section class="vh-100" style="background-image: url('https://images.unsplash.com/photo-1530543787849-128d94430c6b?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-repeat: no-repeat">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="{{ route('register') }}" method="post" class="d-flex flex-column align-items-center">
                                        @csrf
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Regístrate</h5>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example17" name="nombres" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Nombres</label>
                                            @error('nombres')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example17" name="apellidos" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Apellidos</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Correo electrónico</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Contraseña</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example28" name="password_confirmation" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example28">Confirmar Contraseña</label>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">REGISTRARSE</button>
                                        </div>
                                        <a class="small text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Ya tienes una cuenta? <a href="{{route('loginUser')}}" style="color: #393f81;">Iniciar sesión aquí</a></p>
                                    </form>

                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <span class="h1 fw-bold mb-0 text-center"><img width="70%" src="{{asset('img/EMPRESA.png')}}" class="img-fluid" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/6b76d54a65.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('js/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>



</body>
</html>
