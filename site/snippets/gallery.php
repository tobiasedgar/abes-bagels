<section class="gallery__section">
    <div class="gallery__text">
        <h3 class="font__wide font__orange font__super block" > <?= $page->galleryheadline()->kirbytext()->upper() ?> </h3><br>
        <h3 class="font__wide font__orange font__super block" > <?= $page->galleryhashtag()->upper() ?> </h3>
    </div>
    <div class="gallery__gallery">
           
        <?php foreach ($page->
        galleryitem()->
        toStructure() as $img) : ?>
            <div class="gallery__image block"> 
                <?php snippet('media', ['field' => $img->mainimage()]) ?>
                <div class="gallery__overlay">
                    <?php snippet('media', ['field' => $img->hoverimage()]) ?>
                    <?php if ($img->itemTitle()->isNotEmpty()) : ?>
                    <div class="overlay__background"></div>
                
                    <div class="overlay__text font__brown">
                        <div>
                        <h3 class="font__medium font__lite"><?= $img->itemTitle() ?></h3>
                        <p class="font__copy"><?= $img->itemtext() ?></p>
                    </div>
                    </div>
                    <?php endif?>
                </div> 
            </div>
        <?php endforeach ?>
        
    </div>
    
</section>