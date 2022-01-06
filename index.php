<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/glss.css" />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Global Library of Short Stories</title>
    </head>
    <body>
        <div id="container">
            <div id="header" class="horizontal">
                <!-- Hamburger menu -->
                <div id="hamburger" tabindex="-1">
                    <div id="hamburger-line"></div>
                    <div id="hamburger-line"></div>
                    <div id="hamburger-line"></div>
                </div>

                <div id="logo">
                    <img class="logo" src="assets/logo.svg" alt="Earth" />
                </div>
                <div id="title">
                    <h2 style="margin: 0">GLSS</h2>
                    <span style="margin:0">Global Library of Short Stories</span>
                </div>

                <!-- Search bar -->
                <div id="search">
                    <form action="php/search.php" method="get">
                        <input
                            type="text"
                            name="search"
                            placeholder="Search"
                            required
                        />
                        <button type="submit">
							Search
							<img 
							id="search-icon"
							src="assets/search.svg" alt="Search" />
                        </button>
                    </form>
                </div>
            </div>
            <div id="content"></div>
        </div>
    </body>
</html>
