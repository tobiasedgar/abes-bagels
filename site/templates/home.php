<?= snippet ('head')?>
<?php snippet('header') ?> 
<div class="page-content" role="main">

<?= snippet('choc-block') ?>

<?= snippet('hero') ?>

<?= snippet('about') ?>

<?= snippet('enter') ?>

<?= snippet('gallery') ?>


<!-- enter form -->
<div class="overlay__enter">

    <div class="overlay__exit font__large font__orange font__wide">x</div>
   
    <!-- overlat content form -->
    <div class="overlay__content__enter">

        <h2 class="font__lite font__orange font__large">SHOW US YOUR CHOC</h2>
        
        <form action="<?= $site->formspark() ?>" method="post" enctype="multipart/form-data" class="overlay__form">

            <input type="text" name="Name" placeholder="FULL NAME:" aria-label="Name Input" required>
            <input type="text" name="Email" placeholder="EMAIL:" aria-label="Email Input" required>
            <textarea rows="5" name="Message" placeholder="TALK TO US ABOUT YOUR BAGEL CREATION:" aria-label="Message Input" required></textarea>
            <input 
                name="Upload" 
                accept="image/*" 
                class="file-input" 
                aria-label="File Input"  
                type="hidden"
                role="uploadcare-uploader"
                data-public-key="f0ec234f04208e306bb9"
                data-system-dialog="true">

            <button class="primary-btn" type="submit" aria-label="Form Submit">
                SUBMIT
            </button>

        </form>

    </div>
    <!-- overlay content form ends -->

    <!-- overlay content TnCs -->
    <div class="overlay__content__tnc">
        <h2 class="font__lite font__orange font__large">TERMS & CONDITIONS</h2>
        <p class="font__copy font__small font__orange">
            <?= $page->tnc()->kti() ?>
        </p>
    </div>


</div>

<!-- enter form ends -->

<?= snippet('footer') ?>