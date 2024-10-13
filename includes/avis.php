<section class="review-section ptb-100 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-7">
                <div class="section-heading text-center">
                    <h2><?php echo $language["BatirLaconfiance"];?> <span class="tag-style"><?php echo $language["ParLexperience"];?></span></h2>
                    <p><?php echo $language["avis02"];?></p>
                    <a href="#" title="<?php echo $language["up173"]?>"><?php echo $language["avis03"];?> &raquo;</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme client-testimonial-1 dot-bottom-center custom-dot">
                <?php
                $review_titles = [$language["avis04"], $language["avis06"], $language["avis08"], $language["avis10"], $language["avis12"], $language["avis14"], $language["avis16"], $language["avis18"]];
                $review_contents = [$language["avis05"], $language["avis07"], $language["avis09"], $language["avis11"], $language["avis13"], $language["avis15"], $language["avis17"], $language["avis19"]];
                $review_authors = ["alexandre B", "Ton", "AmneziK", "HoPy", "WanDlay_", "zozodu", "MATRIX", "Kryox"];
                for($i = 0; $i < count($review_titles); $i++):
                ?>
                <div class="item">
                    <div class="border single-review-wrap bg-white p-4 m-3">
                        <div class="review-body">
                            <h5><?php echo $review_titles[$i];?></h5>
                            <p><?php echo $review_contents[$i];?></p>
                        </div>
                        <div class="review-author d-flex align-items-center">
                            <div class="author-avatar">
                                <img src="https://cdn.rw-hosting.net/assets/images/avis/avis.webp" width="64" alt="<?php echo $language["up174"]?> <?php echo $review_authors[$i];?>" class="rounded-circle shadow-sm img-fluid mr-3" />
                                <span>“</span>
                            </div>
                            <div class="review-info">
                                <h6 class="mb-0"><?php echo $review_authors[$i];?></h6>
                                <span><?php echo $language["avis20"];?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>