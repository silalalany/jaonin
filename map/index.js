
// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.
// The maximum width of the info window is set to 200 pixels.
function initMap() {
  const uluru = { lat: 13.572022, lng: 100.289542 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 6,
    center: uluru,
    mapTypeControl: false,
  });
  const contentString =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">เร็วๆนี้</h1>' +
    '<div id="bodyContent">' +
    "<p><b>เจ้านิล</b>, also referred to as <b>Ayers Rock</b>, is a large " +
    "sandstone rock formation in the southern part of the " +
    "Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) " +
    "south west of the nearest large town, Alice Springs; 450&#160;km " +
    "(280&#160;mi) by road. Kata Tjuta and Uluru are the two major " +
    "features of the Uluru - Kata Tjuta National Park. Uluru is " +
    "sacred to the Pitjantjatjara and Yankunytjatjara, the " +
    "Aboriginal people of the area. It has many springs, waterholes, " +
    "rock caves and ancient paintings. Uluru is listed as a World " +
    "Heritage Site.</p>" +
    '<p>Attribution: Uluru, <a href="https://jaonin.com/">' +
    "https://jaonin.com/</a> " +
    "(last visited June 22, 2009).</p>" +
    "</div>" +
    "</div>";
  const infowindow = new google.maps.InfoWindow({
    content: contentString,
    maxWidth: 500,
  });
  const marker = new google.maps.Marker({
    position: uluru,
    map,
    title: "Jaonin",
  });

  marker.addListener("click", () => {
    infowindow.open({
      anchor: marker,
      map,
      shouldFocus: false,
    });
  });
}