window.addEventListener("load", function() {
  fetch("https://pokeapi.co/api/v2/type/")
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    var tipos = data.results
    var ul = document.querySelector("ul.tipos")

    for (var i = 0; i < tipos.length; i++) {
      ul.innerHTML += "<li url='" + tipos[i].url + "'><a href=''>" + tipos[i].name + "</a></li>"
    }

    var liTipos = document.querySelectorAll("ul.tipos li")

    for (var i = 0; i < liTipos.length; i++) {
      liTipos[i].addEventListener("click", function(e) {
        e.preventDefault()

        fetch(this.getAttribute("url"))
        .then(function(response) {
          return response.json()
        })
        .then(function(data) {
          var ulpokemon = document.querySelector("ul.pokemon")
          ulpokemon.innerHTML  = ""
          var pokemones = data.pokemon

          for (var i = 0; i < pokemones.length; i++) {
            ulpokemon.innerHTML += "<li>" + pokemones[i].pokemon.name + "</li>"
          }
        })
      })
    }
  })

})
