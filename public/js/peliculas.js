window.addEventListener("load", function() {
  setInterval(function(){
    fetch("http://localhost:8000/api/peliculas")
    .then(function(response) {
      return response.json()
    })
    .then(function(peliculas) {
      var peliculasEnHTML = document.querySelectorAll("ul.peliculas li")

      if (peliculasEnHTML.length != peliculas.length) {
        document.querySelector("h2").style.display = "block"

        document.querySelector("h2").onclick = function() {
          var ul = document.querySelector("ul.peliculas")
          ul.innerHTML = ""
          for (var i = 0; i < peliculas.length; i++) {
            ul.innerHTML += "<li><a href='/peliculas/" + peliculas[i].id +  "'>" + peliculas[i].title +  "</a></li>"
          }
          document.querySelector("h2").style.display = "none"
        }
      }
    })
  }, 10000);

})
