<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-jobtest
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="contact-form" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="list">
                                <ul>
                                    <li>&minus; как убедить клиента что вы эксперт </li>
                                    <li>&minus; как заставить менеджеров работать на результат? </li>
                                    <li>&minus; как построить систему продаж холодными  <span>звонками</span> </li>
                                    <li>&minus; как сделать так чтобы клиенты звонили сами? </li>
                                    <li>&minus; как написать кп, которое будет продавать? </li>
                                    <li>&minus; как как вернуть потеряных клиентов </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="contact-form-7">
                                <p class="contact-name-ask">оставьте заявку на бесплатный аудит вашего бизнеса</p>
                                <?php echo do_shortcode("[contact-form-7 id=\"148\" title=\"Form contact\"]"); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="facts">
                <div class="caption">
                    <p>несколько фактов о нас</p>
                </div>
                <div class="first-facts-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="facts-content-five-years">
                                    <div class="picture-five">
                                        <img src="<?php echo(get_template_directory_uri()); ?> /images/diagram.png">
                                    </div>
                                    <div class="text-left">
                                        <p>более 5 лет на рынке</p>
                                        <span>Более 5 лет на рынке на рынке бизнес-консалтинга</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="facts-content-consulting">
                                    <div class="picture-consulting">
                                        <img src="<?php echo(get_template_directory_uri()); ?> /images/ex.png">
                                    </div>
                                    <div class="text-right">
                                        <p>опытные консультанты</p>
                                        <span>более 5 лет на рынке на рынке бизнес-консалтинга</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="second-facts-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="facts-content-clients">
                                    <div class="picture-client">
                                        <img src="<?php echo(get_template_directory_uri()); ?> /images/client.png">
                                    </div>
                                    <div class="text-left">
                                        <p>более 350 довольных клиентов</p>
                                        <span>за время работы компании мы наладили работу или запустили с нуля более 350 бизнесов</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="facts-content-sale">
                                    <div class="picture-sale">
                                        <img src="<?php echo(get_template_directory_uri()); ?> /images/one.png">
                                    </div>
                                    <div class="text-right">
                                        <p>более 100 отделов продажи</p>
                                        <span>за время работы компании мы наладили работу или запустили с нуля более 350 бизнесов</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content-bg-city">
                <p>посмотрите видео</p>

                <div class="business-video">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <iframe class="video-one"  src="https://www.youtube.com/embed/MOo9iJ8RYWM" frameborder="0" allowfullscreen></iframe>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <iframe class="video-two"  src="https://www.youtube.com/embed/G0dzLanYW1E" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="news">
                <p class="title-news">новости</p>




                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                                <?php $myquery = new WP_Query('category_name = news&posts_per_page=4'); ?>
                                <?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>

                                <section class="featured">


                                        <?php the_post_thumbnail(); ?>
                                        <div class="right-part-news">
                                            <p><?php echo get_post_meta($post->ID, 'name', true); ?></p>
                                            <span><?php echo get_post_meta($post->ID, 'price', true); ?> </span>
                                            <a class="read-more" href="<?php the_permalink() ?>">Читать дальше</a>
                                        </div>



                                </section>

                                <?php endwhile; ?>
                         

                        </div>
                    </div>
                </div>
            </div>






                       <?php
                         $argc = array(
                             'post_type' => 'slides',
                             'orderby'   => 'menu_order',
                             'posts_per_page' => -1
                         );

                         $slides = new WP_Query( $argc );

                        if ( $slides->have_posts() ) : ?>

                        <div class="sertificat-slider">
                            <p>сертификаты</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="owl-carousel">

                                            <?php while ( $slides->have_posts() ) : $slides->the_post(); ?>

                                            <div class="slider-sertificat1" >
                                                <?php the_post_thumbnail( 'slides' ); ?>
                                            </div>



                                            <?php endwhile; ?>
                                        </div>

                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>

                            <p>получить наш тренинг</p>
                        </div>


            <div class="content-win-deal">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="picture-win-deal">
                                <img src="<?php echo(get_template_directory_uri()); ?> /images/win.png">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-order">
                                <p>как побеждать в переговорах</p>

                                <span class="first-span-order">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit.</span>

                                <span class="second-span-order">Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.</span>

                                    <?php echo do_shortcode("[contact-form-7 id=\"149\" title=\"Form contact 2\"]"); ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();?>
