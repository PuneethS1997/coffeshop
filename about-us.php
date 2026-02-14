<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us | Fifth Gen Coffee</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>

/* ==============================
   GLOBAL STYLES
============================== */

body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: #0b0b0c;
    color: #eaeaea;
    overflow-x: hidden;
}

section {
    padding: 120px 8%;
    position: relative;
}

h1, h2, h3 {
    font-family: 'Playfair Display', serif;
    letter-spacing: -0.5px;
}

h1 {
    font-size: 64px;
    line-height: 1.1;
}

h2 {
    font-size: 42px;
    margin-bottom: 30px;
}

p {
    font-size: 18px;
    line-height: 1.8;
    color: #cfcfcf;
}

/* ==============================
   HERO SECTION
============================== */

.hero {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background: radial-gradient(circle at center, #141414 0%, #0b0b0c 80%);
    overflow: hidden;
}

.hero-content {
    position: relative;
    z-index: 5;
    max-width: 800px;
}

.hero h1 {
    background: linear-gradient(90deg,#ffffff,#c6a85c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero p {
    margin-top: 20px;
    font-size: 20px;
    color: #bfbfbf;
}

/* Three canvas */
#hero-canvas {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 1;
}

/* ==============================
   LUXURY CONTENT BLOCKS
============================== */

.split {
    display: flex;
    gap: 80px;
    align-items: center;
}

.split img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 30px 80px rgba(0,0,0,0.6);
}

.split .text {
    flex: 1;
}

.split .image {
    flex: 1;
}

/* Alternate layout */
.reverse {
    flex-direction: row-reverse;
}

/* ==============================
   VALUES SECTION
============================== */

.values {
    text-align: center;
    background: linear-gradient(180deg,#0b0b0c,#111111);
}

.value-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
    gap: 40px;
    margin-top: 60px;
}

.value-card {
    padding: 40px;
    background: rgba(255,255,255,0.03);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    border: 1px solid rgba(255,255,255,0.05);
    transition: 0.4s ease;
}

.value-card:hover {
    transform: translateY(-10px);
    border-color: #c6a85c;
}

/* ==============================
   CTA
============================== */

.cta {
    text-align: center;
    background: #111;
}

.cta a {
    display: inline-block;
    margin-top: 30px;
    padding: 16px 40px;
    background: linear-gradient(90deg,#c6a85c,#8f6b2e);
    color: #000;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s;
}

.cta a:hover {
    transform: scale(1.05);
}

/* ==============================
   RESPONSIVE
============================== */

@media(max-width: 900px){
    .split {
        flex-direction: column;
    }
    h1 {
        font-size: 44px;
    }
}
/* ================= LEGACY TIMELINE ================= */

.legacy-section {
    background: #6e4b3a;
    padding: 120px 10%;
    position: relative;
}

.legacy-title {
    text-align: center;
    font-size: 48px;
    color: #fff;
    margin-bottom: 100px;
    font-weight: 300;
}

.timeline {
    position: relative;
    max-width: 1200px;
    margin: auto;
}

.timeline::after {
    content: '';
    position: absolute;
    width: 4px;
    background: rgba(255,255,255,0.3);
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -2px;
}

/* Timeline Items */
.timeline-item {
    padding: 40px 0;
    position: relative;
    width: 50%;
    opacity: 0;
    transform: translateY(60px);
    transition: all 0.8s ease;
}

.timeline-item.show {
    opacity: 1;
    transform: translateY(0);
}

.timeline-item.left {
    left: 0;
}

.timeline-item.right {
    left: 50%;
}

.timeline-content {
    background: #7d5644;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    transition: 0.4s ease;
}

.timeline-content:hover {
    transform: translateY(-10px);
}

.timeline-content img {
    width: 100%;
    border-radius: 15px;
    margin-bottom: 20px;
    filter: grayscale(20%);
    transition: 0.4s ease;
}

.timeline-content:hover img {
    filter: grayscale(0%);
}

.timeline-content h3 {
    color: #fff;
    margin-bottom: 5px;
}

.timeline-content p {
    color: rgba(255,255,255,0.85);
}

/* Timeline Dots */
.timeline-item::after {
    content: '';
    position: absolute;
    width: 18px;
    height: 18px;
    right: -9px;
    background: #fff;
    border-radius: 50%;
    top: 60px;
    z-index: 1;
}

.timeline-item.right::after {
    left: -9px;
}

/* Responsive */
@media(max-width: 900px) {
    .timeline::after {
        left: 20px;
    }

    .timeline-item {
        width: 100%;
        padding-left: 60px;
    }

    .timeline-item.right {
        left: 0%;
    }

    .timeline-item::after {
        left: 11px;
    }
}
/* ================= GLOBAL RECOGNITION ================= */

.recognition-section {
    background: linear-gradient(180deg, #6e4b3a 0%, #5a3d2f 100%);
    padding: 120px 8%;
    position: relative;
    overflow: hidden;
}

.recognition-header {
    text-align: center;
    margin-bottom: 80px;
}

.recognition-header h2 {
    font-size: 48px;
    color: #fff;
    font-weight: 300;
    margin-bottom: 10px;
}

.recognition-header p {
    color: rgba(255,255,255,0.7);
    font-size: 18px;
}

.recognition-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

/* Card Base */
.recognition-card {
    position: relative;
    border-radius: 25px;
    overflow: hidden;
    cursor: pointer;
    box-shadow: 0 30px 60px rgba(0,0,0,0.4);
    transition: 0.6s ease;
}

.recognition-card img {
    width: 100%;
    height: 100%;
    object-fit: fill;
    transition: 0.8s ease;
}

/* Overlay */
.recognition-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 30px;
    background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.2), transparent);
    color: #fff;
}

.recognition-overlay h3 {
    font-size: 22px;
    margin-bottom: 5px;
}

.recognition-overlay p {
    font-size: 15px;
    opacity: 0.85;
}

/* Hover Effect */
.recognition-card:hover img {
    transform: scale(1.1);
}

.recognition-card:hover {
    transform: translateY(-12px);
}

/* Custom Sizes */
.recognition-card.large {
    grid-column: span 2;
    height: 420px;
}

.recognition-card.wide {
    grid-column: span 3;
    height: 350px;
}

.recognition-card:not(.large):not(.wide) {
    height: 350px;
}

/* Responsive */
@media(max-width: 1000px){
    .recognition-grid {
        grid-template-columns: 1fr;
    }

    .recognition-card.large,
    .recognition-card.wide {
        grid-column: span 1;
    }
}

</style>
</head>

<body>

<!-- ================= HERO ================= -->
<section class="hero">
    <div id="hero-canvas"></div>
    <div class="hero-content">
        <h1>Fifth Generation Coffee Excellence</h1>
        <p>Rooted in heritage. Refined by innovation. Crafted for those who understand coffee is an art.</p>
    </div>
</section>


<!-- ================= STORY ================= -->
<section class="split">
    <div class="text">
        <h2>Our Story</h2>
        <p>
        Born from five generations of dedication to the craft of coffee, Fifth Gen Coffee
        represents a seamless fusion of tradition and modern refinement.
        </p>
        <p>
        From sourcing exceptional beans to mastering the roast,
        we honor heritage while elevating the future of specialty coffee.
        </p>
    </div>
    <div class="image">
        <img src="./assets/images/our_story.avif" alt="our_story">
    </div>
</section>

<!-- ================= LEGACY TIMELINE ================= -->
<section class="legacy-section">
    <h2 class="legacy-title">Our Legacy</h2>

    <div class="timeline">

        <!-- ITEM 1 -->
        <div class="timeline-item left">
            <div class="timeline-content">
                <img src="./assets/images/dileep_kumar.avif" alt="Dilip Kumar Sahab">
                <h3>Dilip Kumar Sahab</h3>
                <p>Indian Actor & Awardee</p>
            </div>
        </div>

        <!-- ITEM 2 -->
        <div class="timeline-item right">
            <div class="timeline-content">
                <img src="./assets/images/s_nijalingappa.avif" alt="S. Nijalingappa">
                <h3>S. Nijalingappa</h3>
                <p>Former Chief Minister of Karnataka</p>
            </div>
        </div>

        <!-- ITEM 3 -->
        <div class="timeline-item left">
            <div class="timeline-content">
                <img src="./assets/images/indira_gandhi.avif" alt="Indira Gandhi">
                <h3>Smt. Indira Gandhi Ji</h3>
                <p>3rd Prime Minister Of India</p>
            </div>
        </div>

        <!-- ITEM 4 -->
        <div class="timeline-item right">
            <div class="timeline-content">
                <img src="./assets/images/zakir_hussain.avif" alt="Dr Zakir Hussain">
                <h3>Dr. Zakir Hussain</h3>
                <p>3rd President Of India</p>
            </div>
        </div>

        <!-- ITEM 5 -->
        <div class="timeline-item left">
            <div class="timeline-content">
                <img src="./assets/images/delegates.avif" alt="Delegates">
                <h3>Rasulpur Estates</h3>
                <p>Delegates at Rasulpur Estates</p>
            </div>
        </div>

        <!-- ITEM 6 -->
        <div class="timeline-item right">
            <div class="timeline-content">
                <img src="./assets/images/indira_gandhi_visit.avif" alt="Indira Gandhi Visit">
                <h3>Smt. Indira Gandhi Ji</h3>
                <p>Visit to Rasulpur Coffee Estates</p>
            </div>
        </div>

    </div>
</section>

<!-- ================= OUR MD ================= -->
<section class="split reverse">
    <div class="text">
        <h2>Our MD</h2>
        <h3>Mrs. Sumaira</h3>
        <p>
        Founder & Managing Director, Fifth Generation Speciality Cafes.  
        CEO, Rasulpur Coffee Estates & Roasters.  
        Incubatee, Coffee Board of India.  
        Member, Black Coffee Association of India.
        </p>

        <p>
        Ms. Sumaira is an avid enthusiast & the 5th Generation of the Rasulpur Coffee Estates.
        With her dynamic leadership and dedication, she has driven forward the achievements
        and heritage of the company.
        </p>

        <p>
        A visionary working to showcase to the world the value & love behind Coffee Production,
        Blending and Roasts prepared in Kodagu, Karnataka, India.
        </p>
    </div>
    <div class="image">
        <img src="./assets/images/samira.avif" alt="Mrs Sumaira">
    </div>
</section>



<!-- ================= BUSINESS PROPOSAL ================= -->
<section class="split">
    <div class="text">
        <h2>The Proposal</h2>

        <p><strong>25+ High Commute Outlets</strong> expansion over 5 months.</p>
        <p><strong>Live Coffee Bar</strong> – India’s first kiosk model offering live preparation.</p>
        <p><strong>Premier Outlet Investment</strong> starting from INR 30,00,000.</p>
        <p><strong>International Standards</strong> – Global machinery & food grade systems.</p>
        <p><strong>Farm Fresh Menu</strong> – Fresh from our farms to your cup.</p>
        <p><strong>Centralised Supply Chain</strong> ensuring systemic growth.</p>

    </div>
    <div class="image">
        <img src="./assets/images/business_praposal.avif" alt="Business Proposal">
    </div>
</section>


<!-- ================= SOURCING ================= -->
<section class="split reverse">
    <div class="text">
        <h2>Ethical Sourcing</h2>
        <p>
        We partner directly with passionate farmers across the world,
        ensuring sustainability, transparency, and premium quality at origin.
        </p>
        <p>
        Every bean is carefully selected to deliver an unforgettable sensory experience.
        </p>
    </div>
    <div class="image">
        <img src="./assets/images/farm.avif" alt="Coffee Farm">
    </div>
</section>


<!-- ================= CRAFT ================= -->
<section class="split">
    <div class="text">
        <h2>The Art of Roasting</h2>
        <p>
        Precision. Patience. Passion.
        Our roasting philosophy is rooted in unlocking the full potential of every origin.
        </p>
        <p>
        Through meticulous profiling and small-batch techniques,
        we deliver complexity, clarity, and character in every cup.
        </p>
    </div>
    <div class="image">
        <img src="./assets/images/roasting.jpg" alt="Roasting Process">
    </div>
</section>


<!-- ================= VALUES ================= -->
<section class="values">
    <h2>Our Philosophy</h2>
    <div class="value-grid">
        <div class="value-card">
            <h3>Heritage</h3>
            <p>Five generations of knowledge distilled into every roast.</p>
        </div>
        <div class="value-card">
            <h3>Precision</h3>
            <p>Meticulous roasting science meets artisan craftsmanship.</p>
        </div>
        <div class="value-card">
            <h3>Innovation</h3>
            <p>Elevating tradition with forward-thinking techniques.</p>
        </div>
        <div class="value-card">
            <h3>Sustainability</h3>
            <p>Ethical sourcing and responsible environmental practices.</p>
        </div>
    </div>
</section>

<!-- ================= BRAND TESTIMONIALS ================= -->
<!-- ================= GLOBAL RECOGNITION ================= -->
<section class="recognition-section">
    <div class="recognition-header">
        <h2>Global Recognition</h2>
        <p>Honoured by Global Leaders & Visionaries</p>
    </div>

    <div class="recognition-grid">

      <!-- Card 1 -->
      <div class="recognition-card large">
            <img src="./assets/images/nirmala_sitaraman.avif" alt="Ms. Nirmala Sitharaman the">
            <div class="recognition-overlay">
                <h3>Ms. Nirmala Sitharaman the</h3>
                <p>FinanceMinister of India</p>
                <p>Participation in the G20Summit</p>
            </div>
        </div>

        <!-- Card 1 -->
        <div class="recognition-card large">
            <img src="./assets/images/starbuck_cofounder.avif" alt="Zev Siegl">
            <div class="recognition-overlay">
                <h3>Mr. Zev Siegl</h3>
                <p>Co-Founder, Starbucks</p>
            </div>
        </div>

        

          <!-- Card 2 -->
          <div class="recognition-card">
            <img src="./assets/images/indrawati.avif" alt="Sri. Mulyani Indrawati">
            <div class="recognition-overlay">
                <h3>Sri. Mulyani Indrawati</h3>
                <p> Chairwoman
            Ministry of Finance Indonesia</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="recognition-card">
            <img src="./assets/images/thomos.avif" alt="Thomas Jordan">
            <div class="recognition-overlay">
                <h3>Mr. Thomas Jordan</h3>
                <p>Chairperson, Swiss National Bank</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="recognition-card">
            <img src="./assets/images/brazil_ambassador.avif" alt="Mr. Andre Aranha Correa">
            <div class="recognition-overlay">
                <h3>Mr. Andre Aranha Correa</h3>
                <p>Brazilian Ambassador to India</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="recognition-card wide">
            <img src="./assets/images/shaktikanta.avif" alt="G20 Summit">
            <div class="recognition-overlay">
            <h3>Mr. Shaktikanta Das</h3>
            <p>Governor, RBI</p>


                <h3>G20 Summit Bengaluru</h3>
            </div>
        </div>

    </div>
</section>


<section class="split reverse">
    <div class="text">
        <h2>International Presence</h2>
        <p>Sri. Mulyani Indrawati – Ministry of Finance Indonesia</p>
        <p>Mr. Andre Aranha Correa – Brazilian Ambassador to India</p>
        <p>Aahar Expo New Delhi, 2023</p>
    </div>
    <div class="image">
        <img src="./assets/images/delhi_expo.avif" alt="International Events">
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="cta">
    <h2>Experience Fifth Gen</h2>
    <p>Discover coffee refined to its purest expression.</p>
    <a href="<?= $BASE_URL ?>product.php">Explore Our Collection</a>
</section>


<?php include 'includes/footer.php'; ?>


<!-- ================= THREE JS ================= -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<script>
const container = document.getElementById("hero-canvas");

const scene = new THREE.Scene();
scene.fog = new THREE.Fog(0x0b0b0c, 15, 50);

const camera = new THREE.PerspectiveCamera(
60,
container.offsetWidth/container.offsetHeight,
0.1,
1000
);
camera.position.z = 20;

const renderer = new THREE.WebGLRenderer({alpha:true,antialias:true});
renderer.setSize(container.offsetWidth,container.offsetHeight);
renderer.setPixelRatio(window.devicePixelRatio);
container.appendChild(renderer.domElement);

const ambient = new THREE.AmbientLight(0xffffff,0.6);
scene.add(ambient);

const light = new THREE.DirectionalLight(0xc6a85c,1.2);
light.position.set(5,10,7);
scene.add(light);

function createBean(){
const geo = new THREE.SphereGeometry(1,64,64);
geo.scale(1,1.4,0.8);

const mat = new THREE.MeshPhysicalMaterial({
color: Math.random()>0.5?0x3b2a21:0xc6a85c,
metalness:0.4,
roughness:0.5,
clearcoat:0.6
});

return new THREE.Mesh(geo,mat);
}

const beans=[];
for(let i=0;i<25;i++){
const bean=createBean();
bean.position.set(
(Math.random()-0.5)*20,
(Math.random()-0.5)*12,
(Math.random()-0.5)*15
);
bean.rotation.set(Math.random(),Math.random(),0);
bean.scale.setScalar(Math.random()*0.7+0.5);
scene.add(bean);
beans.push(bean);
}

function animate(){
requestAnimationFrame(animate);
beans.forEach((b,i)=>{
b.rotation.x+=0.003;
b.rotation.y+=0.005;
b.position.y+=Math.sin(Date.now()*0.001+i)*0.002;
});
renderer.render(scene,camera);
}
animate();

window.addEventListener("resize",()=>{
renderer.setSize(container.offsetWidth,container.offsetHeight);
camera.aspect=container.offsetWidth/container.offsetHeight;
camera.updateProjectionMatrix();
});
</script>
<script>
const items = document.querySelectorAll('.timeline-item');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        }
    });
}, { threshold: 0.2 });

items.forEach(item => observer.observe(item));
</script>

</body>
</html>
