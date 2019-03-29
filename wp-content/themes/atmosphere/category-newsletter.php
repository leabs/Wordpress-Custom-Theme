<?php get_header('blog');?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-3 is-hidden-touch"
                style="padding-left:12px; padding-right:22px; padding-top:20px; padding-bottom:0; padding-top:0;">
                <div class="control has-icons-left has-icons-right is-hidden-touch" id="search-wrapper">
                    <div class="header-search">
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <label>

                                <input type="search" class="search-field"
                                    placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                                    value="<?php echo get_search_query() ?>" name="s"
                                    title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                            </label>

                        </form>
                    </div>
                </div>
                <br>
                <aside class="menu blog-menu">
                    <p class="menu-label ">
                        Blog
                    </p>
                    <ul class="menu-list blog-list">
                        <li><a href="<?php echo wp_make_link_relative('https://testsite.atmosphereiot.com/category/blog/'); ?>"
                                class="">All Posts</a></li>
                        <li><a href="<?php echo wp_make_link_relative('https://testsite.atmosphereiot.com/category/blog/insights/'); ?>"">Insights</a></li>
                            <li><a href=" <?php echo wp_make_link_relative('https://testsite.atmosphereiot.com/category/blog/platform/');
                                ?>"">Platform</a></li>
                    </ul>
                    <p class="menu-label menu-label-no-bottom-margin">
                        Latest Blog Posts
                    </p>
                    <ul class="menu-list blog-list">

                        <?php $catquery = new WP_Query( 'cat=3&posts_per_page=5' ); ?>


                        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>


                        <li><a href="<?php the_permalink() ?>" rel="bookmark">
                                <?php the_title(); ?></a></li>
                        <span class="latest-post-meta">
                            <?php the_time('F jS, Y'); ?></span>
                        <?php endwhile;
                                wp_reset_postdata();
                        ?>
                    </ul>

                    <p class="menu-label">
                        Events
                    </p>
                    <ul class="menu-list events-list">
                        <li><a
                                href="<?php echo wp_make_link_relative('http://localhost/Wordpress-Custom-Theme/events/'); ?>">Upcoming
                                Events</a></li>
                        <li><a
                                href="<?php echo wp_make_link_relative('http://localhost/Wordpress-Custom-Theme/events-archive/'); ?>">Event
                                Archive</a></li>
                    </ul>
                    <p class="menu-label">
                        News
                    </p>
                    <ul class="menu-list news-list">
                        <li><a href="<?php echo wp_make_link_relative('https://testsite.atmosphereiot.com/category/news/'); ?>"
                                class="">All News</a></li>
                        <li><a
                                href="<?php echo wp_make_link_relative('https://testsite.atmosphereiot.com/category/pressreleases/'); ?>">Press
                                Releases</a></li>
                        <li><a
                                href="<?php echo wp_make_link_relative('https://testsite.atmosphereiot.com/category/newscoverage/'); ?>">News
                                Coverage</a></li>
                        <li><a class="has-text-primary"
                                href="<?php echo wp_make_link_relative('https://testsite.atmosphereiot.com/category/newsletter/'); ?>">
                                Newsletter</a></li>

                    </ul>
                    <p class="menu-label menu-label-no-bottom-margin">
                        Latest News Posts
                    </p>
                    <ul class="menu-list blog-list">

                        <?php $catquery = new WP_Query( 'cat=4&posts_per_page=5' ); ?>


                        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>


                        <li><a href="<?php the_permalink() ?>" rel="bookmark">
                                <?php the_title(); ?></a></li>
                        <span class="latest-post-meta">
                            <?php the_time('F jS, Y'); ?></span>
                        <?php endwhile;
                                wp_reset_postdata();
                        ?>
                </aside>
            </div>

            <div class="column is-9">
                <div class=" " style=" padding:12px;">
                    <?php if (have_posts()) : while(have_posts()) : the_post();?>
                    <a href="<?php the_permalink();?>">

                        <div class="column news-card" style="margin:10px;">
                            <!-- Article Header -->
                            <header class="article-header">
                                <?php the_post_thumbnail( 'category-thumb' ); ?>
                                <div class="article-title">
                                    <h4 class="title news-title icon-header ">
                                        <?php the_title();?>
                                    </h4>

                                    <p class="blog-meta">
                                        <span style="text-transform: capitalize;">
                                            <?php the_category(', '); ?>

                                        </span>
                                        <span> | </span><span>Jan</span> <span>09</span><span>, 20</span><span>19</span>
                                    </p>
                                </div>
                            </header>
                            <br>

                            <!-- Article Content -->
                            <div class="article-content">
                                <div class="row">

                                    <div class="article-text col-md-12">
                                        <p>
                                            <?php the_excerpt();?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>






                        <?php 
                endwhile; endif; ?>
                    </a>
                </div>

                <div class="column blog-articles-container is-12-touch" style="background:white; padding-top:20px;">
                    
                    <section class="section">
                        <div
                            style="max-width:460px; margin:0 auto; background:#fff; box-shadow: 0px 5px 15px rgba(0,0,0,0.3); padding:30px; position:relative;">
                            <!--Zoho Campaigns Web-Optin Form Starts Here-->
                            <script type="text/javascript" src="https://zca.maillist-manage.com/js/optin.min.js"
                                onload="setupSF('sf3862480056483d240b93f1be7a687cccc98e811ca5f0889b','ZCFORMVIEW',false,'light')">
                            </script>
                            <script type="text/javascript">
                                function runOnFormSubmit_sf3862480056483d240b93f1be7a687cccc98e811ca5f0889b(th) {
                                    /*Before submit, if you want to trigger your event, "include your code here"*/
                                };
                            </script>
                            <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
                                name="viewport">
                            <div id="sf3862480056483d240b93f1be7a687cccc98e811ca5f0889b" data-type="signupform_0">
                                <div id="customForm">
                                    <input type="hidden" id="signupFormType" value="QuickForm_Vertical">
                                    <div>
                                        <table width="250" class="quick_form_1_css" border="0" cellspacing="0"
                                            cellpadding="0" align="center" style="width:100%;" name="SIGNUP_BODY"
                                            id="SIGNUP_BODY">
                                            <tbody>
                                                <tr>
                                                    <td align="center" valign="top">
                                                        <div id="SIGNUP_HEADING" name="SIGNUP_HEADING"
                                                            changeid="SIGNUP_MSG" changetype="SIGNUP_HEADER">Join Our
                                                            Newsletter</div>
                                                        <div>
                                                            <div style="position:relative;">
                                                                <div id="Zc_SignupSuccess"
                                                                    style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px;word-break:break-all ">
                                                                    <table width="100%" cellpadding="0" cellspacing="0"
                                                                        border="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width="10%">
                                                                                    <img class="successicon"
                                                                                        src="https://zca.maillist-manage.com/images/challangeiconenable.jpg"
                                                                                        align="absmiddle">
                                                                                </td>
                                                                                <td>
                                                                                    <span id="signupSuccessMsg"
                                                                                        style="color: rgb(73, 140, 132); font-family: sans-serif; font-size: 14px;word-break:break-word">&nbsp;&nbsp;Thank
                                                                                        you for Signing Up</span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <form method="POST" id="zcampaignOptinForm"
                                                                action="https://zca.maillist-manage.com/campaigns/weboptin.zc"
                                                                target="_zcSignup">
                                                                <br>
                                                                <!-- check to mark emailid field as type email, and other mandatory fields as type required -->
                                                                <div class="control">
                                                                    <input
                                                                        style="border: 0;  border-bottom: 1px solid #757575;"
                                                                        name="CONTACT_EMAIL" changetype="CONTACT_EMAIL"
                                                                        changeitem="SIGNUP_FORM_FIELD" type="email"
                                                                        required="true" id="CONTACT_EMAIL"
                                                                        placeholder="Email">
                                                                    <span style="display:none"
                                                                        id="dt_CONTACT_EMAIL">1,true,6,Subscriber
                                                                        Email,2</span>
                                                                </div>
                                                                <br>
                                                                <!-- check to mark emailid field as type email, and other mandatory fields as type required -->
                                                                <!-- check to mark emailid field as type email, and other mandatory fields as type required -->
                                                                <div class="control">
                                                                    <input
                                                                        style="border: 0; border-bottom: 1px solid #757575;"
                                                                        name="LASTNAME" changetype="LASTNAME"
                                                                        changeitem="SIGNUP_FORM_FIELD" type="text"
                                                                        id="LASTNAME" placeholder="Name">
                                                                    <span style="display:none"
                                                                        id="dt_LASTNAME">1,false,1,Last Name,2</span>
                                                                </div>
                                                                <div>
                                                                    <br>
                                                                    <button name="SIGNUP_SUBMIT_BUTTON"
                                                                        class="atmo-button atmo-button-dark"
                                                                        id="zcWebOptin"
                                                                        onclick="saveOptin(this,false,function runOnFormSubmit_sf3862480056483d240b93f1be7a687cccc98e811ca5f0889b(th) {
            /*Before submit, if you want to trigger your event, &quot;include your code here&quot;*/
        },'#sf3862480056483d240b93f1be7a687cccc98e811ca5f0889b[data-type=&quot;signupform_0&quot;] ',event);return false;">Join
                                                                        Now</button>
                                                                </div>
                                                                <!-- Do not edit the below Zoho Campaigns hidden tags -->
                                                                <input type="hidden" id="fieldBorder" value="">
                                                                <input type="hidden" id="submitType" name="submitType"
                                                                    value="optinCustomView">
                                                                <input type="hidden" id="lD" name="lD"
                                                                    value="162d5cd31ea28799">
                                                                <input type="hidden" name="emailReportId"
                                                                    id="emailReportId" value="">
                                                                <input type="hidden" id="formType" name="formType"
                                                                    value="QuickForm">
                                                                <input type="hidden" name="zx" id="cmpZuid"
                                                                    value="127983d4a">
                                                                <input type="hidden" name="zcvers" value="3.0">
                                                                <input type="hidden" name="oldListIds"
                                                                    id="allCheckedListIds" value="">
                                                                <input type="hidden" id="mode" name="mode"
                                                                    value="OptinCreateView">
                                                                <input type="hidden" id="zcld" name="zcld"
                                                                    value="162d5cd31ea28799">
                                                                <input type="hidden" id="document_domain"
                                                                    value="campaigns.zoho.com">
                                                                <input type="hidden" id="zc_Url"
                                                                    value="zca.maillist-manage.com">
                                                                <input type="hidden" id="new_optin_response_in"
                                                                    value="1">
                                                                <input type="hidden" id="duplicate_optin_response_in"
                                                                    value="1">
                                                                <input type="hidden" name="zc_trackCode"
                                                                    id="zc_trackCode" value="ZCFORMVIEW" onload="">
                                                                <input type="hidden" id="zc_formIx" name="zc_formIx"
                                                                    value="3862480056483d240b93f1be7a687cccc98e811ca5f0889b">
                                                                <!-- End of the campaigns hidden tags -->
                                                                <input type="text" style="display:none !important;"
                                                                    name="qs" class="ih"><input type="text"
                                                                    style="display:none !important;" name="lf"
                                                                    class="ih" value="1553861499793"><input
                                                                    type="hidden" name="di"
                                                                    value="114414421011093927171553861499798">
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <img src="https://zca.maillist-manage.com/images/spacer.gif" id="refImage"
                                        onload="referenceSetter(this)" style="display:none;">
                                </div>
                            </div>
                            <div id="zcOptinOverLay" oncontextmenu="return false"
                                style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;">
                            </div>
                            <div id="zcOptinSuccessPopup"
                                style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;">
                                <span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;"
                                    id="closeSuccess">
                                    <img src="https://zca.maillist-manage.com/images/videoclose.png">
                                </span>
                                <div id="zcOptinSuccessPanel"></div>
                            </div>
                        </div>
                        <!--Zoho Campaigns Web-Optin Form Ends Here-->
                    </section>
                </div>

            </div>

        </div>
    </div>
</section>

<?php get_footer();?>