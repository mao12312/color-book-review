# color-book-review
図書館総合展用のアプリケーション

#appコンテナ(artisanコマンド等)
$ docker-compose exec app ash

#webコンテナ(nginx等　webサーバー)
$ docker-compose exec web ash

#dbコンテナ(Mysql等)
$ docker-compose exec db bash
$ mysql -u homested -p
Enter password: **** 
(dbのユーザ名パスワードは.envファイルにあらかじめ記入したものを使用)

port:http://127.0.0.1:10080
