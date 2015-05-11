30 天精通 Git 版本控管
====================

作者: 黃保翕 ( Will 保哥 )

![Git](https://cloud.githubusercontent.com/assets/88981/7561160/79b1cc50-f7fc-11e4-8077-27335f520328.png)

文章簡介
------------

在軟體開發領域，對原始碼進行版本控管是非常重要的一件事，有別於Subversion或TFS這類集中式版本控管系統，Git是一套分散式版本控管系統，並帶來許多版本控管上的各種優勢與解決傳統集中式版本控管的缺失，例如支援本地操作、備份容易、功能強大且彈性的分支與合併等等。不過，由於Git版本控管無論在版控觀念與工具使用上，都與傳統集中式版控工具差異甚大，因此造成了不小的學習門檻，在未來的３０天內，希望能讓大家完整了解Git版本控管的精隨之處，並整理我的學習心得與我們公司從Subversion轉至Git的過程中所遭遇的問題與解決方法。

旅程從現在開始： (^_^)
--------------------------

* [第 01 天：認識 Git 版本控管](docs/01 認識 Git 版本控管.markdown)
* [第 02 天：在 Windows 平台必裝的三套 Git 工具](docs/02 在 Windows 平台必裝的三套 Git 工具.markdown)
* [第 03 天：建立儲存庫](docs/03 建立儲存庫.markdown)
* [第 04 天：常用的 Git 版本控管指令](docs/04 常用的 Git 版本控管指令.markdown)
* [第 05 天：了解儲存庫、工作目錄、物件與索引之間的關係](docs/05 了解儲存庫、工作目錄、物件與索引之間的關係.markdown)
* [第 06 天：解析 Git 資料結構 - 物件結構](docs/06 解析 Git 資料結構 - 物件結構.markdown)
* [第 07 天：解析 Git 資料結構 - 索引結構](docs/07 解析 Git 資料結構 - 索引結構.markdown)
* [第 08 天：關於分支的基本觀念與使用方式](docs/08 關於分支的基本觀念與使用方式.markdown)
* [第 09 天：比對檔案與版本差異](docs/09 比對檔案與版本差異.markdown)
* [第 10 天：認識 Git 物件的絕對名稱](docs/10 認識 Git 物件的絕對名稱.markdown)
* [第 11 天：認識 Git 物件的一般參照與符號參照](docs/11 認識 Git 物件的一般參照與符號參照.markdown)
* [第 12 天：認識 Git 物件的相對名稱](docs/12 認識 Git 物件的相對名稱.markdown)
* [第 13 天：暫存工作目錄與索引的變更狀態](docs/13 暫存工作目錄與索引的變更狀態.markdown)
* [第 14 天：Git for Windows 選項設定](docs/14 Git for Windows 選項設定.markdown)
* [第 15 天：標籤 - 標記版本控制過程中的重要事件](docs/15 標籤 - 標記版本控制過程中的重要事件.markdown)
* [第 16 天：善用版本日誌 git reflog 追蹤變更軌跡](docs/16 善用版本日誌 git reflog 追蹤變更軌跡.markdown)
* [第 17 天：關於合併的基本觀念與使用方式](docs/17 關於合併的基本觀念與使用方式.markdown)
* <a href="docs/18 修正 commit 過的版本歷史紀錄 Part 1 (reset & amend).markdown">第 18 天：修正 commit 過的版本歷史紀錄 Part 1 (reset & amend)</a>
* [第 19 天：設定 .gitignore 忽略清單](docs/19 設定 .gitignore 忽略清單.markdown)
* <a href="docs/20 修正 commit 過的版本歷史紀錄 Part 2 (revert).markdown">第 20 天：修正 commit 過的版本歷史紀錄 Part 2 (revert)</a>
* <a href="docs/21 修正 commit 過的版本歷史紀錄 Part 3 (cherry-pick).markdown">第 21 天：修正 commit 過的版本歷史紀錄 Part 3 (cherry-pick)</a>
* <a href="docs/22 修正 commit 過的版本歷史紀錄 Part 4 (rebase).markdown">第 22 天：修正 commit 過的版本歷史紀錄 Part 4 (rebase)</a>
* <a href="docs/23 修正 commit 過的版本歷史紀錄 Part 5 (rebase 2).markdown">第 23 天：修正 commit 過的版本歷史紀錄 Part 5 (rebase 2)</a>
* [第 24 天：使用 GitHub 遠端儲存庫 - 入門篇](docs/24 使用 GitHub 遠端儲存庫 - 入門篇.markdown)
* [第 25 天：使用 GitHub 遠端儲存庫 - 觀念篇](docs/25 使用 GitHub 遠端儲存庫 - 觀念篇.markdown)
* [第 26 天：多人在同一個遠端儲存庫中進行版控](docs/26 多人在同一個遠端儲存庫中進行版控.markdown)
* [第 27 天：透過分支在同一個遠端儲存庫中進行版控](docs/27 透過分支在同一個遠端儲存庫中進行版控.markdown)
* [第 28 天：了解 GitHub 上 forks 與 pull request 的版控流程](docs/28 了解 GitHub 上 forks 與 pull request 的版控流程.markdown)
* [第 29 天：如何將 Subversion 專案匯入到 Git 儲存庫](docs/29 如何將 Subversion 專案匯入到 Git 儲存庫.markdown)
* [第 30 天：分享工作中幾個好用的 Git 操作技巧](docs/30 分享工作中幾個好用的 Git 操作技巧.markdown)

獲獎紀錄
----------

* [2013第6屆iT邦幫忙鐵人賽得獎名單出爐!](http://ithelp.ithome.com.tw/question/10142953)
	* 【iT邦幫忙鐵人賽年度大獎】
	* 【開發技術組年度鐵人】

課程資訊
---------

* [《台北》Git 版本控管實戰：從入門到進階](http://miniasp.kktix.cc/events/git-taipei-06) [一天課程]
	* 上課時間: 2014/10/05 9:00 ~ 17:00
* [《台北》Git 版本控管實戰：從入門到進階](https://kktix.com/events/git-taipei-04) [一天課程]
	* 上課時間: 2014/06/14 9:00 ~ 17:00
* [《台北》Git 版本控管實戰：從入門到進階](https://kktix.com/events/git-taipei-03) [一天課程]
	* 上課時間: 2014/06/08 9:00 ~ 17:00
* [《台中》Git 版本控管實戰：新手入門篇](http://miniasp.kktix.cc/events/git-taichung-01) [一天課程]
	* 上課時間: 2014/04/19 9:00 ~ 17:00
* [《高雄》Git 版本控管實戰：新手入門篇](http://miniasp.kktix.cc/events/git-kaohsiung-01) [一天課程]
	* 上課時間: 2014/03/16 9:00 ~ 17:00
* [《台北》Git 版本控管實戰：從入門到進階](https://kktix.com/events/git-taipei-01) [兩天課程]
	* 上課時間 (第一天): 2014/01/11 9:00 ~ 17:00
	* 上課時間 (第二天): 2014/01/18 9:00 ~ 17:00

與我聯絡
---------

* 粉絲頁: [Will 保哥的技術交流中心](https://www.facebook.com/will.fans)
* 部落格: [The Will Will Web](http://blog.miniasp.com/)
* 噗　浪: [★★★ Will 保哥的噗浪 ★★★](http://www.plurk.com/willh/invite)
