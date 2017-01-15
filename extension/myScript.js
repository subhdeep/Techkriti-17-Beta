var icons = new Skycons({
  "color": "#EEEEEE"
});

function contactApi(lat, lon) {
  console.log(lat)
  console.log(lon)
  $.ajax({
      url: "https://api.darksky.net/forecast/" + "922d2a0bcb53f34bb02181ea2cb42563" + "/" + lat + "," + lon,
      type: "GET",
      dataType: "json",
    })
    .done(function(weather) {
      console.log(weather)
      icons.set("weather", weather.currently.icon);
      var t = weather.currently.temperature;
      t = (t - 32) * 5 / 9.0;
      t = Math.round(t);
      $("#temp").html(t + "&deg;C");
      $("#summary").html(weather.currently.summary);
    })
}

function getweather() {
  console.log("Get Weather Called")
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(pos) {
      if (pos == null) {
        contactApi(26.5130072, 80.2337094)
      } else {
        contactApi(pos.coords.latitude, pos.coords.longitude)
      }
    })
  } else {
    contactApi(26.5130072, 80.2337094)
  }
}

$(document).ready(function() {
  getweather();
});