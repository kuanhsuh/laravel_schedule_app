<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    var SITEURL = "{{Request::url()}}";
    let events;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // $.get(SITEURL, function (data) {
    //     events = data;
    // });

    events = [{
        "id": 1,
        "title": "eventone",
        "start": "2019-12-08 22:23:46",
        "end": "2019-12-20 22:23:43"
    }, {
        "id": 2,
        "title": "asdf",
        "start": "2019-12-31 00:00:00",
        "end": "2020-01-01 00:00:00"
    }, {
        "id": 3,
        "title": "this",
        "start": "2019-12-29 00:00:00",
        "end": "2019-12-30 00:00:00"
    }]

    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');


        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'timeGrid'],
            defaultView: 'timeGridWeek',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: events
        });
        calendar.render();
    });


    console.log(events)

</script>

<script>
    // $(document).ready(function () {
    //     console.log(1)
    //     var SITEURL = "{{Request::url()}}";
    //     console.log(SITEURL)
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

    //     var calendar = $('#calendar').fullCalendar({
    //         editable: true,
    //         events: SITEURL,
    //         displayEventTime: true,
    //         editable: true,
    //         eventRender: function (event, element, view) {
    //             if (event.allDay === 'true') {
    //                 event.allDay = true;
    //             } else {
    //                 event.allDay = false;
    //             }
    //         },
    //         selectable: true,
    //         selectHelper: true,
    //         select: function (start, end, allDay) {
    //             console.log(2)
    //             var title = prompt('Event Title:');

    //             if (title) {
    //                 var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
    //                 var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

    //                 $.ajax({
    //                     url: SITEURL + "/create",
    //                     data: 'title=' + title + '&start=' + start + '&end=' + end,
    //                     type: "POST",
    //                     success: function (data) {
    //                         displayMessage("Added Successfully");
    //                     }
    //                 });
    //                 calendar.fullCalendar('renderEvent', {
    //                         title: title,
    //                         start: start,
    //                         end: end,
    //                         allDay: allDay
    //                     },
    //                     true
    //                 );
    //             }
    //             calendar.fullCalendar('unselect');
    //         },

    //         eventDrop: function (event, delta) {
    //             console.log(3)
    //             var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
    //             var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
    //             $.ajax({
    //                 url: SITEURL + 'fullcalendar/update',
    //                 data: 'title=' + event.title + '&amp;start=' + start + '&amp;end=' +
    //                     end + '&amp;id=' + event.id,
    //                 type: "POST",
    //                 success: function (response) {
    //                     displayMessage("Updated Successfully");
    //                 }
    //             });
    //         },
    //         eventClick: function (event) {
    //             console.log(4)
    //             var deleteMsg = confirm("Do you really want to delete?");
    //             if (deleteMsg) {
    //                 $.ajax({
    //                     type: "POST",
    //                     url: SITEURL + 'fullcalendar/delete',
    //                     data: "&amp;id=" + event.id,
    //                     success: function (response) {
    //                         if (parseInt(response) > 0) {
    //                             $('#calendar').fullCalendar('removeEvents', event.id);
    //                             displayMessage("Deleted Successfully");
    //                         }
    //                     }
    //                 });
    //             }
    //         }

    //     });
    // });

    // function displayMessage(message) {
    //     $(".response").html("<div class='success'>" + message + "</div>");
    //     setInterval(function () {
    //         $(".success").fadeOut();
    //     }, 1000);
    // }

</script>
