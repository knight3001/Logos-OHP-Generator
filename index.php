<?php
$OHPFolder = __DIR__ . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR;
include_once $OHPFolder . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
function uuidv4()
{
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        random_int( 0, 0xffff ), random_int( 0, 0xffff ),

        // 16 bits for "time_mid"
        random_int( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        random_int( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        random_int( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        random_int( 0, 0xffff ), random_int( 0, 0xffff ), random_int( 0, 0xffff )
    );
}
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
        <form role="form" id="ohpContainer" class="ohpContainer" target="_blank" action="/generate.php" method="post">
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                    <div class="box box-primary">-->
<!--                        <div class="box-header with-border">-->
<!--                            <div class="input-group input-group-sm">-->
<!--                                <select></select>-->
<!--                                <span class="input-group-btn">-->
<!--                                    <button type="button" class="btn btn-info btn-flat">存檔</button>-->
<!--                                </span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="box-body">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>早禱會</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat newWorshipBtn" data-target="morningPrayer">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="morningPrayer">
                            <input type="hidden" name="morningPrayer[type]" value="worship">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>敬拜讚美</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat newWorshipBtn" data-target="worship">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="worship">
                            <input type="hidden" name="worship[type]" value="worship">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>關手機</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="Opening[type]" value="opening">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>主日 - 唱詩 (1)</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat newHymnBtn" data-target="hymn1">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="hymn1">
                            <input type="hidden" name="hymn1[type]" value="hymn">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>主日 - 讀經</h4>
                                <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat newReadingBtn" data-target="reading">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="reading">
                            <input type="hidden" name="reading[type]" value="reading">
						</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>主日 - 唱詩 (2)</h4>
                                <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat newHymnBtn" data-target="hymn2">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="hymn2">
                            <input type="hidden" name="hymn2[type]" value="hymn">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>認信</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="apostlesCreed[type]" value="apostlesCreed">
                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>主日 - 獻詩</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="groupWorship[type]" value="groupWorship">
                            <div class="form-group">
                                <input type="text" class="form-control" id="song" name="groupWorship[collections][song]" placeholder="詩歌">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="group" name="groupWorship[collections][group]" placeholder="團契/牧區">
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
                                <h4>主日 - 講道</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="preach[type]" value="preach">
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name="preach[title]" placeholder="證道主題">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="preacher" name="preach[preacher]" placeholder="講道牧師">
                            </div>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <div class="input-group input-group-sm">
                                        <h5>序言</h5>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat newReadingBtn" data-target="preface">新增</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="box-body" id="preface" data-id="preach[preface]">
                                </div>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <div class="input-group input-group-sm">
                                        <h5>證道大鋼</h5>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat newOutlineBtn" data-target="outlines">新增</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="box-body" id="outlines">
                                </div>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <div class="input-group input-group-sm">
                                        <h5>結論</h5>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat newReadingBtn" data-target="conclusion">新增</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="box-body" id="conclusion" data-id="preach[conclusion]">
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
                                <h4>奉獻</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="tithing[type]" value="tithing">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>新朋友</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="visitor[type]" value="visitor">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>H. 報告</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat newReportBtn" data-target="report">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="report">
                            <input type="hidden" name="report[type]" value="report">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>I. 代禱</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat newIntercessionBtn" data-target="intercession">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="intercession">
                            <input type="hidden" name="intercession[type]" value="intercession">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>J. 上周奉獻</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="dedication[type]" value="dedication">
                            <div class="form-group">
                                <input type="text" class="form-control" name="dedication[summary]" placeholder="奉獻統計">
                            </div>
                            <div class="form-group">
                                <?php $id = uuidv4(); ?>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][type]" placeholder="類別">
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][sum]" placeholder="統計">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $id = uuidv4(); ?>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][type]" placeholder="類別">
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][sum]" placeholder="統計">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $id = uuidv4(); ?>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][type]" placeholder="類別">
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][sum]" placeholder="統計">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $id = uuidv4(); ?>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][type]" placeholder="類別">
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][sum]" placeholder="統計">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $id = uuidv4(); ?>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][type]" placeholder="類別">
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][sum]" placeholder="統計">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $id = uuidv4(); ?>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][type]" placeholder="類別">
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="dedication[collections][<?=$id;?>][sum]" placeholder="統計">
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
                                <h4>K. 金句</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="weeklyVerse[type]" value="weeklyVerse">
                            <div class="form-group">
                                <input type="text" class="form-control" name="weeklyVerse[collections][verse]" placeholder="經文">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="weeklyVerse[collections][chapter]" placeholder="經文出處">
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
                                <h4>L. 唱詩 (3)</h4>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat newHymnBtn" data-target="hymn3">新增</button>
                                </span>
                            </div>
                        </div>
                        <div class="box-body" id="hymn3">
                            <input type="hidden" name="hymn3[type]" value="hymn">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>主禱文</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="lordsPrayer[type]" value="lordsPrayer">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="input-group input-group-sm">
                                <h4>結束</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="ending[type]" value="ending">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span class="input-group-btn">
                        <input type="submit" class="btn btn-info btn-flat" value="OHP!">
                    </span>
                </div>
                <div class="col-md-3">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="useLogo" value="1">使用 Logo
                        </label>
                    </span>
                </div>
            </div>
        </form>
    </section>
</div>
</body>
<script src="assets/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function() {
		$(document).on('click', '.newReportBtn', function() {
            var id = uuidv4();
            var holder = $(this).data('target');
            $('#' + holder).append("" +
                "<div class=\"input-group input-group-sm rootGroup\">" +
                "   <span class=\"input-group-addon deleteBtn\">" +
                "       <i class=\"fa fa-close\"></i>" +
                "   </span>" +
				"   <input type=\"text\" class=\"form-control\" name=\"" + holder + "[collections]["+id+"]\" placeholder=\"\">" +
				"</div>"
			);
		});

		$(document).on('click', '.newIntercessionBtn', function() {
            var id = uuidv4();
            var holder = $(this).data('target');
            $('#' + holder).append("" +
                "<div class=\"input-group input-group-sm rootGroup\">" +
                "   <span class=\"input-group-addon deleteBtn\">" +
                "       <i class=\"fa fa-close\"></i>" +
                "   </span>" +
				"   <input type=\"text\" class=\"form-control\" name=\"" + holder + "[collections]["+id+"]\" placeholder=\"\">" +
				"</div>"
			);
		});

		$(document).on('click', '.deleteBtn', function() {
			$(this).parents('.rootGroup').remove();
		});

		$(document).on('click', '.newWorshipBtn', function() {
            var id = uuidv4();
            var holder = $(this).data('target');
            $('#' + holder).append("" +
                "<div class=\"input-group input-group-sm rootGroup\">" +
                "   <span class=\"input-group-addon deleteBtn\">" +
                "       <i class=\"fa fa-close\"></i>" +
                "   </span>" +
                "   <select class=\"form-control\" name=\"" + holder + "[collections]["+id+"]\">" +
                "			<option value=\"\"></option>" +
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

		$(document).on('click', '.newHymnBtn', function() {
            var id = uuidv4();
            var holder = $(this).data('target');
            $('#' + holder).append("" +
                "<div class=\"input-group input-group-sm rootGroup\">" +
                "   <span class=\"input-group-addon deleteBtn\">" +
                "       <i class=\"fa fa-close\"></i>" +
                "   </span>" +
                "   <select class=\"form-control\" name=\"" + holder + "[collections]["+id+"]\">" +
                "			<option value=\"\"></option>" +
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

		$(document).on('click', '.newReadingBtn', function() {
		    var id = uuidv4();
            var holder = $(this).data('target');
            var nameVal = $('#' + holder).data('id');
            if (nameVal == undefined) {
                nameVal = holder;
            }
            $('#' + holder).append("" +
				"<div class=\"input-group input-group-sm rootGroup\">" +
				"	<span class=\"input-group-addon deleteBtn\">" +
				"		<i class=\"fa fa-close\"></i>" +
				"	</span>" +
				"	<div class=\"col-md-3\">" +
				"		<label>卷</label>" +
				"		<select class=\"form-control bookSelector\" name=\"" + nameVal + "[collections]["+id+"][book]\">" +
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
				"		<select class=\"form-control chapterSelector\" name=\""+nameVal+"[collections]["+id+"][chapter]\">" +
				"		</select>" +
				"	</div>" +
				"	<div class=\"col-md-3\">" +
				"		<label>開始</label>" +
				"		<select class=\"form-control segmentStartSelector\" name=\""+nameVal+"[collections]["+id+"][start]\">" +
				"		</select>" +
				"	</div>" +
				"	<div class=\"col-md-3\">" +
				"		<label>結束</label>" +
				"		<select class=\"form-control segmentEndSelector\" name=\""+nameVal+"[collections]["+id+"][end]\">" +
				"		</select>" +
				"	</div>" +
				"</div>"
			);
		});

		$(document).on('click', '.newOutlineBtn', function() {
		    var id = uuidv4();
		    var outlineId = uuidv4();
            var holder = $(this).data('target');
            $('#' + holder).append("" +
                "<div class=\"box box-primary\">" +
                "<div class=\"box-header with-border\">" +
                "<div class=\"form-group\">" +
                "<input type=\"text\" class=\"form-control\" name=\"preach[outline]["+id+"][title]\" placeholder=\"大綱\">" +
                "</div>" +
                "<div class=\"input-group input-group-sm\">" +
                "<h6>讀經</h6>" +
                "<span class=\"input-group-btn\">" +
                "<button type=\"button\" class=\"btn btn-info btn-flat newReadingBtn\" data-target=\""+outlineId+"\">新增</button>" +
                "</span>" +
                "</div>" +
                "</div>" +
                "<div class=\"box-body\" id=\""+outlineId+"\" data-id=\"preach[outline]["+id+"]\">" +
                "</div>" +
                "</div>"
            );
        });

		$(document).on('change', '.bookSelector', function() {
            var rootGroup = $(this).parents('.rootGroup');
            var book = $(this).children("option:selected"). val();
            $.ajax({
                url: '/bibleRetriever.php',
                type: 'get',
                dataType: "json",
                data: {
                    book: book
                }
            }).done(function(data) {
                updateChapterSelector(rootGroup, data);
            });
        });

		$(document).on('change', '.chapterSelector', function() {
		    var rootGroup = $(this).parents('.rootGroup');
            var book = rootGroup.find('.bookSelector').children("option:selected"). val();
            var chapter = $(this).children("option:selected"). val();
            // var book = $(this).children("option:selected"). val();
            $.ajax({
                url: '/bibleRetriever.php',
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

        function uuidv4() {
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
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
                startSelector.append('<option value="' + value + '">第 ' + value + ' 節</value>');
                endSelector.append('<option value="' + value + '">第 ' + value + ' 節</value>');
            });
        }
    });
</script>
</html>