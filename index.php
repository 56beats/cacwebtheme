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
            <!-- start post loop -->
            <div class="mainDiary__diary">
            	<div class="mainDiary__title">Diary</div>
            	<?php 
        		if( have_posts() ) :
        			while( have_posts() ) : the_post(); ?>
                <div class="mainDiary__diary--contents">
                    <div class="mainDiary__diary--logo">
                    	<?php if ( has_post_thumbnail() ): ?>
                    		<?php the_post_thumbnail(array(100,100)); ?>
                    	<?php else: ?>
                    		No Image
                    	<?php endif; ?>
                    </div>
                    <div class="mainDiary__diary--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="mainDiary__diary--sentence">
                    	<?php the_excerpt(); ?>
                    </div>
                    <div class="mainDiary__diary--separator"></div>
                </div>
          		<?php 
        			endwhile;
        		endif; ?>
                <div class="mainDiary__moreButton">more</div>
            </div>
            <!-- end post loop -->
            <div class="mainDiary__twitter">
                <div class="mainDiary__title">Twitter</div>
                
                <div class="mainDiary__moreButton">more</div>
            </div>
            
        </div>
<?php get_footer(); ?>