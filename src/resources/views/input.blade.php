<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/input.css') }}" />
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
    <h2 class="contact__top-title">Contact</h2>
  <section class="contact">
      <div class="contact__inner">
        <form class="contact__form form" action="/confirm" method="post" >
          @csrf
          <dl class="form__wrap">
            <dt class="form__label">お名前<span>※</span></dt>
            <dd class="form__input form-input">
              <input class="form__input-name" type="text" name="last_name" value="{{ old('last_name',$contact['last_name'] ?? '') }}"placeholder="例：山田">
            
              <input class="form__input-name" type="text" name="first_name" value="{{ old('first_name', $contact['first_name'] ?? '') }} " placeholder="例：太郎">
            
            </dd>
          </dl>
            @if ($errors->has('last_name'))
            <div class="error-names">
            <div class="error-name">
            <span class="error">{{ $errors->first('last_name') }}</span></div>
            @endif
            @if ($errors->has('first_name'))
            <div class="error-name-right">
            <span class="error">{{ $errors->first('first_name') }}</span>
            </div>
            </div>
            @endif
          <dl class="form__wrap">
            <dt class="form__label">性別<span>※</span></dt>
            <dd class="form__radio form-radio">
              <label><input type="radio" name="gender" value="男性" {{ old('gender','男性') == '男性' ? 'checked' : '' }}><span>男性</span></label>
              <label><input type="radio" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }}><span>女性</span></label>
              <label><input type="radio" name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked' : '' }}><span>その他</span></label>
            </dd>
          </dl>
          @if ($errors->has('gender'))
            <span class="error">{{ $errors->first('gender') }}</span>
          @endif
          <dl class="form__wrap">
            <dt class="form__label">メールアドレス<span>※</span></dt>
            <dd class="form__input form-input">
              <input type="email" name="email" value="{{ old('email', $contact['email'] ?? '') }}"placeholder="例:test@example.com">
            </dd>
          </dl>
           @if ($errors->has('email'))
           <div class="error-block">
            <span class="error">{{ $errors->first('email') }}</span>
            </div>
            @endif
          <dl class="form__wrap">
            <dt class="form__label">電話番号<span>※</span></dt>
            <dd class="form__input form-input tel">
              <input type="tell" name="tel1" value="{{ old('tel1', $contact['tel1'] ?? '') }}"placeholder="080"><span class="form__input-tel-space">-</span><input type="tell" name="tel2" value="{{ old('tel2', $contact['tel2'] ?? '') }}"placeholder="1234"><span class="form__input-tel-space">-</span><input type="tell" name="tel3" value="{{ old('tel3', $contact['tel3'] ?? '') }}"placeholder="5678">
            </dd>
          </dl>
          @if ($errors->has('tel1') || $errors->has('tel2') || $errors->has('tel3'))
          <div class="error-block">
          <span class="error">{{ '電話番号を正しく入力してください' }}</span></div>
          @endif
          <dl class="form__wrap">
            <dt class="form__label">住所<span>※</span></dt>
            <dd class="form__input form-input">
              <input type="text" name="address" value="{{ old('address', $contact['address'] ?? '') }}"placeholder="例:東京都渋谷期千駄ケ谷1-2-3">
            </dd>
          </dl>
          @if ($errors->has('address'))
          <div class="error-block">
            <span class="error">{{ $errors->first('address') }}</span>
            </div>
          @endif
          <dl class="form__wrap">
            <dt class="form__label">建物名<span>※</span></dt>
            <dd class="form__input form-input">
              <input type="text" name="building" value="{{ old('building', $contact['building'] ?? '') }}"placeholder="例:千駄ケ谷マンション101">
            </dd>
          </dl>
          <dl class="form__wrap">
            <dt class="form__label">お問い合わせの種類</dt>
            <dd class="form__select form-select">
              <select class="form__select-item" name="category_id">
                <option value="" disabled {{ old('category_id', $contact['category_id'] ?? '') == '' ? 'selected' : '' }}>選択してください</option>
                <option value="1" {{ old('category_id', $contact['category_id'] ?? '') == '1' ? 'selected' : '' }}>商品のお届けについて</option>
                <option value="2" {{ old('category_id', $contact['category_id'] ?? '') == '2' ? 'selected' : '' }}>商品の交換について</option>
                <option value="3" {{ old('category_id', $contact['category_id'] ?? '') == '3' ? 'selected' : '' }}>商品トラブル</option>
                <option value="4" {{ old('category_id', $contact['category_id'] ?? '') == '4' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                <option value="5" {{ old('category_id', $contact['category_id'] ?? '') == '5' ? 'selected' : '' }}>その他</option>
              </select>
            </dd>
          </dl>
          @if ($errors->has('category_id'))
          <div class="error-block">
            <span class="error">{{ $errors->first('category_id') }}</span>
            </div>
          @endif
          <dl class="form__wrap form__wrap--textarea">
            <dt class="form__label">お問い合わせ内容<span>※</span></dt>
            <dd class="form__textarea form-textarea">
              <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail', $contact['detail'] ?? '') }}</textarea>
            </dd>
          </dl>
            @if ($errors->has('detail'))
            <div class="error-block">
            <span class="error">{{ $errors->first('detaik') }}</span>
            </div>
          @endif
          <div class="form__submit form-submit">
            <input type="submit" value="確認画面">
          </div>
        </form>
      </div>
    </section>

  </main>

  </main>
</body>

</html>
