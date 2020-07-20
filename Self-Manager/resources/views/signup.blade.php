<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アカウント作成画面</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- font-awesomeの参照 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <style>
    body {
      background-color: lightgrey;
    }

    .main {
      background-color: #fff;
      margin-top: 20px;
    }

    .main>h1 {
      text-align: center;
      color: green;
    }

    .link a {
      display: inline-block;
      text-align: center;
      border: 2px solid black;
      border-radius: 2px;
      background-color: lightgray;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="container main p-4">
    <h1 class="mt-3 mb-5"><span class="fas fa-user-plus"></span>アカウント作成</h1>

    <form method="post" action="{{ url('/conplete') }}" class="needs-validation" novalidate>
      <!-- CSRF対策に必須。 -->
      {{ csrf_field() }}

      <!-- ニックネーム -->
      <div class="form-row">
        <label class="col-sm-3 offset-1 col-form-label" for="nickname">ニックネーム</label>
        <input id="nickname" class="col-sm-6 offset-2 form-control" type="text" placeholder="ニックネームを入力してください" name="name" required>
        <div class="invalid-feedback offset-6">
          入力してください
        </div>
      </div>

      <!--生年月日-->
      <div class="form-row mt-4">
        <label class="col-sm-3 offset-1 col-form-label" for="birthday">生年月日</label>
        <input type="date" class="col-sm-6 offset-2 form-control" id="birthday" name="birthday" required>
        <div class="invalid-feedback offset-6">
          入力してください
        </div>
      </div>

      <!--秘密の質問と答え-->
      <div class="form-row mt-5">
        <label for="question" class="col-sm-3 offset-1 col-form-label">秘密の質問</label>
        <select id="question" name="question" class="form-control col-sm-6 offset-2 form-control" required>
          <option value="">選択して下さい</option>
          <option value="母親の旧姓">母親の旧姓は？</option>
          <option value="あだ名">小学校の頃のあだ名は？</option>
          <option value="ペット">初めて飼ったペットの名前は?</option>
        </select>
        <div class="invalid-feedback offset-6">
          質問を選択してください
        </div>
      </div>
      <div class="form-row mt-3">
        <label for="answer" class="col-sm-3 offset-1 col-form-label">秘密の質問の答え</label>
        <input id="answer" class="form-control col-sm-6 offset-2 form-control" placeholder="答えを入力してください" name="answer" required>
        <div class="invalid-feedback offset-6">
          入力してください
        </div>
      </div>

      <!-- メールアドレス&パスワード -->
      <div class="form-row mt-4">
        <label for="email" class="col-sm-3 offset-1 col-form-label">メールアドレス</label>
        <input type="email" id="email" class="col-sm-6 offset-2 form-control" placeholder="example@email.com" name="email" required>
        <div class="invalid-feedback offset-6">
          入力してください
        </div>
      </div>
      <div class="form-row mt-3">
        <label for="password" class="col-sm-3 offset-1 col-form-label">パスワード</label>
        <input type="password" id="password" class="col-sm-6 offset-2 form-control" placeholder="パスワード" name="password" required>
        <div class="invalid-feedback offset-6">
          入力してください
        </div>
        
        <!-- <label for="password-conf" class="col-sm-3 offset-1 col-form-label mt-2">パスワードの確認</label>
        <input type="password" id="password-conf" class="col-sm-6 offset-2 form-control mt-2" placeholder="パスワードを確認" name="conf" required>
        <div class="invalid-feedback offset-6">
          入力してください
        </div> -->

        <div class="container">
          <div class="row">
            <input class="offset-6 mt-2" type="checkbox" id="password-check" style="background-color: aqua;">
            <label for="password-check" class="mt-1 ml-1">パスワードを表示する</label>
          </div>
        </div>
      </div>

      <!--ボタン-->
      <button class="col-6 offset-3 mt-4" type="submit" id="signup">新規登録</button>

      <hr>

      <div class="row link">
        <a href="SelfManagerTop" class="col-3 offset-1 mt-2 p-2">Topへ戻る</a>
        <a href="SelfManagerLogin" class="col-7 offset-1 mt-2 p-2" style="color: red;">既にアカウントをお持ちの場合</a>
      </div>

    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    // パスワードを表示のチェックを入れた時にtext属性に変更
    var pw1 = document.getElementById('password');
    var pwCheck = document.getElementById('password-check');
    pwCheck.addEventListener('change', function() {
      if (pwCheck.checked) {
        pw1.setAttribute('type', 'text');
      } else {
        pw1.setAttribute('type', 'password');
      }
    }, false);


    (function() {
      // ストリクトモード(厳格モード)実行
      'use strict';

      // ウィンドウがロード(読み込み)された時に以下のイベントを実行
      window.addEventListener('load', function() {

        var forms = document.getElementsByClassName('needs-validation');

        var passCheck = document.getElementById('siunup');

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