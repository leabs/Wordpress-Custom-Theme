<?php 
	
/*
	Template Name: Page No Title
*/
	
get_header('careers'); ?>

    <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>

        <section class="section quickly-launch" style="padding-top:50px; ">
    <div class="container">
        <h2 class="section-header has-text-centered">Current Openings</h2>
        <br>
        <p class="has-text-centered">The following career opportunities are currently available at Atmosphere:</p>
        <div class="openings-wrapper">


            
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        


            <a href="/careers/dev-ops-engineer.html">
                    <div class="openings-card">
                        <h4 class="icon-header">Senior DevOps Engineer</h4>
                        <p class="career-location">Minneapolis, MN; Syracuse, NY; or remote/home office location</p>
                        
                        <p class="career-description">Atmosphere is seeking to hire a full-time Senior DevOps Engineer to build and manage a system infrastructure that is automated, reliable and scalable and delivers an outstanding customer experience. &nbsp;The DevOps Engineer role will report to the CTO.</p>
                    </div>
                </a>

            <a href="/careers/firmware-developer.html">
                    <div class="openings-card">
                        <h4 class="icon-header">Firmware Developer</h4>
                        <p class="career-location">Minneapolis, MN; Syracuse, NY; or remote/home office location</p>
                        
                        <p class="career-description">Atmosphere is seeking to hire a firmware developer to expand the library of sensors, radios, and microcontroller/processor devices supported within the Atmosphere Studio IDE. The firmware developer role will report to the CTO.</p>
                    </div>
                </a>

        </div>
    </div>
</section>


<section class="section" style="background:#f5f5f5;">
    <div style="max-width:1000px; margin:0 auto;">
        <div>
            <h2 class="section-header has-text-centered">Future Opportunities</h2>
            <br>
            <p class="has-text-centered">If we don’t have any openings that fit your talents but you’d still like to apply, we want to hear from you! Reach out to us and we’ll be in touch.</p>
            <div class="career-form-card" style="margin-top:40px;">
                <div class="career-form-card-inner">
                <h3 class="career-form-title">Apply for a future opening</h3><label class="required-label"><span class="has-text-secondary">*</span>Required</label>
            </div>
                <br>
                <form action="https://formspree.io/careers@atmosphereiot.com" method="POST" class="career-form">
                    <div class="field">
                        <label class="label" >First Name*</label>
                        <div class="control">
                            <input type="text" name="first-name" class="first-name" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" >Last Name*</label>
                        <div class="control">
                            <input type="text" name="last-name" class="last-name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email*</label>
                        <div class="control">
                            <input type="email" name="email" class="email-form" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" >Phone*</label>
                        <div class="control">
                            <input type="text" name="phone" class="phone-number" placeholder="555-555-5555" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" >Location*</label>
                        <div class="control">
                            <input type="text" name="location" class="form-location" placeholder="Location" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">LinkedIn Profile</label>
                        <div class="control">
                            <input type="text" name="linkedin" placeholder="linkedin.com/yourprofile">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Resume/CV*</label>
                        <div class="control">
                            <textarea class="textarea" name="cover-letter" placeholder="Resume/CV" required></textarea>
                        </div>
                    </div>
                    <br>
                    <input type="hidden" name="_next" value="https://atmosphereiot.com/thankyou.html" />
                    <input type="text" name="_gotcha" style="display:none" />
                    <div class="has-text-centered">
                        <button type="submit" value="Submit" class="atmo-button atmo-button-dark career-form-button submit-form">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

    
<?php get_footer();?>