<!--CSS are placed here -->
{{ HTML::style('css/bootstrap.min.css') }} {{ HTML::style('css/ionicons.min.css') }} {{ HTML::style('css/AdminLTE.css') }} {{ HTML::style('css/navbar.css') }} {{ HTML::style('css/homepage.css') }} {{ HTML::style('css/butilstyle.css') }} {{ HTML::style('css/font-awesome.min.css') }} {{ HTML::style('css/morris.css') }}

<!-- Scripts are placed here -->
{{ HTML::script('js/jquery-2.1.0.min.js') }} {{ HTML::script('js/jquery-ui-1.10.3.min.js') }} {{ HTML::script('js/bootstrap.min.js') }} {{ HTML::script('js/butilscript.js') }} 

<script type="text/javascript">
//phenotypic graph values
$(function () {
    var line = new Morris.Line({
        element: 'biomass-chart',
        resize: true,
        data: [
            {
                y: '2014-01-05',
                item1: 60,
                item2: 84
            },
            {
                y: '2014-01-06',
                item1: 63,
                item2: 84
            },
            {
                y: '2014-01-07',
                item1: 66,
                item2: 85
            },
            {
                y: '2014-01-08',
                item1: 70,
                item2: 91
            },
            {
                y: '2014-01-09',
                item1: 73,
                item2: 91
            },
            {
                y: '2014-01-10',
                item1: 78,
                item2: 95
            },
            {
                y: '2014-01-11',
                item1: 82,
                item2: 101
            },
            {
                y: '2014-01-12',
                item1: 85,
                item2: 108
            },
            {
                y: '2014-01-13',
                item1: 87,
                item2: 120
            },
            {
                y: '2014-01-14',
                item1: 90,
                item2: 130
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
</script>

{{ HTML::script('js/raphael.js') }} {{ HTML::script('js/AdminLTE/app.js') }} {{ HTML::script('js/AdminLTE/morris.js') }}

<div class="nav nav-pills tab-pane fade-in" id="graph" aria-labelledby="graph-tab">
    <div class="box box-info">
        <div class="box-header">
            <h5 class="box-title">Phenotype</h5>
        </div>
        <div class="box-body chart-responsive nav-justified inline-block">
            <span class="col-md-2">
            <ul class="nav nav-pills nav-stacked" id="dataTab">
                <li role="presentation" class="active" id="biomass-tab"><a href="#">Biomass</a>
                </li>
                <li role="presentation" id="greenness-tab"><a href="#">Greenness</a>
                </li>
                <li role="presentation" id="height-tab"><a href="#">Height</a>
                </li>
                <li role="presentation" id="tillercount-tab"><a href="#">Tiller Count</a>
                </li>
            </ul>
            </span>
            <span class="chart col-md-10" id="biomass-chart" style="height: 300px; width: 80%"></span>
            <span class="chart col-md-10 no-display" id="greenness-chart" style="height: 300px; width: 80%"></span>
            <span class="chart col-md-10 no-display" id="height-chart" style="height: 300px; width: 80%"></span>
            <span class="chart col-md-10 no-display" id="tillercount-chart" style="height: 300px; width: 80%"></span>
            <h4>Legend:</h4>
            <div class="col-xs-12" style="background-color: #eee">
                <span class="col-xs-3" style="color:#5a5; font-weight: 700">IR64-A009-087-120-10</span>  <span class="col-xs-3" style="color: #7c7; font-weight: 700">IR105082-008-39-03-04-10</span>
            </div>
        </div>
        <!-- /.box-body -->

    </div>
    <!-- /.box -->
</div>