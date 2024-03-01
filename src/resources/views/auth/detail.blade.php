<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>

<!-- 年月日の表示領域 -->
<div class="date-picker">
    <input type="text" id="datepicker" readonly>
</div>

<!-- カレンダーのコンテナ -->
<div id="calendar-container" class="calendar-container"></div>

<!-- 詳細ボタン -->
<label for="modal-toggle" class="detail-button">詳細を表示</label>

<input type="checkbox" id="modal-toggle" class="modal-toggle">

<div class="modal-background">
  <div class="modal-content">
    <img src="https://gyazo.com/8db890aaae20e9ea21682601d5f07c4a" alt="詳細画面">
  </div>
</div>

</body>
</html>