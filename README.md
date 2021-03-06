# food.githab.io

制作中（2021/06～）

アプリ制作過程記録（きげんみる-賞味期限管理アプリ-）

コンセプト：食材の賞味期限が記録、管理できる（シンプルに！）<br>
→購入した食材（とくに冷蔵庫内）の期限を管理し近いものを整理することで、残っている食材から逆算して効率的に献立を考えることができる

ターゲット：一人暮らしの方・主婦(夫)

要件定義：
ここでは機能として必要な要件を挙げる（必要最低限）

・あくまで期限までに食材を使い切る目的で利用するものとする<br>
　→賞味期限と消費期限の区別は行わない<br>
・ユーザーは食材名や期限を登録、閲覧、削除ができる<br>
・登録するにはログインが必要<br>
・ログインにはユーザー登録が必要<br>
　→ログインはユーザーが決めたIDとPWを使用する<br>
・ユーザー自身でログアウトができる<br>

必要ではない要件を挙げる

・登録できるのはテキストのみ<br>
　→画像、音声などは不可<br>
・1度登録した食材は編集出来ない<br>
　→削除はログインしたユーザー自身で可能<br>
・食材のカテゴリー分けは行わない<br>
・今回はパスワード再発行機能は実装しない<br>
　→いまは問い合わせで対応を行う<br>


画面設計：<br>
＜画面繊維図のスケッチ＞<br>
※添付ファイル参照　→　imageFood.jpeg


＜画面一覧＞

1.画面名
2.機能
3.補足<br>

1.食材一覧画面<br>
2.食材が一覧で表示される、食材を削除できる<br>
3.15件表示、食材登録画面のリンクが上部にある、削除ボタンを押すと通知で同意・削除完了を表示する<br>

1.食材登録画面<br>
2.食材名と賞味期限を登録できる<br>
3.登録後、食材一覧画面に遷移する<br>

1.ログイン画面<br>
2.ＩＤ、パスワードを入力してログインできる<br>
3.ログイン成功後は食材一覧画面に遷移する<br>

1.ユーザー登録画面<br>
2.ＩＤ、パスワードを登録する<br>
3.登録完了後、ログイン画面に遷移する<br>

1.問い合わせ画面<br>
2.件名、本文を入力し送信できる<br>
3.送信後、ログイン画面に遷移する<br>


細かい要件を整理<br>
・食材一覧は賞味期限が近いものから順に表示（日付が古い順）<br>
・一部の動作が完了した際のユーザーへの表示は通知(アラート)で行う<br>
　→ユーザー登録画面：　 登録完了後（ユーザー登録が完了しました）<br>
　　問い合わせ画面：　送信完了後（お問い合わせを送信しました）<br>
　　食材一覧画面：　削除完了後（食材の削除が完了しました）<br>
　　食材登録画面：　登録完了後（ユーザー登録が完了しました）<br>
・食材名は1回の登録につき20文字まで<br>
・食材の登録は最大50件まで登録できる<br>
・ユーザー登録時に必要な情報はユーザーIDとパスワード<br>
　→ユーザーIDはユニークとする<br>
　→パスワードは半角英数字8文字以上とする






