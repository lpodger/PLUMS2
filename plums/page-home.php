<?php
    /**
    * Template Name: Home Page
    */
    get_header();
?>

    <main class="home">
            <div class="hero-section">
                <div class="intro-text-container">
                    <img src="<?php echo get_template_directory_uri();?>/images/underline-word.svg" class="underline-one" alt="Please Level Up My Skills Underlined">
                    <p class="p1">Fresh out of school? Looking for a change in career? Unsure of where to begin? <em>PLUMS</em> will help you find a course thats right for you. </p>
                    <a href="#about" class="button btn-1">Tell Me More</a>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/images/levelup.svg" alt="Girl Leveling Up">
            </div>
            <img id="about" src="<?php echo get_template_directory_uri();?>/images/tilt-1.svg" class="tilt-1" alt="Green Triangle">
            <div class="section-2">
                <img src="<?php echo get_template_directory_uri();?>/images/confused-man.svg" class="" alt="Confused Man">
                <div class="why-plums-container">
                    <h2 class="align-center">Why Use Plums?</h2>
                    <p>PLUMS is a short 10 minute quiz to help you find out what course is right for you.</p>
                    <p>When you finish the quiz you will have a better idea of how ready you are for the course you want to do.</p>
                    <p>You will also be able to get an idea of what areas you can strengthen to feel more confident going forward.</p>
                    <a href='#cards' class="button btn-2">Who's it For?</a>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri();?>/images/tilt-2.svg" class="tilt-2" alt="Green Triangle">
            <div id="cards" class="card-container">
                <section class="card">
                    <img src="<?php echo get_template_directory_uri();?>/images/school-kids.svg" alt="School Kids">
                    <h2 class="align-center">Schools Leavers</h2>
                    <p>An exciting time as you take the next step in your journey.</p>
                    <p>Find out what it takes to succeed in your chosen course.</p>
                </section>
                <section class="card">
                    <img src="<?php echo get_template_directory_uri();?>/images/mature.svg" alt="Mature Adult">
                    <h2 class="align-center">Mature Age</h2>
                    <p>Changing career or simply looking to expand your skillset?</p>
                    <p>Take a short quiz to see if you have transferable skills.</p>
                </section>
                <section class="card">
                    <img src="<?php echo get_template_directory_uri();?>/images/graduated.svg" alt="Graduates">
                    <h2 class="align-center">Returning Students</h2>
                    <p>You finished your qualification and now your looking to continue your studies.</p>
                    <p>How about a short test of your knowledge?</p>
                </section>
                    
                <a href='https://plums.lachlanpodger.com/index.php/quizzes/' class="button btn-3">Start Now</a>
            </div>
        
        </main>
            <?php
            get_footer();