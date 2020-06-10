@extends('admin.master')
@section('title','Trang quản trị')
@section('main')
<div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success" style="background: #04AF40">
              <div class="inner" style="color: #fff">
                <h3>{{ number_format($dl['Tháng '.count($dl)],0,"",".") }}</h3>

                <p>Doanh thu tháng {{count($dl)}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>
          <div class="col-lg-3 col-6" >
            <!-- small box -->
            <div class="small-box bg-info" style="background: #17a2b8">
              <div class="inner" style="color: #fff">
                <h3>{{$pro_count}}</h3>

                <p>Tổng số sản phẩm</p>
              </div>
              <div class="icon">
                <i class="fa fa-puzzle-piece"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success" style="background: #ffc107">
              <div class="inner" style="color: #000">
                <h3>{{$or_count}}<sup style="font-size: 20px"></sup></h3>

                <p>Tổng số đơn hàng</p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-bag"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning" style="background: #dc3545">
              <div class="inner" style="color: #fff">
                <h3>{{$acc_count}}</h3>

                <p>Số khách hàng</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>
          <!-- ./col -->
         
        </div>
      <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Biểu đồ doanh thu</div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

@stop()
@section('js')
<script>
  var lineChartData = {
      labels : [
      @foreach($dl as $key=>$value)
      "{{$key}}",
      @endforeach
      ],
      datasets : [
      
        {
          label: "My Second dataset",
          fillColor : "rgba(48, 164, 255, 0.2)",
          strokeColor : "rgba(48, 164, 255, 1)",
          pointColor : "rgba(48, 164, 255, 1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(48, 164, 255, 1)",
          data : [
            @foreach($dl as $value)
              {{ $value }},
             @endforeach
          ]
        }
      ]

    }

 
window.onload = function(){
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
    responsive: true
  });
  var chart2 = document.getElementById("bar-chart").getContext("2d");
  window.myBar = new Chart(chart2).Bar(barChartData, {
    responsive : true
  });
  var chart3 = document.getElementById("doughnut-chart").getContext("2d");
  window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {responsive : true
  });
  var chart4 = document.getElementById("pie-chart").getContext("2d");
  window.myPie = new Chart(chart4).Pie(pieData, {responsive : true
  });
  
};
</script>

@stop()