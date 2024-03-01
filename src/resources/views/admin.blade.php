<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
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
    <div class="admin__content">
      <h2 class="admin__content--top-title">Admin</h2>
      <div class="admin__content--inner">
          <div class="admin__content--top-bars">
            <form class="admin__content--top-bar" action="/search" method="GET">
              @csrf
              <section class="admin__content--search">
                <input type="text" name="keyword" value="{{ old('keyword') }}"class="admin__content--search-input"  placeholder="名前やメールアドレスを入力してください"></input>
              </section>
              <select name="gender" id="" class="admin__content--gender-select">
                <option value="" class="">性別</option>
                <option value="" class="">全て</option>
                <option value="1" class="men">男性</option>
                <option value="2" class="women">女性</option>
                <option value="3" class="other">その他</option>
              </select>
              <select name="category_id" id="" class="admin__content--category_id-select">
                <!-- <option value="">お問い合わせの種類</option>
                @foreach ($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                @endforeach -->
                <option value="" class="">お問い合わせの種類</option>
                <option value="1" class="">商品のお届けについて</option>
                <option value="2" class="">商品の交換について</option>
                <option value="3" class="">商品トラブル</option>
                <option value="4" class="">ショップへのお問い合わせ</option>
                <option value="4" class="">その他</option>
              </select>
              <input type="date" class="admin__content--date-select" value="年/月/日"></input>
              <button class="admin__content--date-search">検索</button>
              <input type="reset" name="reset" class="admin__content--date-reset"></input>
            </form>
          </div>
        <div class="admin__content-pagenate">
              {{ $contacts->links() }}

        </div>
        <div class="admin__content--table-block">
          <table class="admin__content--table">
            <tr class="admin__content--table-title">
              <th class="admin__content--table-title-name">お名前</th>
              <th class="admin__content--table-title-gender">性別</th>
              <th class="admin__content--table-title-email">メールアドレス</th>
              <th class="admin__content--table-title-category">お問い合わせの種類</th>
              <th></th>
            </tr>
            @foreach ($contacts as $contact)
            <tr class="admin__content--table-row">
              <td class="admin__content--table-row-name">

              {{ $contact['first_name'] }}.{{ $contact['last_name'] }}</td>
              <td class="admin__content--table-row-gender">{{ $contact['gender'] }}</td>
              <td class="admin__content--table-row-email">{{ $contact['email'] }}</td>
              <td class="admin__content--table-row-category">{{ $contact->category->content }}</td>
              <td><button class="admin__content--table-row-button">詳細</button></td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </main>

</body>
</html>

