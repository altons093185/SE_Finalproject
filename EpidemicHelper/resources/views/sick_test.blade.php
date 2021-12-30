<!DOCTYPE html>
<html>
  <head>
    <meta charset="ustf-8">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
    <title>防疫等級清單</title>
  </head>

  <body>

  <h1>防疫等級清單</h1>
    <div class="main">
      <table class="table">
        <thead>
          <tr>
            
            <th scope="col">疾病名稱</th>
            <th scope="col">國家/區域</th>
            <th scope="col">疫情等級</th>
            <th scope="col">發佈日期</th>

          </tr>
        </thead>
        <tbody>
@foreach ($sicks as $sick)

                                    <tr>
                                        <td >
                                            {{ $sick->severity_level }}
                                        </td>
                                        <td >
                                            {{ $sick->country_name }}
                                        </td>
                                        <td >
                                            {{ $sick->alert_disease }}
                                        </td>
                                        <td >
                                        </td>
                                        <td >
                                            {{ $sick->year_id }}/{{ $sick->month_id }}/{{ $sick->day_id }}
                                        </td>
                                       
                                        @endforeach
                                        </tbody>
                                        </body>
                                        </table>    


    </div>
    <div class=pagination>
                                        {{$sicks->links()}}
</div>
<style>
 

  </style>
</html>
