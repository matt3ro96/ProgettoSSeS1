/**
* Theme: Adminto Admin Template
* Author: Coderthemes
* Morris Chart
*/

!function($) {
    "use strict";

    var MorrisCharts = function() {};


   
    //creates Bar chart
    MorrisCharts.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#2f3e47',
            gridTextColor: '#98a6ad',
            barSizeRatio: 0.4,
            barColors: lineColors
        });
    },
    
    //creates area chart with dotted
    MorrisCharts.prototype.createAreaChartDotted = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, Pfillcolor, Pstockcolor, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 3,
            lineWidth: 1,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            pointFillColors: Pfillcolor,
            pointStrokeColors: Pstockcolor,
            resize: true,
            gridLineColor: '#2f3e47',
            gridTextColor: '#98a6ad',
            lineColors: lineColors
        });
    },
  
    MorrisCharts.prototype.init = function() {

        //creating bar chart
        var $barData  = 
            "<?php header ('location: getSintesi2.php') ?>";
            alert($barData);
        this.createBarChart('morrisBar', $barData, 'y', ['a'], ['Series A'], ['#ff8acc']);

       //creating area chart with dotted
        var $areaDotData = [
            { y: '2008', a: 50, b: 0 },
            { y: '2009', a: 75, b: 50 },
            { y: '2010', a: 30, b: 80 },
            { y: '2011', a: 50, b: 50 },
            { y: '2012', a: 75, b: 10 },
            { y: '2013', a: 50, b: 40 },
            { y: '2014', a: 75, b: 50 },
            { y: '2015', a: 100, b: 70 }
        ];
        this.createAreaChartDotted('morris', 0, 0, $areaDotData, 'y', ['a', 'b'], ['temperatura', 'umidità'],['#ffffff'],['#999999'], ['#FF421E', "#35b8e0"]); 
    },
    //init
    $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.MorrisCharts.init();
}(window.jQuery);