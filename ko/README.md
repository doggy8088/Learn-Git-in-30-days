# 30일 만에 마스터하는 Git 버전 관리

저자: Will Huang (Will 保哥)

![Git](figures/README/01.png)

## 소개

소프트웨어 개발 분야에서 소스 코드의 버전 관리는 매우 중요한 문제입니다. Subversion이나 TFVC(Team Foundation Version Control) 같은 중앙 집중식 버전 관리 시스템과 달리, Git은 분산 버전 관리 시스템(DVCS, Distributed Version Control System)으로, 버전 관리에 많은 이점을 제공하며 로컬 작업 지원, 손쉬운 백업, 강력하고 유연한 브랜치와 병합 등 기존 중앙 집중식 버전 관리의 단점을 해결합니다. 그러나 Git 버전 관리는 버전 관리 개념과 도구 사용법 모두에서 기존 중앙 집중식 버전 관리 도구와 크게 다르기 때문에 상당한 학습 곡선이 존재합니다. 앞으로 30일 동안 Git 버전 관리의 본질을 완전히 이해할 수 있도록 돕고, 저의 학습 경험과 함께 저희 회사가 Subversion에서 Git으로 전환하는 과정에서 겪은 문제와 해결 방법을 공유하고자 합니다.

> **번역 안내:** 이 한국어판은 수상 경력이 있는 원작의 영어판을 번역한 것으로, 핵심 개념과 기술적 정확성을 그대로 유지했습니다.

## 여정은 지금 시작됩니다

* [Day 01: Git 버전 관리 이해하기](01.md)
* [Day 02: Windows 플랫폼 필수 Git 도구 3가지](02.md)
* [Day 03: 리포지토리 만들기](03.md)
* [Day 04: 자주 사용하는 Git 버전 관리 명령어](04.md)
* [Day 05: 리포지토리, 작업 디렉터리, 개체, 인덱스의 관계 이해하기](05.md)
* [Day 06: Git 데이터 구조 파헤치기 - 개체 구조](06.md)
* [Day 07: Git 데이터 구조 파헤치기 - 인덱스 구조](07.md)
* [Day 08: 브랜치의 기본 개념과 사용법](08.md)
* [Day 09: 파일 및 버전 차이 비교하기](09.md)
* [Day 10: Git 개체 절대 이름 이해하기](10.md)
* [Day 11: Git 개체 참조와 심볼릭 참조 이해하기](11.md)
* [Day 12: Git 개체 상대 이름 이해하기](12.md)
* [Day 13: 작업 디렉터리와 인덱스의 변경 사항 스태시하기](13.md)
* [Day 14: Git for Windows 구성 옵션](14.md)
* [Day 15: 태그 - 버전 관리의 중요한 이벤트 표시하기](15.md)
* [Day 16: git reflog로 변경 이력 추적하기](16.md)
* [Day 17: 병합의 기본 개념과 사용법](17.md)
* [Day 18: 커밋된 버전 이력 수정하기 Part 1 (reset & amend)](18.md)
* [Day 19: .gitignore 무시 목록 설정하기](19.md)
* [Day 20: 커밋된 버전 이력 수정하기 Part 2 (revert)](20.md)
* [Day 21: 커밋된 버전 이력 수정하기 Part 3 (cherry-pick)](21.md)
* [Day 22: 커밋된 버전 이력 수정하기 Part 4 (rebase)](22.md)
* [Day 23: 커밋된 버전 이력 수정하기 Part 5 (rebase 2)](23.md)
* [Day 24: GitHub 원격 리포지토리 사용하기 - 시작하기](24.md)
* [Day 25: GitHub 원격 리포지토리 사용하기 - 개념](25.md)
* [Day 26: 같은 원격 리포지토리에서 여러 사람이 작업하기](26.md)
* [Day 27: 같은 원격 리포지토리에서 브랜치로 버전 관리하기](27.md)
* [Day 28: GitHub 포크와 풀 리퀘스트 워크플로 이해하기](28.md)
* [Day 29: Subversion 프로젝트를 Git 리포지토리로 가져오는 방법](29.md)
* [Day 30: 실무에서 유용한 Git 작업 팁 공유](30.md)

## 수상 내역

* [2013년 제6회 iT Ironman 대회 수상자 발표!](https://ithelp.ithome.com.tw/articles/10142953)
*
*

## 연락처

* 블로그: [The Will Will Web](https://blog.miniasp.com/)
* Facebook 페이지: [Will 保哥的技術交流中心](https://www.facebook.com/will.fans)
* Twitter: [Will 保哥 (@Will_Huang)](https://twitter.com/Will_Huang)
* Threads: [Will 保哥](https://www.threads.com/@willh_tw)
