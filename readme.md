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

2019-04-21  
**作業概要**  
