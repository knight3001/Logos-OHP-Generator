<?php
$OHPFolder = __DIR__ . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR;
include_once $OHPFolder . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
?>
<!DOCTYPE html>
<html lang="utf-8">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGOS OHP Generator</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
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
<body class="hold-transition skin-blue sidebar-mini">
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            LOGOS OHP Generator
            <small>beta</small>
        </h1>
    </section>
    <section class="content">
        <form role="form" id="ohpContainer" class="ohpContainer">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <select></select>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat">存檔</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>A. 早禱會</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat newWorshipBtn" data-target="a">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="a">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>B. 敬拜讚美</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat newWorshipBtn" data-target="b">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="b">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>C. 主日 - 唱詩 (1)</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat newHymnBtn" data-target="c">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="c">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>D. 主日 - 讀經 (2)</h4>
                                <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat newReadingBtn" data-target="d">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="d">
						</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>E. 主日 - 唱詩 (3)</h4>
                                <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat newHymnBtn" data-target="e">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="e">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>F. 主日 - 講道 (4)</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="preachTitle" name="f[preachTitle]" placeholder="證道主題">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="preacherName" name="f[preacherName]" placeholder="講道牧師">
                            </div>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <div class="input-group input-group-sm">
                                        <h5>證道大鋼</h5>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat newPreachOutlineSelector">新增</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="大鋼">
                                            </div>
                                            <div class="input-group input-group-sm">
                                                <h6>讀經</h6>
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-info btn-flat">新增</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>G. 報告</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>H. 代禱</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>I. 奉獻</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>J. 金句</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="weeklyVerse" placeholder="經文">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="weeklyVerseBook" placeholder="經文出處">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>K. 唱詩</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat" id="newHymnBtn" data-target="k">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="k">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
</body>
<script src="assets/jquery-3.2.1.min.js"></script>
<script>
	$(document).on('click', '.deleteBtn', function() {
		$(this).parents('.rootGroup').remove();
	});

    $(document).ready(function() {
//        $('#newMorningWorshipSongSelector').on('click', function() {
//            $('#morningWorshipSongs').append("" +
//                "<div class=\"input-group input-group-sm\">" +
//                "   <span class=\"input-group-addon\">" +
//                "       <i class=\"fa fa-close\"></i>" +
//                "   </span>" +
//                "   <select class=\"form-control\" name=\"morningWorshipSongs[]\">" +
//                <?php
//                $files = scandir('.' . DIRECTORY_SEPARATOR . 'OHP' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'worship', 0);
//                foreach ($files as $filename) {
//                    if ($filename !== '.' && $filename !== '..') {
//                        echo '"       <option value=\"' . $filename . '\">' . $filename . '</option>" +';
//                    }
//                }
//                ?>
//                "   </select>" +
//                "</div>");
//        });
        $('.newWorshipBtn').on('click', function() {
            var holder = $(this).data('target');
            $('#' + holder).append("" +
                "<div class=\"input-group input-group-sm rootGroup\">" +
                "   <span class=\"input-group-addon deleteBtn\">" +
                "       <i class=\"fa fa-close\"></i>" +
                "   </span>" +
                "   <select class=\"form-control\" name=\"worshipSongs[]\">" +
                <?php
                $files = scandir($OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'worship', 0);
                foreach ($files as $filename) {
                    if ($filename !== '.' && $filename !== '..') {
                        echo '"       <option value=\"' . $filename . '\">' . $filename . '</option>" +';
                    }
                }
                ?>
                "   </select>" +
                "</div>");
        });
        $('.newHymnBtn').on('click', function() {
            var holder = $(this).data('target');
            $('#' + holder).append("" +
                "<div class=\"input-group input-group-sm rootGroup\">" +
                "   <span class=\"input-group-addon deleteBtn\">" +
                "       <i class=\"fa fa-close\"></i>" +
                "   </span>" +
                "   <select class=\"form-control\" name=\"worshipSongs[]\">" +
                <?php
                $files = scandir($OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'hymns', 0);
                foreach ($files as $filename) {
                    if ($filename !== '.' && $filename !== '..') {
                        echo '"       <option value=\"' . $filename . '\">' . $filename . '</option>" +';
                    }
                }
                ?>
                "   </select>" +
                "</div>");
        });
		$('.newReadingBtn').on('click', function() {
            var holder = $(this).data('target');
            $('#' + holder).append("" +
				"<div class=\"input-group input-group-sm rootGroup\" data-reading-index=\"123\">" +
				"	<span class=\"input-group-addon deleteBtn\">" +
				"		<i class=\"fa fa-close\"></i>" +
				"	</span>" +
				"	<div class=\"col-md-3\">" +
				"		<label>卷</label>" +
				"		<select class=\"form-control bookSelector\" name=\"reading[]\">" +
				"			<option value=\"\"></option>" +
				<?php 
				foreach (\Core\VerseTable::$table as $shortName => $details) {
					echo '"				<option value=\"' . $details[2] . '\">' . $shortName . '-' . $details[0] . '</option>" +';
				}
				?>
				"		</select>" +
				"	</div>" +
				"	<div class=\"col-md-3\">" +
				"		<label>章</label>" +
				"		<select class=\"form-control chapterSelector\" name=\"chapter[]\">" +
				"		</select>" +
				"	</div>" +
				"	<div class=\"col-md-3\">" +
				"		<label>開始</label>" +
				"		<select class=\"form-control segmentStartSelector\" name=\"start[]\">" +
				"		</select>" +
				"	</div>" +
				"	<div class=\"col-md-3\">" +
				"		<label>結束</label>" +
				"		<select class=\"form-control segmentEndSelector\" name=\"end[]\">" +
				"		</select>" +
				"	</div>" +
				"</div>"
			);
		});
        $('.bookSelector').on('change', function() {
            var readingIdx = $(this).parents('.input-group').data('reading-index');
            var book = $(this).children("option:selected"). val();
            $.ajax({
                url: '/bookInfoRetriever.php',
                type: 'POST',
                dataType: "json",
                data: {
                    book: book
                }
            }).done(function(data) {
                updateChapterSelector(readingIdx, data);
            });
        });
        $('.chapterSelector').on('change', function() {
            var parentSelector = $(this).parents('.input-group');
            var readingIdx = parentSelector.data('reading-index');
            var book = parentSelector.find('.bookSelector').children("option:selected"). val();
            var chapter = $(this).children("option:selected"). val();
            // var book = $(this).children("option:selected"). val();
            $.ajax({
                url: '/bookInfoRetriever.php',
                type: 'POST',
                dataType: "json",
                data: {
                    book: book,
                    chapter: chapter
                }
            }).done(function(data) {
                updateSegmentSelector(readingIdx, data);
            });
        });
        //$('.newReadingSelector').on('click', function() {
        //    var holder = $(this).data('target');
        //    $('#' + holder).append("" +
        //        "<div class=\"input-group input-group-sm\">" +
        //        "   <span class=\"input-group-addon\">" +
        //        "       <i class=\"fa fa-close\"></i>" +
        //        "   </span>" +
        //        "   <select class=\"form-control\" name=\"worshipSongs[]\">" +
        //        <?php
        //        $files = scandir($OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'hymns', 0);
        //        foreach ($files as $filename) {
        //            if ($filename !== '.' && $filename !== '..') {
        //                echo '"       <option value=\"' . $filename . '\">' . $filename . '</option>" +';
        //            }
        //        }
        //        ?>
        //        "   </select>" +
        //        "</div>");
        //});
        function updateChapterSelector(readingIdx, list) {
            var selector = $("div").find("[data-reading-index='" + readingIdx + "']").find('.chapterSelector');
            selector.find("option").remove();
            // var selector = $("div[reading-index='" + readingIdx + "']").find('.chapterSelector');
            selector.append('<option value=""></value>');
            $.each(list, function(key, value) {
                selector.append('<option value="' + value + '">' + value + ' 章</value>');
            });
        }

        function updateSegmentSelector(readingIdx, list) {
            var parentSelector = $("div").find("[data-reading-index='" + readingIdx + "']");
            var startSelector = parentSelector.find('.segmentStartSelector');
            var endSelector = parentSelector.find('.segmentEndSelector');

            startSelector.find("option").remove();
            endSelector.find("option").remove();

            startSelector.append('<option value=""></value>');
            endSelector.append('<option value=""></value>');
            $.each(list, function(key, value) {
                startSelector.append('<option value="' + value + '">第 ' + value + ' 節</value>');
                endSelector.append('<option value="' + value + '">第 ' + value + ' 節</value>');
            });
        }
    });
</script>
</html>