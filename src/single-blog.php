<?php get_header(); ?>
<main id="single-blog">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">ブログ</span>
      <span class="en">BLOG</span>
    </h1>
  </section>
  
  <?php get_template_part('lib/breadcrumb'); ?>

  <section class="single-blog-content">
    <div class="l-container">
      <article class="single-blog-content__outer">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <header>
          <div class="single-blog__time"><time><?php the_date("Y年n月j日"); ?></time></div>
          <h1 class="single-blog__heading"><?php the_title() ?></h1>
          <div class="single-blog-category">
            <?php $custom_post_tag = 'blog-category';
            $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
            if(!empty($custom_post_tag_terms)){
              if(!is_wp_error( $custom_post_tag_terms )){
                foreach($custom_post_tag_terms as $term){
                  $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                  $tag_term_name = $term->name;
                  echo '<div class="single-blog-category__item"><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></div>';
                }
              }
            }
            ?>
          </div>
        </header>

        <div class="postarea">
          <?php the_content() ?>
        </div>
        <?php endwhile; ?>
      </article>

      <div class="archive-blog__function">
        <div class="archive-blog__pager">
          <div class="m-link"><a href="<?php echo home_url(); ?>/blog/"><span>ブログ一覧へ</span></a></div>

          <div class="paging">
            <div class="paging-prev">
              <?php $next_post = get_next_post();  
              if (!empty( $next_post )):  
              echo '<a href="',get_permalink( $next_post->ID ),'"><span class="arrow-left"></span></a>';  
              endif; ?>
            </div>
            <div class="paging-next">
              <?php $prev_poxt = get_previous_post();  
              if (!empty( $prev_poxt  )):  
              echo '<a href="',get_permalink( $prev_poxt->ID ),'"><span class="arrow-right"></span></a>';  
              endif; ?>
            </div>
          </div>
        </div>
        
        <div class="archive-blog-term">
          <h4 class="archive-blog-heading">CATEGORY</h4>
          <div class="archive-blog-term-list">
            <?php
            $terms = get_terms('blog-category');
            foreach ( $terms as $term ) {
              echo '<div class="archive-blog-term-list__item"><a href="'.get_term_link($term).'">'.$term->name.'</a></div>';
            }
            ?>
          </div>
        </div>
        
        <div class="archive-blog-monthly">
          <h4 class="archive-blog-heading">ARCHIVE</h4>
          <ul>
            <?php wp_get_archives('type=monthly&post_type=blog&show_post_count=1&limit=12'); ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
