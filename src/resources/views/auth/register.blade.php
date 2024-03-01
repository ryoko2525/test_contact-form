<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
  <header class="header">
    <div class="header__inner-block">
      <p class="header__inner-title">FashionablyLate</p>
    </div>
    <nav class="header__inner-nav">
      <ul>
        <li class="header__inner-nav-list"><a href="/login">login</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="register__content">
      <div class="register__content-inner">
        <div class="register__content-inner-form">
        <form action="{{route('register')}}" method="post">
          @csrf
          <h2 class="register__top-title">Register</h2>
          <div class="form-group">
            <label for="name">お名前</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}"placeholder="例: 山田 太郎">
          </div>
          @if ($errors->has('name'))
          <span class="error">{{ $errors->first('name') }}</span>
          @endif
          <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="例: test@example.com">
          </div>
          @if ($errors->has('email'))
          <span class="error">{{ $errors->first('email') }}</span>
          @endif
          <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}"placeholder="例: coachtech106">
          </div>
          @if ($errors->has('password'))
          <span class="error">{{ $errors->first('password') }}</span>
          @endif
          <div class="form-group">
            <button type="submit">登録</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </main>
</body>
</html>