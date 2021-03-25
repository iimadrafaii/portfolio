 <?php
    if ( isset($_POST['submitContact'])) {
    $name = htmlspecialchars($_POST['name']);
    $subject = htmlspecialchars($_POST['sujet']);
    $tel = htmlspecialchars($_POST['tel']);
    $mailFrom = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mailTo = "imad.rafai@yahoo.com";
    $headers ="From : ".$mailFrom;
    $txt ="Vous avez reçu un e-mail"."\n\n"."Nom : ".$name."\n\n"."Téléphone : ".$tel."\n\n"."Adresse email : ".$mailFrom."\n\n"."Sujet : ".$subject."\n\n"."Message : ".$message;
    
    if(mail($mailTo, $subject, $txt, $headers))
    {
        echo '<script type="text/javascript">alert("Merci de m'avoir contacté.");</script>';
        echo "<meta http-equiv='refresh' content='0'>";
    } 
    else {
        echo '<script type="text/javascript">alert("Votre email n'a pas pû être envoyé, veuillez réessayer");</script>';
        echo "<meta http-equiv='refresh' content='0'>";
    }}
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Description here">
    <meta name="keywords" content="imad,rafai,stage,portfolio,ensimag,java,c,python,web,development">
    <meta name="author" content="Imad">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="SHORTCUT ICON" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/izi.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Imad RAFAI</title>
</head>

<body>
    <div id="particles-js"></div>
    <a class="scrol-tostart scrol-to" data-section="NAV" title="Go to start"> <i data-aos="fade-up-right" class="fas fa-chevron-circle-up"></i> </a>
    <a href="https://wa.me/+212604457507" target="_blanc"> <i class="fab fa-whatsapp whtsIco"></i> </a>
    <div class="imadraf-nav page-section" id="NAV">
        <div class="imadraf-nav-content">
            <!-- <div class="imadraf-nav-logo"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 277.12 103.39"> <defs><style>.cls-1{fill:var(--P-color)}.cls-2{opacity:0.49;fill:url(#linear-gradient)}.cls-3{opacity:0.48}.cls-4{fill:url(#linear-gradient-2)}.cls-5{fill:url(#linear-gradient-3)}.cls-6{fill:url(#linear-gradient-4)}.cls-7{fill:url(#linear-gradient-5)}.cls-8{fill:url(#linear-gradient-6)}.cls-9{fill:url(#linear-gradient-7)}.cls-10{fill:var(--P-color)}</style><linearGradient id="linear-gradient" x1="203.68" y1="260.89" x2="258.62" y2="207.34" gradientTransform="matrix(-0.71, -0.71, -0.71, 0.71, 376.87, 156.11)" gradientUnits="userSpaceOnUse"> <stop offset="0" stop-color="#fff" stop-opacity="0"/> <stop offset="0.09" stop-color="#c8c8cf" stop-opacity="0.24"/> <stop offset="0.27" stop-color="#69697e" stop-opacity="0.66"/> <stop offset="0.44" stop-color="#30304d" stop-opacity="0.91"/> <stop offset="0.57" stop-color="#1c1c3c"/> </linearGradient> <linearGradient id="linear-gradient-2" x1="38.33" y1="76.64" x2="243.98" y2="80.48" gradientUnits="userSpaceOnUse"> <stop offset="0" stop-color="#20323b"/> <stop offset="0.21" stop-color="#2e3e47" stop-opacity="0.94"/> <stop offset="0.39" stop-color="#57646b" stop-opacity="0.75"/> <stop offset="0.57" stop-color="#9ca4a8" stop-opacity="0.44"/> <stop offset="0.74" stop-color="#fdfdfd" stop-opacity="0.01"/> <stop offset="0.75" stop-color="#fff" stop-opacity="0"/> </linearGradient> <linearGradient id="linear-gradient-3" x1="78.26" y1="173.83" x2="283.91" y2="177.67" xlink:href="#linear-gradient-2"/> <linearGradient id="linear-gradient-4" x1="87.16" y1="180" x2="292.81" y2="183.84" xlink:href="#linear-gradient-2"/> <linearGradient id="linear-gradient-5" x1="95.17" y1="179.38" x2="300.82" y2="183.21" xlink:href="#linear-gradient-2"/> <linearGradient id="linear-gradient-6" x1="103.18" y1="178.79" x2="308.83" y2="182.63" xlink:href="#linear-gradient-2"/> <linearGradient id="linear-gradient-7" x1="111.35" y1="170.14" x2="316.99" y2="173.97" xlink:href="#linear-gradient-2"/> </defs> <g id="Layer_3" data-name="Layer 3"> <g> <path class="cls-1" d="M94.85,141.25c-.68,0-1.29.07-1.87.07-9.82.05-19.65.05-29.44.13l-.28,8.23c0,.1,0,.2,0,.3s0,.26,0,.41q-.15,11.18-.13,22.35c0,3,.25,6.13.28,9.21,0,4.85,0,9.7.08,14.55,0,1.52-.28,2.78-1.77,3.43s-2.58,0-3.59-1.06c-7.47-7.52-15-15.05-22.47-22.6a11.75,11.75,0,0,1-3.56-7.88c-.08-1.51-.18-3-.18-4.52,0-6.89.07-13.81,0-20.71a32.84,32.84,0,0,1,10-24.77,29.86,29.86,0,0,1,5.28-4.16,16.94,16.94,0,0,0,32.73.22,32.52,32.52,0,0,1,8.48,7.8,36.78,36.78,0,0,1,4.82,9.37C94.37,134.63,95.38,137.81,94.85,141.25Z" transform="translate(-31.94 -97.82)"/> <path class="cls-1" d="M63.57,122a12.11,12.11,0,1,1,12.1-12.12A12.11,12.11,0,0,1,63.57,122Z" transform="translate(-31.94 -97.82)"/> <path class="cls-2" d="M32.14,168.39a11.33,11.33,0,0,0,3.57,7.88q11.22,11.31,22.48,22.61c1,1,2.11,1.68,3.57,1.05s1.79-1.91,1.77-3.44c-.07-4.85,0-9.69-.07-14.54,0-3.08-.28-6.15-.29-9.22,0-7.45,0-14.9.13-22.35,0-.14,0-.27,0-.39l0-.32.28-8.22-9.07.23a21.23,21.23,0,0,0-17,8.6A29.28,29.28,0,0,0,32.14,168.39Z" transform="translate(-31.94 -97.82)"/> </g> <polygon class="cls-1" points="38.7 58.59 47.94 58.59 47.94 95.2 38.7 95.2 38.7 102.5 64.86 102.5 64.86 95.2 55.69 95.2 55.69 58.59 64.86 58.59 64.86 51.29 38.7 51.29 38.7 58.59"/> <path class="cls-1" d="M122.52,191.39a5.89,5.89,0,0,1-1.51-4.18v-38.1h-7.75v37.24a15.53,15.53,0,0,0,1.61,7.11,12.39,12.39,0,0,0,4.6,5,13.17,13.17,0,0,0,7,1.84H140V193H126.51A5.15,5.15,0,0,1,122.52,191.39Z" transform="translate(-31.94 -97.82)"/> <path class="cls-1" d="M179.58,178.61a15.09,15.09,0,0,0-6.57-1.3H166.3a4.13,4.13,0,0,1-3.17-1.14,3.7,3.7,0,0,1-1.1-2.67,4,4,0,0,1,1.07-2.79,3.71,3.71,0,0,1,2.93-1.17h16.05v-6.87H165.41a10.41,10.41,0,0,0-5.64,1.55,11.62,11.62,0,0,0-3.72,15.39,9.56,9.56,0,0,0,4.16,3.69,14.15,14.15,0,0,0,6.09,1.24h7a4.68,4.68,0,0,1,2.41.59,3.61,3.61,0,0,1,1.44,1.54,4.61,4.61,0,0,1,.49,2.11,4.92,4.92,0,0,1-.55,2.28,4.4,4.4,0,0,1-1.6,1.72,4.67,4.67,0,0,1-2.53.66H155.72v6.88h18a10.76,10.76,0,0,0,6-1.67,11.77,11.77,0,0,0,4-4.32,13,13,0,0,0,0-11.86A9.39,9.39,0,0,0,179.58,178.61Z" transform="translate(-31.94 -97.82)"/> <path class="cls-1" d="M204.23,165.6a11.2,11.2,0,0,0-2.81,8v26.68h7.48V174.07a4.69,4.69,0,0,1,1.1-3.36,4,4,0,0,1,3.1-1.17h6.61v-6.87h-7.78A10.21,10.21,0,0,0,204.23,165.6Z" transform="translate(-31.94 -97.82)"/> <path class="cls-1" d="M260.54,164.4a18.18,18.18,0,0,0-9.81-2.58,19,19,0,0,0-10.16,2.62,17.52,17.52,0,0,0-6.51,7.09,21.82,21.82,0,0,0-2.26,10,23.6,23.6,0,0,0,2,9.9,17,17,0,0,0,5.89,7.14,15.71,15.71,0,0,0,9.08,2.63,14.9,14.9,0,0,0,6.33-1.26,14.7,14.7,0,0,0,4.53-3.24,20,20,0,0,0,1.89-2.41v6.06h7.54v-19a21.61,21.61,0,0,0-2.22-9.85A17.44,17.44,0,0,0,260.54,164.4Zm-16,6a10.48,10.48,0,0,1,6-1.68,10.11,10.11,0,0,1,5.77,1.65,10.86,10.86,0,0,1,3.79,4.5,15.24,15.24,0,0,1,1.34,6.51,15.41,15.41,0,0,1-1.41,6.69,11.1,11.1,0,0,1-3.89,4.61,10.14,10.14,0,0,1-5.74,1.65,10.29,10.29,0,0,1-6-1.68,10.85,10.85,0,0,1-3.76-4.57,16.82,16.82,0,0,1,0-13.11A10.89,10.89,0,0,1,244.58,170.37Z" transform="translate(-31.94 -97.82)"/> <path class="cls-1" d="M298,155a4,4,0,0,1,3.13-1.16h8V147h-9.21a10.25,10.25,0,0,0-7.71,2.93,11.21,11.21,0,0,0-2.8,8v4.74h-6.09v6.87h6.09v30.78h7.54V169.54h10.81v-6.87H296.88v-4.31A4.84,4.84,0,0,1,298,155Z" transform="translate(-31.94 -97.82)"/> <g class="cls-3"> <polygon class="cls-4" points="38.7 58.59 47.94 58.59 47.94 95.2 38.7 95.2 38.7 102.5 64.86 102.5 64.86 95.2 55.69 95.2 55.69 58.59 64.86 58.59 64.86 51.29 38.7 51.29 38.7 58.59"/> <path class="cls-5" d="M122.51,191.36a5.89,5.89,0,0,1-1.51-4.18v-38.1h-7.75v37.24a15.56,15.56,0,0,0,1.61,7.11,12.39,12.39,0,0,0,4.6,5,13.17,13.17,0,0,0,7,1.84H140V193H126.5A5.15,5.15,0,0,1,122.51,191.36Z" transform="translate(-31.94 -97.82)"/> <path class="cls-6" d="M179.58,178.65a14.94,14.94,0,0,0-6.57-1.31H166.3a4.13,4.13,0,0,1-3.17-1.14,3.7,3.7,0,0,1-1.1-2.67,4,4,0,0,1,1.07-2.79,3.73,3.73,0,0,1,2.93-1.16h16.05V162.7H165.41a10.41,10.41,0,0,0-5.64,1.56,10.91,10.91,0,0,0-3.83,4,11.94,11.94,0,0,0,.11,11.35,9.56,9.56,0,0,0,4.16,3.69,14.3,14.3,0,0,0,6.09,1.23h7a4.58,4.58,0,0,1,2.41.6,3.53,3.53,0,0,1,1.44,1.53,4.61,4.61,0,0,1,.49,2.11,4.89,4.89,0,0,1-.55,2.28,4.36,4.36,0,0,1-1.6,1.73,4.76,4.76,0,0,1-2.53.66H155.72v6.87h18a10.83,10.83,0,0,0,6-1.66,11.88,11.88,0,0,0,4-4.33,12.07,12.07,0,0,0,1.44-5.77,12.24,12.24,0,0,0-1.42-6.09A9.31,9.31,0,0,0,179.58,178.65Z" transform="translate(-31.94 -97.82)"/> <path class="cls-7" d="M204.23,165.63a11.21,11.21,0,0,0-2.81,8v26.68h7.48V174.1a4.68,4.68,0,0,1,1.1-3.35,4,4,0,0,1,3.1-1.17h6.61V162.7h-7.78A10.21,10.21,0,0,0,204.23,165.63Z" transform="translate(-31.94 -97.82)"/> <path class="cls-8" d="M260.54,164.44a18.1,18.1,0,0,0-9.81-2.59,19,19,0,0,0-10.16,2.62,17.52,17.52,0,0,0-6.51,7.09,21.82,21.82,0,0,0-2.26,10,23.6,23.6,0,0,0,2,9.9,17,17,0,0,0,5.89,7.14,15.71,15.71,0,0,0,9.08,2.64,14.9,14.9,0,0,0,6.33-1.27,14.54,14.54,0,0,0,4.53-3.24,19.22,19.22,0,0,0,1.89-2.41v6.06h7.54v-19a21.61,21.61,0,0,0-2.22-9.85A17.35,17.35,0,0,0,260.54,164.44Zm-16,6a10.49,10.49,0,0,1,6-1.69,10.18,10.18,0,0,1,5.77,1.65,10.86,10.86,0,0,1,3.79,4.5,15.24,15.24,0,0,1,1.34,6.51,15.41,15.41,0,0,1-1.41,6.69,11.1,11.1,0,0,1-3.89,4.61,10.14,10.14,0,0,1-5.74,1.65,10.29,10.29,0,0,1-6-1.68,10.85,10.85,0,0,1-3.76-4.57,16.79,16.79,0,0,1,0-13.1A10.77,10.77,0,0,1,244.58,170.41Z" transform="translate(-31.94 -97.82)"/> <path class="cls-9" d="M298,155a4,4,0,0,1,3.13-1.16h8V147h-9.21a10.25,10.25,0,0,0-7.71,2.93,11.21,11.21,0,0,0-2.8,8v4.74h-6.09v6.87h6.09v30.78h7.54V169.54h10.81v-6.87H296.88v-4.31A4.84,4.84,0,0,1,298,155Z" transform="translate(-31.94 -97.82)"/> </g> <g> <path class="cls-10" d="M116.44,119.17h-4.28v12.37h4.28a6,6,0,0,0,6.35-6.33A6,6,0,0,0,116.44,119.17Zm5.17,6a4.9,4.9,0,0,1-5.17,5.19h-3.1V120.29h3.1A4.85,4.85,0,0,1,121.61,125.22Z" transform="translate(-31.94 -97.82)"/> <rect class="cls-10" x="114.77" y="21.36" width="1.16" height="12.36"/> <path class="cls-10" d="M177.32,126h4.29v3.23a5.45,5.45,0,0,1-3.62,1.34,5,5,0,0,1-5.32-5.21,5.29,5.29,0,0,1,1.51-3.86,5.24,5.24,0,0,1,3.81-1.43,5.67,5.67,0,0,1,3.87,1.53l.08.08.7-.76-.08-.08a6.83,6.83,0,0,0-9.25-.09,6.26,6.26,0,0,0-1.78,4.63,6,6,0,0,0,6.46,6.3,6.56,6.56,0,0,0,4.72-2l0,0V125h-5.42Z" transform="translate(-31.94 -97.82)"/> <rect class="cls-10" x="174.95" y="21.36" width="1.16" height="12.36"/> <polygon class="cls-10" points="200 22.43 204.44 22.43 204.44 33.72 205.62 33.72 205.62 22.43 210.06 22.43 210.06 21.37 200 21.37 200 22.43"/> <path class="cls-10" d="M270.84,119.17h-1.19l-5.54,12.21-.08.16h1.28l1.33-3h7.19l1.35,3h1.28l-5.59-12.3Zm2.52,8.29h-6.25l3.13-7Z" transform="translate(-31.94 -97.82)"/> <polygon class="cls-10" points="268.96 32.61 268.96 21.36 267.78 21.36 267.78 33.72 275.88 33.72 275.88 32.61 268.96 32.61"/> </g> <g> <polygon class="cls-10" points="126.49 43.56 122.24 53.89 121.23 53.89 119.33 49.06 117.82 45 116.32 49.02 114.39 53.89 113.38 53.89 109.17 43.56 110.17 43.56 113.86 52.96 117.55 43.56 118.08 43.56 121.75 52.96 125.47 43.56 126.49 43.56"/> <path class="cls-10" d="M187.75,142.64a6.58,6.58,0,0,0-4.36-1.41c-4.19,0-6.07,2.65-6.07,5.29s1.91,5.33,6.07,5.33,6.07-2.75,6.08-5.31A5,5,0,0,0,187.75,142.64Zm-4.36,8.48c-3.5,0-5.12-2.37-5.14-4.59a4.35,4.35,0,0,1,1.48-3.39,5.52,5.52,0,0,1,3.66-1.2c3.57,0,5.18,2.31,5.18,4.59S187,151.12,183.39,151.12Z" transform="translate(-31.94 -97.82)"/> <path class="cls-10" d="M214.84,147.73h.36a4.22,4.22,0,0,0,2.56-.91,2.82,2.82,0,0,0,1-2.17v0c0-1.54-1.26-3.21-4-3.21h-5.3v10.29h.94v-3.9h3.27l.05,0,4.11,3.85h1.22Zm-4.41-.7v-4.92h4.36a3.19,3.19,0,0,1,2.13.7,2.3,2.3,0,0,1,.8,1.76c0,1.57-1.13,2.46-3,2.46Z" transform="translate(-31.94 -97.82)"/> <polygon class="cls-10" points="214.97 53.81 214.97 53.85 213.78 53.85 207.46 48.79 207.46 53.84 206.52 53.84 206.52 43.56 207.46 43.56 207.46 48.25 213.3 43.56 214.42 43.56 214.42 43.62 208.51 48.38 208.36 48.49 214.97 53.81"/> <path class="cls-10" d="M274.86,149c0,2.66-3.64,2.88-4.76,2.88-1.75,0-4-.59-4.93-2.23l.83-.35c.72,1.22,2.61,1.86,4.1,1.86,1.14,0,3.82-.21,3.82-2.17,0-1.57-2-1.91-3.94-2.23-2.09-.34-4.46-.73-4.46-2.64a2.18,2.18,0,0,1,.78-1.75,6,6,0,0,1,3.8-1.09c1.82,0,3.26.3,4.4,1.74l-.76.39h0c-.86-1.2-2.25-1.38-3.63-1.39-.36,0-3.63.05-3.63,2.09,0,1.27,1.45,1.59,3.68,1.95l.13,0C272.53,146.4,274.86,146.78,274.86,149Z" transform="translate(-31.94 -97.82)"/> </g> </g> </svg></div> -->
             <!-- LOGO <div class="imadraf-nav-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="1724" height="516" viewBox="0 0 1724 516">
                    <g id="Groupe_2" data-name="Groupe 2" transform="translate(-355.104 -419.476)">
                      <circle id="Ellipse_1" data-name="Ellipse 1" cx="43.5" cy="43.5" r="43.5" transform="translate(1992.104 733.476)" fill="var(--P-color)"/>
                      <text id="Webdev" fill="var(--B-color)" transform="translate(466.104 806.476)" font-size="369" font-family="Poppins-Bold, Poppins" font-weight="700"><tspan x="0" y="0">Web</tspan><tspan y="0" font-family="Poppins-ExtraLight, Poppins" font-weight="200">dev</tspan></text>
                      <text id="_" data-name="{" transform="translate(355.104 786.476)" fill="var(--P-color)" font-size="307" font-family="Poppins-Regular, Poppins"><tspan x="0" y="0">{</tspan></text>
                    </g>
                  </svg>

            </div> -->
            <ul class="imadraf-nav-list">
                <!--<li class="imadraf-list-element"> <a href="#" class="imadraf-para imadraf-element-content active">Home</a></li>
                <li class="imadraf-list-element"> <a href="#" class="imadraf-para imadraf-element-content">Portfolio</a></li>
                <li class="imadraf-list-element"> <a href="#" class="imadraf-para imadraf-element-content">Gallery</a></li>
                <li class="imadraf-list-element"> <a href="#" class="imadraf-para imadraf-element-content">About</a></li>
                <li class="imadraf-list-element"> <a href="#" class="imadraf-para imadraf-element-content">Contact</a></li> -->
            </ul>
            <div id='menu' class="burger">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
        </div>
    </div>
    <div class="scroll-nav">
        <ul class="scroll-links">
            <li> <a class="scrol-to" href="#" data-section="NAV"><i class="fas fa-home"></i></a></li>
            <li> <a class="scrol-to" href="#" data-section="ABOUT"><i class="fas fa-address-card"></i></a></li>
            <li> <a class="scrol-to" href="#" data-section="PORTFOLIO"><i class="fas fa-pencil-ruler"></i></a></li>
            <li> <a class="scrol-to" href="#" data-section="GALLERY"><i class="fas fa-images"></i></a></li>
            <li> <a class="scrol-to" href="#" data-section="CONTACT"><i class="fas fa-comments"></i></a></li>
        </ul>
    </div>
    <div id="option-modal">
        <p class="imadraf-para">CLICK HERE !</p> <i id="OptionModalClose" class="far fa-times-circle"></i></div>
    <div id="whatsap-modal">
        <div class="border-whatsap">
            <p class="imadraf-para">WhatsApp CHAT</p>
        </div>
    </div>


    <div class="setting-box">
        <div class="toggle-ico"> <i class="fas fa-cog myiconsetting"></i></div>
        <div class="setting-content">
            <div class="color-box mb-2 mt-2">
                <h4 class="imadraf-moy">Colors</h4>
                <ul class="colors-list">
                    <li data-colors="#fd0054" data-bg="#ca0043"></li>
                    <li class="active" data-colors="#44bd32" data-bg="#359527"></li>
                    <li data-colors="#0097e6" data-bg="#0076b3"></li>
                    <li data-colors="#f79f1f" data-bg="#db8508"></li>
                    <li data-colors="#e84118" data-bg="#c23616"></li>
                    <li data-colors="#5f27cd" data-bg="#341f97"></li>
                </ul>
            </div>
            <div class="color-box mb-2">
                <h4 class="imadraf-moy">Mode</h4>
                <div class="mode-list"> <i data-colors="#fff" data-bg="#101010" class="fas fa-sun active"></i> <i data-colors="#101010" data-bg="#fff" class="fas fa-moon"></i></div>
            </div>
        </div>
    </div>


    <div class="master" id="MASTER">
        <div class="master-content imadraf-container">
            <h1 class="imadraf-title mb-1" data-aos="fade-right">Hello <span>!</span> <br>I'm Imad RAFAI</h1>
            <h2 class="imadraf-sub mb-1" data-aos="fade-left"> A developper who likes the word GEEK </h2>
            <p class="imadraf-para mb-2" data-aos="fade-right">Please take your time seeing my portfolio & contact me</p>
            <div class="master-btns">
                <a href="#" class="imadraf-btn imadraf-btn-P scrol-to" data-section="PORTFOLIO" data-aos="fade-right">Portfolio</a>
                <a href="#" class="imadraf-btn imadraf-btn-S" data-aos="fade-left">Contact</a>
            </div>
        </div>
    </div>
    <div class="why py-4">
        <div class="why-content imadraf-container" id="ABOUT">
            <div class="head-cont mb-4">
                <div data-aos="fade-right" class="head-strok"></div>
            <h2 class="imadraf-header mr-2 ml-2" data-aos="fade-right">Who am I ?</h2>
            <div class="head-line" id="headLine4"></div>
            </div>

            <p class="imadraf-para mb-1" data-aos="fade-up">
                I am Imad RAFAI (I will be soon 22 yo !), <img src="https://freepngimg.com/thumb/emoji/4-2-smiling-face-with-sunglasses-cool-emoji-png.png" style="position:relative;top:10px;width:35px;height:35px;"  /> a moroccan <img src="img/emojis/morocco.png" style="position:relative;top:10px;width:35px;height:35px;"  /> student living in Grenoble, France <img src="img/emojis/france.png" style="position:relative;top:10px;width:35px;height:35px;"  />.
            </p>
            
            <p class="imadraf-para mb-3" data-aos="fade-up"> Currently, I am in my 2nd year at ENSIMAG-INP (the National School for Computer Science and Applied Mathematics in France).  I enjoy turning complex problems into simple, beautiful and intuitive designs. When I'm not coding or designing (and of course when I don't have any classes to take), you'll find me eating, watching tutorials, playing strategy or FPS games. Since my younger age, I used to write articles in my blog (you can find <a href="http://www.ar-ency.blogspot.com" target="_blank">HERE</a>, I stopped posting articles in 2015.). This blog had given to me the big passion that I have for web development and computer science. I started learning my first programming languages at an early age (<img src="img/emojis/js.png" style="position:relative;top:10px;width:35px;height:35px;"  /> JAVASCRIPT is LOVE <img src="img/emojis/heart.png" style="position:relative;top:10px;width:35px;height:35px;"  />).

            </p>
            <p class="imadraf-para mb-3" style="font-size:15px;" data-aos="fade-up">
                 *The emojis used above were mostly taken from <a href="Flaticon.com">Flaticon.com</a>.
            </p>
            
            <!-- <h2 class="imadraf-sub mb-4" data-aos="fade-right">Imadostoos</h2>
            <div class="why-flex">
                <div class="why-element" data-aos="fade-up">
                    <a href="#" data-izimodal-open="#modal-1" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">Building a WEB Application</p>
                            <div id="modal-1" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">WEB Application</h3>
                                <p class="imadraf-para"> Imadostoos </p>
                                <p class="imadraf-para"> Imadostoos </p>
                                <p class="imadraf-para"> Imadostoos </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="why-element" data-aos="fade-up">
                    <a href="#" data-izimodal-open="#modal-2" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">Navigation</p>
                            <div id="modal-2" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">Navigation</h3>
                                <p class="imadraf-para"> Imadostoos </p>
                                <p class="imadraf-para"> Imadostoos </p>
                                <p class="imadraf-para"> Imadostoos </p>
                                <p class="imadraf-para mb-2">Imadostoos</p> <img src="" class="w100" alt=""></div>
                        </div>
                    </a>
                </div>
                <div class="why-element" data-aos="fade-up">
                    <a href="#" data-izimodal-open="#modal-3" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">Conversion</p>
                            <div id="modal-3" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">Conversion</h3>
                                <p class="imadraf-para"> Imadostoos </p>
                                <p class="imadraf-para"> Imadostoos </p>
                                <p class="imadraf-para"> Imadostoos </p>
                                <p class="imadraf-para mb-2"></p> <img src="" class="w100 mb-2" alt="">
                                <p class="imadraf-para"> </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="why-element" data-aos="fade-up">
                    <a href="#" data-izimodal-open="#modal-4" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">Branding</p>
                            <div id="modal-4" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">Branding</h3>
                                <p class="imadraf-para mb-2"> </p> <img src="" class="mb-2 w100" alt=""> <img src=""
                                    class="w100 mb-2" alt="">
                                <p class="imadraf-para"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="why-element" data-aos="fade-up">
                    <a href="#" data-izimodal-open="#modal-5" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">Responsive</p>
                            <div id="modal-5" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">Responsive</h3>
                                <p class="imadraf-para"></p>
                                <p class="imadraf-para"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="why-element" data-aos="fade-up">
                    <a href="#" data-izimodal-open="#modal-6" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">SEO</p>
                            <div id="modal-6" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">SEO</h3>
                                <p class="imadraf-para"></p>
                                <p class="imadraf-para"></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 
        </div> -->
        <div class="about page-section py-4" >
        <div class="about-content imadraf-container">
           <!-- <div class="head-cont mb-4">
                <div data-aos="fade-right" class="head-strok"></div>
                <h2 class="imadraf-header mr-2 ml-2">About</h2>
                <div class="head-line" id="headLine4"></div>
            </div>
            <p class="imadraf-para mb-2" data-aos="fade-up"> My name is ILYES RAFAI, I'm 25 years old, I was born in Guercif city in the Oriental region, northeast of the Moroccan kingdom.</p>
            <p class="imadraf-para mb-2" data-aos="fade-up"> I enjoy turning complex problems into simple, beautiful and intuitive designs. When I'm not coding or designing, you'll find me eating, watching tutorials, playing strategies games or listening to music specially Cheb Hasni's musics.</p>
            <p class="imadraf-para mb-4" data-aos="fade-up"> I do the work I do because I love it. I like the industry. I like the people I meet. I like to talk shop. I embrace the nerd. I like to make the web a better place. Hopefully we cross paths in the real world someday and we can make it a better
                place together.</p>
             <div class="skills mb-4">
                <h2 class="imadraf-sub text-center mb-4" data-aos="fade-right">Skills</h2>
                <div class="skill mb-4">
                    <div class="meft meft1">
                        <div class="flex mb-2">
                            <p class="imadraf-para">Front-End</p>
                            <p class="imadraf-para percent">90%</p>
                        </div>
                    </div>
                    <div class="number">
                        <div class="progress progress1"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="meft meft2">
                        <div class="flex mb-2">
                            <p class="imadraf-para">Back-End</p>
                            <p class="imadraf-para percent">60%</p>
                        </div>
                    </div>
                    <div class="number">
                        <div class="progress progress2"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="meft meft3">
                        <div class="flex mb-2">
                            <p class="imadraf-para">Eating</p>
                            <p class="imadraf-para percent">100%</p>
                        </div>
                    </div>
                    <div class="number">
                        <div class="progress progress3"></div>
                    </div>
                </div>
            </div> -->
            <div class="timeline">
                <h2 class="imadraf-sub text-center mb-4" data-aos="fade-right">Education</h2>
                <div class="timeline-content">
                    <div class="time">
                        <p class="imadraf-para year">2015</p>
                        <div class="left" data-aos="fade-right">
                            <p class="title">Zineb Ennefzaouian, Oujda, Morocco</p>
                            <p class="description"> 2 years of baccalaureate in a branch with a domination of Mathematics.</p>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                    <div class="time">
                        <p class="imadraf-para year">2017</p>
                        <div class="right" data-aos="fade-left">
                            <p class="title">MP at CPGE Omar Ibn Abdelaziz, Oujda ,Morocco</p>
                            <p class="description">The first year of the preparatory classes for high engineering schools. It basically 2 years of hard mathematics, physics ... <br>MP = Math Physics</p>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                    <div class="time">
                        <p class="imadraf-para year">2018</p>
                        <div class="left" data-aos="fade-right">
                            <p class="title">Mp* at Moulay Idriss, Fez, Morocco</p>
                            <p class="description">The second year of preparatory classes : I have been chosen to be part of a unique class reuniting the top CPGE students in the country so as to prepare them for the best frensh engineering school.</p>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                    <div class="time">
                        <p class="imadraf-para year">2019</p>
                        <div class="left" data-aos="fade-right">
                            <p class="title">ENSIMAG-INP, Grenoble, France</p>
                            <p class="description">The previous goal achieved, I joined ENSIMAG-INP to gain strong knowledge in computer science and applied mathematics.</p>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                    <div class="time">
                        <p class="imadraf-para year">2020</p>
                        <div class="right" data-aos="fade-left">
                            <p class="title">ENSIMAG-INP, Grenoble, France</p>
                            <p class="description">It's my 2nd year at ENSIMAG-INP, I have chosen the ISI (Engineering of Information System) branch which is the field specialized in computer science in the school.</p>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                    <div class="time">
                        <p class="imadraf-para year">2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="services py-4">
        <div class="services-content imadraf-container">
            <div class="head-cont mb-4">
                <div data-aos="fade-right" class="head-strok"></div>
                <h2 class="imadraf-header mr-2 ml-2">Skills/Languages</h2>
                <div class="head-line" id="headLine1"></div>
            </div>
            <p class="imadraf-para" data-aos="fade-up">  </p>
            <div class="flex py-4">
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> <!-- <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.78 72.78"> <defs><style>.cls-1{fill:var(--P-color)}</style></defs> <g id="Layer_1-2" data-name="Layer 1"> <path class="cls-1" d="M51.27,19.27a32,32,0,1,0,32,32A32,32,0,0,0,51.27,19.27Zm-10.46,42a2,2,0,0,1-1.05-.3L29.13,54.42,29,54.25a4.22,4.22,0,0,1,0-6l.17-.17,10.63-6.55a2,2,0,1,1,2.1,3.4L31.74,51.21a.2.2,0,0,0,0,.11l10.12,6.25a2,2,0,0,1-1,3.7ZM46.64,69a2,2,0,0,1-1.87,1.29,1.94,1.94,0,0,1-.71-.13,2,2,0,0,1-1.16-2.58l13-34A2,2,0,1,1,59.64,35ZM73.58,54.25l-.17.17L62.78,61a2,2,0,0,1-1.05.3,2,2,0,0,1-1-3.7L70.8,51.33a.24.24,0,0,0,0-.12L60.68,45a2,2,0,0,1,2.1-3.4l10.63,6.55.17.17A4.22,4.22,0,0,1,73.58,54.25Z" transform="translate(-14.87 -14.87)"/> </g> </svg> -->
                        <svg viewBox="0 0 128 128">
                        <path id="Layer_1" data-name="Layer 1" d="M47.617 98.12s-4.767 2.774 3.397 3.71c9.892 1.13 14.947.968 25.845-1.092 0 0 2.871 1.795 6.873 3.351-24.439 10.47-55.308-.607-36.115-5.969zM44.629 84.455s-5.348 3.959 2.823 4.805c10.567 1.091 18.91 1.18 33.354-1.6 0 0 1.993 2.025 5.132 3.131-29.542 8.64-62.446.68-41.309-6.336z"></path><path id="Layer_1" d="M69.802 61.271c6.025 6.935-1.58 13.17-1.58 13.17s15.289-7.891 8.269-17.777c-6.559-9.215-11.587-13.792 15.635-29.58 0 .001-42.731 10.67-22.324 34.187z"></path><path id="Layer_1" d="M102.123 108.229s3.529 2.91-3.888 5.159c-14.102 4.272-58.706 5.56-71.094.171-4.451-1.938 3.899-4.625 6.526-5.192 2.739-.593 4.303-.485 4.303-.485-4.953-3.487-32.013 6.85-13.743 9.815 49.821 8.076 90.817-3.637 77.896-9.468zM49.912 70.294s-22.686 5.389-8.033 7.348c6.188.828 18.518.638 30.011-.326 9.39-.789 18.813-2.474 18.813-2.474s-3.308 1.419-5.704 3.053c-23.042 6.061-67.544 3.238-54.731-2.958 10.832-5.239 19.644-4.643 19.644-4.643zM90.609 93.041c23.421-12.167 12.591-23.86 5.032-22.285-1.848.385-2.677.72-2.677.72s.688-1.079 2-1.543c14.953-5.255 26.451 15.503-4.823 23.725 0-.002.359-.327.468-.617z"></path><path id="Layer_1" d="M76.491 1.587s12.968 12.976-12.303 32.923c-20.266 16.006-4.621 25.13-.007 35.559-11.831-10.673-20.509-20.07-14.688-28.815 8.548-12.834 32.229-19.059 26.998-39.667z"></path><path id="Layer_1" d="M52.214 126.021c22.476 1.437 57-.8 57.817-11.436 0 0-1.571 4.032-18.577 7.231-19.186 3.612-42.854 3.191-56.887.874 0 .001 2.875 2.381 17.647 3.331z"></path>
</svg>
                    </div>
                    <h3 class="imadraf-moy">Java</h3>
                    <p class="imadraf-para"></p>
                </div>
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> <svg viewBox="0 0 128 128">
<path id="Layer_1" d="M63.391 1.988c-4.222.02-8.252.379-11.8 1.007-10.45 1.846-12.346 5.71-12.346 12.837v9.411h24.693v3.137h-33.961c-7.176 0-13.46 4.313-15.426 12.521-2.268 9.405-2.368 15.275 0 25.096 1.755 7.311 5.947 12.519 13.124 12.519h8.491v-11.282c0-8.151 7.051-15.34 15.426-15.34h24.665c6.866 0 12.346-5.654 12.346-12.548v-23.513c0-6.693-5.646-11.72-12.346-12.837-4.244-.706-8.645-1.027-12.866-1.008zm-13.354 7.569c2.55 0 4.634 2.117 4.634 4.721 0 2.593-2.083 4.69-4.634 4.69-2.56 0-4.633-2.097-4.633-4.69-.001-2.604 2.073-4.721 4.633-4.721z"></path><path id="Layer_1" d="M91.682 28.38v10.966c0 8.5-7.208 15.655-15.426 15.655h-24.665c-6.756 0-12.346 5.783-12.346 12.549v23.515c0 6.691 5.818 10.628 12.346 12.547 7.816 2.297 15.312 2.713 24.665 0 6.216-1.801 12.346-5.423 12.346-12.547v-9.412h-24.664v-3.138h37.012c7.176 0 9.852-5.005 12.348-12.519 2.578-7.735 2.467-15.174 0-25.096-1.774-7.145-5.161-12.521-12.348-12.521h-9.268zm-13.873 59.547c2.561 0 4.634 2.097 4.634 4.692 0 2.602-2.074 4.719-4.634 4.719-2.55 0-4.633-2.117-4.633-4.719 0-2.595 2.083-4.692 4.633-4.692z"></path><radialGradient id="c" cx="1825.678" cy="444.45" r="26.743" gradientTransform="matrix(0 -.24 -1.055 0 532.979 557.576)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#B8B8B8" stop-opacity=".498"></stop><stop offset="1" stop-color="#7F7F7F" stop-opacity="0"></stop></radialGradient><path opacity=".444" id="Layer_1" enable-background="new" d="M97.309 119.597c0 3.543-14.816 6.416-33.091 6.416-18.276 0-33.092-2.873-33.092-6.416 0-3.544 14.815-6.417 33.092-6.417 18.275 0 33.091 2.872 33.091 6.417z"></path>
</svg></div>
                    <h3 class="imadraf-moy"> Python </h3>
                    <p class="imadraf-para"></p>
                </div>
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> <svg viewBox="0 0 128 128">
<path id="Layer_1" d="M117.5 33.5l.3-.2c-.6-1.1-1.5-2.1-2.4-2.6l-48.3-27.8c-.8-.5-1.9-.7-3.1-.7-1.2 0-2.3.3-3.1.7l-48 27.9c-1.7 1-2.9 3.5-2.9 5.4v55.7c0 1.1.2 2.3.9 3.4l-.2.1c.5.8 1.2 1.5 1.9 1.9l48.2 27.9c.8.5 1.9.7 3.1.7 1.2 0 2.3-.3 3.1-.7l48-27.9c1.7-1 2.9-3.5 2.9-5.4v-55.8c.1-.8 0-1.7-.4-2.6zm-53.5 55c9.1 0 17.1-5 21.3-12.4l12.9 7.6c-6.8 11.8-19.6 19.8-34.2 19.8-21.8 0-39.5-17.7-39.5-39.5s17.7-39.5 39.5-39.5c14.7 0 27.5 8.1 34.3 20l-13 7.5c-4.2-7.5-12.2-12.5-21.3-12.5-13.5 0-24.5 11-24.5 24.5s11 24.5 24.5 24.5z"></path>
</svg></div>
                    <h3 class="imadraf-moy">C</h3>
                    <p class="imadraf-para"></p>
                </div>
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> <svg viewBox="0 0 128 128">
<g> <rect fill="none" x="4.24" y="4.24" width="119.53" height="119.53"></rect> <g> <g> <path id="Layer_1" d="M109.01,28.64L71.28,6.24C69.03,4.91,66.51,4.24,64,4.24s-5.03,0.67-7.28,2.01l-37.74,22.4 c-4.5,2.67-7.28,7.61-7.28,12.96v44.8c0,5.35,2.77,10.29,7.28,12.96l37.73,22.4c2.25,1.34,4.76,2,7.28,2c2.51,0,5.03-0.67,7.28-2 l37.74-22.4c4.5-2.67,7.28-7.62,7.28-12.96V41.6C116.29,36.26,113.52,31.31,109.01,28.64z M79.79,98.59l0.06,3.22 c0,0.39-0.25,0.83-0.55,0.99l-1.91,1.1c-0.3,0.15-0.56-0.03-0.56-0.42l-0.03-3.17c-1.63,0.68-3.29,0.84-4.34,0.42 c-0.2-0.08-0.29-0.37-0.21-0.71l0.69-2.91c0.06-0.23,0.18-0.46,0.34-0.6c0.06-0.06,0.12-0.1,0.18-0.13 c0.11-0.06,0.22-0.07,0.31-0.03c1.14,0.38,2.59,0.2,3.99-0.5c1.78-0.9,2.97-2.72,2.95-4.52c-0.02-1.64-0.9-2.31-3.05-2.33 c-2.74,0.01-5.3-0.53-5.34-4.57c-0.03-3.32,1.69-6.78,4.43-8.96l-0.03-3.25c0-0.4,0.24-0.84,0.55-1l1.85-1.18 c0.3-0.15,0.56,0.04,0.56,0.43l0.03,3.25c1.36-0.54,2.54-0.69,3.61-0.44c0.23,0.06,0.34,0.38,0.24,0.75l-0.72,2.88 c-0.06,0.22-0.18,0.44-0.33,0.58c-0.06,0.06-0.13,0.11-0.19,0.14c-0.1,0.05-0.19,0.06-0.28,0.05c-0.49-0.11-1.65-0.36-3.48,0.56 c-1.92,0.97-2.59,2.64-2.58,3.88c0.02,1.48,0.77,1.93,3.39,1.97c3.49,0.06,4.99,1.58,5.03,5.09 C84.45,92.62,82.61,96.33,79.79,98.59z M106.13,38.09l-35.7,22.05c-4.45,2.6-7.73,5.52-7.74,10.89v43.99 c0,3.21,1.3,5.29,3.29,5.9c-0.65,0.11-1.32,0.19-1.98,0.19c-2.09,0-4.15-0.57-5.96-1.64l-37.73-22.4 c-3.69-2.19-5.98-6.28-5.98-10.67V41.6c0-4.39,2.29-8.48,5.98-10.67l37.74-22.4c1.81-1.07,3.87-1.64,5.96-1.64 s4.15,0.57,5.96,1.64l37.74,22.4c3.11,1.85,5.21,5.04,5.8,8.63C112.24,36.89,109.42,36.17,106.13,38.09z"></path> </g> <g> 
    <path id="Layer_1" d="M99.12,90.73l-9.4,5.62c-0.25,0.15-0.43,0.31-0.43,0.61v2.46c0,0.3,0.2,0.43,0.45,0.28l9.54-5.8 c0.25-0.15,0.29-0.42,0.29-0.72v-2.17C99.57,90.71,99.37,90.59,99.12,90.73z"></path> </g> </g> </g>
</svg></div>
                    <h3 class="imadraf-moy">Assembly</h3>
                    <p class="imadraf-para"></p>
                </div>
            </div>
            <div class="flex py-4">
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> <svg viewBox="0 0 128 128">
<path id="Layer_1" d="M2 1v125h125v-125h-125zm66.119 106.513c-1.845 3.749-5.367 6.212-9.448 7.401-6.271 1.44-12.269.619-16.731-2.059-2.986-1.832-5.318-4.652-6.901-7.901l9.52-5.83c.083.035.333.487.667 1.071 1.214 2.034 2.261 3.474 4.319 4.485 2.022.69 6.461 1.131 8.175-2.427 1.047-1.81.714-7.628.714-14.065-.001-10.115.046-20.188.046-30.188h11.709c0 11 .06 21.418 0 32.152.025 6.58.596 12.446-2.07 17.361zm48.574-3.308c-4.07 13.922-26.762 14.374-35.83 5.176-1.916-2.165-3.117-3.296-4.26-5.795 4.819-2.772 4.819-2.772 9.508-5.485 2.547 3.915 4.902 6.068 9.139 6.949 5.748.702 11.531-1.273 10.234-7.378-1.333-4.986-11.77-6.199-18.873-11.531-7.211-4.843-8.901-16.611-2.975-23.335 1.975-2.487 5.343-4.343 8.877-5.235l3.688-.477c7.081-.143 11.507 1.727 14.756 5.355.904.916 1.642 1.904 3.022 4.045-3.772 2.404-3.76 2.381-9.163 5.879-1.154-2.486-3.069-4.046-5.093-4.724-3.142-.952-7.104.083-7.926 3.403-.285 1.023-.226 1.975.227 3.665 1.273 2.903 5.545 4.165 9.377 5.926 11.031 4.474 14.756 9.271 15.672 14.981.882 4.916-.213 8.105-.38 8.581z"></path>
</svg></div>
                    <h3 class="imadraf-moy">Javascript</h3>
                    <p class="imadraf-para"></p>
                </div>
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> <svg viewBox="0 0 128 128">
<path id="Layer_1" d="M9.032 2l10.005 112.093 44.896 12.401 45.02-12.387 10.015-112.107h-109.936zm89.126 26.539l-.627 7.172-.276 3.289h-52.665000000000006l1.257 14h50.156000000000006l-.336 3.471-3.233 36.119-.238 2.27-28.196 7.749v.002l-.034.018-28.177-7.423-1.913-21.206h13.815000000000001l.979 10.919 15.287 4.081h.043v-.546l15.355-3.875 1.604-17.579h-47.698l-3.383-38.117-.329-3.883h68.939l-.33 3.539z"></path>
</svg></div>
                    <h3 class="imadraf-moy">HTML5</h3>
                    <p class="imadraf-para"></p>
                </div>
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> <svg viewBox="0 0 128 128">
<path id="Layer_1" d="M8.76 1l10.055 112.883 45.118 12.58 45.244-12.626 10.063-112.837h-110.48zm89.591 25.862l-3.347 37.605.01.203-.014.467v-.004l-2.378 26.294-.262 2.336-28.36 7.844v.001l-.022.019-28.311-7.888-1.917-21.739h13.883l.985 11.054 15.386 4.17-.004.008v-.002l15.443-4.229 1.632-18.001h-32.282999999999994l-.277-3.043-.631-7.129-.331-3.828h34.748999999999995l1.264-14h-52.926l-.277-3.041-.63-7.131-.332-3.828h69.281l-.331 3.862z"></path>
</svg></div>
                    <h3 class="imadraf-moy"> CSS3 </h3>
                    <p class="imadraf-para"></p>
                </div>
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> <svg viewBox="0 0 128 128">
<path id="Layer_1" d="M116.948 97.807c-6.863-.187-12.104.452-16.585 2.341-1.273.537-3.305.552-3.513 2.147.7.733.809 1.829 1.365 2.731 1.07 1.73 2.876 4.052 4.488 5.268 1.762 1.33 3.577 2.751 5.465 3.902 3.358 2.047 7.107 3.217 10.34 5.268 1.906 1.21 3.799 2.733 5.658 4.097.92.675 1.537 1.724 2.732 2.147v-.194c-.628-.8-.79-1.898-1.366-2.733l-2.537-2.537c-2.48-3.292-5.629-6.184-8.976-8.585-2.669-1.916-8.642-4.504-9.755-7.609l-.195-.195c1.892-.214 4.107-.898 5.854-1.367 2.934-.786 5.556-.583 8.585-1.365l4.097-1.171v-.78c-1.531-1.571-2.623-3.651-4.292-5.073-4.37-3.72-9.138-7.437-14.048-10.537-2.724-1.718-6.089-2.835-8.976-4.292-.971-.491-2.677-.746-3.318-1.562-1.517-1.932-2.342-4.382-3.511-6.633-2.449-4.717-4.854-9.868-7.024-14.831-1.48-3.384-2.447-6.72-4.293-9.756-8.86-14.567-18.396-23.358-33.169-32-3.144-1.838-6.929-2.563-10.929-3.513-2.145-.129-4.292-.26-6.438-.391-1.311-.546-2.673-2.149-3.902-2.927-4.894-3.092-17.448-9.817-21.072-.975-2.289 5.581 3.421 11.025 5.462 13.854 1.434 1.982 3.269 4.207 4.293 6.438.674 1.467.79 2.938 1.367 4.489 1.417 3.822 2.652 7.98 4.487 11.511.927 1.788 1.949 3.67 3.122 5.268.718.981 1.951 1.413 2.145 2.927-1.204 1.686-1.273 4.304-1.95 6.44-3.05 9.615-1.899 21.567 2.537 28.683 1.36 2.186 4.567 6.871 8.975 5.073 3.856-1.57 2.995-6.438 4.098-10.732.249-.973.096-1.689.585-2.341v.195l3.513 7.024c2.6 4.187 7.212 8.562 11.122 11.514 2.027 1.531 3.623 4.177 6.244 5.073v-.196h-.195c-.508-.791-1.303-1.119-1.951-1.755-1.527-1.497-3.225-3.358-4.487-5.073-3.556-4.827-6.698-10.11-9.561-15.609-1.368-2.627-2.557-5.523-3.709-8.196-.444-1.03-.438-2.589-1.364-3.122-1.263 1.958-3.122 3.542-4.098 5.854-1.561 3.696-1.762 8.204-2.341 12.878-.342.122-.19.038-.391.194-2.718-.655-3.672-3.452-4.683-5.853-2.554-6.07-3.029-15.842-.781-22.829.582-1.809 3.21-7.501 2.146-9.172-.508-1.666-2.184-2.63-3.121-3.903-1.161-1.574-2.319-3.646-3.124-5.464-2.09-4.731-3.066-10.044-5.267-14.828-1.053-2.287-2.832-4.602-4.293-6.634-1.617-2.253-3.429-3.912-4.683-6.635-.446-.968-1.051-2.518-.391-3.513.21-.671.508-.951 1.171-1.17 1.132-.873 4.284.29 5.462.779 3.129 1.3 5.741 2.538 8.392 4.294 1.271.844 2.559 2.475 4.097 2.927h1.756c2.747.631 5.824.195 8.391.975 4.536 1.378 8.601 3.523 12.292 5.854 11.246 7.102 20.442 17.21 26.732 29.269 1.012 1.942 1.45 3.794 2.341 5.854 1.798 4.153 4.063 8.426 5.852 12.488 1.786 4.052 3.526 8.141 6.05 11.513 1.327 1.772 6.451 2.723 8.781 3.708 1.632.689 4.307 1.409 5.854 2.34 2.953 1.782 5.815 3.903 8.586 5.855 1.383.975 5.64 3.116 5.852 4.879zM29.729 23.466c-1.431-.027-2.443.156-3.513.389v.195h.195c.683 1.402 1.888 2.306 2.731 3.513.65 1.367 1.301 2.732 1.952 4.097l.194-.193c1.209-.853 1.762-2.214 1.755-4.294-.484-.509-.555-1.147-.975-1.755-.556-.811-1.635-1.272-2.339-1.952z"></path>
</svg></div>
                    <h3 class="imadraf-moy">SQL/Oracle</h3>
                    <p class="imadraf-para"></p>
                </div>
            </div>
            <div class="flex py-4">
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.78 72.78"> <defs><style>.cls-1{fill:var(--P-color)}</style></defs> <g id="Layer_1-2" data-name="Layer 1"> <path class="cls-1" d="M51.27,19.27a32,32,0,1,0,32,32A32,32,0,0,0,51.27,19.27Zm-10.46,42a2,2,0,0,1-1.05-.3L29.13,54.42,29,54.25a4.22,4.22,0,0,1,0-6l.17-.17,10.63-6.55a2,2,0,1,1,2.1,3.4L31.74,51.21a.2.2,0,0,0,0,.11l10.12,6.25a2,2,0,0,1-1,3.7ZM46.64,69a2,2,0,0,1-1.87,1.29,1.94,1.94,0,0,1-.71-.13,2,2,0,0,1-1.16-2.58l13-34A2,2,0,1,1,59.64,35ZM73.58,54.25l-.17.17L62.78,61a2,2,0,0,1-1.05.3,2,2,0,0,1-1-3.7L70.8,51.33a.24.24,0,0,0,0-.12L60.68,45a2,2,0,0,1,2.1-3.4l10.63,6.55.17.17A4.22,4.22,0,0,1,73.58,54.25Z" transform="translate(-14.87 -14.87)"/> </g> </svg></div>
                    <h3 class="imadraf-moy">Problem Solving</h3>
                    <p class="imadraf-para"></p>
                </div>
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> <svg viewBox="0 0 128 128">
<rect x="6.5" y="6.5" fill="#1F0740" width="115" height="115"></rect><path id="Layer_1" d="M0,0v128h128V0H0z M121.5,121.5H6.5V6.5h115V121.5z"></path><path fill="#D490C5" d="M103.5,59.2c0,0-0.6-14.6-16.5-14.6c-16,0-17.3,22-17.3,22v4.7c0,0,2.8,18.3,16.3,18.3 c13.5,0,14.8-2.6,14.8-2.6v-8.1c0,0-19.3,9.2-21.2-10h24V59.2z M94.5,61.6H79.5c0,0,0-8.3,7.5-9.2C95.2,52.4,94.5,61.6,94.5,61.6z "></path><path fill="#D490C5" d="M50.5,29.9H38.4v3.8l-16,54.9h9.4l4.4-16.1H53l4.5,16.1h10.3L50.5,29.9z M38.2,63.1l6.4-24.5L51,63.1H38.2z"></path>
</svg></div>
                    <h3 class="imadraf-moy">Blogging & Video Editing</h3>
                    <p class="imadraf-para"></p>
                </div>
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> 
                        <svg id="Capa_1" enable-background="new 0 0 512.012 512.012"  viewBox="0 0 512.012 512.012" width="512" xmlns="http://www.w3.org/2000/svg"><g><path id="Layer_1" d="m59.998 332.666v87.346h61v92h210v-62.218c0-56.303 12.309-115.303 37.563-179.782h32.224l25.611 25.611c-2.817 5.875-4.398 12.451-4.398 19.39 0 24.813 20.187 45 45 45s45-20.187 45-45-20.187-45-45-45c-6.938 0-13.514 1.581-19.389 4.398l-34.398-34.398h-32.572c3.497-9.779 6.115-19.796 7.843-30.01h36.096c6.192 17.469 22.865 30.01 42.42 30.01 24.813 0 45-20.187 45-45s-20.187-45-45-45c-19.555 0-36.228 12.541-42.42 30h-33.58c0-10.152-.845-20.177-2.485-30h24.698l34.398-34.397c5.875 2.817 12.45 4.398 19.389 4.398 24.813 0 45-20.187 45-45s-20.187-45-45-45-45 20.187-45 45c0 6.939 1.581 13.514 4.398 19.389l-25.611 25.61h-19.994c-24.022-68.126-88.986-119.066-167.616-120-88.723-1.043-163.221 61.684-179.498 143.168-5.685 28.455-4.837 56.601 2.51 83.77l-36.173 62.25zm407-32.654c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.728-15 15-15zm0-120c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.728-15 15-15zm0-120c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.728-15 15-15zm-117.798 178.089c-.272.639-.533 1.273-.802 1.911h-92.44c6.565-8.725 11.274-18.921 13.531-30.01h88.481c-1.971 9.61-4.896 18.996-8.77 28.099zm-108.202-43.089c0 24.813-20.187 45-45 45s-45-20.187-45-45 20.187-45 45-45 45 20.187 45 45zm120-15h-91.509c-2.258-11.079-6.967-21.275-13.532-30h101.998c1.993 9.704 3.043 19.738 3.043 30zm-297.903-30.954c13.953-69.845 76.913-119.906 149.725-119.047 60.427.717 112.514 37.715 135.55 90.001h-152.372c-41.355 0-75 33.645-75 75s33.645 75 75 74.99h140.455c-23.819 63.823-35.455 122.919-35.455 179.792v32.218h-150v-92h-61v-72.655l-50.417-36.534 29.076-50.038c-.795-4.156-14.724-35.852-5.562-81.727z"/><path d="m180.998 180.012h30v30h-30z"/></g></svg>
                    </div>
                    <h3 class="imadraf-moy"> Machine Learning </h3>
                    <p class="imadraf-para">  </p>
                </div>
                <div class="service" data-aos="fade-up">
                    <div class="border serv"> <svg  viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path id="Layer_1" d="m59.07 14h-14.431c-.007-.016-.012-.032-.02-.048l1.844-2.581a1.994 1.994 0 0 0 -.213-2.577l-3.045-3.044a1.994 1.994 0 0 0 -2.576-.213l-2.591 1.832a12.482 12.482 0 0 0 -1.391-.569l-.521-3.133a2 2 0 0 0 -1.973-1.667h-4.306a2 2 0 0 0 -1.973 1.671l-.536 3.129a12.546 12.546 0 0 0 -1.386.581l-2.581-1.845a1.993 1.993 0 0 0 -2.571.214l-3.05 3.044a1.994 1.994 0 0 0 -.213 2.577l1.832 2.59c-.006.012-.01.027-.016.039h-14.423a2.969 2.969 0 0 0 -2.93 3v32a2.969 2.969 0 0 0 2.93 3h19.89l-.667 4h-1.153a1 1 0 0 0 -.8.4l-3 4a1 1 0 0 0 .8 1.6h24a1 1 0 0 0 .8-1.6l-3-4a1 1 0 0 0 -.8-.4h-1.153l-.667-4h19.89a2.969 2.969 0 0 0 2.93-3v-32a2.969 2.969 0 0 0 -2.93-3zm-39.906-3.792 3.045-3.044 2.582 1.845a2.009 2.009 0 0 0 2.032.165 11.964 11.964 0 0 1 1.177-.487 2.008 2.008 0 0 0 1.325-1.557l.522-3.13h4.306l.522 3.13a2.008 2.008 0 0 0 1.325 1.557 11.846 11.846 0 0 1 1.178.487 2.01 2.01 0 0 0 2.034-.166l2.581-1.844 3.045 3.045-1.845 2.582a2.009 2.009 0 0 0 -.165 2.033 11.771 11.771 0 0 1 .485 1.176 2.007 2.007 0 0 0 1.557 1.324l3.13.522v4.306l-3.13.522a2.008 2.008 0 0 0 -1.557 1.326 11.614 11.614 0 0 1 -.487 1.179 2.006 2.006 0 0 0 .166 2.033l1.844 2.583-3.045 3.044-2.582-1.845a2.01 2.01 0 0 0 -2.032-.165 11.964 11.964 0 0 1 -1.177.484 2.008 2.008 0 0 0 -1.323 1.557l-.524 3.13h-4.306l-.522-3.13a2.008 2.008 0 0 0 -1.325-1.557 11.846 11.846 0 0 1 -1.178-.487 2.051 2.051 0 0 0 -.882-.2 1.987 1.987 0 0 0 -1.152.367l-2.581 1.844-3.045-3.045 1.845-2.582a2.009 2.009 0 0 0 .165-2.033 11.771 11.771 0 0 1 -.485-1.177 2.007 2.007 0 0 0 -1.557-1.324l-3.13-.523v-4.306l3.13-.522a2.008 2.008 0 0 0 1.557-1.325 11.614 11.614 0 0 1 .487-1.179 2.009 2.009 0 0 0 -.166-2.034zm-14.234 5.792h10.316a1.988 1.988 0 0 0 -1.246 1.847v.153h-5a1 1 0 0 0 -1 1v11.184a3 3 0 1 0 2 0v-10.184h4v2.153a1.992 1.992 0 0 0 1.672 1.972l3.128.538a12.417 12.417 0 0 0 .581 1.384l-1.844 2.582a1.994 1.994 0 0 0 .213 2.577l.815.815-2.272 2.272a1 1 0 0 0 -.293.707v1.184a3 3 0 1 0 2 0v-.77l1.979-1.979.816.815a1.992 1.992 0 0 0 2.576.213l2.591-1.832a12.482 12.482 0 0 0 1.391.567l.521 3.133a2 2 0 0 0 1.973 1.669h4.306a2 2 0 0 0 1.973-1.671l.536-3.129a12.546 12.546 0 0 0 1.386-.581l2.581 1.845a1.994 1.994 0 0 0 2.576-.214l.816-.815 1.979 1.979v.77a3 3 0 1 0 2 0v-1.184a1 1 0 0 0 -.293-.707l-2.272-2.272.815-.815a1.994 1.994 0 0 0 .213-2.577l-1.832-2.59a12.491 12.491 0 0 0 .567-1.392l3.13-.522a1.992 1.992 0 0 0 1.672-1.972v-2.153h4v10.184a3 3 0 1 0 2 0v-11.184a1 1 0 0 0 -1-1h-5v-.153a1.988 1.988 0 0 0 -1.246-1.847h10.316a.98.98 0 0 1 .93 1v27h-56v-27a.98.98 0 0 1 .93-1zm5.07 17a1 1 0 1 1 -1-1 1 1 0 0 1 1 1zm8 6a1 1 0 1 1 -1-1 1 1 0 0 1 1 1zm30 0a1 1 0 1 1 -1-1 1 1 0 0 1 1 1zm8-6a1 1 0 1 1 -1-1 1 1 0 0 1 1 1zm-14 27h-20l1.5-2h17zm-4.18-4h-11.64l.667-4h10.306zm21.25-6h-54.14a.98.98 0 0 1 -.93-1v-3h56v3a.98.98 0 0 1 -.93 1z"/><path d="m32 29a9 9 0 1 0 -9-9 9.01 9.01 0 0 0 9 9zm0-16a7 7 0 1 1 -7 7 7.008 7.008 0 0 1 7-7z"/><path d="m31 47h2v2h-2z"/><path d="m31 6h2v2h-2z"/><path d="m21.808 9.808h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -.962 19.293)"/><path d="m18 19h2v2h-2z"/><path d="m21.808 28.192h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -13.962 24.678)"/><path d="m31 32h2v2h-2z"/><path d="m40.192 28.192h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -8.577 37.678)"/><path d="m44 19h2v2h-2z"/><path d="m40.192 9.808h2v2h-2z" transform="matrix(.707 -.707 .707 .707 4.423 32.293)"/></svg></div>
                    <h3 class="imadraf-moy">Algorithm optimisation</h3>
                    <p class="imadraf-para"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio py-4 page-section" id="PORTFOLIO">
        <div class="portfolio-content imadraf-container">
            <div class="head-cont mb-4">
                <div data-aos="fade-right" class="head-strok"></div>
                <h2 class="imadraf-header mr-2 ml-2">projects</h2>
                <div class="head-line" id="headLine2"></div>
            </div>
            <p class="imadraf-para" data-aos="fade-up"> During my two years at ENSIMAG-INP, I had the opportunity to work on various projects in different languages :</p><br>
            <div class="flex py-8	">
                <div class="work">
                    <div class="overlay"></div> <img class="content" src="img/appweb.jpg" alt="">
                    <div class="action">
                        <a href="#" data-izimodal-open="#modal-1" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">Building a WEB App</p>
                            <br> <p style="font-size: 13px;" >Please click to see details.</p>
                            <div id="modal-1" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">WEB Application</h3>
                                <p class="imadraf-para"> This project aims to create a web application using JEE technologie based on an MVC architecture. </p>
                                <p class="imadraf-para"> Used languages and tools : HTML5, CSS3, Javascript, JSP, JDBC. </p>
                                <p class="imadraf-para"> </p>
                            </div>
                        </div>
                    </a>
                        </div>
                </div>
                <div class="work">
                    <div class="overlay"></div> <img class="content" src="img/javap.png" alt="">
                    <div class="action">
                        <a href="#" data-izimodal-open="#modal-2" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">Software engineering</p>
                            <br> <p style="font-size: 13px;" >Please click to see details.</p>
                            <div id="modal-2" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">Software engineering in JAVA</h3>
                                <p class="imadraf-para"> During this project, I worked within a group of 5 people to create a compiler for the language DECA (a language similar to JAVA in terms of syntax). Given the language definitions, our job was to write a full compiler for the languages. </p>
                                <p class="imadraf-para">  </p>
                                <p class="imadraf-para">  </p>
                            </div>
                        </div>
                    </a>
                        </div>
                </div>
                <div class="work">
                    <div class="overlay"></div> <img class="content" src="img/gui.png" alt="">
                    <div class="action">
                        <a href="#" data-izimodal-open="#modal-3" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">Graphical User Interface	</p>
                            <br> <p style="font-size: 13px;" >Please click to see details.</p>
                            <div id="modal-3" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">Graphical User Interface</h3>
                                <p class="imadraf-para"> SOON  </p>
                                <p class="imadraf-para">  </p>
                                <p class="imadraf-para">  </p>
                            </div>
                        </div>
                    </a>
                        </div>
                </div>
                <div class="work">
                    <div class="overlay"></div> <img class="content" src="img/multimedia.png" alt="">
                    <div class="action">
                        <a href="#" data-izimodal-open="#modal-4" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">Multimedia server commander</p>
                            <br> <p style="font-size: 13px;" >Please click to see details.</p>
                            <div id="modal-4" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">WEB Application</h3>
                                <p class="imadraf-para"> SOON  </p>
                                <p class="imadraf-para">  </p>
                                <p class="imadraf-para">  </p>
                            </div>
                        </div>
                    </a>
                        </div>
                </div>
                <div class="work">
                    <div class="overlay"></div> <img class="content" src="img/inclusionPolygones.png" alt="">
                    <div class="action">
                        <a href="#" data-izimodal-open="#modal-5" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">Algorithmic Project</p>
                            <br> <p style="font-size: 13px;" >Please click to see details.</p>
                            <div id="modal-5" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">Algorithmic Project</h3>
                                <p class="imadraf-para">  SOON </p>
                                <p class="imadraf-para">  </p>
                                <p class="imadraf-para">  </p>
                            </div>
                        </div>
                    </a>
                        </div>
                </div>
                <div class="work">
                    <div class="overlay"></div> <img class="content" src="img/recalage.gif" alt="">
                    <div class="action">
                        <a href="#" data-izimodal-open="#modal-6" data-izimodal-transitionin="fadeInDown">
                        <div class="circle">
                            <p class="imadraf-moy">Image registration Project</p>
                            <br> <p style="font-size: 13px;" >Please click to see details.</p>
                            <div id="modal-6" class="why-modal">
                                <h3 class="imadraf-moy mb-2 text-center">Image registration Project</h3>
                                <p class="imadraf-para"> SOON  </p>
                                <p class="imadraf-para">  </p>
                                <p class="imadraf-para">  </p>
                            </div>
                        </div>
                    </a>
                        </div>
                </div>
            </div>
            <!-- <p class="imadraf-para last-p mb-2" data-aos="fade-up">Working to deliver long term sustainable value to our clients and making a difference in what we do.</p> <a href="#" class="imadraf-btn imadraf-btn-P" data-aos="fade-up">See all</a> -->

            </div>
    </div>
     <!-- <div class="gallery page-section py-4" id="GALLERY">
        <div class="gallery-content imadraf-container">
            <div class="head-cont mb-4">
                <div data-aos="fade-right" class="head-strok"></div>
                <h2 class="imadraf-header mr-2 ml-2">Gallery</h2>
                <div class="head-line" id="headLine3"></div>
            </div>
            <p class="imadraf-para" data-aos="fade-up"> Feel free to see our photo gallery to see me in person and also to get known to our work procedure and see some behinde the scenes of our brain storming ideas and creative design and developpement methodologies ; and for the most important
                thing; WE HOPE YOU LIKE OUR WORK !</p>
            <div class="galls py-4">
                <div class="border" data-aos="fade-up">
                    <div class="gall">
                        <div class="overlay"></div>
                        <a href="img/Gallery/Me-000.jpg" data-lightbox="mygallery" data-title="White heart"> <i class="fas fa-search-plus"></i> </a> <img src="img/Gallery/Me-0.jpg" alt=""></div>
                </div>
                <div class="border" data-aos="fade-up">
                    <div class="gall">
                        <div class="overlay"></div>
                        <a href="img/Gallery/Me-1.jpg" data-lightbox="mygallery" data-title="At Rayan Ice Coffe"> <i class="fas fa-search-plus"></i> </a> <img src="img/Gallery/Me-1.jpg" alt=""></div>
                </div>
                <div class="border" data-aos="fade-up">
                    <div class="gall">
                        <div class="overlay"></div>
                        <a href="img/Gallery/Me-2.jpg" data-lightbox="mygallery" data-title="At Blue Coffe"> <i class="fas fa-search-plus"></i> </a> <img src="img/Gallery/Me-2.jpg" alt=""></div>
                </div>
                <div class="border" data-aos="fade-up">
                    <div class="gall">
                        <div class="overlay"></div>
                        <a href="img/Gallery/Me-3.jpg" data-lightbox="mygallery" data-title="Simple smile with new barb style"> <i class="fas fa-search-plus"></i> </a> <img src="img/Gallery/Me-3.jpg" alt=""></div>
                </div>
                <div class="border" data-aos="fade-up">
                    <div class="gall">
                        <div class="overlay"></div>
                        <a href="img/Gallery/Me-4.jpg" data-lightbox="mygallery" data-title="Time of programming"> <i class="fas fa-search-plus"></i> </a> <img src="img/Gallery/Me-4.jpg" alt=""></div>
                </div>
                <div class="border" data-aos="fade-up">
                    <div class="gall">
                        <div class="overlay"></div>
                        <a href="img/Gallery/Me-5.jpg" data-lightbox="mygallery" data-title="Parc Lalla Maryam"> <i class="fas fa-search-plus"></i> </a> <img src="img/Gallery/Me-5.jpg" alt=""></div>
                </div>
            </div>
            <div class="gallery-btns py-4"> <a href="#" class="imadraf-btn imadraf-btn-P" data-aos="fade-up">See all</a> <a href="https://www.instagram.com/ilyes_rafai/" target="_blank" class="imadraf-btn imadraf-btn-S" data-aos="fade-up">Instagram</a></div>
        </div>
    </div> -->
    
    <div class="contact page-section py-4" id="CONTACT">
        <div class="contact-content imadraf-container">
            <div class="head-cont mb-4">
                <div data-aos="fade-right" class="head-strok"></div>
                <h2 class="imadraf-header mr-2 ml-2">Contact</h2>
                <div class="head-line" id="headLine5"></div>
            </div>
            <p class="imadraf-moy text-center" data-aos="fade-up">let's have a talk !</p>



            <form data-parsley-validate="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group" data-aos="fade-up">
                    <label class="imadraf-para" for="name">full name</label>
                    <input type="text" class="form-control" id="name" name="name" required="true" data-parsley-trigger="change" data-parsley-error-message="Please enter your name"></div>
                <div class="form-group" data-aos="fade-up"> <label class="imadraf-para" for="sujet">Subject</label> <input type="text" class="form-control" id="sujet" name="sujet" required="true" data-parsley-error-message="Please enter a subject"></div>
                <div class="form-group" data-aos="fade-up">
                    <label class="imadraf-para" for="tel">Phone number</label> <input type="tel" class="form-control" id="tel" name="tel" required="true" data-parsley-error-message="Phone Number must be at least 10 number" data-parsley-minlength="10"></div>
                <div class="form-group" data-aos="fade-up"> <label class="imadraf-para" for="email">Email</label> <input type="email" class="form-control" id="email" name="email" required="true" data-parsley-type="email" data-parsley-error-message="Please enter your valid email"></div>
                <div class="form-group" data-aos="fade-up"> <label class="imadraf-para" for="message">Message</label><textarea class="form-control" rows="5" id="message" name="message" required="true" data-parsley-error-message="Please enter a message"></textarea></div> <button data-aos="fade-up"
                    name="submitContact" type="submit" class="imadraf-btn imadraf-btn-P" ta><span>Send</span></button>
            </form>



        </div>
    </div>
    <div class="footer-social py-4" data-aos="fade-up">
        <div class="footer-social-content imadraf-container">
            <p class="imadraf-moy mb-2">find me on social media</p>
            <div class="flex">
                <a href="https://www.facebook.com/iimadrafaii/" target="_blank"> <i title="Facebook" class="fab fa-facebook-square"></i> </a>
                <a href="https://www.instagram.com/rafai_imad/" target="_blank"> <i title="Instagram" class="fab fa-instagram"></i> </a>
                <a href="https://www.youtube.com/user/imadfans" target="_blank"> <i title="Youtube" class="fab fa-youtube"></i> </a>
                <a href="https://twitter.com/iimadrafaii" target="_blank"> <i title="Twitter" class="fab fa-twitter"></i> </a>
                <a href="https://www.linkedin.com/in/rafaiimad/" target="_blank"> <i title="Linkedin" class="fab fa-linkedin"></i> </a>
                <a href="https://github.com/iimadrafaii" target="_blank"> <i title="Github" class="fab fa-github-square"></i> </a>
            </div>
        </div>
    </div>
    <div class="footer-copy py-4">
        <div class="footer-copy-content imadraf-container"> <span>&copy;</span>
            <p class="imadraf-para">Imad rafai 2021</p>
        </div>
    </div>
    <script src="js/jQuery.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/mode.js"></script>
    <script src="js/izi.min.js"></script>
    <script src="js/point.js"></script>
    <script src="js/parsley.min.js"></script>
    <script src="js/app.js"></script>
    <script>
        AOS.init({
            duration: 1500,
        });
        $(".why-modal").iziModal({
            title: 'Projects',
            subtitle: 'at ENSIMAG-INP',
            color: 'var(--P-color)',
            radius: 5,
            padding: 60,
            width: 800,
            group: 'why',
            bodyOverflow: true,
            fullscreen: true,
            closeButton: true,
            headerColor: 'var(--P-color)',
            borderBottom: false,
            loop: true
        });
        setTimeout(function() {
            $("#option-modal").addClass("active");
        }, 3000);
        setTimeout(function() {
            $("#whatsap-modal").addClass("active");
        }, 4000);
        setTimeout(function() {
            $("#option-modal").removeClass("active");
            $("#whatsap-modal").removeClass("active");
        }, 8000);
        $("#OptionModalClose").click(function() {
            $("#option-modal").removeClass("active");
        });
    </script>
</body>

</html>