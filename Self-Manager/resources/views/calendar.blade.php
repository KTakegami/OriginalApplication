<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>カレンダートップ画面</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">

  <!-- Bootstrapの読み込み -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
  <h1 style="text-align: center;">カレンダーTOP</h1>

  <hr>

  <div class="row">
    <div class="date-head offset-1"></div>

    <div class="change-month offset-3">
      <button class="last-month">←前月</button>
      <button class="next-month ml-2">次月→</button>
    </div>
  </div>

  <table class="table mt-3">
    <thead class="thead-dark">
      <tr style="text-align: center;">
        <th>日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th>土</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>

  <!-- jQueryの読み込み -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <script>
    //現在の日付を取得
    let today = new Date();
    //現在の日付の年を取得
    let year = today.getFullYear();
    //現在の日付の月を取得
    let month = today.getMonth() + 1;
    //＞＞上記「〇〇年〇〇月という文字表示用」

    //date-headクラスに年と月を表示
    $('.date-head').html('<h1>' + year + '年' + month + '月' + '</h1>');


    //当月の月末の日付を取得(来月の0日)
    let last = new Date(today.getFullYear(), today.getMonth() + 1, 0);
    //当月の年を取得
    let last_year = last.getFullYear();
    //当月の月を取得(例：1月=0 2月=1 3月=2)
    let last_month = last.getMonth();
    //当月の月末の日を取得 (例:30日や31日)
    let last_day = last.getDate();

    console.log(last);
    console.log(last_year);
    console.log(last_month);
    console.log(last_day);

    for (let i = 1; i <= last_day; i++) {
      //曜日を取得(※0=日曜日 1=月曜日 6=土曜日)
      let week = new Date(last_year, last_month, i).getDay();

      if (week == 0 || i == 1) { //日曜日もしくは1日の時
        $('table').find('tbody').append( //tableタグのtbodyタグに次の要素を追加
          '<tr>' +
          '<td></td>' +
          '<td></td>' +
          '<td></td>' +
          '<td></td>' +
          '<td></td>' +
          '<td></td>' +
          '<td></td>' +
          '</tr>');
      }
      //tableのtbodyの、tr(列)の最後のtdの、week(0~6の数字)番目にi(1~月末日)の数字を挿入
      $('table').find('tbody').find('tr').last().find('td').eq(week).html(i);
    }


    // ↓次月をクリックした時
    $('.next-month').on('click', function() {

      // 〇〇年○月の表示を変化
      if (month == 12) {
        month = 1;
        year += 1;
      } else {
        month += 1;
      }
      $('.date-head').html('<h1>' + year + '年' + month + '月' + '</h1>');

      // カレンダーの表示を変化
    })

    // 前月をクリックした時
    $('.last-month').on('click', function() {
      if (month == 1) {
        month = 12;
        year -= 1;
      } else {
        month -= 1;
      }
      $('.date-head').html('<h1>' + year + '年' + month + '月' + '</h1>');
    })
  </script>
</body>

</html>