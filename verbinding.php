<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verbindings Pagina</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/logo_icon.png">
</head>

<body>
    <nav>
        <ul>
        <li><a href="index.html">Thuis</a></li>
            <li><a href="verbinding.php">Verbindings pagina</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Avonturen</a>
                <div class="dropdown-content">
                    <a href="reis_1.html">Rondreis door Amerika</a>
                    <a href="reis_2.html">Luchtballon door Engeland</a>
                    <a href="reis_3.html">Verken Kakslauttanen in Finland</a>
                    <a href="reis_4.html">Avontuur 4</a>
                    <a href="reis_5.html">Wijntherapie met Edgar</a>
                </div>
            </li>
        </ul>
        <div id="logo">
            <a href="index.html"><img src="images/logo.jpg" width="60px" height="44px"></a>
        </div>
        
        <div id="button_en">
            <img src="images/en.jpg" width="35px" height="auto"
            onclick="location.href='connection.php'">
            <br>English
        </div>
    </nav>
    <main>
        <form name="verbinding" action="mailto: nepaccount@gmail.wow" method="post">
            <fieldset>
                <input required type="text" id="text" name="naam" placeholder="Volledige Naam..."><br>
                <input required type="number" id="text" name="tel" placeholder="Telefoonnummer..."><br>
                <input required type="email" id="text" name="email" placeholder="Email..."><br>
                <input required type="text" id="text" name="adres" placeholder="Adres..."><br><br><br>
                <label for="reizen">Welke reis lijkt u het leukst?</label><br>
                Reis 1:
                <input type="radio" name="reizen" id="check" value="1"><br>
                Reis 2:
                <input type="radio" name="reizen" id="check" value="2"><br>
                Reis 3:
                <input type="radio" name="reizen" id="check" value="3"><br>
                Reis 4:
                <input type="radio" name="reizen" id="check" value="4"><br>
                Reis 5:
                <input type="radio" name="reizen" id="check" value="4"><br><br>
                <input type="submit" class="submit" value="Verbinden" onclick="alert('Dankuwel voor het verbinden met ons!')">
            </fieldset>
        </form>
        <div id='lttb' onclick="location.href='ltt.html';">.</div>
    </main>
    <footer>
        <div id="left">Copyright &copy;2021 <br> Ontworpen door: SD21-6</div>
        <div id="center">
            <a class="links" href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><img
                    src="https://cdn4.iconfinder.com/data/icons/various-icons-2/476/Twitter.png" width="50px"
                    height="50px" alt="x"></a>
            <a class="links" href="https://youtube.com" target="_blank" rel="noopener noreferrer"><img
                    src="https://www.shareicon.net/data/2016/07/07/115314_video_476x476.png" width="50px" height="50px"
                    alt="x"></a>
            <a class="links" href="https://facebook.com" target="_blank" rel="noopener noreferrer"><img
                    src="https://cdn4.iconfinder.com/data/icons/various-icons-2/476/Facebook.png" width="50px"
                    height="50px" alt="x"></a>
        </div>
    </footer>
</body>
</html>
