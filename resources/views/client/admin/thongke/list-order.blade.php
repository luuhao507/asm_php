@extends('admin');
@section('container-admin')
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
    <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
    {{-- <style type="text/css">
        html,
        body,
        #container {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style> --}}


    <div style="margin-left: 13%;" id="container"></div>


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
                @foreach ($dem_sp as $item)
                    [{{ $item->id_sp }}, {{ $item->tong }}],
                @endforeach
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


    {{-- <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
    <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
    <style type="text/css">
        html,
        body,
        #container {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <script>
        anychart.onDocumentReady(function() {
            // create column chart
            var chart = anychart.column();
            // turn on chart animation
            chart.animation(true);

            // set chart title text settings
            chart.title('');

            // create area series with passed data
            var series = chart.column([
               
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
            chart.xAxis().title('Sản Phẩm');
            chart.yAxis().title('Đơn Vị');

            // set container id for the chart
            chart.container('container');

            // initiate chart drawing
            chart.draw();
        });
    </script>
    <div id="container"></div> --}}
@endsection
