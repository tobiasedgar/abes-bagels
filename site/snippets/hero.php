<section class="hero__section">

    <div class="hero__summary block__delay">
        <h1 class="font__super font__brown font__bold" > <?= $page->headline()->kirbytext()->upper()?> </h1>
        <h2 class="font__medium font__lite font__brown"> <?= $page->summary()->kirbytext()->upper()?> </h2>
        <button class="enter__button primary__btn font__wide font__small" id="enter1">
            <?= $page->cta()->upper() ?>
        </button>
    </div>
    
</section>