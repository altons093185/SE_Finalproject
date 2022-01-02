<form id="form1" method="GET" action="">
<div class="login_form">
    <div class="login_label">航班查詢</div>

    <select class="form-select" name="airport"><!--name不能改-->
        <option selected>選擇目的地</option>
                @foreach($airport as $article)
                      <option value={{ $article->airport_id}}>
                            {{ $article->airport_name}}
                      </option>
                @endforeach
                
    </select>
    <input type="text" name="year" required><!--name不能改-->
    <input type="text" name="month" required>
    <input type="text" name="day" required>
    

<br>
<div class="btn_group">
        <button type="submit" class="btn btn-primary btn_login">查詢</button>
    </div>
<!--
    @foreach($sicks as $sick)
        疫情名稱 :{{ $sick->severity_level }}  
            <p> 疫情等級 :{{ $sick->alert_disease }} </p>
        
       
@endforeach
-->

    @foreach($severitys as $severity)
    <b>疫情名稱:</b>{{ $severity->severity_level }}<b>|</b>
    <b>疫情等級:</b>{{ $severity->alert_disease }}<b>|</b>
    <b>發布日期:</b>{{ $severity->year_id }}/{{ $severity->month_id}}/{{ $severity->day_id}}
        <br>
@endforeach
<hr>

@foreach($flights as $article)
        <h1>航班 : {{ $article->airplane_id }}
        <p> 航空公司:{{ $article->company_name}}</p>
            <p> 起飛日期 : {{ $article->year_id}}/{{ $article->month_id}}/{{ $article->day_id}}</p>
            <p> 起飛時間 : {{ $article->time_id}}</p>
            <p>狀態:{{ $article->status}}</p>
            
        </h1>
        <hr>
@endforeach





   
</div>
</form>



