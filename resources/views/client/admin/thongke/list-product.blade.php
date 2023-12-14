@extends('admin');
@section('container-admin')
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
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
            // create pie chart with passed data
            var chart = anychart.pie([
                @foreach ($list as $item)
                    [{{ $item->id_dm }}, {{ $item->so_luong }}],
                @endforeach
            ]);
            // set chart title text settings
            chart
                .title('Thống Kê Sản Phẩm Theo Danh Mục ')
                // set chart radius
                .radius('43%')
                // create empty area in pie chart
                .innerRadius('30%');
            // set container id for the chart
            chart.container('container');
            // initiate chart drawing
            chart.draw();
        });
    </script>
    <div id="container"></div>
@endsection
