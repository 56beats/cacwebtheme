<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>C.A.C. | 京都産業大学 文化団体連盟所属 電子計算機応用部</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- links for css-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" /><!-- style.css を 読み込む-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" type="text/css" />
        
        <!-- links for javascript -->
        <script src="javascript/main.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="javascript/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="javascript/jqueryColorPlugin.js" type="text/javascript"></script>
        
        <!-- import fonts -->
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        
        
    </head>
	<body>
		<?php get_header(); ?>

	<div class="mainTitle">
            <div class="mainTitle__titleEnglish">Beyond your Creation</div>
       	    <div class="mainTitle__titleJapanese">「作るだけ」で、終わらせない</div>
    </div>

    <div class="mainMenu">
            <div class="mainMenu__aboutLink" onmouseout="hoverMainMenu('about', false);" onmouseover="hoverMainMenu('about', true);">
                <div class="mainMenu__imageLeft" id="mainMenu__aboutLink" style="background-image: url('img/top/mainMenu_about.png');"><div class="mainMenu__squareLeft" style="background-color: #bedf69;"></div></div>
                <div class="mainMenu__discriptionRight" style="background-color: #bedf69;">
                    <div class="mainMenu__discriptionLogo" style="background-image: url('img/top/mainMenu_logo_弊団体について.png');"></div>
                    <div class="mainMenu__discriptionTitle">弊団体について</div>
                    <div class="mainMenu__discriptionSentence">弊団体についての説明をご覧いただけます</div>
                    <div class="mainMenu__discriptionMoreButton" id="mainMenu__aboutLinkMoreButton">more</div>
                </div>
            </div>
            
            <div class="mainMenu__projectLink" onmouseout="hoverMainMenu('project', false);" onmouseover="hoverMainMenu('project', true);">
                <div class="mainMenu__imageRight" id="mainMenu__projectLink" style="background-image: url('img/top/mainMenu_project.png');"></div>
                <div class="mainMenu__discriptionLeft" style="background-color: #69abdf;">
                    <div class="mainMenu__discriptionLogo" style="background-image: url('img/top/mainMenu_logo_プロジェクト.png');"></div>
                    <div class="mainMenu__discriptionTitle">プロジェクト</div>
                    <div class="mainMenu__discriptionSentence">弊団体の活動について紹介しています</div>
                    <div class="mainMenu__discriptionMoreButton" id="mainMenu__projectLinkMoreButton">more</div>
                    <div class="mainMenu__squareRight" style="background-color: #69abdf;"></div>
                </div>
            </div>
            
            <div class="mainMenu__diaryLink" onmouseout="hoverMainMenu('diary', false);" onmouseover="hoverMainMenu('diary', true);">
                <div class="mainMenu__imageLeft" id="mainMenu__diaryLink" style="background-image: url('img/top/mainMenu_diary.png');"><div class="mainMenu__squareLeft" style="background-color: #d069df;"></div></div>
                <div class="mainMenu__discriptionRight" style="background-color: #d069df;">
                    <div class="mainMenu__discriptionLogo" style="background-image: url('img/top/mainMenu_logo_ダイアリー.png');"></div>
                    <div class="mainMenu__discriptionTitle">ダイアリー</div>
                    <div class="mainMenu__discriptionSentence">弊団体の普段の様子などを日記形式でご覧いただけます</div>
                    <div class="mainMenu__discriptionMoreButton" id="mainMenu__diaryLinkMoreButton">more</div>
                </div>
            </div>
        </div>
        
        <div class="mainDiary">
            <div class="mainDiary__separater"></div>
            <div class="mainDiary__diary">
                <div class="mainDiary__title">Diary</div>
                <div class="mainDiary__diary--contents">
                    <div class="mainDiary__diary--logo">a</div>
                    <div class="mainDiary__diary--title">タイトル</div>
                    <div class="mainDiary__diary--sentence">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div class="mainDiary__diary--separator"></div>
                </div>
                <div class="mainDiary__diary--contents">
                    <div class="mainDiary__diary--logo">a</div>
                    <div class="mainDiary__diary--title">タイトル</div>
                    <div class="mainDiary__diary--sentence">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div class="mainDiary__diary--separator"></div>
                </div>
                <div class="mainDiary__diary--contents">
                    <div class="mainDiary__diary--logo">a</div>
                    <div class="mainDiary__diary--title">タイトル</div>
                    <div class="mainDiary__diary--sentence">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                </div>
                
                <div class="mainDiary__moreButton">more</div>
            </div>
            <div class="mainDiary__twitter">
                <div class="mainDiary__title">Twitter</div>
                
                <div class="mainDiary__moreButton">more</div>
            </div>
            
        </div>
	<?php get_footer(); ?>
	</body>
</html>