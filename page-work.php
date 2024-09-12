<?php
/*
Template Name: Work Page
*/
get_header();
?>
<!----------------------------------
work
----------------------------------->
<h1>work一覧</h1>
<p>制作実績を紹介します<br>カスタムUIで作成した投稿rworkの記事を表示します。</p>
<!-- セクション -->
 <section class="contents-column">
    <div class="contents-column-body">
        <div class="post-area">
            <?php the_content(); ?>
        </div>
        <!-- 記事を配列にする -->
        <?php
        $args = array(
            'post_type' => 'rwork', //投稿タイプのスラッグを指定 
            'post_status' => 'publish', //公開済みの投稿を指定
            'posts_per_page' => -1, //投稿件数の指定(-1は全件取得)
        );
        // 配列にした記事を取得
        $the_query = new WP_Query($args); //記事を取得
        if ($the_query->have_posts()) {   //記事が取得できたか？
        ?>
            <div class="works-box">
                <ul class="works-lists">
                    <?php
                    while ($the_query->have_posts()) {
                        $the_query->the_post(); //ループのカウントアップ
                    ?>
                        <li class="works-list">
                            <a class="works-link" href="<?php the_permalink();//記事リンク ?>">
                                <div class="works-link-thumb">
                                    <img src="<?php the_post_thumbnail_url();//記事サムネイル ?>" alt="">
                                </div>
                                <div class="works-link-b0dy">
                                    <h3 class="works-link-title">
                                        <?php the_title();//記事タイトル ?>
                                    </h3>
                                    <p class="works-link-text">
                                        <?php echo get_the_excerpt(); //記事要約文 ?>
                                    </p>
                                </div>
                            </a>
                        </li>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        <?php
        }
        ?>
    </div>
 </section>
 <section class="contents-column">
    <div class="contents-column-body">
        <div class="post-area">
            <?php the_content(); ?>
        </div>
        <!-- 記事を配列にする -->
        <?php
        $args = array(
            'post_type' => 'work', //投稿タイプのスラッグを指定 
            'post_status' => 'publish', //公開済みの投稿を指定
            'posts_per_page' => -1, //投稿件数の指定(-1は全件取得)
        );
        // 配列にした記事を取得
        $the_query = new WP_Query($args); //記事を取得
        if ($the_query->have_posts()) {   //記事が取得できたか？
        ?>
            <div class="works-box">
                <ul class="works-lists">
                    <?php
                    while ($the_query->have_posts()) {
                        $the_query->the_post(); //ループのカウントアップ
                    ?>
                        <li class="works-list">
                            <a class="works-link" href="<?php the_permalink();//記事リンク ?>">

                                <div class="works-link-thumb">
                                    <?php 
                                    $work_img = get_field('work_img'); // カスタムフィールド 'work_img' から画像のURLを取得
                                    if( $work_img ) : // 画像があるか確認
                                    ?>
                                        <img src="<?php echo esc_url($work_img); ?>" alt="">
                                    <?php else : ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt=""> <!-- 画像がない場合はデフォルトのサムネイルを表示 -->
                                    <?php endif; ?>
                                </div>

                                <div class="works-link-b0dy">
                                    <h3 class="works-link-title">
                                        <?php 
                                        $work_day = get_field('work_day'); // カスタムフィールド 'work_day' 
                                        if( $work_day ) : // あるか確認
                                        ?>
                                            <?php echo esc_html($work_day); ?><!-- テキスト表示 -->
                                        <?php else : ?>
                                            制作実績 <!-- 文字列がない場合はデフォルトを表示 -->
                                        <?php endif; ?>
                                    </h3>

                                    <p class="works-link-text">
                                    <?php 
                                        $work_name = get_field('work_name'); // カスタムフィールド 'work_name' 
                                        if( $work_name ) : // あるか確認
                                        ?>
                                            <?php echo esc_html($work_name); ?><!-- テキスト表示 -->
                                        <?php else : ?>
                                            seisakumei <!-- 文字列がない場合はデフォルトを表示 -->
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </a>
                        </li>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        <?php
        }
        ?>
    </div>
 </section>

 <?php wp_reset_query(); ?>
 <?php get_footer(); ?>

