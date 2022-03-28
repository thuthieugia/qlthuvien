Highcharts.chart('container111', {
    chart: {
        type: 'spline'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
    },
    yAxis: {
        title: {
            text: ''
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
    series: [{
        name: 'New',
        data: [0, 80, 120, 140, 160, 190, 235.5, 295.5, 308]
    }, {
        name: 'Registered',
        data: [150, 245, 85, 85, 270, 335, 175, 205, 265]
    }]
});