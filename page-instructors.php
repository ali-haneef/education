<?php get_header(); ?>

  <!-- Header Start -->
  <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Instructors</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Instructors</p>
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

    
		<!-- Team Start -->
		<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
                <h1 class="display-4">Meet Our Instructors</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
								<?php if (have_rows('instructor' ,'options')): ?>
										<?php while( have_rows('instructor', 'options') ) : the_row();                   
										$img_url = get_sub_field('img2')['url'];
                ?>
                <div class="team-item">
                    <img class="img-fluid w-100" src="<?php echo $img_url; ?>" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3"><?php echo get_sub_field('hed1'); ?></h5>
                        <p class="mb-2"><?php echo get_sub_field('hed2'); ?></p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab <?php echo get_sub_field('icon1'); ?>"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab <?php echo get_sub_field('icon2'); ?>"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab <?php echo get_sub_field('icon3'); ?>"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab <?php echo get_sub_field('icon4'); ?>"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab <?php echo get_sub_field('icon5'); ?>"></i></a>
                        </div>
                    </div>
                </div>
								<?php endwhile ?>
								 <?php endif ?>
				  </div>
			</div>	
		</div>
		<!-- Team end -->
<?php get_footer(); ?>