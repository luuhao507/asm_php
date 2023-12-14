@extends('admin');
@section('container-admin')
    <div id="container"></div>
@endsection
<script>
    anychart.onDocumentReady(function() {
        // create column chart
        var chart = anychart.column();

        // turn on chart animation
        chart.animation(true);

        // set chart title text settings
        chart.title('Top 10 sản phẩm bán chạy nhất');

        // create area series with passed data
        var series = chart.column([
            ['Rouge', '80540'],
            ['Foundation', '94190'],
            ['Mascara', '102610'],
            ['Lip gloss', '110430'],
            ['Lipstick', '128000'],
            ['Nail polish', '143760'],
            ['Eyebrow pencil', '170670'],
            ['Eyeliner', '213210'],
            ['Eyeshadows', '249980']
        ]);

        // set series tooltip settings
        series.tooltip().titleFormat('{%X}');

        series
            .tooltip()
            .position('center-top')
            .anchor('center-bottom')
            .offsetX(0)
            .offsetY(5)
            .format('${%Value}{groupsSeparator: }');

        // set scale minimum
        chart.yScale().minimum(0);

        // set yAxis labels formatter
        chart.yAxis().labels().format('${%Value}{groupsSeparator: }');

        // tooltips position and interactivity settings
        chart.tooltip().positionMode('point');
        chart.interactivity().hoverMode('by-x');

        // axes titles
        chart.xAxis().title('Product');
        chart.yAxis().title('Revenue');

        // set container id for the chart
        chart.container('container');

        // initiate chart drawing
        chart.draw();
    });
</script>
