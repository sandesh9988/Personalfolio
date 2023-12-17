<?php
get_header();
the_post();
?>
<main class="page__home">
    <section class="hero">
        <div class="container">
            <div class="hero__wrap">
                <figure class="hero__media">
                    <img src="<?php echo get_template_directory_uri(); ?>/uploads/sandesh1.png"
                        alt="Description of image">
                </figure>
                <div class="hero__content">
                    <div class="hero__intro">
                        <h1 class="hero__title">Hi, I'm Sandesh Thapa</h1>
                        <div class="hero__designation">
                            <p>- Web Developer</p>
                        </div>
                    </div>
                    <div class="hero__description entry-content">
                        <p>With a passion for crafting seamless digital experiences, I am a seasoned web developer with 2 years of hands-on expertise in front-end and back-end technologies. My journey in the dynamic world of web development has equipped me with the skills to bring creative visions to life through clean, responsive, and user-friendly websites.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('modules/flex-content/flex-content.php') ?>
</main>
<?php get_footer(); ?>