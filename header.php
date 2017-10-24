<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- links for css-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" /><!-- style.css を 読み込む-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css" />
        
        <!-- links for javascript -->
        <script src="javascript/main.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="javascript/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="javascript/jqueryColorPlugin.js" type="text/javascript"></script>
        
        <!-- import fonts -->
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- start header -->
        <div class="miniHeader">
            <div class="miniHeader__cacLogo"> <a href="<?php echo home_url(); ?>"></a></div>
            <div style="text-align: right; margin-right: 30px" >
                <a href="<?php echo home_url(); ?>" class="miniHeader__Link">ホーム</a>
                <a href="./html/about.html" class="miniHeader__Link">弊団体について</a>
                <a href="./html/project.html" class="miniHeader__Link">プロジェクト</a>
                <a href="./html/announce.html" class="miniHeader__Link">告知</a>
                <a href="./html/diary.html" class="miniHeader__Link">ダイアリー</a>
                <a href="./html/media.html" class="miniHeader__Link">メディア</a>
                <a href="./html/link.html" class="miniHeader__Link">リンク</a>
            </div>
        </div>
        <div class="header">
            <div class="header__cacDiscription">京都産業大学　文化団体連盟　電子計算機応用部</div>
            <div class="header__cacLogo"></div>
            <div style="width: 100%; text-align: center;" >
                <a href="<?php echo home_url(); ?>" class="header__Link">ホーム</a>
                <a href="./html/about.html" class="header__Link">弊団体について</a>
                <a href="./html/project.html" class="header__Link">プロジェクト</a>
                <a href="./html/announce.html" class="header__Link">告知</a>
                <a href="./html/diary.html" class="header__Link">ダイアリー</a>
                <a href="./html/media.html" class="header__Link">メディア</a>
                <a href="./html/link.html" class="header__Link">リンク</a>
            </div>
        </div>