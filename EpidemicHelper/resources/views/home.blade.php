<!-- 指定繼承 layout.master 母模板 -->
<!-- @extends('layout.default') -->

<!-- 傳送資料到母模板，並指定變數為title -->

<!-- 傳送資料到母模板，並指定變數為content -->
<!--@section('content')
<h1>總共有幾天：{{$days}}</h1>
<h1>中華航空 共有哪些班次{{$airplanes}}</h1>
@endsection-->

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/general.css">
        <link rel="stylesheet" type="text/css" href="../css/hotel.css">
        <link rel="stylesheet" type="text/css" href="../css/popup.css">
        <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
        <title>防疫小幫手</title>

    </head>
    <body>
        <header class="head">
        <img src="../icon/logo.png" width="200px">  <!-- 點擊可以跳回首頁 -->
        <div class="module_pages">
            <button class="flight">航班</button>
            <button class="serverity_level">防疫等級</button>
            <button class="hotel">旅館</button>
            <button class="login_logout" onclick="openForm()">登入</button> <!-- 1.登出後 2.跳回首頁 -->
        </div>
        </header>

        <div class="search">
            <input type="text" placeholder="出發地">
            <input type="text" placeholder="目的地">
            <input type="text" placeholder="去程日期/回程日期">
            <button class="flight_search" type="button">搜尋</button>
        </div>

        <h3 class=section_title>最新 防疫等級資訊</h3><a href="url">All→</a>

        <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">severity_level</th>
            <th scope="col">alert_disease</th>
            <th scope="col">areaDesc</th>
            <th scope="col">effective（發佈日期）</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>第一級:注意(Watch)</td>
            <td>中東呼吸症候群冠狀病毒感染症</td>
            <td>阿拉伯聯合大公國</td>
            <td>2015-09-30</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>第一級:注意(Watch)</td>
            <td>新型A型流感</td>
            <td>印度</td>
            <td>2021-08-13</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>第二級:警示(Alert)</td>
            <td>茲卡病毒感染症</td>
            <td>印度</td>
            <td>2021-07-13</td>
          </tr>
        </tbody>
      </table>    
    </div>

        <h3 class=section_title>最新 防疫旅館資訊</h3><a href="url">All→</a>
        <div class="hotel_row">
            <div class="hotel">
                <img src="../img/hotel_1.png" alt="Hotel_1" class="hotel_image">
                <h4 class="hotel_name">台北/新北/基隆旅館列表</h4>
            </div>
            <div class="hotel">
                <img src="../img/hotel_2.png" alt="Hotel_2" class="hotel_image">
                <h4 class="hotel_name">桃園/新竹/台中旅館列表</h4>
            </div>
            <div class="hotel">
                <img src="../img/hotel_3.png" alt="Hotel_3" class="hotel_image">
                <h4 class="hotel_name">台南/高雄旅館列表</h4>
            </div>

        </div>

        <div class="popup-form" id="myForm">
            <div class="form-top-row">
                <h3 class="form-title">管理員登入</h3>
                <input type="image" src="../icon/close.png" class="close-icon" onclick="closeForm()"/>
            </div>
            <div class="input">
                <input type="text" placeholder="Email" name="email" required>
            </div>
            <div class="input">
                <input type="password" placeholder="Password" name="psw" required>
            </div>
            <button type="submit" class="login-button">登入</button>
        </div>

        <script>
            function openForm(){
                document.getElementById("myForm").style.cssText = "display: block;";
            }
            function closeForm(){
                document.getElementById("myForm").style.cssText = "display: none;";
            }
        </script>
    </body>
</html>

