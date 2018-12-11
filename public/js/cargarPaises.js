window.addEventListener("load", function() {

  fetch("https://restcountries.eu/rest/v2/all")
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    var select = document.querySelector("select.paises")

    select.removeAttribute("disabled")
    select.innerHTML = ""

    for (var i = 0; i < data.length; i++) {
      select.innerHTML += "<option value='" + data[i].alpha2Code + "'>" + data[i].name + "</option>"
    }


  })

});

/*

window.addEventListener("load", function() {

  ajax("https://restcountries.eu/rest/v2/all", procesarPaises);

});

function ajax(url, procesamiento) {
  fetch(url)
  .then(function(response) {
    return response.json()
  })
  .then(procesamiento)
}

function procesarPaises(data) {
  console.log(data)
}

*/
