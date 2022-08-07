            </div>

            <footer class="footer"> © <?= date('Y')?> ParrotHR powered by Zercom Systems </footer>

        </div>

    </div>
    <!-- Notifications -->
    <script src="<?php echo base_url(); ?>assets/js/notification.js"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>

    <!-- ============================================================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--morris JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.js"></script>
    <!-- Chart JS -->
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>




    <!-- CHART COMMENTED....UNCOMMENT WHEN DONE -->
    <script src="<?php echo base_url(); ?>assets/js/dashboard1.js"></script>




    
 <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>  
   
    <script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <!-- Editable -->
    <script src="<?php echo base_url(); ?>assets/plugins/jsgrid/db.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jsgrid/dist/jsgrid.min.js"></script>
    <!-- This is data table -->

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="<?php echo base_url(); ?>assets/export/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/export/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/export/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/export/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/export/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/export/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/export/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!--Custom JS Requires to load some scripts before loading custom-->
    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"></script>
    
    
    <!-- Clock Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>                        
    <!-- Date range Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>     
    <!-- end - This is for export functionality only -->
    <script src="<?php echo base_url(); ?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    



    <!-- CALENDAR -->
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/calendar/jquery-ui.min.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/calendar/dist/fullcalendar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/calendar/dist/cal-init.js"></script>

    <script type="text/javascript">
        $(function () {
            $('.mydatetimepicker').datepicker({
            format: "mm-yyyy",
            viewMode: "years", 
            minViewMode: "months"   
            });
        });
        $(function () {
            $('.mydatetimepickerFull').datepicker({
            format: "yyyy-mm-dd"   
            });
        });
    </script>      
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [[ 0, 'desc' ]],
                "aaSorting": [],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });        
    
    $('.time-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.time-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });



    
    $(function() {
    $('#datetimepicker2').datetimepicker({
      language: 'en',
      pick12HourFormat: true
    });
  });
  
    $(".select2").select2();
    </script>

    <script>
        var areaChartData = {
      labels  : ['Oniru', 'Lekki', 'Victoria Island', 'Ibadan'],
      datasets: [
		    {
          label               : 'Absent',
          backgroundColor     : 'rgb(255,153,0)',
          borderColor         : 'rgb(255,153,0)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [0.5, 0.5, 0.5, 0.5]
        },
        {
          label               : 'Present',
          backgroundColor     : 'rgb(30,0,127)',
          borderColor         : 'rgb(30,0,127)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [1.2, 1.5, 1.1, 1.5]
        }
		 
      ]
    }
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,
	    barPercentage: 0.5,
		//barThickness: 20
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

		
	
    </script>   

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fullcalendar.js"></script>
    <script>
    
      document.addEventListener('DOMContentLoaded', function() {
        var mModal = document.getElementById('mModal');
        var title = document.getElementById('calendar-title');
        var close = document.getElementById('close');
        var time = document.getElementById('time');
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          
          initialView: 'dayGridMonth',
        //   headerToolbar: {
        //         left  : 'prev,next today',
        //         center: 'addEventButton',
        //         right : 'dayGridMonth'
        //     },
          customButtons: {
                addEventButton: {
                    text: 'add event...',
                    click: function() {
                    var dateStr = prompt('Enter a date in YYYY-MM-DD format');
                    var date = new Date(dateStr + 'T00:00:00'); // will be in local time

                    if (!isNaN(date.valueOf())) { // valid?
                        calendar.addEvent({
                        title: 'dynamic event',
                        start: date,
                        allDay: true
                        });
                        alert('Great. Now, update your database...');
                    } else {
                        alert('Invalid date.');
                    }
                    }
                }
                },
          events: [
            { // this object will be "parsed" into an Event Object
            title: 'TEDx Conference', // a property!
            start: '2021-12-21', // a property!
            end: '2021-12-22', // a property! ** see important note below about 'end' **
            display: 'background'
            },
            { // this object will be "parsed" into an Event Object
            title: 'Christmas Day', // a property!
            start: '2021-12-25', // a property! ** see important note below about 'end' **
            end: '2021-12-25',
            display: 'background'
            },
            { // this object will be "parsed" into an Event Object
            title: 'Boxing Day', // a property!
            start: '2021-12-26', // a property! ** see important note below about 'end' **
            end: '2021-12-26',
            display: 'background'
            },
        ],
        eventClick: function(info) {
               
               mModal.style.display = 'block'
               title.innerHTML =  info.event.title + '&nbsp;&nbsp<span><i class="fa fa-edit"></i></span>'
               const start = JSON.stringify(info.event.start).slice(1, 11);
               const end = JSON.stringify(info.event.end).slice(1, 11);
               time.innerHTML = `${start}  |  ${end}`
               document.body.style.overflow = 'hidden'
               close.addEventListener('click', () => {
                   mModal.style.display = 'none'
                   document.body.style.overflow = 'auto'
               })
           },
        });
        calendar.render();
      });
    </script>
            <style type="text/css">/* Chart.js */
                    @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
          </style>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
             //     google.charts.load('current', {'packages':['corechart']});
                    //     google.charts.setOnLoadCallback(drawChart1);
                    //     google.charts.setOnLoadCallback(drawChart2);

                    //     function drawChart1() {

                    //       var data = google.visualization.arrayToDataTable([
                    //         ['Task', 'Hours per Day'],
                    //         ['Permanent', 11],
                    //         ['Contract', 4],
                    //         ['Consultants', 2]
                    //       ]);

                    //       var options = {
                    //         title: 'By Contract',
                    //         legend:{position:'bottom'},
                    //         colors:['#1E007F', '#FF9900', '#A3A3A3']
                    //           };

                    //       var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    //       chart.draw(data, options);
                    //     }
                    //   function drawChart2() {

                    //       var data = google.visualization.arrayToDataTable([
                    //         ['Task', 'Hours per Day'],
                    //         ['Sales', 10],
                    //         ['IT', 2],
                    //         ['Housekeeping', 2],
                    //         ['HR', 5],
                    //         ['Marketing', 5],
                    //         ['Accounting', 2]
                    //       ]);

                    //       var options = {
                    //         title: 'By Departments',	
                    //         legend:{position:'bottom'},
                    //         colors:['#1E007F', '#3366CC', '#FFB600',  '#FF9900', '#A3A3A3', '#838B8B']
                    //       };

                    //       var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

                    //       chart.draw(data, options);
        //     }


                        ///////////////////////////////////////////////////////
                        const ctx2 = document.getElementById('pieChart').getContext('2d');;
                          const myChart2 = new Chart(ctx2, {
                                type: 'pie',
                                data: {
                                    labels: [
                                        'Permanent',
                                        'Contract',
                                        'Consultant'
                                  ],
                                    datasets: [
                                    {
                                        data: [100,0,0],
                                        backgroundColor : ['#1E007F', '#FF9900', '#A3A3A3'],
                                    },
                                  ]
                                },
                                options: {
                                    maintainAspectRatio : false,
                                  responsive : true,
                                  borderWidth:1,
                                  plugins: {
                                    legend: {
                                        display: true,
                                        position: 'bottom',
                                        maxHeight: 100,
                                    },
                                    subtitle: {
                                        display: true,
                                        text: 'By Contract'
                                    }
                                }
                                },
                      });
                          
                            const ctx3 = document.getElementById('pieChart1').getContext('2d');
                            const myChart3 = new Chart(ctx3, {
                              type: 'pie',
                              data: {
                                  labels: [
                                    'Administration',
                                    'Finance',
                                    'Food and Beverages',
                                    'Kitchen',
                                    'House Keeping',
                                    'Front Office',
                                    'Maintenance',
                                ],
                                  datasets: [
                                  {
                                  data: [13,17,13, 15,13,15,15],
                                  backgroundColor : ['#1E007F', '#FF9900', '#FFB600', '#a3a3a3',  '#D6D6D6', '#ECEBEB', '#007BFF', ],
                                  },
                                
                                ]
                              },
                              options: {
                                  maintainAspectRatio : false,
                                responsive : true,
                                borderWidth:1,
                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'bottom',
                                        maxHeight:120
                                    },
                                    subtitle: {
                                        display: true,
                                        text: 'By Departments'
                                    }
                                }
                              },
                        
                      }); 
            </script>

        <script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

        <script>
            let month;
            switch(new Date().getUTCMonth()){
                case 0: month = "January"; break;
                case 1: month = "February"; break;
                case 2: month = "March"; break;
                case 3: month = "April"; break;
                case 4: month = "May"; break;
                case 5: month = "June"; break;
                case 6: month = "July"; break;
                case 7: month = "August"; break;
                case 8: month = "September"; break;
                case 9: month = "October"; break;
                case 10: month = "November"; break;
                case 11: month = "December"; break;
            }
            document.querySelector('#month').innerText = month;
        </script>
</body>

</html>
