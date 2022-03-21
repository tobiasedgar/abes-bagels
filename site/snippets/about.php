<section class="about__section">
        <!-- Slider main container -->
<div class="recipe__slider block">
  <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php foreach ( $page->slider()->toStructure() as $slide ) : ?>
            <div class="swiper-slide">
                <?php snippet('media', ['field' => $slide->image()])?>
                <h3 class="font__medium font__wide font__brown"><?= $slide->sliderlabel()->upper() ?></h3>
            </div>
        <?php endforeach ?>
      </div>
      
    </div>

    <div class="swiper-pagination"></div>
</div>


    <div class="about__content">
        <div class="about__about block">
            <h2 class="font__lite font__brown font__large">GOT CHOC?</h2>
            <p class="font__brown font__copy"> <?= $page->about()->kti(); ?></p>
        </div>
        <!-- <div class="about__apply block">
        <h2 class="font__lite font__brown font__large">HOW TO APPLY</h2>
            <p class="font__brown font__copy"> <?= $page->apply(); ?></p>
        </div> -->
    </div>

</section>