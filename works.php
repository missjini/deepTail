<html lang="ko">

<head>
    <meta property="og:type" content="website">
    <title>Deeptail Studio</title>
    <meta name="description" content="공간 기획/디자인/연출">
    <meta property="og:title" content="Deeptail Studio">
    <meta property="og:site_name" content="Deeptail Studio">
    <meta property="og:description" content="공간 기획/디자인/연출">
    <!-- ▼▼ 현재페이지 url 주소 ▼▼ -->
    <meta property="og:url" content="http://">
    <!-- ▼▼ 현재페이지 링크 시 카드이미지 주소 ▼▼ -->
    <meta property="og:image" content="http://">

    <meta name="keywords" content="공간기획, 공간연출, 공간디자인, ">

    <!-- ▼▼ 현재페이지 url 주소 ▼▼ -->
    <link href="http://" rel="canonical">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="yeti" content="index, follow">
    <meta content="width=device-width,minimum-scale=1,initial-scale=1" name="viewport">

    <!-- ▼▼ 현재페이지 아이콘 파일경로 ▼▼ -->
    <link rel="icon" type="image/x-icon" href="assets/_icon/main_icon.ico">
    <!-- ▼▼ 현재페이지 애플-아이콘 파일경로 ▼▼ -->
    <link rel="apple-touch-icon" type="image/png" href="assets/_icon/apple_icon.ico">

    <!-- ▼▼ 송명체 불러오기 ▼▼ -->
    <style>
    @font-face {
        font-family: 'songmyungR';
        src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2110@1.0/JSongMyung-Regular-KO.woff2') format('woff2');
        font-weight: normal;
        font-style: normal;
    }
    </style>

    <script async="" src="assets/_js/main_script.js"></script>
    <script async="" src="assets/_js/instafeed.min.js"></script>

    <!-- ▼▼ 스타일시트 불러오기 (불러오는 순서에 영향받는 스타일이 몇개 있으니 주의할 것) ▼▼ -->
    <link rel="stylesheet" href="assets/_css/style.css" media="all">
    <link rel="stylesheet" href="assets/_css/font-size.css" media="all">
    <link rel="stylesheet" href="assets/_css/font-color.css" media="all">
    <link rel="stylesheet" href="assets/_css/common.css" media="all">
</head>

<body>
    <header>
        <?php include('header.php') ?>
    </header>
    <content class="works">
        <div class="layer1">
            <div>
                Works
            </div>
        </div>
        <div class="layer2">
            <div class="layer2-1">
                <?php if (!empty($_GET['type'])) {
                    $type = $_GET['type'];
                } else {
                    $type = 'all';
                }
                ?>
                <a href="works.php?type=all">
                    <div class="works_bt <?= $type == 'all' ? 'active' : '' ?>">
                        ALL
                    </div>
                </a>

                <a href="works.php?type=inside">
                    <div class="works_bt <?= $type == 'inside' ? 'active' : '' ?>">
                        실내
                    </div>
                </a>

                <a href="works.php?type=outdoor">
                    <div class="works_bt <?= $type == 'outdoor' ? 'active' : '' ?>">
                        실외
                    </div>
                </a>

                <a href="works.php?type=flower">
                    <div class="works_bt <?= $type == 'flower' ? 'active' : '' ?>">
                        조화
                    </div>
                </a>

                <a href="works.php?type=photozone">
                    <div class="works_bt <?= $type == 'photozone' ? 'active' : '' ?>">
                        포토존
                    </div>
                </a>

                <a href="works.php?type=etc">
                    <div class="works_bt <?= $type == 'etc' ? 'active' : '' ?>">
                        기타
                    </div>
                </a>
            </div>
            <div class="layer2-2">
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
                <div class="work_cell"></div>
            </div>
            <div class="layer2-3">

            </div>
            <div class="layer2-4">

            </div>
        </div>
        <div class="photo_modal hide" id="photo_modal" onclick="closeModal('#photo_modal')">
            <div class="close_wrapper">
                <div class="close_bt" onclick="closeModal('#photo_modal')"></div>
            </div>
            <div class="photo_viewer_wrapper">
                <div class="photo_viewer" id="photo_viewer">

                </div>
            </div>
        </div>
    </content>
    <footer>
        <?php include('footer.php') ?>
    </footer>
</body>

</html>