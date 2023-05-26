<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function show()
    {
        $pressematerial = array(
            [
                "headline" => "DELIFE Logo in Schwarz",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" =>  "https://www.delife.eu/data/presse/Logo_Schwarz.zip"
            ],
            [
                "headline" => "DELIFE Logo in Weiß",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" => "https://www.delife.eu/data/presse/Logo_Wei%C3%9F.zip"
            ],
            [
                "headline" => "Bilder: Kompletteinrichtung von DELIFE",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" => "https://www.delife.eu/data/presse/DELIFE_Kompletteinrichtung_Bilder.zip"
            ],
            [
                "headline" => "Bilder: Live-Edge Do It Yourself",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" => "https://www.delife.eu/data/presse/DELIFE_LiveEdge_DIY_Bilder.zip"
            ],
            [
                "headline" => "Bilder: Metropolitan",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" => "https://www.delife.eu/data/presse/Metropolitan_Highres.zip"
            ],
            [
                "headline" => "Bilder: Objekteinrichtung mit DELIFE",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" => "https://www.delife.eu/data/presse/DELIFE_Objekteinrichtung_Bilder.zip"
            ],
            [
                "headline" => "Bilder: Wyatt - Die Handschrift der Natur",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" => "https://www.delife.eu/data/presse/DELIFE_Wyatt_Bilder.zip"
            ],
            [
                "headline" => "Bilder: Live-Edge auf Glasgestell",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" => "https://www.delife.eu/data/presse/DELIFE_LE_Glas_Bilder.zip"
            ],
            [
                "headline" => "Bilder: Earnest - ein Sitzklassiker zum Spitzenpreis",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" => "https://www.delife.eu/data/presse/Earnest.zip"
            ],
            [
                "headline" => "Bilder: Amadora - So schön kann Upcycling sein",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" => "https://www.delife.eu/data/presse/DELIFE_Amadora_Bilder_HQ.zip"
            ],
            [
                "headline" => "Bilder: Live-Edge - Exklusive Baumkantenmöbel",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" => "https://www.delife.eu/data/presse/DELIFE_Live_Edge_Bilder_HQ.zip"
            ],
            [
                "headline" => "Bilder: Clovis Modulsofas wachsen mit den Ansprüchen",
                "linkText" => "Jetzt direkt als .zip-Download",
                "link" => "https://www.delife.eu/data/presse/DELIFE_Clovis_Bilder_HQ.zip"
            ],
        );


        $redaktionelle = array(
            [
                "headline" => "DELIFE x TVO aktuell - Interview mit Max Kirchner",
                "link" =>  "https://youtu.be/Oh7GQHXYsJY",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "Delife x Home von TV Oberfranken - Langlebige und sichere Massivholzmöbel",
                "link" => "https://www.youtube.com/watch?v=fwf559srGc0",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "DELIFE x TVO aktuell - Das DELIFE SUMMER Event",
                "link" => "https://www.youtube.com/watch?v=95ntPcU75dU",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "DELIFE x TVO aktuell: Das große DELIFE SUMMER EVENT",
                "link" => "https://www.youtube.com/watch?v=EYRmnNqVCsw",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "Delife x Home von TV Oberfranken - Trends im Garten - Unsere Loungemöbel",
                "link" => "https://www.youtube.com/watch?v=fW7BWwLVtx4&t",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "DELIFE x TVO aktuell Deine Vorteile im 3.000 qm² DELIFE Store in Ebersdorf bei Coburg.",
                "link" =>  "https://www.youtube.com/watch?v=HQmO1s8cbSI",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "DELIFE x home by TV Oberfranken - Homeoffice: Tipps für das perfekte Büro",
                "link" =>  "https://youtu.be/gTD4-yzYvYY",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "DELIFE x home by TV Oberfranken - DELIFE TRENDS - Einrichten mit Moodboards",
                "link" =>  "https://youtu.be/q56k3KVxKuA",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "DELIFE x home by TV Oberfranken - Stylische Möbel auch mit Kind? Das geht!",
                "link" =>  "https://youtu.be/vEiFb8pnr_M",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "DELIFE x home by TV Oberfranken - DELIFE Business für Großkunden, Hotellerie uvm.",
                "link" =>  "https://youtu.be/4m5On6SgyKU",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "DELIFE x home by TV Oberfranken - Nachhaltige Möbel",
                "link" =>  "https://youtu.be/SafvVuC4HoE",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "DELIFE x home by TV Oberfranken - E-Commerce Spezialist mit STORE in Ebersdorf bei Coburg - Wir zeigen Euch Warum",
                "link" =>  "https://youtu.be/Ve3UEEM0flI",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "BEST OF - Jahresrückblick 2021 DELIFE x TVO home",
                "link" =>  "https://youtu.be/zo1_KIvXNIk",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "DELIFE x Home von TV Oberfranken - Möbel shoppen im Lockdown - Unser Onlineshop",
                "link" =>  "https://youtu.be/ARJvLXgJTnI",
                "description" => "Zur Reportage"
            ],
            [
                "headline" => "DELIFE x Home von TV Oberfranken - So dekoriert Ihr Euer Königreich",
                "link" =>  "https://youtu.be/JDvnXpnJUTw",
                "description" => "Zum Dekorieren"
            ],
            [
                "headline" => "DELIFE x Home von TV Oberfranken - Die neuen Sofatrends 2021",
                "link" =>  "https://youtu.be/PbjiKxYtjnY",
                "description" => "Zu den Sofatrends"
            ],
            [
                "headline" => "Eröffnung des Möbelpalastes im Sommer 2020",
                "link" =>  "https://youtu.be/OyMfdPAYg44",
                "description" => "Zum Eröffnungsvideo"
            ],
            [
                "headline" => "DELIFE x Home von TV Oberfranken: Luxus für Jedermann!",
                "link" =>  "https://youtu.be/YbUf0dO748E",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "DELIFE x Home von TV Oberfranken: Einrichtungstipp Naturmaterialien",
                "link" =>  "https://youtu.be/rQm5ik-2mcs",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "Ein Rundgang im DELIFE Store mit TV1 Franken",
                "link" =>  "https://youtu.be/RxKdCe4CmxQ",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "Vom Baum bis zum Palettenversand von Onlinemöbeln - Die Reportage mit DELIFE von TV1 Franken",
                "link" =>  "https://youtu.be/_OAABo2ndPc",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "DELIFE x Home by TV Oberfranken: Einrichtungstipp Centerpieces",
                "link" =>  "https://youtu.be/En0RjRXTmQ8",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "DELIFE x Home by TV Oberfranken: Einrichtungstipp Stauraum",
                "link" =>  "https://youtu.be/qemt_gZ8kCk",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "DELIFE x Home by TV Oberfranken: Einrichtungstipp Gartenmöbel",
                "link" =>  "https://youtu.be/E0qaUsdY1BY",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "Ein Spaziergang durch den DELFIE Store mit TV1-Franken",
                "link" =>  "https://vimeo.com/448500495",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "Interview mit schlafzimmer.de",
                "link" =>  "https://www.schlafzimmer.de/delife-interview/",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "Intro zu Einrichtungstipps von Home von TV Oberfranken",
                "link" =>  "https://youtu.be/VYzB_6bXJDo",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "TV Oberfranken zur DELIFE Store Eröffnung",
                "link" =>  "https://youtu.be/UDNrukPCk0o",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "TV Oberfranken zur Create your kingdom Philosophie",
                "link" =>  "https://youtu.be/HL0Bj0QapDY",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "Interview mit NECTV",
                "link" =>  "https://www.region-coburg.tv/create-your-kingdom",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "Interview mit infranken.de",
                "link" =>  "https://www.infranken.de/lk/gem/schaufenster-fuer-online-moebel-art-5020937",
                "description" => "Zum Interview"
            ],
            [
                "headline" => "Interview mit Radio 1",
                "linkAudio" => "https://cdn02.plentymarkets.com/46gelrxs6k5l/frontend/layout/marketing/presse/Delife_Mitschnitt_1.7..mp3"
            ],
            [
                "headline" => "Interview mit Expertentesten.de",
                "link" =>  "https://www.expertentesten.de/news/moebelfachgeschaeft-delife/",
                "description" => "Zum Interview"
            ]
        );

        $pressemitteilungen = array(
            [
                "date" => "10.11.2022",
                "headline" => "DELIFE erhält den SHOP USABILITY AWARD 2022 in der Kategorie Möbel - Zum 2. Mal kann das Unternehmen die begehrte Auszeichnung für sich verbuchen",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE erhält mit dem SHOP USABLITY AWARD in der Kategorie Möbel eine der angesehensten Auszeichnungen für herausragende User Experience im E-Commerce. Und das bereits zum zweiten Mal.",
                            "quote" => "„Wir sind überglücklich!“, freut sich Max Kirchner, Mitgründer und CEO der DELIFE GmbH, „die Konkurrenz war in diesem Jahr wahnsinnig stark, umso stolzer sind wir natürlich, dass wir den SHOP USABILITY AWARD, nach unserem ersten Sieg 2016, wieder nach Hause holen konnten. Unsere Mitarbeiter arbeiten jeden Tag mit ganzer Leidenschaft an unserem Shop, an den Produkten und am Kundenservice, um noch besser zu werden. Dass das auch von der unabhängigen Jury von E-Commerce Experten und Expertinnen, sowie einer ganzen UX-begeisterten Community gesehen und honoriert wird, ist natürlich phänomenal. So ein toller Preis macht Mut und Lust noch weiter zu kommen und noch mehr zu erreichen.“",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Der SHOP USABILITY AWARD – Garant für Neutralität und Glaubwürdigkeit",
                            "content" => "Sich beim bereits 2008 ins Leben gerufenen SHOP USABILITY AWARD durchzusetzen, ist nicht einfach. Unter hunderten Bewerbern nominieren zunächst die 6.500 Mitglieder der K5 SHOP INSIGHTS Community die 5 besten Shops in jeweils 20 Kategorien. Im Anschluss prüft eine 22-köpfige Jury aus renommierten E-Commerce Fachleuten alle Nominierten auf Herz und Nieren. Dabei fließen neben Design und Usability, auch Kreativität und Storytelling in die Abschlussbewertung. „Ich glaube, man merkt uns einfach an, dass uns unsere Möbelkreationen sehr am Herzen liegen.“, erklärt Max Kirchner den Erfolg von DELIFE, „Wir lieben unsere Produkte und wissen, wie viel Arbeit und Kreativität in jedem einzelnen Möbelstück steckt, weil wir sie selbst entwickelt haben. Wir möchten, dass unsere Kunden unsere Produkte mit unseren Augen sehen und vielleicht ein wenig von dem Stolz und der Leidenschaft nachempfinden können, mit denen wir unsere Möbel betrachten.“"
                        ],
                        [
                            "heading" => "Nach dem SHOP USABILITY AWARD ist vor dem SHOP USABILITY AWARD – Viele Pläne auch für 2023",
                            "content" => "Auch für das nächste Jahr schmiedet das Unternehmen viele Pläne, um weiter gesund zu wachsen und seine Shopseite und die eigenen Möbeldesigns noch besser zu machen. „Wir leben leider in sehr unsicheren Zeiten, das muss man natürlich immer mitbedenken.“, sagt Max Kirchner über zukünftige Pläne und Vorhaben, „aber wir dürfen trotzdem nicht stehenbleiben, sondern müssen gerade jetzt über den Tellerrand schauen, um neue Chancen ergreifen. Der USABILITY SHOP AWARD zeigt uns, dass diese Strategie, die richtige war, ist und bleiben wird.“"
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Weitere Infos zum SHOP USABILITY AWARD 2022 auf",
                            "linkUrl" => "https://www.k5.de/learnfromthebest-k5-blog-kategoriesieger-moebel-wohnen/?_ga=2.198031018.447422892.1668069492-305642326.1650625573"
                        ],
                        [
                            "linkTitle" => "Lernen Sie unseren Shop selbst kennen auf",
                            "linkUrl" => "https://www.delife.eu"
                        ]
                    )
                )
            ],
            [
                "date" => "08.08.2022",
                "headline" => "Ein ganz besonderes Fest -
                Das Möbelunternehmen aus Ebersdorf feiert mit großem Erfolg das DELIFE SUMMER Event ",

                "article" => array(
                    "head" => array(
                        "heading" => "",
                        "quote" => "",
                        "content" => ""
                    ),
                    "body" => array(
                        [
                            "heading" => "Mit über 2.000 Gästen und Kunden feierte das bekannte Möbelunternehmen DELIFE am 6.8. in Ebersdorf bei schönstem Wetter mit dem DELIFE SUMMER Event ein Sommerfest der Extraklasse!",
                            "content" => "Bei strahlendem Sonnenschein und angenehmen Temperaturen lud der bekannte Online Händler zum großen DELIFE SUMMER Event. Über 2.000 Gäste aus ganz Deutschland folgten der Einladung und ließen sich von einer einmaligen Möbelausstellung auf 6.000 qm, kulinarischen Köstlichkeiten, Pool und exklusivem Beachfeeling und den neuesten Möbelkreationen begeistern. Mit einem Rabatt von über 20 % wartete das Unternehmen zusätzlich mit einem einmaligen Angebot auf, das viele Kunden gern und zahlreich annahmen. Ausgelassen, gut gelaunt und stimmungsvoll feierte DELIFE mit Freunden, Kunden und Gästen wie Gustav Schäfer, Drummer der weltberühmten Band Tokio Hotel bis 22 Uhr ein durch und durch gelungenes SUMMER Event. "
                        ],
                        [
                            "heading" => "Der DELIFE SUMMER Event – Ein neues Highlight für die Region",
                            "content" => "„Wir sind immer noch total begeistert!“, freuen sich Max und Nicki Kirchner, Geschäftsführer der DELIFE GmbH, „unsere Kunden haben unsere SUMMER Event Idee super aufgenommen und unsere Arbeit, unsere Möbel und unseren Service mit unheimlich viel Lob bedacht. Es ist einfach unglaublich, wie viele Menschen unser Unternehmen schon richtig ins Herz geschlossen haben und welchen Stellenwert unsere Designs im Leben unserer Kunden haben. Das von Angesicht zu Angesicht einmal zu hören, ist schon wirklich bewegend. Wir haben vor, das DELIFE SUMMER Event ab jetzt alle 2 Jahre zu veranstalten und zu einem festen Bestandteil der Festkultur für die Region zu machen.“ "
                        ],
                        [
                            "heading" => "Der DELIFE STORE – Immer die aktuellsten Möbelkreationen",
                            "content" => "„Es lohnt sich aber nicht nur beim DELIFE SUMMER Event unseren STORE in Ebersdorf zu besuchen.“, ergänzt Max Kirchner, „denn hier finden unsere Kunden immer die aktuellsten Kollektionen, oft schon bevor sie online zu haben sind. Hier kann alles ausprobiert werden und unsere Verkäufer stehen mit Rat und Tat zur Seite. Natürlich liegt unser Hauptgeschäft im Online Bereich, aber wir wollen mit unserem STORE ein Teil der Region sein und den Kunden gerecht werden, die ihre Möbel eben doch lieber vor Ort ansehen und ausprobieren wollen.“"
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Mehr Infos zum DELIFE STORE:",
                            "linkUrl" => "https://www.delife.eu/delife-store/info"
                        ]
                    )
                )
            ],
            [
                "date" => "26.07.2022",
                "headline" => "DELIFE feiert den Sommer -
                Das Möbelunternehmen aus Ebersdorf lädt am 6. August zum großen Summer Event",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Nach dem großen Erfolg der DELIFE STORE Eröffnung im letzten Jahr möchte der bekannte Onlinehändler für einzigartige Massivholz- und Designmöbel auch 2022 seine Kunden, Gäste und Mitarbeiter mit einem außergewöhnlichen Summer Event am 6.8. ab 10 Uhr erfreuen.",
                            "quote" => "„Nach der schweren Coronazeit haben wir es uns doch alle verdient, wieder mehr Zeit miteinander zu verbringen und den Sommer richtig zu genießen“, freuen sich Max und Nicki Kirchner, die Geschäftsführer der DELIFE GmbH, „deshalb wollen wir in diesem Jahr unseren Kunden und Fans beim Summer Event noch viel, viel mehr bieten. Und das ganz ohne Kontaktbeschränkungen.“ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Das große DELIFE SUMMER Event ab 10 Uhr in Ebersdorf",
                            "content" => "Ab 10 Uhr öffnet DELIFE für alle Gäste, selbstverständlich ohne Eintritt, den Store und das weiträumige Unternehmensgelände. Auf einer In- und Outdoorfläche von 6.000 qm präsentiert der Ecommerce Spezialist seine schönsten Möbel, außergewöhnliche Ausstellungsstücke und die neusten Kreationen in einem einzigartigen Beach- und Wellnessstyle mit Pool, exquisiten Cocktails und einer tollen Auswahl großartiger Foodtrucks. Für entspanntes Summerfeeling sorgt ein DJ mit angesagtem Sommersound. Bei einer Auktion können extravagante Möbelstücke ersteigert werden. Alle Besucher können an einem großen Gewinnspiel teilnehmen und auch für die Kleinen ist mit einer Hüpfburg jede Menge Spaß garantiert. "
                        ],
                        [
                            "heading" => "Nur beim DELIFE SUMMER Event 20 % auf alle Möbel und Wohnaccessoires",
                            "content" => "Wer sich schon immer für die Kreationen von DELIFE interessiert hat, kann beim Summer Event gleich noch ein richtiges Schnäppchen machen. Denn nur an diesem Tag bietet DELIFE seinen Besuchern satte 20 % Rabatt auf alle Möbel! Dafür gibt es bis 16 Uhr eine ausgezeichnete und liebevolle Beratung von den sympathischen DELIFE Mitarbeitern. "
                        ],
                        [
                            "heading" => "",
                            "content" => "„Wir möchten vor allem, dass sich unsere Kunden und Gäste beim Summer Event richtig wohlfühlen, uns auch vor Ort besser kennen lernen und einfach einen entspannten Tag mit Familie und Freunden verbringen können“, sagen Max und Nicki Kirchner, „es ist uns wichtig, nicht nur im Onlinebereich, sondern auch hier in der Umgebung präsent und aktiv zu sein. Deshalb ist unser SUMMER EVENT auch bis 22 Uhr geplant. Denn was gibt es Schöneres als mit unseren Gästen einen schönen Tag ausklingen zu lassen und den Sommer so richtig zu feiern.“  "
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "30.06.2022",
                "headline" => "Für mehr Nachhaltigkeit -
                DELIFE Website ist jetzt klimaneutral ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE kompensiert mit Unterstützung seines Partners CO2 Neutrale Website den gesamten CO2 Ausstoß seiner Website und investiert in verifizierte Klimaprojekte, die sowohl Umwelt als auch die soziale Entwicklung in den Blick nehmen.",
                            "quote" => "„Der Klimawandel ist ein Fakt, der unser aller Leben bereits schon jetzt massiv beeinträchtigt“, sagt Maximilian Kirchner, Gründer und Geschäftsführer der DELIFE GmbH, „waren Wirtschaft und Umweltschutz früher eher Gegner, ist es jetzt doch mehr als ersichtlich, dass wir ohne ein funktionierendes Klima auch unseren Wohlstand massiv gefährden. Deshalb beschäftigt auch uns das Thema Nachhaltigkeit sehr und wir sind froh in dem international tätigen Unternehmen CO2 Neutrale Website einen vertrauensvollen Partner gefunden zu haben, der uns auf unserem Weg zu mehr Nachhaltigkeit unterstützt.“ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Eine klimaneutrale Website mit angesehenem Partner",
                            "content" => "In Zusammenarbeit mit CO2 Neutrale Website wird der Stromverbrauch der DELIFE Website (inklusive Server, Website-Besucher und Kabel zwischen Server und Rechenzentrum) berechnet. Der daraus entstehende Betrag wird im Anschluss in sogenannte Gold Standard- Projekte investiert, die von unabhängigen Kontrolleuren der UN verifiziert werden und den hohen Anforderungen an Design, Effizienz, Governance, Berichterstattung und auch sozialer Nachhaltigkeit entsprechen. Mit diesem Prozess kann DELIFE den CO2 Ausstoß seiner Website komplett neutralisieren und seinen CO2- Fußabdruck spürbar verkleinern. "
                        ],
                        [
                            "heading" => "Ein weiterer Schritt zu mehr Nachhaltigkeit",
                            "content" => "„Wir schauen uns unsere Partner, gerade in Sachen Nachhaltigkeit, sehr genau an. Denn von Greenwashing halten wir nichts“, sagt Kirchner, „wir wissen, dass es noch wahnsinnig viel zu tun gibt und wir noch längst nicht da angekommen sind, wo wir hinwollen und müssen. Aber wir verbessern uns jeden Tag mit nachhaltigeren Kollektionen, effizienteren Logistikmechanismen oder einfach nur weniger Papier- und Stromverbrauch im Unternehmen. Eine klimaneutrale Website ist dabei ein wichtiger und richtiger Schritt.“ "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Alle Infos zur DELIFE Zertifizierung durch CO2 Neutrale Website: ",
                            "linkUrl" => "https://www.co2neutralwebsite.de/certificate/7007/de"
                        ],
                        [
                            "linkTitle" => "Mehr zur DELIFE Verantwortung:",
                            "linkUrl" => "https://www.delife.eu/info/nachhaltigkeit"
                        ]
                    )
                )
            ],
            [
                "date" => "15.10.2021",
                "headline" => "BAYERNS BEST 50 –
                DELIFE feiert Preisverleihung mit Gästen, Mitarbeitern und neuem Coburger Stadtbus ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE nimmt die Verleihung des renommierten Bayerns Best 50 Preises zum Anlass mit Gästen, einer offiziellen Busübergabe durch die Coburger Stadtwerke und einer zünftig bayerischen Brotzeit die Leistungen des Unternehmens und besonders die seiner Mitarbeiter vorm eigenen DELIFE STORE zu feiern.",
                            "quote" => "Mit vielen geladenen Gästen wie dem Stellv. Coburger Landrat Christian Gunsenheimer, Ebersdorfs Erster Bürgermeister Bernd Reisenberger oder dem Stellv. Hauptgeschäftsführer der IHK Coburg Björn Cukrowski feierte die DELIFE GmbH vor dem DELIFE STORE und Geschäftssitz in Ebersdorf die Auszeichnung Bayerns Best 50.",
                            "content" => "„Zu Bayerns 50 besten Mittelständlern zu gehören, ist natürlich eine große Würdigung und Ehre der vielen Arbeit der letzten Jahre.“, erklärt Maximilian Kirchner, Gründer und Geschäftsführer der DELIFE GmbH in der gemütlichen Feierstunde vor Presse und Gästen, „Wir danken allen Verantwortlichen aus Politik und Wirtschaft, die unsere Idee und Philosophie über all die Jahre unterstützt haben. Und wir wollen diesen Anlass nutzen, um uns bei unseren Mitarbeitern zu bedanken, die jeden Tag Hervorragendes leisten und ohne die wir nie so weit gekommen wären.“ "
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Wirtschaftlich stabil und optimistisch in die Zukunft – DELIFE hat noch viele große Pläne",
                            "content" => "„Auf dem BAYERNS BEST 50 Preis wollen wir uns natürlich nicht ausruhen, sondern uns noch mehr motivieren, viele neue Projekte in Angriff zu nehmen. Es warten große Herausforderungen auf uns: neue Möbelserien, neue Technologien und die fortschreitende Verbesserung unserer Homepage, des DELIFE STORES und unserer Services werden uns auch 2022 in Anspruch nehmen. Aber wir schauen äußerst positiv in die Zukunft“, freut sich Kirchner, „mit gesundem Wachstum, unserem tollen Team und so viel Unterstützung aus der Region werden wir uns bestimmt bald wieder treffen, um einen weiteren schönen Anlass gemeinsam zu feiern.“ "
                        ],
                        [
                            "heading" => "In Coburg fährt jetzt DELIFE - Offizielle Übergabe des neuen Stadtbusses im DELIFE Design",
                            "content" => "Obwohl DELIFE vor allem als Online Unternehmen bekannt und erfolgreich ist, möchte das Unternehmen in der Region Coburg und Umgebung auch stationär für seine Kunden da sein. Deshalb wurde 2020 der neue DELIFE STORE mit 3.000 qm Verkaufsfläche direkt am Standort Ebersdorf eröffnet. Um noch mehr Kunden mit dem außergewöhnlichen Geschäft bekannt zu machen, gibt es jetzt einen Coburger Stadtbus im auffallend schönen DELIFE Design, der passend zum heutigen Anlass von den Coburger Stadtwerken und dem Geschäftsführer der VerkehrsMedien Thüringen Michael Klau offiziell übergeben wurde. „Mit einer geschickten Mischung aus Online- und Offline- Angeboten können tolle Synergien erzeugt werden, die am Ende vielen nützen“, erläutert Kirchner, „das ist Teil unserer Version und die Verleihung des BAYERNS BEST 50 ist ein ausgezeichneter Beweis, dass wir auf dem richtigen Weg sind und bleiben.“ "
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "05.10.2021",
                "headline" => "BAYERNS BEST 50 –
                DELIFE gehört zu den 50 erfolgreichsten Mittelständlern in Bayern",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Zum 20. Mal zeichnet das Bayerische Staatsministerium für Wirtschaft, Landesentwicklung und Energie die 50 wachstumsstärksten, mittelständischen Unternehmen mit dem begehrten, weißen „Bayerischen Wachstumslöwen“ des BAYERNS BEST 50 Wettbewerbs aus. Im Rahmen einer festlichen Gala im großartigen Kaisersaal der Münchner Residenz konnte in diesem Jahr auch das bekannte Möbelunternehmen den renommierten Preis durch den Bayerischen Wirtschaftsminister Hubert Aiwanger entgegennehmen.",
                            "quote" => "Mit hervorragendem, organischem Umsatz- und Mitarbeiterwachstum, einer positiven Geschäftsentwicklung im Jahr 2021, wirtschaftlicher Stabilität und Zukunftsfähigkeit konnte das seit 2008 in Ebersdorf angesiedelte Unternehmen DELIFE die unabhängige Jury von sich überzeugen. Es stellt sich als mittelständisches Familienunternehmen verdient in die Reihe bayerischer Erfolgsunternehmen. ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Mit Geduld, Innovationsfreude und gesundem Wachstum zum Erfolg",
                            "content" => "„Als mein Bruder und ich 2008 das Unternehmen DELIFE gründeten,“, erzählt Maximilian Kirchner, Gründer und Geschäftsführer der DELIFE GmbH, „konnten sich die Leute nicht vorstellen, dass sich Möbel über das Internet verkaufen lassen würden. Zum Glück haben wir uns davon nicht abbringen lassen und immer an unsere Idee geglaubt, dass man mit eigenen Möbeldesigns, einer hervorragenden Produktpräsentation, selbsterstellten, professionellen Bildern und einem ausgezeichneten Service ohne Versandkosten und mit besonders schneller Lieferung, den Kunden ein ganz besonderes Shoppingerlebnis bieten kann. Unsere Wachstumszahlen der letzten Jahre geben uns Recht und dass wir jetzt zu den BAYERN BEST 50 gehören, ist natürlich eine ganz besondere Würdigung unserer Arbeit und die unserer Mitarbeiter.“"
                        ],
                        [
                            "heading" => "Gut gerüstet für die Zukunft – DELIFE hat noch viel vor",
                            "content" => "Die Preisverleihung BAYERN BEST 50 ist für DELIFE die Bestätigung und Ansporn auch zukünftig wettbewerbsfähig, wirtschaftlich stabil und innovativ zu bleiben. „In uns brennt immer noch das Feuer“, freut sich Kirchner, „mein Bruder und ich leben und lieben noch immer unsere Vision vom Deluxe Lifestyle. Deshalb werden wir nicht müde, neue Produkte zu entwickeln, neue Services anzubieten und noch mehr Kunden mit unserer Leidenschaft für hochwertige Möbel anzustecken. Der BAYERN BEST 50 Preis ist ein wunderbarer Beweis, dass wir noch viel erreichen können und das werden wir feiern.“ "
                        ],
                        [
                            "heading" => "Noch ein Grund zum Feiern – In Coburg fährt DELIFE jetzt auch Bus",
                            "content" => "DELIFE ist nicht nur als erfolgreicher Online-Möbelhändler tätig, sondern verfügt auch über einen beeindruckenden 3.000 qm großen DELIFE STORE direkt am Hauptsitz des Unternehmens im oberfränkischen Ebersdorf bei Coburg. Hier finden Kunden viele DELIFE Produkte zum Ausprobieren und Mitnehmen. Um das stationäre Standbein von DELIFE im Umland noch bekannter zu machen, wird zukünftig ein von DELIFE designter Bus der Coburger Verkehrsbetriebe durch Coburgs Innenstadt fahren. Die offizielle Busübergabe erfolgt am 15.10. um 10 Uhr auf dem Gelände der DELIFE GmbH und wird passend zur BAYERNS BEST 50 Auszeichnung mit einer traditionellen, bayerischen Brotzeit für Gästen und Mitarbeitern gefeiert. "
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "17.08.2021",
                "headline" => "Das Tischgruppensystem Adesso –
                Die neue Serie für Flexible und Einsteiger ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE bringt mit der neuen Adesso Tischgruppenserie das Einrichten von Essbereich und Esszimmer noch attraktiver durch mehr Flexibilität zum Einsteigerpreis.",
                            "quote" => "„Unsere Modulserien wie die Tischserie Edge oder Stuhlserie Flex sind bei unseren Kunden so beliebt, weil sie größtmögliche Entscheidungsfreiheit bei bester Qualität bieten.“, erklärt Max Kirchner, CEO und Geschäftsführer der DELIFE GmbH, „Jetzt gehen wir mit Adesso den nächsten konsequenten Schritt und bieten eine ganze Esstischgruppenserie. Hier kann man sich eine gesamte Esstischgruppe nach Wunsch zusammenstellen. Von der Farbe der Stuhlbezüge über die Gestellart bis zur Tischkantenform bieten wir mit Adesso ein neues Level an Wahlfreiheit. Und das zum günstigen Einsteigerpreis, der besonders junge Leute und Menschen, die sich gern und oft verändern wollen, ansprechen soll.“ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Adesso – Elegante Stuhlvielfalt",
                            "content" => "Adesso bietet über 72 verschiedene Stuhlvariationen. Der Kunde hat die Wahl zwischen vier verschiedenen Sitzschalen, den Bezugstoffen Samt oder Microvelours in fünf edlen Farben sowie drei unterschiedlichen Gestellvarianten, die individuell kombiniert werden können. Alle Stuhlvariationen werden in einem günstigen 4er Set angeboten. “"
                        ],
                        [
                            "heading" => "Tische der Adesso Serie – Ansprechend und preiswert",
                            "content" => "Die Tische der Adesso Reihe sind in Beton- oder Eicheoptik gehalten und in zwei verschiedenen Größen erhältlich. Es stehen drei Kantenarten (Gerade Kante, Schweizer Kante und Baumkante) zur Wahl. Jede Tischplatte kann mit drei Designgestellen kombiniert werden. Alle Tische und Stühle sind einzeln bzw. im Set oder als komplette Esstischgruppe erhältlich. „Mit Adesso bringen wir modernes und individuelles Design in jeden Essbereich.“, freut sich Kirchner, „Und das für jeden Geldbeutel.“ "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Alle Adesso Modelle und Kombinationen auf: ",
                            "linkUrl" => "https://www.delife.eu/moebelserie/adesso"
                        ]
                    )
                )
            ],
            [
                "date" => "23.07.2021",
                "headline" => "Das Tischsystem Edge –
                Jetzt auch mit wertvoller Laminam® Keramik aus Italien ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE erweitert das beliebte Edge Tischsystem um hochwertige Tischplatten aus innovativer Keramik des italienischen Qualitätsherstellers Laminam®.",
                            "quote" => "„Keramik ist der neue Trend auf dem Möbelmarkt“, erklärt Max Kirchner, Gründer und Geschäftsführer der DELIFE GmbH, „Völlig zu Recht, denn die aktuelle High-Tech Keramik ist einfach ein herausragend guter Werkstoff. Absolut kratz- und stoßfest, unfassbar hitzebeständig, fleckenabweisend und sogar mit antibakteriellen Eigenschaften ist dieses Material perfekt geeignet für unsere DELIFE Esstische. Die Optik erinnert an wertvollen Stein, ist aber viel leichter und erschwinglicher. Dass wir unsere Edge Tische mit Platten des italienischen Herstellers Laminam®, einem der besten und innovativsten Keramikhersteller der Welt, kreieren durften, war uns eine echte Ehre und bringt dem Kunden noch mehr Sicherheit und Qualität. Mit Edge Laminam® haben wir die perfekten Esstische auf den Markt gebracht, die dem Kunden richtig viel Wahlfreiheit bei der Gestaltung lassen “ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Noch mehr Auswahl beim beliebten Edge Tischsystem – Mit Tischplatten aus Laminam® Keramik",
                            "content" => "Die neuen Laminam® Keramik Tischplatten des Edge Tischsystems gibt es in vielen verschiedenen Variationen. Drei verschiedene Farbtöne in interessanter Steinoptik in verschiedenen Platten- und Kantenformen stehen dem Kunden zur Verfügung. Neben verschiedenen Plattengrößen wird auch eine ausziehbare Variante angeboten, die noch mehr Flexibilität in das heimische Esszimmer bringt. Die Laminam® Platten können mit verschiedenen, hochaktuellen Tischgestellen kombiniert werden, die das einmalige Design harmonisch vervollständigen. "
                        ],
                        [
                            "heading" => "Das Edge Tischsystem – Die Erfolgsserie von DELIFE wächst weiter",
                            "content" => "„Von Anfang an waren wir von unserem Edge Tischsystem so überzeugt, dass wir viel Zeit in die Weiterentwicklung der gesamten Linie investiert haben. Und der Kunde hat uns Recht gegeben.“, freut sich Kirchner, „Deshalb sind wir auch jetzt immer noch dabei, neue Varianten, neue Formen mit weiteren Materialien und Tischgestellen zu entwickeln und zu kreieren. Hier haben wir noch viele Ideen in der Schublade und der Kunde kann sich auf viele weitere Modelle freuen. Schließlich soll am Ende wirklich jeder, den perfekten Esstisch für sein Esszimmer bei uns finden.“ "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Alle Edge Modelle auf: ",
                            "linkUrl" => "https://www.delife.eu/moebelserie/edge-tischsystem"
                        ],
                        [
                            "linkTitle" => "Alle Edge Laminam® Modelle: ",
                            "linkUrl" => "https://www.delife.eu/moebelserie/edge-tischsystem#search:query=laminam"
                        ],
                        [
                            "linkTitle" => "Noch mehr Infos zu Edge:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/edge-tischsystem/edge-tischsystem-informationen"
                        ],
                    )
                )
            ],
            [
                "date" => "02.06.2021",
                "headline" => "DELIFE x W.SCHILLIG –
                Das Möbelunternehmen hat einen neuen, starken Markenpartner an seiner Seite ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE vertreibt jetzt auch innovative Polstermöbel des erfolgreichen und angesagten Markenhersteller W.SCHILLIG. ",
                            "quote" => "„Der Möbelmarkt verändert sich ständig rasant.“, sagt Max Kirchner, Geschäftsführer der DELIFE GmbH, „deshalb ist es wichtig, sich zu vernetzen und mit starken Partnern Symbiosen zu bilden, die alle Seiten voranbringen. Gemeinsam kann man besser auf die Gegebenheiten des Marktes reagieren. Einzelkämpfer tun sich da deutlich schwerer. Deshalb sind wir sehr froh, dass wir neben der Entwicklung unserer eigenen exklusiven Marke, mit einem der weltweit führenden Polsterhersteller W.SCHILLIG eine Markenpartnerschaft eingegangen zu sein, die für uns mehr als nur Sinn macht. Schließlich haben wir alle die gleichen Wurzeln, wir kommen alle aus dem oberfränkischen Ebersdorf und wir teilen die gleiche Vision von durchdachten, hervorragend verarbeiteten Möbeln, die die hohen Ansprüche unserer Kunden voll erfüllen und gleichzeitig bezahlbar bleiben. W.SCHILLIG ergänzt unser Sortiment perfekt und wir sind stolz, unseren Kunden jetzt auch diese tollen Polstermöbel anbieten zu können.“ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "W.SCHILLIG – Ein führender Polsterhersteller jetzt bei DELIFE",
                            "content" => "W.SCHILLIG gehört mit seiner über 70jährigen Geschichte zu den deutschen Traditionsunternehmen in Sachen Polstermöbel. Einzigartige Qualität, zeitlos schöne Designs und außergewöhnliche Wohlfühlfunktionen zeichnen die hervorragenden Sofas und Liegen des oberfränkischen Herstellers aus. Jedes Modell des Herstellers trägt das „Goldene M“ der Deutschen Gütegemeinschaft Möbel e.V. und erfüllt alle DIN und RAL Kriterien. „Wir lieben die Arbeiten dieses hochangesehenen Herstellers.“, erklärt Kirchner, „Für DELIFE haben wir uns für die Modelle von W.SCHILLIG entschieden, die unser Sortiment harmonisch ergänzen und perfekt zu unseren Massivholzkollektionen passen. So entsteht ein rundes Bild, dass unsere Kunden sicher zu schätzen wissen.“ "
                        ],
                        [
                            "heading" => "W.SCHILLIG bei DELIFE ",
                            "content" => "Um alle neuen Markenmodelle von W.SCHILLIG ganz besonders gut in Szene zu setzen, wurden von DELIFE keine Kosten und Mühen gescheut. Alle Sofas und Liegen wurden aufwendig im eigenen Fotostudio fotografiert und stimmungsvoll bearbeitet. „Die tollen Bilder und Seiten, die für W.SCHILLIG bei uns entstanden sind, sorgen für einen perfekten Produktauftritt.“, freut sich Kirchner, „Sie machen den Kunden Lust auf das Kennenlernen der neuen Polstermöbel, sind aber auch unsere Hommage an einen ausgezeichneten Hersteller mit dem wir hervorragend zusammenarbeiten und mit dem wir noch viele weitere Erfolge erreichen werden.“ "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Alles Infos zu den W.SCHILLIG Polstermöbeln bei DELIFE: ",
                            "linkUrl" => "https://www.delife.eu/moebelserie/willi-schillig/alles-infos-zu-w-schillig"
                        ]
                    )
                )
            ],
            [
                "date" => "18.05.2021",
                "headline" => "DELIFE Business –
                Das Möbelunternehmen betreut Projekte für Unternehmen und Großkunden ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE stellt ab jetzt auch Unternehmen und Großkunden seine hervorragende Kompetenz in Einrichtung und Lifestyle mit eigenem Expertenteam zur Verfügung.",
                            "quote" => "„Obwohl wir uns lange ausschließlich im B2C Bereich verortet haben, erreichten uns immer wieder Anfragen von Unternehmen oder Lokalen, die sich eine Kompletteinrichtung von uns wünschten.“, erklärt Maximilian Kirchner, Gründer und Geschäftsführer der DELIFE GmbH, „Wir wagten den Versuch, denn uns war klar, dass die hohe Qualität unserer Möbel auch professioneller Nutzung perfekt standhält und wir über besonders kreative und erfahrene Einrichtungsexperten verfügen, die auch Business- und Großkunden ein einmaliges Einrichtungserlebnis garantieren können. Unsere ersten Gehversuche im B2B Bereich waren ein voller Erfolg. Deshalb gehen wir den nächsten Schritt und bieten unsere Dienste jetzt auch Hoteliers, Innenarchitekten aber auch Hausbesitzern an, die sich durchdachte Lösungen wünschen und trotzdem echte Design-Highlights sind.“ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Die Beratung steht im Mittelpunkt – DELIFE Business bietet viele Vorteile",
                            "content" => "Im Mittelpunkt von DELIFE Business steht eine einzigartige, individuelle Beratung, die genau zuhört und sowohl praktische als auch ästhetische Aspekte im Blick behält. Ob vor Ort im bekannten DELIFE STORE in Ebersdorf oder auch über Videocall steht das Expertenteam von DELIFE vertrauensvoll mit Rat und Tat jedem Kunden und jedem Projekt zur Seite, um ein maßgeschneidertes Einrichtungskonzept zu kreieren, das perfekt den Bedürfnissen des Kunden entspricht. Alle Projekte können ohne Aufpreis nach vorgegebenen Grundrissen in 2D oder 3D visualisiert und gestaltet werden. Dabei kalkuliert das Unternehmen immer maßvoll und bietet für große Bestellungen vielfache Rabattmöglichkeiten. "
                        ],
                        [
                            "heading" => "Der Schlüssel zum perfekten Projekt – Leidenschaft und Inspiration",
                            "content" => "„Unsere Einrichtungsexperten besitzen neben der langen Erfahrung vor allem eine große Leidenschaft fürs Einrichten. Dabei geht es nicht nur um Möbel oder Stile, sondern auch um die Menschen, die hinter dem Projekt stehen. Jedes Projekt muss genau passen, es muss Stil und Lebensphilosophie widerspiegeln. Das erreicht man am besten, wenn man ganz genau zuhört und sich so einfühlt als würde es um die eigene Einrichtung gehen. Das Projekt unserer Kunden wird zu unserem Projekt – mit diesem Servicegefühl können wir punkten und sicher viele Business- und Großkunden mit unserer Arbeit begeistern.“, freut sich Kirchner. "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Termine mit den DELIFE Einrichtungsexperten sind buchbar unter: store@delife.eu oder unter 09562 400 64 270 (Mo-Fr. von 8-17 Uhr) ",
                            "linkUrl" => ""
                        ],
                        [
                            "linkTitle" => "Alle Infos für Business- und Großkunden auf: ",
                            "linkUrl" => "https://www.delife.eu/info/grosskunden"
                        ]
                    )
                )
            ],
            [
                "date" => "12.03.2021",
                "headline" => "DELIFE macht sich stark –
                Das Möbelunternehmen engagiert sich für ökologische und soziale Nachhaltigkeit ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE setzt bereits seit 2008 auf nachhaltige Forstwirtschaft zur Herstellung seiner Massivholzmöbel und unterstützt internationale und lokale, soziale Projekte.",
                            "quote" => "„Für uns ist eine nachhaltige Wirtschaft und ein schonender Umgang mit Ressourcen nicht nur eine ideelle Aufgabe, sondern tatsächlich auch eine ökonomische.“, erklärt Maximilian Kirchner, Gründer und Geschäftsführer der DELIFE GmbH, „schließlich wollen wir auch noch in vielen Jahren einmalige Möbelkreationen verkaufen und ohne qualitative Hölzer und hochmotivierte Mitarbeiter am Herstellungsort ist das natürlich nicht möglich. Deshalb beziehen wir schon seit 2008 ausschließlich Holz aus nachhaltiger Forstwirtschaft und achten bei unseren Produktionsstätten auf gute Arbeitsbedingungen und eine faire Bezahlung. Als Familienunternehmen, das sich immer gesundes Wachstum und langfristigen Erfolg zum Ziel gemacht hat, ist das einfach das einzig logische Vorgehen. Bei uns gehen Ökologie, Ökonomie und soziales Handeln ganz natürlich Hand und Hand. Und eigentlich sollte das überall eine Selbstverständlichkeit sein.“",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Viel mehr als nur FSC – Mit vielen Zusatzzertifikaten garantiert DELIFE die nachhaltige Herkunft seiner Produkte",
                            "content" => "Neben einer FSC Zertifizierung wird bei DELIFE großen Wert auf den Erhalt zusätzlicher, staatlicher wie internationaler Zertifikate gelegt, die die Herkunft der genutzten Hölzer zu 100 % belegen. So sind für das Unternehmen der Erhalt von Zertifikaten wie CITES, EUTR, VRIKSH oder FLEGT absolute Selbstverständlichkeit. „Wenn Massivholz aus nachhaltigem und kontrolliertem Anbau kommt, ist es wesentlich umweltschonender als billige MDF-Ware. Es braucht nämlich wesentlich weniger Energie, chemische Zusatzstoffe, es hält viel länger und kann repariert werden.“, berichtet Kirchner, „uns ist es wichtig, dass die Menschen davon erfahren und bei jedem Kauf ganz genau wissen, dass Sie mit dem Kauf von zertifizierten Möbeln auch immer einen Beitrag in Sachen Nachhaltigkeit leisten.“"
                        ],
                        [
                            "heading" => "Soziale Nachhaltigkeit - Fördert DELIFE international und direkt vor Ort",
                            "content" => "Neben dem Spendenprojekt fair-geben von edon, das sich für verschiedenste, soziale und umweltpolitische Konzepte einsetzt, unterstützt das Unternehmen viele kleinere und größere Aktionen direkt vor Ort. „Ob Kindergarten, Tierheim oder Fußballverein hier in der Gegend rund um Ebersdorf und Coburg helfen wir gern. Schließlich ist das unsere Heimat, da geben wir gern etwas zurück.“, freut sich Max Kirchner, „Wir werden den notwendigen ökologischen Wandel nur schaffen, wenn wir auch sozial so viele Menschen wie möglich auf diesem Weg mitnehmen. Da können und wollen wir unseren Beitrag leisten und immer noch ein Stückchen besser werden.“ "
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "10.08.2020",
                "headline" => "Das neue Bettensystem DREAM von DELIFE –
                Endlich ganz nach Wunsch einfach traumhaft schlafen ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE bringt mit DREAM sein erstes, innovatives Bettensystem auf den Markt und erfüllt seinen Kunden damit konsequent den Wunsch nach noch mehr Auswahlmöglichkeiten und nachhaltiger Flexibilität.",
                            "quote" => "“Nach den ausgezeichneten Erfahrungen, die wir mit unseren Modulserien wie dem Tischsystem Edge, dem Sofasystem Clovis oder unseren beliebten Flexstühlen gemacht haben, war es nur logisch, den Schritt zu gehen und ein Bettensystem zu kreieren, dass jedem Kunden genau den Komfort bietet, nach dem er sucht.”, sagt Martin Sailer-Arnold, Leiter für E-Commerce und Datenschutz bei der DELIFE GmbH. “Dabei soll der Kunde nicht nur die Wahl bei der passenden Matratze haben, sondern auch bis in Detail bestimmen dürfen, wie sein Bett aussehen und sich anfühlen sollte. Dass der Kunde kompromisslos sein absolutes Lieblingsbett findet und einfach richtig glücklich ist, das ist unser Ziel, wenn es um unser Boxspringbettsystem DREAM geht.”  ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Verschiedene Größen, Kopfteile, Stoffe, Farben und Füße von DREAM – Der Kunde hat die Wahl",
                            "content" => "In einem ersten Schritt wird DREAM in drei verschiedenen Größen und drei hochwertig verarbeiteten Kopfteilen(Well, Fine und Great) erhältlich sein, die in 2 Stoffvarianten in wunderschönen Farbvariationen erhältlich sind. Unterschiedliche Füße, weitere Kopfteile, elegante Farben und Matratzen in auf den Kunden abgestimmten Härtegraden sind bereits in Planung und werden das anspruchsvolle Bettensystem mit der Zeit immer wieder sinnvoll ergänzen. Jedes Einzelteil von DREAM ist individuell nachbestellbar und kann jederzeit ausgetauscht werden. “Gefällt einem Kunden zum Beispiel das Design des Kopfteils nicht mehr”, erklärt Sailer-Arnold, “kann man sich einfach ein neues Kopfteil bestellen, ohne sich gleich ein komplett neues Bett kaufen zu müssen. Das ist nicht nur preiswerter, sondern auch nachhaltiger. Also, einfach richtig clever.” "
                        ],
                        [
                            "heading" => "Hochwertige Boxspringbetten DREAM mit hochwertiger Matratze und Topper exklusive",
                            "content" => "Neben der eleganten Optik liegt das Hauptaugenmerk des neuen DREAM Boxspringbettsystems selbstverständlich auf dem perfekten Liegekomfort. Deshalb sind die Boxen von DREAM besonders hochwertig verarbeitet und neben einer Matratze aus Bonellfederkern mit einem zusätzlichen Topper, der hygienisch waschbar ist, ausgestattet. Damit wird das Liegen und Schlafen zum traumhaften Vergnügen und das immer zum erschwinglichen DELIFE Preis. "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "“Wir sind uns ganz sicher, dass auch das Bettensystem DREAM unsere Kunden wieder begeistern wird. Traumhaften Nächten steht mit DELIFE nichts mehr im Weg.”, freut sich Sailer-Arnold.",
                            "linkUrl" => ""
                        ],
                        [
                            "linkTitle" => "Alle DREAM Betten auf:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/dream-bettensystem/?ItemSorting=-1"
                        ],
                        [
                            "linkTitle" => "Mehr Infos zu DREAM auf:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/dream-bettensystem/alles-infos-zu-dream-bettensystem"
                        ]
                    )
                )
            ],
            [
                "date" => "23.06.2020",
                "headline" => "Große DELIFE STORE Eröffnung am 4. Juli 2020 –
                Einmaliger Wohnsinn auf 3.000 qm ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE eröffnet am 4. Juli in Ebersdorf bei Coburg nach aufwendigen Umbauarbeiten seinen neuen 3.000 qm großen DELFIE STORE.",
                            "quote" => "“Endlich haben wir genau die Räumlichkeiten, die es uns möglich machen, unsere Möbel- und Wohnideen so zu präsentieren, wie wir uns das schon lange vorgestellt haben.”, freut sich Maximillian Kirchner, einer der Geschäftsführer der DELIFE GmbH. Sein Bruder und ebenfalls Geschäftsführer des Unternehmens Nicki Kirchner ergänzt: “Auch wenn unser Hauptfokus immer der Onlinehandel bleiben wird, ist es uns wichtig, den Menschen vor Ort die Möglichkeit zu geben, unsere Ideen in der Realität zu erleben, unsere Massivholzmöbelkreationen zu berühren oder Sofas und Betten vor dem Kauf auch auszuprobieren. Vielen Kunden ist das immer noch sehr wichtig und mit unserem neuen DELFIE STORE können wir zeigen, dass wir allen Menschen, die sich für unsere Möbel interessieren, ein echtes Kauferlebnis bieten wollen und können.” ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Ein ganzes Königreich auf 3.000 qm – Der neue DELIFE STORE",
                            "content" => "In aufwendig gestalteten Räumem bietet DELIFE seinen Kunden im ehemaligen Ewald Schillig Gebäude in Ebersdorf die beliebtesten Möbelserien, aktuelle Neuerscheinungen, aber auch preisgünstige Aktionsware, sowie beeindruckende Dekoration und ausgesuchte DELFIE STORE Specials, die nicht im Online Shop erhältlich sind. Der gesamte DELFIE STORE wurde aufwendig umgebaut und ganz neu erdacht und kreiert. In einer einmalig schönen Atmosphäre werden alle DELIFE Kunden immer werktags von 8:00 – 17 Uhr die neuen Hallen besuchen und sich vor Ort von der ausgezeichneten Qualität der DELIFE Kreationen und dem freundlichen Service der Mitarbeiter überzeugen. "
                        ],
                        [
                            "heading" => "Mit Abstand und Hygienekonzept – Die große DELIFE STORE Eröffnung am 4. Juli",
                            "content" => "Am 4. Juli öffnete DELIFE ab 10 Uhr feierlich seinen neuen DELFIE STORE und freute sich auf interessierte Besucher und Kunden. Mit einem genau geplanten Hygienekonzept sorgte das Unternehmen für ausreichend Abstand sowie Sicherheit und Gesundheit seiner Gäste. "
                        ],
                        [
                            "heading" => "",
                            "content" => "“Wir werden die Menschen bei der Eröffnung so von unseren Möbeln begeistern, dass wir uns auch stationär hier vor Ort einen ausgezeichneten Namen erarbeiten werden.”, sind sich die Kirchner Brüder sicher."
                        ],
                        [
                            "heading" => "",
                            "content" => "Zur DELIFE Store Eröffnung können alle Besucher von einem ganz besonderen Angebot profitieren: Denn es gibt 10 % Rabatt auf die gesamte Neuware und noch einmal 10 % Rabatt bei Selbstabholung. Na, wenn das nicht allein schon ein Grund zum Feiern ist! "
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "19.12.2019",
                "headline" => "Die neue Massivholzserie Juwelo – Meisterwerke mit echtem Stein ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE revolutioniert mit seinem neuen Stuhlsystem Flex den Möbelmarkt und erfreut seine Kunden mit extra viel Wahlfreiheit.",
                            "quote" => "„Die Serie Juwelo ist wirklich ein echtes Juwel in unserem Sortiment.“, sagt Martin Sailer-Arnold, Leiter E-Commerce bei DELIFE. „Wir haben unseren Fokus auf die außergewöhnliche Kombination von massivem Holz und echtem, rauem Steinfurnier gelegt und das Ergebnis ist einfach atemberaubend. So atemberaubend, dass wir uns ganz sicher sind, dass Steinfurnier einer der wichtigsten Einrichtungstrends 2020 wird.“ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Juwelo - Massivholzmöbel mit echtem Steinfurnier",
                            "content" => "Ob Konsolentisch, Kommode, Schrank oder Lowboard – Juwelo verbindet fein gemasertes, golden schimmerndes Akazienholz, das für seine unglaubliche Härte und Widerstandsfähigkeit bekannt ist, und rauen Schieferstein, der wenige Millimeter dünn zugeschnitten dessen einzigartige Oberflächenstruktur aber erhalten wurde. Verstärkt durch eine akzentuierende, schwarze Schattenfuge entsteht ein aufregender Kontrast, der beide Materialien erstrahlen lässt und elegant miteinander verbindet. "
                        ],
                        [
                            "heading" => "Jedes Juwelo Möbelstück ist einfach unverwechselbar",
                            "content" => "Durch die einmaligen, individuellen Merkmale, die Massivholz aber auch Steinfurnier so einzigartig machen, ist jedes Juwelo Möbelstück ein unnachahmliches Unikat. Durch das klare, unaufgeregte Design passt Juwelo, trotz seiner außergewöhnlichen Materialien, in jedes Wohnzimmer und macht es zum beeindruckend edlen Lebensmittelpunkt. "
                        ],
                        [
                            "heading" => "",
                            "content" => "„Der matte Glanz der rauen Steinfurnierplatte passt sich jedem Einrichtungsstil erstaunlich unkompliziert an und zieht einfach alle Blicke auf sich.“, ist sich Sailer-Arnold sicher, „Juwelo wird unseren Kunden richtig lange Freude machen, denn Steinfurnier ist wirklich unglaublich.“ "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Alle Juwelo Modelle auf:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/juwelo"
                        ],
                        [
                            "linkTitle" => "Noch mehr Infos zu Flex:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/juwelo/alle-infos-zu-juwelo"
                        ]
                    )
                )
            ],
            [
                "date" => "19.11.2019",
                "headline" => "Das neue Stuhlsystem Flex – Guter Geschmack in über 1.000 Variationen ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE revolutioniert mit seinem neuen Stuhlsystem Flex den Möbelmarkt und erfreut seine Kunden mit extra viel Wahlfreiheit.",
                            "quote" => "„Mit unserem neuen Stuhlsystem Flex kann und wird jeder seinen absoluten Traumstuhl finden“, freut sich Martin Sailer-Arnold, Leiter E-Commerce von DELIFE. „Denn mit Flex lassen sich über 1.000 verschiedene Stuhlvarianten zusammenstellen, einfach und unkompliziert und immer wieder neu.“ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Das Stuhlsystem Flex definiert Wahlfreiheit ganz neu",
                            "content" => "Das Flex Stuhlsystem besteht aus elf ganz unterschiedlichen Sitzschalen, die mit sieben verschiedenen Gestellvarianten aus Chrom, Edelstahl oder pulverbeschichtetem Metall unkompliziert und mit wenigen Handgriffen miteinander kombiniert werden können. Zusätzlich haben die DELIFE Kunden die Wahl zwischen drei wunderschönen, sehr robusten Bezugsstoffen in unterschiedlichen, sehr edlen Farben, die ausgezeichnet zu vielen Einrichtungsstilen passen. "
                        ],
                        [
                            "heading" => "Ob Freischwinger, Armlehnstuhl oder Esszimmersessel – Mit Flex ist alles möglich",
                            "content" => ""
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Alle Flex Modelle:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/stuhlsystem/esszimmerstuehle"
                        ],
                        [
                            "linkTitle" => "Noch mehr Infos zu Flex:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/stuhlsystem/alle-infos-zum-stuhlsystem"
                        ]
                    )
                )
            ],
            [
                "date" => "06.11.2019",
                "headline" => "Die neue Massivholzserie Shia – Eine Symphonie aus einzigartigem Marmor und elegantem Edelholz ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE definiert mit seiner neuen Serie Shia Massivholzmöbel völlig neu und überzeugt mit außergewöhnlichen Materialien und kreativen Designs.",
                            "quote" => "„Mit unserer neuen Shia Reihe haben wir wirklich etwas ganz Außergewöhnliches kreiert“, erklärt Martin Sailer-Arnold, Leiter E-Commerce von DELIFE begeistert. „Die Kombination von prächtigem Marmor und edlem Sheesham oder Akazienholz ist allein schon ein absoluter Hingucker, aber in Verbindung mit dem aufwendigen 3D Design der Fronten bin ich, ehrlich gesagt, selbst immer wieder sprachlos wie einmalig schön Massivholzmöbel sein können. “ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Shia glänzt mit neuem, elegantem Sheesham Farbton",
                            "content" => "Neben Akazienholz in zeitlos natürlichem Farbton haben DELIFE Kunden die Möglichkeit, sich für eine ganz neue, aufregend elegante Farbnuance bei Shia zu entscheiden. Denn alle Kommoden, Low- und Highboards sind ebenso in Sheesham Walnuss erhältlich. Dieser satte und besonders edle Farbton erinnert an das beliebte American Walnut Holz (auch als Black Nut bekannt) und ist ebenso facettenreich wie einzigartig in Beschaffenheit und Maserung. “"
                        ],
                        [
                            "heading" => "Echter Marmor aus Indien setzt Shia die Krone auf",
                            "content" => "Alle Modelle der Shia Serie werden von massivem Platten aus wertvollem, indischem Marmor gekrönt. In zwei Farbtönen setzen die Platten ganz besondere Akzente und machen durch ihre einzigartige Maserung jedes Shia Möbelstück zu einem unnachahmlichen Unikat. "
                        ],
                        [
                            "heading" => "",
                            "content" => "„Wir sind überzeugt“, freut sich Sailer-Arnold, „dass unsere Kunden von Shia genauso begeistert sein werden wie wir es selbst sind. Denn mit Shia beweisen wir, was moderne Massivholzmöbel wirklich können und erreichen ein ganz neues, beeindruckendes Level in Sachen Kreativität und Einzigartigkeit.“ "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Alle Massivholzmöbel der Shia Massivholzserie :",
                            "linkUrl" => "https://www.delife.eu/moebelserie/shia"
                        ]
                    )
                )
            ],
            [
                "date" => "07.06.2019",
                "headline" => "Die DELIFE Massivholzserie Wyatt – Beeindruckend schönes Möbeldesign ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das bekannte Möbelunternehmen DELIFE hat mit seiner Massivholzserie Wyatt die neuen Must-Haves für jedes Zimmers kreiert. Ob Sideboards, Esstische oder Spiegel mit aufwendigen 3D-Designs setzt die außergewöhnliche Möbelkollektion wunderschöne, für die Möbelbranche richtungsweisende Akzente.",
                            "quote" => "„Unsere Wyatt Massivholzmöbel sind wirklich beeindruckend und zu Recht bei unseren Kunden so beliebt“., erklärt Martin Sailer-Arnold, DELIFEs Head of E-Commerce begeistert. „Mit dieser Möbelserie können wir zeigen, was der Werkstoff Holz alles kann und dass er noch immer allen anderen Materialien im Möbelbau haushoch überlegen ist. Das moderne Design setzt die von uns gewählten Holzsorten Sheesham und Akazie stilvoll in Szene und zeigt, dass nur die Natur so vollendete Facetten hervorbringen kann.“ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Für jeden das richtige Möbelstück – Wyatt in 4 Farben",
                            "content" => "Wie von DELIFE gewohnt, ist auch die Wyatt Kollektion in vier wertvollen Farbnuancen erhältlich. Neben der beliebten Sheesham Natur Variante mit der auffälligen Maserung können Kunden beim Akazienholz zwischen drei aufwendig in Handarbeit erstellten Farben wählen. Und damit auch wirklich jeder das Möbelstück erwirbt, das am besten zu ihm und seiner Einrichtung passt, sind die Low- und Sideboards der Reihe zusätzlich mit verschiedenen Fußgestellen zu bekommen. "
                        ],
                        [
                            "heading" => "Die Massivholzserie Wyatt – Design für jeden Raum",
                            "content" => "Wyatt wurde als Kollektion konzipiert, die mit ihren einzelnen Elementen als durchdachtes Einrichtungskonzept für die gesamte Wohnung in jedem Raum zum Einsatz kommen und glänzen kann. Ob Kommoden und Spiegel im Schlafbereich, Esstische und Stühle für das Esszimmer und Regale und Fernsehtische im Wohnzimmer – mit Wyatt können DELIFE Kunden sich ein einzigartiges Königreich kreieren, das durch Design und Qualität alle Blicke auf sich ziehen wird."
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Alle Massivholzmöbel der Wyatt Massivholzserie :",
                            "linkUrl" => "https://www.delife.eu/moebelserie/wyatt"
                        ]
                    )
                )
            ],
            [
                "date" => "10.09.2018",
                "headline" => '10 Jahre DELIFE "We made it"',

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Seit 2008 schickt sich der Online-Händler DELIFE mit seinen einzigartigen Möbeltrends an, den deutschen und europäischen Onlinehandel zu erobern. Was als Vision der Brüder Max und Nicki Kirchner begann, entwickelte sich durch Kreativität, Herzblut und viel harte Arbeit zu einem der führenden Unternehmen in Sachen Möbel und Lifestyle mit bereits über 500.000 zufriedenen Kunden. Das 10-jährige Firmenjubiläum möchte DELIFE deshalb nicht nur zum Anlass nehmen, ordentlich zu feiern und mit neuem Schwung in die nächsten zehn Jahre zu starten, sondern sich vor allem durch eine ganz besondere Aktion vom 10.09.-20.09.2018 bei allen Kunden zu bedanken, die diese Erfolgsgeschichte erst möglich gemacht haben.",
                            "quote" => "„Die Leidenschaft für schöne Möbel liegt uns einfach im Blut“, verraten Max und Nicki Kirchner, Gründer und Geschäftsführer der DELIFE GmbH, „deshalb haben wir vor der Gründung von DELIFE schon viele Jahre in der Möbel- und Lifestylebranche gearbeitet. Irgendwann fragten wir uns, ob es nicht möglich wäre, unsere eigenen Wohnideen einfach online zu verkaufen – unsere DELIFE Geschäftsidee war geboren. Jedoch“, berichten die Brüder weiter, „war uns von Anfang an klar, dass gerade beim Kauf von Möbeln im Internet einige Gefahren lauern. Schließlich waren es die Kunden gewohnt, sich in einem Möbelhaus vor Ort beraten zu lassen und alle Produkte hautnah erleben zu können. Wir legten deshalb von Anfang an Wert darauf, einen besonders engen Kundenkontakt aufzubauen, unsere Produkte besonders schön und informativ in Szene zu setzen und durch kostenlosen Versand, schnelle Lieferung und viele verschiedene Zahlungsarten, den Kunden Ihre Befürchtungen zu nehmen und den Möbelkauf zu einem ganz besonders angenehmen Erlebnis werden zu lassen. Dieser ganzheitliche Ansatz ist wahrscheinlich unser Erfolgsrezept.“ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "DELIFE – Ein gesund wachsenden Unternehmen mit großen Ambitionen",
                            "content" => "Zehn Jahre nach Gründung verfügt das Unternehmen über 80 engagierte Mitarbeiter und eine Lagerfläche von über 20.000 qm. Mehr als 2.000 Produkte sind sofort lieferbar und erreichen begeisterte Kunden in 12 Ländern. Und das Unternehmen hat große Pläne für die nächsten Jahre: „Wir strotzen gerade vor neuen Designideen, wollen neben der ständigen Verbesserung unserer deutschen Seite, unseren fremdsprachigen Kunden einen ausgezeichneten Service bieten und uns Schritt für Schritt in weiteren Ländern Märkte erschließen. Wir sind besonders stolz darauf, dass wir ein ganz klassisches Familienunternehmen sind und es geschafft haben, ganz ohne Fremdfinanzierung, jedes Jahr gesund zu wachsen. Deshalb handeln wir sehr überlegt und trotzdem wird es nie langweilig.“, freuen sich die Kirchners. "
                        ],
                        [
                            "heading" => "10 Jahre DELIFE – Ein großes Dankeschön an alle Kunden",
                            "content" => "Mit einer großen Rabatt-Aktion möchte sich DELIFE besonders bei seinen treuen Kunden bedanken, die durch ihre jahrelange Treue, den DELIFE Erfolg erst möglich gemacht haben. Deshalb werden für zehn Tage, vom 10.09.-20.09.2018 nicht nur sämtliche Produkte um 10 % im Preis reduziert (Gutscheincode:10JAHRE), sondern zusätzlich gibt es die zehn besten DELIFE Produkte zu einem absolut einmaligen Jubiläumspreis zu ergattern. Neben einem großen Gewinnspiel auf den Social Media Kanälen warten noch weitere Überraschungen auf alle DELIFE Kunden. Man darf also feierlich gespannt sein! "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "10 Jahre DELIFE :",
                            "linkUrl" => "https://www.delife.eu/10-jahre-delife"
                        ],
                        [
                            "linkTitle" => "DELILFE feiert mit :",
                            "linkUrl" => "https://blog.delife.eu/we-made-it-delif%E2%80%A6laeum-feiert-mit/3022/"
                        ],
                    )
                )
            ],
            [
                "date" => "25.06.2018",
                "headline" => "Objekteinrichtung mit Luxusmöbeln von DELIFE",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das Möbelunternehmen DELIFE stellt ab jetzt auch Gewerbetreibenden seine Dienste in Sachen Beratung, Konzeption und Umsetzung bei der Innenausstattung und Objekteinrichtung zur Verfügung. Ziel sind durchdachte Innenräume, die durch Exklusivität und Einmaligkeit beeindrucken und die Kundenbindung und -zufriedenheit beständig stärken und steigern.",
                            "quote" => "„Es mag paradox klingen, aber in unseren Zeiten der Digitalisierung wird ein ansprechender Offline-Auftritt von Geschäften, Bars, Kanzleien und sogar Arztpraxen immer wichtiger.“, sagt Martin Sailer-Arnold, Head of E-Commerce von DELIFE. „Die Menschen tauschen sich aus, geben Empfehlungen und Bewertungen ab. Da ist der erste Eindruck eines ansprechenden, vielleicht sogar einzigartigen Ambientes oft schon entscheidend. Wir möchten mit unserer langjährigen Erfahrung in Sachen Inneneinrichtung alle Gewerbetreibenden unterstützen, ihren Kunden eine einladende Atmosphäre zu bieten, in der sie sich wohlfühlen, um gern und häufig wiederzukommen.“ ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Warum sollten sich Gewerbetreibende für DELIFE entscheiden?",
                            "content" => "Das Möbelunternehmen DELIFE hat sich seit seiner Entstehung im Jahr 2008 einen anerkannten Namen in Sachen Designmöbeln und Lifestyle, aber auch bei Service und Zuverlässigkeit gemacht. Eine fachgerechte und vor allem ehrliche Beratung sind fester Bestandteil der DELIFE Firmenphilosophie. Dabei stehen eine offene Kommunikation und der Austausch von Ideen im Vordergrund. „Uns ist es wichtig, dass wir die Bedürfnisse unserer Kunden voll erfassen und gemeinsam mit unseren Kunden ein spannendes und durchdachtes Gesamtkonzept kreieren“, erklärt Sailer-Arnold, „denn eine Objekteinrichtung darf nicht nur schön, sie muss auch praktisch und dem Kundenkreis angepasst sein. Dafür gehen wir auch gern einmal unkonventionelle Wege, schließlich wollen wir mit dem Endergebnis begeistern.“  "
                        ],
                        [
                            "heading" => "Vom Möbelsortiment, über die Beleuchtung bis zur Sonderanfertigung – DELIFE macht es möglich",
                            "content" => "Neben einem großen Sortiment, mit besonderem Schwerpunkt auf wertvolle Massivholzserien und flexibel einsetzbaren Modulsofas, können sich Gewerbetreibende auch bei der Beleuchtung und den Dekorationselementen auf das Know-How von DELIFE verlassen. Besondere Ideen und Wünsche wie etwa ein extralanger, in Deutschland einmaliger Bartresen aus Baumkante (zu bestaunen in der Szene Location Chicas in Coburg) setzt das Unternehmen auch gern einmal in einer Sonderanfertigung um. „Alle interessierten Gewerbetreibenden sollten sich einfach einmal ganz unverbindlich bei uns melden“, empfiehlt Sailer-Arnold, „Wir freuen uns auf neue Herausforderungen und großartige Projekte.“ "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Alle Informationen und ein Beispielprojekt finden Sie unter:",
                            "linkUrl" => "https://blog.delife.eu/we-make-it-work-objekteinrichtung-mit-delife/2982/"
                        ]
                    )
                )
            ],
            [
                "date" => "01.03.2018",
                "headline" => "Kompletteinrichtung mit Luxusmöbeln von DELIFE",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Für Hausherren, Architekten und Inneneinrichter: DELIFE bietet jetzt Kompletteinrichtungen an",
                            "quote" => "Seit nunmehr über einem Jahrzehnt setzt DELIFE Maßstäbe in Sachen trendorientierter, luxuriöser Inneneinrichtung – nun bietet DELIFE auch die Kompletteinrichtung von Objekten an. Vor allem qualitativ hochwertige Massivholzmöbel und bequeme Polstermöbel gehören seit jeher zu den Stärken des deutschen Unternehmens. DELIFE beliefert mittlerweile 12 Länder der Europäischen Union. ",
                            "content" => "An diesem Erfahrungsreichtum lässt das Unternehmen nun auch seine Kunden in erweitertem Umfang teilhaben. Seit 2018 bietet DELIFE Kompletteinrichtung als Service an. Dabei bieten die Oberfranken von der einfachen Hilfestellung in Sachen Kombination bestehender Produktpaletten, bis hin zu absoluten Einzelstücken und speziell abgestimmten Maßanfertigungen, ein immenses Spektrum an Inspirationen für echte Fantasiewelten an. Um diese Welten ins Leben zu rufen, greift das Unternehmen auf ein extensives Netzwerk aus Produzenten, Lieferanten, Handwerkern und Planern zurück."
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Vom Online-Händler zum Hands-On Berater",
                            "content" => "Dieser Schritt folgt als logische Konsequenz. Zuvor hat sich der Möbelhändler vor allem bei modularen Sofaserien einen guten Ruf gemacht. Die Möglichkeit, modular konzipierte Sofa-Elemente und sogar Massivholz-Möbel mithilfe eines Produktkonfigurators selbst zu individualisieren, ergänzt DELIFE damit sein Angebot um die Kompletteinrichtung samt individueller Beratung. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Mit einem imposanten Referenzprojekt aus dem Raum Coburg verdeutlicht DELIFE sowohl seine eigenen Ambitionen, als auch die Bandbreite, in der das Unternehmen als Kompletteinrichter fungieren kann. Das Hausbauprojekt im klassischen Bauhausstil, samt großflächiger Glasfassade, beeindruckt einerseits durch eine erlesene Auswahl und geschickte Kombination aus dem bestehenden Online-Sortiment, zeigt aber auf der anderen Seite, wie Maßanfertigungen und speziell gefertigte Möbelstücke perfekt in bestehende oder entstehende Objekte eingefügt werden können. "
                        ],
                        [
                            "heading" => "Die neuesten Trends und Ideen aus einer Hand",
                            "content" => "Ganz unabhängig vom Umfang, in dem eine Kompletteinrichtung stattfinden soll, begeistert das Unternehmen durch seine Nähe zum Puls der Zeit. Häufig verbindet man Massivholzmöbel mit veralteten Trends. Doch DELIFE zeigt, dass Qualität aus massivem Holz auch in modernem Ambiente extrem sexy wirken kann. Modernste Looks treffen hier auf hochwertige Verarbeitung. Standardmäßig und seit neustem auch in Fertigung nach Maß."
                        ],
                        [
                            "heading" => "",
                            "content" => "Natürlich beraten wir Sie gerne in allen Anliegen und unterstützen Sie auch bei größeren Projekten mit all unserer Leidenschaft und Kompetenz. Gerne unterbreiten wir Ihnen ein individuelles Angebot zu unseren Standardprodukten oder helfen Ihnen dabei besondere Maßanfertigungen umzusetzen. "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Kompletteinrichtung von Objekten",
                            "linkUrl" => "http://blog.delife.eu/let-us-help-you-create-your-kingdom-kompletteinrichtung-mit-delife/2950/"
                        ],
                        [
                            "linkTitle" => "modularen Sofaserien :",
                            "linkUrl" => "https://www.delife.eu/moebelserie/clovis"
                        ]
                    )
                )
            ],
            [
                "date" => "01.02.2018",
                "headline" => "Live-Edge Do-It-Yourself ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Do It Yourself mit Live-Edge: Unikate selbst gemacht!",
                            "quote" => "Live-Edge von DELIFE ist seit Jahren eine der beliebtesten Einrichtungs-Serien im Massivholzmöbel-Bereich. Die verlockende Kombination aus robuster und hochwertiger Verarbeitung des ohnehin schon beständigen Akazienholzes und der elegant und verspielt wirkenden Natürlichkeit der Baumkanten verzaubert deutsche Einrichter vollkommen zurecht. Schnell war die Nachfrage so hoch, dass DELIFE einen eigens entwickelten Shop Produkt-Konfigurator im Shop einband um die gestalterischen Fähigkeiten seiner Kundschaft zu unterstützen. Seit 2018 geht das Unternehmen einen Schritt weiter. ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "",
                            "content" => "Kaum eine Möbelserie symbolisiert individuelle Einrichtung so eindrucksvoll wie Live-Edge Möbel von DELIFE. Beim letzten Bruch mit herkömmlichen Möbel-Konventionen setzt DELIFE dem individuellen Wohnen aber erneut die Krone auf: Alle Massivholzplatten und Gestelle der beliebten Wohnserie mit Baumkante gibt es seit Februar nun auch einzeln zu kaufen. Damit sind der Kreativität im Möbel-Design die letzten Grenzen genommen worden. Ganz egal ob man sich dazu entscheidet selbst Hand anzulegen, oder sich an den Schreiner seines Vertrauens wendet: Mit den Massivholzplatten der Live-Edge-Serie kreiert man hochindividualisierte Möbel mit Baumkante, ganz nach eigenem Gusto. Auch der richtige Anstrich ist dank fünf beliebter Trendfarben garantiert. Ganz egal also ob das hochwertige Akazienholz am Ende ein neues Leben als Waschtisch oder aber als Fensterbank beginnt, mit den Einzelstücken aus robustem Massivholz lassen sich absolut außergewöhnliche Unikate erschaffen. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Auch die Gestelle der Serie, wahlweise in silbernem Edelstahl, schwarz pulverbeschichtetem Metall, massivem Holz, oder gleich aus elegant schwebend wirkendem Glas, lassen sich für ganz persönliche Projekte einzeln erwerben. Für Inspirationen und weitere Informationen stellt DELIFE eine Info-Seite auf dem Blog zur Verfügung."
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Live-Edge von DELIFE",
                            "linkUrl" => "https://www.delife.eu/moebelserie/live-edge"
                        ],
                        [
                            "linkTitle" => " Massivholzplatten der Live-Edge-Serie",
                            "linkUrl" => "https://www.delife.eu/moebel/tische/massivholzplatten"
                        ],
                        [
                            "linkTitle" => "Die Gestelle",
                            "linkUrl" => "https://www.delife.eu/moebel/tische/gestelle"
                        ],
                        [
                            "linkTitle" => " Info-Seite auf dem Blog zur Verfügung",
                            "linkUrl" => "http://blog.delife.eu/baumkantenmoebel-do-it-yourself/"
                        ]
                    )
                )
            ],
            [
                "date" => "22.12.2017",
                "headline" => "Metropolitan - filigraner & funktioneller Minimalismus ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Metropolitan - filigraner & funktioneller Minimalismus",
                            "quote" => "Die Kunst beim Möbelkauf ist es, genau die Einrichtung zu finden, die zum eigenen Leben passt. Preis, Aussehen, Platzbedarf und Funktionalität in ein ausgewogenes Verhältnis zu bekommen, stellt sich dabei teilweise als die Quadratur des Kreises heraus.",
                            "content" => "DELIFE bringt nun mit Metropolitan eine Massivholz-Möbelserie auf den deutschen Markt, die einen fundamentalen Wandel im Leben vieler Menschen auf den Punkt bringt. Metropolitan vereint die Wertigkeit und Funktionalität seiner bisherigen Kollektionen mit einer Design-Komponente, die filigranem Minimalismus einen ganz großen Auftritt beschert. Wahlweise in massivem Mango- oder Akazienholz erhältlich, bietet Metropolitan entweder mit goldenen Messing- oder silbernen Edelstahl-Inlays in Betonoberflächen, ein einzigartig edles Design, das kaum Wünsche offenlässt. "
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "",
                            "content" => "Die simple Formgebung und kompakte Beschaffenheit sorgt dafür, dass Metropolitan auch in eingeschränkten Räumlichkeiten den Platz findet, den es verdient. Egal ob Sideboard, TV-Board, Couchtisch oder Sofa – bei der neuen Serie überzeugt vor allem der edle und filigrane Auftritt, der zusammen mit der kompakten Funktionalität ein Novum für Massivholzmöbel darstellt. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Besonders edel wirken die von Hand eingearbeiteten Messing- und Edelstahl-Inlays, die die Betonoberflächen der grazilen Kollektion vollenden. Goldene Akzentuierungen finden sich in der Mango-Variante wieder, welche mit einem freundlichen, hellen Farbton auch kleine Räume aufwerten, ohne sie optisch zu sehr zu füllen. Die Variante aus hochwertiger Akazie hingegen ist mit silberfarbenen Inlays aus Edelstahl verziert. Diese wirken im grauen Beton noch etwas subtiler als ihr goldenes Pendant. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Neben den - für das Wohnzimmer typischen - Kombinationen aus Low- oder Sideboard, Sessel & Sofa, oder Couchtischen, finden sich auch passende Sitzbänke und Stehleuchten im Sortiment von DELIFE wieder. "
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "29.11.2017",
                "headline" => "Wyatt - Die Handschrift der Natur",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Von der Natur gezeichnet",
                            "quote" => "",
                            "content" => "Sheesham-Möbel haben in den letzten jahren extrem an Beliebtheit gewonnen. Der Hype kommt nicht von ungefähr: Das Holz des Sheeshaumbaumes wächst nicht nur rasant, es bezaubert zudem auch mit wundervoll hypnotischer Maserung. Die faszinierenden Zeichnungen von Mutter Natur nehmen eine entsprechende Relevanz im Erscheinungsbild der Möbel ein; so ist es eine Herausforderung Möbel aus Sheeshamholz zu entwerfen, die nicht als langweilige Kastenmöbel enden."
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "",
                            "content" => "Genau dieses Problem hat DELIFE dieses Jahr mit der neuen Massivholzserie Wyatt gelöst. Der Brückenschlag zwischen Purismus und gezielten Design-Akzenten gelingt bei der naturfarbenen Serie vor allem durch akzentuierte Formgebung. Das Spiel mit konkaver Linienführung ist ein Hingucker, der erst auf den zweiten Blick ins Auge fällt und dem Betrachter mehr als ein optisches Erlebnis bietet. Zunächst fesselt die Maserung des Massivholzes den Betrachter, daraufhin führen die geraden aber gezielt durchbrochenen Linien der Möbel den Blick entlang eines jeden Einzelstücks. Der haptische Eindruck folgt dabei fast schon automatisch. Wyatt ist nicht nur ein absoluter Blickfang, sondern ein Erlebnis für die Sinne."
                        ],
                        [
                            "heading" => "",
                            "content" => "Neben den klassischen Kastenmöbeln mit Design-Akzenten, wie Sideboards oder Lowboards, bietet Wyatt auch die passenden Esszimmermöbel wie einen einzigartigen Tisch samt passender Stühle. Abgerundet wird das Sortiment von Accessoires wie einem Wandspiegel oder den passenden Wandboards. Alle Vertreter der Serie weisen die einmaligen Zeichnungen des Sheeshamholzes auf und begeistern mit einem niedagewesenen Mix aus Natürlichkeit und Design. Wyatt ist eine Design-Möbelserie abgezeichnet von Mutter Natur selbst. "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Sheesham-Möbel:",
                            "linkUrl" => "https://www.delife.eu/lifestyle-wohnwelten/sheesham"
                        ],
                        [
                            "linkTitle" => "Massivholzserie Wyatt:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/wyatt"
                        ]
                    )
                )
            ],
            [
                "date" => "29.09.2017",
                "headline" => "Live Edge auf Glas",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Live-Edge Möbel auf Glasgestellen",
                            "quote" => "",
                            "content" => "Eine der beliebstesten Massivholzmöbelserien Deutschlands erhält ein beeindruckendes Update. Die Massivholzserie Live-Edge von DELIFE, die vor allem durch ihre elegante, natürliche Baumkante auffällt, wurde nun um eine weitere späktakuläre Variation ergänzt. Neben Baumkantenmöbeln mit schrägen Gestellen und den Varianten mit geraden Edelstahlgestellen findet man beim deutschen Händler für Massivholzmöbel nun auch Modelle, die die natürlichen Baumkanntenplatten noch extravaganter wirken lassen als sie ohnehin schon sind. "
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "",
                            "content" => "In der neuesten Installation der modernen Trendserie begeistert Live-Edge mit Glasgestellen. Die neuen Beine aus gehärtetem Glas ergänzen den ohnehin natürlich-modernen Charakter der Möbelserie um ein fast schwereloses Flair. Die gerade und durchsichtige Gestaltung lässt sowohl Tische als auch Bänke noch ein Stück moderner, beinahe schon futuristisch wirken. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Aber nicht nur das Esszimmer sieht sich als Profiteur des Ideenreichtums der Firma DELIFE. Auch Couchtische im Float-Look sollen folgen. Zudem wird DELIFE in naher Zukunft sowohl die beliebten Akazienholzplatten mit natürlicher Baumkante, als auch die neuen Gestelle aus Glas einzeln anbieten. Damit dürften vor allem die Herzen der Tüftler und Bastler unter den Einrichtern höher schlagen. Die ersten Infos zu den geplanten Do-It-Yourself Artikeln und ein paar Beispiele für deren mögliche Verwendung finden sich schon auf dem Einrichtungsblog von DELIFE. Die Do-It-Yourself Kampagne verspricht nicht nur den ein oder anderen kreativ zu aktivieren, sondern stellt zudem auch eine extrem ausgefallene Geschenkidee dar."
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Baumkantenmöbeln mit schrägen Gestellen:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/live-edge/#navigation:attrib%5Bcat_url%5D%5B0%5D=%2Fmoebelserie%2Flive-edge%2F&attrib%5BGestell%5D%5B0%5D=Schwarz+schr%C3%A4g&order=price+ASC&first=0"
                        ],
                        [
                            "linkTitle" => "Varianten mit geraden Edelstahlgestellen:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/live-edge/?multishop_id=0&group%5B0%5D=1&service=selector&Params%5BSearchParam%5D=&count=0&attrib%5BM%C3%B6belart%5D%5B0%5D=Esstische&first=0#navigation:attrib%5Bcat_url%5D%5B0%5D=%2Fmoebelserie%2Flive-edge%2F&attrib%5BGestell%5D%5B0%5D=Silber+schmal&order=price+ASC&first=0"
                        ],
                        [
                            "linkTitle" => "Do-It-Yourself Kampagne:",
                            "linkUrl" => "http://blog.delife.eu/baumkantenmoebel-do-it-yourself/"
                        ]
                    )
                )
            ],
            [
                "date" => "31.07.2017",
                "headline" => "Sitzklassiker Earnest",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Earnest - ein Sitzklassiker zum Spitzenpreis",
                            "quote" => "",
                            "content" => "Er gehört quasi zu den Alteingesessenen und bringt dennoch jedes Mal auf's neue einen gewissen Schwung in jedes Zuhause. Der Freischwinger Earnest ist ein zeitloses Stück Design für's Esszimmer. Das schlichte Design mit dem rechtwinkligen Edestahlgestell wird kontrastreich ergänzt durch eine wunderschöne Posterung wahlweise in Taupe, Braun, Anthrazit oder Schwarz. Seit neuestem bietet auch die Variante mit schwarzem Eisengestell die Möglichkeit, Ihre Esszimmermöbel um einen elegant modernen Akzent zu ergänzen. Die neue Farbgebung kommt als logischer Schritt zu den schwarzen Gestellen der beliebtesten Esszimmertische."
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "",
                            "content" => "Dezente Absteppungen, die passend bezogenen Armlehnen und der pflegeleichte Mikrofaserstoff machen den Freischwinger zu einem klassischen Modell mit einem unverkennbar zeitlos eleganten Erscheinungsbild. Das Zusammenspiel der Materialien ermöglicht eine Vielzahl an Kombinationsmöglichkeiten und lässt so - egal wie der Rest der Einrichtung ausfallen mag - eine Bereicherung des Ambientes durch praktische Funktionalität und klares Design zu. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Vor allem die Kombinationen mit modernen Einrichtungstrends, wie der Live-Edge Massivholzserie, oder einem Massivholztisch aus Eiche mit passendem Gestell, haben den Stuhl in den letzten Jahren wieder so richtig aufleben lassen. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Schon seit Mai 2017 gibt es den Esszimmerstuhl wegen seiner Beliebtheit und auch wegen der vielseitigen Kombinationsmöglichkeiten im DELIFE Onlineshop für einen Spitzenpreis von 79€. "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Freischwinger Earnest:",
                            "linkUrl" => "https://www.delife.eu/moebel/stuehle/freischwinger/#navigation:attrib%5Bcat_url%5D%5B0%5D=%2Fmoebel%2Fstuehle%2Ffreischwinger%2F&attrib%5Bprice%5D%5Bmin%5D=79&attrib%5Bprice%5D%5Bmax%5D=79&order=price+ASC&first=0"
                        ],
                        [
                            "linkTitle" => "Variante mit schwarzem Eisengestell :",
                            "linkUrl" => "https://www.delife.eu/moebel/stuehle/freischwinger/#navigation:attrib%5Bcat_url%5D%5B0%5D=%2Fmoebel%2Fstuehle%2Ffreischwinger%2F&attrib%5Bprice%5D%5Bmin%5D=79&attrib%5Bprice%5D%5Bmax%5D=79&attrib%5BMaterial%5D%5B0%5D=Metall&order=price+ASC&first=0"
                        ],
                        [
                            "linkTitle" => "Zu den schwarzen Gestellen der beliebtesten Esszimmertische :",
                            "linkUrl" => "https://www.delife.eu/moebelserie/live-edge/#navigation:attrib%5Bcat_url%5D%5B0%5D=%2Fmoebelserie%2Flive-edge%2F&attrib%5BGestell%5D%5B0%5D=Schwarz+schr%C3%A4g&order=price+ASC&first=0"
                        ],
                    )
                )
            ],
            [
                "date" => "26.06.2017",
                "headline" => "Clovis in grauem Flachgewebe",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Der Sofa-Klassiker Clovis - Jetzt auch in coolem Grau!",
                            "quote" => "",
                            "content" => "Die Sofaserie CLOVIS von DELIFE ist extrem beliebt. Das liegt vor allem daran, dass die gesamte Reihe modular konzipiert ist, was bedeutet, dass man sich seine CLOVIS aus verschiedenen Einzelteilen selbst so zusammenstellen kann, dass sie perfekt in die eigenen vier Wände passt. Dabei lassen sich Ottomanen, Mittelteile, Hocker und Armlehnen so arrangieren, dass sie in so gut wie jede erdenkbare Einrichtung passen. "
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Auf Form folgt Farbe - die Mischung macht's!",
                            "content" => "Auch Korpus und Polster lassen sich in verschiedenen Varianten miteinander kombinieren. So gab es bislang die Möglichkeit, verschiedenfarbige Strukturstoffe wahlweise mit Kunstleder und Microveloursstoffen zu kombinieren, um so die perfekte Couch für seinen ganz individuellen Lebens- und Einrichtungsstil zu finden. "
                        ],
                        [
                            "heading" => "Elegantes Flachgewebe für hohe Ansprüche!",
                            "content" => "Im Juni bekam die Bestseller-Serie nun äußerst eleganten Zuwachs. Die Variante in einem angenehm neutralen Grau ist vor allem materiell ein Novum: Die clevere Variante in Grau gibt es nämlich aus Flachgewebe. Damit schafft DELIFE eine weitere Alternative zu den Klassikern aus Strukturstoff. In Sachen Durchhaltevermögen schließt die Variante aus Flachgewebe direkt an die Version aus Kunstleder an. Denn beide halten etwa 50.000 Scheuertouren durch und sind damit auch bei intensivem Gebrauch lange nutzbar."
                        ],
                        [
                            "heading" => "Kann man einfach mal so stehen lassen!",
                            "content" => "Wie alle anderen Varianten der Kult-Couch ist auch die neueste CLOVIS aus Flachgewebe rundum echt bezogen. Das bedeutet auch weiterhin: Kein Wandzwang für die Festung der Entspannung. Die eigens konfigurierte CLOVIS kann damit in jedem Raum auch frei stehen gelassen werden, ohne einen hässlichen Rücken verbergen zu müssen. "
                        ],
                        [
                            "heading" => "Mehr kann mehr!",
                            "content" => "Die neue Variante aus Flachgewebe läutet aber keineswegs ein Ende im Wachstum der Sofa-Serie ein. Denn schon in wenigen Wochen soll eine weitere Version aus Microvelours folgen. Diesmal in trendigem Anthrazit. Spätestens dann sollte jeder in Lage sein, seine perfekte CLOVIS zu kreieren. Wer sich unschlüssig ist, der kann auch weiterhin den CLOVIS-Produktberater nutzen."
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "31.05.2017",
                "headline" => "Live Edge - Jetzt NEU in Platin",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Live-Edge Platin - Handveredelte Unikate in extravagantem Grau",
                            "quote" => "",
                            "content" => "Nach mehreren kleinen Updates, die unsere Live-Edge Serie um einen eleganten Schreibtisch und mehrere Couch- sowie Beistelltische ergänzt haben, gibt es endlich wieder ein größeres Update: Die einzigartigen Baumkantenmöbel der Live-Edge-Serie gibt es, dank eines speziellen Handveredelungsprozesses, nun auch im extravagantem Trend-Ton Platin."
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "",
                            "content" => "Die neue Trendfarbe ist nicht nur untypisch für das massive Holz der Akazie, sie kommt sogar erst durch einen aufwendigen, manuellen Prozess samt Reifezeit zustande. Das elegante Schimmern der neuen Reihe kommt also nicht von Ungefähr: Bis das Holz der Akazie die spezielle Kolorierung angenommen hat, vergeht einige Zeit. Die anschließende Versieglung schütz Farbe und Oberfläche vor externen Einflüssen. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Wie auch in allen anderen Farben, handelt es sich bei allen Live-Edge-Möbeln auch in der Platin-Kollektion bei jedem Möbelstück um ein Unikat. Die Baumkante eines jeden Möbels ist dabei einzigartig. Auch Maserung, Einschlüsse und weitere Zeichnungen auf dem Holz werden der Einzigartigkeit eines jeden zur Herstellung genutzten Baumes gerecht. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Mit den Neuzugängen in extravagantem Platin holt man sich also gleich auf doppelte Art und Weise Unikate ins Haus. Die einzigartige Baumkante wird ergänzt durch einen für die Akazie einzigartigen Farbton. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Das elegante Platin fügt sich dabei trotz der eigenen Extravaganz einfach in bestehende Milieus ein. Das neutrale Grau macht sich sowohl in heller, als auch in dunkler Umgebung extrem gut und kann mit verschiedenen Farben ergänzt oder kontrastiert werden. Ganz nach dem eigenen Geschmack. "
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "24.04.2017",
                "headline" => "Facebook Gewinnspiel April 2017",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "60.000 Facebook-Fans und ein geniales Gewinnspiel",
                            "quote" => "",
                            "content" => "Die Marke DELIFE wächst tagtäglich. Das junge Unternehmen, das einen exklusiven Mix an Design-Möbeln aus dem In- und Ausland vertreibt, steht schon seit seiner Gründung 2008 für ein Wohnerlebnis der Extraklasse. Das rasante Wachstum und der Zulauf zufriedener Kunden spiegelt sich auch in den sozialen Medien wieder. DELIFE feiert im April & Mai seine 60 000 Facebook-Fans mit einem großen Gewinnspiel. "
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "",
                            "content" => "Wenn Unternehmen so schnell und erfolgreich wachsen wie DELIFE aus Ebersdorf bei Coburg, dann birgt das immer eine spezielle Herausforderung. Lager müssen wachsen und effizient organisiert werden. Der Support muss mit der Kundschaft mitwachsen und die Online-Infrastruktur muss tadellos funktionieren. Über 300.000 zufriedene Kunden kommen nicht von ungefähr! Ein Meilenstein für den Online-Möbel-Händler war dabei der Gewinn des Shop-Usability Awards 2016. Der beste Online-Shop für Möbel in Deutschland ist also offiziell auf DELIFE.eu zu erreichen. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Es war nur eine Frage der Zeit, bis sich die Euphorie der Online-Möbel-Community auch auf die sozialen Medien überträgt. So wächst neben dem Unternehmen auch dessen Facebook- und Instagram-Auftritt beständig. Nach einem extrem erfolgreichen Gewinnspiel im Januar, legt DELIFE auch im April noch einmal nach, und feiert dabei seine 60.000 Fans auf Facebook. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Der Clou an diesem Gewinnspiel: Die Teilnehmer haben sowohl beim Gewinn, als auch bei ihren Gewinnchancen so einiges mitzureden. Denn zu gewinnen gibt es eine Variante der beliebten Clovis-Wohnlandschaft im Wert von bis zu 1000€.
                            Aber wieso bis zu 1000€? Ganz einfach: Der Gewinner des Gewinnspiels darf sich seine Wohnlandschaft bis zu diesem Preis frei selbst konfigurieren. Die Sofa-Reihe Clovis ist nämlich unter anderem ein solcher Verkaufsschlager geworden, weil sie modular konzipiert ist. Farbe und Form werden aus verschiedenen Mustern und vorgefertigten Modulen zusammengestellt. Optional lassen sich auch Hocker und Armlehnen dazu bestellen. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Am Gewinnspiel nehmen alle Teil, die einen Facebook-Beitrag von DELIFE vom April/Mai 2017 liken oder kommentieren. Seine Gewinnchancen kann man ganz einfach erhöhen indem man mehrere Beiträge kommentiert, ein Like hinterlässt, oder den Beitrag teilt. Jede der Aktionen bringt dem Teilnehmer ein weiteres Los im Lostopf. "
                        ],
                        [
                            "heading" => "",
                            "content" => "Auch der DELIFE-Blog kommt in diesem Jahr wieder zurück. Nach einer verlängerten Pause verlinkte DELIFE auf Facebook auf einen aktuellen Beitrag im hauseigenen Magazin. Über 1.500 Leser nach noch nicht mal 20 Std. sprechen definitiv für das Revival! "
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "30.11.2016",
                "headline" => "Amadora – So schön kann Upcycling sein! ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das Möbelunternehmen DELIFE bringt neue Möbelserie mit Altholz auf den Markt",
                            "quote" => "",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Mit der neuen Möbelserie Amadora präsentiert das Möbelunternehmen DELIFE massive Sideboards, Tische oder Lowboards aus verschiedenen recycelten Altholzsorten in zeitlos geradlinigen Designs.",
                            "content" => "„Mit Amadora möchten wir zeigen, dass Recycling und Upcycling bei Möbeln durchaus nicht immer im Vintage Stil daherkommen muss“, erklärt David Hofmann, Category Manager von DELIFE, „Die Wiederverwendung von wertvollen Materialien wie Holz ist heute so wichtig, aber auch schon so weit, dass auch der klassische, geradlinige Geschmack getroffen werden muss und kann.“ "
                        ],
                        [
                            "heading" => "Klassisch schönes Design trifft auf recycelte Althölzer in zwei wunderschönen Farben",
                            "content" => "Bei der Entwicklung der Amadora Serie wurden verschiedene Holzsorten zusammengestellt, die gemeinsam einen faszinierenden Farbverlauf kreieren und aus jedem Amadora Möbelstück ein einzigartiges Unikat machen. Ob in einem kolonialen, warmen Braunton oder in naturbelassener Farbgebung durch das edle und schnörkellose Design lassen sich alle Amadora Möbelstück ganz leicht mit vielen verschiedenen Einrichtungsstilen, egal ob klassisch oder Industrial Design kombinieren. Die angenehme Haptik des hochwertigen Altholzes kann viele Geschichten aus früheren Zeiten erzählen. Die einmalige Ausstrahlung massiver Möbel sorgt für eine warme, natürliche Atmosphäre in klassisch zeitlosem Charme. Die Möbelserie Amadora beweist, dass Möbelstücke aus recycelten Materialien heute in jedem Zuhause zu finden sein sollten. Denn sie zeigen nicht nur Verantwortungsbewusstsein und Respekt vor der Natur und zukünftigen Generationen, sie sehen dazu noch hervorragend aus und machen aus jedem Zimmer etwas ganz Besonderes. "
                        ],
                        [
                            "heading" => "Ob Esstisch oder Lowboard – Bei Amadora ist für jeden das Richtige Möbelstück dabei",
                            "content" => "Um eine außergewöhnlich gute Qualität zu gewährleisten, konzentrierte man sich bei der Konzeption von Amadora zunächst auf die Kernkompetenzen des Möbelunternehmens und kreierte eine Reihe von massiven Esstischen, Couchtischen, Lowboards und Sideboards, die durch ihre Geradlinigkeit den zeitlosen, aber immer auffallenden DELIFE Stil perfekt widerspiegeln."
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "22.07.2016",
                "headline" => "Clovis Modulsofas wachsen mit den Ansprüchen ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das Möbelunternehmen DELIFE präsentiert neue, modulare Produktserie ",
                            "quote" => "",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Mit seiner neuen, modularen Sofakreation Clovis verbindet das Möbelunternehmen DELIFE zeitlose Schönheit und anspruchsvolle Flexibilität durch intelligentes Möbeldesign perfekt miteinander. Denn durch sein Modulsystem passt sich Clovis einfach und unkompliziert allen individuellen Bedürfnissen an. Es kann vergrößert, ergänzt und ausgetauscht werden, um mit den persönlichen Ansprüchen der DELIFE Kunden effektiv mitzuwachsen.",
                            "content" => "„Dass das Leben sich immer schneller ändert, wissen wir alle nur zu gut“, sagt David Hofmann, Category Manager bei DELIFE „Wir ziehen viel öfter um, vergrößern oder verkleinern uns wieder und brauchen deshalb Möbel, die sich unserer aktuellen Lebenssituation anpassen. Mit Clovis haben wir ein Modulsofa kreiert, das nicht nur schön, sondern vor allem extrem flexibel ist.“ "
                        ],
                        [
                            "heading" => "Was ist das Besondere am Clovis Modulsystem?",
                            "content" => "Clovis besteht im Gegensatz zu vielen anderen unübersichtlichen Modulserien aus nur drei Hauptelementen, mit denen sich jedes individuelle Traumsofa mittels einfacher Steckverbindung zusammensetzen und auch wieder auseinandernehmen lässt. Durch zusätzliche Module wie Hocker und beidseitig montierbaren Armlehnen können alle Clovis Modelle ganz nach persönlichen Vorlieben weiter individualisiert werden. Selbstverständlich haben alle DELIFE Kunden auch die Wahl zwischen verschiedenen Farbvarianten und pflegeleichten Stoffen. Hofmann verrät: „Wir entwickeln ständig neue Ideen, wie wir Clovis noch individueller gestalten können und freuen uns immer, wenn sich unsere Kunden durch Anregungen und Kritik an diesem Entwicklungsprozess direkt beteiligen.“"
                        ],
                        [
                            "heading" => "Vom Grundmodell bis zur extravaganten Eigenkreation – Beim Modulsofa Clovis ist alles möglich",
                            "content" => "Um jedem Kunden einen ersten Eindruck zu vermitteln, was mit Clovis alles möglich ist, bietet DELIFE in seinem Online-Shop vier Grundmodelle, vom Ecksofa bis zur Wohnlandschaft XXL, an. Mit ein paar Klicks kann das Traumsofa unter diesen Varianten gesucht und gefunden werden. Wer sich sein Sofa aber ganz individuell erstellen will, einen zusätzlichen Hocker oder einfach ein Ersatzmodul ordern möchte, den berät das DELIFE Support-Team am Telefon, per Email oder im Livechat und erstellt im Anschluss ein individuelles Angebot. "
                        ],
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Weitere Informationen zum Clovis Modulsystem unter:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/clovis/sofaserie-clovis-big-sofa-informationen"
                        ]
                    )
                )
            ],
            [
                "date" => "03.11.2015",
                "headline" => "Live-Edge – Exklusive Baumkantenmöbel",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das Möbelunternehmen DELIFE präsentiert einzigartige Produktserie",
                            "quote" => "",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Mit seiner neuen Massivholzserie Live-Edge rückt das Möbelunternehmen DELIFE die einzigartige Schönheit der natürlichen Baumkante ganz in den kreativen Design-Mittelpunkt. Neben den beliebten Baumtischen sind nun auch Sideboards, Regale, Couchtische und viele weitere Designmöbel in der angesagten Live-Edge Optik zu haben. Jedes Möbelstück der Reihe wird durch die Verwendung der Baumkante zum unverwechselbaren Unikat. Durch die zusätzlichen Möglichkeiten zwischen vier Farben, einer Vielzahl verschiedener Designs und neuen Kombinationsmöglichkeiten zu wählen, erhält jeder Kunde aber noch weit mehr, nämlich ein ganz eigenes, ganz persönliches und einzigartiges Lieblingsstück.",
                            "content" => "„Durch den großen Erfolg unserer Baumtische haben wir schnell gemerkt, wie viel Potential in Möbeln mit Baumkante steckt“, sagt Martin Sailer-Arnold, Head of E-Commerce & IT von DELIFE „deshalb wollten wir unbedingt einen Schritt weitergehen und auch andere Möbel wie Fernsehtische oder sogar Stühle mit einer Baumkante kreieren. Unsere Kunden mögen unsere einzigartigen Produkte aus Massivholz. Besser als mit den außergewöhnlichen Baumkantendesigns, die wirklich jedes Möbelstück zum Unikat machen, kann man dem gar nicht Rechnung tragen.“"
                        ],
                        [
                            "heading" => "Was ist das Besondere an Live-Edge Baumkantenmöbeln?",
                            "content" => "Bei Baumkantenmöbeln folgen ausgewählte Flächen den natürlich geschwungenen Formen eines Baumstammes. Sie werden nicht gerade zugeschnitten und bleiben deshalb einzigartig und unverwechselbar. Keine Baumkante gleicht in Gestalt und Maserung der anderen. Zusätzlich geben natürliche Wachstumsrisse, Kerben und Astlöcher jedem Möbelstück einen ganz besonders individuellen, natürlich schönen Charakter. „Die unterschiedlichen Merkmale eines jeden Holzes werden von uns nicht entfernt oder angeglichen.“, erklärt Sailer-Arnold „denn genau die machen ja die Einmaligkeit und Schönheit jedes Live-Edge Produktes aus. Würden wir unsere Live-Edge Reihe normieren, würden wir ihr diese ganz besondere Kraft und Ausstrahlung sofort wieder nehmen.“ "
                        ],
                        [
                            "heading" => "Bei Live-Edge Möbeln haben DELIFE Kunden immer die Wahl ",
                            "content" => "Neben dem besonderen Baumkanten-Design sind es vor allem die durchdachten Wahlmöglichkeiten, die die Live-Edge Möbelserie so besonders machen. Keine andere Baumkantenmöbel Serie bittet u.a. so viele verschiedene Designs, Größen oder die vier erlesenen Farbtöne Gebleicht, Natur, Tabak oder mattes Braun. Bei den beliebten Live-Edge Baumtischen kann sogar zwischen zwei verschiedenen Tischplattenstärken und drei verschiedenen pulverbeschichteten Metallgestellen gewählt werden, je nachdem, ob man einen eleganten oder doch lieber rustikaleren Stil bevorzugt. „Wir möchten, dass unsere Kunden nicht nur ein Unikat – Möbelstück erhalten, sondern ihr ganz eigenes, unverwechselbares Lieblingsmöbelstück finden.“, freut sich Sailer-Arnold, „Mit Live-Edge haben wir eine Möbelserie geschaffen, die das endlich möglich macht.“ "
                        ],
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Alle Informationen über die DELIFE Live-Edge Möbelserie mit einzigartigen Baumkanten finden Sie auf folgenden Seiten:",
                            "linkUrl" => "https://www.delife.eu/moebelserie/live-edge/alles-infos-zu-live-edge"
                        ],
                        [
                            "linkTitle" => "",
                            "linkUrl" => "Delife.eu/Lifestyle-Wohnwelten/Baumkantenmoebel"
                        ]
                    )
                )
            ],
            [
                "date" => "21.07.2015",
                "headline" => "Aus Verantwortung!",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Das Möbelunternehmen DELIFE ist FSC®-zertifiziert",
                            "quote" => "",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Nach einer gründlichen Prüfung und Validierung wurde die DELIFE GmbH, bekannt für exklusive Wohnideen und außergewöhnlichen Lifestyle, mit dem FSC® Gütesiegel ausgezeichnet. DELIFE bezieht seine wertvollen Massivholzmöbel aus Akazie und Sheesham aus nachhaltiger, naturschonender Forstwirtschaft, die alle international gültigen FSC®-Prinzipien und Kriterien ausgezeichnet erfüllt. ",
                            "content" => "„Wir sind sehr stolz auf unsere FSC®-Zertifizierung“, sagt DELIFE Head of E-Commerce & IT Martin Sailer-Arnold, „als Onlinehändler für Massivholzmöbel achten wir seit der Gründung unseres Unternehmens darauf, dass wir nur Produkte aus nachhaltiger Forstwirtschaft verkaufen. Jetzt haben wir auch die offizielle Bestätigung für unsere Bemühungen durch den FSC®. Unsere Kunden haben jetzt 100 % Sicherheit, dass sie beim Kauf eines unserer Sheesham- oder Akazienmöbelstücke auch im Sinne des Naturschutzes alles richtig gemacht haben.“ Das Produktsortiment FSC®-zertifizierter Massivholzmöbel soll bei DELIFE in den nächsten Jahren immer weiter ausgebaut werden. Dazu Sailer-Arnold: „Wir sind ein Möbelunternehmen, das auf ausgezeichnete Qualität und hervorragende Verarbeitung setzt. Dafür braucht es gutes Holz aus gesunden und nachhaltig bewirtschafteten Wäldern und hochqualifizierte Mitarbeiter, die für ihre Leistung gerecht bezahlt werden. Sonst kann dieses Niveau einfach nicht gehalten werden. Wir stehen gerade als Verkäufer in der Verantwortung, unseren heutigen Kunden nachhaltige Produkte zu bieten, um dies auch in Zukunft überhaupt tun zu können. Deshalb machen wir uns stark für den Umweltschutz und unterstützen die Anliegen des FSC® voll und ganz.“ "
                        ],
                        [
                            "heading" => "",
                            "content" => "Neben den FSC®-zertifizierten Produkten gibt es bei DELIFE nun auch eine eigens erstellte Seite zum Thema, die über die Arbeit des FSC®, seine Prinzipien und die unterschiedlichen Labels informiert. „Unsere Kunden sollen ganz genau wissen, was sie kaufen“, stellt Sailer-Arnold klar, „und vielleicht können wir ja sogar den ein oder anderen zum Mitmachen anregen.“ "
                        ],
                        [
                            "heading" => "Der FSC® – Gemeinsam für Wälder und Menschen",
                            "content" => "Seit 1993 hat es sich der FSC® (Forest Stewardship Council) zur Aufgabe gemacht, weltweit eine nachhaltige Verbesserung der Waldbewirtschaftung zum dauerhaften Wohl von Natur und der an der Holzverarbeitung beteiligten Arbeiter, Familien und Gemeinden zu erreichen. In der gemeinnützigen Organisation arbeiten Umwelt- und Sozialorganisationen Hand in Hand mit fortschrittlichen und verantwortungsbewussten Forstbetrieben, holzverarbeitenden Unternehmen und Lieferanten zusammen, um Naturschutz und wirtschaftlichen Erfolg für alle gerecht und langfristig zu verbinden. Nach den 10 FSC®-Prinizpien zur nachhaltigen Forstwirtschaft werden Produkte, die aus Holz von schonend bewirtschafteten Wäldern stammen, mit dem FSC® Gütesiegel ausgezeichnet. Grundvorausetzung einer solchen Auszeichnung ist, dass jeder Teil der Wertschöpfungskette, von der Forstwirtschaft bis zum Händler, nach einer gründlichen Prüfung FSC®-zertifiziert worden ist. "
                        ]
                    ),
                    "footer" => array(
                        [
                            "linkTitle" => "Die DELIFE Seite zum Thema FSC®: ",
                            "linkUrl" => "https://www.delife.eu/info/fsc"
                        ]
                    )
                )
            ],
            [
                "date" => "23.03.2015",
                "headline" => "Königliche Ostern bei DELIFE ",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Klein, aber mit Stil - so präsentiert das Möbelunternehmen DELIFE seine diesjährige Osteraktion",
                            "quote" => "Mit einer exklusiven Auswahl der beliebtesten Stühle, Sofas und Hocker hat sich DELIFE die holländische Tradtion des Möbel-Ostermontag zum Vorbild genommen und bietet in einer einmaligen Aktion bis zum 06.04.2015 Rabatte bis zu 40%! ",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Eine holländische Tradition kommt nach Deutschland – Der Möbel-Ostermontag!",
                            "content" => "Im Gegensatz zu Deutschland haben die Niederlande ihre Geschäfte am Ostermontag geöffnet. Besonders die sogenannten Möbelboulevards machen dann sehr gute Umsätze. Denn an diesem Tag werden seit den 80er Jahren bevorzugt Möbel gekauft. Durch besondere Werbeaktionen hat sich diese Tradition in den Niederlanden so gefestigt, dass sie fast schon zum festen Osterbrauchtum gehört. Großstädte wie Rotterdam machen Touristen auf ihren offiziellen Seiten auf diesen Event besonders aufmerksam und empfehlen den Ostermontag explizit, um sich auf die aufregende Suche nach besonders guten Möbelangeboten zu machen."
                        ],
                        [
                            "heading" => "DELIFE nimmt sich zu Ostern die Niederlande zum Vorbild",
                            "content" => "„Möbel besonders über die Osterfeiertage zu verkaufen und vielleicht sogar zu einer Tradition zu machen, war für uns als Online – Möbelshop, der keine Probleme mit Öffnungszeiten hat, natürlich eine sehr schöne Anregung, die wir gern aufgenommen haben.“, sagt Head of E-Commerce & IT Martin Sailer-Arnold, „ Natürlich wollten wir, ganz in der holländischen Tradition, unseren Kunden mit einem tollen Angebot einen angenehmen Kaufanreiz bieten.“"
                        ],
                        [
                            "heading" => "Bis zu 40 % Rabatt auf ausgewählte Artikel bis zum 06.04.2015",
                            "content" => "Aus diesem Grund hat DELIFE eine exklusive Auswahl der beliebtesten Artikel bis zum 06.04.2015 um bis zu 40 % im Preis gesenkt. Ob Sofa, Hocker oder Stühle für die Ostertafel - bei der DELIFE Osteraktion hat der Kunde Gelegenheit, sich in der Osterzeit ganz unbeschwert vielleicht ein neues Sofa zu gönnen. Dazu Martin Sailer-Arnold: „Wir hoffen, dass diese Aktion bei unseren Kunden ankommt und vielleicht gemeinsam mit uns eine neue deutsche Ostertradition kreieren.“ "
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "08.03.2015",
                "headline" => "Das Unternehmen im Profil",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "Über DELIFE",
                            "quote" => "DELIFE, der Online-Shop für stilvolle Wohnideen und außergewöhnlichen Lifestyle bietet exklusive Trendmöbel, die selbst höchste Ansprüche an gehobenes Wohnambiente perfekt erfüllen! Gegründet im Jahr 2008, haben wir unsere Erfahrungen in der Möbelbranche mit Leidenschaft und großem Engagement in die Welt des World Wide Web getragen. Auf der Basis unserer jahrelangen Tätigkeit im Segment des Großhandels sowie vertraut mit dem Einrichten renommierter Möbelhäuser, wurde in uns die Passion entzündet, unsere zahlreichen Kunden an der Leidenschaft für außergewöhnliche Möbel aus allen Wohnbereichen teilhaben zu lassen. ",
                            "content" => "DELIFE steht für herausragende Möbel, einzigartige Wohnideen und ausgezeichneten Service. Wir wollen jeden Tag auf´s Neue mit höchster Qualität, kreativen Designs kombiniert mit exzellenter, umfangreicher Kundenbetreuung und schneller Lieferung überzeugen!"
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "",
                            "content" => "Daher ist es unserem 50-köpfigen Team ein besonderes Anliegen, Ihnen besondere Konditionen zu bieten, die den Kauf unserer einzigartigen Möbel zu einem echten Shopping-Erlebnis werden lässt. DELIFE bietet deshalb nicht nur eine Preisgarantie, sondern, für uns selbstverständlich, auch kostenlosen Versand & Rückversand, 5% Preisnachlass bei Selbstabholung und 2 % Rabatt bei Vorauszahlung, sowie Rechnung und Ratenkauf."
                        ],
                        [
                            "heading" => "",
                            "content" => "DELIFE l(i)ebt Möbeltrends und Wohnideen! Genau wie unsere mehr als 200.000 Kunden! Denn wir sind erst zufrieden, wenn Sie begeistert sind! "
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],
            [
                "date" => "05.02.2015",
                "headline" => "CREATE YOUR KINGDOM!",

                "article" => array(
                    "head" => array(
                        [
                            "heading" => "DELIFE präsentiert sich mit neuem Internetauftritt",
                            "quote" => "Aufwändiger, exklusiver und vor allem noch benutzerfreundlicher – so präsentiert sich das Möbelunternehmen DELIFE ab heute mit neuem Internetauftritt seinen Kunden. Mit innovativem Responsive Design, neuem Logo, einem frischen Slogan und einer hochwertigen Bildersprache geht der Online-Händler neue Wege in der Möbelbranche.",
                            "content" => ""
                        ]
                    ),
                    "body" => array(
                        [
                            "heading" => "Responsive Design und größere Bilder – Für ein besseres Shoppingerlebnis",
                            "content" => "„Unsere Lifestyle Möbel unterscheiden sich durch ihr besonderes Design stark vom Rest des Marktes“, sagt Martin Sailer-Arnold, Head of E-Commerce & IT bei DELIFE, „deshalb wollen wir unsere Produkte auch anders präsentieren. Mit noch größeren, stimmungsvollen Bildern, einer intuitiven Bedienbarkeit durch noch mehr Übersichtlichkeit und einem endgeräteoptimierten Design werden wir mit unserem neuen Shop-Layout noch mehr Menschen ein einmaliges Shoppingerlebnis bereiten und ihnen helfen, sich Ihr Zuhause ganz individuell und einzigartig einzurichten.“ "
                        ],
                        [
                            "heading" => "CREATE YOUR KINGDOM – Der neue DELIFE Slogan",
                            "content" => "Ganz in diesem Sinne ist auch der neue Slogan „CREATE YOUR KINGDOM“ zu verstehen. Dazu Sailer-Arnold: „Wir haben nach einem Claim gesucht, der unsere Firmenphilosophie widerspiegelt. Jeder kann sich mit unseren Möbeln sein eigenes und persönliches Paradies schaffen, und zwar fernab von 0815 oder unbezahlbaren Preisen. Egal, wer man ist, woher man kommt oder welchen Stil man bevorzugt.“ "
                        ],
                        [
                            "heading" => "Die neue, aufwändig inszenierte Fotostrecke",
                            "content" => "auf der DELIFE Startseite unterstreicht diesen Anspruch mit einem frechen Augenzwinkern. Vom Luxus-Punk mit Familie über die Lady im besten Alter mit dem außergewöhnlichen Hobby – mit dem neuen Online-Auftritt von DELIFE findet jetzt jeder noch besser und noch schneller genau die Möbel, die am besten zu seiner Persönlichkeit und seinem Zuhause passen! "
                        ]
                    ),
                    "footer" => array(
                        "linkTitle" => "",
                        "linkUrl" => ""
                    )
                )
            ],

        );

        $pressematerialien = json_encode($pressematerial);
        return view('pressebereich', [
            "materialien" => $pressematerialien,
            "redaktionelle" => $redaktionelle,
            "pressemitteilungen" => $pressemitteilungen
        ]);
    }
}
