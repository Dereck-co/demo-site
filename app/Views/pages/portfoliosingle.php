<?php $this->extend('layout/default'); ?>

<?php $this->section('head'); ?>

<?php $this->endSection(); ?>

<?php $this->section('content'); ?>

    <section class="flexslider">
      <ul class="slides">
        
        <li style="background-image: url(/img/work_1.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">Poster</h1>
                  <p class="probootstrap-subheading">Brand Identity, Website</p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <section class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-zindex-above-showcase">
      <div class="container">
        <h1>36H 天氣預報</h1>
        <table id="dt" class="display compact hover" border="1">
            <thead>
                <tr>
                    <th>編號</th>
                    <th>地區</th>
                    <th>早上</th>
                    <th>中午</th>
                    <th>晚上</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
      </div>
    </section>

<?php echo $this->include('component/testimonial'); ?>
<?php echo $this->include('component/contactus'); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script>
  var data;

  $.getJSON('https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization=CWB-397EE7AF-08D4-494B-B69B-D284C518384B&limit=10')
    .done(function(re){
      console.log("getJSON:",re);
      data = re;
      // data = re.cwbopendata.dataset.location;
      for (let i = 0; i < data["records"]["location"].length; i++) {
      row = data["records"]["location"][i];
      print += `
    <tr>
      <td>${i + 1}</td>
      <td>${row.locationName}</td>
      <td>${row.weatherElement[0].time[0].parameter.parameterName} | 溫度 ${row.weatherElement[2].time[0].parameter.parameterName} ~ ${row.weatherElement[4].time[0].parameter.parameterName} ℃</td>
      <td>${row.weatherElement[0].time[1].parameter.parameterName} | 溫度 ${row.weatherElement[2].time[1].parameter.parameterName} ~ ${row.weatherElement[4].time[1].parameter.parameterName} ℃</td>
      <td>${row.weatherElement[0].time[2].parameter.parameterName} | 溫度 ${row.weatherElement[2].time[2].parameter.parameterName} ~ ${row.weatherElement[4].time[2].parameter.parameterName} ℃</td>
    </tr>
    `;
    console.log(row.weatherElement);
    }
    $('tbody').html(print);
    })
    .fail(function(w){
      alert("faill openapi,"+w)
    });
    $('#dt').DataTable({
      "searching": false,
      "sPaginationType": "numbers", 
      "info": false,
      "ordering": false, 
      "dom": '<"top">rt<"bottom"><"clear">',

    }); 
</script>

<?php $this->endSection(); ?>