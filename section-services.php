<!-- Section: Services -->
<section id="blog">
      <div class="container pb-10">
        <div class="section-title mb-20 text-center">
          <div class="row" style="border-bottom: 5px solid red">
            <div class="col-md-6" align="left">
              <h2 class="mt-10 line-height-1 text-uppercase"><span class="text-theme-color-2"><?php _e( 'Interaktiv xizmatlar-tu', 'tdiu-underscores' ); ?></span></h2>
            </div>
            <div class="col-md-6" align="right">
              <div class="mt-10"> <a href="#" class="btn btn-theme-colored btn-sm text-uppercase"><?php _e( 'Barcha xizmatlar-tu', 'tdiu-underscores' ); ?>...</a> </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">

		  <?php 
$my_data = [
	[
		"id"			=> "1",
		"icon" 			=> "pe-7s-notebook",
		"title"			=> __("Masofaviy ta'lim-tu", 'tdiu-underscores'),
		"description" 	=> __("TDIU masofaviy ta'lim tizimi-tu", 'tdiu-underscores'),
		"href"			=> "http://remote-education.surge.sh/"
	],
	[
		"id"			=> "2",
		"icon" 			=> "pe-7s-notebook",
		"title"			=> __('Bitiruvchilar assotsiatsiyasi-tu', 'tdiu-underscores'),
		"description" 	=> __('Ro‘yhatdan o‘tish-tu', 'tdiu-underscores'),
		"href"			=> "http://alumni.tsue.uz/register"
	],
	[
		"id"			=> "3",
		"icon" 			=> "pe-7s-notebook",
		"title"			=> __('Vazifalar portali-tu', 'tdiu-underscores'),
		"description" 	=> __('TDIU vazifalar portaliga kirish-tu', 'tdiu-underscores') . '...',
		"href"			=> "https://tasks.tsue.uz"
	],
	[
		"id"			=> "4",
		"icon" 			=> "pe-7s-notebook",
		"title"			=> __('Korporativ elektron pochta-tu', 'tdiu-underscores'),
		"description" 	=> __('TDIU korporativ elektron pochtasi-tu', 'tdiu-underscores') . '...',
		"href"			=> "http://webmail.tsue.uz/"
	],
	[
		"id"			=> "5",
		"icon" 			=> "pe-7s-notebook",
		"title"			=> __('Dars jadvali-tu', 'tdiu-underscores'),
		"description" 	=> __('TDIU dars jadvali-tu', 'tdiu-underscores') . '...',
		"href"			=> "http://mf.tsue.uz"
	],
	[
		"id"			=> "6",
		"icon" 			=> "pe-7s-mail-open-file",
		"title"			=> __('Rektor virtual qabulxonasi-tu', 'tdiu-underscores'),
		"description" 	=> __('TDIU rektori virtual qabulxonasi-tu', 'tdiu-underscores') . '...',
		"href"			=> "https://docs.google.com/forms/d/1hwQqMM9W797S31uoldJ8r2qRuL1mxNbtqgdVMFhhOjQ/edit"
	],
	[
		"id"			=> "7",
		"icon" 			=> "pe-7s-mail-open-file",
		"title"			=> __('Yagona interaktiv xizmatlari darchasi-tu', 'tdiu-underscores'),
		"description" 	=> __('TDIUning yagona interaktiv xizmatlari darchasi-tu', 'tdiu-underscores') . '...',
		"href"			=> "http://interactive.tsue.uz/"
	],
	[
		"id"			=> "8",
		"icon" 			=> "pe-7s-mail-open-file",
		"title"			=> __('Biznes Inkubator-tu', 'tdiu-underscores'),
		"description" 	=> __('Young Entrepreneurs Generator-tu', 'tdiu-underscores') . '...',
		"href"			=> "http://tsue.uz/?page_id=12546"
	],
];

foreach ( $my_data as $key => $value ) {
?>

			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="icon-box p-0 mb-10">
					<a href="<?php echo $value["href"]; ?>" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
					<i class="<?php echo $value["icon"]; ?> text-white"></i>
				</a>
					<div class="icon-box-details ml-sm-0">
					<a href="<?php echo $value["href"]; ?>">
						<h5 class="icon-box-title mt-15 letter-space-1 font-weight-600 mb-5">
							<span class="text-theme-color-2 font-weight-700 text-uppercase">
								<?php echo $value["title"]; ?>
							</span>
						</h5>
						<p class="text-gray">
							<?php echo $value["description"]; ?>
						</p>
					</a>
					</div>
				</div>
			</div>

			<?php } ?>

<!-- <a  href="http://alumni.tsue.uz/register"><img src="<?php //echo get_stylesheet_directory_uri() ?>/images/alumni/logo-wide.png" alt="33"></a> -->


</div>
        </div>
      </div>
    </section>
