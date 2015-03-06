function changeImage(newImageSource, plantID) {
    "use strict";
    var img = document.getElementById(plantID);
    img.src = '../' + newImageSource;
    return false;
}

function getPlantDetails() {
    "use strict";

}

$(document).ready(function() {
 "use strict";
 $('#normal-view').hover(function() {
    $('#normal-view').attr('src','/web-butil/public/assets/images/buttons/Normal3.png');
	$('#biomass-view').attr('src','/web-butil/public/assets/images/buttons/Biomass3-inactive.png');
	$('#greenness-view').attr('src','/web-butil/public/assets/images/buttons/Greenness2-inactive.png');
	$('#height-view').attr('src','/web-butil/public/assets/images/buttons/Height2-inactive.png');
	$('#tiller-view').attr('src','/web-butil/public/assets/images/buttons/Tiller2-inactive.png');
    }, function () {
 });
});

$(document).ready(function() {
 "use strict";
 $('#biomass-view').hover(function() {
    $('#normal-view').attr('src','/web-butil/public/assets/images/buttons/Normal3-inactive.png');
	$('#biomass-view').attr('src','/web-butil/public/assets/images/buttons/Biomass3.png');
	 $('#greenness-view').attr('src','/web-butil/public/assets/images/buttons/Greenness2-inactive.png');
	 $('#height-view').attr('src','/web-butil/public/assets/images/buttons/Height2-inactive.png');
	 $('#tiller-view').attr('src','/web-butil/public/assets/images/buttons/Tiller2-inactive.png');
  }, function() {
 });
});

$(document).ready(function() {
 "use strict";
 $('#greenness-view').hover(function() {
    $('#normal-view').attr('src','/web-butil/public/assets/images/buttons/Normal3-inactive.png');
	$('#biomass-view').attr('src','/web-butil/public/assets/images/buttons/Biomass3-inactive.png');
	 $('#greenness-view').attr('src','/web-butil/public/assets/images/buttons/Greenness2.png');
	 $('#height-view').attr('src','/web-butil/public/assets/images/buttons/Height2-inactive.png');
	 $('#tiller-view').attr('src','/web-butil/public/assets/images/buttons/Tiller2-inactive.png');
  }, function() {
 });
});

$(document).ready(function() {
 "use strict";
 $('#height-view').hover(function() {
    $('#normal-view').attr('src','/web-butil/public/assets/images/buttons/Normal3-inactive.png');
	$('#biomass-view').attr('src','/web-butil/public/assets/images/buttons/Biomass3-inactive.png');
	 $('#greenness-view').attr('src','/web-butil/public/assets/images/buttons/Greenness2-inactive.png');
	 $('#height-view').attr('src','/web-butil/public/assets/images/buttons/Height2.png');
	 $('#tiller-view').attr('src','/web-butil/public/assets/images/buttons/Tiller2-inactive.png');
  }, function() {
 });
});

$(document).ready(function() {
 "use strict";
 $('#tiller-view').hover(function() {
    $('#normal-view').attr('src','/web-butil/public/assets/images/buttons/Normal3-inactive.png');
	$('#biomass-view').attr('src','/web-butil/public/assets/images/buttons/Biomass3-inactive.png');
	 $('#greenness-view').attr('src','/web-butil/public/assets/images/buttons/Greenness2-inactive.png');
	 $('#height-view').attr('src','/web-butil/public/assets/images/buttons/Height2-inactive.png');
	 $('#tiller-view').attr('src','/web-butil/public/assets/images/buttons/Tiller2.png');
  }, function() {
 });
});

$('#summaryTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
});

$('#dataTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
});

$('#biomass-tab').click(function (e) {
    $('#biomass-chart').removeClass("no-display");
    $('#greenness-chart').addClass("no-display");
    $('#height-chart').addClass("no-display");
    $('#tillercount-chart').addClass("no-display");
});

$('#greenness-tab').click(function (e) {
    $('#biomass-chart').addClass("no-display");
    $('#greenness-chart').removeClass("no-display");
    $('#height-chart').addClass("no-display");
    $('#tillercount-chart').addClass("no-display");
});

$('#height-tab').click(function (e) {
    $('#biomass-chart').addClass("no-display");
    $('#greenness-chart').addClass("no-display");
    $('#height-chart').removeClass("no-display");
    $('#tillercount-chart').addClass("no-display");
});

$('#tillercount-tab').click(function (e) {
    $('#biomass-chart').addClass("no-display");
    $('#greenness-chart').addClass("no-display");
    $('#height-chart').addClass("no-display");
    $('#tillercount-chart').removeClass("no-display");
});

//phenotypic graph values
$(function () {
    var line = new Morris.Line({
        element: 'biomass-chart',
        resize: true,
        data: [
            {
                y: '2014-01-05',
                item1: 2666,
                item2: 3124
            },
            {
                y: '2014-01-06',
                item1: 2778,
                item2: 1523
            },
            {
                y: '2014-01-07',
                item1: 4912,
                item2: 8201
            },
            {
                y: '2014-01-08',
                item1: 3767,
                item2: 1234
            },
            {
                y: '2014-01-09',
                item1: 6810,
                item2: 1237
            },
            {
                y: '2014-01-10',
                item1: 5670,
                item2: 8192
            },
            {
                y: '2014-01-11',
                item1: 4820,
                item2: 15000
            },
            {
                y: '2014-01-12',
                item1: 15073,
                item2: 500
            },
            {
                y: '2014-01-13',
                item1: 10687,
                item2: 8012
            },
            {
                y: '2014-01-14',
                item1: 8432,
                item2: 3124
            }
        ],
        xkey: 'y',
        ykeys: ['item1', 'item2'],
        labels: ['P1', 'P2'],
        lineColors: ['#5a5', '#7c7'],
        lineWidth: [4, 2],
        hideHover: 'auto',
        gridTextColor: "#000",
        gridStrokeWidth: 0.4,
        pointSize: 4,
        pointStrokeColors: ["#efefef", "#efefef"],
        gridLineColor: "#000",
        gridTextFamily: "Open Sans",
        gridTextSize: 10
    });

    var line = new Morris.Line({
        element: 'greenness-chart',
        resize: true,
        data: [
            {
                y: '2011 Q1',
                item1: 512
            },
            {
                y: '2011 Q2',
                item1: 1000
            },
            {
                y: '2011 Q3',
                item1: 1500
            },
            {
                y: '2011 Q4',
                item1: 2000
            },
            {
                y: '2012 Q1',
                item1: 2500
            },
            {
                y: '2012 Q2',
                item1: 3000
            },
            {
                y: '2012 Q3',
                item1: 3500
            },
            {
                y: '2012 Q4',
                item1: 4000
            },
            {
                y: '2013 Q1',
                item1: 4500
            },
            {
                y: '2013 Q2',
                item1: 5000
            }
        ],
        xkey: 'y',
        ykeys: ['item1'],
        labels: ['Item 1'],
        lineColors: ['#5a5'],
        lineWidth: 2,
        hideHover: 'auto',
        gridTextColor: "#000",
        gridStrokeWidth: 0.4,
        pointSize: 4,
        pointStrokeColors: ["#efefef"],
        gridLineColor: "#000",
        gridTextFamily: "Open Sans",
        gridTextSize: 10
    });

    var line = new Morris.Line({
        element: 'height-chart',
        resize: true,
        data: [
            {
                y: '2011 Q1',
                item1: 2000
            },
            {
                y: '2011 Q2',
                item1: 4000
            },
            {
                y: '2011 Q3',
                item1: 2000
            },
            {
                y: '2011 Q4',
                item1: 0
            },
            {
                y: '2012 Q1',
                item1: 2000
            },
            {
                y: '2012 Q2',
                item1: 4000
            },
            {
                y: '2012 Q3',
                item1: 2000
            }
        ],
        xkey: 'y',
        ykeys: ['item1'],
        labels: ['Item 1'],
        lineColors: ['#5a5'],
        lineWidth: 2,
        hideHover: 'auto',
        gridTextColor: "#000",
        gridStrokeWidth: 0.4,
        pointSize: 4,
        pointStrokeColors: ["#efefef"],
        gridLineColor: "#000",
        gridTextFamily: "Open Sans",
        gridTextSize: 10
    });

    var line = new Morris.Line({
        element: 'tillercount-chart',
        resize: true,
        data: [
            {
                y: '2011 Q1',
                item1: 2,
                item2: 1,
                item3: 2
            },
            {
                y: '2011 Q2',
                item1: 5,
                item2: 4,
                item3: 3
            },
            {
                y: '2011 Q3',
                item1: 7,
                item2: 5,
                item3: 6
            },
            {
                y: '2011 Q4',
                item1: 10,
                item2: 8,
                item3: 9
            },
            {
                y: '2012 Q1',
                item1: 11,
                item2: 11,
                item3: 13
            },
            {
                y: '2012 Q2',
                item1: 13,
                item2: 14,
                item3: 13
            },
            {
                y: '2012 Q3',
                item1: 16,
                item2: 17,
                item3: 17
            },
            {
                y: '2012 Q4',
                item1: 18,
                item2: 19,
                item3: 20
            },
            {
                y: '2013 Q1',
                item1: 21,
                item2: 23,
                item3: 22
            },
            {
                y: '2013 Q2',
                item1: 25,
                item2: 28,
                item3: 26
            }
        ],
        xkey: 'y',
        ykeys: ['item1', 'item2', 'item3'],
        labels: ['Item 1', 'Item 2', 'Item 3'],
        lineColors: ['#5a5', '#6b6', '#7c7'],
        lineWidth: 2,
        hideHover: 'auto',
        gridTextColor: "#000",
        gridStrokeWidth: 0.4,
        pointSize: 4,
        pointStrokeColors: ["#efefef"],
        gridLineColor: "#000",
        gridTextFamily: "Open Sans",
        gridTextSize: 10
    });
});