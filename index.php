<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/bxslider.css">

    <title>HyperStudio | Welcome page</title>

    <?php
    require_once 'script/db.php';
    require_once 'nav.php';
    ?>

</head>
<body>

    <!--Preloader-->
    <div class="preload">
        <svg id="visual" viewBox="0 0 960 540" width="1920" height="1080" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="960" height="540" fill="#001220"></rect><defs><linearGradient id="grad1_0" x1="43.8%" y1="0%" x2="100%" y2="100%"><stop offset="14.444444444444446%" stop-color="#00ffe0" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#00ffe0" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_1" x1="43.8%" y1="0%" x2="100%" y2="100%"><stop offset="14.444444444444446%" stop-color="#00ffe0" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#00caca" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_2" x1="43.8%" y1="0%" x2="100%" y2="100%"><stop offset="14.444444444444446%" stop-color="#0097aa" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#00caca" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_3" x1="43.8%" y1="0%" x2="100%" y2="100%"><stop offset="14.444444444444446%" stop-color="#0097aa" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#006680" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_4" x1="43.8%" y1="0%" x2="100%" y2="100%"><stop offset="14.444444444444446%" stop-color="#003950" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#006680" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad1_5" x1="43.8%" y1="0%" x2="100%" y2="100%"><stop offset="14.444444444444446%" stop-color="#003950" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#001220" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_0" x1="0%" y1="0%" x2="56.3%" y2="100%"><stop offset="14.444444444444446%" stop-color="#00ffe0" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#00ffe0" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_1" x1="0%" y1="0%" x2="56.3%" y2="100%"><stop offset="14.444444444444446%" stop-color="#00caca" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#00ffe0" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_2" x1="0%" y1="0%" x2="56.3%" y2="100%"><stop offset="14.444444444444446%" stop-color="#00caca" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#0097aa" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_3" x1="0%" y1="0%" x2="56.3%" y2="100%"><stop offset="14.444444444444446%" stop-color="#006680" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#0097aa" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_4" x1="0%" y1="0%" x2="56.3%" y2="100%"><stop offset="14.444444444444446%" stop-color="#006680" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#003950" stop-opacity="1"></stop></linearGradient></defs><defs><linearGradient id="grad2_5" x1="0%" y1="0%" x2="56.3%" y2="100%"><stop offset="14.444444444444446%" stop-color="#001220" stop-opacity="1"></stop><stop offset="85.55555555555554%" stop-color="#003950" stop-opacity="1"></stop></linearGradient></defs><g transform="translate(960, 0)"><path d="M0 513C-25.6 516.5 -51.3 520 -73 507.8C-94.8 495.6 -112.6 467.7 -133.5 454.8C-154.5 441.9 -178.4 443.9 -198.2 433.9C-217.9 423.9 -233.4 402 -244.9 381.1C-256.4 360.2 -264 340.4 -292.1 337.1C-320.2 333.7 -368.8 346.7 -376.4 326.1C-383.9 305.5 -350.4 251.3 -344.9 221.7C-339.4 192.1 -361.8 187.1 -391.1 178.6C-420.5 170.1 -456.7 158 -474.9 139.5C-493.2 120.9 -493.5 95.8 -496.9 71.4C-500.2 47.1 -506.6 23.6 -513 0L0 0Z" fill="#022538"></path><path d="M0 427.5C-21.4 430.4 -42.7 433.3 -60.8 423.1C-79 413 -93.9 389.8 -111.3 379C-128.7 368.2 -148.7 369.9 -165.1 361.6C-181.6 353.3 -194.5 335 -204.1 317.6C-213.7 300.2 -220 283.7 -243.4 280.9C-266.8 278.1 -307.3 288.9 -313.6 271.8C-319.9 254.6 -292 209.4 -287.4 184.7C-282.8 160.1 -301.5 155.9 -326 148.9C-350.4 141.8 -380.6 131.7 -395.8 116.2C-411 100.7 -411.3 79.8 -414.1 59.5C-416.9 39.3 -422.2 19.6 -427.5 0L0 0Z" fill="#004f68"></path><path d="M0 342C-17.1 344.3 -34.2 346.6 -48.7 338.5C-63.2 330.4 -75.1 311.8 -89 303.2C-103 294.6 -118.9 295.9 -132.1 289.3C-145.3 282.6 -155.6 268 -163.3 254.1C-171 240.1 -176 227 -194.7 224.7C-213.4 222.5 -245.9 231.2 -250.9 217.4C-256 203.7 -233.6 167.5 -229.9 147.8C-226.3 128 -241.2 124.8 -260.8 119.1C-280.3 113.4 -304.5 105.4 -316.6 93C-328.8 80.6 -329 63.8 -331.3 47.6C-333.5 31.4 -337.7 15.7 -342 0L0 0Z" fill="#007e96"></path><path d="M0 256.5C-12.8 258.2 -25.6 260 -36.5 253.9C-47.4 247.8 -56.3 233.9 -66.8 227.4C-77.2 220.9 -89.2 221.9 -99.1 216.9C-108.9 212 -116.7 201 -122.5 190.5C-128.2 180.1 -132 170.2 -146 168.5C-160.1 166.8 -184.4 173.4 -188.2 163.1C-192 152.8 -175.2 125.6 -172.5 110.8C-169.7 96 -180.9 93.6 -195.6 89.3C-210.2 85.1 -228.3 79 -237.5 69.7C-246.6 60.4 -246.8 47.9 -248.4 35.7C-250.1 23.6 -253.3 11.8 -256.5 0L0 0Z" fill="#00b0bb"></path><path d="M0 171C-8.5 172.2 -17.1 173.3 -24.3 169.3C-31.6 165.2 -37.5 155.9 -44.5 151.6C-51.5 147.3 -59.5 148 -66.1 144.6C-72.6 141.3 -77.8 134 -81.6 127C-85.5 120.1 -88 113.5 -97.4 112.4C-106.7 111.2 -122.9 115.6 -125.5 108.7C-128 101.8 -116.8 83.8 -115 73.9C-113.1 64 -120.6 62.4 -130.4 59.5C-140.2 56.7 -152.2 52.7 -158.3 46.5C-164.4 40.3 -164.5 31.9 -165.6 23.8C-166.7 15.7 -168.9 7.9 -171 0L0 0Z" fill="#00e5d7"></path><path d="M0 85.5C-4.3 86.1 -8.5 86.7 -12.2 84.6C-15.8 82.6 -18.8 78 -22.3 75.8C-25.7 73.6 -29.7 74 -33 72.3C-36.3 70.7 -38.9 67 -40.8 63.5C-42.7 60 -44 56.7 -48.7 56.2C-53.4 55.6 -61.5 57.8 -62.7 54.4C-64 50.9 -58.4 41.9 -57.5 36.9C-56.6 32 -60.3 31.2 -65.2 29.8C-70.1 28.4 -76.1 26.3 -79.2 23.2C-82.2 20.1 -82.3 16 -82.8 11.9C-83.4 7.9 -84.4 3.9 -85.5 0L0 0Z" fill="#00ffe0"></path></g><g transform="translate(0, 540)"><path d="M0 -513C20.6 -477.2 41.1 -441.3 61.3 -426.6C81.5 -411.9 101.4 -418.2 125.1 -426C148.8 -433.8 176.3 -443 204 -446.6C231.6 -450.2 259.4 -448.3 276.8 -430.7C294.2 -413.2 301.2 -380.1 303.2 -349.9C305.2 -319.7 302.3 -292.3 328 -284.2C353.6 -276.1 407.8 -287.2 422.3 -271.4C436.8 -255.6 411.6 -212.9 403.9 -184.4C396.2 -156 406 -141.6 429.9 -126.2C453.7 -110.8 491.6 -94.2 507.8 -73C524 -51.8 518.5 -25.9 513 0L0 0Z" fill="#022538"></path><path d="M0 -427.5C17.1 -397.6 34.3 -367.8 51.1 -355.5C68 -343.2 84.5 -348.5 104.2 -355C124 -361.5 146.9 -369.2 170 -372.2C193 -375.2 216.2 -373.5 230.7 -358.9C245.2 -344.3 251 -316.8 252.7 -291.6C254.4 -266.4 252 -243.6 273.3 -236.8C294.7 -230.1 339.9 -239.3 351.9 -226.2C364 -213 343 -177.4 336.6 -153.7C330.1 -130 338.3 -118 358.2 -105.2C378.1 -92.3 409.7 -78.5 423.1 -60.8C436.6 -43.2 432.1 -21.6 427.5 0L0 0Z" fill="#004f68"></path><path d="M0 -342C13.7 -318.1 27.4 -294.2 40.9 -284.4C54.4 -274.6 67.6 -278.8 83.4 -284C99.2 -289.2 117.5 -295.3 136 -297.8C154.4 -300.2 173 -298.8 184.5 -287.1C196.1 -275.5 200.8 -253.4 202.1 -233.3C203.5 -213.1 201.6 -194.9 218.7 -189.5C235.8 -184.1 271.9 -191.5 281.5 -180.9C291.2 -170.4 274.4 -142 269.3 -123C264.1 -104 270.7 -94.4 286.6 -84.1C302.5 -73.9 327.7 -62.8 338.5 -48.7C349.3 -34.5 345.7 -17.3 342 0L0 0Z" fill="#007e96"></path><path d="M0 -256.5C10.3 -238.6 20.6 -220.7 30.7 -213.3C40.8 -205.9 50.7 -209.1 62.5 -213C74.4 -216.9 88.2 -221.5 102 -223.3C115.8 -225.1 129.7 -224.1 138.4 -215.4C147.1 -206.6 150.6 -190.1 151.6 -175C152.6 -159.8 151.2 -146.2 164 -142.1C176.8 -138 203.9 -143.6 211.2 -135.7C218.4 -127.8 205.8 -106.5 201.9 -92.2C198.1 -78 203 -70.8 214.9 -63.1C226.9 -55.4 245.8 -47.1 253.9 -36.5C262 -25.9 259.2 -12.9 256.5 0L0 0Z" fill="#00b0bb"></path><path d="M0 -171C6.9 -159.1 13.7 -147.1 20.4 -142.2C27.2 -137.3 33.8 -139.4 41.7 -142C49.6 -144.6 58.8 -147.7 68 -148.9C77.2 -150.1 86.5 -149.4 92.3 -143.6C98.1 -137.7 100.4 -126.7 101.1 -116.6C101.7 -106.6 100.8 -97.4 109.3 -94.7C117.9 -92 135.9 -95.7 140.8 -90.5C145.6 -85.2 137.2 -71 134.6 -61.5C132.1 -52 135.3 -47.2 143.3 -42.1C151.2 -36.9 163.9 -31.4 169.3 -24.3C174.7 -17.3 172.8 -8.6 171 0L0 0Z" fill="#00e5d7"></path><path d="M0 -85.5C3.4 -79.5 6.9 -73.6 10.2 -71.1C13.6 -68.6 16.9 -69.7 20.8 -71C24.8 -72.3 29.4 -73.8 34 -74.4C38.6 -75 43.2 -74.7 46.1 -71.8C49 -68.9 50.2 -63.4 50.5 -58.3C50.9 -53.3 50.4 -48.7 54.7 -47.4C58.9 -46 68 -47.9 70.4 -45.2C72.8 -42.6 68.6 -35.5 67.3 -30.7C66 -26 67.7 -23.6 71.6 -21C75.6 -18.5 81.9 -15.7 84.6 -12.2C87.3 -8.6 86.4 -4.3 85.5 0L0 0Z" fill="#00ffe0"></path></g></svg>
        <div id="spinSquares">
            <div class="spinSquar" id="spinSquar_1">
            </div>
            <div class="spinSquar" id="spinSquar_2">
            </div>
            <div class="spinSquar" id="spinSquar_3">
            </div>
            <div class="spinSquar" id="spinSquar_4">
            </div>
            <div class="spinSquar" id="spinSquar_5">
            </div>
            <div class="spinSquar" id="spinSquar_6">
            </div>
            <div class="spinSquar" id="spinSquar_7">
            </div>
            <div class="spinSquar" id="spinSquar_8">
            </div>
        </div>
    </div>

    <!-- Modal Window -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle">Modal title</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <h5 id="modal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ducimus temporibus quasi sit incidunt numquam? Aliquam quos, ab unde ad perferendis veritatis commodi excepturi obcaecati nemo at necessitatibus alias a!</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <main class="main-content">
        <section class="banner">
            <div class="container">
                <ul class="bxslider">
                    <li>
                        <h2>Quality and effeciency</h2>
                        <p>We provide the best work quality and the best effeciency, so you don't need to wait for long!</p>
                    </li>
                    <li>
                        <h2>High originality</h2>
                        <p>We'll make sure that your site will be 80-95% original!</p>
                    </li>
                    <li>
                        <h2>Design and functionality</h2>
                        <p>We'll make your site fast and very beautiful! Simple and modern design will make your site look very cool!</p>
                    </li>
                </ul>
                <div class="scrolldown">
                    <a href="#about">
                        <img src="images/mouse.png" alt="mouse" onclick="mouseClick()">
                        <p>Go next</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="aboutus">
            <h2>About us</h2>
            <span>

            </span>
            <p>
                Our studio was created not so long time ago, in February, 2021. We produce high quality works and very good effeciency, so you don't need to wait for so long! We can surely say that every our site that we make will be 80-95% original!
            </p>
            <br><br><br>
            <h2 id="why">Why people choose us?</h2>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="advantage" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="effeciencyModal()">
                        <span class="">

                        </span>
                        <br><br><br>
                        <svg class="lnr lnr-rocket"><use xlink:href="#lnr-rocket"></use></svg>
                        <br><br><br>
                        <h4 id="whytitle">Effeciency</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quibusdam ad optio inventore magnam cupiditate, veniam cum ipsa laborum minima debitis cumque eveniet quisquam reiciendis, repellendus saepe explicabo ex eum!</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="advantage" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="qualModal()">
                        <span class="">

                        </span>
                        <br><br><br>
                        <svg class="lnr lnr-diamond"><use xlink:href="#lnr-diamond"></use></svg>
                        <br><br><br>
                        <h4 id="whytitle">Quality</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quam dolores ex, voluptas nihil quas blanditiis provident necessitatibus. Aliquid numquam totam veritatis officia excepturi pariatur provident iusto quaerat atque praesentium!</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="advantage" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="designModal()">
                        <span class="">

                        </span>
                        <br><br><br>
                        <svg class="lnr lnr-laptop-phone"><use xlink:href="#lnr-laptop-phone"></use></svg>
                        <br><br><br>
                        <h4 id="whytitle">Modern design</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos ratione dicta consequuntur. A voluptates nihil illum ratione, exercitationem ut saepe enim dignissimos nostrum accusantium ad repellat dolorem corrupti odio aliquid.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="advantage" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="priceModal()">
                        <span class="">

                        </span>
                        <br><br><br>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <br><br><br>
                        <h4 id="whytitle">Good price</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quibusdam ad optio inventore magnam cupiditate, veniam cum ipsa laborum minima debitis cumque eveniet quisquam reiciendis, repellendus saepe explicabo ex eum!</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="advantage" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="supModal()">
                        <span class="">

                        </span>
                        <br><br><br>
                        <svg class="lnr lnr-bubble"><use xlink:href="#lnr-bubble"></use></svg>
                        <br><br><br>
                        <h4 id="whytitle">Quick support</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quibusdam ad optio inventore magnam cupiditate, veniam cum ipsa laborum minima debitis cumque eveniet quisquam reiciendis, repellendus saepe explicabo ex eum!</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="advantage" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="safeModal()">
                        <span class="">

                        </span>
                        <br><br><br>
                        <svg class="lnr lnr-thumbs-up"><use xlink:href="#lnr-thumbs-up"></use></svg>
                        <br><br><br>
                        <h4 id="whytitle">Safety</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quibusdam ad optio inventore magnam cupiditate, veniam cum ipsa laborum minima debitis cumque eveniet quisquam reiciendis, repellendus saepe explicabo ex eum!</p>
                    </div>
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000" fill-opacity="1" d="M0,32L48,58.7C96,85,192,139,288,144C384,149,480,107,576,85.3C672,64,768,64,864,101.3C960,139,1056,213,1152,234.7C1248,256,1344,224,1392,208L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <section class="features">
            <section class="price">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="head_black_content">
                                <h4>Prices</h4>
                                <span></span>
                                <br><br><br><br><br>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima laudantium facilis aliquid molestias vero dolor officia pariatur explicabo magni? Expedita molestiae nostrum in? Nostrum amet iste minima facere saepe amogus.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-6 col-xl-6 col-2">
                                    <div class="price-content">
                                        <div class="price-content-head">
                                            <h5>From 5000 RUB</h5>
                                            <h6>- BEST OFFER -</h6>
                                            <h4>Landing page</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione facilis minus rerum aspernatur nostrum itaque, sunt repellendus corrupti delectus nobis ipsum ipsa laborum sint veniam cumque eligendi possimus consequatur nulla!</p>
                                        </div>
                                        <div class="price-content-body">
                                            <p><span>8</span> Blocks</p>
                                            <p><span>1</span> Product or service</p>
                                            <p><span>1</span> Corrections</p>
                                            <p><span>269+</span> Clients per month</p>
                                            <a href="#" class="order">Order</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-6 col-xl-6 col-2">
                                    <div class="price-content">
                                        <div class="price-content-head">
                                            <h5>From <s>15000</s> 10000 RUB</h5>
                                            <h4>Mini-store</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione facilis minus rerum aspernatur nostrum itaque, sunt repellendus corrupti delectus nobis ipsum ipsa laborum sint veniam cumque eligendi possimus consequatur nulla!</p>
                                        </div>
                                        <div class="price-content-body">
                                            <p><span>10</span> Blocks</p>
                                            <p><span>2</span> Product or service</p>
                                            <p><span>3</span> Corrections</p>
                                            <p><span>269+</span> Clients per month</p>
                                            <a href="#" class="order">Order</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-6 col-xl-6 col-2">
                                    <div class="price-content">
                                        <div class="price-content-head">
                                            <h5>From <s>25000</s> 15000 RUB</h5>
                                            <h4>INTERNET STORE</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione facilis minus rerum aspernatur nostrum itaque, sunt repellendus corrupti delectus nobis ipsum ipsa laborum sint veniam cumque eligendi possimus consequatur nulla!</p>
                                        </div>
                                        <div class="price-content-body">
                                            <p><span>14</span> Blocks</p>
                                            <p><span>8</span> Product or service</p>
                                            <p><span>10</span> Corrections</p>
                                            <p><span>269+</span> Clients per month</p>
                                            <a href="#" class="order">Order</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-6 col-xl-6 col-2">
                                    <div class="price-content">
                                        <div class="price-content-head">
                                            <h5>From <s>35000</s> 25000 RUB</h5>
                                            <h4>FULL WEB-SITE</h4>
                                            <h5>- GOOD PRICE -</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione facilis minus rerum aspernatur nostrum itaque, sunt repellendus corrupti delectus nobis ipsum ipsa laborum sint veniam cumque eligendi possimus consequatur nulla!</p>
                                        </div>
                                        <div class="price-content-body">
                                            <p><span>16+</span> Blocks</p>
                                            <p><span>32+</span> Products or services</p>
                                            <p><span>8+</span> Corrections</p>
                                            <p><span>999+</span> Clients per month</p>
                                            <a href="#" class="order">Order</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="head_black_content">
                            <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa voluptas, laudantium corrupti dicta cum voluptatum labore officia quos aliquid, ipsum, voluptatem eveniet fugiat cumque ratione quaerat accusamus in totam consequuntur.</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-3 col-xl-3 col-lg-3 col-6">
                    <span class="lnr lnr-screen">
                    </span>
                    <svg class="lnr lnr-magic-wand"><use xlink:href="#lnr-magic-wand" fill="#fff"></use></svg>
                    <br><br><br>
                    <p>
                        We already created about
                    </p>
                    <h5>
                        46,139 sites
                    </h5>
                </div>
                <div class="col-md-3 col-xl-3 col-lg-3 col-6">
                    <span class="lnr lnr-screen">

                    </span>
                    <svg class="lnr lnr-users"><use xlink:href="#lnr-users" fill="#fff"></use></svg>
                    <br><br><br>
                    <p>
                        Pleased users
                    </p>
                    <h5>
                        99K+
                    </h5>
                </div>
                <div class="col-md-3 col-xl-3 col-lg-3 col-6">
                    <span class="lnr lnr-screen">

                    </span>
                    <svg class="lnr lnr-clock"><use xlink:href="#lnr-clock" fill="#fff"></use></svg>
                    <br><br><br>
                    <p>
                        Average work time
                    </p>
                    <h5>
                        4 days
                    </h5>
                </div>
                <div class="col-md-3 col-xl-3 col-lg-3 col-6">
                    <span class="lnr lnr-screen">

                    </span>
                    <svg class="lnr lnr-checkmark-circle"><use xlink:href="#lnr-checkmark-circle" fill="#fff"></use></svg>
                    <br><br><br>
                    <p>
                        Our rating on trading platform
                    </p>
                    <h5>
                        5.0
                    </h5>
                </div>
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" id="wave" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,128C384,117,480,75,576,80C672,85,768,139,864,165.3C960,192,1056,192,1152,176C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <section class="team">
            <div class="head_white_content">
                <h3>Meet the company owner</h3>
                <span></span>
                <br><br><br><br><br>
                <br><br><br><br><br>
            </div>
            <div class="col">
                        <div class="row team-slider">
                            <div class="sinner1">
                                <img id="av1" src="images/pfp.png" alt="" draggable="false">
                                <h4>Matvey Chirkov</h4>
                                <h4>Aka <hl>Hyp3rB0x</hl></h4>
                                <p>Lead programmer on GMStudio, CTFusion, Java, HTML, CSS</p>
                                <a href="https://vk.com/coder_box"><img src="images/icon-vk.png" alt="" draggable="false"></a>
                                <a href=""><img src="images/icon-inst.png" alt="" draggable="false"></a>
                            </div>
                            <div class="sinner2">
                                <h4>My skills</h4>
                                <img src="images/stat.png" alt="" draggable="false">
                            </div>
                        </div>
                </li>
            </div>
        </section>
        <section class="contacts">
            <div class="head_white_content">
                <h3 id="contact-h3-u">Contacts</h3>
                <br>
                <p id="contact-p">
                    Leave your contacts here and we'll answer you soon.
                </p>
                <span></span>
            </div>
            <div class="getintouch">
                <img id="c-layout" src="images/layout_contacts.png" draggable="false">
                <form method="POST" action="send.php">
                    <div class="col">
                        <div class="col-md-6 col-6 textinput">
                            <p>Name<span>*</span></p>
                            <input type="text" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="col-md-6 col-6 textinput">
                            <p>E-mail<span>*</span></p>
                            <input type="text" id="email" name="email" placeholder="Enter your E-Mail">
                        </div>
                     </div>
                    <div class="row">
                        <div class="col-md-12 col-12 textmsg">
                            <p>Message<span>*</span></p>
                            <textarea id="msg" cols="30" rows="10" name="msg" placeholder="Write your message..."></textarea>
                            <input type="submit" class="submit" name="send" value="Send message">
                        </div>
                    </div>
                </form>

            </div>
        </section>
        <section class="mapinfo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,186.7C384,203,480,181,576,165.3C672,149,768,139,864,160C960,181,1056,235,1152,229.3C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            <div class="accordion">
                <div class="head_white_content">
                    <h3 id="contact-h3">Our office</h3>
                    <h2 id="contact-h2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, saepe! Consectetur iste esse veniam architecto cupiditate quidem maxime! Molestias ea at autem tenetur illum. Optio saepe numquam consectetur sunt eius.</h2>
                    <span></span>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2242.602380381304!2d37.592623516090015!3d55.8001419958072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5360bd2069965%3A0x7e8047f163f5ba8e!2sHYPERPC!5e0!3m2!1sru!2sru!4v1617531744334!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
        <footer>
            <a href="" class="logo-ft"><img src="images/logo.png" draggable="false"></a>
            <br><br><br><br><br>
            <h4>HyperStudio | Web Studio</h4>
            <p>Supported by <a href="">1C: Programmers Club</a></p>
            <a href="https://vk.com/1c_samara" target="_blank"><img src="images/icon-vk.png" draggable="false"></a>
        </footer>
    </main>

    <script src="script/jquery-2.1.1.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/bxslider.js"></script>
    <script src="script/script.js"></script>

</body>
</html>
