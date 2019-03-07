<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>



<p>
My Site features articles about 
<a title="WordPress Articles" href="/category/wordpress/">WordPress</a>, 
<a title="Web Design Articles" href="/category/web-design/">web page design</a>, 
<a title="Development Articles" href="/category/website-development/">website development</a>,
and <a title="CSS Articles" href="/category/css/">CSS</a>.
</p>
<p>To search my website, please use the form below.</p>

<?php get_search_form(); ?>

<?php get_footer(); ?>