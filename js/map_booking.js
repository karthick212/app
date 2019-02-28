// plugin

$(document).ready(() => {
  $("#submit").click(() => {
    if (!transfer.from.IsValid) {
      alert("Please Choose Your location");
    } else if (!transfer.to.IsValid) {
      alert("Please Choose Your destination");
    } else {
     calculateAndDisplayRoute(directionsService, directionsDisplay);
    }
    console.log("result of the locations", transfer);
  });



$("#from-input")
  .geocomplete()
  .bind("geocode:result", function(event, result) {
    GetFromLocation(result);
  });
$("#to-input")
  .geocomplete()
  .bind("geocode:result", function(event, result) {
    GetToLocation(result);
  });
});
var transfer = {
  from: {
    address: "",
    IsValid: false
  },
  to: {
    address: "",
    IsValid: false
  }
};
var modal = document.getElementById("myModal");
var confirmPop = document.getElementById("closePop");
var close = document.getElementById("close");
var directionsService = new google.maps.DirectionsService();
var directionsDisplay = new google.maps.DirectionsRenderer();
var loader = document.getElementById("loader");
loader.style.display = "none";
var geocoder = new google.maps.Geocoder();
// to close popup
close.onclick = function() {
  console.log("test");
  modal.style.display = "none";
  transfer.from.IsValid = false;
  GetFromLocation();
};

var confirmFun = () => {
  modal.style.display = "block";
};
function GetFromLocation(e) {
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };

  console.log("from address textbox", e);
  transfer.from.address = e.formatted_address;
  transfer.from.IsValid = true;
  return true;
}

function GetToLocation(e) {
  console.log("to address textbox", e);
  transfer.to.address = e.formatted_address;
  transfer.to.IsValid = true;
}

navigator.geolocation.getCurrentPosition(function(position) {
  let data = {
    lat: position.coords.latitude,
    lng: position.coords.longitude
  };
  getCurrentPos(data);
});

// Map function
function getCurrentPos(e) {
  var center = new google.maps.LatLng(e.lat, e.lng);
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 18,
    center: center
  });
  directionsDisplay.setMap(map);

  var From_marker = new google.maps.Marker({
    map: map,
    position: center,
    icon: "./images/map_icon.png",
    draggable: true
  });

function from(){

    google.maps.event.addListener(From_marker, "dragend", function() {
         From_marker.setVisible(!transfer.from.IsValid); // maps API hide call
      geocoder.geocode({ latLng: From_marker.getPosition() }, function(
        results,
        status
      ) {
        if (status == google.maps.GeocoderStatus.OK) {
          console.log(results);
          if (results[0]) {
            transfer.from.address = results[0].formatted_address;
            $("#from-input").val(results[0].formatted_address);
          }
        }
      });
    });
    google.maps.event.addListener(map, "drag", function() {
         From_marker.setVisible(!transfer.from.IsValid); // maps API hide call
      From_marker.setPosition(this.getCenter()); // set marker position to map center
      geocoder.geocode({ latLng: this.getCenter() }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          console.log("test_to_loc", results);
          if (results[0]) {
            transfer.from.address = results[0].formatted_address;
                
            $("#from-input").val(results[0].formatted_address);
          }

          setTimeout(function() {
            confirmFun();
            loader.style.display = "none";
          }, 1000);
        }
      });
    });

    google.maps.event.addListener(map, "dragend", function() {
         From_marker.setVisible(!transfer.from.IsValid); // maps API hide call
      From_marker.setPosition(this.getCenter()); // set marker position to map center
      geocoder.geocode({ latLng: this.getCenter() }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          console.log(results);
          if (results[0]) {
            transfer.from.address = results[0].formatted_address;
            $("#from-input").val(results[0].formatted_address);
          }
        }
      });
    });
  
}
from();
  // Map Functions
  function toLoction() {
      from();
    if (transfer.from.IsValid !== transfer.to.IsValid) {
      console.log("test file");
      if (transfer.from.IsValid) {
        var To_marker = new google.maps.Marker({
          map: map,
          position: center,
          icon: "./images/red_map_icon.png",
          draggable: true
        });
        google.maps.event.addListener(To_marker, "dragend", function() {
          geocoder.geocode({ latLng: To_marker.getPosition() }, function(
            results,
            status
          ) {
            if (status == google.maps.GeocoderStatus.OK) {
              console.log(results);
              if (results[0]) {
                transfer.to.address = results[0].formatted_address;
                transfer.to.IsValid = true;
                $("#to-input").val(results[0].formatted_address);
              }
            }
          });
        });
      }
      google.maps.event.addListener(map, "drag", function() {
        To_marker.setPosition(this.getCenter()); // set marker position to map center
        geocoder.geocode({ latLng: this.getCenter() }, function(
          results,
          status
        ) {
          if (status == google.maps.GeocoderStatus.OK) {
            console.log(results);
            if (results[0]) {
              transfer.to.address = results[0].formatted_address;
              transfer.to.IsValid = true;
              $("#from-input").val(results[0].formatted_address);
            }
          }
        });
      });

      google.maps.event.addListener(map, "dragend", function() {
        To_marker.setPosition(this.getCenter()); // set marker position to map center
        geocoder.geocode({ latLng: this.getCenter() }, function(
          results,
          status
        ) {
          if (status == google.maps.GeocoderStatus.OK) {
            console.log(results);
            if (results[0]) {
              transfer.to.address = results[0].formatted_address;
              transfer.to.IsValid = true;
              $("#from-input").val(results[0].formatted_address);
            }
          }
        });
      });
    }
    this.onChangeHandler = function() {
      console.log("knio");
      calculateAndDisplayRoute(directionsService, directionsDisplay);
    };
  }

  confirmPop.onclick = function() {
    transfer.from.IsValid = true;
    modal.style.display = "none";
    toLoction();
  };
}
function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  directionsService.route(
    {
      origin: document.getElementById("from-input").value,
      destination: document.getElementById("to-input").value,
      travelMode: "DRIVING"
    },
    function(response, status) {
      if (status === "OK") {
        directionsDisplay.setDirections(response);
      }
    }
  );
}

