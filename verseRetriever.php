<?php
$OHPFolder = __DIR__ . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR;
include_once $OHPFolder . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
?>
    <!DOCTYPE html>
    <html lang="utf-8">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LOGOS Verse Retriever</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="assets/bower_components/select2/dist/css/select2.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="layout-top-nav skin-blue">
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand"><b>恩道教會</b></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">OHP Generator</span></a></li>
                        <li class="active"><a href="/verseRetriever.php">Verse Retriever</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <div class="content-wrapper">
        <form role="form" id="ohpContainer" class="ohpContainer" target="_blank" action="/generate.php?type=verse" method="post">
        <section class="content-header">
            <h1>
                LOGOS Verse Retriever
                <small>beta</small>
            </h1>
        </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <div class="input-group input-group-sm rootGroup">
                                    <span class="input-group-addon">
                                    </span>
                                    <input type="hidden" name="verse[type]" value="reading">
                                    <div class="col-md-3">
                                        <label>卷</label>
                                        <select class="form-control select2 select2-hidden-accessible bookSelector" style="width: 100%" name="verse[collections][0][book]">
                                            <option value=""></option>
                                            <?php foreach (\Core\VerseTable::$table as $shortName => $details) { ?>
                                                <option value="<?= $details[2]; ?>"><?= $shortName . ' - ' . $details[0] . ' (' . $details[2] . ')'; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>章</label>
                                        <select class="form-control select2 select2-hidden-accessible chapterSelector" style="width: 100%" name="verse[collections][0][chapter]">
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>開始</label>
                                        <select class="form-control select2 select2-hidden-accessible segmentStartSelector" style="width: 100%" name="verse[collections][0][start]">
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>結束</label>
                                        <select class="form-control select2 select2-hidden-accessible segmentEndSelector" style="width: 100%" name="verse[collections][0][end]">
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="verse[lang][zh]" class="zhLangSelector" value="1" checked="checked">中文
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="verse[lang][en]" class="enLangSelector" value="1" checked="checked">英文
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body" id="reading">
                                <textarea style="width: 100%" class="verseContentBlock" rows="20"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                    <span class="input-group-btn">
                        <input type="submit" class="btn btn-info btn-flat" value="PPT!">
                    </span>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="useLogo" value="1">使用 Logo
                            </label>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
    </body>
    <!-- jQuery 3 -->
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="assets/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.bookSelector').select2();
            $('.chapterSelector').select2();
            $('.segmentStartSelector').select2();
            $('.segmentEndSelector').select2();

            $(document).on('change', '.bookSelector', function() {
                var rootGroup = $(this).parents('.rootGroup');
                var book = $(this).children("option:selected").val();
                $.ajax({
                    url: '/bibleListRetriever.php',
                    type: 'get',
                    dataType: "json",
                    data: {
                        book: book
                    }
                }).done(function(data) {
                    updateChapterSelector(rootGroup, data);
                    $('.segmentStartSelector').find("option").remove();
                    $('.segmentEndSelector').find("option").remove();
                });
            });

            $(document).on('change', '.chapterSelector', function() {
                var rootGroup = $(this).parents('.rootGroup');
                var book = rootGroup.find('.bookSelector').children("option:selected").val();
                var chapter = $(this).children("option:selected").val();
                $.ajax({
                    url: '/bibleListRetriever.php',
                    type: 'get',
                    dataType: "json",
                    data: {
                        book: book,
                        chapter: chapter
                    }
                }).done(function(data) {
                    updateSegmentSelector(rootGroup, data);
                });
            });

            $(document).on('change', '.segmentStartSelector', function() {
                var rootGroup = $(this).parents('.rootGroup');
                updateVerse(rootGroup);
                // var book = rootGroup.find('.bookSelector').children("option:selected").val();
                // var chapter = rootGroup.find('.chapterSelector').children("option:selected").val();
                // var startSeg = $(this).children("option:selected").val();
                // var zh = rootGroup.find('.zhLangSelector').checked;
                // var en = rootGroup.find('.enLangSelector').checked;
                // $.ajax({
                //     url: '/bibleListRetriever.php',
                //     type: 'get',
                //     dataType: "json",
                //     data: {
                //         book: book,
                //         chapter: chapter,
                //         startseg: startSeg,
                //         zh: zh,
                //         en: en,
                //         getverse: true
                //     }
                // }).done(function(data) {
                //     $('.verseContentBlock').html(data);
                // });
            });

            $(document).on('change', '.segmentEndSelector', function() {
                var rootGroup = $(this).parents('.rootGroup');
                updateVerse(rootGroup);
                // var book = rootGroup.find('.bookSelector').children("option:selected").val();
                // var chapter = rootGroup.find('.chapterSelector').children("option:selected").val();
                // var startSeg = rootGroup.find('.segmentStartSelector').children("option:selected").val();
                // var endSeg = $(this).children("option:selected").val();
                // var zh = rootGroup.find('.zhLangSelector').checked;
                // var en = rootGroup.find('.enLangSelector').checked;
                // $.ajax({
                //     url: '/bibleListRetriever.php',
                //     type: 'get',
                //     dataType: "json",
                //     data: {
                //         book: book,
                //         chapter: chapter,
                //         startseg: startSeg,
                //         endseg: endSeg,
                //         zh: zh,
                //         en: en,
                //         getverse: true
                //     }
                // }).done(function(data) {
                //     $('.verseContentBlock').html(data);
                // });
            });

            $(document).on('click', '.zhLangSelector', function() {
                var rootGroup = $(this).parents('.rootGroup');
                updateVerse(rootGroup);
            });

            $(document).on('click', '.enLangSelector', function() {
                var rootGroup = $(this).parents('.rootGroup');
                updateVerse(rootGroup);
            });

            function updateVerse(rootGroup) {
                var book = rootGroup.find('.bookSelector').children("option:selected").val();
                var chapter = rootGroup.find('.chapterSelector').children("option:selected").val();
                var startSeg = rootGroup.find('.segmentStartSelector').children("option:selected").val();
                var endSeg = rootGroup.find('.segmentEndSelector').children("option:selected").val();
                var zh = rootGroup.find('.zhLangSelector').is(":checked")? true : false;
                var en = rootGroup.find('.enLangSelector').is(":checked")? true : false;
                if (book != '' && chapter != '' && startSeg != '') {
                    $.ajax({
                        url: '/bibleListRetriever.php',
                        type: 'get',
                        dataType: "json",
                        data: {
                            book: book,
                            chapter: chapter,
                            startseg: startSeg,
                            endseg: endSeg,
                            zh: zh,
                            en: en,
                            getverse: true
                        }
                    }).done(function(data) {
                        $('.verseContentBlock').html(data);
                    });
                }
            }

            function updateChapterSelector(rootGroup, list) {
                var selector = rootGroup.find('.chapterSelector');
                selector.find("option").remove();
                selector.append('<option value=""></value>');
                $.each(list, function(key, value) {
                    selector.append('<option value="' + value + '">' + value + ' 章</value>');
                });
            }

            function updateSegmentSelector(rootGroup, list) {
                var startSelector = rootGroup.find('.segmentStartSelector');
                var endSelector = rootGroup.find('.segmentEndSelector');

                startSelector.find("option").remove();
                endSelector.find("option").remove();

                startSelector.append('<option value=""></value>');
                endSelector.append('<option value=""></value>');
                $.each(list, function(key, value) {
                    startSelector.append('<option value="' + value + '">' + value + ' 節</value>');
                    endSelector.append('<option value="' + value + '">' + value + ' 節</value>');
                });
            }
        });
    </script>
    </html>
<?php