# ZAP 体験ツール

## インストール方法

* 事前にネットワークインタフェースを確認して、インターネットに接続できるようにする必要があります
* 演習用の Kali Linux に入れる場合は下記と異なります。

ホームディレクトリへ移動

```
# cd ~
```

ソースコードをダウンロード（clone）

```
# wget https://github.com/ym405nm/hello-zap/archive/master.zip
# unzip master.zip
```

ソースコードをDocumentRootディレクトリへ移動

```
# mv hello-zap-master /var/www/html/
```

サーバの設定(他の演習で既にしている場合は不要)

```
# a2ensite 000-default
# service apache2 reload
```

ブラウザから http://(IPアドレス)/hello-zap-master/index.php にアクセス→Hello ZAP と出れば完了

※ IPアドレスが分からない場合は ifconfig コマンドで調べる
