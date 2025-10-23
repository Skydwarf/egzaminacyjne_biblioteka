<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTEKA SZKOLNA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h2>STRONA BIBLIOTEKI SZKOLNEJ WIEDZAMIN</h2>
    </header>
    <nav>
        <h3>Nasze dzisiejsze propozycje</h3>
        <table>
            <tr>
                <th>Autor</th>
                <th>Tytuł</th>
                <th>Katalog</th>
            </tr>
            <?php
                $connection = mysqli_connect("localhost", "root", "", "biblioteka");
                $query = "SELECT autor, tytul, kod FROM ksiazki ORDER BY rand() LIMIT 5;";
                $result = mysqli_query($connection, $query);
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr>
                        <td>".$row[0]."</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                    </tr>";
                }
                mysqli_close($connection)
            ?>
        </table>
    </nav>
    <main>
        <article>
            <img src="./grafiki/ksiazka1.jpeg" alt="okładka książki"> 
            <p>Hans Christian Andersen - Ropucha <br> Według różnych podań najpaskudniejsza ropucha nosi w głowie piękny, cenny klejnot.</p>
        </article>
        <aside>
            <img src="./grafiki/ksiazka2.jpeg" alt="okładka książki"> 
            <p>Maria Konopnicka - Przygoda z lalką <br> Panna Stefcia i Maryla nie są to zbyt grzeczne damy, nawet nie słuchają mamy...</p>
        </aside>
        <section>
            <img src="./grafiki/ksiazka3.jpeg" alt="okładka książki"> 
            <p>Ignacy Krasicki - Przyjaciel <br> Ratuj mnie, przyjacielu, w ostatniej potrzebie: Kocham piękną Irenę. Rodzice i ona...</p>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał:</p>
    </footer>
</body>
</html>