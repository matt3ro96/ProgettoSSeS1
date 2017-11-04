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
    
  
    MorrisCharts.prototype.init = function() {

        //creating bar chart
   
 
        var $barData  = [
            { Impianto: '2009', Tipo: "termostato", Media: 90 , c: 40 },
             { Impianto: '2009', Tipo: 100, Media: 90 , c: 40 },
              { Impianto: '2009', Tipo: 100, Media: 90 , c: 40 },
               { Impianto: '2009', Tipo: 100, Media: 90 , c: 40 },
                { Impianto: '2009', Tipo: 100, Media: 90 , c: 40 }
        ];

                         
        this.createBarChart('morrisBar', $barData, 'Impianto', ['Tipo','Media'], ['Tipo','Media'], ['#ff8acc','#0000ff']);

        },
    //init
    $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.MorrisCharts.init();
}(window.jQuery);