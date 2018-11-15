
function calAge(o){
     var tmp = o.value.split("-");
     var current = new Date();
     var current_year = current.getFullYear();
     document.getElementById("age").value = (current_year+543) - tmp[0];
}
function autoTab(obj){ 
var pattern=new String("_-____-_____-_-__"); 
var pattern_ex=new String("-"); 
var returnText=new String(""); 
var obj_l=obj.value.length; 
var obj_l2=obj_l-1; 
for(i=0;i<pattern.length;i++){ 
if(obj_l2==i && pattern.charAt(i+1)==pattern_ex){ 
returnText+=obj.value+pattern_ex; 
obj.value=returnText; 
} 
} 
if(obj_l>=pattern.length){ 
obj.value=obj.value.substr(0,pattern.length); 
} 
} 
var map,infowindow,marker;
function initMap() { 
	var myOptions = {
	  zoom: 9,
	  center: new google.maps.LatLng(15.000682,103.728207),
	};
	 map = new google.maps.Map(document.getElementById('map_canvas'),
		myOptions);
	 marker = new  google.maps.Marker({
		map:map,
		position: new google.maps.LatLng(15.000682,103.728207),
		draggalbe:true
	});
	 infowindow = new google.maps.InfoWindow({
		map:map,
	});
	google.maps.event.addListener(map,'click',function(event){		
		infowindow.setContent("LatLng = " + event.latLng);
		infowindow.setPosition(event.latLng);
		infowindow.open(map,marker);
		marker.setPosition(event.latLng);
		$("#lat").val(event.latLng.lat());
		$("#lng").val(event.latLng.lng());
		geocodeLatLng();
	});	
}
function geocodeLatLng() {
		var lat = $("#lat").val();
		var lng = $("#lng").val();
        var latlng = {lat: parseFloat(lat), lng: parseFloat(lng)};
		var geocoder = new google.maps.Geocoder;
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[1]) {             
			  marker.setPosition(latlng);
			  var rs = results[1].formatted_address;
			  var tmp = rs.split(" ");
			  var tumbon_name = tmp[1];
			  var ampur_name = tmp[3];
			  var province_name = tmp[4];
			  var zip_code = tmp[5];
			$("#tumbon_name").val(tumbon_name);
			$("#ampur_name").val(ampur_name);
			$("#province_name").val(province_name);
			$("#zip_code").val(zip_code);
              infowindow.setContent(results[1].formatted_address);
              infowindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
      }