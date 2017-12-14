var chart = AmCharts.makeChart("chartdiv", {
  "type": "serial",
  "startDuration": 2,
  "dataProvider": [{
    "country": "",
    "visits": result_advHHDi,
    "color": "#B22222"
  }, {
    "country": "<br>team HDD 2",
    "visits": result_advHHDii,
    "color": "#FF1493"
  }, {
    "country": "<br><br>team THO 1",
    "visits": result_advTHOi,
    "color": "#FF0000"
  }, {
    "country": "team THO 2",
    "visits": result_advTHOii,
    "color": "#FF4500"
  }, {
    "country": "<br>team PRB 1",
    "visits": result_advPRBi,
    "color": "#FFFF00"
  }, {
    "country": "<br><br>team PRB 2",
    "visits": result_advPRBii,
    "color": "#FF8C00"
  }, {
    "country": "Quality [Eng] HDD",
    "visits": result_QualityEngHDD,
    "color": "#98FB98"
  }, {
    "country": "<br>Quality [Eng] THO",
    "visits": result_QualityEngTHO,
    "color": "#32CD32"
  }, {
    "country": "<br><br>Quality [Eng] PRB",
    "visits": result_QualityEngPRB,
    "color": "#228D22"
  }, {
    "country": "Quality [DL/Tech] HDD",
    "visits": QualityDLTechHDD,
    "color": "#000080"
  }, {
    "country": "<br>Quality [DL/Tech]THO",
    "visits": QualityDLTechTHO,
    "color": "#4169E1"
  }, {
    "country": "<br><br>Quality [DL/Tech]PRB",
    "visits": QualityDLTechPRB,
    "color": "#87CEEB"
  }, {
    "country": "Ops [Eng] HDD",
    "visits": result_OpsEngHDD,
    "color": "#483D8B"
  }, {
    "country": "<br>Ops [Eng] THO",
    "visits": result_OpsEngTHO,
    "color": "#7B6BEE"
  }, {
    "country": "<br><br>Ops [Eng]PRB",
    "visits": result_OpsEngPRB,
    "color": "#E6E6FA"
  }, {
    "country": "Ops [DL/Tech]HDD",
    "visits": result_OpsDLTechHDD,
    "color": "#D3D3D3"
  }, {
    "country": "<br>Ops [DL/Tech]THO",
    "visits": result_OpsDLTechTHO,
    "color": "#708090"
  }, {
    "country": "<br><br>Ops [DL/Tech]PRB",
    "visits": result_OpsDLTechPRB,
    "color": "#000000"
  }],
  "valueAxes": [{
    "position": "left",
    "axisAlpha": 0,
    "gridAlpha": 0
  }],
  "graphs": [{
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "colorField": "color",
    "fillAlphas": 0.85,
    "lineAlpha": 0.1,
    "type": "column",
    "topRadius": 1,
    "valueField": "visits"
  }],
  "depth3D": 40,
  "angle": 30,
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "axisAlpha": 0,
    "gridAlpha": 0

  },
  "exportConfig": {
    "menuTop": "20px",
    "menuRight": "20px",
    "menuItems": [{
      "icon": '/lib/3/images/export.png',
      "format": 'png'
    }]
  }
}, 0);

jQuery('.chart-input').off().on('input change', function() {
  var property = jQuery(this).data('property');
  var target = chart;
  chart.startDuration = 0;

  if (property == 'topRadius') {
    target = chart.graphs[0];
  }

  target[property] = this.value;
  chart.validateNow();
});