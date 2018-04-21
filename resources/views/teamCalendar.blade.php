@extends ('layouts.default')

@section('customcss')
<link rel="stylesheet" href="{{asset('css/teamsCalendar.css')}}">
@stop
@section('maincontent')
<div class="calendarContainer clearfix">
    <div class="calendarWrapper">
        
        <table class="calendarTable">
            <thead>
                <tr>
                    <td class="theadTd monthLabel roundLeftTop"><span class="absoluteSpan-month">April</span></td>
                    <td class="theadTd"><span class="invisibleAbc">ABC</span></td>
                    <td class="theadTd"><span class="invisibleAbc">ABC</span></td>
                    <td class="theadTd"><span class="invisibleAbc">ABC</span></td>
                    <td class="theadTd"><span class="invisibleAbc">ABC</span></td>
                    <td class="theadTd"><span class="invisibleAbc">ABC</span></td>
                    <td class="theadTd yearLabel roundRightTop"><span class="absoluteSpan-year">2018</span></td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="dayLabel noLeftBorder">MON</td>
                    <td class="dayLabel">TUE</td>
                    <td class="dayLabel">WED</td>
                    <td class="dayLabel">THU</td>
                    <td class="dayLabel">FRI</td>
                    <td class="dayLabel">SAT</td>
                    <td class="dayLabel noRightBorder">SUN</td>
                </tr>

                <tr>
                    <td class="dayATagField noLeftBorder">
                        <a href="#"><span class="invisibleAbc">ABC</span></a>
                    </td>
                    <td class="dayATagField">
                        <a href="#"><span class="invisibleAbc">ABC</span></a>
                    </td>
                    <td class="dayATagField">
                        <a href="#"><span class="invisibleAbc">ABC</span></a>
                    </td>
                    <td class="dayATagField">
                        <a href="#"><span class="invisibleAbc">ABC</span></a>
                    </td>
                    <td class="dayATagField">
                        <a href="#"><span class="invisibleAbc">ABC</span></a>
                    </td>
                    <td class="dayATagField">
                        <a href="#"><span class="invisibleAbc">ABC</span></a>
                    </td>
                    <td class="dayATagField noRightBorder">
                        <a href="#">1</a>
                    </td>
                </tr>

                <tr>
                    <td class="dayATagField noLeftBorder">
                        <a href="#">2</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">3</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">4</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">5</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">6</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">7</a>
                    </td>
                    <td class="dayATagField noRightBorder">
                        <a href="#">8</a>
                    </td>
                </tr>

                <tr>
                    <td class="dayATagField noLeftBorder">
                        <a href="#">9</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">10</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">11</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">12</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">13</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">14</a>
                    </td>
                    <td class="dayATagField noRightBorder">
                        <a href="#">15</a>
                    </td>
                </tr>

                <tr>
                    <td class="dayATagField noLeftBorder">
                        <a href="#">16</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">17</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">18</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">19</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">20</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">21</a>
                    </td>
                    <td class="dayATagField noRightBorder">
                        <a href="#">22</a>
                    </td>
                </tr>

                <tr class="lastRow">
                    <td class="dayATagField roundLeftBottom noLeftBorder">
                        <a href="#">23</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">24</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">25</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">26</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#">27</a>
                    </td>
                    <td class="dayATagField">
                        <a href="#"><span class="invisibleAbc">ABC</span></a>
                    </td>
                    <td class="dayATagField roundRightBottom noRightBorder">
                        <a href="#"><span class="invisibleAbc">ABC</span></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tasksWrapper">
        <h1 class="selectedDayHeader"><span class="selectedDay">20</span></h1>
        <h1 class="selectedMonthHeader">April</h1>
        <div class="ulWrapper">
            <ul>
                <li><input type="checkbox" class="checkBox"><span class="taskTitleSpan">Meet up at Codefest</span><span class="timeSpan">09:30</span></li>
                <li><input type="checkbox" class="checkBox"><span class="taskTitleSpan">Pre-presentation meeting whatever sss</span><span class="timeSpan">12:30</span></li>
                <li><input type="checkbox" class="checkBox"><span class="taskTitleSpan">Present our idea</span><span class="timeSpan">14:30</span></li>
                <li><input type="checkbox" class="checkBox"><span class="taskTitleSpan">See the results</span><span class="timeSpan">16:30</span></li>
            </ul>
        </div>
        <div class="newTaskWrapper">
            <input type="text">
            <select name="hoursSelect" id="hoursSelect">
                <option value="00" default>00</option>
                <option value="01"></option>
                <option value="02"></option>
                <option value="03"></option>
                <option value="04"></option>
                <option value="05"></option>
                <option value="06"></option>
                <option value="07"></option>
                <option value="08"></option>
                <option value="09"></option>
                <option value="10"></option>
                <option value="11"></option>
                <option value="12"></option>
                <option value="13"></option>
                <option value="14"></option>
                <option value="15"></option>
                <option value="16"></option>
                <option value="17"></option>
                <option value="18"></option>
                <option value="19"></option>
                <option value="20"></option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
            </select>
        </div>
    </div>
</div>
@stop