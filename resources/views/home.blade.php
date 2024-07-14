
@extends('layouts.masterlayout')
@section('content')
        <section class="hero" style="background: black">
            <div class="container">
                <div class="about-me animate-text">
                    <h1>About Me</h1>
                    <p>Hello! I'm a PHP Developer with a passion for creating dynamic and efficient web applications. I specialize in back-end development and have a strong understanding of front-end technologies.</p>
                </div>
                <div class="home-image">
                    <img src="https://media.istockphoto.com/id/1364917563/photo/businessman-smiling-with-arms-crossed-on-white-background.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=NtM9Wbs1DBiGaiowsxJY6wNCnLf0POa65rYEwnZymrM=" alt="Skills">
                </div>
            </div>
        </section>

        <!-- Content sections with alternating image and text -->
        <section class="content">
            <div class="container">
                <div class="content-section">
                    <div class="image">
                        <img src="https://media.istockphoto.com/id/1364917563/photo/businessman-smiling-with-arms-crossed-on-white-background.jpg?s=612x612&w=0&k=20&c=NtM9Wbs1DBiGaiowsxJY6wNCnLf0POa65rYEwnZymrM=" alt="Skills">
                    </div>
                    <div class="text">
                        <h2>My Skills</h2>
                        <p>I am proficient in PHP, Laravel, MySQL, JavaScript, HTML, CSS, and various other technologies. My skills also include problem-solving, debugging, and optimizing code for performance.</p>
                    </div>
                </div>
            </div>
        </section>



        <section class="content">
            <div class="container">
                <div class="content-section">
                    <div class="text">
                        <h2>My Experience</h2>
                        <p>With over 5 years of experience in PHP development, I have worked on a wide range of projects, from small business websites to large-scale enterprise applications.</p>
                    </div>
                    <div class="image">
                        <img src="https://media.istockphoto.com/id/1364917563/photo/businessman-smiling-with-arms-crossed-on-white-background.jpg?s=612x612&w=0&k=20&c=NtM9Wbs1DBiGaiowsxJY6wNCnLf0POa65rYEwnZymrM=" alt="Experience">
                    </div>
                </div>
                {{-- <div class="content-section">
                    <div class="image">
                        <img src="skills.jpg" alt="Skills">
                    </div>
                    <div class="text">
                        <h2>My Skills</h2>
                        <p>I am proficient in PHP, Laravel, MySQL, JavaScript, HTML, CSS, and various other technologies. My skills also include problem-solving, debugging, and optimizing code for performance.</p>
                    </div>
                </div> --}}
            </div>
        </section>


        <!-- Projects section -->
        <section class="projects">
            <div class="container">
                <h2>My Projects</h2>
                <div class="project-cards">
                    <div class="card">
                        <h3>Project 1</h3>
                        <p>A brief description of the project.</p>
                    </div>
                    <div class="card">
                        <h3>Project 2</h3>
                        <p>A brief description of the project.</p>
                    </div>
                    <div class="card">
                        <h3>Project 3</h3>
                        <p>A brief description of the project.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact section -->
        <section class="contact">
            <div class="container">
                <h2>Contact Me</h2>
                <form action="contact.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </div>
        </section>
        @endsection
