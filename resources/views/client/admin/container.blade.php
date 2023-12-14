@extends('admin');
@section('container-admin')
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
    <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white">
                                <i class="fa-solid fa-address-card"></i>
                            </h1>
                            <h6 class="text-white"> Danh Mục</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white">
                                <i class="fa-solid fa-user"></i>
                            </h1>
                            <h6 class="text-white"> Tài Khoản</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white">
                                <i class="fa-solid fa-tree"></i>
                            </h1>
                            <h6 class="text-white"> Sản Phẩm</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white">
                                <i class="fa-brands fa-first-order"></i>
                            </h1>
                            <h6 class="text-white"> Đơn Hàng</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">
                                <i class="fa-solid fa-person-dots-from-line"></i>
                            </h1>
                            <h6 class="text-white">Liên Hệ</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Phân tích trang web</h4>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-9">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="container"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ $count_tk }}</h5>
                                                <small class="font-light">Tài Khoản</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-cart fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ $count_sp }}</h5>
                                                <small class="font-light">Tổng Sản Phẩm</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-tag fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ $count_dh }}</h5>
                                                <small class="font-light">Tổng Đơn Hàng</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-table fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ $count_cmt }}</h5>
                                                <small class="font-light">Tổng Bình Luận</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-web fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{ $count_dm }}</h5>
                                                <small class="font-light">Tổng Danh Mục</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        anychart.onDocumentReady(function() {
            // create data set on our data
            var dataSet = anychart.data.set(getData());

            // map data for the first series, take x from the zero column and value from the first column of data set
            var firstSeriesData = dataSet.mapAs({
                x: 0,
                value: 1
            });

            // map data for the second series, take x from the zero column and value from the second column of data set
            var secondSeriesData = dataSet.mapAs({
                x: 0,
                value: 2
            });

            // map data for the third series, take x from the zero column and value from the third column of data set
            var thirdSeriesData = dataSet.mapAs({
                x: 0,
                value: 3
            });

            // create line chart
            var chart = anychart.line();

            // turn on chart animation
            chart.animation(true);

            // set chart padding
            chart.padding([10, 20, 5, 20]);

            // turn on the crosshair
            chart.crosshair().enabled(true).yLabel(false).yStroke(null);

            // set tooltip mode to point
            chart.tooltip().positionMode('point');

            // set chart title text settings
            chart.title(
                'Doanh số theo tháng năm'
            );

            // set yAxis title
            chart.yAxis().title('Số lượng sản phẩm đã bán');
            chart.xAxis().labels().padding(5);

            // create first series with mapped data
            var firstSeries = chart.line(firstSeriesData);
            firstSeries.name('Doanh số');
            firstSeries.hovered().markers().enabled(true).type('circle').size(4);
            firstSeries
                .tooltip()
                .position('right')
                .anchor('left-center')
                .offsetX(5)
                .offsetY(5);

            // create second series with mapped data
            // var secondSeries = chart.line(secondSeriesData);
            // secondSeries.name('Whiskey');
            // secondSeries.hovered().markers().enabled(true).type('circle').size(4);
            // secondSeries
            //     .tooltip()
            //     .position('right')
            //     .anchor('left-center')
            //     .offsetX(5)
            //     .offsetY(5);

            // // create third series with mapped data
            // var thirdSeries = chart.line(thirdSeriesData);
            // thirdSeries.name('Tequila');
            // thirdSeries.hovered().markers().enabled(true).type('circle').size(4);
            // thirdSeries
            //     .tooltip()
            //     .position('right')
            //     .anchor('left-center')
            //     .offsetX(5)
            //     .offsetY(5);

            // turn the legend on
            chart.legend().enabled(true).fontSize(13).padding([0, 0, 10, 0]);

            // set container id for the chart
            chart.container('container');
            // initiate chart drawing
            chart.draw();
        });

        function getData() {
            return [
                @foreach ($list as $item)
                    [{{ $item->month }}, {{ $item->doanh_so }}],
                @endforeach
            ];
        }
    </script>
@endsection
