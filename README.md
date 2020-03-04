# color-book-review
図書館総合展用のアプリケーション
コンセプト：「本という文字情報を、色という別の情報でレビューする」


```
#appコンテナ(artisanコマンド等)
$ docker-compose exec app ash

#webコンテナ(nginx等　webサーバー)
$ docker-compose exec web ash

#dbコンテナ(Mysql等)
$ docker-compose exec db bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'
(dbのユーザ名パスワードは.envファイルにあらかじめ記入したものを使用)

#pc再起動時 docker-compose 再起動
$ docker-compose start
```
port:[http://127.0.0.1:10080](http://127.0.0.1:10080)
