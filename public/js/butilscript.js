function changeImage(newImageSource, imageView) {
    "use strict";
    var img = document.getElementById("plantImage");
    if (imageView === "Normal") {
        img.src = "assets/images/" + newImageSource + ".JPG";
    } else {
        img.src = "assets/images/" + newImageSource + "-" + imageView + ".JPG";
    }
    return false;
}

function getPlantDetails() {
    "use strict";

}


$('#summaryTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
});

$('#dataTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
});

$('#biomass-tab').click(function (e) {
    $('biomass-chart').removeClass("no-display");
    $('greenness-chart').addClass("no-display");
    $('height-chart').addClass("no-display");
    $('tillercount-chart').addClass("no-display");
}
                        
$('#greenness-tab').click(function (e) {
    $('biomass-chart').addClass("no-display");
    $('greenness-chart').removeClass("no-display");
    $('height-chart').addClass("no-display");
    $('tillercount-chart').addClass("no-display");
}

$('#height-tab').click(function (e) {
    $('biomass-chart').addClass("no-display");
    $('greenness-chart').addClass("no-display");
    $('height-chart').removeClass("no-display");
    $('tillercount-chart').addClass("no-display");
}

$('#tillercount-tab').click(function (e) {
    $('biomass-chart').addClass("no-display");
    $('greenness-chart').addClass("no-display");
    $('height-chart').addClass("no-display");
    $('tillercount-chart').removeClass("no-display");
}

//phenotypic graph values
$(function () {
    var line = new Morris.Line({
        element: 'biomass-chart',
        resize: true,
        data: [
            {
                y: '2011 Q1',
                item1: 2666
            },
            {
                y: '2011 Q2',
                item1: 2778
            },
            {
                y: '2011 Q3',
                item1: 4912
            },
            {
                y: '2011 Q4',
                item1: 3767
            },
            {
                y: '2012 Q1',
                item1: 6810
            },
            {
                y: '2012 Q2',
                item1: 5670
            },
            {
                y: '2012 Q3',
                item1: 4820
            },
            {
                y: '2012 Q4',
                item1: 15073
            },
            {
                y: '2013 Q1',
                item1: 10687
            },
            {
                y: '2013 Q2',
                item1: 8432
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
                item1: 2666
            },
            {
                y: '2011 Q2',
                item1: 2778
            },
            {
                y: '2011 Q3',
                item1: 4912
            },
            {
                y: '2011 Q4',
                item1: 3767
            },
            {
                y: '2012 Q1',
                item1: 6810
            },
            {
                y: '2012 Q2',
                item1: 5670
            },
            {
                y: '2012 Q3',
                item1: 4820
            },
            {
                y: '2012 Q4',
                item1: 15073
            },
            {
                y: '2013 Q1',
                item1: 10687
            },
            {
                y: '2013 Q2',
                item1: 8432
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
                item1: 2666
            },
            {
                y: '2011 Q2',
                item1: 2778
            },
            {
                y: '2011 Q3',
                item1: 4912
            },
            {
                y: '2011 Q4',
                item1: 3767
            },
            {
                y: '2012 Q1',
                item1: 6810
            },
            {
                y: '2012 Q2',
                item1: 5670
            },
            {
                y: '2012 Q3',
                item1: 4820
            },
            {
                y: '2012 Q4',
                item1: 15073
            },
            {
                y: '2013 Q1',
                item1: 10687
            },
            {
                y: '2013 Q2',
                item1: 8432
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
});