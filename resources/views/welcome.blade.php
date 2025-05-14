@extends('layouts.master')

@section('content')
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f6ef;
  }
  h2, h4 {
    color: #333;
  }
  section {
    padding: 60px 0;
  }
  footer {
    text-align: center;
    padding: 20px;
    background-color: #222;
    color: #fff;
  }

  nav ul {
      list-style: none;
      display: flex;
      gap: 30px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      font-size: 16px;
      transition: color 0.3s ease;
    }

    nav ul li a:hover {
      color: #9f9471;
    }
    
  #home h1 {
    font-size: 3rem;
    animation: fadeIn 2s ease-in;
  }
  #home p {
    font-size: 1.25rem;
    animation: fadeIn 2s ease-in 1s;
  }
  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
  #home img {
    animation: slideIn 2s ease-out 1.5s;
  }
  @keyframes slideIn {
    from { transform: translateX(50px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
  }
  .fade-up {
    opacity: 0;
    animation: fadeUp 1.5s ease-out forwards;
  }
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .certificate-card, .project-card {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }
  .certificate-card:hover, .project-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
  }
  .skill-card:hover, .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }
  .btn:hover {
    background-color: #333;
    color: #fff;
    transition: all 0.3s ease;
  }
  .img-fluid:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
  }
  #about, #projects, #contact {
    opacity: 0;
    animation: fadeUp 1.5s ease-out forwards;
  }
  #about { animation-delay: 0.5s; }
  #projects { animation-delay: 1s; }
  #contact { animation-delay: 1.5s; }
  .card, .skill-card, #blog {
    opacity: 0;
    animation: fadeUp 1.5s ease-out forwards;
  }
  .col-md-6 .p-3:hover, .col-md-6 .d-flex .text-center:hover {
    background-color: #f1f1f1;
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }
  .col-md-6 .d-flex .text-center img:hover {
    transform: scale(1.1);
    transition: transform 0.3s ease;
  }
  #about p {
    font-size: 1.5rem;
  }
  #about h2 {
    text-align: center;
  }
  .certificate-card:hover, .project-card:hover, .contact-form-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 25px rgba(0, 0, 0, 0.1);
    transition: all 0.8s ease;
  }
  
</style>

<!-- Home Section -->
<section id="home" style="min-height: 100vh;" class="d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6 d-flex flex-column justify-content-center text-center text-md-start mb-5 mb-md-0">
        <h1 class="fw-bold">Hello, I’m <span class="text-dark">Brian Pine</span></h1>
        <p class="lead">I am an Information Technology graduate specializing in<br>
          Mobile and Web Development based in Pasay, Philippines.</p>
        <div class="mt-4">
          <a href="#about" class="btn btn-secondary me-2">More About Me</a>
          <a href="{{ asset('CV.pdf') }}" class="btn btn-dark">Download CV</a>
        </div>
        <div class="mt-4">
          <a href="https://www.facebook.com/pinebrian/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" width="30" class="me-2" alt="Facebook"></a>
          <a href="https://instagram.com/brianpine_?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" width="30" class="me-2" alt="Instagram"></a>
          <a href="https://www.linkedin.com/in/kenneth-brian-pine-b094462a3/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" width="30" alt="LinkedIn"></a>
        </div>
      </div>
      <div class="col-md-6 text-center">
        <img src="{{ asset('images/user.png') }}" alt="Brian Pine" class="img-fluid rounded-4 shadow" style="max-width: 65%;">
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-5 bg-white">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">About Me</h2>
    <div class="row align-items-center mb-5">
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/picture.jpg') }}" alt="Brian Pine" class="img-fluid rounded-circle shadow" style="max-width: 250px;">
      </div>
      <div class="col-md-8">
       <p>
          I am Kenneth Brian Pine, a 4th-year IT student at Adamson University. I have skills in designing user-friendly apps and managing projects.
          I worked on the 'AdU Foundit' mobile app as a designer, programmer, and writer. I also used Adobe XD to make app designs and helped with project documents.
          I hosted TechnoSummit 4.0, which improved my speaking and leadership skills. I am good at solving problems, working with others, adjusting to changes, and accepting feedback.
        </p>
      </div>
    </div>

    <!-- Education and Skills -->
    <div class="row mb-5">
      <!-- Education Section -->
      <div class="col-md-6">
        <h4 class="fw-bold mb-3">Education</h4>
        <div class="mb-3 p-3 border rounded bg-light shadow-sm d-flex align-items-center">
          <img src="{{ asset('images/AdU.png') }}" class="me-3" style="height: 60px;">
          <div>
            <h5 class="mb-1">Adamson University</h5>
            <p class="mb-0"><em>Tertiary Education</em></p>
            <p class="mb-0">Bachelor of Science in Information Technology</p>
          </div>
        </div>
        <div class="p-3 border rounded bg-light shadow-sm d-flex align-items-center">
          <img src="{{ asset('images/SCPS.png') }}" class="me-3" style="height: 60px;">
          <div>
            <h5 class="mb-1">Sta. Clara Parish School</h5>
            <p class="mb-0"><em>Senior High School</em></p>
            <p class="mb-0">Science, Technology, and Mathematics</p>
          </div>
        </div>
      </div>

      <!-- Skills Section -->
      <div class="col-md-6">
        <h4 class="fw-bold mb-3">Skills</h4>
        <div class="d-flex flex-wrap gap-3">
          @php
            $skills = [
              ['img' => 'adobexd.png', 'name' => 'Adobe XD'],
              ['img' => 'canva.png', 'name' => 'Canva'],
              ['img' => 'problem-solving.png', 'name' => 'Problem Solving'],
              ['img' => 'technical-support.jpg', 'name' => 'Technical Support'],
              ['img' => 'collaborative.png', 'name' => 'Collaboration'],
            ];
          @endphp
          @foreach ($skills as $skill)
            <div class="text-center p-3 border rounded bg-white shadow-sm flex-fill" style="width: 150px;">
              <img src="{{ asset('images/' . $skill['img']) }}" alt="{{ $skill['name'] }}" style="width: 50px; height: 50px; object-fit: contain;" class="mb-2"><br>
              {{ $skill['name'] }}
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Certificates as Cards -->
    <div class="mb-5">
      <h4 class="fw-bold mb-3">Certificates</h4>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 shadow-sm certificate-card">
            <a href="{{ asset('images/Certiport.png.jpg') }}" target="_blank">
              <img src="{{ asset('images/Certiport.png.jpg') }}" class="card-img-top" alt="Certiport Certificate">
            </a>
            <div class="card-body">
              <h5 class="card-title">Information Technology Specialist On Databases</h5>
              <p class="card-text">I am officially certified as an Information Technology Specialist in Databases by Certiport, demonstrating my skills in database management, SQL, and data handling.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm certificate-card">
            <a href="{{ asset('images/UICertificate.png') }}" target="_blank">
              <img src="{{ asset('images/UICertificate.png') }}" class="card-img-top" alt="UI Certificate">
            </a>
            <div class="card-body">
              <h5 class="card-title">Developing Designs for User Interface</h5>
              <p class="card-text">I completed the TESDA course on Developing Designs for User Interface, strengthening my skills in creating user-friendly and visually appealing UI designs.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <a href="{{ asset('images/UXCertificate.png') }}" target="_blank">
              <img src="{{ asset('images/UXCertificate.png') }}" class="card-img-top" alt="UX Certificate">
            </a>
            <div class="card-body">
              <h5 class="card-title">Developing Designs for User Experience</h5>
              <p class="card-text">This TESDA course helped me enhance my skills in building effective and engaging designs focused on user needs and satisfaction.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Blog -->
   
    <section id="blog" class="py-5">
    <div>
      <h4 class="fw-bold mb-3">Blog</h4>
      <h1>My On-the-Job Training Experience</h1>
      
          <p> I started my On-the-Job Training (OJT) on February 24, 2025, at OTis Philippines. On my first day, I felt nervous and overwhelmed because I was in a new place with new people. I was scared to ask questions at first because I thought I might get scolded. But I was wrong. My OJT supervisor and the HR manager were very kind and easy to talk to. They answered all my questions and made me feel welcome and comfortable.
            </p>
            <p>
                I quickly noticed that the workplace is very different from school. One big difference is time. I had to work for eight hours a day, five days a week, which was a big change from my usual school schedule. Another difference is the kind of tasks. In school, we have set subjects and schedules, but at work, it depends on what the supervisor needs us to do. Some days are busy, and some days are lighter.
            </p>
            <p>
                During my first two weeks, I had a hard time adjusting. Everything was new, and I didn’t know how to use some of the tools. When I got my first task, I didn’t know where to start or how to find the resources I needed. I solved this by searching on Google and watching YouTube tutorials. These helped me understand what to do and complete my task. We also had weekly meetings every Monday with our OJT supervisor. He would ask how we were doing, if we were still enjoying the training, and if we had any problems. He also checked our progress, which helped us stay on track.
            </p>
            <p>
                I faced a few challenges during my OJT, like adjusting to a new environment, being afraid to make mistakes, and not knowing how to start some tasks. Working long hours was also new to me, and it was hard to stay focused sometimes. But I slowly became more confident. I started asking more questions, talking to my teammates, and using online resources to help me. I also made a habit of taking notes and organizing my tasks.
            </p>
            <p>
                From this experience, I learned that it's okay to ask for help, that being prepared and organized really helps, and that stepping out of your comfort zone is important for growth. I also learned how to manage my time and be more responsible.
            </p>
            <p>
                Our last project was to create our own portfolio website. I enjoyed making it, but it was also a bit hard. It was difficult to decide on my personal style, choose the right color palette, design the layout, and think about what content to include. Still, I managed to finish it and felt proud of the result. This website will be very useful in the future when applying for jobs or showing my work to clients. It’s a good way to present my skills and experiences in a professional way.
            </p>
            <p>
                My On-the-Job Training was not just a school requirement, but also one of the best experiences I’ve ever had. What I really liked about working at OTis Philippines is the work-life balance. As long as we finish our tasks on time, we’re allowed a bit of free time to relax or take a short break. This helped me stay focused and avoid burnout. My colleagues were also very friendly and helpful. They were approachable, accommodating, and always willing to lend a hand when I needed help. They were great team players and made the work environment feel positive and supportive. It was nice to be part of a team that values respect and cooperation. I truly appreciate all the guidance and lessons they taught us—it was a big help throughout our OJT.
            </p>
    </div>
  </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-3">Projects</h2>
    <p  style="font-size:20px;">Here are some of the projects I've worked on, including lost-and-found apps, Design Thinking Project, and Colenailsmnl Website.</p>

    <!-- Projects List -->
    <div class="row">
      <!-- AdU Foundit Project -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm project-card">
          <img src="{{ asset('images/wok-1.png') }}" class="card-img-top" alt="AdU Foundit">
          <div class="card-body">
            <h5 class="card-title">Thesis and Capstone Project</h5>
            <h5 class="card-title">AdU Foundit</h5>
            <p class="card-text">AdU FoundIt is a mobile application that simplifies the management of lost and found items in Adamson University. It offers real-time access to surrendered items, a digital claim form, and dashboard analytics to track item trends within the university.</p>
          </div>
        </div>
      </div>

      <!-- Design Thinking Project -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm project-card">
          <img src="{{ asset('images/wok-2.png') }}" class="card-img-top" alt="Design Thinking">
          <div class="card-body">
            <h5 class="card-title">Design Thinking Project</h5>
             <h5 class="card-title">Colenailsmnl Website</h5>
            <p class="card-text">This project aimed to modernize Colenailsmnl's digital presence through a tailored IT solution with empathetic user research, streamlined appointment booking, and client personalization—offering a modern, aesthetic, and efficient salon experience.</p>
          </div>
        </div>
      </div>
  </div>
</section>


<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Contact Me</h2>
    <p class="text-center text-muted mb-5" style="font-size:20px;">Let’s work together. Thank you for visiting my portfolio! If you have questions, ideas, or want to collaborate, feel free to get in touch. I’ll respond as soon as possible.</p>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-lg border-0">
          <div class="card-body p-5">
            <form action="mailto:kennethbrianpine@gmail.com" method="POST" enctype="text/plain">
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" id="firstName" name="First Name" class="form-control" placeholder="John" required>
                </div>
                <div class="col-md-6">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input type="text" id="lastName" name="Last Name" class="form-control" placeholder="Doe" required>
                </div>
              </div>

              <div class="mt-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" name="Email" class="form-control" placeholder="john.doe@example.com" required>
              </div>

              <div class="mt-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="Message" rows="5" class="form-control" placeholder="Write your message here..." required></textarea>
              </div>

              <div class="text-center mt-4">
                <button type="submit" class="btn btn-dark px-5">Send Message</button>
              </div>
            </form>
          </div>
        </div>
        <div class="text-center mt-4">
          <p>Or email me directly at: <a href="mailto:kennethbrianpine@gmail.com" class="fw-bold text-dark">kennethbrianpine@gmail.com</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
 