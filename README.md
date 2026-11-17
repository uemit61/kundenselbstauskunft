# Kundenselbstauskunft

Webanwendung, mit der Kunden die Angaben für die Einrichtung eines ERP-Systems selbst erfassen:
Firmen- und Kontaktdaten, Server-Umgebung, Mandanten, ERP-Einstellungen und die Daten, die aus
dem Altsystem übernommen werden sollen. Geschrieben in nativem PHP, bewusst ohne Framework.

## Warum ohne Framework

Routing, MVC-Trennung, Datenzugriff und Sitzungsverwaltung sind selbst gebaut, um zu verstehen,
was Frameworks wie Laravel oder Symfony im Hintergrund erledigen. Der Preis dafür steht weiter
unten unter „Bekannte Einschränkungen“.

## Funktionen

1. **Einladung per Einmal-Link:** Der Kunde erhält einen Link mit Token und setzt damit sein
   Passwort. Das Token ist danach verbraucht.
2. **Anmeldung** mit E-Mail-Adresse und Passwort.
3. **Mehrstufiges Formular** mit fünf Schritten:
   Kontaktdaten → Host-Einstellungen → Mandanten → ERP-Einstellungen → Import.
   Mandanten lassen sich beliebig hinzufügen und entfernen.
4. **Automatische Zwischenspeicherung:** Alle drei Sekunden werden die Eingaben als JSON
   zwischengespeichert. Nicht gespeicherte Eingaben sind nach dem nächsten Anmelden wieder da.
5. **Speichern und Laden** je Formularschritt. Weichen die Eingaben vom gespeicherten Stand ab,
   wird das angezeigt, und der gespeicherte Stand lässt sich zurückholen.
6. **Eingabeprüfung im Browser:** Unzulässige Zeichen werden beim Tippen und Einfügen abgewiesen,
   Eingaben vor dem Senden mit DOMPurify bereinigt.

## Technik

| Bereich | Einsatz |
|---|---|
| Backend | PHP 8.4, nativ |
| Datenbank | MariaDB 10.11 / MySQL, 41 Tabellen |
| Datenzugriff | PDO mit echten Prepared Statements (`ATTR_EMULATE_PREPARES => false`) |
| Passwörter | Argon2id mit Pepper |
| Frontend | jQuery 3.6, Bootstrap 5.3, DOMPurify |
| Webserver | Apache mit `mod_rewrite` (XAMPP) |

## Architektur

- **Front-Controller:** Alle Anfragen laufen über [`index.php`](index.php). Die `.htaccess` leitet
  dorthin um, `index.php` wählt anhand der angeforderten Seite Model, View und Controller.
- **MVC:** [`model/`](model), [`view/`](view), [`controller/`](controller).
- **Formulare aus Konfiguration:** Jedes Formular ist als PHP-Array beschrieben
  ([`view/forms/`](view/forms)) und wird von einem gemeinsamen Renderer
  ([`view/pages/form_page.php`](view/pages/form_page.php)) in HTML umgesetzt. Ein neues Feld ist
  ein neuer Array-Eintrag, kein neues HTML.
- **Eine Klasse pro Tabelle:** Die Entity-Klassen erben von
  [`DbModel`](model/customer/kundenselbstauskunftsformular/dbModel.php) (generisches Erstellen,
  Speichern, Laden, `JsonSerializable`). Die SQL-Anweisungen dafür baut
  [`db_transactions.php`](model/customer/kundenselbstauskunftsformular/db_transactions.php)
  aus dem Daten-Array zusammen. Geladen wird mit `PDO::FETCH_CLASS` direkt in die Objekte.
- **Klassen werden gefunden, nicht aufgezählt:** Die Model-Klassen eines Formularschritts werden
  per `glob()` aus dem jeweiligen Ordner geladen.

```
index.php, indexUtils.php    Front-Controller und Hilfsfunktionen
connection.php               Datenbankverbindung (Zugangsdaten aus .env)
controller/                  PHP-Controller
model/                       Models und Entity-Klassen
view/forms/                  Formulare als Konfigurations-Arrays
view/pages/                  Seiten und Formular-Renderer
view/js/                     JavaScript (Navigation, Zwischenspeicher, Eingabeprüfung)
Config_Self_Disclosure.sql   Datenbankschema
Config_Self_Disclosure_Testdaten.sql   Testkunde, Einladungstoken, Platzhalter-Logo
```

## Lokal starten

Voraussetzung: [XAMPP](https://www.apachefriends.org/) mit PHP 8.4 und MariaDB unter Windows.

1. Das Repository **genau nach** `C:\xampp\htdocs\kundenselbstauskunft` klonen
   (warum, steht unter „Bekannte Einschränkungen“).
2. Apache und MySQL im XAMPP Control Panel starten.
3. Schema und Testdaten importieren, z. B. in phpMyAdmin oder per Konsole im Projektordner:
   ```
   C:\xampp\mysql\bin\mysql.exe -u root -e "source Config_Self_Disclosure.sql"
   C:\xampp\mysql\bin\mysql.exe -u root -e "source Config_Self_Disclosure_Testdaten.sql"
   ```
   **Achtung:** `Config_Self_Disclosure.sql` löscht eine vorhandene Datenbank
   `config_self_disclosure` und legt sie neu an.
4. `.env.example` nach `.env` kopieren und `PASSWORD_PEPPER` mit einem Zufallswert füllen:
   ```
   C:\xampp\php\php.exe -r "echo bin2hex(random_bytes(32));"
   ```
5. Einladungslink öffnen:
   `http://localhost/kundenselbstauskunft/index.php/demo-einladung`
   Dort ein Passwort setzen: mindestens 8 Zeichen, ein Großbuchstabe und ein Sonderzeichen
   (`! $ % ^ & * ( ) , . ? : { } |`).
6. Mit `test@example.com` und dem eben gesetzten Passwort anmelden.

Für einen weiteren Durchlauf des Einladungswegs in der Tabelle `customer_token` den Wert
`customer_token_used` wieder auf `0` setzen.

## Sicherheit

**Umgesetzt**

- Prepared Statements: Alle Werte werden als Parameter gebunden, nie in den SQL-Text eingesetzt
- Passwörter mit Argon2id und Pepper; der Pepper steht nur in der `.env`, nie im Repository
- Zugangsdaten zur Datenbank ebenfalls nur in der `.env`
- In der Session steht nach dem Login nur die Kunden-ID, nicht das Kunden-Objekt mit Passwort-Hash
- Neue Session-ID beim Login (Schutz vor Session Fixation)
- Das Einmal-Token wird vor dem Speichern des Passworts geprüft; danach ist es verbraucht
- Im Anmelde- und Passwortweg werden Fehler mit `error_log()` protokolliert statt im Browser
  ausgegeben

Mehrere dieser Punkte sind Ergebnis eines Sicherheits-Reviews im November 2026, behoben in
`65079ba`, `0c4e3a8`, `ad2cb7e` und `c89065d`.

**Noch offen**

- Spalten- und Tabellennamen im generischen CRUD stammen aus den Feldnamen der Formulardaten
  und werden noch nicht gegen die erlaubten Namen geprüft
- CSRF-Schutz für die Formulare
- Begrenzung fehlgeschlagener Anmeldeversuche
- Ablaufdatum und strengere Formatprüfung für Einladungstokens
- Passwortregeln zusätzlich auf dem Server prüfen (bisher nur im Browser)
- Einheitliche Fehlerprotokollierung in allen Models
- Session-Cookie mit `HttpOnly` und `SameSite`

## Bekannte Einschränkungen

- **Absolute Pfade:** Viele `require`-Anweisungen verwenden feste Pfade unter
  `C:/xampp/htdocs/…`. Das Projekt läuft deshalb nur unter genau diesem Pfad und nur unter
  Windows. Die Umstellung auf `__DIR__` ist geplant.
- **Kein Verwaltungsbereich:** Kunden und Einladungstokens werden per SQL angelegt.
  Für ein Dashboard gibt es bisher nur einen Entwurf
  ([`view/forms/dashboard_form.html`](view/forms/dashboard_form.html)).
- **Formulare ERP und Import:** Beide fragen sehr viele Einzelfelder ab und sollen deutlich
  gekürzt werden.
- **Fehleranzeige:** Bei `display_errors=On` (XAMPP-Standard) können bei einem neuen Kunden
  PHP-Warnungen erscheinen, solange ein Formularschritt noch nie gespeichert wurde.
- **Keine automatisierten Tests.**

## Werkzeuge

Das Sicherheits-Review und einzelne Aufräumarbeiten (Testdaten, `.env`-Vorlage, Entfernen von
Debug-Ausgaben) entstanden mit [Claude Code](https://claude.com/claude-code). Die
Sicherheitskorrekturen selbst sind von mir umgesetzt. Commits, an denen Claude Code beteiligt
war, tragen eine `Co-Authored-By`-Zeile.

## Lizenz

Alle Rechte vorbehalten. Der Quellcode ist zum Lesen zu Informations- und Bewerbungszwecken
öffentlich einsehbar, jede weitere Nutzung bedarf der Zustimmung des Autors. Details in
[`LICENSE`](LICENSE).
