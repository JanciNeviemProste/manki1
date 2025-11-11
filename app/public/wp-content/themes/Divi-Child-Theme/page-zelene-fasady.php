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

    <!-- Team Section -->
    <section class="team">
        <div class="team__container">
            <h2 class="team__title">Realizačný tím expertov</h2>
            <p class="team__subtitle">
                Náš multidisciplinárny tím špičkových odborníkov zaručuje komplexnú realizáciu
                zelených fasád od návrhu až po dlhodobý servis.
            </p>

            <div class="team__grid">
                <!-- Ján Sabol -->
                <div class="team-card">
                    <div class="team-card__image">
                        <div class="team-card__placeholder"></div>
                    </div>
                    <h3 class="team-card__name">Ing. Ján Sabol</h3>
                    <p class="team-card__role">CEO a zakladateľ MANKI</p>
                    <p class="team-card__desc">
                        Celkové projektové riadenie a koordinácia od návrhu po odovzdanie.
                        6+ rokov skúseností s výškovými prácami a komplexnými projektami.
                    </p>
                    <div class="team-card__badges">
                        <span class="team-card__badge">OOPP revízny technik</span>
                        <span class="team-card__badge">Projektový manažment</span>
                    </div>
                </div>

                <!-- Miroslav Hanečák -->
                <div class="team-card">
                    <div class="team-card__image">
                        <div class="team-card__placeholder"></div>
                    </div>
                    <h3 class="team-card__name">Ing. Miroslav Hanečák</h3>
                    <p class="team-card__role">Projektový manažér</p>
                    <p class="team-card__desc">
                        Technická príprava, koordinácia inštalácie a stavebný dozor.
                        Certifikáty v zváraní a elektrotechnike.
                    </p>
                    <div class="team-card__badges">
                        <span class="team-card__badge">Zváranie</span>
                        <span class="team-card__badge">Elektrotechnika §22</span>
                    </div>
                </div>

                <!-- Daniel Ďugel -->
                <div class="team-card">
                    <div class="team-card__image">
                        <div class="team-card__placeholder"></div>
                    </div>
                    <h3 class="team-card__name">Ing. Daniel Ďugel, PhD.</h3>
                    <p class="team-card__role">Statik a akademický špecialista</p>
                    <p class="team-card__desc">
                        Statické výpočty a posúdenie nosných konštrukcií. Výskum v oblasti
                        dynamiky stavieb na Žilinskej univerzite.
                    </p>
                    <div class="team-card__badges">
                        <span class="team-card__badge">PhD. statika</span>
                        <span class="team-card__badge">UNIZA</span>
                    </div>
                </div>

                <!-- Dušan Tichý -->
                <div class="team-card">
                    <div class="team-card__image">
                        <div class="team-card__placeholder"></div>
                    </div>
                    <h3 class="team-card__name">Ing. Dušan Tichý</h3>
                    <p class="team-card__role">Autorizovaný statik</p>
                    <p class="team-card__desc">
                        Projektová dokumentácia, stavebné povolenia a praktické riešenia.
                        Autorizácia SKSI pre pozemné stavby.
                    </p>
                    <div class="team-card__badges">
                        <span class="team-card__badge">SKSI autorizácia</span>
                        <span class="team-card__badge">Pozemné stavby</span>
                    </div>
                </div>

                <!-- Darina Funtíková -->
                <div class="team-card">
                    <div class="team-card__image">
                        <div class="team-card__placeholder"></div>
                    </div>
                    <h3 class="team-card__name">Darina Funtíková</h3>
                    <p class="team-card__role">Záhradníčka, POLYDAF s.r.o.</p>
                    <p class="team-card__desc">
                        Výber a výsadba rastlín, návrh a inštalácia závlahových systémov.
                        Desaťročia skúseností so zelenými strechami.
                    </p>
                    <div class="team-card__badges">
                        <span class="team-card__badge">Závlahové systémy</span>
                        <span class="team-card__badge">Zelené strechy</span>
                    </div>
                </div>

                <!-- Michal Vavrík -->
                <div class="team-card">
                    <div class="team-card__image">
                        <div class="team-card__placeholder"></div>
                    </div>
                    <h3 class="team-card__name">Ing. Michal Vavrík</h3>
                    <p class="team-card__role">Dodávateľ substrátov</p>
                    <p class="team-card__desc">
                        Špecializácia na organické substráty pre vertikálne výsadby.
                        Certifikovaný výrobca kompostu, Kompostujme.sk.
                    </p>
                    <div class="team-card__badges">
                        <span class="team-card__badge">Organické substráty</span>
                        <span class="team-card__badge">Cirkulárna ekonomika</span>
                    </div>
                </div>

                <!-- Matej Jasenka -->
                <div class="team-card">
                    <div class="team-card__image">
                        <div class="team-card__placeholder"></div>
                    </div>
                    <h3 class="team-card__name">Ing. Matej Jasenka, PhD.</h3>
                    <p class="team-card__role">Krajinný architekt</p>
                    <p class="team-card__desc">
                        Architektonicko-priestorový návrh a rastlinná kompozícia.
                        Autorizovaný architekt Slovenskej komory architektov.
                    </p>
                    <div class="team-card__badges">
                        <span class="team-card__badge">SKA autorizácia</span>
                        <span class="team-card__badge">Udržateľná architektúra</span>
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
                    <div class="process__time">5-7 dní | 500-1500 €</div>
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