<?php
/**
 * T
 *
 *
 * 
 * 
 */
$header_old = Kirki::get_option('templ','pp_old_header');
$header_type = (Kirki::get_option('templ','pp_old_header') == true) ? 'old' : '' ;
$header_type = apply_filters('workscout_header_type',$header_type);
get_header($header_type); ?>
<?php $fancy_header = get_post_meta($post->ID, 'pp_transparent_header','true'); ?>



<!-- Intro Banner
================================================== -->
<div class="intro-banner dark-overlay"  <?php echo workscout_get_new_search_header();?>>

    <!-- Transparent Header Spacer -->
    <div class="transparent-header-spacer"></div>
        <div class="container">
        
        <!-- Intro Headline -->
        <div class="row">
            <div class="sixteen columns">
                <div class="banner-headline-alt">
                    <h3>
                        <strong><?php echo ('Найти работу');  ?></strong>
                        <span><?php echo ('поиск работы для студентов и размещения вакансий от');  ?> 
                             <?php if(get_option('pp_jobs_home_typed_status','enable') == 'enable') { ?> <div class="typed-words"></div><?php } ?>
                         </span>
                    </h3>
                </div>
            </div>
        </div>
          
        <?php 
            $search_elements = Kirki::get_option( 'templ', 'pp_job_search_elements',array('keywords','location')); 
            $el_nr = count($search_elements); 
        ?>
        <form method="GET"  class="workscout_main_search_form" action="<?php echo get_permalink(get_option('job_manager_jobs_page_id')); ?>">
        <!-- Search Bar -->
        <div class="row">
            <div class="sixteen columns  sc-jobs">
                <div class="intro-banner-search-form">
                    
                        <?php if (in_array("keywords", $search_elements)) : ?>
                            <!-- Search Field -->
                            <div class="intro-search-field">
                                <label for ="intro-keywords" class="field-title ripple-effect"><?php esc_html_e('Какую работу ты ищешь?','templ') ?></label>
                                <input id="intro-keywords" name="search_keywords" type="text" placeholder="<?php esc_attr_e( 'Я ищу...', 'templ' ); ?>">
                            </div>
                        <?php endif; ?>
                        
                        
                       

                        <!-- Button -->
                        <div class="intro-search-button">
                            <button class="button ripple-effect">
                                <span><?php esc_html_e('Поиск','templ') ?></span>
                                <i></i>
                            </button>
                        </div>

                </div>
            </div>
        </div>
        </form>


        <!-- Stats -->
        <?php if(Kirki::get_option('templ','pp_home_job_advanced')) {  ?>
        <div class="row">
            <div class="sixteen columns">
                <div class="adv-search-btn">
                    <span><?php esc_html_e('Нужны дополнительные параметры поиска?','templ') ?> </span>
                    <a href="<?php echo get_post_type_archive_link( 'job_listing' ) ?>"><?php esc_html_e('Расширенный поиск','templ') ?> <i class="la la-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <?php } ?>


    </div>
</div>

<?php
while ( have_posts() ) : the_post(); ?>
<!-- 960 Container -->
<div class="container page-container home-page-container">
    <article <?php post_class("sixteen columns"); ?>>
                <?php the_content(); ?>
    </article>
</div>
<?php endwhile; 

get_footer(); ?>