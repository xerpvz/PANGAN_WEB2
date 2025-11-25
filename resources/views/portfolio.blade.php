@extends('app')

@section('content')

<header>
    <div class="logo">R<span>P</span></div>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About me</a>
        <a href="#education">Education</a>
        <a href="#work">Work</a>
        <button class="btn">Get in touch</button>
    </nav>
</header>

<section class="hero" id="home">
    <div class="photo-box">
        <img src="{{ asset('images/myphoto.jpg') }}" alt="Rhealyn Pangan">
    </div>

    <div class="content">
        <h1>PORTFOLIO</h1>
        <div class="outline">
            <p>PORTFOLIO</p>
            <p>PORTFOLIO</p>
            <p>PORTFOLIO</p>
        </div>

        <div class="links">
            <p>FB: /rhealynpangan</p>
            <p>IG: @trexxxyz</p>
            <p>GMAIL: rheapangan290@gmail.com</p>
        </div>
    </div>
</section>

<section class="about" id="about">
    <div class="about-wrapper">

        <div class="about-image">
            <img src="{{ asset('images/formal.png') }}" alt="Rhealyn Pangan Portrait">
            <h1 class="about-title-overlay"></h1>
        </div>

        <div class="about-text">
            <h2>Hi there, I'm</h2>
            <h1 class="typing-loop"><span>Rhealyn Pangan</span></h1>
            <h3>Web Designer (in the making)</h3>
            <p>
                I’m Rhealyn Pangan, a third-year Bachelor of Science in Computer Science student who finds beauty in design and purpose in creation.
            </p>

            <ul class="about-info">
                <li><strong>Birthday:</strong> January 29, 2005</li>
                <li><strong>Phone:</strong> 09999999999</li>
                <li><strong>From:</strong> Pampanga City, Philippines</li>
                <li><strong>Language:</strong> Kapampangan, Tagalog, English</li>
            </ul>
        </div>

    </div>
</section>


<section class="skills" id="skills">
    <h1 class="skills-title">My Skills</h1>

    <div class="skills-container">

        <div class="skill-circle" data-percent="85">
            <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
            </svg>
            <div class="skill-value">85%</div>
            <p>Web Design</p>
        </div>

        <div class="skill-circle" data-percent="70">
            <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
            </svg>
            <div class="skill-value">70%</div>
            <p>HTML / CSS</p>
        </div>

        <div class="skill-circle" data-percent="50">
            <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
            </svg>
            <div class="skill-value">50%</div>
            <p>JavaScript</p>
        </div>

        <div class="skill-circle" data-percent="65">
            <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
            </svg>
            <div class="skill-value">65%</div>
            <p>UI/UX</p>
        </div>

    </div>
</section>


<section class="education" id="education">
    <div class="edu-wrapper">

        <div class="edu-content">
            <h1 class="edu-title">Education</h1>

            <div class="timeline">

                <div class="timeline-item">
                    <div class="edu-year">2021 – 2023</div>
                    <div class="edu-details">
                        <h2>Jose C. Feliciano College Foundation</h2>
                        <h3>Humanities and Social Sciences (HUMSS)</h3>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="edu-year">2023 – Present</div>
                    <div class="edu-details">
                        <h2>City College of Angeles</h2>
                        <h3>Bachelor of Science in Computer Science</h3>
                    </div>
                </div>

            </div>
        </div>

        <div class="edu-photo">
            <img src="{{ asset('images/gradpic.jpg') }}" alt="Grad Picture">
        </div>

    </div>
</section>

<section class="work" id="work">
    <h1 class="work-title">My Work</h1>

    <div class="work-container">

        <!-- Project 1: Expense Tracker App -->
        <div class="work-card">
            <!-- Logo wrapped in a box -->
            <div class="work-img-box">
                <img src="{{ asset('images/logo.jpg') }}" 
                     alt="BudgeIt" 
                     class="work-img"
                     data-full="{{ asset('images/BudgeIt.jpg') }}">
            </div>

            <div class="work-info">
                <h2>BudgeIt</h2>
                <p>A user-friendly mobile app that helps track and manage expenses efficiently.</p>
                <a href="#" class="btn">View Project</a>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="work-card">
            <div class="work-img-box">
                <img src="{{ asset('images/logoR.png') }}" 
                     alt="Project Two" 
                     class="work-img"
                     data-full="{{ asset('images/home.png') }}">
            </div>

            <div class="work-info">
                <h2>Keytopia</h2>
                <p>A real estate project demonstrating responsive layouts and interactive property animations.</p>
                <a href="#" class="btn">View Project</a>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="work-card">
            <div class="work-img-box">
                <img src="{{ asset('images/project2-logo.jpg') }}" 
                     alt="Project Two" 
                     class="work-img"
                     data-full="{{ asset('images/project2-full.jpg') }}">
            </div>

            <div class="work-info">
                <h2>Project Two</h2>
                <p>An example project showing responsive design and animations.</p>
                <a href="#" class="btn">View Project</a>
            </div>
        </div>

    </div>
</section>



<!-- LIGHTBOX MODAL -->
<div id="lightbox" class="lightbox">
    <span class="close">&times;</span>
    <img class="lightbox-content" id="lightbox-img">
    <div id="lightbox-caption"></div>
</div>



@endsection
