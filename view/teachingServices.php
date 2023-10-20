<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Text in Squares</title>
    <style>
         .squarecontainer {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start; /* Align items to the top */
            
            
        }

        .square {
            width: calc(50% - 25px); /* 50% width with a margin of 25px in between */
            height: 200px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background-color: transparent;
            text-align: center;
           
            overflow: hidden;
            box-sizing: border-box;
            margin-bottom: 25px; /* Margin at the bottom of each square */
            
        }

        .square:nth-child(2n) {
            margin-left: 25px; /* Add a margin to the second item in each row */
        }

        h2 {
    font-size: calc(12px + 0.2vw); 
    margin-bottom: 10px;
}

p {
    font-size: calc(10px + 0.2vw); 
}
        
        .icon img {
    width: 50px; /* Adjust the width to your desired size */
    height: 50px; /* Adjust the height to your desired size */
    margin-right: 10px; /* Add some space between the icon and text */
    vertical-align: middle; /* Align the icon vertically with the text */
}

.item {
    color: rgb(50,121,252);
 }

    </style>
</head>
<body>
    <div class="squarecontainer">
        <div class="square">
            <img src="assets/icons/webdev.png" alt="Web Development Icon">
            <a href="./view/webdevInfo.php"><h2 class="item">Web Development (Front-End)</h2></a>
            <p>We specialize in web design for websites and web applications</p>
        </div>
        <div class="square">
            <img src="assets/icons/webdev.png" alt="Web Development Icon">
            <a href="./view/webdevInfob.php"><h2 class="item">Web Development (Back-End)</h2></a>
            <p>We specialize in web development, we develop websites and web applications</p>
        </div>
        <div class="square">
            <img src="assets/icons/fullstack.png" alt="Web Development Icon">
            <a href="./view/fullstackInfo.php"><h2 class="item">Full Stack Development</h2></a>
            <p>We provide comprehensive full stack development services for web applications.</p>
        </div>
        <div class="square">
            <img src="assets/icons/engineer.png" alt="Web Development Icon">
        <a href="./view/softwareengInfo.php"><h2 class="item">Software Engineering</h2></a>
            <p>Training Future IT professionals in the field of Software Engineering</p>
        </div>
        <div class="square">
            <img src="assets/icons/design.png" alt="Web Development Icon">
        <a href="./view/uiuxInfo.php"> <h2 class="item">UI/UX Design</h2></a>
            <p>Our expert designers create user-friendly and visually appealing interfaces.</p>
        </div>
        <div class="square">
            <img src="assets/icons/data.png" alt="Web Development Icon">
        <a href="./view/dataanalytics.php"><h2 class="item">Data Analytics</h2></a>
            <p>We analyze data to provide valuable insights for your business.</p>
        </div>
        <div class="square">
            <img src="assets/icons/robot.png" alt="Web Development Icon">
        <a href="./view/robotics.php"><h2 class="item">Robotics</h2></a>
            <p>Teaching robotics prepares the next generation of innovators.</p>
        </div>
        <div class="square">
            <img src="assets/icons/security.png" alt="Web Development Icon">
        <a href="./view/cybersecurityInfo.php"> <h2 class="item">Cyber Security</h2></a>
            <p>We provide courses to help individuals stay safe online.</p>
        </div>
        <div class="square">
            <img src="assets/icons/eng.png" alt="Web Development Icon">
        <a href="./view/certificateincomputer.php"> <h2 class="item">Certificate in Computer</h2></a>
            <p>Unlock your digital potential with our Certificate in Computer course.</p>
        </div>
        <div class="square">
            <img src="assets/icons/dip.png" alt="Web Development Icon">
        <a href="./view/dataprocessing.php"> <h2 class="item">Diploma in Data Processing</h2></a>
            <p>Unlock your digital potential with our Diploma in Data Processing</p>
        </div>
        <div class="square">
            <img src="assets/icons/dip.png" alt="Web Development Icon">
        <a href="./view/dipinsec.php"> <h2 class="item">Diploma in Sec. Studies</h2></a>
            <p>Unlock your digital potential with our Diploma in Sec. Studies.</p>
        </div>
        <div class="square">
            <img src="assets/icons/video.png" alt="Web Development Icon">
        <a href="./view/videoediting.php"> <h2 class="item">Video Editing</h2></a>
            <p>Come Unlock your creativity with our video editing classes.</p>
        </div>
        <div class="square">
            <img src="assets/icons/network.png" alt="Web Development Icon">
        <a href="./view/networking.php"> <h2 class="item">Networking</h2></a>
            <p>We provide courses to help individuals become Networking professionals.</p>
        </div>
        <div class="square">
            <img src="assets/icons/eng.png" alt="Web Development Icon">
        <a href="./view/computerengineering.php"> <h2 class="item">Computer Engineering</h2></a>
            <p>We provide courses to help become world class computer engineers.</p>
        </div>
        <div class="square">
            <img src="assets/icons/eng.png" alt="Web Development Icon">
        <a href="./view/apibuilding.php"> <h2 class="item">API Building and Implementation</h2></a>
            <p>All you need to know concerning API Building and Implementation.</p>
        </div>
        <div class="square">
            <img src="assets/icons/business.png" alt="Web Development Icon">
        <a href="./view/business.php"> <h2 class="item">Business & Enterpreneurship in IT</h2></a>
            <p>Business & Enterpreneurship in IT is essntial to grow financially</p>
        </div>
        <div class="square">
            <img src="assets/icons/special.png" alt="Web Development Icon">
        <a href="./view/special.php"> <h2 class="item">Special Packages</h2></a>
            <p>Take part in our special programs.</p>
        </div>
    </div>
</body>
</html>
