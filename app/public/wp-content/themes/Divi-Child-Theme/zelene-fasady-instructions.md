# Zelené fasády - Implementačné Inštrukcie

## 📁 1. INŠTRUKCIE PRE NAHRANIE OBRÁZKOV

### Krok 1: Vytvorte priečinok pre obrázky
Vytvorte nasledujúcu štruktúru priečinkov:
```
/app/public/wp-content/themes/Divi-Child-Theme/assets/images/
```

### Krok 2: Nahrajte obrázky z priečinka fotky-zelenefasady
Skopírujte vybrané obrázky z `C:\Users\janst\Local Sites\manki\fotky-zelenefasady\` do vytvorených priečinkov s nasledujúcimi názvami:

#### Potrebné obrázky a odporúčané súbory:

**Hero sekcia:**
- `zelene-fasady-hero.jpg` - Hlavný obrázok (použite impressive veľkú budovu s bohatou zeleňou)
  - Odporúčaný: `pexels-chris-schippers-421927-952114.jpg` alebo podobný

**Systémy (4 obrázky):**
- `system-popinave.jpg` - Popínavé fasády
  - Odporúčaný: obrázok s brečtanom alebo vistériou
- `system-modularne.jpg` - Modulárne Living Walls
  - Odporúčaný: `pexels-min-an-1230665.jpg` alebo podobný
- `system-hydroponicke.jpg` - Hydroponické systémy
  - Odporúčaný: moderný systém bez pôdy
- `system-hybridne.jpg` - Hybridné riešenia
  - Odporúčaný: kombinácia rôznych systémov

**Case Studies (3 obrázky):**
- `case-bratislava.jpg` - Business Center GREEN Bratislava
  - Odporúčaný: moderná kancelárska budova
- `case-kosice.jpg` - Rezidencia ZELENÝ DVOR Košice
  - Odporúčaný: bytový komplex
- `case-zilina.jpg` - DHL Logistické centrum Žilina
  - Odporúčaný: priemyselná budova

### Krok 3: Optimalizácia obrázkov
Pred nahraním optimalizujte obrázky:
- Maximálna šírka: 1920px pre hero, 800px pre ostatné
- Formát: JPEG s kvalitou 85%
- Názvy súborov: použite presne tie, ktoré sú uvedené vyššie

### Alternatíva: WordPress Media Library
Môžete tiež nahrať obrázky cez WordPress admin:
1. Prihláste sa do WordPress admin
2. Choďte na Media > Add New
3. Nahrajte všetky obrázky
4. V template súbore nahraďte cesty k obrázkom:
   - Namiesto: `<?php echo get_stylesheet_directory_uri(); ?>/assets/images/...`
   - Použite: absolútne URL z Media Library

---

## 🔗 2. INŠTRUKCIE PRE INTEGRÁCIU DO MENU

### Metóda A: Cez WordPress Admin (ODPORÚČANÉ)

1. **Vytvorte novú stránku:**
   - V WordPress admin choďte na: Pages > Add New
   - Názov stránky: "Zelené fasády"
   - Slug/Permalink: `zelene-fasady`
   - V pravom paneli v sekcii "Page Attributes":
     - Template: Vyberte "Zelené fasády - Service Page"
   - Publikujte stránku

2. **Pridajte do menu:**
   - Choďte na: Appearance > Menus
   - Vyberte menu "Primary Menu" alebo "Hlavné menu"
   - V ľavom paneli nájdite novú stránku "Zelené fasády"
   - Kliknite "Add to Menu"
   - Presuňte položku pod "Služby" ako pod-položku (posuňte mierne doprava)
   - Kliknite "Save Menu"

### Metóda B: Hardcoded v súbore (ak je menu hardcoded)

Ak je menu hardcoded v `header.php`, pridajte tento kód:

1. Nájdite v súbore `/app/public/wp-content/themes/Divi/header.php` sekciu s menu
2. Hľadajte dropdown pre "Služby"
3. Pridajte novú položku:

```php
<?php
// Získať URL stránky dynamicky
$zelene_fasady_page = get_page_by_path('zelene-fasady');
$zelene_fasady_url = $zelene_fasady_page ? get_permalink($zelene_fasady_page->ID) : '/zelene-fasady';
?>

<!-- Pridajte túto položku do dropdown menu Služby -->
<li class="menu-item">
    <a href="<?php echo esc_url($zelene_fasady_url); ?>">Zelené fasády</a>
</li>
```

---

## ✅ 3. KONTROLNÝ ZOZNAM PRE SPUSTENIE

### Pred publikovaním skontrolujte:

- [ ] Stránka je vytvorená v WordPress admin
- [ ] Template "Zelené fasády - Service Page" je priradený
- [ ] Slug je nastavený na `zelene-fasady`
- [ ] Všetky obrázky sú nahrané (minimálne hero obrázok)
- [ ] Položka je pridaná do menu pod "Služby"
- [ ] CSS štýly sa správne načítavajú (child theme style.css)
- [ ] JavaScript pre kalkulačku a FAQ funguje
- [ ] Stránka je responzívna (otestujte na mobile)
- [ ] Všetky odkazy fungujú správne

---

## 🎨 4. POUŽITIE DIVI PAGE BUILDER (VOLITEĽNÉ)

Ak chcete používať Divi Page Builder namiesto custom template:

1. Vytvorte novú stránku bez custom template
2. Použite Divi Builder
3. Skopírujte obsah z template do Divi modulov:
   - Text Module pre sekcie
   - Image Module pre obrázky
   - Accordion Module pre FAQ
   - Contact Form Module pre kontaktné formuláre
4. Aplikujte custom CSS triedy z našej style.css

---

## 📱 5. RESPONZÍVNE ÚPRAVY

Template už obsahuje responzívne breakpointy:
- Desktop: > 980px
- Tablet: 768px - 980px
- Mobile: < 768px

Ak potrebujete dodatočné úpravy, editujte CSS v child theme.

---

## 🔧 6. RIEŠENIE PROBLÉMOV

### Ak sa template nezobrazuje v dropdown:
1. Uistite sa, že súbor `page-zelene-fasady.php` je v správnom priečinku
2. Obnovte permalinky: Settings > Permalinks > Save Changes
3. Vyčistite cache

### Ak sa CSS nenačítava:
1. Skontrolujte, či je child theme aktívny
2. Vyčistite browser cache
3. Skontrolujte konzolu pre chyby

### Ak kalkulačka nefunguje:
1. Uistite sa, že jQuery je načítané
2. Skontrolujte JavaScript konzolu pre chyby
3. Overte, že Divi theme načítava jQuery

---

## 📞 7. KONTAKTNÉ ÚDAJE

V template súbore nahraďte placeholder kontakty skutočnými:
- Tel. číslo: Nahraďte `+421 905 XXX XXX` skutočným číslom
- Email odkazy: Pridajte skutočné email adresy
- Kontaktné formuláre: Nasmerujte na správne URL

---

## 🚀 8. ĎALŠIE KROKY

Po implementácii základnej stránky môžete:
1. Vytvoriť podstránky (FAQ, Systémy, Realizácie atď.)
2. Integrovať kontaktné formuláre (Contact Form 7, WPForms)
3. Pridať fotogalériu realizácií
4. Implementovať pokročilú kalkulačku
5. Nastaviť SEO (Yoast SEO, RankMath)
6. Pridať Schema markup pre lokálny biznis

---

## 📄 9. SÚBORY PROJEKTU

### Vytvorené súbory:
- `/wp-content/themes/Divi-Child-Theme/page-zelene-fasady.php` - Template súbor
- `/wp-content/themes/Divi-Child-Theme/style.css` - Rozšírené o custom CSS

### Potrebné obrázky (min. 10):
- Hero: 1 obrázok
- Systémy: 4 obrázky
- Case studies: 3 obrázky
- Voliteľné: Ďalšie obrázky pre galériu

---

## ✉️ 10. TESTOVANIE

Pred finálnym spustením otestujte:
1. Všetky CTA tlačidlá
2. Kalkulačka ROI
3. FAQ accordion
4. Responzívny dizajn
5. Rýchlosť načítania stránky
6. Cross-browser kompatibilita

---

**Poznámka:** Tento dokument obsahuje všetky potrebné informácie pre úspešnú implementáciu stránky Zelené fasády. V prípade otázok kontaktujte developera alebo konzultujte Divi dokumentáciu.