# 30日でマスター Git バージョン管理

Author: Will Huang (Will 保哥)

![Git](figures/README/01.png)

## はじめに

ソフトウェア開発の分野において、ソースコードのバージョン管理は非常に重要な課題です。Subversion や TFVC（Team Foundation Version Control）のような集中型バージョン管理システムとは異なり、Git は分散型バージョン管理システム（DVCS; Distributed Version Control System）であり、バージョン管理に多くの利点をもたらし、ローカル操作のサポート、バックアップの容易さ、強力で柔軟なブランチとマージなど、従来の集中型バージョン管理の欠点を解決しています。しかし、Git のバージョン管理は、バージョン管理の概念とツールの使い方の両面で従来の集中型バージョン管理ツールと大きく異なるため、学習のハードルが高くなっています。これからの 30 日間で、Git バージョン管理の本質を完全に理解していただき、私の学習経験と、当社が Subversion から Git へ移行する過程で直面した問題とその解決策を共有したいと思います。

> **翻訳について：** 本書は、2013 年の第 6 回 iT 邦幫忙鐵人賽で年間大賞を受賞した作品の英語版を翻訳したものです。原文の中核となる概念と技術的な正確さを保ちながら、日本語読者向けに翻訳しています。

## 旅の始まり

* [Day 01: Git バージョン管理を理解する](01.md)
* [Day 02: Windows プラットフォームで必須の Git ツール 3 選](02.md)
* [Day 03: リポジトリを作成する](03.md)
* [Day 04: よく使う Git バージョン管理コマンド](04.md)
* [Day 05: リポジトリ、ワーキングディレクトリ、オブジェクト、インデックスの関係を理解する](05.md)
* [Day 06: Git のデータ構造を解析する - オブジェクト構造](06.md)
* [Day 07: Git のデータ構造を解析する - インデックス構造](07.md)
* [Day 08: ブランチの基本概念と使い方](08.md)
* [Day 09: ファイルとバージョンの差分を比較する](09.md)
* [Day 10: Git オブジェクトの絶対名を理解する](10.md)
* [Day 11: Git オブジェクトの参照とシンボリック参照を理解する](11.md)
* [Day 12: Git オブジェクトの相対名を理解する](12.md)
* [Day 13: ワーキングディレクトリとインデックスの変更を退避する（stash）](13.md)
* [Day 14: Git for Windows の設定オプション](14.md)
* [Day 15: タグ - バージョン管理における重要なイベントの記録](15.md)
* [Day 16: git reflog で変更履歴を追跡する](16.md)
* [Day 17: マージの基本概念と使い方](17.md)
* [Day 18: コミット済み履歴の修正 Part 1（reset と amend）](18.md)
* [Day 19: .gitignore の除外リストを設定する](19.md)
* [Day 20: コミット済み履歴の修正 Part 2（revert）](20.md)
* [Day 21: コミット済み履歴の修正 Part 3（cherry-pick）](21.md)
* [Day 22: コミット済み履歴の修正 Part 4（rebase）](22.md)
* [Day 23: コミット済み履歴の修正 Part 5（rebase 2）](23.md)
* [Day 24: GitHub リモートリポジトリを使う - 入門編](24.md)
* [Day 25: GitHub リモートリポジトリを使う - 概念編](25.md)
* [Day 26: 同じリモートリポジトリで複数人が作業する](26.md)
* [Day 27: 同じリモートリポジトリでブランチを使ってバージョン管理する](27.md)
* [Day 28: GitHub のフォークとプルリクエストのワークフローを理解する](28.md)
* [Day 29: Subversion プロジェクトを Git リポジトリにインポートする方法](29.md)
* [Day 30: 実務で役立つ Git 操作の Tips 共有](30.md)

## 受賞歴

* [2013 年第 6 回 iT 鐵人賽 受賞者リスト発表！](https://ithelp.ithome.com.tw/articles/10142953)
*
*

## 連絡先

* Blog: [The Will Will Web](https://blog.miniasp.com/)
* Facebook Page: [Will 保哥的技術交流中心](https://www.facebook.com/will.fans)
* Twitter: [Will 保哥 (@Will_Huang)](https://twitter.com/Will_Huang)
* Threads: [Will 保哥](https://www.threads.com/@willh_tw)
