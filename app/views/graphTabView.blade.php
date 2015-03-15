<!--CSS are placed here -->
{{ HTML::style('css/bootstrap.min.css') }} {{ HTML::style('css/ionicons.min.css') }} {{ HTML::style('css/AdminLTE.css') }} {{ HTML::style('css/navbar.css') }} {{ HTML::style('css/homepage.css') }} {{ HTML::style('css/butilstyle.css') }} {{ HTML::style('css/font-awesome.min.css') }} {{ HTML::style('css/morris.css') }}

<!-- Scripts are placed here -->
{{ HTML::script('js/jquery-2.1.0.min.js') }} {{ HTML::script('js/jquery-ui-1.10.3.min.js') }} {{ HTML::script('js/bootstrap.min.js') }} {{ HTML::script('js/butilscript.js') }} {{ HTML::script('js/raphael.js') }} {{ HTML::script('js/AdminLTE/app.js') }} {{ HTML::script('js/AdminLTE/morris.js') }}

<div class="nav nav-pills tab-pane fade-in" id="graph" aria-labelledby="graph-tab">
    <div class="box box-info">
        <div class="box-header">
            <h5 class="box-title">Phenotypic Data</h5>
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