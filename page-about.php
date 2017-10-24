<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>
        <?php if( !is_home() ){ wp_title(' - ', true, 'right'); } ?>
        <?php bloginfo('name'); ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- links for css-->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" /><!-- style.css を 読み込む-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css" type="text/css" />
        
        <!-- links for javascript -->
        <script src="../javascript/main.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="../javascript/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="../javascript/jqueryColorPlugin.js" type="text/javascript"></script>
        
        <!-- import fonts -->
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
        
    </head>
    <body>
        <?php get_header(); ?>
        <div class="aboutBackgroundImage"></div>
        <div class="subPageHeader" style="background-color: rgba(255, 255, 255, 0.8);">
            <div class="subPageTitle" style="color: #545454;">
                弊団体について
            </div>
        </div>
        
        
        <div class="aboutHeadSentence">
            <div class="subPageSentence" style="color: #545454; top: 0px; font-weight: 300;">
                チームで開発してる
            </div>
        </div>
        
        
        <div class="aboutProfile">
            <div class="aboutProfile__title">
                <a class="aboutProfile__title--main">Profile</a> <a class="aboutProfile__title--sub">/団体情報</a>
            </div>
            <div class="aboutProfile__information">
                <div class="aboutProfile__information__leftField">
                    <div class="aboutProfile__information--cell" style="height: 70px;">
                        <div class="aboutProfile__information--title">
                            団体名称
                        </div>
                        <div class="aboutProfile__information--sentence">
                            京都産業大学<br>文化団体連盟所属 電子計算機応用部
                        </div>
                        <div class="aboutProfile__information--separator"></div>
                    </div>
                    
                    <div class="aboutProfile__information--cell" style="height: 730px;">
                        <div class="aboutProfile__information--title">
                            活動内容
                        </div>
                        <div class="aboutProfile__information--sentence">
                            ゲーム製作<br>
                            <p style="margin-left: 10px">
                                ・VirtualReality<br>
                                ・アクション<br>
                                ・横スクロール<br>
                                ・アドベンチャー<br>
                                ・スマホゲーム etc.
                            </p>
                            業務システム制作<br>
                            <p style="margin-left: 10px">
                                ・モバイルアプリ<br>
                                ・ウェブアプリ<br>
                                ・マイコンシステム<br>
                                ・クロスプラットフォームアプリ etc.
                            </p>
                            イラストレーション<br>
                            <p style="margin-left: 10px">
                                ・背景<br>
                                ・萌絵<br>
                                ・ドット絵 etc.
                            </p>
                            グラフィックデザイン<br>
                            <p style="margin-left: 10px">
                                ・3DCG<br>
                                ・ポスターデザイン<br>
                                ・ロゴデザイン<br>
                                ・ウェブデザイン<br>
                                ・映像 etc.
                            </p>
                            ミュージック制作<br>
                            <p style="margin-left: 10px">
                                ・楽曲<br>
                                ・効果音 etc.
                            </p>
                        </div>
                        <div class="aboutProfile__information--separator"></div>
                    </div>
                </div>
                <div class="aboutProfile__information__rightField">
                    
                    <div class="aboutProfile__information--cell" style="height: 50px;">
                        <div class="aboutProfile__information--title">
                            設立
                        </div>
                        <div class="aboutProfile__information--sentence">
                            1965年4月
                        </div>
                        <div class="aboutProfile__information--separator"></div>
                    </div>
                    <div class="aboutProfile__information--cell" style="height: 90px;">
                        <div class="aboutProfile__information--title">
                            活動時間･場所
                        </div>
                        <div class="aboutProfile__information--sentence">
                            毎週水曜日 13時15分～14時45分 最大20時まで<br>
                            毎週木曜日 16時45分～18時15分 最大20時まで<br>
                            10号館2F 10205情報処理教室
                        </div>
                        <div class="aboutProfile__information--separator"></div>
                    </div>
                    <div class="aboutProfile__information--cell" style="height: 70px;">
                        <div class="aboutProfile__information--title">
                            Email
                        </div>
                        <div class="aboutProfile__information--sentence">
                            ksu.cac.master[]gmail.com<br>
                            （[]を@に読替）
                        </div>
                        <div class="aboutProfile__information--separator"></div>
                    </div>
                    <div class="aboutProfile__information--cell" style="height: 590px;">
                        <div class="aboutProfile__information--title">
                            所在地 /BOX
                        </div>
                        <div class="aboutProfile__information--sentence">
                            京都産業大学 7号館 721号室
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1372.9636644912239!2d135.75846449493372!3d35.06982978887928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001a7dd7f2840af%3A0x7abbf5c27c908791!2z44CSNjAzLTgwNDcg5Lqs6YO95bqc5Lqs6YO95biC5YyX5Yy65LiK6LOA6IyC5pys5bGxIO-8l-WPt-mkqA!5e0!3m2!1sja!2sjp!4v1495968576950" width="500" height="530" frameborder="0" style="position: absolute; border:0; top: 50px; left: 0px" allowfullscreen></iframe>
                        <div class="aboutProfile__information--separator"></div>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php get_footer(); ?>
    </body>
</html>
