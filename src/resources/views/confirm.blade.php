<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
  <header class="header">
    <div class="header__inner">
    <p class="header__inner-title">FashionablyLate</p>      
    </div>
  </header>

  <main>
<h2 class="confirm__top-title">Confirm</h2>
<section class="confirm">
    <div class="confirm__inner">
        <form class="confirm__form form" action="/thanks" method="post">
            @csrf
            
            <dl class="form__wrap">
                <dt class="form__label">お名前</dt>
                <dd class="form__confirm-value">{{ $contact['last_name'] . ' ' . $contact['first_name'] }}</dd>
                 <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">

            </dl>
            <dl class="form__wrap">
                <dt class="form__label">性別</dt>
                <dd class="form__confirm-value">{{ $contact['gender'] }}</dd>
                <input type="hidden" name="gender" value="{{ $contact['gender'] }}">

            </dl>
            <dl class="form__wrap">
                <dt class="form__label">メールアドレス</dt>
                <dd class="form__confirm-value">{{ $contact['email'] }}</dd>
                <input type="hidden" name="email" value="{{ $contact['email'] }}">

            </dl>
            <dl class="form__wrap">
                <dt class="form__label">電話番号</dt>
                <dd class="form__confirm-value">{{ $contact['tell'] }}</dd>
                <input type="hidden" name="tell" value="{{ $contact['tell'] }}">

            </dl>
            <dl class="form__wrap">
                <dt class="form__label">住所</dt>
                <dd class="form__confirm-value">{{ $contact['address'] }}</dd>
                <input type="hidden" name="address" value="{{ $contact['address'] }}">

            </dl>
            <dl class="form__wrap">
                <dt class="form__label">建物名</dt>
                <dd class="form__confirm-value">{{ $contact['building'] }}</dd>
                <input type="hidden" name="building" value="{{ $contact['building'] }}">

            </dl>
            @isset($contact['category_id'])
            <dl class="form__wrap">
            <dt class="form__label">お問い合わせの種類</dt>
            <dd class="form__confirm-value">{{ $contact['category_id'] }}</dd>
            <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
            </dl>
            @endisset
            <dl class="form__wrap form__wrap--textarea">
                <dt class="form__label">お問い合わせ内容</dt>
                <dd class="form__confirm-value">{{ $contact['detail'] }}</dd>
                <input type="hidden" name="detail" value="{{ $contact['detail'] }}">

            </dl>
            <div class="form__submit form-submit">
                <input type="submit" value="送信">
                <a href="/" class="form__back">修正</a>
            </div>
        </form>
    </div>
  </section>
    </main>

</body>

</html>