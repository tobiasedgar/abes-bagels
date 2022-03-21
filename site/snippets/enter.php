<section class="enter__section">
    <div class="enter__content">
        <h2 class="font__wide font__super font__orange block"> <?= $page->enterheadline()->upper() ?></h2>
        <div class="about__apply block">
            <p class="font__orange font__copy"> <?= $page->apply(); ?></p>
        </div>
        <?php foreach ($page->instructions()->toStructure() as $inst) : ?>
            <div class="block">
                <h3 class="font__large font__orange font__wide "><?= $inst->indexOf() + 1 ?>.</h3>
                <h3 class="font__large font__orange font__lite "><?= $inst->header()->upper() ?></h3>
                <p class="font__copy font__orange font__small "><?= $inst->directions() ?></p>
            </div>
        <?php endforeach?>
        <button class="enter__button secondary__btn font__wide block" id="enter3" aria-label="Enter toggle">
            Enter
        </button>
    </div>
</section>