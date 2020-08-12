<?php $__env->startSection('content'); ?>
  <div class="page-home">
    <section id="top" class="section">
      <div class="hero d-md-none" style="background-image:url('<?php echo $hero_fields->hero_mobile; ?>');">
        <?php echo $hero_fields->hero_text; ?>

      </div>
      <div class="hero d-none d-md-flex" style="background-image:url('<?php echo $hero_fields->hero_desktop; ?>');">
        <?php echo $hero_fields->hero_text; ?>

      </div>
    </section>
    <section id="logos" class="section">
      <div class="container">
        <div class="card-container my-3">
          <div class="card card-logo"><img src="/wp-content/themes/theme_purdy/img/purdy_logo.svg" alt="Purdy Logo"></div>
          <div class="card card-logo"><img src="/wp-content/themes/theme_purdy/img/logo_purdy_mobility.png" alt="Purdy Mobility Logo"></div>
          <div class="card card-logo"><img src="/wp-content/themes/theme_purdy/img/automotriz_logo.svg" alt="Automotriz Logo"></div>
        </div>
      </div>
    </section>
    <?php if($social_fields->brands_logos_active): ?>
      <section id="brands">
        <div class="container">
          <h3>Nuestras marcas</h3>
          <p>Seleccione la marca de su interés para accesar el sitio web correspondiente.</p>
          <ul class="brands-logos">
            <?php $__currentLoopData = $social_fields->brands_logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="brand-item"><img alt="<?php echo $brand['brand_name']; ?>" src="<?php echo $brand['brand_logo']; ?>"></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>  
        </div>
      </section>
    <?php endif; ?>
    <section id="services" class="section">
      <div class="container">
        <h2><span class="text-red">01</span> <?php echo $services_fields->services_title; ?></h2>
        <p><?php echo $services_fields->services_description; ?></p>
        <div class="card-container my-3"> 
            <?php $__currentLoopData = $services_loop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="card card-service">
                  <div class="card-icon">
                    <img src="<?php echo $services_item['icon']; ?>" aria-hidden="true">
                  </div>
                  <div class="card-content">
                    <h3><?php echo $services_item['title']; ?></h3>
                    <p><?php echo $services_item['content']; ?></p>
                    <a href="#" data-toggle="modal" data-target="#ServicesModal" class="button button-arrow idx" data-index="<?php echo $loop->index; ?>">
                      <?php _e("Ver más") ?>
                      <i class="icn icn-1 icn-chevron"></i></a>
                  </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div>
      </div>
    </section>
    <div class="section" id="social">
    <section class="bg-blue py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <h2 class="text-white"><span class="text-red">02</span> <?php echo $social_fields->social_title; ?></h2>
              <p class="text-white"><?php echo $social_fields->social_description; ?></p>
               <?php if(get_locale() == "es_CR"): ?> <a class="button button-primary button-sustainability" href="/<?php _e('Sostenibilidad') ?>"><?php _e('Ver más') ?></a> <?php endif; ?>
          </div>
          <div class="col-md-6">
            <a class="video-container" href="#VideoModal" data-toggle="modal" data-target="#VideoModal">
                <img class="w-100" src="<?php echo $social_fields->social_video_thumbnail; ?>" alt="Video thumbnail">
                <div class="play-btn"><i class="icn icn-2 icn-play"></i></div>
            </a>
          </div>
        </div>
        <div class="social-slider">
            <div class="slider-multi">
                <?php $__currentLoopData = $social_axis_loop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="slider-item">
                    <div class="card card-social mb-2">
                        <div class="card-thumbnail">
                            <?php echo $social_item['thumbnail']; ?>

                        </div>
                        <h4 class="text-white my-3"><?php echo $social_item['title']; ?></h4>
                        <p class="text-white"><?php echo strip_tags($social_item['content']); ?></p>
                        <div class="collapse" id="social-collapse<?php echo $loop->index; ?>">
                          <h5 class="text-white my-2">
                              <?php _e("Objetivos") ?>
                          </h5>
                          <ul class="text-white mb-5 list-goals">
                            <?php $__currentLoopData = $social_item['objectives']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><?php echo $o['objective']; ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                        </div>
                        <a data-toggle="collapse" href="#social-collapse<?php echo $loop->index; ?>" role="button" aria-expanded="false" aria-controls="social-collapse<?php echo $loop->index; ?>" class="button button-arrow text-white expand">
                          <span><?php _e("Ver más") ?></span> 
                          <i class="icn icn-1 icn-chevron"></i></a>
                      </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h3><?php _e("Certificaciones") ?></h3>
        <ul class="certification-logos">
          <?php $__currentLoopData = $social_fields->certification_logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="certification-item"><img alt="<?php echo $logo['certification_name']; ?>" src="<?php echo $logo['certification_logo']; ?>"></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>  
      </div>
    </section>
    </div>
    <section id="people" class="section">
        <div class="container">
          <h2><span class="text-red">03</span> <?php echo $people_fields->people_title; ?></h2>
        
        <div class="row">
          <div class="col-md-6">
              <p><?php echo $people_fields->people_description; ?></p>
              <ul class="skills-list">
                <?php $__currentLoopData = $people_fields->people_skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li> <img src="<?php echo $skill['skill_icon']; ?>" aria-hidden="true"><?php echo $skill['skill_name']; ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
          <div class="col-md-6">
            <img class="w-100" src="<?php echo $people_fields->people_image; ?>" alt="Photo of people standing up">
          </div>
        </div>
      </div>
    </section>   
    <section id="locations" class="section">
        <div class="container">
            <h2><span class="text-red">04</span> <?php echo $locations_fields->locations_title; ?></h2>
            <p><?php echo $locations_fields->locations_description; ?></p>
            
            <div class="accordion" id="accordion-locations">
                <?php $__currentLoopData = $locations_loop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="card">
                      <div class="card-header" id="heading<?php echo $loop->index; ?>">
                          <button class="button button-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $loop->index; ?>" aria-expanded="true" aria-controls="collapse<?php echo $loop->index; ?>">
                              <i class="icn icn-1 icn-plus"></i> <?php echo $location['title']; ?>

                          </button>
                      </div>
                      <div id="collapse<?php echo $loop->index; ?>" class="collapse" aria-labelledby="heading<?php echo $loop->index; ?>" data-parent="#accordion-locations">
                        <div class="card-body">
                          <ul class="location-list">
                            <li><i class="icn icn-1 icn-phone"></i><strong>
                              <?php _e("Contacto") ?>
                              </strong><br>
                              <?php _e("Teléfono") ?>
                              <?php echo $location['phone']; ?></li>
                            <li><i class="icn icn-1 icn-pin"></i><strong>
                                <?php _e("Dirección") ?>  
                              </strong><br>
                              <?php echo $location['address']; ?></li>
                            <li><i class="icn icn-1 icn-clock"></i><strong>
                                <?php _e("Horario de Atención") ?>
                              </strong> 
                              <ul>
                                <?php $__currentLoopData = $location['schedule']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><?php echo $sc['days']; ?>: <?php echo $sc['hours']; ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                            </li>
                            <li><strong>
                              <?php _e("Ir con") ?> : 
                              <br>
                              <a class="text-red" href="<?php echo $location['waze_link']; ?>" target="_blank"><i class="icn icn-1 icn-waze"></i> Waze</a> |  
                              <a class="text-red" href="<?php echo $location['google_maps_link']; ?>" target="_blank"><i class="icn icn-1 icn-maps"></i> Google Maps</a></strong>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
        </div>
    </section>  
    <section id="contact" class="section bg-blue py-5">
      <div class="container">
          <div class="row">
            <div class="col-md-6">
                <h2 class="text-white"><span class="text-red">05</span> <?php echo $contact_fields->contact_title; ?></h2>
                <p class="text-white"><?php echo $contact_fields->contact_description; ?></p>
                <p class="text-white"><i class="icn icn-1 icn-phone-white"></i> <?php _e("Teléfono") ?>: <a class="text-white" href="tel:<?php echo $contact_fields->contact_phone; ?>"><?php echo $contact_fields->contact_phone; ?></a></p>
                <p class="text-white"><i class="icn icn-1 icn-messenger"></i> Messenger: <a target="_blank" class="text-white" href="<?php echo $contact_fields->contact_messenger; ?>"><?php echo $contact_fields->contact_messenger; ?></a></p>
            </div>
            <div class="col-md-6">
                <h3 class="text-white">
                  <?php _e("Envíanos un mensaje") ?>
                </h3>
                <?= do_shortcode($contact_fields->contact_form); ?>
            </div>
          </div>
        </div>
    </section>   
  </div>

  <div class="modal modal-services" tabindex="-1" role="dialog" id="ServicesModal">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icn icn-1 icn-plus" aria-hidden="true"></i></button>
              <div id="services-carousel" class="slider-services">
                  <?php $__currentLoopData = $services_loop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="slide">
                      <div class="modal-header">
                          <div class="f-center-left">
                            <img src="<?php echo $services_item['icon']; ?>" aria-hidden="true" class="m-1">
                            <h2 class="text-white m-2"><?php echo $services_item['title']; ?></h2>
                          </div>
                          <p class="text-white"><?php echo strip_tags($services_item['content']); ?></p>
                        </div>
                        <div class="modal-body">
                          <h4 class="text-white modal-title"><?php echo $services_item['stat_title']; ?></h4>
                          <p class="text-white"><?php echo $services_item['stat_description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </div>
                <a class="prev" href="#" role="button" data-slide="prev">
                    <i class="icn icn-1 icn-chevron" aria-hidden="true"></i> <?php echo e(_e('Anterior')); ?>

                </a>
                <a class="next" href="#" role="button" data-slide="next">
                    <?php echo e(_e('Siguiente')); ?> <i class="icn icn-1 icn-chevron" aria-hidden="true"></i>
                </a>
          </div>
        </div>
  </div>
  <div class="modal modal-video" tabindex="-1" role="dialog" id="VideoModal">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icn icn-1 icn-plus" aria-hidden="true"></i></button>
              <iframe id="ytplayer" type="text/html"
              src="https://www.youtube.com/embed/<?php echo $social_fields->social_video; ?>?autoplay=0"
              frameborder="0"></iframe>
          </div>
        </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>