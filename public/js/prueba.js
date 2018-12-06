// var titulo = document.querySelector("ul.links li");

window.addEventListener("load", function() {
    var red = document.querySelector(".red")

    red.addEventListener("click", function() {
      document.querySelector("h1").innerHTML += " WOW"
    });

    var blue = document.querySelector(".blue")

    blue.addEventListener("click", function() {
      document.querySelector("h1").style.color = "Blue"
      this.style.backgroundColor = "Pink";
    })

    var green = document.querySelector(".green")

    green.addEventListener("mouseover", function() {
      document.querySelector("p").classList.remove("oculto")
    })

    green.addEventListener("mouseout", function() {
      setTimeout(function(){
        document.querySelector("p").classList.add("oculto")
      }, 3000);
    })

    yellow = document.querySelector(".yellow")

    yellow.addEventListener("click", function() {
      document.querySelector("h3").classList.remove("oculto")

      peliculas = prompt("Ingrese peliculas separadas por coma")

      peliculas = peliculas.split(",")

      for (var i = 0; i < peliculas.length; i++) {
        document.querySelector("ul.peliculas").innerHTML += "<li>" + peliculas[i] + "</li>"
      }
    })

    var botones = document.querySelectorAll(".boton")

    for (var i = 0; i < botones.length; i++) {
      var boton = botones[i]

      boton.addEventListener("dblclick", function() {
        //alert(window.getComputedStyle(this, null).getPropertyValue("background-color"))
        alert(this.getAttribute("color"))
      })
    }
})
