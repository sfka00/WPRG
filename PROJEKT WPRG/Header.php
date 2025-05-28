<header class="headers headercaly">
    <a href="PROJEKT.php"><div class="logo">
            <img src="/images/sklogofinal.jpg" alt="Logo">
        </div></a>
    <nav class="header1"><a href="Świat.php">Świat</a></nav>
    <nav class="header2"><a href="Polityka.php">Polityka</a></nav>
    <nav class="header3"><a href="Sport.php">Sport</a></nav>
    <nav class="header4"><a href="Ludzie.php">Ludzie</a></nav>
    <nav class="header5"><a href="Kuchnia.php">Kuchnia</a></nav>
    <nav class="header6"><a href="AddArticles.php">Dodaj Artykuły</a></nav>
    <nav class="header7"><a href="EditArticles.php">Edytuj Artykuły</a></nav>
    <nav class="header8"><a href="Kontakt.php">Kontakt</a></nav>
    <?php
    if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] === true){
        echo '<nav>Zalogowany jako: <strong>' . $_SESSION['login'] . '</strong></nav>
        <nav><form action="Logout.php" method="POST">
                <button type="submit">Wyloguj</button>
            </form>
            </nav>';

    }
    else {
        echo '<nav class="Login"><a href="Login.php">Zaloguj się</a></nav>
        <nav class="Login"><a href="Rejestracja.php">Zarejestruj się</a></nav>';
    }
    ?>
</header>