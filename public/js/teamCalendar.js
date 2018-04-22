$(() => {
    initializeTasksWrapper = () => {
        let tasksWrapper = $('.tasksWrapper');
        let selectedDayId = $('#hightlightDay').html();
        $('#' + selectedDayId).addClass("highLightedDay");
        if (tasksWrapper.length != 0) {
            let calendarWrapper = $('.calendarWrapper');
            let calendarTd = $('.calendarWrapper td');
            let calendarYearSpan = $('.absoluteSpan-year');
            let calendarMonthSpan = $('.absoluteSpan-month');
            let calendarDayLabel = $('.dayLabel');

            setTimeout(() => {
                tasksWrapper.addClass('tasksWrapperShow');
            }, 300);
            setTimeout(() => {
                let taskWrapperContents = $('.taskWrapperContent');
                $.each(taskWrapperContents, (index, content) => {
                    $(content).css('opacity', '1');
                })
            }, 600)
            calendarWrapper.addClass('calendarWrapperShrink');
            $.each(calendarTd, function (index, td) {
                $(td).addClass('.calendarTdShrink')
            });
            calendarYearSpan.addClass('calendarYearSpanShrink');
            calendarMonthSpan.addClass('calendarMonthSpanShrink');
            $.each(calendarDayLabel, function (index, dayLabel) {
                $(dayLabel).addClass('calendarDayLabelShrink');
            })
        }
    }

    initializeSortable = () => {
        let sortableUl = $('.tasksWrapper ul').sortable();
    }

    initializeDroppable = () => {
        let droppableTds = $('.dayATagField');

        $('.trashcanWrapper').droppable({
            over: function(event, ui){}
        });

        $('.trashcanWrapper').on('dropover', function(event, ui){
            $(this).addClass('trashcanScale');
        });

        $('.trashcanWrapper').droppable({
            out: function(event, ui){}
        });

        $('.trashcanWrapper').on('dropout', function(event, ui){
            $(this).removeClass('trashcanScale');
        });

        $('.trashcanWrapper').droppable({
            drop: function( event, ui ) {}
        });

        $('.trashcanWrapper').on('drop', function(event, ui){
            $(this).removeClass('trashcanScale');
            let deleteTask = $('.deleteTask');
            let taskToDelete = ui.draggable[0];
            let href = `http://localhost/pcs/public/delete-task-${parseInt($(taskToDelete).attr('dataid'))}`;

            window.location.href = href;
        });

        $.each(droppableTds, (index, td) => {
            $(td).droppable({
                over: function( event, ui ) {}
            });
            $(td).on('dropover', function(event, ui){
                $(this).addClass('droppableScale');
            });
            $(td).droppable({
                out: function( event, ui ) {}
            });
            $(td).on('dropout', function(event, ui){
                $(this).removeClass('droppableScale');
            });

            $(td).droppable({
                drop: function( event, ui ) {}
            });

            $(td).on('drop', function(event, ui){
                $(this).removeClass('droppableScale');
                let tdFieldId = $(this).attr('id');
                let task = ui.draggable[0];
                let href = `http://localhost/pcs/public/move-task-${parseInt($(task).attr('dataid'))}-${parseInt(tdFieldId)}`;

                window.location.href = href;
                
                
            });


        });
    }

    initializeTasksWrapper();
    initializeSortable();
    initializeDroppable();

});