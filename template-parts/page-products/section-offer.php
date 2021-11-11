<?php $offer = get_field('offer'); ?>
<section class="products-offer">
    <div class="xln-container">
        <div class="products-offer__content">
            <?php if ($offer['title']): ?>
                <h2 class="products-offer__title">
                    <?= $offer['title']; ?>
                </h2>
            <?php endif; ?>
            <form action="#" class="products-offer__form email-form email-form--blue">
                <input type="hidden" name="userCID" value="<?php echo $_COOKIE['_ga'] ?>">
                <input type="hidden" name="pageUrl" value="<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
                <div class="form-block">
                    <input type="email" name="email" placeholder="Email*" class="form-input">
                    <label class="form-label">Email*</label>
                </div>
                <button type="submit" class="xln-button xln-button--green send-subscribe">
                    <?php if ($offer['btn']): ?>
                        <?= $offer['btn']; ?>
                    <?php endif; ?>
                    <svg width="9" height="14">
                        <use xlink:href='#arrow-right'></use>
                    </svg>
                </button>
                <div class="msg"></div>
            </form>
        </div>
    </div>
</section>