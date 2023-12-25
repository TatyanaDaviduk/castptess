<?php
/*
Template Name: 404
*/
?>

<?php get_header();?>
<main>
    <div class="container">
        <div class="notFound">
            <p class="notFound__error">404</p>
            <p class="notFound__desc">Page not found!</p>
            <p class="notFound__help"> This page not found (deleted or never exists).</p>
            <p class="notFound__help">Try a phrase in search box or back to home and start again.</p>
            <a class=" notFound__btn  button--accent" href="/">HOMEPAGE</a>
        </div>
    </div>
</main>
<?php get_footer();?>