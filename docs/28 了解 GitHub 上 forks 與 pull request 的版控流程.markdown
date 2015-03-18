第 28 天：了解 GitHub 的 fork 與 pull request 版控流程
========================================================================

我們知道 Git 儲存庫並沒有什麼「權限控管」的概念，因為他是分散式的版本控管系統，當你執行 `git clone` 之後就會把整份擁有完整版本歷史的儲存庫下載回來，接著你就可以在本地離線的進行開發與建立版本，最後再將變更推送到遠端儲存庫。不過，如果我們只有一份遠端儲存庫的話，這代表大家都有權限將變更推送到遠端儲存庫。因此，GitHub 採用了 forks 與 pull request 的流程，讓你可以做到基本的權限控管。

設定 GitHub 專案的權限控管 - 個人帳號
-------------------------------------

在 GitHub 的個人帳戶下，並沒有甚麼權限控管的機制，所以只要你授權特定人為協同開發人員 (Collaborators)，他就能自由的 Push 與 Pull 專案原始碼。

我以我之前在 GitHub 上建立的某個專案為例，專案網址：[https://github.com/doggy8088/DataDictionaryCreator](https://github.com/doggy8088/DataDictionaryCreator)

![image](https://f.cloud.github.com/assets/88981/1418495/2e0356f2-3fb6-11e3-9597-3346d42e1ef3.png)

進入該網址後，點選右側選單的 **Settings** 連結進入：

![image](https://f.cloud.github.com/assets/88981/1418522/12f5e590-3fb7-11e3-8117-8e29c2a75201.png)

然後就可以加入授權的協同開發人員，這裡要輸入的是對方在 GitHub 上的帳號：

![image](https://f.cloud.github.com/assets/88981/1418528/523312e6-3fb7-11e3-8ebf-6ade31856fdb.png)

設定成功的圖示如下：

![image](https://f.cloud.github.com/assets/88981/1418537/938351de-3fb7-11e3-9f39-4b455823eb9c.png)

但由於你沒辦法設定更細的 Git 遠端儲存庫權限，所以只要被指派的人，就能夠存取完整的 Git 遠端儲存庫，大家都能對任意分支進行推送 (Push)、拉取 (Pull) 或刪除分支等動作，要是團隊遇上天兵，那可能會是場災難。


設定 GitHub 專案的權限控管 - 組織帳號
-------------------------------------

在 GitHub 的組織帳戶下，就可以設定人員群組(Teams)，你就可以在群組上設定更細的權限，其中包括三種權限：

* Pull Only (唯讀)
* Push & Pull (可讀可寫)
* Push, Pull & Administrative (可讀可寫以及專案管理權限)

![image](https://f.cloud.github.com/assets/88981/1418605/930d34c0-3fb9-11e3-91e0-ec3aeae42e54.png)

設定群組的方法如下：

![image](https://f.cloud.github.com/assets/88981/1418507/a939e098-3fb6-11e3-9510-15acac4e2cc7.png)

然後選擇團隊：

![image](https://f.cloud.github.com/assets/88981/1418640/7e9c55ec-3fba-11e3-9fa4-5437d3858ab3.png)

你也可以點選進入組織設定頁面，進一步的來挑選團隊成員：

![image](https://f.cloud.github.com/assets/88981/1418655/f1824260-3fba-11e3-8981-1153a691a0fa.png)

![image](https://f.cloud.github.com/assets/88981/1418666/23c32cc6-3fbb-11e3-954e-d88978b0effd.png)

![image](https://f.cloud.github.com/assets/88981/1418670/49e2220e-3fbb-11e3-8d00-0ef7c35d3e30.png)

![image](https://f.cloud.github.com/assets/88981/1418673/6522a552-3fbb-11e3-8cbb-3133c6460081.png)

![image](https://f.cloud.github.com/assets/88981/1418678/784a9ce8-3fbb-11e3-8dd5-d6e83021f710.png)


使用 Fork 功能
---------------

英文的 Fork 字面翻譯是「叉子」的意思，就好像你刀叉去把食物「叉」起來一樣，直接把菜挪放到你自己的盤子裡，我比喻的「菜」就是你要複製的 GitHub 專案，而「盤子」就是你的 GitHub 帳號。

註：老外用刀叉比較多，如果 GitHub 是台灣發展的，這個單字可能會是 Chopsticks (筷子)，哈！ XD 

現在我們以 [https://github.com/doggy8088/DataDictionaryCreator](https://github.com/doggy8088/DataDictionaryCreator) 為例，這個專案，你當然沒有「寫入」權限，只有「唯讀」而已。

我現在登入另外一個 GitHub 帳號 ( `LearnGitForks` )，然後將該專案「叉」到這個帳戶自己 GitHub 帳號下：

![image](https://f.cloud.github.com/assets/88981/1418776/95de316e-3fbd-11e3-820c-815fadd811de.png)

按下去之後，他骨子裡其實就是使用 `git clone` 來複製該專案到你的 GitHub 帳號下，估計只要十幾秒鐘就會複製完成，看你複製的專案大小：

![image](https://f.cloud.github.com/assets/88981/1418730/a3c62f1c-3fbc-11e3-9cd8-9d6f939b40be.png)

完成後，在你自己的帳號下，就會有個完全一樣的 Git 專案被建立，但會在名稱下顯示一段 `forked from` 提示你該專案是來從哪裡複製過來的。

![image](https://f.cloud.github.com/assets/88981/1418745/e97b56cc-3fbc-11e3-9a47-a2b313b283f1.png)

因為該專案已經在你自己的帳號下，所以此時你已經可以把該專案當成「自己的遠端儲存庫」在用，完全沒有讀寫權限的問題。

因為 Git 是個分散式版本控管系統，只要你有 fetch 的權限，基本上就可以抓到該版本庫的完整版本變更歷程。


使用 Fork 過的 Git 遠端儲存庫
-------------------------------

在版本控管方面，使用上幾乎跟用自己的 Git 遠端儲存庫沒什麼兩樣，而且你也有完整的歷史紀錄。請記得這份資料是從 [https://github.com/doggy8088/DataDictionaryCreator](https://github.com/doggy8088/DataDictionaryCreator) 複製過來的就好。

我們先取得遠端儲存庫回來：

	C:\>git clone git@github.com:LearnGitForks/DataDictionaryCreator.git
	Cloning into 'DataDictionaryCreator'...
	remote: Counting objects: 57, done.
	remote: Compressing objects: 100% (45/45), done.
	Receiving objects:  71% (41/57), 36.00 KiB | 42.00 KiB/s
	Receiving objects: 100% (57/57), 94.08 KiB | 42.00 KiB/s, done.
	Resolving deltas: 100% (12/12), done.
	
	C:\>cd DataDictionaryCreator
	
	C:\DataDictionaryCreator>

然後我們建立起一個版本，然後把變更推送回去：

	C:\DataDictionaryCreator>echo TEST > test.md
	
	C:\DataDictionaryCreator>git add .
	
	C:\DataDictionaryCreator>git commit -m "Add a test.md for test purpose"
	[master b2004b0] Add a test.md for test purpose
	 1 file changed, 1 insertion(+)
	 create mode 100644 test.md
	
	C:\DataDictionaryCreator>git push
	Counting objects: 4, done.
	Delta compression using up to 8 threads.
	Compressing objects: 100% (2/2), done.
	Writing objects: 100% (3/3), 285 bytes | 0 bytes/s, done.
	Total 3 (delta 1), reused 0 (delta 0)
	To git@github.com:LearnGitForks/DataDictionaryCreator.git
	   c29aaab..b2004b0  master -> master
	
	C:\DataDictionaryCreator>


使用 pull request 將變更合併回當初的 GitHub 專案 
--------------------------------------------------

剛剛我們用 `LearnGitForks` 身分，把專案從 `doggy8088` 這邊 Fork 回來，然後用 `LearnGitForks` 的身分 `git clone` 回本地端，建立版本後再用 `git push` 推回 GitHub 的 `LearnGitForks` 下。

現在我們要把儲存在 `LearnGitForks` 帳號下的 `DataDictionaryCreator` 專案「合併」回 `doggy8088` 帳號下的 `DataDictionaryCreator` 專案，這時因為是跨帳號的，所以必須利用 `pull request` 才能把變更「合併」回去。

註：這裡的 pull request 照字面翻譯是「拉取要求」的意思，代表要以 `LearnGitForks` 的身分，請 `doggy8088` 把我的變更給拉回去 (`git pull`)，但你不能強迫對方拉(`pull`)，所以必須拜託(`request`)對方拉，所以才叫做 pull request。

這時，你要用 `LearnGitForks` 的身分，連到 `https://github.com/doggy8088/DataDictionaryCreator` 這一頁，然後點選 **Pull Requests** 頁籤：

![image](https://f.cloud.github.com/assets/88981/1418918/ae8a47d6-3fc0-11e3-9719-395a788ea3af.png)

然後點選 `New pull request` 按鈕，準備建立一個新的 pull request 項目：

![image](https://f.cloud.github.com/assets/88981/1418936/da8d5d46-3fc0-11e3-9ca4-86bf5de2f8a8.png)

接下來你要選擇兩個版本 (兩個 commit 物件)，GitHub 才能建立 patch 檔案，也才能知道要合併那些東西回去。但你選不到自己 fork 過的版本，因此你要點選 **compare across forks** 

![image](https://f.cloud.github.com/assets/88981/1418950/24a62e80-3fc1-11e3-98eb-2cea6251adb5.png)

然後你就可以選擇到自己 fork 過的專案與分支了！不過，這一步要特別注意不要選錯，你的版本因為比較新，所以應該要把右邊的版本選擇成你的，GitHub 才知道從 `doggy8088/DataDictionaryCreator` 的 `master` 分支，到 `LearnGitForks/DataDictionaryCreator` 的 `master` 分支，到底發生了那些版本變化。

![image](https://f.cloud.github.com/assets/88981/1419001/f10bf2b6-3fc1-11e3-808d-e4b6bbd0c7a5.png)

最後你會看到有哪些檔案以及哪些地方變更了，然後你就可以按下 **Click to create a pull request for this comparison** 建立起一個 pull request：

![image](https://f.cloud.github.com/assets/88981/1419032/6b5e3fa6-3fc2-11e3-9fdb-f9397a34937d.png)

最後，我們先看一下右上角有個 **Able to merge** 的地方，會預先告訴你合併的結果，顯示你的版本跟目前的 `doggy8088:master` 的版本是否有衝突發生。如果都沒問題，再輸入一些說明文字給原作者 ( `doggy8088` ) ，並按下 `Send pull request` 即可建立完成。

![image](https://f.cloud.github.com/assets/88981/1419052/eb32777e-3fc2-11e3-8290-95f7433aa4c0.png)

**註** Github for Mac;Github for Windows 已增加pull request功能

![image](https://cloud.githubusercontent.com/assets/634063/6474793/42c3a6a6-c204-11e4-9380-f05d68ab9d99.gif)

接受 pull request 的要求，確認合併回自己的 GitHub 專案 
------------------------------------------------------

最後一個步驟，則是讓原作者 ( `doggy8088` ) 去看有誰傳送了一個 pull request 給自己。

現在我重新以 `doggy8088` 登入 GitHub，並到該專案發現有一個 **Pull Requests** 進來了：

![image](https://f.cloud.github.com/assets/88981/1419074/6226acce-3fc3-11e3-840c-e1d5c86b58e1.png)

點擊進去：

![image](https://f.cloud.github.com/assets/88981/1419080/7e4759f8-3fc3-11e3-9a5e-aace69f2a9ca.png)

最後按下 **Merge pull request** 即可完成合併工作。

![image](https://f.cloud.github.com/assets/88981/1419099/93a0fa7a-3fc3-11e3-9af9-9222569f9864.png)


今日小結
-------

做到這裡，你應該大致能夠了解為什麼會有 fork 與 pull request 的存在，最主要的就是「權限」以及「版本庫隔離」的需求。一個上千人的專案 (`Linux Kernel`)，如果所有人都能存取主要的遠端儲存庫，那不是很恐怖嗎！

不過在一般企業裡，你不一定要這樣做，畢竟操作的步驟確實繁瑣了些。實際要怎麼用，就要靠你自己判斷了。


參考連結
-------

* [Fork A Repo](https://help.github.com/articles/fork-a-repo)
* [Using Pull Requests](https://help.github.com/articles/using-pull-requests)
* [Git workflow: Forks, remotes, and pull requests](http://nathanhoad.net/git-workflow-forks-remotes-and-pull-requests)
* [Fork a Repo, Compare Code, and Create a Pull Request](https://confluence.atlassian.com/display/BITBUCKET/Fork+a+Repo,+Compare+Code,+and+Create+a+Pull+Request)
* [Forks and Pull Requests in GitHub](http://chronicle.com/blogs/profhacker/forks-and-pull-requests-in-github/47753)