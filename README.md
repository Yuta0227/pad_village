## アプリケーション名
パズ村

## アプリケーション概要
スマホアプリ「パズドラ」をプレイしてる人を対象としたアプリケーションです。トレード掲示板、フレンド掲示板、マルチ掲示板、たまり場を用いて他パズドラユーザーとコミュニケーションをとることができるアプリケーションです。現在はトレード掲示板のみ実装しています。

## 使用技術
Laravel,MySQL

## 今このアプリケーションでできること
未ログイン時
- トレード掲示板のタイムラインとスレッドの閲覧  

ログイン時
- トレード掲示板のタイムラインとスレッドの閲覧 
- トレード掲示板のタイムラインへの投稿
- トレード掲示板のスレッドへの交渉
- トレード掲示板のスレッドへの返信

## URL
[パズ村](https://pad-village.herokuapp.com)

## テスト用アカウント
メールアドレス：pad-village-test@gmail.com  
パスワード：password

## 利用方法
- タイムラインに投稿  
1.村に入る  
2.タイムラインで右下にある青いプラスボタンを押す  
3.出てきた投稿フォームの各項目に入力して送信ボタンを押す  
- スレッドで返信  
1.村に入る  
2.タイムラインで特定の投稿のスレッドで返信するを押す  
3.右下にある青いプラスボタンを押す  
4.求、出以外の各項目に入力して送信ボタンを押す  
- スレッドで交渉  
1.村に入る  
2.タイムラインで特定の投稿のスレッドで返信するを押す  
3.右下にある青いプラスボタンを押す  
4.各項目に入力して送信ボタンを押す  

## 目指した課題解決
- パズドラのトレード相手を探す効率の悪さ  
多くのパズドラユーザーはTwitterなどのSNSでトレードを募集してリプライが来たらトレードをしています。言い換えると、ユーザーがトレードをするには「#パズドラトレード」というタグをつけて投稿する、「#パズドラトレード」で検索をするという二つの手段があります。これを実際にしてみるとわかるのですが、これは非常に時間効率が悪いです。私は大学のテスト前日にもかかわらず7時間ほど「#パズドラトレード」で検索してスクロールを続けてようやくトレードをしてもらえたという経験からこの課題に気が付きました。このアプリケーションではほしいモンスターをプロフィールで設定する事で、だれかがそれを出してくれるという投稿をするたびにメールで通知が届くという機能を実装する予定です。この機能が実装できるだけで効率はかなりよくなると考えているため第二リリースで実装予定です。

## 工夫点
- バリデーション
タイムラインでの投稿フォームのvalidationを工夫しました。出、求のところにモンスター名と個数のinputがペアになっています。片方のみ入力、出と求両方何も入力していないと投稿できないようになっています。また、出と求のinputの数は変動させることができます。
- ログインのタイミング
未ログインの状態でタイムラインとスレッドの閲覧ができ、ログインすることで投稿できます。サービスの内容をわかった上でユーザーが登録できる仕様にしました。
- フォーム開いている状態の挙動
フォームの出・求の個数はユーザーが変動でき、フォームの長さも変動するため、フォーム内でスクロールできます。そのとき裏にある画面もスクロールしてしまうとユーザー体験が下がるため裏はスクロール無効にしてあります。
