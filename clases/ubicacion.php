 




<div class="col-6">
<label for="longitud">longitud</label>
<input type="text" class="form-control" name="longitud" id="longitud">
 
 
<br>

 
<br>

<div class="row">
<div class="col-md-12">
    <div id="mapa" style="width:100%; height:500px;" ></div>
</div>
</div>
 
</div>
<script>
function iniciarMap(){
var latitud  = 4.68144;
var longitud = -74.06453;
coordenadas = {
lng: longitud,
lat: latitud
}
generarMapa(coordenadas);
}
function generarMapa(coordenadas){
var mapa = new google.maps.Map(document.getElementById('mapa'),
{
zoom: 12,
center : new google.maps.LatLng(coordenadas.lat, coordenadas.lng)

});
marcador = new google.maps.Marker({
map: mapa,
draggable: true,
position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
});

marcador.addEventListener('dragend',function(event){
document.getElementById("latitud").value = this.getPosition().lat();
document.getElementById("longitud").value = this.getPosition().lng();
});
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi3QPmKew6ZyLMcOhhU9qfH1lE_co6oys&callback=iniciarMapa"></script>
