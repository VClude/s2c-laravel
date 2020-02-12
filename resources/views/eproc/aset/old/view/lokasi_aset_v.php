<div class="row" ng-controller="form_lokasi_aset">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>LOKASI</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-sm-2 control-label">Pemegang</label>
          <div class="col-sm-6">
            <p class="form-control-static" ng-bind="data.pemegang"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Latitude</label>
          <div class="col-sm-6">
            <p class="form-control-static" ng-bind="data.latitude"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Longitude</label>
          <div class="col-sm-6">
            <p class="form-control-static" ng-bind="data.longitude"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Lokasi</label>
          <div class="col-sm-10">
            <div id="map" style="height: 480px;"></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<script>

  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 8
    });
  }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxD0BTPN5c_U4NB77ZvMx2R7jpW2NJed4&callback=initMap" async defer></script>
