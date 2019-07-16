@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
            <div class="w-100">
                <h1 class="mb-0">
                    @lang('user.first_name')
                    <span class="text-primary">
                        @lang('user.family_name')
                    </span>
                </h1>
                <div class="subheading mb-5">
                    Willowdale ·
                    Kingston Upon Hull ·
                    <a href="tel:+447593068106">+44 7593 068106</a> ·
                    <a href="mailto:kaimacmaster@me.com">kaimacmaster@me.com</a>
                </div>
                <p class="lead mb-5">
                    @lang('user.profile')
                </p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/kaimacmaster/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/strangekai/">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://twitter.com/strangekai">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="experience">
            <div class="w-100">
                <h2 class="mb-5">@lang('menu.experience')</h2>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0">Senior Web Developer</h3>
                        <div class="subheading mb-3">Mobius Media</div>
                        <p>Building Laravel web applications, managing projects, supporting project managers in providing estimate time scales.</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">June 2019 - Present</span>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0">Frontend Engineer</h3>
                        <div class="subheading mb-3">YourParkingSpace/Netsells</div>
                        <p>Developing in Vue and Laravel to implement changes to YourParkingSpace, overseeing all code pull requests, developing for front-end tasks in Jira, planning ‘epic’ tasks, providing estimates and delivering solutions.</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">November 2018 - June 2019</span>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0">Director of Creative Services</h3>
                        <div class="subheading mb-3">Beanmedia Ltd</div>
                        <p>Managing all of the projects that come through the company. Liaising with customers to plan and execute the build of multiple websites, branding and marketing material packs. Frequent use of the Adobe Creative Cloud suite of applications.</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">June 2013 - April 2017</span>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                    <div class="resume-content">
                        <h3 class="mb-0">Software Development Manager/DevOps</h3>
                        <div class="subheading mb-3">Netopian Ltd</div>
                        <p>Developing in Java (Native and Spring Boot), PHP (Native, Slim and Laravel) and Javascript (Native, jQuery, React and Angular). Planning all work projects in development, training employees, managing holiday requests.</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">November 2011 - November 2018</span>
                    </div>
                </div>

            </div>

        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
            <div class="w-100">
                <h2 class="mb-5">@lang('menu.education')</h2>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0">The Open University</h3>
                        <div class="subheading mb-3">Bachelor of Science</div>
                        <div>Computer Software Engineering & Language Studies</div>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">October 2017 (In Progress)</span>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                    <div class="resume-content">
                        <h3 class="mb-0">Business Training Academy</h3>
                        <div class="subheading mb-3">Apprenticeship in IT Software</div>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">June 2011 - February 2013</span>
                    </div>
                </div>

            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
            <div class="w-100">
                <h2 class="mb-5">@lang('menu.skills')</h2>

                <div class="subheading mb-3">Programming Languages &amp; Tools</div>
                <ul class="list-inline dev-icons mb-0">
                    <li class="list-inline-item">
                        <i class="fab fa-html5"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-css3-alt"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-laravel"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-js-square"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-vuejs"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-react"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-angular"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-node-js"></i>
                    </li>
                </ul>
                <ul class="list-inline dev-icons mb-5">
                    <li class="list-inline-item">
                        <i class="fab fa-java"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-adobe"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-sass"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-less"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-gulp"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-npm"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fab fa-yarn"></i>
                    </li>
                </ul>

                <div class="subheading mb-3">Workflow</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Mobile-First Frontend, Responsive Design
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        API First Backend
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Cross Browser Testing &amp; Debugging
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Cross Functional Teams
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Agile Development &amp; Scrum
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Test Driven Development
                    </li>
                </ul>
            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
            <div class="w-100">
                <h2 class="mb-5">@lang('menu.interests')</h2>
                <p>Apart from being a web developer, I enjoy most of my time looking after my son with my better half.</p>
                <p>But when I'm not changing nappies, making milk up or enjoying a chat and a brew with my best friend, I follow a number of sci-fi and fantasy genre movies and television
                    shows, and I spend a large amount of my free time learning <a href="/jp">Japanese</a> or exploring the latest technology
                    advancements in the front-end web development world.</p>
                <p class="mb-0">I also enjoy the odd Minecraft or Counter Strike session on the computer I built a few years back, but those are few and far between these days.</p>
            </div>
        </section>
    </div>
@endsection
