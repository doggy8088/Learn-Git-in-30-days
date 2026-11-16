# Làm chủ Git trong 30 ngày

Tác giả: Will Huang (Will 保哥)

![Git](figures/README/01.png)

## Giới thiệu

Trong lĩnh vực phát triển phần mềm, việc quản lý phiên bản mã nguồn là một việc vô cùng quan trọng. Khác với các hệ thống quản lý phiên bản tập trung như Subversion hay TFVC (Team Foundation Version Control), Git là một hệ thống quản lý phiên bản phân tán (DVCS; Distributed Version Control System) mang lại nhiều ưu điểm cho việc quản lý phiên bản và khắc phục những hạn chế của quản lý phiên bản tập trung truyền thống, chẳng hạn như hỗ trợ thao tác cục bộ, dễ dàng sao lưu, phân nhánh và hợp nhất mạnh mẽ, linh hoạt, v.v. Tuy nhiên, vì quản lý phiên bản bằng Git khác biệt rất lớn so với các công cụ quản lý phiên bản tập trung truyền thống cả về khái niệm quản lý phiên bản lẫn cách sử dụng công cụ, nên nó tạo ra một đường cong học tập đáng kể. Trong 30 ngày tới, tôi hy vọng sẽ giúp bạn hiểu trọn vẹn bản chất của quản lý phiên bản Git, đồng thời chia sẻ kinh nghiệm học tập của tôi, cùng với những vấn đề và giải pháp mà chúng tôi đã gặp phải trong quá trình công ty chuyển đổi từ Subversion sang Git.

> **Lưu ý về bản dịch:** Bản tiếng Việt này được dịch từ bản tiếng Anh của cuốn sách từng đoạt giải thưởng này. Bản dịch giữ nguyên các khái niệm cốt lõi và độ chính xác kỹ thuật của bản gốc tiếng Trung phồn thể, đồng thời điều chỉnh một số nội dung cho phù hợp với thực tiễn Git hiện đại và độc giả quốc tế. Một số chương đã được bổ sung thêm ví dụ và các thực tiễn tốt nhất hiện nay.

## Hành trình bắt đầu từ đây

* [Ngày 01: Hiểu về quản lý phiên bản với Git](01.md)
* [Ngày 02: Ba công cụ Git thiết yếu cho nền tảng Windows](02.md)
* [Ngày 03: Tạo kho lưu trữ (Repository)](03.md)
* [Ngày 04: Các lệnh quản lý phiên bản Git thường dùng](04.md)
* [Ngày 05: Hiểu mối quan hệ giữa Repository, Working Directory, Objects và Index](05.md)
* [Ngày 06: Phân tích cấu trúc dữ liệu Git - Cấu trúc Object](06.md)
* [Ngày 07: Phân tích cấu trúc dữ liệu Git - Cấu trúc Index](07.md)
* [Ngày 08: Khái niệm cơ bản và cách sử dụng Branch](08.md)
* [Ngày 09: So sánh khác biệt giữa tệp và phiên bản](09.md)
* [Ngày 10: Hiểu tên tuyệt đối của Git Object](10.md)
* [Ngày 11: Hiểu tham chiếu Git Object và tham chiếu tượng trưng](11.md)
* [Ngày 12: Hiểu tên tương đối của Git Object](12.md)
* [Ngày 13: Tạm cất thay đổi trong Working Directory và Index (Stash)](13.md)
* [Ngày 14: Các tùy chọn cấu hình Git for Windows](14.md)
* [Ngày 15: Tag - Đánh dấu các sự kiện quan trọng trong quản lý phiên bản](15.md)
* [Ngày 16: Dùng git reflog để theo dõi lịch sử thay đổi](16.md)
* [Ngày 17: Khái niệm cơ bản và cách sử dụng Merge](17.md)
* [Ngày 18: Sửa lịch sử phiên bản đã commit Phần 1 (reset & amend)](18.md)
* [Ngày 19: Thiết lập danh sách bỏ qua .gitignore](19.md)
* [Ngày 20: Sửa lịch sử phiên bản đã commit Phần 2 (revert)](20.md)
* [Ngày 21: Sửa lịch sử phiên bản đã commit Phần 3 (cherry-pick)](21.md)
* [Ngày 22: Sửa lịch sử phiên bản đã commit Phần 4 (rebase)](22.md)
* [Ngày 23: Sửa lịch sử phiên bản đã commit Phần 5 (rebase 2)](23.md)
* [Ngày 24: Sử dụng GitHub Remote Repository - Bắt đầu](24.md)
* [Ngày 25: Sử dụng GitHub Remote Repository - Khái niệm](25.md)
* [Ngày 26: Nhiều người cùng làm việc trên một Remote Repository](26.md)
* [Ngày 27: Quản lý phiên bản bằng Branch trên cùng một Remote Repository](27.md)
* [Ngày 28: Hiểu quy trình Fork và Pull Request trên GitHub](28.md)
* [Ngày 29: Cách nhập dự án Subversion vào Git Repository](29.md)
* [Ngày 30: Chia sẻ một số mẹo thao tác Git hữu ích trong công việc](30.md)

## Giải thưởng

* [Công bố danh sách người chiến thắng cuộc thi iT Ironman lần thứ 6 năm 2013!](https://ithelp.ithome.com.tw/articles/10142953)
*
*

## Liên hệ với tôi

* Blog: [The Will Will Web](https://blog.miniasp.com/)
* Trang Facebook: [Will 保哥的技術交流中心](https://www.facebook.com/will.fans)
* Twitter: [Will 保哥 (@Will_Huang)](https://twitter.com/Will_Huang)
* Threads: [Will 保哥](https://www.threads.com/@willh_tw)
