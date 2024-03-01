#お問い合わせフォーム

##環境構築
  ###Dockerビルド
  １、git clone git@github.com:coachtech-material/laravel-docker-template.git
  ２、mv laravel-docker-template test_contact-form
  3,git remote set-url origin https://github.com/ryoko2525/test_contact-form
  4,git add
  5,git commit -m "リモートリポジトリの変更”
  6,docker-compose up -d —build
  
  ###マイグレーション
  1,php artisan make:migration create__contacts_table
  php artisan make:migration create__categories_table
  php artisan make:migration create__users_table
  2,php artisan migrate
  3,php artisan make:model Contact
  
  ###シーディング
  1,php artisan make:seeder ContactsTableSeeder
  php artisan make:seeder CategoriesTableSeeder
  php artisan make:seeder UsersTableSeeder
  2,php artisan db:seed

##使用技術(実行環境)
  Laravel8.1
  nginx:1.21.1
  mysql:8.0.26
  
##URL
  開発環境：http://localhost/
  
##ER図

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="511px" height="441px" viewBox="-0.5 -0.5 511 441" content="&lt;mxfile&gt;&lt;diagram id=&quot;l92sGFiA6WPHMhjIDTBF&quot; name=&quot;ページ1&quot;&gt;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&lt;/diagram&gt;&lt;/mxfile&gt;"><defs><clipPath id="mx-clip-0-30-30-30-0"><rect x="0" y="30" width="30" height="30"/></clipPath><clipPath id="mx-clip-36-30-144-30-0"><rect x="36" y="30" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-60-144-30-0"><rect x="36" y="60" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-90-144-30-0"><rect x="36" y="90" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-120-144-30-0"><rect x="36" y="120" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-150-144-30-0"><rect x="36" y="150" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-180-144-30-0"><rect x="36" y="180" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-210-144-30-0"><rect x="36" y="210" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-240-144-30-0"><rect x="36" y="240" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-270-144-30-0"><rect x="36" y="270" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-300-144-30-0"><rect x="36" y="300" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-330-144-30-0"><rect x="36" y="330" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-360-144-30-0"><rect x="36" y="360" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-390-144-30-0"><rect x="36" y="390" width="144" height="30"/></clipPath><clipPath id="mx-clip-330-30-30-30-0"><rect x="330" y="30" width="30" height="30"/></clipPath><clipPath id="mx-clip-366-30-144-30-0"><rect x="366" y="30" width="144" height="30"/></clipPath><clipPath id="mx-clip-366-60-144-30-0"><rect x="366" y="60" width="144" height="30"/></clipPath><clipPath id="mx-clip-366-90-144-30-0"><rect x="366" y="90" width="144" height="30"/></clipPath><clipPath id="mx-clip-366-120-144-30-0"><rect x="366" y="120" width="144" height="30"/></clipPath><clipPath id="mx-clip-330-260-30-30-0"><rect x="330" y="260" width="30" height="30"/></clipPath><clipPath id="mx-clip-366-260-144-30-0"><rect x="366" y="260" width="144" height="30"/></clipPath><clipPath id="mx-clip-366-290-144-30-0"><rect x="366" y="290" width="144" height="30"/></clipPath><clipPath id="mx-clip-366-320-144-30-0"><rect x="366" y="320" width="144" height="30"/></clipPath><clipPath id="mx-clip-366-350-144-30-0"><rect x="366" y="350" width="144" height="30"/></clipPath><clipPath id="mx-clip-366-380-144-30-0"><rect x="366" y="380" width="144" height="30"/></clipPath><clipPath id="mx-clip-366-410-144-30-0"><rect x="366" y="410" width="144" height="30"/></clipPath></defs><g><path d="M 0 30 L 0 0 L 180 0 L 180 30" fill="rgb(255, 255, 255)" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="all"/><path d="M 0 30 L 0 420 L 180 420 L 180 30" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 0 30 L 180 30" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 30 L 30 60 L 30 90 L 30 120 L 30 150 L 30 180 L 30 210 L 30 240 L 30 270 L 30 300 L 30 330 L 30 360 L 30 390 L 30 420" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" text-anchor="middle" font-size="12px"><text x="89.5" y="19.5">contacts</text></g><path d="M 0 30 M 180 30 M 180 60 L 0 60" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 0 30 M 30 30 M 30 60 M 0 60" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" clip-path="url(#mx-clip-0-30-30-30-0)" text-anchor="middle" font-size="12px"><text x="14.5" y="49.5">PK</text></g><path d="M 30 30 M 180 30 M 180 60 M 30 60" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" text-decoration="underline" pointer-events="none" clip-path="url(#mx-clip-36-30-144-30-0)" font-size="12px"><text x="37.5" y="49.5">UniqueID</text></g><path d="M 0 60 M 30 60 M 30 90 M 0 90" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 60 M 180 60 M 180 90 M 30 90" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-60-144-30-0)" font-size="12px"><text x="37.5" y="79.5">id</text></g><path d="M 0 90 M 30 90 M 30 120 M 0 120" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 90 M 180 90 M 180 120 M 30 120" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-90-144-30-0)" font-size="12px"><text x="37.5" y="109.5">category_id</text></g><path d="M 0 120 M 30 120 M 30 150 M 0 150" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 120 M 180 120 M 180 150 M 30 150" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-120-144-30-0)" font-size="12px"><text x="37.5" y="139.5">first_name</text></g><path d="M 0 150 M 30 150 M 30 180 M 0 180" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 150 M 180 150 M 180 180 M 30 180" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-150-144-30-0)" font-size="12px"><text x="37.5" y="169.5">last_name</text></g><path d="M 0 180 M 30 180 M 30 210 M 0 210" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 180 M 180 180 M 180 210 M 30 210" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-180-144-30-0)" font-size="12px"><text x="37.5" y="199.5">gender</text></g><path d="M 0 210 M 30 210 M 30 240 M 0 240" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 210 M 180 210 M 180 240 M 30 240" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-210-144-30-0)" font-size="12px"><text x="37.5" y="229.5">email</text></g><path d="M 0 240 M 30 240 M 30 270 M 0 270" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 240 M 180 240 M 180 270 M 30 270" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-240-144-30-0)" font-size="12px"><text x="37.5" y="259.5">tell</text></g><path d="M 0 270 M 30 270 M 30 300 M 0 300" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 270 M 180 270 M 180 300 M 30 300" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-270-144-30-0)" font-size="12px"><text x="37.5" y="289.5">address</text></g><path d="M 0 300 M 30 300 M 30 330 M 0 330" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 300 M 180 300 M 180 330 M 30 330" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-300-144-30-0)" font-size="12px"><text x="37.5" y="319.5">building</text></g><path d="M 0 330 M 30 330 M 30 360 M 0 360" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 330 M 180 330 M 180 360 M 30 360" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-330-144-30-0)" font-size="12px"><text x="37.5" y="349.5">detail</text></g><path d="M 0 360 M 30 360 M 30 390 M 0 390" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 360 M 180 360 M 180 390 M 30 390" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-360-144-30-0)" font-size="12px"><text x="37.5" y="379.5">created_at</text></g><path d="M 0 390 M 30 390 M 30 420 M 0 420" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 390 M 180 390 M 180 420 M 30 420" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-390-144-30-0)" font-size="12px"><text x="37.5" y="409.5">updated_at</text></g><path d="M 330 30 L 330 0 L 510 0 L 510 30" fill="rgb(255, 255, 255)" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 330 30 L 330 150 L 510 150 L 510 30" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 330 30 L 510 30" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 360 30 L 360 60 L 360 90 L 360 120 L 360 150" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" text-anchor="middle" font-size="12px"><text x="419.5" y="19.5">categories</text></g><path d="M 330 30 M 510 30 M 510 60 L 330 60" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 330 30 M 360 30 M 360 60 M 330 60" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" clip-path="url(#mx-clip-330-30-30-30-0)" text-anchor="middle" font-size="12px"><text x="344.5" y="49.5">PK</text></g><path d="M 360 30 M 510 30 M 510 60 M 360 60" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" text-decoration="underline" pointer-events="none" clip-path="url(#mx-clip-366-30-144-30-0)" font-size="12px"><text x="367.5" y="49.5">ID</text></g><path d="M 330 60 M 360 60 M 360 90 M 330 90" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 360 60 M 510 60 M 510 90 M 360 90" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-366-60-144-30-0)" font-size="12px"><text x="367.5" y="79.5">content</text></g><path d="M 330 90 M 360 90 M 360 120 M 330 120" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 360 90 M 510 90 M 510 120 M 360 120" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-366-90-144-30-0)" font-size="12px"><text x="367.5" y="109.5">created_at</text></g><path d="M 330 120 M 360 120 M 360 150 M 330 150" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 360 120 M 510 120 M 510 150 M 360 150" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-366-120-144-30-0)" font-size="12px"><text x="367.5" y="139.5">updated_at</text></g><path d="M 330 260 L 330 230 L 510 230 L 510 260" fill="rgb(255, 255, 255)" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 330 260 L 330 440 L 510 440 L 510 260" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 330 260 L 510 260" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 360 260 L 360 290 L 360 320 L 360 350 L 360 380 L 360 410 L 360 440" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" text-anchor="middle" font-size="12px"><text x="419.5" y="249.5">users</text></g><path d="M 330 260 M 510 260 M 510 290 L 330 290" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 330 260 M 360 260 M 360 290 M 330 290" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" clip-path="url(#mx-clip-330-260-30-30-0)" text-anchor="middle" font-size="12px"><text x="344.5" y="279.5">PK</text></g><path d="M 360 260 M 510 260 M 510 290 M 360 290" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" text-decoration="underline" pointer-events="none" clip-path="url(#mx-clip-366-260-144-30-0)" font-size="12px"><text x="367.5" y="279.5">id</text></g><path d="M 330 290 M 360 290 M 360 320 M 330 320" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 360 290 M 510 290 M 510 320 M 360 320" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-366-290-144-30-0)" font-size="12px"><text x="367.5" y="309.5">name</text></g><path d="M 330 320 M 360 320 M 360 350 M 330 350" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 360 320 M 510 320 M 510 350 M 360 350" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-366-320-144-30-0)" font-size="12px"><text x="367.5" y="339.5">email</text></g><path d="M 330 350 M 360 350 M 360 380 M 330 380" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 360 350 M 510 350 M 510 380 M 360 380" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-366-350-144-30-0)" font-size="12px"><text x="367.5" y="369.5">password</text></g><path d="M 330 380 M 360 380 M 360 410 M 330 410" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 360 380 M 510 380 M 510 410 M 360 410" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-366-380-144-30-0)" font-size="12px"><text x="367.5" y="399.5">created_at</text></g><path d="M 330 410 M 360 410 M 360 440 M 330 440" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 360 410 M 510 410 M 510 440 M 360 440" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-366-410-144-30-0)" font-size="12px"><text x="367.5" y="429.5">updated_at</text></g><path d="M 183.6 68.97 L 330 70" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 187.63 65 L 187.57 73 M 191.63 65.03 L 191.57 73.03" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 325.97 73.97 L 326.03 65.97 M 321.97 73.94 L 322.03 65.94" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/></g></svg>![test_contact-form](https://github.com/ryoko2525/test_contact-form/assets/152772623/8ba608b6-d175-4d4f-894a-1cb96f2adeb4)



