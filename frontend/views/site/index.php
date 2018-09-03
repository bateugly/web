<?php
use frontend\assets\HighchartsAsset;
use frontend\assets\CssAsset;

use frontend\models\stats;
use yii\helpers\Html;
use yii\helpers\Url;
HighchartsAsset::register($this);
CssAsset::register($this);
 $this->title = "หน้าแรก";

$t1 = $modelstats[0]->name; 
$total = count($modelstats);
$a = array();
for($i=0;$i<$total;$i++){
    //echo $modelstats[$i]->name."<br>"; 
    $a[$i] =  $modelstats[$i]->name;
}
//echo count($a);
 $y = "";
 $score = "";
$ab = 0;
for($i=0;$i<$total;$i++){
   
    $y .= "" . "'" .$modelstats[$i]->name ."'". ","; 
    $score .= "" .  $modelstats[$i]->score . ","; 
    $ab = $ab + $modelstats[$i]->score;
   
}
//echo $ab;
//echo "<br>".$y;
//echo "<br>".$score;



?>





   
     <!--    <div class="title">
            <h3 class="mt-5">Carousel</h3>
        </div> -->
        

               

     <div class="panel panel-primary">
      <div class="panel-heading">ประชาสัมพันธ์</div>
      <div class="panel-body">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" style="max-width: 100%">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="max-height: 10500px; max-width: 10500px;">

      <div class="item active">
        <a href="www.google.com">
        <img src="img/bb.jpg" alt="Los Angeles" style="width:100%;">

        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
         </a>
      </div>

      <div class="item">
        <img src="img/bb.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/bb.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
   

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</div>


    
    
    

    
    
 








  




    <div class="row">    
<div class="col-lg-12">

   <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-bar-chart-o fa-fw"></i> คะแนนทั้งหมด</div>
      <div class="panel-body">          <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $ab;?></div>
                                    <div>คะแนนทั้งหมด</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= Url::to(['stat/index']);?>">
                            <div class="panel-footer">
                                <span class="pull-left">ดูเพิ่มเติม</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                        <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $ab;?></div>
                                    <div>คะแนนทั้งหมด</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= Url::to(['stat/index']);?>">
                            <div class="panel-footer">
                                <span class="pull-left">ดูเพิ่มเติม</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                        <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $ab;?></div>
                                    <div>คะแนนทั้งหมด</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= Url::to(['stat/index']);?>">
                            <div class="panel-footer">
                                <span class="pull-left">ดูเพิ่มเติม</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                        <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $ab;?></div>
                                    <div>คะแนนทั้งหมด</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= Url::to(['stat/index']);?>">
                            <div class="panel-footer">
                                <span class="pull-left">ดูเพิ่มเติม</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
    </div>
           <!--  <h1 class="page-header"><?= Html::encode($this->title) ?></h1> -->

    </div>
</div> 


<div class="row">
	<div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">Panel with panel-primary class</div>
      <div class="panel-body" <div class="nav-tabs-custom" id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div></div>
    </div>

  

  	<div class="col-lg-6">


 <div class="panel panel-default">
      <div class="panel-heading">Panel with panel-primary class</div>
       

             <div class="box" id="containerc" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
           </div>
         </div>

       
        <!-- /.box-body -->
      
  
</div>


<div class="row">
	<div class="col-lg-6">

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

            <div class="nav-tabs-custom" id="containerb" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <!-- /.box-body -->
      </div>
  </div>


  	<div class="col-lg-6">

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

            <div class="nav-tabs-custom" id="containerd" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <!-- /.box-body -->
      </div>
  </div>

</div>


<div class="row">
	<div class="col-lg-6">

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

            <div class="nav-tabs-custom" id="containere" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <!-- /.box-body -->
      </div>
  </div>


  	<div class="col-lg-6">

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

            <div class="nav-tabs-custom" id="containerf" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <!-- /.box-body -->
      </div>
  </div>

</div>



      

<div class="row">
	<div class="col-lg-6">

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

            <div class="nav-tabs-custom" id="containerg" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <!-- /.box-body -->
      </div>
  </div>


  	<div class="col-lg-6">

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

            <div class="nav-tabs-custom" id="containerh" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <!-- /.box-body -->
      </div>
  </div>

</div>
    

<div class="row">
	<div class="col-lg-6">

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

            <div class="nav-tabs-custom" id="containeri" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <!-- /.box-body -->
      </div>
  </div>


  	<div class="col-lg-6">

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

            <div class="nav-tabs-custom" id="containerj" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <!-- /.box-body -->
      </div>
  </div>

</div>







<?php $this->registerJs("

    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [".$y."],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },

    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: ['d'],
        data: [".$score."]
    }]
});



")?>


<?php 

$name = "";
$y = "";
for($i=0;$i<$total;$i++){
   
    $name .= "{" . "name:". "'" .$modelstats[$i]->name. "'" . ","."y:". $modelstats[$i]->score ."}". ","; 
    $y .= "" .  $modelstats[$i]->score . ","; 
}

//echo "<br>".$name;
//echo "<br>".$y;
?>


<?php $this->registerJs("

   Highcharts.chart('containerb', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [".$name."]
    }]
});


")?>





<?php 
//echo "<br>".$y;
$this->registerJs("


Highcharts.chart('containerc', {

    title: {
        text: 'Logarithmic axis demo'
    },

    xAxis: {
        tickInterval: 1
    },

    yAxis: {
        type: 'logarithmic',
        minorTickInterval: 0.1
    },

    tooltip: {
        headerFormat: '<b>{series.name}</b><br />',
        pointFormat: 'x = {point.x}, y = {point.y}'
    },

    series: [{
        name: [".$y."],
        data:[".$score."],
        pointStart: 1
    }]
});
")?>




<?php 

$namecontainerc = "";
$ycontainerc = "";
for($i=0;$i<$total;$i++){
   
    $namecontainerc .= "{" . "name:". "'" .$modelstats[$i]->name. "'" . ","."y:". $modelstats[$i]->score . ",drilldown:". "'". $modelstats[$i]->name ."'". "}". ","; 
    

  //  echo $namecontainerc;
}

//echo "<br>".$name;
//echo "<br>".$y;
?>


<?php 
//echo "<br>".$y;
$this->registerJs("


Highcharts.chart('containerd', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Browser market shares. January, 2018'
    },
    subtitle: {
        text: 'Click the columns to view versions. Source: '
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total percent market share'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },



    series: [
        {
            name: 'Browsers',
            colorByPoint: true,
            data: [
               
              $namecontainerc
                
            ]
        }
    ],

});

")?>




<?php 

$namecontainere = "";
$ycontainere = "";
for($i=0;$i<$total;$i++){
   
    $namecontainere .= "{" . "name:". "'" .$modelstats[$i]->name. "'" . ","."data:[". $modelstats[$i]->score . "]},"; 
    

    //echo $namecontainere;
}

//echo "<br>".$name;
//echo "<br>".$y;
?>

<?php 
//echo "<br>".$y;
$this->registerJs("


Highcharts.chart('containere', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'ชื่อกราฟ'
    },
    subtitle: {
        text: 'รายละเอียด'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'คะแนน'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [$namecontainere]
});

")?>



<?php 
//echo "<br>".$y;
$this->registerJs("


Highcharts.chart('containerf', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Stacked column chart'
    },
    xAxis: {
        categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total fruit consumption'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true,
                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
            }
        }
    },
    series: [{
        name: 'John',
        data: [5, 3, 4, 7, 2]
    }, {
        name: 'Jane',
        data: [2, 2, 3, 2, 1]
    }, {
        name: 'Joe',
        data: [3, 4, 4, 2, 5]
    }]
});

")?>



<?php 
//echo "<br>".$y;
$this->registerJs("


Highcharts.chart('containerg', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Stacked bar chart'
    },
    xAxis: {
        categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total fruit consumption'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'John',
        data: [5, 3, 4, 7, 2]
    }, {
        name: 'Jane',
        data: [2, 2, 3, 2, 1]
    }, {
        name: 'Joe',
        data: [3, 4, 4, 2, 5]
    }]
});

")?>





<?php 
//echo "<br>".$y;
$this->registerJs("


Highcharts.chart('containerh', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Historic World Population by Region'
    },
    subtitle: {
        text: 'Source: '
    },
    xAxis: {
        categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (millions)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' millions'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Year 1800',
        data: [1035, 31, 635, 2040, 2]
    }, {
        name: 'Year 1900',
        data: [133, 156, 947, 408, 6]
    }, {
        name: 'Year 2000',
        data: [814, 841, 3714, 727, 31]
    }, {
        name: 'Year 2016',
        data: [1216, 1001, 4436, 738, 40]
    }]
});

")?>



<?php 
//echo "<br>".$y;
$this->registerJs("


Highcharts.chart('containeri', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },

    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Tokyo',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'New York',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'London',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    }, {
        name: 'Berlin',
        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

    }]
});

")?>

