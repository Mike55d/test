<?php $__env->startSection('content'); ?>
  <div class="page-home">
    <section class="hero d-md-none" id="top" style="background-image:url('<?php echo $hero_fields->hero_mobile; ?>');">
      <?php echo $hero_fields->hero_text; ?>

    </section>
    <section class="hero d-none d-md-flex" id="top" style="background-image:url('<?php echo $hero_fields->hero_desktop; ?>');">
      <?php echo $hero_fields->hero_text; ?>

    </section>
    <section id="services">
      <div class="container">
        <h3 class="text-red">01</h3>
        <h2><?php echo $services_fields->services_title; ?></h2>
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
                    <a href="#ServicesModal" data-toggle="modal" data-target="#ServicesModal" class="button button-arrow idx" data-index="<?php echo $loop->index; ?>">
                      <?php echo(pll__("Ver más")) ?>
                      <i class="icn icn-1 icn-chevron"></i></a>
                  </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div>
      </div>
    </section>
    <section id="social" class="bg-dark py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <h3 class="text-red">02</h3>
              <h2 class="text-white"><?php echo $social_fields->social_title; ?></h2>
              <p class="text-white"><?php echo $social_fields->social_description; ?></p>
          </div>
          <div class="col-md-6">
            <a class="video-container" href="#VideoModal" data-toggle="modal" data-target="#VideoModal">
                <img class="w-100" src="<?php echo $social_fields->social_video_thumbnail; ?>" alt="Video thumbnail">
                <div class="play-btn"><i class="icn icn-2 icn-play"></i></div>
            </a>
          </div>
        </div>
        <div class="social-slider">
            <div id="carousel-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
              
              <!-- Indicators -->
              <ol class="carousel-indicators">
                  <?php $__currentLoopData = $social_axis_loop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-target="#carousel-multi" data-slide-to="<?php echo $loop->index; ?>" <?php if($loop->first): ?>class="active" <?php endif; ?>></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ol>
              <!--/.Indicators-->
            
              <div class="carousel-inner v-2" role="listbox">
                <?php $__currentLoopData = $social_axis_loop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php if($loop->first): ?> active <?php endif; ?>">
                  <div class="col-12 col-md-4">
                    <div class="card card-social mb-2">
                        <?php echo $social_item['thumbnail']; ?>

                        <h4 class="text-white my-3"><?php echo $social_item['title']; ?></h4>
                        <p class="text-white"><?php echo strip_tags($social_item['content']); ?></p>
                        <div class="collapse" id="social-collapse<?php echo $loop->index; ?>">
                          <h5 class="text-white my-2">
                              <?php echo(pll__("Objetivos")) ?>
                          </h5>
                          <ul class="text-white p-0 mb-5">
                            <?php $__currentLoopData = $social_item['objectives']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><?php echo $o['objective']; ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                        </div>
                        <a data-toggle="collapse" href="#social-collapse<?php echo $loop->index; ?>" role="button" aria-expanded="false" aria-controls="social-collapse<?php echo $loop->index; ?>" class="button button-arrow text-white">
                          <?php echo(pll__("Ver más")) ?> 
                          <i class="icn icn-1 icn-chevron"></i></a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
        </div>
      </div>
    </section>
    <section id="people">
        <div class="container">
          <h3 class="text-red">03</h3>
          <h2><?php echo $people_fields->people_title; ?></h2>
        
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
    <section id="locations">
        <div class="container">
            <h3 class="text-red">04</h3>
            <h2><?php echo $locations_fields->locations_title; ?></h2>
            <p><?php echo $locations_fields->locations_description; ?></p>
            
            <div class="accordion row" id="accordion-locations">
                <?php $__currentLoopData = $locations_loop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" id="heading<?php echo $loop->index; ?>">
                            <button class="button button-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $loop->index; ?>" aria-expanded="true" aria-controls="collapse<?php echo $loop->index; ?>">
                                <i class="icn icn-1 icn-plus"></i> <?php echo $location['title']; ?>

                            </button>
                        </div>
                        <div id="collapse<?php echo $loop->index; ?>" class="collapse" aria-labelledby="heading<?php echo $loop->index; ?>" data-parent="#accordion-locations">
                          <div class="card-body">
                            <ul>
                              <li><i class="icn icn-1 icn-phone"></i><strong>
                                <?php echo(pll__("Contacto")) ?>
                                </strong><br>
                                <?php echo(pll__("Teléfono")) ?>
                                <?php echo $location['phone']; ?></li>
                              <li><i class="icn icn-1 icn-pin"></i><strong>
                                  <?php echo(pll__("Dirección")) ?>  
                                </strong> <?php echo $location['address']; ?></li>
                              <li><i class="icn icn-1 icn-clock"></i><strong>
                                  <?php echo(pll__("Horario de Atención")) ?>
                                </strong> 
                                <ul>
                                  <?php $__currentLoopData = $location['schedule']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo $sc['days']; ?>: <?php echo $sc['hours']; ?></li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                              </li>
                              <li><strong>
                                <?php echo(pll__("Ir con")) ?> : 
                                <br>
                                <a class="text-red" href="<?php echo $location['waze_link']; ?>" target="_blank"><i class="icn icn-1 icn-waze"></i> Waze</a> |  
                                <a class="text-red" href="<?php echo $location['google_maps_link']; ?>" target="_blank"><i class="icn icn-1 icn-maps"></i> Google Maps</a></strong>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
        </div>
    </section>  
    <section id="contact" class="bg-dark py-5">
        <div class="container">
            <div class="row">
              <div class="col-md-6">
                  <h3 class="text-red">05</h3>
                  <h2 class="text-white"><?php echo $contact_fields->contact_title; ?></h2>
                  <p class="text-white"><?php echo $contact_fields->contact_description; ?></p>
                  <p class="text-white"><i class="icn icn-1 icn-phone-white"></i> <?php echo(pll__("Teléfono")) ?>: <?php echo $contact_fields->contact_phone; ?></p>
                  <p class="text-white"><i class="icn icn-1 icn-messenger"></i> Messenger: <?php echo $contact_fields->contact_messenger; ?></p>
              </div>
              <div class="class-md-6">
                  <h3 class="text-white">
                    <?php echo(pll__("Envíanos un mensaje")) ?>
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
              <div id="services-carousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                      <?php $__currentLoopData = $services_loop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="carousel-item <?php if($loop->first): ?> active <?php endif; ?>">
                        <div class="modal-header">
                            <div class="f-center-left">
                              <img src="<?php echo $services_item['icon']; ?>" aria-hidden="true" class="m-1">
                              <h2 class="text-white m-2"><?php echo $services_item['title']; ?></h2>
                            </div>
                            <p class="text-white"><?php echo strip_tags($services_item['content']); ?></p>
                          </div>
                          <div class="modal-body">
                            <h4 class="text-red"><?php echo $services_item['stat_number']; ?></h4>
                            <h4 class="text-white"><?php echo $services_item['stat_title']; ?></h4>
                            <p class="text-white"><?php echo $services_item['stat_description']; ?></p>
                          </div>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <a class="carousel-control-prev" href="#services-carousel" role="button" data-slide="prev">
                    <span class="icn icn-1 icn-chevron" aria-hidden="true"></span>
                  </a>
                  <a class="carousel-control-next" href="#services-carousel" role="button" data-slide="next">
                    <span class="icn icn-1 icn-chevron" aria-hidden="true"></span>
                  </a>
                </div>
              
          </div>
        </div>
  </div>
  <div class="modal modal-video" tabindex="-1" role="dialog" id="VideoModal">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icn icn-1 icn-plus" aria-hidden="true"></i></button>
              <iframe id="ytplayer" type="text/html"
              src="https://www.youtube.com/embed/<?php echo $social_fields->social_video; ?>?autoplay=1"
              frameborder="0"></iframe>
          </div>
        </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>