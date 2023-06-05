<!--Author     : @arboshiki-->
<div id="dashboard" class="dashboard">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="tile-stat bg-white border-1">
                <div class="tile-body min-h-200 text-center">
                    <h3 class="margin-top-5 text-info font-weight-700">INCOME</h3>
                    <div class="sparkline-responsive" data-Type="line" data-max-width="200" data-Height="70" data-data="[2,3,1,4,5,3,6,4,7,9,7]"></div>
                    <div class="row">
                        <div class="col-xs-4">
                            <h5>TODAY</h5>
                            <h5>$ 1 723 <i class="fa fa-level-up text-info"></i></h5>
                        </div>
                        <div class="col-xs-4">
                            <h5>WEEK</h5>
                            <h5>$ 32 880 <i class="fa fa-level-up text-info"></i></h5>
                        </div>
                        <div class="col-xs-4">
                            <h5>MONTH</h5>
                            <h5>$ 105 331 <i class="fa fa-level-down text-danger"></i></h5>
                        </div>
                    </div>
                </div>
                <div class="tile-progressbar">
                    <span class="bg-info" style="width: 27.9%;"></span>
                </div>
                <div class="tile-footer">
                    <div class="sparkline vertical-align-middle text-center" data-Type="pie" data-Height="40">6,8,12,4,5</div>
                    <h4>27.9% <i class="fa fa-level-up text-info"></i></h4>
                    <h5>Different currencies</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="tile-stat bg-white border-1">
                <div class="tile-body min-h-200 text-center">
                    <h3 class="margin-top-5 text-info font-weight-700">VISITORS</h3>
                    <div class="sparkline-responsive" data-type="bar" data-max-width="200" data-height="70" data-data="[10,8,5,3,6,4,7,9,10,13,11,16]"></div>
                    <div class="row">
                        <div class="col-xs-4">
                            <h5>TODAY</h5>
                            <h5>57 840 <i class="fa fa-level-up text-info"></i></h5>
                        </div>
                        <div class="col-xs-4">
                            <h5>WEEK</h5>
                            <h5>904 672 <i class="fa fa-level-up text-info"></i></h5>
                        </div>
                        <div class="col-xs-4">
                            <h5>MONTH</h5>
                            <h5>37 876 109 <i class="fa fa-level-down text-danger"></i></h5>
                        </div>
                    </div>
                </div>
                <div class="tile-progressbar">
                    <span class="bg-info" style="width: 65.5%;"></span>
                </div>
                <div class="tile-footer">
                    <span class="sparkline vertical-align-middle text-left" data-Type="bar" data-BarWidth="5" data-Height="30">1,4,5,3,6,4,7,9,7</span>
                    <h4>65.5% <i class="fa fa-level-up text-info"></i></h4>
                    <h5>Statistics of this year</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="tile-stat bg-white border-1">
                <div class="tile-body min-h-200">
                    <div class="pull-left">
                        <h3 class="margin-top-5 text-info font-weight-700">VISITORS</h3>
                        <h2 class="margin-top-5 text-info">540k+</h2>
                    </div>
                    <i class="fa fa-globe fa-4x pull-right text-info"></i>
                    <div class="clearfix"></div>
                    <div class="sparkline text-center" data-Type="pie" data-Height="90">6,8,12,4,5</div>
                </div>
                <div class="tile-progressbar">
                    <span class="bg-info" style="width: 35.5%;"></span>
                </div>
                <div class="tile-footer">
                    <span class="sparkline vertical-align-middle text-left" data-Type="bar" data-BarWidth="5"  data-Height="30">8,6,4,8,10,6,5,9,10</span>
                    <h4>35.5% <i class="fa fa-level-up text-info"></i></h4>
                    <h5>Statistics from last year</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="tile-stat bg-white border-1">
                <div class="tile-body min-h-200">
                    <div class="pull-left">
                        <h3 class="margin-top-5 text-info font-weight-700">USERS</h3>
                        <h2 class="margin-top-5 text-info">210k+</h2>
                    </div>
                    <i class="fa fa-facebook-official fa-4x pull-right text-info"></i>
                    <div class="clearfix"></div>
                    <div class="sparkline text-center" data-Type="pie" data-Offset="80" data-Height="90">6,8,12,4,5</div>
                </div>
                <div class="tile-progressbar">
                    <span class="bg-info" style="width: 12.2%;"></span>
                </div>
                <div class="tile-footer">
                    <span class="sparkline vertical-align-middle text-left" data-Type="line" data-DefaultPixelsPerValue="5" data-Height="30">8,3,4,10,6,5,6,5,8,4,9,10</span>
                    <h4>12.2% <i class="fa fa-level-down text-danger"></i></h4>
                    <h5>Statistics from last year</h5>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div id="dashboard-statisticts-panel" class="panel panel-light">
            <div class="panel-heading">
                <div class="panel-title">
                    <i class="fa fa-line-chart"></i> Statistics
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <canvas id="line-chart" height="250" width="900"></canvas>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h3 class="text-center margin-top-5">Sales in this week</h3>
                    <div class="col-xxs-12 col-xs-6 col-sm-3 text-center">
                        <h4>Clothing</h4>
                        <canvas id="dashbboard-clothing-sales" height="100" width="100"></canvas>
                        <h5>
                            Total <span class="badge font-size-lg">2125</span> orders
                        </h5>
                    </div>
                    <div class="col-xxs-12 col-xs-6 col-sm-3 text-center">
                        <h4>Computing</h4>
                        <canvas id="dashbboard-computing-sales" height="100" width="100"></canvas>
                        <h5>
                            Total <span class="badge font-size-lg">1742</span> orders
                        </h5>
                    </div>
                    <div class="col-xxs-12 col-xs-6 col-sm-3 text-center">
                        <h4>Furniture</h4>
                        <canvas id="dashbboard-furniture-sales" height="100" width="100"></canvas>
                        <h5>
                            Total <span class="badge font-size-lg">69</span> orders
                        </h5>
                    </div>
                    <div class="col-xxs-12 col-xs-6 col-sm-3 text-center">
                        <h4>Vessel</h4>
                        <canvas id="dashbboard-vessel-sales" height="100" width="100"></canvas>
                        <h5>
                            Total <span class="badge font-size-lg">145</span> orders
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div>
                <!--Recent messages-->
                <div class="panel panel-light">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Recent messages</h4>
                        </div>
                    </div>
                    <div class="panel-body no-padding">
                        <div class="lobi-messages">
                            <div class="message-contact">
                                Jane Smith
                            </div>
                            <div class="message-list-wrapper">
                                <ul class="message-list">
                                    <li class="message message-receiver">
                                        <img class="message-avatar" src="img/users/1.jpg" alt="...">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 09:18</span>
                                            <p class="message-text">
                                                Lorem ipsum dolor sit amet netus wreaths erewhile nineveh, barrows makes innocent.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message message-sender">
                                        <img class="message-avatar" src="img/users/me-160.jpg" alt="..." width="50">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 12:35</span>
                                            <p class="message-text">
                                                Lorem ipsum dolor sit amet netus wreaths erewhile nineveh, barrows makes innocent. Test imposed kernan apple crystal nec, donning moan netus girth wish degree small taunt.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message-older-date">
                                        <span class="older-date-text"><i class="fa fa-calendar"></i> 20/02/2015 Mon</span>
                                    </li>
                                    <li class="message message-receiver">
                                        <img class="message-avatar" src="img/users/1.jpg" alt="...">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 13:00</span>
                                            <p class="message-text">
                                                Lorem ipsum dolor sit amet netus wreaths erewhile nineveh, barrows makes innocent.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message message-sender">
                                        <img class="message-avatar" src="img/users/me-160.jpg" alt="..." width="50">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 18:19</span>
                                            <p class="message-text">
                                                Test imposed kernan apple crystal nec.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message message-receiver">
                                        <img class="message-avatar" src="img/users/1.jpg" alt="...">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 19:23</span>
                                            <p class="message-text">
                                                Lorem ipsum dolor sit amet netus wreaths erewhile nineveh, barrows makes innocent.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message message-sender">
                                        <img class="message-avatar" src="img/users/me-160.jpg" alt="..." width="50">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 20:05</span>
                                            <p class="message-text">
                                                Test imposed kernan apple crystal nec, donning moan netus girth wish degree small taunt.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message-older-date">
                                        <span class="older-date-text"><i class="fa fa-calendar"></i> 27/02/2015 Fri</span>
                                    </li>
                                    <li class="message message-receiver">
                                        <img class="message-avatar" src="img/users/1.jpg" alt="...">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 21:35</span>
                                            <p class="message-text">
                                                Lorem ipsum dolor sit amet netus wreaths erewhile nineveh, barrows makes innocent.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message message-sender">
                                        <img class="message-avatar" src="img/users/me-160.jpg" alt="..." width="50">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 22:47</span>
                                            <p class="message-text">
                                                Test imposed kernan apple crystal nec, donning moan netus girth wish degree small taunt.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="well well-sm margin-bottom-no">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Say something...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-pretty" type="button">Send</button>
                                    </span>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="dashboard-todo-list"></div>
        </div>
        <div class="col-md-6">
            <!--Timeline-->
            <div class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        Timeline
                    </div>
                </div>
                <div class="panel-body no-padding">
                    <ul class="timeline padding-vertical-10 margin-bottom-no">
                        <li>
                            <div class="timeline-badge bg-info"><i class="fa fa-location-arrow"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title"><b><a href="#" class="text-danger">Daniel Mayer</a> was at corner cafe</b></h5>
                                    <small class="text-muted">19 minutes ago</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge bg-success"><i class="fa fa-image"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title"><b><a href="#" class="text-danger">George Darso</a> shared a photo with you</b></h5>
                                    <small class="text-muted">20 minutes ago</small>
                                </div>
                                <div class="timeline-body">
                                    <img src="img/demo/1_160.jpg" alt=""/>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge bg-danger"><i class="fa fa-link"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title"><b><a href="#" class="text-danger">Guga Grigo</a> shared a link with you</b></h5>
                                    <small class="text-muted">25 minutes ago</small>
                                </div>
                                <div class="timeline-body">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="img/demo/100x100-1.jpg" width="50" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Lorem ipsum dolor sit amore</h5>
                                            <small class="text-muted">03:15</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge bg-primary"><i class="fa fa-reply"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title"><b><a href="#" class="text-danger">Mari Abdu</a> replied to <a href="#" class="text-danger">your post</a></b></h5>
                                    <small class="text-muted">55 minutes ago</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Calendar events-->
            <div id="dashboard-events" class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Events</h4>
                    </div>
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function(){
            //Load and initialize sparkline charts
            LobiAdmin.loadScript([
                'assets/js/plugin/sparkline/jquery.sparkline.min.js'
            ], initSparklines);
            
            //Load and initialize chartjs
            LobiAdmin.loadScript([
                'assets/js/plugin/chartjs/Chart.min.js'
            ], initChartjs);
            
            //Load and initialize lobilist
            LobiAdmin.loadScript([
                'assets/js/lobi-plugins/lobilist.min.js'
            ], initLobiList);

            LobiAdmin.loadScript([
                'assets/js/plugin/moment/moment.min.js'
            ], function(){
                LobiAdmin.loadScript('assets/js/plugin/fullcalendar/fullcalendar.min.js', initPage);
            });
            
            function initLobiList(){
                $('#dashboard-todo-list').lobiList({
                    sortable: false,
                    controls: ['edit', 'styleChange'],
                    lists: [
                        {
                            title: 'TODOs',
                            defaultStyle: 'lobilist-info',
                            items: [
                                {
                                    title: 'Floor cool cinders',
                                    description: 'Thunder fulfilled travellers folly, wading, lake.',
                                    dueDate: '2015-01-31'
                                },
                                {
                                    title: 'Periods pride',
                                    description: 'Accepted was mollis',
                                    done: true
                                },
                                {
                                    title: 'Flags better burns pigeon',
                                    description: 'Rowed cloven frolic thereby, vivamus pining gown intruding strangers prank treacherously darkling.',
                                },
                                {
                                    title: 'Accepted was mollis',
                                    description: 'Rowed cloven frolic thereby, vivamus pining gown intruding strangers prank treacherously darkling.',
                                    dueDate: '2015-02-02'
                                },
                                {
                                    title: 'Composed trays',
                                    description: 'Hoary rattle exulting suspendisse elit paradises craft wistful. Bayonets allures prefer traits wrongs flushed. Tent wily matched bold polite slab coinage celerities gales beams.',
                                },
                                {
                                    title: 'Chic leafy',
                                    checked: true
                                }
                            ]
                        }
                    ]
                });
            }
            
            function initSparklines(){
                //Call this method before calling .sparkline() plugin to activate default colors, bar widths and other options
                initSparklineDefaults();
                initResponsiveSparklines();
                $('.sparkline').sparkline('html', {
                    enableTagOptions: true
                });
            }
            
            function initChartjs(){
                var options = {
                    responsive: true
                };
                var COLOR1 = LobiAdmin.lightenColor(LobiAdmin.DEFAULT_COLOR, -15);
                var COLOR2 = LobiAdmin.lightenColor(LobiAdmin.DEFAULT_COLOR, 0);
                var COLOR3 = LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 20);
                var COLOR4 = LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 40);

                var FADEOUT_COLOR_FACTOR = 20;

                //Initialize line chart
                (function(){
                    // Get the context of the canvas element we want to select
                    var statisticData = {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: fillChartJsColors('line', [
                            {
                                label: "Income in USD",
                                strokeColor: LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 20),
                                data: [55, 50, 55, 49, 56, 48, 50, 46, 50, 44, 56, 52]
                            },
                            {
                                label: "Income in EUR",
                                strokeColor: LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 60),
                                data:  [51, 54, 58, 66, 61, 64, 62, 56, 67, 58, 56, 54]
                            }
                        ])
                    };
                    var canvas = $('#line-chart');
                    var ctx = canvas[0].getContext("2d");
                    var statistictsChart = new Chart(ctx).Line(statisticData, options);
                    var legend = $(statistictsChart.generateLegend());
                    canvas.parent().append(legend);
                    
                    //Update charts on panel size change
                    $('#dashboard-statisticts-panel').on('onFullScreen.lobiPanel onSmallSize.lobiPanel resizeStop.lobiPanel onPin.lobiPanel onUnpin.lobiPanel dragged.lobiPanel', function(ev){
                        statistictsChart.destroy();
                        statistictsChart = new Chart(statistictsChart.chart.ctx).Line(statisticData, options);
                    });
                })();
    
    //------------------------------------------------------------------------------
    //          Initialize pie charts
    //------------------------------------------------------------------------------
                (function(){
                    var data = [
                        {
                            value: 970,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Shoes"
                        },
                        {
                            value: 505,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Caps"
                        },
                        {
                            value: 400,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "Jeans"
                        },
                        {
                            value: 250,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Shirts"
                        }
                    ];
                    var ctx = $('#dashbboard-clothing-sales')[0].getContext('2d');
                    new Chart(ctx).Doughnut(data,{});
                })();
    //------------------------------------------------------------------------------
                (function(){
                    var data = [
                        {
                            value: 370,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Mouse"
                        },
                        {
                            value: 457,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "HDD"
                        },
                        {
                            value: 270,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Laptop"
                        },
                        {
                            value: 89,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Webcam"
                        }
                    ];
                    var ctx = $('#dashbboard-computing-sales')[0].getContext('2d');
                    // For a pie chart
                    new Chart(ctx).Doughnut(data,{});
                })();
    //------------------------------------------------------------------------------            
                (function(){
                    var data = [
                        {
                            value: 20,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "Table"
                        },
                        {
                            value: 20,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Chair"
                        },
                        {
                            value: 8,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Desk"
                        },
                        {
                            value: 9,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Sofa"
                        }
                    ];
                    var ctx = $('#dashbboard-furniture-sales')[0].getContext('2d');
                    // For a pie chart
                    new Chart(ctx).Doughnut(data, {});
                })();
    //------------------------------------------------------------------------------
                (function(){
                    var data = [
                        {
                            value: 23,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Spoon"
                        },
                        {
                            value: 31,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Cup"
                        },
                        {
                            value: 51,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "Plate"
                        },
                        {
                            value: 21,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Knife"
                        }
                    ];
                    var ctx = $('#dashbboard-vessel-sales')[0].getContext('2d');
                    // For a pie chart
                    new Chart(ctx).Doughnut(data, {});
                })();
            }

            function initPage(){
                //Initialize lobipanels
                $('.panel:not(.panel-with-tabs)').lobiPanel({
                    editTitle: false,
                    reload: false,
                    sortable: true
                });

                //Initialize FullCalendar
                (function(){
                    $('#dashboard-events .panel-body').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        defaultDate: '2015-09-12',
                        droppable: true,
                        eventLimit: true,
                        businessHours: true,
                        eventRender: function(event, element, view){
                            if (event.description){
                                element.append('<span class="fc-description">'+event.description+'</span>');
                            }
                        },
                        events: [
                            {
                                    title: 'All Day Event',
                                    start: '2015-09-01'
                            },
                            {
                                    title: 'Long Event',
                                    start: '2015-09-07',
                                    end: '2015-09-10',
                                    className: 'bg-success border-transparent'

                            },
                            {
                                    id: 999,
                                    title: 'Repeating Event',
                                    start: '2015-09-09T16:00:00',
                                    description: 'Repeating event description',
                                    className: 'bg-danger border-transparent'
                            },
                            {
                                    id: 999,
                                    title: 'Repeating Event',
                                    start: '2015-09-16T16:00:00',
                                    description: 'Repeating event description',
                                    className: 'bg-danger border-transparent'
                            },
                            {
                                    title: 'Conference',
                                    start: '2015-09-11',
                                    end: '2015-09-13',
                                    description: 'Description will held in hole',
                                    className: 'bg-purple border-transparent'
                            },
                            {
                                    title: 'Meeting',
                                    start: '2015-09-12T10:30:00',
                                    end: '2015-09-12T12:30:00',
                                    className: 'bg-info border-transparent'
                            },
                            {
                                    title: 'Lunch',
                                    start: '2015-09-12T12:00:00',
                                    description: 'The lunch will be at corner cafe'
                            },
                            {
                                    title: 'Meeting',
                                    start: '2015-09-12T14:30:00',
                                    className: 'bg-purple border-transparent'
                            },
                            {
                                    title: 'Happy Hour',
                                    start: '2015-09-12T17:30:00'
                            },
                            {
                                    title: 'Dinner',
                                    start: '2015-09-12T20:00:00',
                                    className: 'bg-warning border-transparent'
                            },
                            {
                                    title: 'Birthday Party',
                                    start: '2015-09-13T07:00:00',
                                    className: 'bg-warning border-transparent'
                            },
                            {
                                    title: 'Click for Google',
                                    url: 'http://google.com/',
                                    start: '2015-09-28'
                            }
                        ]
                    });
                    $('#dashboard-events').on('onFullScreen.lobiPanel onSmallSize.lobiPanel resizeStop.lobiPanel onPin.lobiPanel onUnpin.lobiPanel dragged.lobiPanel', function(ev, lobiPanel){
                        var cal = lobiPanel.$el.find('.panel-body');
                        var ratio  = cal.fullCalendar('option', 'aspectRatio');
                        cal.fullCalendar('option', 'height', cal.find('.fc-view-container').outerWidth() / ratio);
                    });
                })();
            }
        })();
        
    </script>
</div>