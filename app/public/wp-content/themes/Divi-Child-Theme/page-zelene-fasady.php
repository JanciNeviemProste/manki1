<?php
/**
 * Template Name: Zelené fasády - Service Page
 * Description: Premium template for Green Facades service page
 *
 * @package Divi-Child-Theme
 */

get_header();

?>

<div id="main-content" class="green-facades-premium">

    <!-- Premium Hero Section -->
    <section class="hero">
        <div class="hero__background"></div>
        <div class="hero__container">
            <div class="hero__content">
                <h1 class="hero__title">Zelené fasády pre modernú architektúru</h1>
                <p class="hero__subtitle">
                    Transformujte vašu budovu na živý ekosystém, ktorý prináša merateľné ekonomické
                    a ekologické benefity. Znížte náklady na energie, zlepšite mikroklímu a zvýšte
                    hodnotu nehnuteľnosti s našimi certifikovanými zelenými fasádami.
                </p>
                <div class="hero__buttons">
                    <a href="#co-su-zelene-fasady" class="hero__btn hero__btn--primary">Čo sú zelené fasády?</a>
                    <a href="#preco-im-dat-zelenu" class="hero__btn hero__btn--secondary">Prečo im dať zelenú?</a>
                </div>
            </div>
            <div class="hero__image">
                <div class="hero__image-placeholder"></div>
            </div>
        </div>
    </section>

    <!-- Tabs Section - Naša ponuka -->
    <section class="tabs-section">
        <div class="tabs-section__container">
            <h2 class="tabs-section__title">Naša ponuka zelených riešení</h2>

            <div class="tabs">
                <div class="tabs__nav">
                    <button class="tabs__button tabs__button--active" data-tab="tab1">
                        Čo sú zelené fasády?
                    </button>
                    <button class="tabs__button" data-tab="tab2">
                        Prečo im dať zelenú?
                    </button>
                </div>

                <div class="tabs__content">
                    <!-- Tab 1: Čo sú zelené fasády -->
                    <div id="tab1" class="tabs__panel tabs__panel--active">
                        <div class="tabs__panel-inner">
                            <div class="tabs__image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/zelene-fasady-hero.jpg"
                                     alt="Zelené fasády" class="tabs__img">
                            </div>
                            <div class="tabs__text">
                                <h3 class="tabs__heading" id="co-su-zelene-fasady">Čo sú zelené fasády?</h3>
                                <p class="tabs__intro">
                                    Zelené fasády predstavujú integrálnu súčasť modernej architektúry.
                                    Nejde len o trend, ale o funkčné riešenie prinášajúce merateľné benefity
                                    pre budovy, ich užívateľov aj mestské prostredie. Vegetácia pôsobí ako
                                    prirodzená izolačná a ochranná vrstva.
                                </p>
                                <ul class="tabs__list">
                                    <li class="tabs__list-item">
                                        <strong>Tepelný komfort</strong> - menej prehrievania v lete,
                                        menej tepelných strát v zime
                                    </li>
                                    <li class="tabs__list-item">
                                        <strong>Akustické podmienky</strong> - tlmenie zvuku z ulice
                                        a zníženie hluku v interiéri
                                    </li>
                                    <li class="tabs__list-item">
                                        <strong>Vizuálne a psychické pôsobenie</strong> - redukcia stresu,
                                        zlepšenie estetiky budovy
                                    </li>
                                    <li class="tabs__list-item">
                                        <strong>Mikroklíma</strong> - zvýšenie vlhkosti vzduchu,
                                        čistenie ovzdušia od prachových častíc
                                    </li>
                                    <li class="tabs__list-item">
                                        <strong>Technický návrh na mieru</strong> - zohľadnenie charakteru budovy,
                                        rozpočtu a dlhodobej údržby
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Prečo im dať zelenú -->
                    <div id="tab2" class="tabs__panel">
                        <div class="tabs__panel-inner">
                            <div class="tabs__image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/system-modularne.jpg"
                                     alt="Benefity zelených fasád" class="tabs__img">
                            </div>
                            <div class="tabs__text">
                                <h3 class="tabs__heading" id="preco-im-dat-zelenu">Prečo im dať zelenú?</h3>
                                <p class="tabs__intro">
                                    Investícia do zelených fasád prináša komplexné benefity, ktoré významne
                                    prevyšujú počiatočné náklady. Od okamžitých úspor na energiách až po
                                    dlhodobé zvýšenie hodnoty nehnuteľnosti.
                                </p>
                                <ul class="tabs__list">
                                    <li class="tabs__list-item">
                                        <strong>Energetické úspory</strong> - 20-40% zníženie nákladov
                                        na vykurovanie a chladenie
                                    </li>
                                    <li class="tabs__list-item">
                                        <strong>Lepšia mikroklíma a vzduch</strong> - zachytávanie prachu,
                                        zvyšovanie vlhkosti, ochladzovanie okolia
                                    </li>
                                    <li class="tabs__list-item">
                                        <strong>Akustický komfort</strong> - redukcia hluku v nízkych
                                        až stredných frekvenciách
                                    </li>
                                    <li class="tabs__list-item">
                                        <strong>Ochrana budovy</strong> - pred UV žiarením, vetrom a dažďom,
                                        predĺženie životnosti fasády o 15+ rokov
                                    </li>
                                    <li class="tabs__list-item">
                                        <strong>Estetika a prestíž</strong> - moderný ekologický vzhľad,
                                        zvýšenie hodnoty nehnuteľnosti o 5-15%
                                    </li>
                                    <li class="tabs__list-item">
                                        <strong>Biodiverzita a ESG</strong> - podpora hmyzu a vtáctva,
                                        BREEAM/LEED certifikácie, zelené financovanie
                                    </li>
                                    <li class="tabs__list-item">
                                        <strong>Návratnosť investície</strong> - ROI 5-10 rokov,
                                        vyššia atraktivita pre nájomníkov
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Systems and Products Section -->
    <section class="systems">
        <div class="systems__container">
            <h2 class="systems__title">Systémy a produkty</h2>
            <p class="systems__subtitle">
                Vyberáme riešenie podľa charakteru budovy, rozpočtu a požadovaného efektu.
                Od jednoduchých popínavých systémov až po technologicky pokročilé hydroponické riešenia.
            </p>

            <div class="systems__grid">
                <!-- System 1: Popínavé systémy -->
                <div class="system-card">
                    <div class="system-card__icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 4C13.5 4 5 12.5 5 23C5 33.5 13.5 42 24 42C34.5 42 43 33.5 43 23C43 12.5 34.5 4 24 4Z" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 12V36M16 20L24 28L32 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="system-card__name">Popínavé systémy</h3>
                    <p class="system-card__subtitle">Green façades</p>
                    <p class="system-card__desc">
                        Najjednoduchší a najekonomickejší variant. Popínavé rastliny prirodzene obrastajú
                        lanové alebo mrežové konštrukcie. Fasáda postupne zazelenie a rokmi zosilňuje svoj efekt.
                    </p>
                    <div class="system-card__details">
                        <div class="system-card__detail">
                            <strong>Údržba:</strong> minimálna – rez rastlín, kontrola kotví
                        </div>
                        <div class="system-card__detail">
                            <strong>Životnosť:</strong> konštrukcia 30+ rokov
                        </div>
                        <div class="system-card__detail">
                            <strong>Rastliny:</strong> brečtan, zemolez, vistéria, pavinič, plamienok
                        </div>
                        <div class="system-card__detail">
                            <strong>Certifikácie:</strong> BREEAM Biodiversity, LEED Sustainable Sites
                        </div>
                    </div>
                </div>

                <!-- System 2: Modulárne systémy -->
                <div class="system-card">
                    <div class="system-card__icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="6" y="6" width="16" height="16" stroke="currentColor" stroke-width="2"/>
                            <rect x="26" y="6" width="16" height="16" stroke="currentColor" stroke-width="2"/>
                            <rect x="6" y="26" width="16" height="16" stroke="currentColor" stroke-width="2"/>
                            <rect x="26" y="26" width="16" height="16" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3 class="system-card__name">Modulárne systémy</h3>
                    <p class="system-card__subtitle">Living walls</p>
                    <p class="system-card__desc">
                        Moderné panely s integrovaným substrátom a závlahou prinášajú okamžitý vizuálny efekt.
                        Ideálne pre reprezentatívny vzhľad budovy.
                    </p>
                    <div class="system-card__details">
                        <div class="system-card__detail">
                            <strong>Údržba:</strong> pravidelný servis závlahy, výživa rastlín
                        </div>
                        <div class="system-card__detail">
                            <strong>Životnosť:</strong> moduly 15-20 rokov, rastliny 5-10 rokov
                        </div>
                        <div class="system-card__detail">
                            <strong>Rastliny:</strong> bergénia, konvalinka, levanduľa, rozchodník, paprade
                        </div>
                        <div class="system-card__detail">
                            <strong>Certifikácie:</strong> LEED Water Efficiency, BREEAM Ecology
                        </div>
                    </div>
                </div>

                <!-- System 3: Hydroponické systémy -->
                <div class="system-card">
                    <div class="system-card__icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 6L30 18H18L24 6Z" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 20H36V38C36 40 34 42 32 42H16C14 42 12 40 12 38V20Z" stroke="currentColor" stroke-width="2"/>
                            <path d="M18 28H30M18 34H30" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3 class="system-card__name">Hydroponické systémy</h3>
                    <p class="system-card__subtitle">Najpokročilejšie riešenie</p>
                    <p class="system-card__desc">
                        Technologicky najpokročilejšie riešenie. Rastliny rastú bez pôdy so automatickou
                        závlahou a živinami. Stabilný rast a celoročný efekt.
                    </p>
                    <div class="system-card__details">
                        <div class="system-card__detail">
                            <strong>Údržba:</strong> odborný servis – čerpadlá, filtre, živiny
                        </div>
                        <div class="system-card__detail">
                            <strong>Životnosť:</strong> moduly 20+ rokov, technika 5-10 rokov
                        </div>
                        <div class="system-card__detail">
                            <strong>Rastliny:</strong> heuchera, rozchodník, skalnice, materina dúška
                        </div>
                        <div class="system-card__detail">
                            <strong>Certifikácie:</strong> LEED Energy & Atmosphere, BREEAM Health
                        </div>
                    </div>
                </div>

                <!-- System 4: Hybridné riešenia -->
                <div class="system-card">
                    <div class="system-card__icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="18" stroke="currentColor" stroke-width="2"/>
                            <path d="M24 6V24L36 30" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="24" cy="24" r="3" fill="currentColor"/>
                        </svg>
                    </div>
                    <h3 class="system-card__name">Hybridné riešenia</h3>
                    <p class="system-card__subtitle">Kombinácia výhod</p>
                    <p class="system-card__desc">
                        Kombinujú výhody popínavých a modulárnych systémov. Využívajú lacnejšie plochy
                        s popínavými rastlinami a dopĺňajú ich modulárnymi prvkami.
                    </p>
                    <div class="system-card__details">
                        <div class="system-card__detail">
                            <strong>Údržba:</strong> nižšia náročnosť než plne modulárny systém
                        </div>
                        <div class="system-card__detail">
                            <strong>Životnosť:</strong> konštrukcia 30+ rokov
                        </div>
                        <div class="system-card__detail">
                            <strong>Rastliny:</strong> kombinácia popínavých a trvaliek
                        </div>
                        <div class="system-card__detail">
                            <strong>Certifikácie:</strong> flexibilné pre BREEAM aj LEED
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MANKI Team Section -->
    <section class="manki-team">
        <div class="manki-team__container">
            <h2 class="manki-team__title">MANKI Tím</h2>
            <p class="manki-team__intro">
                Predstavujeme ľudí, ktorí nesú zodpovednosť za každý krok.
                Za projektom stojí tím odborníkov na výškové práce, statiku, architektúru, záhradníctvo, substráty a závlahy.
                Každú fázu vedie zodpovedný špecialista od návrhu po montáž a servis. Výsledkom je jasná zodpovednosť,
                kontrola kvality a dlhodobo funkčné riešenie.
            </p>

            <!-- Ján Sabol -->
            <div class="manki-member">
                <div class="manki-member__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/jan-sabol.jpg" alt="Ing. Ján Sabol">
                </div>
                <div class="manki-member__content">
                    <h3 class="manki-member__name">Ing. Ján Sabol</h3>
                    <p class="manki-member__role">CEO a zakladateľ MANKI</p>

                    <div class="manki-member__section">
                        <h4>Stručná charakteristika</h4>
                        <p>
                            CEO a zakladateľ MANKI s vyše 10-ročnou praxou vo výškových prácach. Zameriava sa na náročné
                            technické realizácie a údržbu objektov. Jeho prístup stojí na zodpovednosti, precíznom návrhu,
                            kvalitnej realizácii a udržateľnosti.
                        </p>
                    </div>

                    <div class="manki-member__section">
                        <h4>Úloha v projekte zelených fasád</h4>
                        <p>
                            Zastrešuje riadenie projektu od návrhu a komunikácie s investorom až po realizáciu a odovzdanie.
                            Zlaďuje prácu statika, architekta, záhradníka a výškových pracovníkov do jedného funkčného celku.
                            Zodpovedá za výber partnerov a nastavenie dlhodobého servisu.
                        </p>
                    </div>

                    <div class="manki-member__section">
                        <h4>Profesijné zázemie</h4>
                        <ul class="manki-member__credentials">
                            <li>Zakladateľ a CEO spoločnosti MANKI, s. r. o.</li>
                            <li>Revízny technik OOPP pre práce vo výškach</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Miroslav Hanečák -->
            <div class="manki-member">
                <div class="manki-member__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/miroslav-hanecak.jpg" alt="Ing. Miroslav Hanečák">
                </div>
                <div class="manki-member__content">
                    <h3 class="manki-member__name">Ing. Miroslav Hanečák</h3>
                    <p class="manki-member__role">CTO - Projektový manažér</p>

                    <div class="manki-member__section">
                        <h4>Stručná charakteristika</h4>
                        <p>
                            CTO MANKI so špecializáciou na zváranie a elektrotechniku. Držiteľ štátnych skúšok zo zvárania
                            a osvedčenia samostatného elektrotechnika podľa § 22 vyhlášky 508/2009 Z. z. Zameriava sa
                            na technickú prípravu, kontrolu realizácie a bezpečný priebeh montážnych prác.
                        </p>
                    </div>

                    <div class="manki-member__section">
                        <h4>Úloha v projekte zelených fasád</h4>
                        <p>
                            Zodpovedá za technickú prípravu, koordináciu montáže, kontrolu kvality a dohľad nad realizáciou.
                            Prepája výstupy statika, architekta a záhradníka, aby práce prebiehali efektívne, bezpečne
                            a v súlade s dokumentáciou, čo zaručuje kvalitné prevedenie a dlhodobú funkčnosť.
                        </p>
                    </div>

                    <div class="manki-member__section">
                        <h4>Profesijné zázemie</h4>
                        <ul class="manki-member__credentials">
                            <li>CTO spoločnosti MANKI, s. r. o.</li>
                            <li>Štátne skúšky na zváranie (certifikované)</li>
                            <li>Osvedčenie samostatného elektrotechnika podľa § 22 vyhlášky 508/2009 Z. z.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Experts Section -->
    <section class="expert-team">
        <div class="expert-team__container">
            <h2 class="expert-team__title">Partneri a odborníci</h2>
            <p class="expert-team__subtitle">
                S MANKI spolupracujú špičkoví špecialisti v oblasti statiky, záhradnej architektúry,
                závlahových systémov a organických substrátov. Zabezpečujú kvalitu a dlhodobú funkčnosť
                každého projektu zelených fasád.
            </p>

            <!-- Daniel Ďugel -->
            <div class="expert-member">
                <div class="expert-member__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/daniel-dugel.jpg" alt="Ing. Daniel Ďugel, PhD.">
                </div>
                <div class="expert-member__content">
                    <h3 class="expert-member__name">Ing. Daniel Ďugel, PhD.</h3>
                    <p class="expert-member__role">Statik a akademický odborník na nosné konštrukcie</p>

                    <div class="expert-member__section">
                        <h4>Stručná charakteristika</h4>
                        <p>
                            Statik s PhD v odbore teória a konštrukcie inžinierskych stavieb (dynamika stavieb).
                            Zameriava sa na analýzu nosných systémov, správanie materiálov a návrh bezpečných detailov,
                            ktoré overuje aj experimentálnymi meraniami stability oceľových konštrukcií.
                        </p>
                    </div>

                    <div class="expert-member__section">
                        <h4>Úloha v projekte zelených fasád</h4>
                        <p>
                            V spolupráci s MANKI spracúva statické posudky a výpočty nosných častí zelených fasád.
                            Overuje dimenzovanie kotvenia a konštrukcií na zaťaženie vegetáciou, vetrom a klimatickými vplyvmi.
                            Jeho výstupy tvoria pevný základ bezpečného návrhu aj realizácie.
                        </p>
                    </div>

                    <div class="expert-member__section">
                        <h4>Profesijné zázemie</h4>
                        <ul class="expert-member__credentials">
                            <li>ProProjekt, spol. s r. o.</li>
                            <li>UNIZA – Stavebná fakulta, Katedra stavebnej mechaniky</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Darina Funtíková -->
            <div class="expert-member">
                <div class="expert-member__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/darina-funtikova.jpg" alt="Darina Funtíková">
                </div>
                <div class="expert-member__content">
                    <h3 class="expert-member__name">Darina Funtíková</h3>
                    <p class="expert-member__role">Záhradníčka a špecialistka na závlahové systémy – POLYDAF, s. r. o.</p>

                    <div class="expert-member__section">
                        <h4>Stručná charakteristika</h4>
                        <p>
                            Záhradníčka s dlhoročnou praxou v návrhoch, realizácii a údržbe okrasných aj úžitkových výsadieb.
                            V POLYDAF, s. r. o. sa so svojím tímom špecializuje na záhrady, výsadbu drevín, zakladanie trávnikov,
                            úpravy terénu, zelené strechy a automatické závlahy.
                        </p>
                    </div>

                    <div class="expert-member__section">
                        <h4>Úloha v projekte zelených fasád</h4>
                        <p>
                            V spolupráci s MANKI zabezpečuje výber rastlín, návrh a montáž závlahových systémov. Jej tím dohliada
                            na kondíciu vegetácie počas roka a riešenia prispôsobuje orientácii budovy, typu systému a klíme.
                            Vďaka skúsenostiam vytvára fasády, ktoré sú estetické, funkčné a trvácne.
                        </p>
                    </div>

                    <div class="expert-member__section">
                        <h4>Profesijné zázemie</h4>
                        <ul class="expert-member__credentials">
                            <li>POLYDAF, s. r. o. – realizácia a údržba zelene, automatické závlahy, zelené strechy</li>
                            <li>Dlhoročné skúsenosti s projektmi pre súkromných aj verejných investorov</li>
                            <li>Spolupráca s architektmi, developermi a mestskými inštitúciami</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Michal Vavrík -->
            <div class="expert-member">
                <div class="expert-member__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/michal-vavrik.jpg" alt="Ing. Michal Vavrík">
                </div>
                <div class="expert-member__content">
                    <h3 class="expert-member__name">Ing. Michal Vavrík</h3>
                    <p class="expert-member__role">Dodávateľ pestovateľských substrátov a kompostov</p>

                    <div class="expert-member__section">
                        <h4>Stručná charakteristika</h4>
                        <p>
                            Odborník na organické substráty, komposty a prírodné hnojivá. Vyvíja a vyrába pestovateľské zmesi
                            zamerané na kvalitu, udržateľnosť a princípy obehového hospodárstva. Substráty skladá tak, aby mali
                            stabilnú štruktúru a vyvážený pomer živín, vzdušnosti a vlhkosti.
                        </p>
                    </div>

                    <div class="expert-member__section">
                        <h4>Úloha v projekte zelených fasád</h4>
                        <p>
                            V spolupráci s MANKI zabezpečuje výber a dodávku substrátov pre vertikálne výsadby. So záhradným
                            architektom a realizačným tímom prispôsobuje zloženie substrátu potrebám rastlín a typu systému.
                            Jeho riešenia poskytujú fasádam zdravý základ a dlhodobú vitalitu porastu.
                        </p>
                    </div>

                    <div class="expert-member__section">
                        <h4>Profesijné zázemie</h4>
                        <ul class="expert-member__credentials">
                            <li>Kompostujme.sk – výrobca a dodávateľ certifikovaných kompostov a substrátov</li>
                            <li>Dlhodobá spolupráca s pestovateľmi, záhradnými centrami a realizačnými firmami</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Matej Jasenka -->
            <div class="expert-member">
                <div class="expert-member__image">
                    <div class="expert-member__placeholder">
                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none">
                            <rect width="200" height="200" fill="#0D3B2E"/>
                            <circle cx="100" cy="80" r="30" fill="#D4E8E1"/>
                            <path d="M50 180 Q50 120 100 120 Q150 120 150 180" fill="#D4E8E1"/>
                        </svg>
                    </div>
                </div>
                <div class="expert-member__content">
                    <h3 class="expert-member__name">Ing. Matej Jasenka, PhD.</h3>
                    <p class="expert-member__role">Autorizovaný krajinný a záhradný architekt</p>

                    <div class="expert-member__section">
                        <h4>Stručná charakteristika</h4>
                        <p>
                            Autorizovaný krajinný architekt s dlhoročnou praxou v navrhovaní verejných aj súkromných priestorov.
                            Spája dizajn s funkčnosťou a dôrazom na udržateľnosť. Venuje sa modrozeleným infraštruktúram,
                            sadovým úpravám a environmentálnym konzultáciám.
                        </p>
                    </div>

                    <div class="expert-member__section">
                        <h4>Úloha v projekte zelených fasád</h4>
                        <p>
                            V spolupráci s Manki navrhuje architektonické riešenie a kompozíciu rastlín. Výber vegetácie
                            prispôsobuje orientácii budovy, mikroklíme a typu systému. Navrhuje riešenia, ktoré sú technicky
                            premyslené, vizuálne atraktívne a ekologicky vyvážené.
                        </p>
                    </div>

                    <div class="expert-member__section">
                        <h4>Profesijné zázemie</h4>
                        <ul class="expert-member__credentials">
                            <li>Autorizovaný krajinný architekt (SKA)</li>
                            <li>Návrh verejných priestranstiev, parkov a zelenej infraštruktúry</li>
                            <li>Spolupráca s architektmi, developermi, mestami a inštitúciami</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Timeline (Original - visually updated) -->
    <section class="process">
        <div class="process__container">
            <h2 class="process__title">Proces realizácie</h2>
            <div class="process__timeline">
                <div class="process__step">
                    <div class="process__number">1</div>
                    <h3 class="process__step-title">Technická analýza</h3>
                    <div class="process__time">2-3 dni | Bezplatne</div>
                    <p class="process__desc">Obhliadka objektu, statické posúdenie, orientácia a infraštruktúra</p>
                </div>
                <div class="process__step">
                    <div class="process__number">2</div>
                    <h3 class="process__step-title">Návrh a vizualizácia</h3>
                    <div class="process__time">5-7 dní | Individuálna cena</div>
                    <p class="process__desc">Výber systému, dizajn, 3D vizualizácia, výber rastlín</p>
                </div>
                <div class="process__step">
                    <div class="process__number">3</div>
                    <h3 class="process__step-title">Cenová ponuka</h3>
                    <div class="process__time">24 hodín | Bezplatne</div>
                    <p class="process__desc">Detailný rozpočet, harmonogram prác, servisný plán</p>
                </div>
                <div class="process__step">
                    <div class="process__number">4</div>
                    <h3 class="process__step-title">Realizácia</h3>
                    <div class="process__time">2-8 týždňov</div>
                    <p class="process__desc">Príprava konštrukcie, montáž systému, výsadba rastlín</p>
                </div>
                <div class="process__step">
                    <div class="process__number">5</div>
                    <h3 class="process__step-title">Údržba a servis</h3>
                    <div class="process__time">Dlhodobo | SLA zmluva</div>
                    <p class="process__desc">Pravidelné kontroly, rez a tvarovanie, výživa a ochrana</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section - Single Card -->
    <section class="cta">
        <div class="cta__container">
            <div class="cta__card">
                <div class="cta__icon">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                        <circle cx="24" cy="24" r="23" stroke="currentColor" stroke-width="2"/>
                        <path d="M24 12v12l8 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="cta__title">Bezplatná konzultácia</h3>
                <p class="cta__desc">
                    Začnite vašu cestu k zelenej fasáde bezplatnou konzultáciou s našimi expertmi.
                    Zanalyzujeme váš projekt a navrhneme optimálne riešenie.
                </p>
                <a href="tel:+421907900614" class="cta__phone">+421 907 900 614</a>
                <p class="cta__note">Zavolajte nám a preberieme možnosti pre vašu budovu</p>
            </div>
        </div>
    </section>

    <!-- Page Content (if any from editor) -->
    <?php while ( have_posts() ) : the_post(); ?>
        <?php if ( get_the_content() ) : ?>
            <section class="page-content">
                <div class="page-content__container">
                    <?php the_content(); ?>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>

</div><!-- #main-content -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tabs functionality
    const tabButtons = document.querySelectorAll('.tabs__button');
    const tabPanels = document.querySelectorAll('.tabs__panel');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.dataset.tab;

            // Remove active class from all buttons and panels
            tabButtons.forEach(btn => btn.classList.remove('tabs__button--active'));
            tabPanels.forEach(panel => panel.classList.remove('tabs__panel--active'));

            // Add active class to clicked button and corresponding panel
            this.classList.add('tabs__button--active');
            document.getElementById(targetTab).classList.add('tabs__panel--active');
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>

<?php

get_footer();