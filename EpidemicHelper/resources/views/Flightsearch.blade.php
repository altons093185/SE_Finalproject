<!DOCTYPE html>
<html>
  <head>
    <meta charset="ustf-8">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
    <title>航班查詢</title>
  </head>
   
  <body>
    <header class="head">
      <div class="logo">
        <img src="../icon/logo.png" width="200px">  <!-- 點擊可以跳回首頁 -->
      </div>
      <div class="module_pages">
      
        <div class="dropdown">
          <button class="dropbtn">航班</button>
          <div class="dropdown-content">
            <a href="C:\xampp\htdocs\SE_Finalproject\EpidemicHelper\resources\views\Flightadd.html">航班資訊</a>
          </div>
        </div>



        <div class="dropdown">
          <button class="dropbtn">防疫等級</button>
          <div class="dropdown-content">
            <a href="#">防疫等級清單</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">旅館</button>
          <div class="dropdown-content">
            <a href="#">北部旅館</a>
            <a href="#">中部旅館</a>
            <a href="#">南部旅館</a>
          </div>
        </div>
        
      </div>
      <div class="login_logout">
        <button>登出</button> <!-- 1.登出後 2.跳回首頁 -->
      </div>

    </header>

    <h1>航班搜尋</h1>

    <div class="queryform">
    <form action="signup" method="post">
       <input type="text" placeholder="出發地">
       <input type="text" placeholder="目的地">
       <input type="datetime-local" placeholder="去程日期/回程日期">
       <!-- 出發地: <select name="Departure">
          <option value="A">台灣</option>
          <option value="B">日本</option>
          <option value="C">美國</option>
          <option value="D">中國</option>
        </select> <nobr/>
       
       
        目的地: <select name="destination">
          <option value="A">台灣</option>
          <option value="B">日本</option>
          <option value="C">美國</option>
          <option value="D">中國</option>
        </select> <nobr/>
        去程回程日期: <input type="date" name="date"/><nobr/>
        -->
        <input type="submit" value="搜尋"/><br/>
        <br />
        <br />
        </form>
      </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">航空公司代碼</th>
          <th scope="col">班次編號</th>
          <th scope="col">表訂時間日期</th>
          <th scope="col">城市縮寫</th>
          <th scope="col">城市中文</th>
          <th scope="col">狀態</th>
          <th scope="col">防疫等級</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>CI</td>
          <td>0501</td>
          <td>12/10</td>
          <td>TPE</td>
          <td>台北(桃園) -> 上海(浦東)</td>
          <td>on time</td>
          <td>第一級</td>

        </tr>
        <tr>
          <th scope="row">2</th>
          <td>CI</td>
          <td>0503</td>
          <td>12/10</td>
          <td>TPE</td>
          <td>台北(桃園) -> 上海(浦東)</td>
          <td>arrived</td>
          <td>第一級</td>

        </tr>
        <tr>
          <th scope="row">3</th>
          <td>CI</td>
          <td>0505</td>
          <td>12/10</td>
          <td>TPE</td>
          <td>台北(桃園) -> 上海(浦東)</td>
          <td>arrived</td>
          <td>第一級</td>
        </tr>
      
      </tbody>
    </table>

  </body>
</html>