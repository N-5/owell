<?php get_header(); ?>

<main id="archive-blog">
  <section class="page-title">
    <h1 class="page-title__heading">
      <span class="jp">ブログ</span>
      <span class="en">BLOG</span>
    </h1>
  </section>

  <?php get_template_part('lib/breadcrumb'); ?>

  <section class="archive-blog-list">
    <div class="l-container">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <article class="archive-blog-list__item">
        <a href="<?php the_permalink() ?>">
          <div class="archive-blog-list__thumbnail">
            <div class="thumbnail">
              <?php if (has_post_thumbnail()) : ?>
              <?php $title= get_the_title(); the_post_thumbnail('custom_medium' , array( 'alt' =>$title, 'title' => $title)); ?>
              <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-news__thumbnail.jpg" alt="NoImage" />
              <?php endif ; ?>
            </div>
            <h3 class="archive-blog-list__heading"><?php the_title(); ?></h3>
          </div>
          <div class="archive-blog-list__detail">
            <header><h3 class="archive-blog-list__heading"><?php the_title(); ?></h3></header>
            <div class="archive-blog-list__text">
              <?php
              if(mb_strlen($post->post_content, 'UTF-8')>100){
                $content= mb_substr($post->post_content, 0, 100, 'UTF-8');
                echo $content.'...';
              }else{
                echo $post->post_content;
              }
              ?>
            </div>
            <div class="archive-blog-list__category">
              <?php $custom_post_tag = 'blog-category';
              $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
              if(!empty($custom_post_tag_terms)){
                if(!is_wp_error( $custom_post_tag_terms )){
                  foreach($custom_post_tag_terms as $term){
                    $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                    $tag_term_name = $term->name;
                    echo '<div class="archive-blog-list__category__item"">'.$tag_term_name.'</div>';
                  }
                }
              }
              ?>
            </div>
            <div class="archive-blog-list__time"><time><?php the_date("Y年n月j日"); ?></time></div>
          </div>
        </a>
      </article>
      <?php endwhile; ?>

      <div class="pagination">
        <?php global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
          $paginate_format = '';
          $paginate_base = add_query_arg('paged', '%#%');
        } else {
          $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/', 'paged');;
          $paginate_base .= '%_%';
        }
        echo paginate_links( array(
          'base' => $paginate_base,
          'format' => $paginate_format,
          'total' => $wp_query->max_num_pages,
          'mid_size' => 5,
          'current' => ($paged ? $paged : 1),
        )); ?>
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
  </section>
</main>

<?php get_footer(); ?>
