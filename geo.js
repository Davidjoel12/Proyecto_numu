let map, infoWindow;

      function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 9.0692, lng: -79.3982 },
          zoom: 14,
        });
      
        infoWindow = new google.maps.infoWindow();

        addVehiculosMarkers();
      }

      function addVehiculosMarkers() {
        const vehicles = [
          { lat: 9.0692, lng: -79.3982, title: "Auto 1" },
          { lat: 9.0712, lng: -79.4002, title: "Auto 2" },
          { lat: 9.0672, lng: -79.3962, title: "Auto 3" },
        ];
      
        vehicles.forEach(vehicle => {
          const marker = new google.maps.Marker({
            position: { lat: vehicle.lat, lng: vehicle.lng },
            map: map,
            title: vehicle.title
          });
      
          marker.addListener("click", () => {
            infoWindow.setContent(vehicle.title);
            infoWindow.open(map, marker);
          });
        });
      }



      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(
          browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
        );
        infoWindow.open(map);
      }

      window.initMap = initMap;

    