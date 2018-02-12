<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Together 4 Boulder</title>
    <link rel="stylesheet" type="text/css" href="styles/reset.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<html>

<body>
    <header>
        <span id="logo">together4boulder</span>
        <nav>
            <ul>
                <li>About</li>
                <li>Our concerns</li>
                <li>Candidates</li>
                <li>How to Help</li>
                <li>Q&amp;A</li>
                <li>Contact</li>
            </ul>
        </nav>
    </header>
    <figure id="mainFigure">
        <figcaption id="mainFigureCaption">A shared vision for tomorrow</figcaption>
    </figure>
    <section id="mainContent">
        <article>
            <h1>Our Mission</h1>
            <p>
                Our mission is to support Boulder City Council <a href="#">candidates</a> who will promote responsible growth, born out of careful considered planning, and who will maintain a high standard of governance that actively represents and incorporates the voices of the community. <span class="bold"><a href="#">Learn more about our concerns.</a></span>
            </p>
            <h1>Who we are</h1>
            <p>Together4Boulder (T4B) is a local grassroots coalition formed to elect City Council members who listen to the community - not special interests!</p>
            <h2>We are a growing coalition of <span class="emp">leaders</span>, <span class="emp">organizations</span> and <span class="emp">businesses</span>, including:</h2>
            <ul id="memberList">
                <li>Boulder Neighborhood Alliance</li>
                <li>Greater Gunbarrel</li>
                <li>Boulder City Council Member Lisa Morzel </li>
                <li>Lower Chatauqua for Responsible Growth</li>
                <li>Martin Acres Neighborhood Association</li>
                <li>Neighbors of 3303 Broadway Palo Park Petitioners</li>
                <li>Perry's Shoes</li>
                <li>Save South Boulder</li>
                <li>Southeast Boulder Neighborhood Association</li>
                <li>Table Mesa Neighborhood Association</li>
                <li>Whittier United</li>
            </ul>
            <h2>With many more joining our movement every day!</h2>

        </article>
    </section>
    <footer>
        <p></p>
    </footer>
    <script>        
        //Change header background color to black when user has scrolled white background into view
        elem = document.getElementById('mainFigure');
        header = document.querySelector('header');

        if (window.addEventListener) {
            window.addEventListener("scroll", function(e) {
                mainFigure = document.getElementById('mainFigure');
                header = document.querySelector('header');
                var computedFigureHeight = parseInt(window.getComputedStyle(mainFigure, null).getPropertyValue('height'));
                var computedHeaderHeight = parseInt(window.getComputedStyle(header, null).getPropertyValue('height'));
                if (window.scrollY > computedFigureHeight - computedHeaderHeight) {

                    if (header.className !== 'headerScrolled') {
                        header.setAttribute('class', 'headerScrolled');
                    }
                } else {
                    if (header.className === "headerScrolled") {
                        header.setAttribute('class', 'headerNotScrolled');
                    }
                }
            }, false);
        }

    </script>
</body>

</html>
