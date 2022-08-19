<?php get_header(); ?>


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Testimonial</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Testimonial</p>
            </div>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Courses</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Courses 1</a>
                            <a class="dropdown-item" href="#">Courses 2</a>
                            <a class="dropdown-item" href="#">Courses 3</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Testimonial Start -->
		<div class="container-fluid bg-image py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
										<?php if (have_rows('name1' ,'options')): ?>
										<?php while( have_rows('name1', 'options') ) : the_row(); ?>
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2"><?php echo get_sub_field('namee'); ?></h6>
                        <h1 class="display-4"><?php echo get_sub_field('heading'); ?></h1>
                    </div>
                    <p class="m-0"><?php echo get_sub_field('paragraph'); ?></p>
										<?php endwhile ?>
										 <?php endif ?>
                </div>
                <div class="col-lg-7">
									
                    <div class="owl-carousel testimonial-carousel">
										<?php if (have_rows('carousel' ,'options')): ?>
											<?php while( have_rows('carousel', 'options') ) : the_row();                   
											$img_url = get_sub_field('image')['url'];
									     ?>
                        <div class="bg-white p-5">
                            <i class="fa <?php echo get_sub_field('icon'); ?> text-primary mb-4"></i>
                            <p><?php echo get_sub_field('paragraph'); ?></p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="<?php echo $img_url; ?>" alt="">
                                <div>
																	<h5><?php echo get_sub_field('h1'); ?></h5>
																	<span><?php echo get_sub_field('h2'); ?></span>
                                </div>
                            </div>
                        </div>
												<?php endwhile ?>
										 <?php endif ?>
                    </div>										
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Start --> 

<?php get_footer(); ?>