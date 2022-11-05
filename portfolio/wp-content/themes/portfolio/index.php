<? get_header() ?>
<? global $post ?>

  <section class="preview my-0 bg-dark_color">
    <div class="container-lg h-100">
      <div class="d-flex align-items-center h-100 w-100">
        <div class="preview-card mx-auto">
          <div class="bg-dark_color py-5 px-sm-5 px-3 text-center">
            <h1 class="title-1 mb-sm-5 mb-3">FULL-STACK WEB DEVELOPER</h1>
            <h2 class="m-0">
              Меня зовут Артем, я веб-разработчик.<br />Я занимаюсь
              разработкой и дизайном различного рода сайтов.
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>
    
  <!-- offers start -->
    <?
      $offers = get_posts( array(
        'numberposts' => 0,
        'post_type'   => 'offers'
      ) );

      if($offers):
    ?>
      <section class="services" id="services">
        <div class="container-lg" data-aos="fade-up" data-aos-duration="600">
          <h2 class="title-2 text-center mb-sm-5 mb-4">
            Что я могу вам предложить?
          </h2>
          <div class="row">
            <?
              foreach( $offers as $post ){
                setup_postdata( $post );
                ?>
                  <div class="col-md-4 col-6 services-card text-center mx-auto mb-4">
                    <div class="services-card-wrap bg-dark_color p-sm-5 py-3 px-2">
                      <div class="services-card-icon p-2 mx-auto mb-sm-4 mb-3">
                      <? if ( has_post_thumbnail()): ?>
                        <? the_post_thumbnail( 'thumbnails_min', 'alt='.get_the_title() ); ?>
                      <? else: ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" fill="white" class="bi bi-images" viewBox="0 0 16 16">
                          <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                          <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                        </svg>
                      <? endif; ?>
                      </div>
                      <h3 class="m-0">
                        <? the_title() ?>
                      </h3>
                    </div>
                  </div>
                <?
              }
            ?>
          </div>
        </div>
      </section>
    <?
      endif;
      wp_reset_postdata();
    ?>
  <!-- offers end -->

  <!-- portfolio start -->
    <?
      $portfolio = get_posts( array(
        'numberposts' => 0,
        'post_type'   => 'portfolio'
      ) );

      if($portfolio):
    ?>
      <section class="portfolio" id="portfolio">
        <div class="container-lg" data-aos="fade-up" data-aos-duration="600">
          <h2 class="title-2 text-center mb-sm-5 mb-4">Портфолио</h2>
          <div class="row">
            <?
              foreach( $portfolio as $post ){
                setup_postdata( $post );
                ?>
                  <div class="col-md-4 col-6 portfolio-card mx-auto mb-4">
                    <button type="button" class="portfolio-card-btn p-5 w-100" data-bs-toggle="modal" data-bs-target="#modal_<? the_id() ?>">
                      <div class="adaptiv_pic round-pic">
                        <? if ( has_post_thumbnail()): ?>
                          <? the_post_thumbnail( 'thumbnails_medium', 'alt='.get_the_title() )?>
                        <? endif; ?>
                      </div>
                      <h3 class="portfolio-card-title mt-5"><? the_title() ?></h3>
                    </button>
                  </div>
                <?
              }
            ?>
          </div>
        </div>
      </section>
    <?
      endif;
      wp_reset_postdata();
    ?>
  <!-- portfolio end -->

  <!-- skills start -->
    <?
      $skills = get_posts( array(
        'numberposts' => 0,
        'post_type'   => 'skills'
      ) );
      
      if($skills):
    ?>
      <section class="skills" id="skills">
        <div class="container-lg" data-aos="fade-up" data-aos-duration="600">
          <h2 class="title-2 text-center mb-sm-5 mb-4">Навыки</h2>
          <div class="carousel row" data-flickity='{ "groupCells": true, "pageDots": false }'>
            <?
              foreach( $skills as $post ){
                setup_postdata( $post );
            ?>
                  <div class="col-sm-2 col-3 carousel-cell mx-4">
                    <? if ( has_post_thumbnail()): ?>
                      <div class="adaptiv_pic">
                        <? the_post_thumbnail( 'thumbnails_medium', 'alt='.get_the_title() ); ?>
                      </div>
                    <? else: ?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" fill="white" class="bi bi-images" viewBox="0 0 16 16">
                        <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                      </svg>
                    <? endif; ?>
                  </div>
                <?
              }
            ?>
          </div>
        </div>
        </section>
    <?
      endif;
      wp_reset_postdata();
    ?>
  <!-- skills end -->

  <!-- about_me start -->
    <?
        $about_me = get_posts( array(
          'numberposts' => 0,
          'post_type'   => 'about_me'
        ) );
        
        if($about_me):
    ?>
      <section class="about_me" id="about_me">
        <div class="container-lg" data-aos="fade-up" data-aos-duration="600">
          <h2 class="title-2 text-center mb-sm-5 mb-4">Обо мне</h2>
          <div class="row">
            <div class="col-md-4 d-none d-md-block">
              <div class="about_me-wrap_img">
                <picture
                  ><source srcset="./img/about_me.webp" type="image/webp" />
                  <img src="./img/about_me.png" alt=""
                /></picture>
              </div>
            </div>
            <ul class="col-md-8 col-12">
              <?
                foreach( $about_me as $post ){
                  setup_postdata( $post );
              ?>
                <li class="title-about_me mb-3">
                  <? the_content() ?>
                </li>
              <?
                }
              ?>
            </ul>
          </div>
        </div>
      </section>
    <?
      endif;
      wp_reset_postdata();
    ?>
  <!-- about_me end -->

  <!-- modal portfolio start -->
    <?
      foreach( $portfolio as $post ){
        setup_postdata( $post );
        ?>
          <div class="modal fade" id="modal_<? the_id() ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog m-0 mx-auto">
              <div class="modal-content p-md-5 p-sm-4 p-3">
                <div class="adaptiv_pic">
                  <?
                    if(get_field('detailed_pic')):
                      $medium_array = image_downsize( get_field('detailed_pic') , 'large' );
                      $medium_path = $medium_array[0];
                  ?>
                  <img src="<?=$medium_path ?>" alt="<? the_title() ?>"/>
                  <?endif;?>
                </div>
                <div class="description p-4">
                  <h3 class="title-2 mb-2">
                    <a href="<? the_field('link_to_project') ?>" target="_blank">
                      <? the_field('link_to_project') ?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(240, 240, 240)" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                      </svg
                    ></a>
                  </h3>
                  <div>
                    <? the_content() ?>
                  </div>
                </div>
                <button type="button" class="modal-close p-0" data-bs-dismiss="modal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(170, 170, 170)" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        <?
      }

      wp_reset_postdata();
    ?>
  <!-- modal portfolio end -->

<? get_footer() ?>