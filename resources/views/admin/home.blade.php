@extends('admin.layouts.app')

@section('title')
    Admin Home Page
@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Home Page
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      @can('participants19.view', Auth::user())
          <!-- ./col -->
          <div class="col-md-3">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3>{{ $memberssecond_count }}<sup style="font-size: 20px">Memebers</sup></h3>

                <p>Memebers number</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('memberssecond19.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
      @endcan
      @can('participants19.view', Auth::user())
        <!-- ./col -->
        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $participants_count }}<sup style="font-size: 20px">Participants</sup></h3>

              <p>Participants number</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('participants19.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <!-- AREA CHART -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Members first and second preference Chart</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="membersChart" style="height:250px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>

      <!-- AREA CHART -->

      <!-- AREA CHART -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Participants first and second preference Chart</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="areaChart" style="height:250px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>

      <!-- AREA CHART -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Participants days distributed Chart</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="daysDist" style="height:250px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>

      <!-- AREA CHART -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Participants Iq days distributed Chart</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="iqsDistDays" style="height:250px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>

      <!-- AREA CHART -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Participants Iq hours distributed Chart</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="iqsDistHours" style="height:250px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      @endcan

  

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('footer')
<!-- ChartJS 1.0.1 -->
<script src="{{ asset('admin_style/js/chartjs/Chart.min.js') }}"></script>
<script>
  $(function () {

    let myChart = (id, areaChartData) => {
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */

      //--------------
      //- AREA CHART -
      //--------------

      // Get context with jQuery - using jQuery's .get() method.
      var areaChartCanvas2 = $(id).get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var areaChart = new Chart(areaChartCanvas2);

      var areaChartOptions = {
        //Boolean - If we should show the scale at all
        showScale: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: false,
        //String - Colour of the grid lines
        scaleGridLineColor: "rgba(0,0,0,.05)",
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - Whether the line is curved between points
        bezierCurve: true,
        //Number - Tension of the bezier curve between points
        bezierCurveTension: 0.3,
        //Boolean - Whether to show a dot for each point
        pointDot: false,
        //Number - Radius of each point dot in pixels
        pointDotRadius: 4,
        //Number - Pixel width of point dot stroke
        pointDotStrokeWidth: 1,
        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
        pointHitDetectionRadius: 20,
        //Boolean - Whether to show a stroke for datasets
        datasetStroke: true,
        //Number - Pixel width of dataset stroke
        datasetStrokeWidth: 2,
        //Boolean - Whether to fill the dataset with a color
        datasetFill: true,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true
      };

      //Create the line chart
      areaChart.Line(areaChartData, areaChartOptions);
    }


    var areaChartDataForMembersSecondDist = {
      labels: [
        @foreach ($first_member as $workshop)
          "{{ substr($workshop->name, 0, 12) }}",
        @endforeach
      ],
      datasets: [
        {
          label: "Second Preference",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [
            @foreach ($second_member as $workshop)
              {{ $workshop->members_second_count }},
            @endforeach
          ]
        },
        {
          label: "First Preference",
          fillColor: "rgba(255,0,0,0.9)",
          strokeColor: "rgba(255,0,0,0.8)",
          pointColor: "#f00",
          pointStrokeColor: "rgba(255,0,0,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(255,0,0,1)",
          data: [
            @foreach ($first_member as $workshop)
              {{ $workshop->members_first_count }},
            @endforeach
          ]
        }
      ]
    };

    var areaChartDataForWorkshopsDist = {
      labels: [
        @foreach ($first as $workshop)
          "{{ $workshop->name }}",
        @endforeach
      ],
      datasets: [
        {
          label: "Second Preference",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [
            @foreach ($second as $workshop)
              {{ $workshop->participants_second_count }},
            @endforeach
          ]
        },
        {
          label: "First Preference",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [
            @foreach ($first as $workshop)
              {{ $workshop->participants_first_count }},
            @endforeach
          ]
        }
      ]
    };

  var areaChartDataForDaysDist = {
      labels: [
        @foreach ($days_dist as $day => $value)
          "{{ $day }}",
        @endforeach
      ],
      datasets: [
        {
          label: "Days",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [
            @foreach ($days_dist as $day)
              {{ count($day) }},
            @endforeach
          ]
        }
      ]
    };

    var areaChartDataForIQDaysDist = {
      labels: [
        @foreach ($iqs_dist_days as $day => $value)
          "{{ $day }}",
        @endforeach
      ],
      datasets: [
        {
          label: "Iq Days",
          fillColor: "#00B361",
          strokeColor: "#00B361",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [
            @foreach ($iqs_dist_days as $day)
              {{ count($day) }},
            @endforeach
          ]
        }
      ]
    };

    var areaChartDataForIQHoursDist = {
      labels: [
        @foreach ($iqs_dist_hours as $hour => $value)
          "{{ $hour }}",
        @endforeach
      ],
      datasets: [
        {
          label: "Iq hours",
          fillColor: "#EB2826",
          strokeColor: "#EB2826",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [
            @foreach ($iqs_dist_hours as $hour)
              {{ count($hour) }},
            @endforeach
          ]
        }
      ]
    };

    myChart('#membersChart', areaChartDataForMembersSecondDist)
    myChart('#areaChart', areaChartDataForWorkshopsDist)
    myChart('#daysDist', areaChartDataForDaysDist)
    myChart('#iqsDistDays', areaChartDataForIQDaysDist)
    myChart('#iqsDistHours', areaChartDataForIQHoursDist)


  })
</script>
@endsection

