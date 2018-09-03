<?php
use frontend\assets\HighchartsAsset;
use frontend\models\stats;

HighchartsAsset::register($this);
$this->title = "dd";

$t1 = $modelstats[0]->name; 
$total = count($modelstats);
$a = array();
for($i=0;$i<$total;$i++){
	echo $modelstats[$i]->name;
	$a[$i] =  $modelstats[$i]->name;
}
echo count($a);
var_dump($a);

?>



<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

   <?php

        $values= array('49.9', '71.5', '106.4', '129.2', '144.0', '176.0', '135.6', '148.5', 216.4, '194.1', '95.6', '54.4');
        $rainValues = implode(",", $values);
    ?>
<?php $this->registerJs("

Highcharts.chart('container', {
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
        data: [{
            name: 'Chrome',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Internet Explorer',
            y: 11.84
        }, {
            name: 'Firefox',
            y: 10.85
        }, {
            name: 'Edge',
            y: 4.67
        }, {
            name: 'Safari',
            y: 4.18
        }, {
            name: 'Sogou Explorer',
            y: 1.64
        }, {
            name: 'Opera',
            y: 1.6
        }, {
            name: 'QQ',
            y: 1.2
        }, {
            name: 'Other',
            y: 2.61
        }]
    }]
});



")?>