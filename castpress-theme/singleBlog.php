<?php
/*
Template Name: singleBlog
Template Post Type: post
*/
?>

<?php get_header();?>
<div class="main">
    <div class="container">
        <section class="post">
            <div class="listen__img">
                <img src="images/content/episodies/1.jpg" alt="">
            </div>
            <h2 class="listen__name">
                <?php the_title(); ?>
            </h2>
            <ul class="listen__key">
                <li class="listen__key-item listen__key-date"><?php the_time(' M n, Y' ); ?></li>
                <li class="listen__key-item listen__key-by"><?php the_post(); ?><?php echo get_the_author(); ?></li>
            </ul>
        </section>
        <div class="about">
            <div class="about__content">
                <?php the_content();?>
            </div>
           <!-- <p class="about__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed mollis augue. Cras suscipit sit amet est in aliquam. In vel blandit nunc. Donec at dolor in orci tristique bibendum. 
            </p>
            <p class="about__title">Makemeup Podcast Theme </p>
            <p class="about__desc">Vivamus et aliquet neque. Mauris feugiat blandit augue a vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam a luctus magna, a finibus massa.
                Proin ultricies, arcu ac dignissim sollicitudin, nibh nibh fermentum eros, id consequat nisi odio vestibulum tortor. Cras non interdum ligula, sit amet imperdiet purus. Vestibulum quis leo nibh.
                </p> -->

            <ul class="about__tags">
                <li class="about__tags-item"><a href="" class="about__tags-link">#Apple</a></li>
                <li class="about__tags-item"><a href="" class="about__tags-link">#Keynote</a></li>
                <li class="about__tags-item"><a href="" class="about__tags-link">#Product</a></li>
            </ul>
            <div class="about__share">
               <p>Share:</p>
                <ul class="about__share-list">
                    <li class="about__share-items">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
                            <path d="M7.91667 2.5H5.41667C4.95643 2.5 4.58333 2.8731 4.58333 3.33333V5.83333H7.91667C8.01145 5.83123 8.10134 5.87533 8.15769 5.95156C8.21404 6.0278 8.22982 6.12667 8.2 6.21667L7.58333 8.05C7.52651 8.21827 7.36926 8.33201 7.19167 8.33333H4.58333V14.5833C4.58333 14.8135 4.39679 15 4.16667 15H2.08333C1.85321 15 1.66667 14.8135 1.66667 14.5833V8.33333H0.416667C0.186548 8.33333 0 8.14678 0 7.91667V6.25C0 6.01988 0.186548 5.83333 0.416667 5.83333H1.66667V3.33333C1.66667 1.49238 3.15905 0 5 0H7.91667C8.14678 0 8.33333 0.186548 8.33333 0.416667V2.08333C8.33333 2.31345 8.14678 2.5 7.91667 2.5Z" fill="#222222"/>
                          </svg>
                    </li>
                    <li class="about__share-items">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                            <path d="M15.3769 7.69418C15.3743 11.0018 13.2565 13.9371 10.1184 14.9823C10.0009 15.0185 9.87332 14.9986 9.7724 14.9285C9.6715 14.8551 9.61156 14.738 9.61096 14.6132V12.5606C9.62759 12.0077 9.49479 11.4606 9.22657 10.9769C9.18599 10.9136 9.18599 10.8326 9.22657 10.7693C9.25775 10.711 9.31485 10.671 9.38032 10.6617C11.2562 10.4695 12.3017 9.72377 12.3017 7.69418C12.3469 6.74653 12.0184 5.819 11.3869 5.11105C11.479 4.812 11.5281 4.50139 11.5329 4.18851C11.5296 3.90799 11.4909 3.62902 11.4176 3.35822C11.3693 3.17765 11.1958 3.05984 11.0101 3.08146C10.3058 3.18144 9.65005 3.49854 9.13431 3.98863C8.17959 3.80416 7.19839 3.80416 6.24368 3.98863C5.72794 3.49854 5.07223 3.18144 4.36784 3.08146C4.18216 3.05984 4.00872 3.17765 3.96038 3.35822C3.88711 3.62902 3.84836 3.90799 3.84506 4.18851C3.84984 4.50139 3.89903 4.812 3.99113 5.11105C3.35956 5.819 3.03106 6.74653 3.07628 7.69418C3.07628 9.8314 4.23714 10.5464 6.36668 10.7232C6.10233 11.0696 5.92087 11.472 5.83622 11.8994C5.83622 11.8994 5.83622 11.9532 5.83622 11.9917C5.83252 12.0275 5.83252 12.0635 5.83622 12.0993C5.80423 12.341 5.58692 12.5142 5.3442 12.4914C5.22846 12.486 5.11545 12.4544 5.01362 12.3991C4.59479 12.1441 4.22506 11.816 3.92194 11.4305C3.72881 11.2115 3.52348 11.0036 3.30691 10.8078C3.16931 10.6886 3.01684 10.5879 2.85333 10.5079C2.73874 10.4436 2.59889 10.4436 2.48431 10.5079C2.37431 10.5785 2.30771 10.7001 2.30749 10.8308V10.8769C2.30771 11.0076 2.37431 11.1293 2.48431 11.1998C2.76028 11.4308 2.99886 11.7031 3.19159 12.0071C3.51708 12.5171 3.93104 12.9649 4.41396 13.3294C4.73215 13.5427 5.10721 13.6552 5.49026 13.6523H5.76703V14.6132C5.76643 14.738 5.70649 14.8551 5.60558 14.9285C5.50467 14.9986 5.37709 15.0185 5.25963 14.9823C1.53259 13.7409 -0.659069 9.88943 0.17747 6.05121C1.01401 2.21298 4.60962 -0.37717 8.5152 0.0450015C12.4208 0.467173 15.3798 3.76584 15.3769 7.69418Z" fill="#222222"/>
                        </svg>
                    </li>
                    <li class="about__share-items">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M18.6213 4.17393C18.1659 4.78129 17.6155 5.3111 16.9913 5.7429C16.9913 5.90156 16.9913 6.06022 16.9913 6.22769C16.9964 9.10894 15.8455 11.8717 13.7967 13.8966C11.7479 15.9215 8.97265 17.0391 6.09304 16.999C4.42828 17.0045 2.78483 16.6244 1.29144 15.8883C1.21092 15.8532 1.15898 15.7735 1.15929 15.6856V15.5886C1.15929 15.4621 1.26185 15.3595 1.38836 15.3595C3.02478 15.3055 4.60282 14.7382 5.89922 13.7376C4.41803 13.7078 3.08533 12.8303 2.47202 11.4811C2.44104 11.4074 2.45069 11.3229 2.49747 11.2581C2.54426 11.1933 2.62142 11.1575 2.70109 11.1638C3.15125 11.209 3.60592 11.1671 4.04025 11.0404C2.40514 10.701 1.17654 9.34352 1.0007 7.68208C0.994454 7.60238 1.03017 7.52518 1.09495 7.47837C1.15973 7.43156 1.24421 7.42191 1.31787 7.4529C1.75667 7.64652 2.23034 7.7485 2.7099 7.75259C1.27715 6.81221 0.658302 5.02358 1.20334 3.39825C1.2596 3.24032 1.39477 3.12365 1.55917 3.09111C1.72357 3.05858 1.89295 3.11498 2.00507 3.23959C3.93847 5.29731 6.59499 6.52349 9.41451 6.6596C9.34229 6.37142 9.30677 6.07525 9.30879 5.77816C9.33516 4.22032 10.2991 2.83256 11.7492 2.26458C13.1994 1.69661 14.8488 2.06082 15.9253 3.18671C16.6591 3.04692 17.3685 2.80044 18.031 2.45511C18.0795 2.42481 18.141 2.42481 18.1895 2.45511C18.2198 2.50366 18.2198 2.56522 18.1895 2.61377C17.8687 3.34854 17.3266 3.96482 16.6389 4.37666C17.2411 4.30683 17.8327 4.16477 18.401 3.95357C18.4488 3.921 18.5117 3.921 18.5596 3.95357C18.5997 3.9719 18.6296 4.00697 18.6415 4.04943C18.6534 4.09189 18.646 4.13743 18.6213 4.17393Z" fill="#222222"/>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>

        <section class="related-posts">
            <h2 class="related-posts__title title">Related Posts</h2>
            <div class="related-posts__box">

                    <?php
                        $args = array (
                            'numberposts' => 2,
                            'post_type' => 'post',
                            'suppress_filters' => true,

                        );

                        $posts = get_posts($args) ;
                        foreach( $posts as $post ){

                        
                    ?>


                     <div class="post-preview">
                         <div class="post-preview__img">
                             <img src="<?php bloginfo('template_url'); ?>/assets/images/content/posts/1.jpg" alt="">
                         </div>
                         <div class="post-preview__wrapper">
                             <h3 class="post-preview__title"><?php the_title(); ?></h3>
                             <p class="post-preview__date"><?php the_time(' M n, Y' ); ?></p>
                             <a href="<?php echo get_permalink(); ?>" class="post-preview__more">Read More</a>
                         </div>
                     </div>
                    
                     <?php
                        }
                        wp_reset_postdata();
                    ?>

            </div>
        </section>
        <?php comments_template(); ?>


<!--
        <section class="reply">
            <h2 class="reply__title title-small">
                Leave a Reply
            </h2>
            <p class="reply__subtitle">
                Required fields are marked *
            </p>
            <div class="reply__form">
                <form action="" class="reply__form form">
                    <label class="form__label" for="comment" >
                        Comment</label>
                        <textarea class="form__textarea" name="comment" id="" ></textarea>
                    
                    <label class="form__label" for="name">
                        Name*</label>
                        <input class="form__input" type="text" name="name">
                    
                    <label class="form__label" for="email">
                        Email*</label>
                        <input class="form__input" type="email" name="email">
                    
                    <label class="form__label" for="website">
                        Website*</label>
                        <input class="form__input" type="url" name="website" id="">
                    
                    <label class="form__label form__label-check" for="save-name">
                        <input class="form__custom-checkbox"  type="checkbox" name="save-name" id="">
                        Save my name, email, and website in this browser for the next time I comment
                    </label>
                    
                    <button class="form__button button--accent" type="submit">Submit</button>
                </form>
            </div>
        </section>
        <section class="comments">
            <h2 class="comments__title title-small">Comments</h2>
            <div class="comments__box">
                <div class="comments__item">
                    <div class="comment">
                        <div class="comment__info">
                            <div class="comment__user-img">
                                <img src="images/content/team/2.jpg" alt="user photo">
                            </div>
                            <div class="comment__user-wrapper">
                                <p class="comment__user-name">Mark Newman</p>
                                <p class="comment__user-date">October 24.2020</p>
                            </div>
                        </div>
                        <div class="comment__text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed at arcu dui. Aenean placerat.
                        </div>
                        <button class="comment__reply-btn">Reply</button>
                    </div>
                    <div class="comments__item-replies">
                        <div class="comment">
                            <div class="comment__info">
                                <div class="comment__user-img">
                                    <img src="images/content/team/2.jpg" alt="user photo">
                                </div>
                                <div class="comment__user-wrapper">
                                    <p class="comment__user-name">Mark Newman</p>
                                    <p class="comment__user-date">October 24.2020</p>
                                </div>
                            </div>
                            <div class="comment__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed at arcu dui. Aenean placerat.
                            </div>
                            <button class="comment__reply-btn">Reply</button>
                        </div>
                        <div class="comment">
                            <div class="comment__info">
                                <div class="comment__user-img">
                                    <img src="images/content/team/2.jpg" alt="user photo">
                                </div>
                                <div class="comment__user-wrapper">
                                    <p class="comment__user-name">Mark Newman</p>
                                    <p class="comment__user-date">October 24.2020</p>
                                </div>
                            </div>
                            <div class="comment__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed at arcu dui. Aenean placerat.
                            </div>
                            <button class="comment__reply-btn">Reply</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->
    </div>
</div>
<?php get_footer();?>