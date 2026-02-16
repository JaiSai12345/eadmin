function getChartColorsArray(id){
    if(document.getElementById(id)){
        var colors = document.getElementById(id).getAttribute("data-colors");
        colors = JSON.parse(colors);
        return colors.map(function(value){
            value = value.replace(" ","");
            if(value.indexOf("--") === -1){
                return value;
            }else{
                var cssVar = getComputedStyle(document.documentElement).getPropertyValue(value);
                return cssVar || undefined;
            }
        });
    }
}

/* ======================
   MINI LINE CHARTS
====================== */

function renderMiniLine(id, data){
    var colors = getChartColorsArray(id);
    if(colors){
        var options = {
            series: [{
                data: data
            }],
            chart: {
                type: "line",
                height: 60,
                sparkline: { enabled: true }
            },
            stroke: {
                curve: "smooth",
                width: 2
            },
            colors: colors,
            tooltip: {
                fixed: { enabled: false },
                x: { show: false },
                y: { title: { formatter: () => "" } },
                marker: { show: false }
            }
        };

        new ApexCharts(document.querySelector("#"+id), options).render();
    }
}

/* Render Mini Lines */
renderMiniLine("mini-1",[25,66,41,89,63,25,44,23,40,40,54,41]);
renderMiniLine("mini-2",[56,20,80,40,75,41,25,66,41,89,63,25]);
renderMiniLine("mini-3",[59,63,35,75,50,66,25,66,41,40,54,41]);
renderMiniLine("mini-4",[45,36,40,64,41,66,41,89,63,25,44,20]);

/* =======================
SALES REPORT LINE CHART
======================= */

var salesReportColors = getChartColorsArray("sales-report");

if (salesReportColors) {

    if (window.salesChart) {
        window.salesChart.destroy();
    }

    var options1 = {
        chart: {
            type: "line",
            height: 360,
            toolbar: { show: false },
            animations: {
                enabled: true,
                easing: "easeinout",
                speed: 900
            }
        },

        series: [
            {
                name: "Sales",
                data: [600, 590, 550, 590, 650, 710, 970, 960, 880, 750, 920, 1000]
            },
            {
                name: "Purchases",
                data: [100, 200, 400, 500, 750, 250, 970, 420, 980, 690, 1020, 450]
            },
            {
                name: "Orders",
                data: [1000, 930, 1100, 880, 1240, 700, 1260, 710, 1260, 920, 1180, 1240]
            }
        ],

        stroke: {
            curve: "smooth",
            width: 3
        },

        colors: [
            "#28b765",  
            "#1f58c7",  
            "#b96cb6"   
        ],

        xaxis: {
            categories: ["Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec","Jan","Feb","Mar",]
        },
        
        markers: {
            size: 0
        },

        dataLabels: {
            enabled: false
        },

        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function(val){
                    return "₹" + val.toLocaleString();
                }
            }
        },

        legend: {
            position: "top",
            horizontalAlign: "right"
        }
    };

    window.salesChart = new ApexCharts(document.querySelector("#sales-report"), options1);
    window.salesChart.render();
}

/* =======================
   PIE CHART
======================= */

var pieColors = getChartColorsArray("chart-pie");

if (pieColors) {

    if (window.pieChart) {
        window.pieChart.destroy();
    }

    var options = {
        series: [384, 584, 497, 650, 750],   // raw values

        chart: {
            type: "donut",
            height: 360
        },

        // Category labels
        labels: ["Men's wear", "Women's wear", "Kid's wear", "Footwear", "Electronics"],

        // Different colors
        colors: [
            "#1f58c7",
            "#da1cba",
            "#28b765",
            "#8a8f8c",
            "#9b59b6"
        ],

        //  disable inside values
        dataLabels: {
            enabled: true
        },

        //  Legend with percentage
        legend: {
            show: true,
            position: "bottom",
            horizontalAlign: "center",
            fontSize: "12px",
            formatter: function(seriesName, opts) {
                let series = opts.w.globals.series;
                let total = series.reduce((a, b) => a + b, 0);
                let value = series[opts.seriesIndex];
                let percent = ((value / total) * 100).toFixed(1);
                return `${seriesName} : ${percent}%`;
            }
        },

        //Tooltip with percentage
        tooltip: {
            y: {
                formatter: function (val, opts) {
                    let series = opts.w.globals.series;
                    let total = series.reduce((a, b) => a + b, 0);
                    let percent = ((val / total) * 100).toFixed(2);
                    return percent + "%";
                }
            }
        }
    };

    window.pieChart = new ApexCharts(document.querySelector("#chart-pie"), options);
    window.pieChart.render();
}

