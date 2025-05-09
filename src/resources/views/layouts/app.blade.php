<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
  <header>
    <div class="header_inner">
      <div class="header__inner--logo">
        <img src="{{ asset('storage/StudyPilot.png') }}" alt="StudyPilot Icon">
        <h1 class="header__inner--logo-text">StudyPilot</h1>
      </div>
      <div class="logout--item">
        <form class="form" action="/logout" method="post">
          @csrf
          <button class="header-nav__button">ログアウト</button>
        </form>
      </div>
    </div>

  </header>


<main>
    @yield('content')
</main>
</body>

</html>
