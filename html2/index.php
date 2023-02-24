<?php include_once('assets/php/prueba.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  
  <link rel="stylesheet" href="assets/modules/fullcalendar/fullcalendar.min.css">
<!-- 
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>



 -->

 <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>


<style>

  @media screen and (min-width: 1023px) {
    body.layout-3 .navbar.navbar-secondary {
      top: 0px;
  }
  .fixed{position: fixed;}


}

#table-cobertura{  font-size: 14px;
  font-weight: 400;
  font-family: 'Nunito', 'Segoe UI', arial;
  color: #6c757d;
}

</style>
<body class="layout-3">
  <div id="app">
    <?php require_once('menu.php') ?>
    <?php require_once('anuncios.php') ?>
    <?php require_once('politicas_reglamentos.php'); ?>
    <?php require_once('noticias.php'); ?>
    <?php require_once('cobertura.php'); ?>
    <?php require_once('timeline_nuestrahistoria.php'); ?>
    <?php require_once('directorio.php'); ?>
	<?php require_once('celebraciones.php'); ?>
	<?php require_once('aniversarios.php'); ?>
	<?php require_once('organigrama.php'); ?>
  <?php require_once('comunicacion_interna.php'); ?>

  <?php require_once('interaccion.php'); ?>
	<?php require_once('footer.php'); ?>
    
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/datatables/datatables.min.js"></script>
  <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <script src="assets/modules/fullcalendar/fullcalendar.min.js"></script>
  <script src="assets/modules/chart.min.js"></script>


  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $("#table-cobertura").dataTable({
      "columnDefs": [
        { "sortable": true, "targets": [2,2] }
      ]
    });
  </script>
  <script>

jQuery(document).ready(function($){
	var timelines = $('.cd-horizontal-timeline'),
		eventsMinDistance = 70;

	(timelines.length > 0) && initTimeline(timelines);

	function initTimeline(timelines) {
		timelines.each(function(){
			var timeline = $(this),
				timelineComponents = {};
			//cache timeline components 
			timelineComponents['timelineWrapper'] = timeline.find('.events-wrapper');
			timelineComponents['eventsWrapper'] = timelineComponents['timelineWrapper'].children('.events');
			timelineComponents['fillingLine'] = timelineComponents['eventsWrapper'].children('.filling-line');
			timelineComponents['timelineEvents'] = timelineComponents['eventsWrapper'].find('a');
			timelineComponents['timelineDates'] = parseDate(timelineComponents['timelineEvents']);
			timelineComponents['eventsMinLapse'] = minLapse(timelineComponents['timelineDates']);
			timelineComponents['timelineNavigation'] = timeline.find('.cd-timeline-navigation');
			timelineComponents['eventsContent'] = timeline.children('.events-content');

			//assign a left postion to the single events along the timeline
			setDatePosition(timelineComponents, eventsMinDistance);
			//assign a width to the timeline
			var timelineTotWidth = setTimelineWidth(timelineComponents, eventsMinDistance);
			//the timeline has been initialize - show it
			timeline.addClass('loaded');

			//detect click on the next arrow
			timelineComponents['timelineNavigation'].on('click', '.next', function(event){
				event.preventDefault();
				updateSlide(timelineComponents, timelineTotWidth, 'next');
			});
			//detect click on the prev arrow
			timelineComponents['timelineNavigation'].on('click', '.prev', function(event){
				event.preventDefault();
				updateSlide(timelineComponents, timelineTotWidth, 'prev');
			});
			//detect click on the a single event - show new event content
			timelineComponents['eventsWrapper'].on('click', 'a', function(event){
				event.preventDefault();
				timelineComponents['timelineEvents'].removeClass('selected');
				$(this).addClass('selected');
				updateOlderEvents($(this));
				updateFilling($(this), timelineComponents['fillingLine'], timelineTotWidth);
				updateVisibleContent($(this), timelineComponents['eventsContent']);
			});

			//on swipe, show next/prev event content
			timelineComponents['eventsContent'].on('swipeleft', function(){
				var mq = checkMQ();
				( mq == 'mobile' ) && showNewContent(timelineComponents, timelineTotWidth, 'next');
			});
			timelineComponents['eventsContent'].on('swiperight', function(){
				var mq = checkMQ();
				( mq == 'mobile' ) && showNewContent(timelineComponents, timelineTotWidth, 'prev');
			});

			//keyboard navigation
			$(document).keyup(function(event){
				if(event.which=='37' && elementInViewport(timeline.get(0)) ) {
					showNewContent(timelineComponents, timelineTotWidth, 'prev');
				} else if( event.which=='39' && elementInViewport(timeline.get(0))) {
					showNewContent(timelineComponents, timelineTotWidth, 'next');
				}
			});
		});
	}

	function updateSlide(timelineComponents, timelineTotWidth, string) {
		//retrieve translateX value of timelineComponents['eventsWrapper']
		var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
			wrapperWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', ''));
		//translate the timeline to the left('next')/right('prev') 
		(string == 'next') 
			? translateTimeline(timelineComponents, translateValue - wrapperWidth + eventsMinDistance, wrapperWidth - timelineTotWidth)
			: translateTimeline(timelineComponents, translateValue + wrapperWidth - eventsMinDistance);
	}

	function showNewContent(timelineComponents, timelineTotWidth, string) {
		//go from one event to the next/previous one
		var visibleContent =  timelineComponents['eventsContent'].find('.selected'),
			newContent = ( string == 'next' ) ? visibleContent.next() : visibleContent.prev();

		if ( newContent.length > 0 ) { //if there's a next/prev event - show it
			var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
				newEvent = ( string == 'next' ) ? selectedDate.parent('li').next('li').children('a') : selectedDate.parent('li').prev('li').children('a');
			
			updateFilling(newEvent, timelineComponents['fillingLine'], timelineTotWidth);
			updateVisibleContent(newEvent, timelineComponents['eventsContent']);
			newEvent.addClass('selected');
			selectedDate.removeClass('selected');
			updateOlderEvents(newEvent);
			updateTimelinePosition(string, newEvent, timelineComponents, timelineTotWidth);
		}
	}

	function updateTimelinePosition(string, event, timelineComponents, timelineTotWidth) {
		//translate timeline to the left/right according to the position of the selected event
		var eventStyle = window.getComputedStyle(event.get(0), null),
			eventLeft = Number(eventStyle.getPropertyValue("left").replace('px', '')),
			timelineWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', '')),
			timelineTotWidth = Number(timelineComponents['eventsWrapper'].css('width').replace('px', ''));
		var timelineTranslate = getTranslateValue(timelineComponents['eventsWrapper']);

        if( (string == 'next' && eventLeft > timelineWidth - timelineTranslate) || (string == 'prev' && eventLeft < - timelineTranslate) ) {
        	translateTimeline(timelineComponents, - eventLeft + timelineWidth/2, timelineWidth - timelineTotWidth);
        }
	}

	function translateTimeline(timelineComponents, value, totWidth) {
		var eventsWrapper = timelineComponents['eventsWrapper'].get(0);
		value = (value > 0) ? 0 : value; //only negative translate value
		value = ( !(typeof totWidth === 'undefined') &&  value < totWidth ) ? totWidth : value; //do not translate more than timeline width
		setTransformValue(eventsWrapper, 'translateX', value+'px');
		//update navigation arrows visibility
		(value == 0 ) ? timelineComponents['timelineNavigation'].find('.prev').addClass('inactive') : timelineComponents['timelineNavigation'].find('.prev').removeClass('inactive');
		(value == totWidth ) ? timelineComponents['timelineNavigation'].find('.next').addClass('inactive') : timelineComponents['timelineNavigation'].find('.next').removeClass('inactive');
	}

	function updateFilling(selectedEvent, filling, totWidth) {
		//change .filling-line length according to the selected event
		var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
			eventLeft = eventStyle.getPropertyValue("left"),
			eventWidth = eventStyle.getPropertyValue("width");
		eventLeft = Number(eventLeft.replace('px', '')) + Number(eventWidth.replace('px', ''))/2;
		var scaleValue = eventLeft/totWidth;
		setTransformValue(filling.get(0), 'scaleX', scaleValue);
	}

	function setDatePosition(timelineComponents, min) {
		for (i = 0; i < timelineComponents['timelineDates'].length; i++) { 
		    var distance = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][i]),
		    	distanceNorm = Math.round(distance/timelineComponents['eventsMinLapse']) + 2;
		    timelineComponents['timelineEvents'].eq(i).css('left', distanceNorm*min+'px');
		}
	}

	function setTimelineWidth(timelineComponents, width) {
		var timeSpan = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][timelineComponents['timelineDates'].length-1]),
			timeSpanNorm = timeSpan/timelineComponents['eventsMinLapse'],
			timeSpanNorm = Math.round(timeSpanNorm) + 4,
			totalWidth = timeSpanNorm*width;
		timelineComponents['eventsWrapper'].css('width', totalWidth+'px');
		updateFilling(timelineComponents['timelineEvents'].eq(0), timelineComponents['fillingLine'], totalWidth);
	
		return totalWidth;
	}

	function updateVisibleContent(event, eventsContent) {
		var eventDate = event.data('date'),
			visibleContent = eventsContent.find('.selected'),
			selectedContent = eventsContent.find('[data-date="'+ eventDate +'"]'),
			selectedContentHeight = selectedContent.height();

		if (selectedContent.index() > visibleContent.index()) {
			var classEnetering = 'selected enter-right',
				classLeaving = 'leave-left';
		} else {
			var classEnetering = 'selected enter-left',
				classLeaving = 'leave-right';
		}

		selectedContent.attr('class', classEnetering);
		visibleContent.attr('class', classLeaving).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
			visibleContent.removeClass('leave-right leave-left');
			selectedContent.removeClass('enter-left enter-right');
		});
		eventsContent.css('height', selectedContentHeight+'px');
	}

	function updateOlderEvents(event) {
		event.parent('li').prevAll('li').children('a').addClass('older-event').end().end().nextAll('li').children('a').removeClass('older-event');
	}

	function getTranslateValue(timeline) {
		var timelineStyle = window.getComputedStyle(timeline.get(0), null),
			timelineTranslate = timelineStyle.getPropertyValue("-webkit-transform") ||
         		timelineStyle.getPropertyValue("-moz-transform") ||
         		timelineStyle.getPropertyValue("-ms-transform") ||
         		timelineStyle.getPropertyValue("-o-transform") ||
         		timelineStyle.getPropertyValue("transform");

        if( timelineTranslate.indexOf('(') >=0 ) {
        	var timelineTranslate = timelineTranslate.split('(')[1];
    		timelineTranslate = timelineTranslate.split(')')[0];
    		timelineTranslate = timelineTranslate.split(',');
    		var translateValue = timelineTranslate[4];
        } else {
        	var translateValue = 0;
        }

        return Number(translateValue);
	}

	function setTransformValue(element, property, value) {
		element.style["-webkit-transform"] = property+"("+value+")";
		element.style["-moz-transform"] = property+"("+value+")";
		element.style["-ms-transform"] = property+"("+value+")";
		element.style["-o-transform"] = property+"("+value+")";
		element.style["transform"] = property+"("+value+")";
	}

	//based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
	function parseDate(events) {
		var dateArrays = [];
		events.each(function(){
			var dateComp = $(this).data('date').split('/'),
				newDate = new Date(dateComp[2], dateComp[1]-1, dateComp[0]);
			dateArrays.push(newDate);
		});
	    return dateArrays;
	}

	function parseDate2(events) {
		var dateArrays = [];
		events.each(function(){
			var singleDate = $(this),
				dateComp = singleDate.data('date').split('T');
			if( dateComp.length > 1 ) { //both DD/MM/YEAR and time are provided
				var dayComp = dateComp[0].split('/'),
					timeComp = dateComp[1].split(':');
			} else if( dateComp[0].indexOf(':') >=0 ) { //only time is provide
				var dayComp = ["2000", "0", "0"],
					timeComp = dateComp[0].split(':');
			} else { //only DD/MM/YEAR
				var dayComp = dateComp[0].split('/'),
					timeComp = ["0", "0"];
			}
			var	newDate = new Date(dayComp[2], dayComp[1]-1, dayComp[0], timeComp[0], timeComp[1]);
			dateArrays.push(newDate);
		});
	    return dateArrays;
	}

	function daydiff(first, second) {
	    return Math.round((second-first));
	}

	function minLapse(dates) {
		//determine the minimum distance among events
		var dateDistances = [];
		for (i = 1; i < dates.length; i++) { 
		    var distance = daydiff(dates[i-1], dates[i]);
		    dateDistances.push(distance);
		}
		return Math.min.apply(null, dateDistances);
	}

	/*
		How to tell if a DOM element is visible in the current viewport?
		http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
	*/
	function elementInViewport(el) {
		var top = el.offsetTop;
		var left = el.offsetLeft;
		var width = el.offsetWidth;
		var height = el.offsetHeight;

		while(el.offsetParent) {
		    el = el.offsetParent;
		    top += el.offsetTop;
		    left += el.offsetLeft;
		}

		return (
		    top < (window.pageYOffset + window.innerHeight) &&
		    left < (window.pageXOffset + window.innerWidth) &&
		    (top + height) > window.pageYOffset &&
		    (left + width) > window.pageXOffset
		);
	}

	function checkMQ() {
		//check if mobile or desktop device
		return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
	}
});
</script>

<script>
    $(document).ready(function() {
      $('#txtbusca').keyup(function() {
        let value = $(this).val();
        if (value.length == 0) { //si el campo no esta vacio

          var parametros = '';
          $.ajax({
            data: parametros,
            url: 'assets/php/busqueda.php',
            type: 'get',
            beforeSend: function() {},
            success: function(response) {
              $(".salida").empty();
              $(".salida").html(response);

              console.log(response);
            },
            error: function() {
              console.log('error');
            }
          });
        } else {

          $(".item").remove();
          var parametros = 'txtbusca=' + value;
          $.ajax({
            data: parametros,
            url: 'assets/php/busqueda.php',
            type: 'post',
            beforeSend: function() {},
            success: function(response) {
              $(".salida").empty();
              $(".salida").append(response);

              // console.log(response);
            },
            error: function() {
              console.log('error');
            }
          });
        }
      })
    });
  </script>

  <script>
  

  const fecha_hoy = new Date();
  var anio = fecha_hoy.getFullYear();

  const colorHBD = "#007bff";
  const txtcolorHBD = "#fff";
  var empleadosHBD_array = [];




parametros = '.';

$.ajax({
    data: JSON.stringify(parametros) ,
    url: 'assets/php/calendar.php',
    type: 'post',
    beforeSend: function() {
      $('#calendar').append('<a href="#" class="btn disabled btn-primary btn-progress" id="progress_calendar">Progress</a>');
    },
    success: function(response) {

      $('#progress_calendar').remove();
     // $("#tree").empty();
      //$(".tree").append(response);

    //  var response_data = JSON.parse(response);

   // console.log(response);
     var response_data = JSON.parse(response);
   //  console.log(response_data);



      for(let item_i = 0; item_i < response_data.length ; item_i++){
      //  console.log(item_i);
      var dateHBD_Obj ;
      var mes = '';
      var dia = '';


      //  var hoy = response_data[item_i].fecha_nacimiento.date.getDate();
//  var mesActual = response_data[item_i].fecha_nacimiento.date.getMonth() + 1; 

           dateHBD_Obj = new Date(response_data[item_i].fecha_nacimiento.date);
           mes = dateHBD_Obj.getMonth();
           dia = dateHBD_Obj.getDate();

          
           // console.log( mes.toString().length);
           if(mes.toString().length == 1){
      
            mes = "0"+ mes;
           }
           if(dia.toString().length == 1){
           // console.log('entra2');
            dia = "0"+ dia;
           }
          

          let dateHBD = anio + '-' + mes +  '-' + dia;

          //console.log(dateHBD_Obj);

          var empleadosHBD = { 

            title: response_data[item_i].nombreCompleto, 
            start: dateHBD, 
            backgroundColor: colorHBD,
            borderColor: colorHBD,
            textColor: txtcolorHBD
          
          };
       //   console.log(empleadosHBD);



        

        empleadosHBD_array.push(empleadosHBD);

        
      }


     // console.log(empleadosHBD_array);
      $("#calendar").fullCalendar({
        contentHeight: 'auto',
        height: 'auto',
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek'
        },
        defaultView: 'month',
        editable: false,
        events: empleadosHBD_array 
        
      });


    },
    error: function(response) {
      console.log('error');
      console.log(response);
    }
});





  </script>
<!-- 
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
		  
	  $('.slider').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 1500,
	  centerMode: true,
	  dots: true,
infinite: true,
centerPadding: '100px',
	  responsive: [
		  {
	breakpoint: 1024,
	settings: {
	  slidesToShow: 3,
	  slidesToScroll: 3,
	  infinite: true,
	  dots: true
	}
  },
  {
	breakpoint: 768,
	settings: {
	  arrows: false,
	  centerMode: true,
	  centerPadding: '40px',
	  slidesToShow: 3
	}
  },
  {
	breakpoint: 480,
	settings: {
	  arrows: false,
	  centerMode: true,
	  centerPadding: '40px',
	  slidesToShow: 1
	}
  }
],

	  });
  });
</script>
 -->

 <script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script>
	$("#users-carousel").owlCarousel({
		dots:true,
		slideTransition:'linear',
  margin: 20,
  autoplay: true,
  autoplayTimeout: 5000,
  loop: true,
  responsive: {
	0: {
      items: 1
    },
    380: {
      items: 2
    },
    650: {
      items: 3
    },
    800: {
      items: 4
    },
    1024: {
      items: 6
    }
  }
});

</script>

<script>

$("#slider_news").owlCarousel({
  items: 3,
  nav: true,
  dots:true,
		slideTransition:'linear',
  margin: 20,
  autoplay: true,
  autoplayTimeout: 5000,
  loop: true,
  responsive: {
	0: {
      items: 1
    },
    380: {
      items: 2
    },
    1000: {
      items: 3
    },

    1400: {
      items: 4
    }
  }
});


</script>


<script>

    var chart = new OrgChart(document.getElementById("tree"), {
  
    mouseScrool: OrgChart.action.none,
    menu: {
            pdf: { text: "Export PDF" },
            png: { text: "Export PNG" },
            svg: { text: "Export SVG" },
            json: { text: "Export JSON" }
        },
    enableSearch: false,
    nodeBinding: {
        field_0: "name",
        img_0 : "photo1" , 
        field_1: "title",
    },
    template:"ula",
    enableDragDrop: true,

});



$("#mSelect").change(function(){

var title_org = '';
var title ='';
var parametros ;
var area = $(this).val();
var  empleados_array = [];


title = document.createElement("h1");
      title.style.position = 'absolute';
      title.style.top = 0;
      title.style.width = '100%';
      title.style.textAlign = 'center';
      title.style.color = '#757575';
      title.style.margin = '60px auto 10px auto';

	switch(area){
    case "1":
      
      title_org = 'telemarketing';

      break;
    case "2":
 
      title_org = 'ventas_industriales';
 
      break;
    case "3":
 
      title_org = 'ventas_calle';
 
      break;
    case "4":
 
      title_org = 'compras';
 
      break;
    case "5":
 
      title_org = 'contabilidad';
 
      break;
    case "6":
 
      title_org = 'credito_y_cobranza';
 
      break;
    case "7":
 
      title_org = 'capital_humano';
 
      break;
    case "8":
 
      title_org = 'tesoreria';
 
      break;
    case "9":
 
      title_org = 'servicios_generales';
 
      break;
    case "10":
 
      title_org = 'logistica_y_distribuion';
 
      break;
    case "11":

    
      title_org = 'operaciones';
      area_id = 2;



        

/*       for(let index = 0; index < response.length(); index++){


      
      
        } */

/* 
        { id: 1, name: "Denny Curtis", title: "CEO", photo1: "https://cdn.balkan.app/shared/1.jpg"},
          { id: 2, pid: 1, name: "Ashley Barnett", title: "Denny Curtis", photo1: "https://cdn.balkan.app/shared/4.jpg" },
          { id: 3, pid: 1, name: "Caden Ellison", title: "Denny Curtis", photo1: "https://cdn.balkan.app/shared/4.jpg" },
          { id: 4, pid: 1, ppid: 3, name:"Mauricio Rocha"}
 */

      break;

    default:
     // console.log("No tengo area");
      break;

  }


 
        parametros = { 'area_id': area_id };

        $.ajax({
            data: JSON.stringify(parametros) ,
            url: 'assets/php/organigrama.php',
            type: 'post',
            beforeSend: function() {},
            success: function(response) {
             // $("#tree").empty();
              //$(".tree").append(response);

              var response_data = JSON.parse(response);

             console.log(response);


              for(let item = 0; item < response_data.length ; item++){
                console.log(item);


                if(response_data[item].nivel == 0){
                    empleados = { 
                    id: item+1, 
                    name: response_data[item].nombreCompleto, 
                    title: response_data[item].puesto, 
                    photo1: "https://cdn.balkan.app/shared/1.jpg"
                  
                  };
                  console.log(empleados);
                }else{

                 

                  var puesto = response_data[item].puesto;
                   console.log(puesto);


                  empleados = { 
                    id: item+1,
                    pid:  response_data[item].nivel,
                    name: response_data[item].nombreCompleto, 
                    title: response_data[item].puesto, 
                    photo1: "https://cdn.balkan.app/shared/1.jpg"
                  
                  }; 

                }


                

                empleados_array.push(empleados);
      
                
              }


              console.log(empleados_array);

                 
                  title.innerHTML = title_org;
                  chart.element.appendChild(title);
                  chart.load(empleados_array);
      


            },
            error: function(response) {
              console.log('error');
              console.log(response);
            }
        });




  



});


</script>


<script>

$( ".modal_lecturas" ).on( "click" , function() {

   let value_btn_modal_lectura =  $(this).val(); //tiene que remplazarse por id en base de datos 
   let title_modal_lecturas = '<b>';
   let url_frame_pdf = ''; // "https://www.proturbiomarspa.com/files/_pdf-prueba.pdf" 
   let modal_3_body = '<iframe height="500" width="100%" src="' + url_frame_pdf +'" frameborder="0" ></iframe>';
 // console.log(value_btn_modal_lectura);

   switch (value_btn_modal_lectura) {
      case 'Ladones_de_tiempo':
        
        title_modal_lecturas = 'Ladones de tiempo';

        break;
      case 'Nuestros_productos':
        title_modal_lecturas = 'Nuestros productos';

        break;

      case 'Proactivo_o_reactivo':
        title_modal_lecturas = 'Eres ¿proactivo o reactivo?';

        break;
      default:
        console.log(`Sorry, we are out of ${expr}.`);
    }

 
    title_modal_lecturas += '</b>';

    let array_modal_lecturas = {
          body: modal_3_body, 
          center: true,
          size:'modal-lg',
          title: title_modal_lecturas,
          buttons: [
              {
                text: 'Cerrar',
                class: 'btn btn-secondary close1',
                handler: function(current_modal) {
                  $.destroyModal(current_modal);
                  $( ".modal_lecturas" ).off();
                }
              }
            ]

        };

    $("#" + value_btn_modal_lectura).fireModal(array_modal_lecturas);
        
          

});




/*  */




</script>
<script>
  var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
    datasets: [{
      label: 'Promedio mes',
      data: [2.93, 2 , 1.20,  1.25,  2.20,  1.88, 2.56, 3, 1.40,  2.25,  2.20,  0.88],
      borderWidth: 2,
      backgroundColor: '#6777ef',
      borderColor: '#6777ef',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 4
        }
      }],
      xAxes: [{
        ticks: {
          display: true
        },
        gridLines: {
          display: false
        }
      }]
    },
  }
});
</script>


</body>
</html>
