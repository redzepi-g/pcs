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
                    <td class="theadTd monthLabel roundLeftTop"><span class="absoluteSpan-month">Apr</span></td>
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
                    <td id="01" class="dayATagField noRightBorder">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '01'])}}">1</a>
                        <a class="day-01" style="display:none;">01</a>
                    </td>
                </tr>

                <tr>
                    <td id="02"  class="dayATagField noLeftBorder">
                    <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '02'])}}">2</a>
                    <a class="day-02" style="display:none;">02</a>
                </td>
                    <td id="03" class="dayATagField">
                    <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '03'])}}">3</a>
                    <a class="day-03" style="display:none;">03</a>
                </td>
                    <td id="04" class="dayATagField">
                    <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '04'])}}">4</a>
                    <a class="day-04" style="display:none;">04</a>
                </td>
                    <td id="05" class="dayATagField">
                    <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '05'])}}">5</a>
                    <a class="day-05" style="display:none;">05</a>
                </td>
                    <td id="06" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '06'])}}">6</a>
                        <a class="day-06" style="display:none;">06</a>
                    </td>
                    <td id="07" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '07'])}}">7</a>
                        <a class="day-07" style="display:none;">07</a>
                    </td>
                    <td id="08" class="dayATagField noRightBorder">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '08'])}}">8</a>
                        <a class="day-08" style="display:none;">08</a>
                    </td>
                </tr>

                <tr>
                    <td id="09" class="dayATagField noLeftBorder">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '09'])}}">9</a>
                        <a class="day-09" style="display:none;">09</a>
                    </td>
                    <td id="10" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '10'])}}">10</a>
                        <a class="day-10" style="display:none;">10</a>
                    </td>
                    <td id="11" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '11'])}}">11</a>
                        <a class="day-11" style="display:none;">11</a>
                    </td>
                    <td id="12" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '12'])}}">12</a>
                        <a class="day-12" style="display:none;">12</a>
                    </td>
                    <td id="13" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '13'])}}">13</a>
                        <a class="day-13" style="display:none;">13</a>
                    </td>
                    <td id="14" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '14'])}}">14</a>
                        <a class="day-14" style="display:none;">14</a>
                    </td>
                    <td id="15" class="dayATagField noRightBorder">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '15'])}}">15</a>
                        <a class="day-15" style="display:none;">15</a>
                    </td>
                </tr>

                <tr>
                    <td id="16" class="dayATagField noLeftBorder">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '16'])}}">16</a>
                        <a class="day-16" style="display:none;">16</a>
                    </td>
                    <td id="17" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '17'])}}">17</a>
                        <a class="day-17" style="display:none;">17</a>
                    </td>
                    <td id="18" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '18'])}}">18</a>
                        <a class="day-18" style="display:none;">18</a>
                    </td>
                    <td id="19" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '19'])}}">19</a>
                        <a class="day-19" style="display:none;">19</a>
                    </td>
                    <td id="20" class="dayATagField">
                    <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '05', 'day' => '20'])}}">20</a>
                    <a class="day-20" style="display:none;">20</a>
                </td>
                    <td id="21" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '21'])}}">21</a>
                        <a class="day-21" style="display:none;">21</a>
                    </td>
                    <td id="22" class="dayATagField noRightBorder">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '22'])}}">22</a>
                        <a class="day-22" style="display:none;">22</a>
                    </td>
                </tr>

                <tr class="lastRow">
                    <td id="23" class="dayATagField roundLeftBottom noLeftBorder">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '23'])}}">23</a>
                        <a class="day-23" style="display:none;">23</a>
                    </td>
                    <td id="24" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '24'])}}">24</a>
                        <a class="day-24" style="display:none;">24</a>
                    </td>
                    <td id="25" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '25'])}}">25</a>
                        <a class="day-25" style="display:none;">25</a>
                    </td>
                    <td id="26" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '26'])}}">26</a>
                        <a class="day-26" style="display:none;">26</a>
                    </td>
                    <td id="27" class="dayATagField">
                        <a href="{{route('get-calendar-day', ['id' => $team->id, 'month' => '04', 'day' => '27'])}}">27</a>
                        <a class="day-27" style="display:none;">27</a>
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
    @if(Session::has('tasksExist'))
    <div style="display:none;" id="hightlightDay">{{$day}}</div>
    <div class="tasksWrapper">
        <h1 class="selectedDayHeader taskWrapperContent"><span class="selectedDay">{{$day}}</span></h1>
        <h1 class="selectedMonthHeader taskWrapperContent">April</h1>
        <div class="ulWrapper taskWrapperContent">
            <ul>
                @foreach($tasks as $task)
                <span style="display:none;">
                    {{ $time = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $task->basetime, $task->timezone) }}
                    {{ $time->setTimezone(Auth::user()->timezone)}}
                    {{ $hour = $time->hour}}
                    {{ $minute = $time->minute}}
                </span>
                <li dataId="{{$task -> id}}"><span class="taskTitleSpan">{{$task->title}}</span><span class="timeSpan">{{sprintf('%02d', $hour).":".sprintf('%02d', $minute)}}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="trashcanWrapper taskWrapperContent">
            <i class="far fa-trash-alt"></i>
            <a class="deleteTask" style="display:none"></a>
        </div>
        <div class="newTaskWrapper taskWrapperContent">
            <form action="{{route('create-task')}}" method="post">
                @csrf
                
                <input type="hidden" name="userId" value="{{Auth::user()->id}}"/>
                <input type="hidden" name="teamId" value="{{$team->id}}" />
                <input type="hidden" name="month" value="{{$month}}" />
                <input type="hidden" name="day" value="{{$day}}" />

                <input type="text" placeholder="Add New Task . . ." name="title">

                <select name="hoursSelect" id="hoursSelect">
                <option value="00" default>00:</option>
                <option value="01">01:</option>
                <option value="02">02:</option>
                <option value="03">03:</option>
                <option value="04">04:</option>
                <option value="05">05:</option>
                <option value="06">06:</option>
                <option value="07">07:</option>
                <option value="08">08:</option>
                <option value="09">09:</option>
                <option value="10">10:</option>
                <option value="11">11:</option>
                <option value="12">12:</option>
                <option value="13">13:</option>
                <option value="14">14:</option>
                <option value="15">15:</option>
                <option value="16">16:</option>
                <option value="17">17:</option>
                <option value="18">18:</option>
                <option value="19">19:</option>
                <option value="20">20:</option>
                <option value="21">21:</option>
                <option value="22">22:</option>
                <option value="23">23:</option>
            </select>
            <select name="minutesSelect" id="minutesSelect">
                <option value="01" default>01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>
                <option value="60">60</option>
            </select>


            </form>
            
        </div>
    </div>
    @endif

    @if(Session::has('noTasks'))
    <div style="display:none;" id="hightlightDay">{{$day}}</div>
    <div class="tasksWrapper">
        <h1 class="selectedDayHeader taskWrapperContent"><span class="selectedDay">{{$day}}</span></h1>
        <h1 class="selectedMonthHeader taskWrapperContent">April</h1>
        <div class="ulWrapper taskWrapperContent">
            <ul>
                <li>No tasks found for this day. Feel free to Add.</li>
            </ul>
        </div>
        <div class="newTaskWrapper taskWrapperContent">
            <form action="{{route('create-task')}}" method="post">
                @csrf
                
                <input type="hidden" name="userId" value="{{Auth::user()->id}}"/>
                <input type="hidden" name="teamId" value="{{$team->id}}" />
                <input type="hidden" name="month" value="{{$month}}" />
                <input type="hidden" name="day" value="{{$day}}" />

                <input type="text" placeholder="Add New Task . . ." name="title">

                <select name="hoursSelect" id="hoursSelect">
                <option value="00" default>00:</option>
                <option value="01">01:</option>
                <option value="02">02:</option>
                <option value="03">03:</option>
                <option value="04">04:</option>
                <option value="05">05:</option>
                <option value="06">06:</option>
                <option value="07">07:</option>
                <option value="08">08:</option>
                <option value="09">09:</option>
                <option value="10">10:</option>
                <option value="11">11:</option>
                <option value="12">12:</option>
                <option value="13">13:</option>
                <option value="14">14:</option>
                <option value="15">15:</option>
                <option value="16">16:</option>
                <option value="17">17:</option>
                <option value="18">18:</option>
                <option value="19">19:</option>
                <option value="20">20:</option>
                <option value="21">21:</option>
                <option value="22">22:</option>
                <option value="23">23:</option>
            </select>
            <select name="minutesSelect" id="minutesSelect">
                <option value="01" default>01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>
                <option value="60">60</option>
            </select>


            </form>
            
        </div>
    </div>
    @endif
</div>
@stop

@section('customscripts')
<script src="{{asset('js/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{asset('js/teamCalendar.js')}}"></script>
@stop