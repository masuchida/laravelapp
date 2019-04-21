**Laravel 中級者向けタスクリスト 5.1→5.8でやってみる編**

以下、作業時間と作業概要、その他つまずいた点なども備忘録的にまとめる。
___
2019-04-20 3h  
**作業概要**  
+ 所謂first commit
+ make:authによるログイン認証追加
+ Tasksテーブルmigration作成
+ UserとTaskモデルを親子関係に、hasMany, belongsTo
+ タスク一覧画面

**躓いた点**  
migrationはできたけどSequelProで確認できない  
SequelProつながったと思ったらmigrationしたはずのテーブルがない  
migrationもできたしSequelでも見れたけど、デフォルトのauthがNo Such File的なエラーで通らない

再起動したら治ったので、ここはぶっちゃけ原因やら解決策も不明。  
DBやmake:auth、artisan serveあたりの仕組みを理解するやり方で原因を把握していきたい。  

2019-04-21 1.5h  
**作業概要**  
+ タスク登録機能
+ タスク削除機能
+ Repository, Policyの追加
+ これによりユーザーIDの判定を行い、不正なアクセスを防ぐ
+ コントローラとは別にRequestクラスを独自に作り（大げさな気もするが）Validateの制御を行った。

**躓いた点**
察しがついたのでハマりはしなかったがServiceProviderの記載方法が違うことで手間取った。  
$router->model('key', 'class')なのだが、$this->modelでOKだった。  

**新しい知識**
$request->user()で情報取れることを知る。  
いちいちModel::find($id)などとし、この前にauth()->user()->idなどで値を取っていたので、  
書くのが楽になりそうかつ、行数が減らせそうなのは美味しいと思った。  
$request->user()->tasks()->create([])とすることで、  
認証済ユーザーのIDをTaskのuser_idに入れてくれるということを知り、  
フレームワークの便利さを思い知る。もっと知りたい。  

思った以上にボリュームも多くなく、  
何をしようかな？と画策中。  