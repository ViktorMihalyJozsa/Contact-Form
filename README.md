Contact Form

    A script.js fájlban a fetch API segítségével küldjük el az űrlap adatait
    a contact.php fájlnak. A fetch metódus egy Promise-t ad vissza, amely
    a választ tartalmazza a szerverről. A then metódusok segítségével
    kezeljük a választ, az alert metódussal pedig megjelenítjük a felhasználónak.
    Ha hiba történik, akkor a catch metódusban kezeljük azt.

    A fetch metódusnak két paramétere van: az első a szerver címe, a második
    a fetch beállításai. A POST metódus a szervernek azt jelzi, hogy az adatok
    a kérés testében találhatók. A body tulajdonságban adjuk meg az űrlap
    adatait, amelyet a FormData konstruktorral hozunk létre.

    A FormData konstruktor egy űrlap elemeit tartalmazó objektumot hoz létre.
    A konstruktor paramétere az űrlap elemeit tartalmazó form elem. Az űrlap
    elemeit a name attribútum alapján érjük el, a get metódussal pedig lekérjük
    azok értékét.

    Az űrlap elküldésekor a submit eseményt meg kell akadályozni, hogy ne
    történjen oldalfrissítés. Ezt a preventDefault metódussal tehetjük meg.
    Az eseménykezelő a form elemen van, és a submit eseményt figyeli.

    Az alert metódus a böngészőben megjelenő üzenetablakot hozza létre.
    A then metódusban a response.text() metódussal a válasz szöveges tartalmát
    kapjuk meg. A catch metódusban pedig a hibát kezeljük le.

    A fetch metódus a modern böngészőkben elérhető. Ha régebbi böngészőket
    is támogatni kell, akkor a fetch API-t polyfill-kel kell kiegészíteni.

    Baráti üdvözlettel: VMJ
