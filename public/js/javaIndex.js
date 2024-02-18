const accordion = document.getElementsByClassName('contenedor');

for (i=0; i<accordion.length; i++) {
accordion[i].addEventListener('click', function () {
    this.classList.toggle('active')
})
};


document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const speed = parseInt(counter.getAttribute('data-speed'));
        const refreshInterval = parseInt(counter.getAttribute('data-refresh-interval'));
        const increment = target / (speed * 10); // Ajusta el divisor para cambiar la velocidad

        function updateCounter() {
            const count = parseInt(counter.innerText);

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCounter, refreshInterval);
            } else {
                counter.innerText = target;
            }
        }

        updateCounter();
    });
});



let test  = document.getElementById("test");
let segundo = document.getElementById("segundo");
let tercero = document.getElementById("tercero");

let prueba = document.getElementById("prueba");

tercero.addEventListener('click', () => {

    prueba.innerHTML = `<div data-aos="fade-down-left" class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-4" >

    <div data-aos="zoom-in-left" class="col">
    <img src=" img/EMPRESA.png" class="gallery-item" alt="Gallery1">
    </div>

        <div data-aos="zoom-in-left" class="col">
        <img src="img/EMPRESA.png" class="gallery-item" alt="Gallery2">
        </div>

        <div data-aos="zoom-in-left" class="col">
        <img src="img/EMPRESA.png" class="gallery-item" alt="Gallery3">
        </div>

        <div data-aos="zoom-in-left" class="col">
        <img src="img/EMPRESA.png" class="gallery-item" alt="Gallery4">
        </div>

        <div data-aos="zoom-in-left" class="col">
        <img src="img/EMPRESA.png" class="gallery-item" alt="Gallery5">
        </div>

        <div data-aos="zoom-in-left" class="col">
        <img src="img/EMPRESA.png" class="gallery-item" alt="Gallery6">
        </div>
    </div>`
})

test.addEventListener('click', () => {

    prueba.innerHTML = `<div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-4" >

    <div data-aos="zoom-in-left" class="col">
    <img src=" img/EMPRESA.png" class="gallery-item" alt="Gallery1">
</div>

<div data-aos="zoom-in-left" class="col">
<img src="img/EMPRESA.png" class="gallery-item" alt="Gallery2">
</div>

<div data-aos="zoom-in-left" class="col">
<img src="img/EMPRESA.png" class="gallery-item" alt="Gallery3">
</div>

<div data-aos="zoom-in-left" class="col">
<img src="img/EMPRESA.png" class="gallery-item" alt="Gallery4">
</div>

<div data-aos="zoom-in-left" class="col">
<img src="img/EMPRESA.png" class="gallery-item" alt="Gallery4">
</div>
<div data-aos="zoom-in-left" class="col">
<img src="img/EMPRESA.png" class="gallery-item" alt="Gallery4">
</div><div data-aos="zoom-in-left" class="col">
<img src="img/EMPRESA.png" class="gallery-item" alt="Gallery4">
</div>

    </div>`

})

segundo.addEventListener('click', () =>{
    prueba.innerHTML = `<div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-4" >

    <div data-aos="zoom-in-left" class="col">
    <img src=" img/EMPRESA.png" class="gallery-item" alt="Gallery1">
</div>

<div data-aos="zoom-in-left" class="col">
<img src="img/EMPRESA.png" class="gallery-item" alt="Gallery2">
</div>

<div data-aos="zoom-in-left" class="col">
<img src="img/EMPRESA.png" class="gallery-item" alt="Gallery3">
</div>

<div data-aos="zoom-in-left" class="col">
<img src="img/EMPRESA.png" class="gallery-item" alt="Gallery4">
</div>

    </div>`

});



document.addEventListener("click", (e) => {

    if(e.target.classList.contains("gallery-item")){
          const src = e.target.getAttribute("src");
          document.querySelector(".modal-img").src = src;
          const myModal = new bootstrap.Modal(document.getElementById('gallery-popup'));
          myModal.show();

    }
});

AOS.init({
    easing: 'ease-out-back',
    duration:3000
  });
