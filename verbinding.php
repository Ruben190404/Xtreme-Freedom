<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verbindings Pagina</title>
    <link rel="stylesheet" href="verbinding.css">
    <link rel="icon" href="images/logo_icon.png">
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.html">Thuis</a></li>
            <li><a href="verbinding.html">Verbindings pagina</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Avonturen</a>
                <div class="dropdown-content">
                    <a href="reis_1.html">Avontuur 1</a>
                    <a href="reis_2.html">Avontuur 2</a>
                    <a href="reis_3.html">Avontuur 3</a>
                    <a href="reis_4.html">Avontuur 4</a>
                    <a href="reis_5.html">Avontuur 5</a>
                </div>
            </li>
        </ul>
        <div id="logo">
            <a href="index.html"><img src="images/logo.jpg" width="60px" height="44px"></a>
        </div>
    </nav>
    <main>
        <form name="verbinding" action="mailto: nepaccount@gmail.wow"></form></form> method="post">
            <fieldset>
                <input required type="text" id="naam" name="naam" placeholder="Volledige Naam..."><br>
                <input required type="number" id="tel" name="tel" placeholder="Telefoonnummer..."><br>
                <input required type="email" id="email" name="email" placeholder="Email..."><br>
                <input required type="text" id="adres" name="adres" placeholder="Adres..."><br><br>
                <label for="reisen">Welke reis(en) lijkt u het leukste?</label><br>
                Reis 1:
                <input type="checkbox" name="reis1" id="check" value="1"><br>
                Reis 2:
                <input type="checkbox" name="reis2" id="check" value="2"><br>
                Reis 3:
                <input type="checkbox" name="reis3" id="check" value="3"><br>
                Reis 4:
                <input type="checkbox" name="reis4" id="check" value="4"><br>
                Reis 5:
                <input type="checkbox" name="reis5" id="check" value="4"><br>
                <input type="submit" value="Verbinden">
            </fieldset>
        </form>
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
