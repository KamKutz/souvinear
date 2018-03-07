var map,infoWindow; //map + infoWindow for map
var personMarker; //holds hotspot that shows user pos

var userAddress; //holds user adress entered in input field
var hotspotWindow; //holds infowindow for hotspot 

var srcImage = 'overlay_img.jpg';
var i;

var hotspotActive = document.getElementById("hotspot-active");
var userName = "Destiny";

var USERimgsrc = "<img src='img/user1.png'>";
var pinsong = 3;



	//DATA OF HOTSPOT LOCATIONS
	var locations = [
		['FILLMORE', 39.9658, -75.1347, 'bleachers', '3/1/18', "https://www.ticketmaster.com/The-Fillmore-Philadelphia-tickets-Philadelphia/venue/17012"],
		['WORLD CAFE LIVE', 39.9521, -75.1851, 'cupcakke', '3/6/18', "https://www.ticketmaster.com/The-Fillmore-Philadelphia-tickets-Philadelphia/venue/17012"],
		['ELECTRIC FACTORY', 39.9594, -75.1496, 'catfish', '2/19/18', "https://www.ticketmaster.com/The-Fillmore-Philadelphia-tickets-Philadelphia/venue/17012"],
		['TLA', 39.9413, -75.1487, 'palisades', '3/16/18', "https://www.ticketmaster.com/The-Fillmore-Philadelphia-tickets-Philadelphia/venue/17012"],
		['UNION TRANSFER', 39.9614, -75.1553, 'bishop briggs', '4/3/18', "https://www.ticketmaster.com/The-Fillmore-Philadelphia-tickets-Philadelphia/venue/17012"],
		['URBN ANNEX', 39.957119, -75.192836, 'glenn muschio', '3/7/18', "https://www.ticketmaster.com/The-Fillmore-Philadelphia-tickets-Philadelphia/venue/17012"],
		['URBN CENTER', 39.956492, -75.19283, 'troy binamore', '4/8/18', "https://www.ticketmaster.com/The-Fillmore-Philadelphia-tickets-Philadelphia/venue/17012"]
	];

//creates map
//is called when page loads
function initMap() {


	//MAP STYLES
	var styledMapType = new google.maps.StyledMapType(
		[//mainbgcolor
		  {elementType: 'geometry', stylers: [{color: '#e4e7e7'}]},
		  //maintext color
		  {elementType: 'labels.text.fill', stylers: [{color: '#381345'}]},
		  //main text stroke
		  {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
		  {
			featureType: 'administrative',
			elementType: 'geometry.stroke',
			//dashes
			stylers: [{color: '#ffffff'}]
		  },
		  {
			featureType: 'administrative.land_parcel',
			elementType: 'geometry.stroke',
			//irrelev
			stylers: [{color: '#dcd2be'}]
		  },
		  {
			featureType: 'administrative.land_parcel',
			elementType: 'labels.text.fill',
			stylers: [{color: '#ae9e90'}]
		  },
		  {
			featureType: 'landscape.natural',
			elementType: 'geometry',
			//big grassy areas (light blue)
			stylers: [{color: '#aed9df'}]
		  },
		  {
			featureType: 'poi',
			elementType: 'geometry',
			//points of interest (drexel, penn etc)
			stylers: [{color: '#7985A3'}]
		  },
		  {
			featureType: 'poi',
			elementType: 'labels.text.fill',
			//poi text
			stylers: [{color: '#705379'}]
		  },
		  {
			featureType: 'poi.park',
			elementType: 'geometry.fill',
			//parks (lighter purple)
			stylers: [{color: '#8F99B1'}]
		  },
		  {
			featureType: 'poi.park',
			elementType: 'labels.text.fill',
			//park text color
			stylers: [{color: '#447530'}]
		  },
		  {
			featureType: 'road',
			elementType: 'geometry',
			//little roads (lighter than bg color grey)
			stylers: [{color: '#F0F2F2'}]
		  },
		  {
			featureType: 'road.arterial',
			elementType: 'geometry',
			//bigger road colors (white)
			stylers: [{color: '#fdfcf8'}]
		  },
		  {
			featureType: 'road.highway',
			elementType: 'geometry',
			//broad
			stylers: [{color: '#EF6197'}]
		  },
		  {
			featureType: 'road.highway',
			//broad stroke
			elementType: 'geometry.stroke',
			stylers: [{color: '#F7BED4'}]
		  },
		  {
			featureType: 'road.highway.controlled_access',
			elementType: 'geometry',
			//676, big bois #F380AC
			stylers: [{color: '#E28AB1'}]
		  },
		  {
			featureType: 'road.highway.controlled_access',
			elementType: 'geometry.stroke',
			//676 stroke, #EF6197
			stylers: [{color: 'E28AB1'}]
		  },
		  {
			featureType: 'road.local',
			elementType: 'labels.text.fill',
			//little street name fills
			stylers: [{color: '#9B889D'}]
		  },
		  {
			featureType: 'transit.line',
			elementType: 'geometry',
			//trains, bus lines such
			stylers: [{color: '#C0C7C7'}]
		  },
		  {
			featureType: 'transit.line',
			elementType: 'labels.text.fill',
			//text color
			stylers: [{color: '#89778F'}]
		  },
		  {
			featureType: 'transit.line',
			elementType: 'labels.text.stroke',
			//text stroke , didn't work??
			stylers: [{color: '#ffffff'}]
		  },
		  {
			featureType: 'transit.station',
			elementType: 'geometry',
			//airport ( light purple)
			stylers: [{color: '#B7BCCA'}]
		  },
		  {
			featureType: 'water',
			elementType: 'geometry.fill',
			//water
			stylers: [{color: '#81B6BA'}]
		  },
		  {
			featureType: 'water',
			elementType: 'labels.text.fill',
			//water text
			stylers: [{color: '#ffffff'}]
		  }
		],
		{name: 'Styled Map'});



	//INITIALIZE MAP
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 39.952583, lng: -75.165222},
		  zoom: 12,
		  mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map']
          }
		});
		
	//Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');

	    infoWindow = new google.maps.InfoWindow;
	//FIND USERS LOCATION	
		if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
		  console.log("FIRE");
	//RECORDS POSITION OF USER
        	var pos = {
            	lat: position.coords.latitude,
             	lng: position.coords.longitude
		};
		
	//CREATES USER MARKER
		  personMarker = new google.maps.Marker({
            	map: map,
				animation: google.maps.Animation.DROP,
				icon: {url:'img/user3.png', scaledSize: new google.maps.Size(35, 35)},
            	position: pos
			});
		
		   map.setCenter(pos);
	
	//CREATES INDIVIDUAL MARKERS FOR VENUES
			for (i = 0; i < locations.length; i++) {  
				marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				icon: {url:'img/hotspot.png', 
				scaledSize: new google.maps.Size(40, 52)},
				map: map
				});
	
	//VENUE INFORMATION - ARTIST NAME 			
			var add = locations[i][3]
			var date = locations[i][4]
			var ticket = locations [i][5]
			var dis = "distance"
			var content = locations[i][0] + "<br> Artist: " + add + "<br>" + date + "<br>" +  "<a href='" + ticket + "'><button>Tickets</button></a>'"    
			var prev_infowindow = false; 
				
			var infowindow = new google.maps.InfoWindow()

//			google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
//				return function() { 
//				   //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
//				   infowindow.setContent("<div style = 'width:60vw; min-height:50vh; background-color: rgba(255,255,255, .8);'>" + content + "</div>");
//				   infowindow.open(map,marker);
//				   
//				  
//					
//				};
//			})(marker,content,infowindow)); 
		  
	// ADD CIRCLE OVERLAY and bind to marker
		  var circle = new google.maps.Circle({
			map: map,
			radius: 50,    // 10 miles in metres
			fillColor: '#45C6C5',
			strokeColor: '#45C6C5'
		  });
		  circle.bindTo('center', marker, 'position');
		  console.log(circle.radius);
		  console.log(locations[i][0]);
		  	
		  }}, function isMarkerInRadius(personMarker, circle) {
			//return google.maps.geometry.spherical.computeDistanceBetween(pos, circle.getCenter()) <= circle.getRadius();
		  },
		  function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
		}
		
		userPos(function(id){  
             
                var lat = id.coords.latitude;
                var lng = id.coords.longitude;
				var temp = .0006;
				
             setTimeout(function(){
				
                 for (i = 0; i < locations.length; i++) { 
                     
					var newLat = rangeChecker(lat, locations[i][1], temp );
					// console.log(newLat);
					
					var newLng = rangeChecker(lng,locations[i][2], temp );
					// console.log(newLng);
                    
         
                    checkLocation(newLat,newLng);
                
				};
				}, 5000);

            
                
                //rangeChecker==bool
                //
	  });
	}
	//handles error if geolocation fails
   function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
	  
      }

function userPos(callback) {
	navigator.geolocation.getCurrentPosition(function(position) {
		  console.log("FIRE");
        	var tempPos = {
            	lat: position.coords.latitude,
             	lng: position.coords.longitude
		};
	
	return callback(position,tempPos)
});

}


//testing: if user is in range or not
function rangeChecker(op, target, range){
    return op < target + range && op > target - range;
}


//checks user locations
function checkLocation(Lat,Lng){
    
    if(Lat == true && Lng == true){
        console.log(locations[i][0] +' '+  "HELLO");
        enterHTML(locations[i][0],userName);
                       
        hotspotActive.classList.remove('hidden');
        hotspotActive.classList.add('visible');
                    
    } else{
        console.log(locations[i][0]+' '+ "GOODBYE");
        hotspotActive.classList.remove('visible');
        hotspotActive.classList.add('hidden');
    }
    
}

function enterHTML(venueName,user){
    var popup = "<p class='active'> HEY " + user + "  collect your " + pinsong + " songs from the " + venueName + "</p>";

    console.log(popup);
    
    hotspotActive.innerHTML += popup;

}