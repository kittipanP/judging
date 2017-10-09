var chart = AmCharts.makeChart("chartdiv", {
  "type": "serial",
  "startDuration": 2,
  "dataProvider": [{
    "country": "team HDD 1",
    "visits": result_advHHDi,
    "color": "#FF0F00"
  }, {
    "country": "<br>team HDD 2",
    "visits": result_advHHDii,
    "color": "#FF6600"
  }, {
    "country": "team THO 1",
    "visits": result_advTHOi,
    "color": "#FF9E01"
  }, {
    "country": "<br>team THO 2",
    "visits": result_advTHOii,
    "color": "#FCD202"
  }, {
    "country": "team PRB 1",
    "visits": result_advPRBi,
    "color": "#F8FF01"
  }, {
    "country": "<br>team PRB 2",
    "visits": result_advPRBii,
    "color": "#B0DE09"
  }, {
    "country": "Quality [Eng] HDD",
    "visits": result_QualityEngHDD,
    "color": "#04D215"
  }, {
    "country": "<br>Quality [Eng] THO",
    "visits": result_QualityEngTHO,
    "color": "#0D8ECF"
  }, {
    "country": "Quality [Eng] PRB",
    "visits": result_QualityEngPRB,
    "color": "#0D52D1"
  }, {
    "country": "<br>Quality [DL/Tech] HDD",
    "visits": QualityDLTechHDD,
    "color": "#2A0CD0"
  }, {
    "country": "Quality [DL/Tech]THO",
    "visits": QualityDLTechTHO,
    "color": "#8A0CCF"
  }, {
    "country": "<br>Quality [DL/Tech]PRB",
    "visits": QualityDLTechPRB,
    "color": "#CD0D74"
  }, {
    "country": "Ops [Eng] HDD",
    "visits": result_OpsEngHDD,
    "color": "#754DEB"
  }, {
    "country": "<br>Ops [Eng] THO",
    "visits": result_OpsEngTHO,
    "color": "#DDDDDD"
  }, {
    "country": "Ops [Eng]PRB",
    "visits": result_OpsEngPRB,
    "color": "#999999"
  }, {
    "country": "<br>Ops [DL/Tech]HDD",
    "visits": result_OpsDLTechHDD,
    "color": "#333333"
  }, {
    "country": "Ops [DL/Tech]THO",
    "visits": result_OpsDLTechTHO,
    "color": "#000000"
  }, {
    "country": "<br>Ops [DL/Tech]PRB",
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