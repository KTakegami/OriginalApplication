<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン画面</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- font-awesomeの参照 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('css/login.css') }}" </head> <body>
  <div class="container">
    <h1 class="mt-3 mb-5" style="color: green; text-align: center;">
      <span class="fas fa-lock-open mr-1"></span>ログイン
    </h1>
    <form class="needs-validation" method="post" action="{{ url('/loginConp') }}" novalidate>
      <div class="form-group row">
        <label for="email" class="col-4 offset-1 col-form-label">メールアドレス</label>
        <input type="email" id="email" class="col-6 form-control" placeholder="example@email.com" required>
        <div class="invalid-feedback offset-6">
          入力してください
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-4 offset-1 col-form-label">パスワード</label>
        <input type="password" id="password" class="col-6 form-control" placeholder="パスワードを入力してください" required>
        <div class="invalid-feedback offset-6">
          入力してください
        </div>
        <div class="check row offset-5">
          <input class="mt-1" type="checkbox" id="password-check" style="background-color: aqua;">
          <label for="password-check" class="ml-1">パスワードを表示する</label>
        </div>
      </div>

      <button class="offset-5" type="submit" method="post" name="login" id="login">ログイン</button>

      <hr>

      <div class="row btn link">
        <a href="/SelfManagerTop" class="p-2">Topへ戻る</a>
        <a href="/SelfManagerSignup" class="ml-4 p-2">まだアカウントをお持ちでない場合</a>
      </div>

      <div class="forgot-password btn">
        <a id="btn" value="click me" class="offset-1 mt-4 p-2">パスワードをお忘れですか？</a>
      </div>
    </form>

    <!-- パスワードをお忘れですか？を押下時のモーダル画面 -->
    <div id="modal" class="modal">
      <div class="modal-container p-5">
        <form>
          <h2>パスワードをお忘れですか？</h2>
          <label class="mt2" for="forgot">始めにメールアドレスを入力してください</label>
          <input class="mt-2" id="forgot" type="email" placeholder="メールアドレスを入力してください">
          <button class="continue mt-2 p-2" type="submit">続ける</button>
          <a href="" id="close" class="mt-3">閉じる</a>
        </form>
      </div>
    </div>

  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    var pw = document.getElementById('password');
    var pwCheck = document.getElementById('password-check');
    pwCheck.addEventListener('change', function() {
      if (pwCheck.checked) {
        pw.setAttribute('type', 'text');
      } else {
        pw.setAttribute('type', 'password');
      }
    }, false);

    // モーダル画面表示の処理
    var btn = document.getElementById('btn');
    var modal = document.getElementById('modal');

    // 表示
    btn.addEventListener('click', function() {
      modal.style.display = 'block';
    })

    // 閉じる
    var close = document.getElementById('close');

    close.addEventListener('click', function() {
      modal.style.display = 'none';
    })
  </script>
  <script type="text/javascript">
    (function() {
      // ストリクトモード(厳格モード)実行
      'use strict';

      // ウィンドウがロード(読み込み)された時に以下のイベントを実行
      window.addEventListener('load', function() {

        var forms = document.getElementsByClassName('needs-validation');

        var passCheck = document.getElementById('login');

        var validation = Array.prototype.filter.call(forms, function(form) {

          // submitボタンを押した際に以下を実行
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);

        });
      }, false);
    })();
  </script>


  </body>

</html>