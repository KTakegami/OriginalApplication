<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Self Manager TOP画面</title>

  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- FontAwesomeの読み込み -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <header class="title-logo fixed-top">
    <div id="title-logo" class="navbar navbar-expand-md navbar-light bg-info">
      <p class="navbar-brand far fa-calendar-alt mt-2" href="#"><strong style="margin-left: 2px;">Self Manager</strong></p>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupport">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item pt-0">
            <a class="nav-link active" href="/SelfManagerLogin">ログイン</a>
          </li>
          <li class="nav-item pt-0">
            <a class="nav-link active" href="/SelfManagerSignup">サインアップ</a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <div class="main-container">
    <div class="container">
      <h1 class="mt-5">Self Managerはあなたの素敵な日常を管理！</h1>
      <a href="/SelfManagerSignup" class="mt-5">さあ始めよう！！</a>
    </div>
  </div>

  <div class="description">
  </div>

  <footer>
    <p class="pt-3">©️ 2020 KATSUSHI TAKEGAMI</p>
  </footer>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>