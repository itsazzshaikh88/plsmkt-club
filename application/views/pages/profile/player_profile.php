<div class="profile-main" style="width: 70%; height: 80%; overflow: auto">
    <div class="profile-container">
        <img src="./images/cover-pic.png" width="100%" />
        <div class="profile-container-inner">
            <img src="./images/user-1.png" class="profile-pic" />
            <div class="ps-3">
                <h1><?= $players['name'] ?></h1>
                <b><?= $players['p_id'] ?></b>
                <!-- <div class="mutual-connection">
              <img src="./images/user-2.png" alt="" />
              <span>1 mutual connection: Orlando Diggs</span>
            </div> -->
            </div>
            <div class="profile-btn ps-3 pb-3">
                <a href="profile/edit" class="primery-btn"><i class="bi bi-person-plus"></i> <span class="ms-1">Edit Profile</span></a>
                <!-- <a href="#">Message</a> -->
            </div>
        </div>
    </div>

    <div class="profile-description">
        <div class="Bio-caption">
            <h2>BIO</h2>
         
        </div>


        <p>
        <?= $players['bio'] ?>
        </p>
        <a href="#" class="see-more-link">see more...</a>
    </div>
    <div class="profile-description">
        <h2>Experience</h2>
        <div class="profile-desc-row">
            <img src="./images/microsoft.png" alt="" />
            <div>
                <h3>Lead Front-End Developer</h3>
                <b>Microsoft &middot; Full-time</b>
                <b>Feb 2021 - Present &middot; 1.5 years</b>
                <p>
                    Computer programming is the process of performing a particular
                    computation, useally by designing and building an executable
                    computer program.
                </p>
                <hr />
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="./images/slack.png" alt="" />
            <div>
                <h3>Full Stack Developer</h3>
                <b>slack &middot; Full-time</b>
                <b>June 2018 - Jan 2021 &middot; 2.6 years</b>
                <p>
                    Computer programming is the process of performing a particular
                    computation, useally by designing and building an executable
                    computer program.
                </p>
                <hr />
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="./images/google.png" alt="" />
            <div>
                <h3>Web Developer</h3>
                <b>Google Inc &middot; Full-time</b>
                <b>Sept 2015 - May 2018 &middot; 2.8 years</b>
                <p>
                    Computer programming is the process of performing a particular
                    computation, useally by designing and building an executable
                    computer program.
                </p>
                <hr />
            </div>
        </div>

        <a href="#" class="experience-link">Show all 7 Experience <img src="./images/right-arrow.png" alt="" /></a>
    </div>

    <div class="profile-description">
        <h2>Education</h2>
        <div class="profile-desc-row">
            <img src="./images/stanford.png" alt="" />
            <div>
                <h3>stanford University</h3>
                <b>BSEE, Electrical Engineering</b>
                <b>2018 - 2022</b>
                <hr />
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="./images/north.png" alt="" />
            <div>
                <h3>Northwestern University</h3>
                <b>Computer Sciecne</b>
                <b>2015 - 2018</b>
                <hr />
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="./images/mit.png" alt="" />
            <div>
                <h3>Harvard University</h3>
                <b>Senior High School</b>
                <b>2005 - 2015</b>
            </div>
        </div>
    </div>
    <div class="profile-description">
        <h2>Skills</h2>
        <a href="#" class="skills-btn"><?= $players['skills'] ?></a>
        <!-- <a href="#" class="skills-btn">Web Design</a>
        <a href="#" class="skills-btn">Development</a>
        <a href="#" class="skills-btn">Communication</a>
        <a href="#" class="skills-btn">UI/UX</a>
        <a href="#" class="skills-btn">Planning</a>
        <a href="#" class="skills-btn">Coding</a>
        <a href="#" class="skills-btn">JavaScript</a>
        <a href="#" class="skills-btn">Python</a>
        <a href="#" class="skills-btn">Enterprenuorship</a> -->
    </div>
    <div class="profile-description">
        <h2>Languages</h2>
        <a href="#" class="language-btn">English</a>
        <a href="#" class="language-btn">German</a>
    </div>
</div>

<!-- -------------profile-sidebar----------- -->