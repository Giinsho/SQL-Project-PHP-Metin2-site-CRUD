<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale-1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Singularity</title>
    <link rel="stylesheet" href="index.css">
</head>
<div id="home" class="flex-center flex-column">
  <h1>Singularity MMO</h1>
</div>
<body>
<table>
    <tr>
        <th><h2>Spis Przedmiotów</h2></th>
    </tr>
  <tr class="headTr">
    <th>ID</th>
    <th>Nazwa przedmiotu</th>
    <th>Typ przedmiotu</th>
    <th>Rozmiar w EQ</th>
    <th>Wartość sprzedaży</th>
    <th>Cena zakupu</th>
    <th>Wartość ataku</th>
    <th>Wartość Mag. Ataku</th>
    <th>Szybkość ataku</th>
    <th>Średnie do ataku</th>
    <th>Obrażenia do umiejętności</th>
    <th>Slot kd 1</th>
    <th>Slot kd 2</th>
    <th>Slot kd 3</th>
    <th>Slot kd 4</th>
    <th>Max poziom ulepszenia</th>
    <th>Typ dodań</th>
    <th>Specjalny numer</th>
  </tr>
  <?php include('charac_of_items.php');?>
</table>

<table>
    <tr>
        <th><h2>Atrybuty przedmiotów</h2></th>
    </tr>
    <tr class="headTr">
        <th>Typ bonusu</th>
        <th>Level 1 bonusu</th>
        <th>Level 2 bonusu</th>
        <th>Level 3 bonusu</th>
        <th>Level 4 bonusu</th>
        <th>Specjalny numer broni</th>
        <th>Specjalny numer zbroi</th>
        <th>Specjalny numer naszyjnika</th>
        <th>Specjalny numer butów</th>
        <th>Specjalny numer hełmu</th>
        <th>Specjalny numer tarczy</th>
        <th>Specjalny numer kolczyków</th>
    </tr>
    <?php include('item_attrybuts.php');?>
</table>

<table>
    <tr>
        <th><h2>Przedmioty</h2></th>
    </tr>
    <tr class="headTr">
        <th>ID przedmiotu</th>
        <th>ID właściciela</th>
        <th>Numer okna</th>
        <th>Pozycja w EQ</th>
        <th>Ilość</th>
        <th>Specjalny numer</th>
        <th>Slot kd 1</th>
        <th>Slot kd 2</th>
        <th>Slot kd 3</th>
        <th>Slot kd 4</th>
        <th>Typ bonusu nr 1</th>
        <th>Wartość bonusu nr 1</th>
        <th>Typ bonusu nr 2</th>
        <th>Wartość bonusu nr 2</th>
        <th>Typ bonusu nr 3</th>
        <th>Wartość bonusu nr 3</th>
        <th>Typ bonusu nr 4</th>
        <th>Wartość bonusu nr 4</th>
        <th>Typ bonusu nr 5</th>
        <th>Wartość bonusu nr 5</th>
    </tr>
    <?php include('item.php');?>
</table>
<table>
    <tr class="headTr">
        <th>Typ ulepszenia +1</th>
        <th>Wartość ulepszenia +1</th>
        <th>Typ ulepszenia +2</th>
        <th>Wartość ulepszenia +2</th>
        <th>Typ ulepszenia +3</th>
        <th>Wartość ulepszenia +3</th>
        <th>Typ ulepszenia +4</th>
        <th>Wartość ulepszenia +4</th>
        <th>Typ ulepszenia +5</th>
        <th>Wartość ulepszenia +5</th>
        <th>Typ ulepszenia +6</th>
        <th>Wartość ulepszenia +6</th>
        <th>Typ ulepszenia +7</th>
        <th>Wartość ulepszenia +7</th>
        <th>Typ ulepszenia +8</th>
        <th>Wartość ulepszenia +8</th>
        <th>Typ ulepszenia +9</th>
        <th>Wartość ulepszenia +9</th>
    </tr>
    <?php include('item2.php');?>
</table>


<table>
    <tr>
        <th><h2>Mapy</h2></th>
    </tr>
    <tr class="headTr">
        <th>ID mapy</th>
        <th>Nazwa mapy</th>
        <th>Szerokość mapy [X]</th>
        <th>Długość mapy [Y]</th>
        <th>Wysokość mapy [Z]</th>
    </tr>
    <?php include('map.php');?>
</table>

<table>
    <tr>
        <th><h2>Potwory</h2></th>
    </tr>
    <tr class="headTr">
        <th>ID potwora</th>
        <th>Nazwa potwora</th>
        <th>Poziom trudności</th>
        <th>Typ potwora</th>
        <th>Lvl</th>
        <th>Wielkość</th>
        <th>Rasa</th>
        <th>Ilość HP</th>
        <th>Witalność</th>
        <th>Inteligencja</th>
        <th>Siła</th>
        <th>Zręczność</th>
        <th>Obrona</th>
        <th>Punkty expa</th>
        <th>Min. drop golda</th>
        <th>Max. drop golda</th>
        <th>Szybkość ataku</th>
        <th>Szybkość poruszania się</th>
        <th>Min. DMG</th>
        <th>Max. DMG</th>
    </tr>
    <?php include('mobs.php');?>
</table>

<table>
    <tr class="headTr">
        <th>Poziom spowolnienia</th>
        <th>Poziom trucia</th>
        <th>Poziom podpalenia</th>
        <th>Poziom porażenia</th>
        <th>Poziom penetracji</th>
        <th>Poziom kryt. uderzenia</th>
    </tr>
    <?php include('mobs2.php');?>
</table>

<table>
    <tr class="headTr">
        <th>Odporność na miecze</th>
        <th>Odporność na łuki</th>
        <th>Odporność na sztylety</th>
        <th>Odporność na broń dwuręczną</th>
        <th>Odporność na dzwony</th>
        <th>Odporność na wachlarze</th>

        <th>Odporność na ogień</th>
        <th>Odporność na zatrucie</th>
        <th>Odporność na wiatr</th>
        <th>Odporność na magie</th>
        <th>Odporność na porażenie</th>
    </tr>
    <?php include('mobs3.php');?>
</table>

<table>
    <tr class="headTr">
        <th>Czas odrodzenia w sek.</th>
        <th>ID mapy, na której się znajduje</th>
        <th>Miejsce występowania [X]</th>
        <th>Miejsce występowania [Y]</th>
    </tr>
    <?php include('mobs4.php');?>
</table>


<table>
    <tr>
        <th><h2>Obiekty na mapach</h2></th>
    </tr>
    <tr class="headTr">
        <th>ID obiektu</th>
        <th>ID mapy</th>
        <th>Specjalny numer</th>
        <th>Lokalizacja X</th>
        <th>Lokalizacja Y</th>
        <th>Obrót względem osi X</th>
        <th>Obrót względem osi Y</th>
        <th>Obrót względem osi Z</th>
        <th>Życie</th>
    </tr>
    <?php include('object.php');?>
</table>

<table>
    <tr>
        <th><h2>Gracze</h2></th>
    </tr>
    <tr class="headTr">
        <th>ID Gracza</th>
        <th>Prefiks</th>
        <th>ID Konta</th>
        <th>Nickname</th>
        <th>Profesja</th>
        <th>Lokalizacja X</th>
        <th>Lokalizacja Y</th>
        <th>Lokalizacja Z</th>
        <th>ID Mapy</th>
        <th>Lokalizacja wyjścia X</th>
        <th>Lokalizacja wyjścia Y</th>
        <th>ID Mapy ostatniego wylogowania</th>
    </tr>
    <?php include('player.php');?>
</table>

<table>
    <tr class="headTr">
        <th>Ilość HP</th>
        <th>Ilość Many</th>
        <th>Stamina</th>
        <th>Czas Gry w min.</th>
        <th>Level</th>
        <th>Skok poziomów</th>
        <th>Witalność</th>
        <th>Inteligencja</th>
        <th>Siła</th>
        <th>Zręczność</th>
        <th>Punkty expa</th>
        <th>Ilość złota</th>
        <th>Punkty statusu</th>
        <th>Punkty skili</th>
    </tr>
    <?php include('player2.php');?>
</table>

<table>
    <tr class="headTr">
        <th>IP Gracza</th>
        <th>Ostatnie logowanie</th>
        <th>Ilość resetu punktów statusu</th>
        <th>Level Konia</th>
        <th>Ilość HP Konia</th>
        <th>Stamina Konia</th>
        <th>Ilość punktów statusu konia</th>
        <th>Ilość śmierci konia</th>
    </tr>
    <?php include('player3.php');?>
</table>
</body>

<table>
    <tr>
        <th><h2 style="width: 150px; text-align: center; margin: auto;">Skile Graczy</h2></th>
    </tr>
    <tr class="headTr">
        <th>ID Gracza</th>
        <th>ID Skila</th>
    </tr>
    <?php include('player_skills.php');?>
</table>

<table>
    <tr>
        <th><h2>Atrybuty skili</h2></th>
    </tr>
    <tr class="headTr">
        <th>ID Skila</th>
        <th>Klasa postaci (Profesja)</th>
        <th>Nazwa</th>
        <th>Typ</th>
        <th>Skok poziomu</th>
        <th>Max level</th>
        <th>Zasięg celu</th>
        <th>Zasięg rozprysku</th>
        <th>DMG rozprysku wokół</th>
        <th>Max DMG</th>
        <th>Min DMG</th>
        <th>Czas trwania [s]</th>
        <th>Czas odnowienia [s]</th>
        <th>Szybkość użycia [s]</th>
        <th>Koszt Many</th>
    </tr>
    <?php include('skills_attr.php');?>
</table>

<table>
    <tr>
        <th><h2>Gracze na poszczególnych mapach</h2></th>
    </tr>
    <tr class="headTr">
        <th>ID Konta</th>
        <th>Nickname</th>
        <th>Lokalizacja X</th>
        <th>Lokalizacja Y</th>
        <th>Lokalizacja Z</th>
        <th>IP Gracza</th>

    </tr>
    <?php include('map_player.php');?>
</table>

<tr>
    <a href="obsluga.php" class="button1 bouncy" style="animation-delay:0.12s">Administracja</a>

</tr>


</html>

