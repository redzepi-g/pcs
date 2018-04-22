$(() => {
    initializeTasksWrapper = () => {
        let tasksWrapper = $('.tasksWrapper');
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
            calendarMonthSpan.addClass('calendarMonthSpanSHrink');
            $.each(calendarDayLabel, function (index, dayLabel) {
                $(dayLabel).addClass('calendarDayLabelShrink');
            })
        }
    }

    initializeSortable = () => {
        let sortableUl = $('.tasksWrapper ul').sortable();
    }

    initializeDroppable = () => {
        let droppableTds = $('.calendarTable td');
        $.each(droppableTds, (index, td) => {
            $(td).droppable({
                drop: (event, ui) => {
                    console.log(ui);
                }
            });
        });
    }

    initializeTasksWrapper();
    initializeSortable();
    initializeDroppable();

});