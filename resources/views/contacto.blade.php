@extends('layout.app')
@section('content')

<div class="container pt-5" style="margin-top: 60px">
    <div class="d-flex flex-column text-center mb-5">
        <h4 id="contac" style="color: #f37335;" class="font-weight-bold">Contacto</h4>
        <h4 class="display-4 font-weight-bold">Escribenos para cualquier consulta</h4>
    </div>
    <div class="row px-3 pb-2">
        <div class="col-sm-4 text-center mb-3">
            <i id="direc" style="color: #f37335 ;" class="fa fa-2x fa-map-marker-alt mb-3"></i>
            <h4 class="font-weight-bold">Dirección</h4>
            <p>Calle Arias Scheriber - La Aurora <br>Miraflores</p>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <a id="wasi" style="color: #f37335 ;" href="https://wa.link/95f0iv">
                <svg style="width: 25%; height: 25%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="phone" class="svg-inline--fa fa-phone fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" ><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>
            </a>
            <h4 class="font-weight-bold">Teléfono</h4>
            <p>511 -965 475 066</p>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <i id="maili" style="color: #f37335;" class="far fa-2x fa-envelope mb-3"></i>
            <h4 class="font-weight-bold">Email</h4>
            <p>ersolucioninmobiliaria@gmail.com</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 pb-5">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!4v1685460775876!6m8!1m7!1sSARwW9B4qrZS7_rtdeL-iA!2m2!1d-12.12107988984924!2d-77.01019255582297!3f353.64804!4f0!5f0.7820865974627469" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>


        <div class="col-md-6 pb-5">

            <div class="contact-form">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" method="post" action="">

                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre Completo" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto" required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="6" id="message" name="message" placeholder="Mensaje" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>

                        <button class="btn-mensaje">
                       ENVIAR
                          </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<style>
.btn-mensaje {
position: relative;
background-color: rgb(0, 0, 0);
border-radius: 5px;
box-shadow: rgb(0, 0, 0) 0px 4px 0px 0px;
padding: 15px;
background-repeat: no-repeat;
box-sizing: border-box;
width: 154px;
height: 49px;
color: #fff;
border: none;
font-size: 20px;
transition: all .3s ease-in-out;
z-index: 1;
overflow: hidden;
}

.btn-mensaje::before {
content: "";
background-color: rgb(167, 6, 0);
box-shadow: rgb(167, 6, 0) 0px 4px 0px 0px;
width: 0;
height: 100%;
position: absolute;
top: 0;
left: 0;
z-index: -1;
transition: width 700ms ease-in-out;
display: inline-block;
}

.btn-mensaje:hover::before {
width: 100%;
}
</style>
@endsection
