<div class="work content" style="display:none;">

    <h1>The Workspace</h1>

    <p>Welcome to my work space. This is an area I will use to provide How-to articles, examples of work, links to interesting articles and more.</p> 
    
    <p>By trade, I am a programmer. I work primarily in <a href="http://www.php.net/" title="Link to the Official PHP Website">PHP</a> and <a href="https://www.javascript.com/" title="Link to the Official Javascript Website">javascript</a> using <a href="https://cakephp.org/" title="Link to the Official CakePHP website">CakePHP</a> (2.x, 3.x), <a href="https://laravel.com/" title="Link to the official Laravel website">Laravel</a> and other custom frameworks. I have assisted in building sites from scratch (<a href="http://regtorace.com" title="An all inclusive event registration platform that was bought out by EnMotive" target="_blank">RegToRace.com</a>, using a custom framework) and am currently working on a project with other programmers that have been working on a site for over 10 years (<a href="http://enmotive.com" title="Link to EnMotive Website - An all inclusive event management and registration platform" target="_blank">EnMotive.com</a>, multiple sites that use CakePHP 2, Laravel, <a href="https://octobercms.com/" title="Link to the official October CMS website">OctoberCMS</a>, REST API and SalesForce).</p>

    <p>The desired outcome of both of these projects is very similar. To provide a good user experience (UX) to front end (event registrants) users and back end (event, EnMotive, sponsor, organization) administrators. Both require:
        <ul>
            <li>A secure method for registering people for events</li>
            <li>A PCI compliant method for accepting payment through a merchant API (<a href="https://www.bluepay.com/" title="Link to Bluepay - Online merchant services">BluePay</a>)</li>
            <li>A login method for allowing access to the back end</li>
            <li>Permissions for providing necessary views and tools for administrators</li>
            <li>The ability for users to login and locate their prior registrations or complete open orders</li>
            <li>The ability for administrators to create, view and modify event details</li>
            <li>The ability for administrators to interact with current and prospective registrants through single email conveyance or through email blasts</li>
            <li>Emails to be sent through third-party hosting in order to manage and track sending, opening and click following (<a href="https://mailchimp.com/" title="Link to Mailchimp - Email and marketing engagement platform">Mailchimp</a>)</li>
            <li>The ability for administrators to download reports (financial and registrant data), especially in preparation for upcoming events or end of year taxes</li>
        </ul>
    </p>

    <p>
        The main differences between these to projects include:
        <ul>
            <li>Number of events and registrations
                <ul>
                    <li>RegToRace had around 40,000 registrants a year, whereas EnMotive has some events with 40,000 registrants in a single event</li>
                    <li>RegToRace had around 20 events per year, EnMotive has hundreds per year</li>
                </ul>
            </li>
            <li>RegToRace/AASports had a single person as the programmer, customer service agent and IT department. EnMotive has two programmers, an entire customer service and IT department</li>
        </ul>
    </p>

    <p>In this industry, a programmer must constantly be learning and using their skills to stay relevant. This is my area for "playing" with my code and to showcase items I have found useful. Whether you are a novice just learning or someone that has been doing this for a while, I hope you have the chance to interact with me to better understand why I did something or to help me find a better way to implement something.</p>

<!-- ToDo blog articles - category = work, quote = true -->
    <blockquote>“The business of a scientific school is the dissemination of useful knowledge, and this is a noble enterprise and indispensable withal; society can not exist unless it goes on.”<br />
    — Albert J. Nock</blockquote>

    <ul>Profiles
        <li><a href="https://www.linkedin.com/in/pdxbug/" title="LinkedIn Profile" target="_blank">LinkedIn</a></li>
        <li><a href="https://github.com/pdxbug/" title="GitHub Projects" target="_blank">GitHub</a></li>
    </ul>

<!-- ToDo blog articles - how tos, example code, etc -->
    <?php 
    debug($articles);exit();
    if (!empty($articles['blog'])) {
        foreach ($articles as $article) {
            echo $article->title;
        } 
    }
    ?>

</div>
