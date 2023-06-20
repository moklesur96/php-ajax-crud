<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax Crud</title>
    <!-- MAIN CSS FILE  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- GOOGLE FONTS  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Jost:wght@400;700&display=swap" rel="stylesheet">


</head>

<body>

    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a href="#">
                        <h1>PHP Ajax Crud</h1>
                    </a>
                </div>
                <div class="search">
                    <input type="text" placeholder="Search">
                </div>
            </nav>
        </div>
    </header>
    <main>
        <section class="data-area">
            <div class="container">
                <div class="data-wrap">
                    <div class="student-data">
                        <table id="customers"></table>
                    </div>
                    <div class="add-data">
                        <form action="" id="submit-form">
                            <div class="name-area col-2">
                                <div class="first-name">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" name="fname">
                                </div>
                                <div class="last-name">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" name="lname">
                                </div>
                            </div>
                            <div class="email-age col-2">
                                <div class="email-area">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email">
                                </div>
                                <div class="age-area">
                                    <label for="age">Age</label>
                                    <input type="number" id="age" name="age">
                                </div>
                            </div>
                            <div class="gender">
                                <div class="male">
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" value="male">
                                </div>
                                <div class="female">
                                    <label for="female">Female</label>
                                    <input type="radio" name="gender" value="female">
                                </div>
                            </div>
                            <div class="country">
                                <label for="country">Country</label>
                                <select name="country" id="country">
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Srilanka">Srilanka</option>
                                </select>
                            </div>
                            <input type="submit" value="Save Data" id="add-data">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>











    <!-- JQUERY FILE  -->
    <script src="js/jquery.js" type="text/javascript"></script>

    <!-- SCRIPT JS  -->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>