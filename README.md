<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bhai Parmanand Institute of Business Studies</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="images/dseu.jpeg" alt="DSEU Logo" width="300">
    <div style="flex-grow: 1;">
      <h1>Bhai Parmanand Institute of Business Studies</h1>
      <p>Affiliated to DSEU | Govt. of NCT Delhi</p>
      <div id="temperature">🌡 Loading temperature...</div>
    </div>
  </header>

<nav>
  <ul>
    <li><a href="#home">🏠 Home</a></li>
    <li><a href="#about">📘 About</a></li>
    <li><a href="#history">📜 History</a></li>
    <li><a href="#courses">📚 Courses</a></li>
    <li><a href="#academics">📅 Academics</a></li>
    <li><a href="#admissions">🎓 Admissions</a></li>
    <li><a href="#auth-section">🔐 Login/Register</a></li>
    <li><a href="#faculty">👨‍🏫 Faculty</a></li>
    <li><a href="contact">📞 contact</a><li>
  </ul>
</nav>

<section id="home">
  <h2 class="section-heading">☀ Welcome to BPIBS – Powered by Knowledge and Energy</h2>
  <div class="image-row">
    <img src="images/campus.jpg" alt="BPIBS Campus Building" class="popup-image">
    <img src="images/campus2.jpg" alt="Front Entrance of BPIBS" class="popup-image">
    <img src="images/outside.jpeg" alt="Flag Hoisting at BPIBS" class="popup-image">
  </div>
</section>

<section class="vc-director-container">
  <!-- Vice Chancellor Box -->
  <div class="vc-box">
    <img src="images/vice chancellor.jpg" alt="Vice Chancellor">
    <h2 style="color: skyblue; margin-top: 15px;">Prof. Ashok Kumar Nagawat</h2>
    <h4>Vice Chancellor</h4>
    <p>
      A distinguished academic and education leader, Prof. Nagawat holds a Ph.D. in Physics and has served in various senior academic and administrative roles across prestigious institutions.
    </p>
  </div>

  <!-- Director Box -->
  <div class="vc-box">
    <img src="images/director.jpg" alt="Director">
    <h2 style="color: skyblue; margin-top: 15px;">Prof. (Dr.) Girish Kumar Sharma</h2>
    <h4>Director</h4>
    <p>
      Prof. (Dr.) Girish Kumar Sharma is working as Director/Principal in the Shakarpur Campus of DSEU. He has around 25 years of teaching and research experience. His research interests include Distributed Operating Systems, Discrete Mathematical Structures, Data Mining, and Algorithm Design.
       He has guided 07 Ph.D. and many Master’s theses. He is a seasoned academic and an esteemed educationist currently serving as the Director of Bhai Parmanand Institute of Business Studies (BPIBS),
        a premier government institution under the Government of NCT of Delhi and affiliated with Delhi Skill and Entrepreneurship University (DSEU).
    </p>
  </div>
</section> 

<section id="objectives" class="flip-section">
   <div class="flip-container">

    <div class="flip-card">
      <div class="flip-inner">
        <div class="flip-front">
          <img src="images/objective.jpg" alt="OBJECTIVE">
        </div>
        <div class="flip-back">
          <h3>OBJECTIVE</h3>
          <p>To provide quality education that empowers students to face real-world challenges, grow professionally, and serve the community with integrity and innovation.</p>
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-inner">
        <div class="flip-front">
          <img src="images/vision.jpg" alt="VISION">
        </div>
        <div class="flip-back">
          <h3>VISION</h3>
          <p>To be a leading institution recognized for excellence in education, research, and innovation, fostering global professionals and future leaders.</p>
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-inner">
        <div class="flip-front">
          <img src="images/mission.jpg" alt="MISSION">
        </div>
        <div class="flip-back">
          <h3>MISSION</h3>
          <p>To deliver comprehensive academic programs and practical knowledge that inspire creativity, critical thinking, and lifelong learning.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<section id="about">
  <h2 class="section-heading">About the Institute</h2>

  <!-- ✅ Bhai Parmanand image with popup and hover -->
  <div style="text-align: center;">
    <img src="images/bhai-parmanand-retro.jpg" alt="Bhai Parmanand"
         class="popup-image hover-zoom"
         style="width: 300px; border-radius: 10px; margin-bottom: 20px;">
  </div>

  <p style="font-size: 18px; line-height: 1.6;">
    <strong>BPIBS</strong> Bhai Parmanand Institute of Technology (BPIT), Shakarpur Campus-I, is a prestigious technical institute established by the Government of NCT of Delhi in honor of the renowned freedom fighter and educationist Bhai Parmanand. 
    The institute is affiliated with the Delhi Skill and Entrepreneurship University (DSEU) and is dedicated to imparting quality education in the fields of engineering, technology, and applied sciences.
    Located in the heart of East Delhi, BPIT offers a vibrant academic environment with modern infrastructure, experienced faculty, and state-of-the-art laboratories. 
    The campus fosters innovation, entrepreneurship, and skill development among students, preparing them to meet the challenges of a rapidly evolving industry.
    With a strong focus on academic excellence and holistic development, BPIT continues to be a preferred choice for students aspiring to build successful careers in technical and professional domains...
  </p>
</section>



<section id="history">
  <h2 class="section-heading">HISTORY</h2>
  <p>Bhai Parmanand Institute of Technology (BPIT) was established in the year 2005 by the Government of NCT of Delhi as a tribute to the great visionary and freedom fighter Bhai Parmanand Ji,
     who dedicated his life to the cause of education and social reform. 
     The institute was founded with the aim of delivering world-class technical education to students and equipping them with the skills required to thrive in the ever-evolving industrial and technological landscape.
      Over the years, BPIT has grown in stature and reputation, emerging as one of the leading engineering and professional institutes in Delhi. 
      The institute's commitment to academic excellence, combined with a focus on innovation and ethics, has made it a hub for aspiring engineers and technocrats...</p>
</section>


<section id="courses">
  <h2 class="section-heading">COURSES OFFERED</h2>
  <div class="accordion">
    <!-- BBA -->
    <button onclick="toggleAccordion('bba')">📘 Bachelor of Business Administration (BBA)</button>
    <div id="bba" class="accordion-content">
      <p>
        The Bachelor of Business Administration (BBA) program at Bhai Parmanand Institute of Business Studies (BPIBS), Shakarpur Campus is a professionally crafted undergraduate course aimed at nurturing future business leaders and entrepreneurs. 
        Affiliated with the Delhi Skill and Entrepreneurship University (DSEU), the program offers a comprehensive understanding of core business disciplines including marketing, finance, human resources, operations, and entrepreneurship. At BPIBS, 
        the curriculum is designed to be industry-oriented with a strong focus on practical learning, case studies, project work, and personality development. 
        The institute also emphasizes the development of leadership skills, ethical decision-making, and effective communication to prepare students for the dynamic global business environment.
      </p>
    </div>

    <!-- BCA -->
    <button onclick="toggleAccordion('bca')">💻 Bachelor of Computer Applications (BCA)</button>
    <div id="bca" class="accordion-content">
      <p>The Bachelor of Computer Applications (BCA) program at Bhai Parmanand Institute of Business Studies (BPIBS), Shakarpur Campus, 
        is a three-year undergraduate course designed to provide students with a solid foundation in computer science and its practical applications.
         Affiliated with Delhi Skill and Entrepreneurship University (DSEU), the program covers key subjects like programming languages (C, Java, Python), database management, web development, software engineering, computer networks, and data structures.
          At BPIBS, the BCA curriculum is not just theoretical but emphasizes hands-on learning through lab work, projects, internships, and workshops.
           The program aims to equip students with the technical skills, problem-solving abilities, and industry-readiness required to pursue careers in IT, 
          software development, and data management, or further studies in computer science
      </p>
    </div>

    <!-- MOP -->
    <button onclick="toggleAccordion('mop')">📈 Diploma in Modern Office Practice (MOP)</button>
    <div id="mop" class="accordion-content">
      <p>
        The Diploma in Modern Office Practice (MOP) at Bhai Parmanand Institute of Business Studies (BPIBS),
         Shakarpur Campus is a specialized program aimed at preparing students for administrative and office management roles across industries.
         Affiliated with Delhi Skill and Entrepreneurship University (DSEU), the course blends traditional office skills with modern tools and technologies, covering subjects like office automation, communication skills, computer applications, shorthand, business correspondence, and data handling.
          BPIBS provides a practical learning environment with real-world simulations
           and industry-relevant training, empowering students with the professional etiquette, technical proficiency, and organizational knowledge necessary to thrive in today’s dynamic business environments.
      </p>
    </div>

    <!-- PGDM -->
    <button onclick="toggleAccordion('pgdm')">🎯 Post Graduate Diploma in Management (PGDM)</button>
    <div id="pgdm" class="accordion-content">
      <p>
        The Post Graduate Diploma in Management (PGDM) at Bhai Parmanand Institute of Business Studies (BPIBS), Shakarpur Campus is a two-year postgraduate program designed to cultivate advanced managerial and leadership skills. 
        Affiliated with Delhi Skill and Entrepreneurship University (DSEU), the PGDM curriculum integrates core business disciplines such as strategic management, marketing, human resource management, operations, and business analytics. 
        The program emphasizes experiential learning through case studies, internships, live projects, and industry interaction,
         preparing graduates for competitive corporate roles and entrepreneurial ventures. With a strong focus on innovation, ethics, and analytical thinking, 
        BPIBS equips students to meet the evolving demands of the global business ecosystem.
      </p>
    </div>
  </div>
</section>


<section id="academics">
  <h2 class="academics-heading">📅 Academics</h2>
  <div class="academics-options">
    <a href="files/academic calendar.pdf" target="_blank" class="academic-card">
      📆 Academic Calendar 
    </a>
    <a href="files/Bachelor of Computer Application (BCA) Semester I -IV.pdf" target="_blank" class="academic-card">
      📘 Syllabus 
    </a>
  </div>
</section>



<section id="admissions">
  <h2 class="section-heading">Admissions</h2>
  <div class="accordion">
    <button onclick="toggleAccordion('process')">📋 Process & Guidelines</button>
    <div id="process" class="accordion-content">
      <ol>
        <li>Register on the official DSEU portal: <a href="https://dseu.ac.in" target="_blank">https://dseu.ac.in</a></li>
        <li>Choose your course and select BPIBS as your preferred institute.</li>
        <li>Upload necessary documents: marksheets, ID proof, photos, etc.</li>
        <li>Pay the application fee through the portal.</li>
        <li>Check merit list or entrance examresult as per course requirement.</li>
        <li>Complete document verification at the campus.</li>
        <li>Pay the course fee to confirm your admission.</li>
      </ol>
    </div>

    <button onclick="toggleAccordion('eligibility')">✅ Eligibility Criteria</button>
    <div id="eligibility" class="accordion-content">
      <ul>
        <li><strong>BBA / BCA:</strong> Passed Class 12th from a recognized board with minimum 50% marks.</li>
        <li><strong>MOP:</strong> 10+2 (any stream) or equivalent from a recognized board.</li>
        <li><strong>PGDM:</strong> Graduation in any discipline from a recognized university.</li>
      </ul>
    </div>

    <button onclick="toggleAccordion('exams')">📝 Entrance Exams</button>
    <div id="exams" class="accordion-content">
      <ul>
        <li>For PGDM, applicants may be required to take a written entrance test or appear for an interview.</li>
        <li>For UG programs (BBA, BCA, MOP), admission is based on merit (Class 12th marks).</li>
      </ul>  
    </div>

    <button onclick="toggleAccordion('fees')">💰 Fee Structure</button>
    <div id="fees" class="accordion-content">
      <ul>
        <li><strong>BBA / BCA:</strong> Approx. ₹20,000 - ₹25,000 per year</li>
        <li><strong>MOP:</strong> Approx. ₹8,000 - ₹10,000 per year</li>
        <li><strong>PGDM:</strong> Approx. ₹35,000 - ₹40,000 per year</li>
      </ul>
      <p><em>*Exact fee may vary. Check DSEU official website.</em></p>
    </div>

    <button onclick="toggleAccordion('faqs')">❓ FAQs</button>
    <div id="faqs" class="accordion-content">
      <p><strong>Q:</strong> Can I apply offline?<br><strong>A:</strong> No, applications are accepted only through the online DSEU portal.<br><br>
         <strong>Q:</strong> Is there a hostel facility?<br><strong>A:</strong> No, BPIBS currently does not provide hostel facilities.</p>
    </div>
  </div>
</section>

<section id="auth-section" style="text-align: center; margin-top: 40px;">
  <h2>Student Portal</h2>

  <div class="auth-toggle">
    <button onclick="showAuthForm('login')">🔐 Login</button>
    <button onclick="showAuthForm('register')">📝 Register</button>
  </div>

  <!-- Login Form -->
  <div id="login-form">
    <form id="loginForm">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Login</button>
    </form>
  </div>

  <!-- Popup Message -->
  <div id="loginSuccess" style="display:none; margin-top:20px; background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; width: 300px; margin-left: auto; margin-right: auto;">
    ✅ Login Successful!
  </div>
  
 <!-- Register Form -->
<div id="register-form" style="display: none;">
  <form id="registerForm">
    <input type="text" name="fullname" placeholder="Full Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
    <button type="submit">Register</button>
  </form>

  <!-- ✅ Popup message for successful registration -->
  <div id="registerSuccess" style="display:none; margin-top:20px; background: #d1ecf1; color: #0c5460; padding: 15px; border-radius: 5px; width: 300px; margin-left: auto; margin-right: auto;">
    📝 Registration Successful!
  </div>
</div>


<!-- ...[Your existing content above remains unchanged]... -->

<section id="auth-section">
  <!-- [Student Portal section] -->

  <!-- ✅ Student Info Table (hidden by default, shown after login) -->
<div id="student-info" style="display: none;">
  <h2 style="text-align:center; margin-top: 20px;">🎓 Student Details</h2>
  <table style="margin: 20px auto; border-collapse: collapse; width: 90%; max-width: 900px; box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 10px; overflow: hidden;">
    <thead style="background-color: #4484d8; color: white;">
      <tr>
        <th style="padding: 12px; border: 1px solid #ccc;">Name</th>
        <th style="padding: 12px; border: 1px solid #ccc;">Roll No</th>
        <th style="padding: 12px; border: 1px solid #ccc;">Branch</th>
        <th style="padding: 12px; border: 1px solid #ccc;">College</th>
        <th style="padding: 12px; border: 1px solid #ccc;">Year</th>
      </tr>
    </thead>
    <tbody id="student-table-body" style="text-align: center;">
      <!-- JS will insert rows here -->
    </tbody>
  </table>
</div>

</section>

<section id="faculty">
  <h2>👨‍🏫 Faculty</h2>
  <div class="faculty-row">
  
  <div class="faculty-row">
    <!-- Prof. Girish Sharma -->
    <div class="faculty-card">
      <div class="faculty-image-box">
        <img src="images/Prof-Girish-Sharma-HOD.jpg" alt="Prof. Girish Sharma">
        <div class="name">Prof. Girish Sharma</div>
      </div>
      <p><strong>Designation:</strong> HOD (Head of Department)</p>
      <p><strong>Education:</strong></p>
      <ul>
        <li>M.Sc. (Physics) from Gurukul Kangri University – Haridwar</li>
        <li>MCA from Gurukul Kangri University Haridwar</li>
        <li>ME from Delhi College of Engg., Delhi University</li>
        <li>Ph.D. (Distributed Systems) from Gurukul Kangri University Haridwar</li>
      </ul>
      <p><strong>Expert Area:</strong> Mathematics, Software Testing, Software Engineering, Distributed Database Management System</p>
    </div>

    <!-- Mr. Kaushal Mehta -->
    <div class="faculty-card">
      <div class="faculty-image-box">
        <img src="images/Mr.kaushal mehta.jpg" alt="Mr. Kaushal Mehta">
        <div class="name">Mr. Kaushal Mehta</div>
      </div>
      <p><strong>Designation:</strong> Associate Professor & Training and Placement Officer</p>
      <p><strong>Education:</strong> B.E. (CSE), M.Tech (CSE) from GJU, Hissar</p>
      <p><strong>Expert Area:</strong> Data Communication and Networking, Programming in C, OOP, Software Quality Management</p>
    </div>

    <!-- Mr. Pravir Chitre -->
    <div class="faculty-card">
      <div class="faculty-image-box">
        <img src="images/Mr. Pravir Chitre.jpg" alt="Mr. Pravir Chitre">
        <div class="name">Mr. Pravir Chitre</div>
      </div>
      <p><strong>Designation:</strong> Associate Professor</p>
      <p><strong>Education:</strong></p>
      <ul>
        <li>B.E. (Computer Science) – Nagpur University</li>
        <li>Diploma in Business Management – Nagpur University</li>
        <li>M.Tech. (CSE) – Allahabad Agricultural Institute</li>
      </ul>
      <p><strong>Expert Area:</strong> Linux Programming, Networking, Android App Dev, Theory of Computation</p>
    </div>

    <!-- ✅ Mr. Deepak Sharma -->
    <div class="faculty-card">
      <div class="faculty-image-box">
        <img src="images/Mr. Deepak Sharma.jpg" alt="Mr. Deepak Sharma">
        <div class="name">Mr. Deepak Sharma</div>
      </div>
      <p><strong>Designation:</strong> Associate Professor</p>
      <p><strong>Education:</strong></p>
      <ul>
        <li>B.Sc. (PCM) from Jiwaji University</li>
        <li>MCA from Jiwaji University</li>
        <li>M.Tech. (Computer Science) from UPTU</li>
      </ul>
      <p><strong>Expert Area:</strong> Software Engineering, Computer Graphics, Software Project Management</p>
    </div>

    <!-- ✅ Dr. Shrikant Patel -->
<div class="faculty-card">
  <div class="faculty-image-box">
    <img src="images/Dr. Shrikant Patel.jpg" alt="Dr. Shrikant Patel">
    <div class="name">Dr. Shrikant Patel</div>
  </div>
  <p><strong>Designation:</strong> Associate Professor</p>
  <p><strong>Education:</strong></p>
  <ul>
    <li>B.Sc. (Electronics) from Dr. HSG University, Sagar (M.P.)</li>
    <li>MCA (Computer Applications) from Dr. HSG University, Sagar (M.P.)</li>
    <li>M.Phil. (Computer Science)</li>
    <li>Ph.D. in Computer Science and Engineering</li>
  </ul>
  <p><strong>Expert Area:</strong> Java Programming, Web Technology, Computer Organisation, Database Management System, Aspect Oriented Programming, Software Testing</p>
</div>

    <section class="web-team" id="web-team">
      <h2 class="team-heading">BPIBS - Web Designer Team</h2>
      <div class="team-container">

    
        <!-- KESHAV -->
        <div class="team-box">
          <img src="images/keshav.jpg" alt="Keshav Singh" class="team-photo">
          <h3>TEAM LEADER</h3>
          <p>KESHAV SINGH</p>
          <p>Frontend Developer</p>
          <p><strong>4th Semester / 2nd Year</strong></p>
          <p>Roll No: 230111009135</p>
          <p>Passionate about bridging the gap between design and technology, turning creative concepts into functional, live web pages.</p>
        </div>
    
        <!-- HEMANSH -->
        <div class="team-box">
          <img src="images/hemansh1.jpg" alt="Hemansh Singh" class="team-photo">
          <h3>HEMANSH SINGH</h3>
          <p>Backend Developer</p>
          <p><strong>4th Semester / 2nd Year</strong></p>
          <p>Roll No: 230111009113</p>
          <p>Love diving deep into logic and algorithms to make things work smoothly behind the scenes. Efficiency and scalability are exciting challenges.</p>
        </div>
    
        <!-- GOURAV -->
        <div class="team-box">
          <img src="images/gourav.jpg" alt="Gourav" class="team-photo">
          <h3>GOURAV</h3>
          <p>Content Founder</p>
          <p><strong>4th Semester / 2nd Year</strong></p>
          <p>Roll No: 230111009104</p>
          <p>Passionate about expressing ideas in unique, creative ways—through writing, design, video editing, or multimedia production.</p>
        </div>
    
        <!-- ISHA -->
        <div class="team-box">
          <img src="images/isha.jpg" alt="Isha" class="team-photo">
          <h3>ISHA</h3>
          <p>Report Writer</p>
          <p><strong>4th Semester / 2nd Year</strong></p>
          <p>Roll No: 230111009121</p>
          <p>Love turning complex information into clear, concise, and accurate reports that are easy to understand and act upon.</p>
        </div>
    
      </div>
      
      </section>

      <section id="contact" class="contact-section">
        <h2>📞 Contact Us</h2>
        <div class="contact-container">
          <div class="contact-info">
            <p><strong>📍 Address:</strong> Bhai Parmanand Institute of Business Studies, Shakarpur, Delhi-110092</p>
            <p><strong>📧 Email:</strong> bpibs@dseu.ac.in</p>
            <p><strong>📞 Phone:</strong> +91-11-22032095</p>
            <p><strong>⏰ Office Hours:</strong> Monday to Friday, 9:00 AM – 5:00 PM</p>
          </div>
      
          <!-- Embedded Google Map -->
          <div class="map-container">
            <a href="https://www.google.com/maps/place/Bhai+Parmanand+Institute+of+Business+Studies/@28.623219,77.283967,17z" 
               target="_blank" title="Open in Google Maps">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112098.7460338428!2d77.21282643799592!3d28.623215638108465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3a69a666f17%3A0x847f38abcbfb7852!2sBhai%20Parmanand%20Institute%20of%20Business%20Studies!5e0!3m2!1sen!2sin!4v1713635170805!5m2!1sen!2sin"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
              </iframe>
            </a>
          </div>
        </div>
      </section>
      
      

<footer>
  <p>&copy; 2025 Bhai Parmanand Institute of Business Studies.</p>
</footer>

<!-- Modal for Image Popup -->
<div id="imgModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="modalImage">
</div>
<script>
  const users = [
    { username: "keshav123", password: "pass123" },
    { username: "hemansh123", password: "pass123" },
    { username: "isha123", password: "pass123" },
    { username: "gourav123", password: "pass123" },
    { username: "vikram654", password: "passvikram" },
    { username: "simran111", password: "passsimran" },
    { username: "rohit777", password: "passrohit" },
    { username: "sneha888", password: "passsneha" },
    { username: "karan999", password: "passkaran" },
    { username: "anjali000", password: "passanjali" }
  ];

  document.getElementById("loginForm").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent form from submitting

    const username = this.username.value.trim();
    const password = this.password.value.trim();

    const match = users.find(user => user.username === username && user.password === password);

    if (match) {
      document.getElementById("loginSuccess").style.display = "block";
    } else {
      alert("❌ Invalid username or password");
    }
  });

  function showAuthForm(type) {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    if (type === 'login') {
      loginForm.style.display = 'block';
      registerForm.style.display = 'none';
    } else {
      loginForm.style.display = 'none';
      registerForm.style.display = 'block';
    }
  }
</script>


<script src="script.js"></script>
</body>
</html>
