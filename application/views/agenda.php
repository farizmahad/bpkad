
<link href="<?php echo base_url();?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/admin/css/plugins/iCheck/custom.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/admin/css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/admin/css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>

<link href="<?php echo base_url();?>assets/admin/css/animate.css" rel="stylesheet">

<div data-bs-parallax-bg="true" class="para-visi-misi p-5">
	<div class="text-center text-white p-5">
		<h1 class="text-center heading-struktur"><strong>TIMELINE</strong><br></h1>
	</div>
</div>
	
<div class="container">
	<!--<h1>Agenda Kegiatan BPKAD Kota Cimahi</h1><br>-->
	
	<div class="row">
		<div class="col-xl-12 offset-xl-0">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div id="calendar"></div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<script src="<?php echo base_url();?>assets/admin/js/plugins/fullcalendar/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url();?>assets/admin/js/inspinia.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI  -->
<script src="<?php echo base_url();?>assets/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- iCheck -->
<script src="<?php echo base_url();?>assets/admin/js/plugins/iCheck/icheck.min.js"></script>

<!-- Full Calendar -->
<script src="<?php echo base_url();?>assets/admin/js/plugins/fullcalendar/fullcalendar.min.js"></script>


<script>

    $(document).ready(function() {

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

        /* initialize the external events
         -----------------------------------------------------------------*/


        $('#external-events div.external-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1111999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });


        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: false,
            droppable: false, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: [
                <?php foreach($timeline as $row){?>

                {title:'<?php echo $row->tf; ?>'
                    ,start: '<?php echo $row->tanggal_event; ?>',
                    end: '<?php echo $row->sampai_tanggal; ?>',
                    allDay: false

                },

                <?php } ?>
            ]
        });


    });

</script>
</script>
</script>
</body>

</html>