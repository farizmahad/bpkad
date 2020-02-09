<section class="section-info-keuangan">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a><span>beranda</span></a></li>
            <li class="breadcrumb-item"><a><span>informasi keuangan</span></a></li>
        </ol>
        <div class="div-heading-info-keuangan" style="margin-top:50px;">
            <h2 class="text-center">INFORMASI KEUANGAN BPKAD KOTA CIMAHI</h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="div-heading-trend-apbd">
                    <h5>Trend APBD</h5>
                </div>

                <div class="col-xl-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Stacked bar chart</h5>
                        </div>
                        <div class="ibox-content">
                            <div id="ct-chart3" class="ct-perfect-fourth"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 col-xl-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>APBD 2016 </h5>

                    </div>
                    <div>
                        <canvas id="doughnutChart" height="140"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class = "row">

            <div class="col-sm-6 col-lg-4 col-xl-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>APBD 2015
                        </h5>

                    </div>
                    <div>
                        <canvas id="doughnutChart2" height="140"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>APBD 2014
                        </h5>

                    </div>
                    <div>
                        <canvas id="doughnutChart3" height="140"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    $(document).ready(function(){


        // Simple line

        new Chartist.Line('#ct-chart1', {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            series: [
                [12, 9, 7, 8, 5],
                [2, 1, 3.5, 7, 3],
                [1, 3, 4, 5, 6]
            ]
        }, {
            fullWidth: true,
            chartPadding: {
                right: 40
            }
        });


        // Line scatter diagram

        var times = function(n) {
            return Array.apply(null, new Array(n));
        };

        var data = times(26).map(Math.random).reduce(function(data, rnd, index) {
            data.labels.push(index + 1);
            data.series.forEach(function(series) {
                series.push(Math.random() * 100)
            });

            return data;
        }, {
            labels: [],
            series: times(4).map(function() { return new Array() })
        });

        var options = {
            showLine: false,
            axisX: {
                labelInterpolationFnc: function(value, index) {
                    return index % 13 === 0 ? 'W' + value : null;
                }
            }
        };

        new Chartist.Line('#ct-chart2', data, options);


        // Stocked bar chart

        new Chartist.Bar('#ct-chart3', {
            labels: ['Q1', 'Q2', 'Q3', 'Q4'],
            series: [
                [800000, 1200000, 1400000, 1300000],
                [200000, 400000, 500000, 300000],
                [100000, 200000, 400000, 600000]
            ]
        }, {
            stackBars: true,
            axisY: {
                labelInterpolationFnc: function(value) {
                    return (value / 1000) + 'k';
                }
            }
        }).on('draw', function(data) {
            if(data.type === 'bar') {
                data.element.attr({
                    style: 'stroke-width: 30px'
                });
            }
        });


        // Stocked horizontal bar

        new Chartist.Bar('#ct-chart4', {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            series: [
                [5, 4, 3, 7, 5, 10, 3],
                [3, 2, 9, 5, 4, 6, 4]
            ]
        }, {
            seriesBarDistance: 10,
            reverseData: true,
            horizontalBars: true,
            axisY: {
                offset: 70
            }
        });


        // Simple pie chart

        var data = {
            series: [5, 3, 4]
        };

        var sum = function(a, b) { return a + b };

        new Chartist.Pie('#ct-chart5', data, {
            labelInterpolationFnc: function(value) {
                return Math.round(value / data.series.reduce(sum) * 100) + '%';
            }
        });

        // Gauge chart

        new Chartist.Pie('#ct-chart6', {
            series: [20, 10, 30, 40]
        }, {
            donut: true,
            donutWidth: 60,
            startAngle: 270,
            total: 200,
            showLabel: false
        });

    });
</script>
