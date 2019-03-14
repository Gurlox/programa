<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programa - zadania</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cv.css">
</head>
<body>
    <main>
        <div class="row content">
            <div id="menu" class="col-2">

            </div>
            <div id="form" class="col-4">
                <form>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Imię</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="surname" class="col-sm-2 col-form-label">Nazwisko</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="surname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="age" class="col-sm-2 col-form-label">Wiek</label>
                        <div class="col-10">
                            <input type="number" class="form-control" id="age">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sex" class="col-sm-2 col-form-label">Płeć</label>
                        <div class="col-10">
                            <select id="sex" class="form-control">
                                <option selected></option>
                                <option value="female">Kobieta</option>
                                <option value="male">Mężczyzna</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="personalDataConsent">
                        <label class="form-check-label" for="personalDataConsent">
                            Wyrażam zgodę na przetwarzanie danych osobowych
                        </label>
                    </div>
                </form>
            </div>
            <div id="cv" class="col-6">
                <div class="row cv-header">
                    <div class="col-9 contact-info">
                        <div class="row name">
                            <h1>Jan Czerwiński</h1>
                        </div>
                        <div class="row contact-details">
                            <div class="col-3">
                                &phone; 660 929 947
                            </div>
                            <div class="col-9">
                                    &#9993; jankacper.czerwinski@gmail.com
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <img src="/assets/img/picture.png" alt="photo">
                    </div>
                </div>
                <div class="row cv-content">
                    <h5>Doświadczenie</h5>
                    <div class="col-md-4">
                        <strong>grudzień 2017 - obecnie</strong>
                    </div>
                    <div class="col-8">
                        <h4>Programista PHP</h4>
                        <span class="subtitle">Forum Media Polska Sp. z.o.o., Poznań</span>
                        <ul class="no-padding">
                            <li>Zarządzanie bazami danych oraz serwerami</li>
                            <li>Tworzenie, utrzymywanie oraz zarządzanie aplikacjami na podstawie specyfikacji</li>
                            <li>Tworzenie systemów CMS i integracji pomiędzy systemami</li>
                            <li>Implementacja strony frontendowej na podstawie projektu</li>
                        </ul>
                    </div>
                </div>
                <div class="row cv-content">
                    <h5>Wykształcenie</h5>
                    <div class="col-4">
                        <strong>2012 - 2016</strong>
                    </div>
                    <div class="col-8">
                        <h4>Technikum Elektroniczne</h4>
                        <span class="subtitle">
                            Zespół szkół nr. 9 w Koszalinie <br>
                            Tytuł technik informatyk
                        </span>
                    </div>
                    <span class="spacer"></span>
                    <div class="col-4">
                        <strong>2016 - obecnie</strong>
                    </div>
                    <div class="col-8">
                        <h4>Informatyka na Wydziale Matematyki i Informatyki</h4>
                        <span class="subtitle">Uniwersytet im. Adama Mickiewicza w Poznaniu</span>
                    </div>
                </div>
                <div class="row cv-content">
                    <h5>Umiejętności</h5>
                    <div class="col-6">
                        <ul>
                            <li>PHP 7</li>
                            <li>Symfony 1/2/3/4</li>
                            <li>Javascript ES6</li>
                            <li>JQuery, Ajax</li>
                            <li>Git</li>
                            <li>CSS, Bootstrap, Sass</li>
                            <li>HTML5</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Docker</li>
                            <li>Windows, Linux</li>
                            <li>Vue.js</li>
                            <li>REST</li>
                            <li>Node.js</li>
                            <li>Apache2, Nginx</li>
                            <li>Adobe Photoshop</li>
                        </ul>
                    </div>
                </div>
                <div class="row cv-content">
                    <h5>Języki</h5>
                    <span class="text">Angielski w stopniu zaawansowanym</span>
                </div>
                <div class="row cv-content">
                    <h5>Umiejętności miękkie</h5>
                    <ul>
                        <li>Umiejętność pracy zespołowe</li>
                        <li>Kreatywność</li>
                        <li>Asertywność</li>
                        <li>Empatia</li>
                        <li>Umiejętność budowania pozytywnych relacji interpersonalnych</li>
                        <li>Bardzo dobra organizacja pracy własnej</li>
                        <li>Umiejętność rozwiązywania problemów</li>
                    </ul>
                </div>
                <div class="row cv-content">
                    <h5>Zainteresowania</h5>
                    <ul>
                        <li>Gitara</li>
                        <li>Programowanie</li>
                        <li>Esport</li>
                    </ul>
                </div>
                <div class="row cv-content">
                    <span class="consent">
                        Wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w mojej ofercie pracy dla
                        potrzeb niezbędnych do realizacji procesu rekrutacji zgodnie z ustawą z dnia 29 sierpnia 1997 r.
                        o ochronie danych osobowych.
                    </span>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
