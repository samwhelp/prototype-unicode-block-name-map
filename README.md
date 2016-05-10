
## 緣起

此專案的契機，來自「[這篇討論](http://www.ubuntu-tw.org/modules/newbb/viewtopic.php?post_id=352130#forumpost352130)」，
可以當作翻譯「Unicode Block Name」的輔助工具。

## Wikipedia

* [Unicode_block](https://en.wikipedia.org/wiki/Unicode_block)

## 功能

### 產生 unicode block name 繁體中文翻譯對照表 (json格式)

執行

``` sh
$ make json
```

或是執行

``` sh
$ composer json
```

會根據

* asset/UnicodeBlockName/msgid.txt
* asset/UnicodeBlockName/msgstr.txt

產生一個對照表，轉成json格式，儲存到

* asset/UnicodeBlockName/map.json


### 重新對應 unicode block name 到 po檔

執行

``` sh
$ make map
```

或是執行

``` sh
$ composer map
```

會根據「asset/UnicodeBlockName/map.json」，

將下面三個檔，重新做對應

* asset/Po/Src/gucharmap.po
* asset/Po/Src/kdelibs4.po
* asset/Po/Src/dialog.po

然後產生

* asset/Po/Des/gucharmap.po
* asset/Po/Des/kdelibs4.po
* asset/Po/Des/dialog.po

可以使用「[meld](http://packages.ubuntu.com/xenial/meld)」，來比對，做了那些修改


## 資源 1

* asset/UnicodeBlogkName/msgid.txt
* asset/UnicodeBlogkName/msgstr.txt

上面兩個檔的內容來自於「[unicodecharlist](https://www.openfoundry.org/of/projects/2267) / [Download](https://www.openfoundry.org/of/projects/2267/download) / [Unicode80.ods](https://www.openfoundry.org/of/download_path/unicodecharlist/8.0.0/Unicode80.ods)」
版權屬於該作者「[IanHo](https://www.openfoundry.org/community/userprofile/IanHo)」所有。


## 資源 2

* asset/Po/Src/gucharmap.po ([gucharmap](http://packages.ubuntu.com/source/xenial/gucharmap)) ([更多說明](http://www.ubuntu-tw.org/modules/newbb/viewtopic.php?post_id=352130#forumpost352130))
* asset/Po/Src/kdelibs4.po ([kde-l10n-zhtw](http://packages.ubuntu.com/source/xenial/kde-l10n-zhtw)) ([更多說明](http://www.ubuntu-tw.org/modules/newbb/viewtopic.php?post_id=352138#forumpost352138))
* asset/Po/Src/dialog.po ([libreoffice-l10n](http://packages.ubuntu.com/source/xenial/libreoffice-l10n)) ([更多說明](http://www.ubuntu-tw.org/modules/newbb/viewtopic.php?post_id=352140#forumpost352140))
