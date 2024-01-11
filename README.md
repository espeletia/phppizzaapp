# Dokumentace Projektu Online Pizzerie v PHP

## Úvod
Projekt představuje webovou aplikaci určenou pro online objednávání pizzy. Zahrnuje interakci uživatele při výběru pizzy, správu nákupního košíku, zpracování objednávek a zpracování uživatelských vstupů prostřednictvím formulářů. Aplikace je strukturována do několika PHP souborů, z nichž každý plní specifickou roli v rámci celkového systému.

## Struktura a Funkcionalita Projektu

1. **Třída `Pizza` (Definována v `Pizza.php`)**
   - **Účel**: Reprezentuje pizzu s různými atributy a funkcionalitami.
   - **Atributy**: Obvykle zahrnuje vlastnosti jako název, ingredience, cena a velikost.
   - **Metody**: Konstruktor pro inicializaci objektů pizzy a možné další metody pro akce jako přizpůsobení pizzy nebo výpočet ceny.

2. **Třída `Kosik` (Definována v `Kosik.php`)**
   - **Účel**: Spravuje funkčnost nákupního košíku.
   - **Atributy**: Pravděpodobně zahrnuje vlastnosti pro ukládání položek přidaných do košíku, celkovou cenu a množství.
   - **Metody**: Funkce pro přidání, odebrání nebo aktualizaci položek v košíku a metody pro výpočet celkové ceny.

## Použití Regulárních Výrazů (Regex) v Projektu

Regulární výrazy jsou vzory používané k vyhledávání kombinací znaků ve řetězcích. Běžně se v programování využívají pro úkoly jako validace, vyhledávání a nahrazování textu. V kontextu tohoto PHP projektu by mohly být použity pro:

1. **Validaci Uživatelského Vstupu**:
   - Zajištění, že vstupy z formulářů, jako jsou jména, e-mailové adresy nebo telefonní čísla, odpovídají specifickému formátu.
   - Příklad: Vzor regexu `'/^[a-zA-Z ]+$/'` by mohl být použit k ověření, že vstup jména obsahuje pouze písmena a mezery.

2. **Sanitace Dat**:
   - Ochrana aplikace před škodlivým vstupem odstraněním nežádoucích znaků z vstupních dat.
   - Příklad: Použití regexu k odstranění skriptových tagů nebo pokusů o SQL injekci z uživatelského vstupu.

3. **Extrakce Informací**:
   - Zpracování řetězců k extrakci specifických informací, jako jsou identifikátory nebo klíčové hodnoty.
   - Příklad: Vzor regexu by mohl být použit k extrakci ident

ifikátorů produktů nebo množství z řetězce.

## Globální Proměnné v Projektu PHP Pizzerie

V projektu PHP pizzerie jsou využívány několik vestavěných globálních proměnných, známých jako superglobální proměnné v PHP. Tyto superglobální proměnné jsou speciální proměnné v PHP, které jsou dostupné ve všech oblastech skriptu. Klíčovými superglobálními proměnnými použitými v tomto projektu jsou `$_GET`, `$_POST` a `$_SESSION`.

### 1. `$_GET`
- **Co To Je**: `$_GET` je asociativní pole proměnných předaných do aktuálního skriptu prostřednictvím parametrů URL.
- **Jak Funguje**: Když uživatel přistoupí na PHP stránku přes URL s dotazovými parametry (např. `page.php?id=123`), `$_GET` zachytí tyto parametry. Data jsou přístupná ve formě `$_GET['id']` v daném příkladu.
- **Použití v Projektu**: `$_GET` je primárně používán pro získávání dat odeslaných v URL. Například v souboru jako `delete.php` by mohl být použit k načtení ID položky z řetězce dotazu pro odstranění z košíku.

### 2. `$_POST`
- **Co To Je**: `$_POST` je asociativní pole dat odeslaných do skriptu prostřednictvím HTTP metody POST.
- **Jak Funguje**: Tato superglobální proměnná se používá, když je formulář odeslán pomocí metody "post". Data z polí formuláře nejsou viditelná v URL, což činí `$_POST` bezpečnější metodou pro přenos citlivých informací.
- **Použití v Projektu**: V souborech jako `process_order.php` je `$_POST` použit k shromažďování uživatelských vstupů z formulářů objednávek, jako jsou údaje o zákaznících a specifikace objednávky.

### 3. `$_SESSION`
- **Co To Je**: `$_SESSION` je asociativní pole obsahující proměnné sezení dostupné pro aktuální skript. Používá se k ukládání informací o uživatelském sezení.
- **Jak Funguje**: PHP sezení umožňují zachovat určitá data přes následující přístupy. Když je sezení zahájeno pomocí `session_start()`, PHP přiřadí uživatelskému sezení jedinečný identifikátor, který je udržován jako cookie na zařízení uživatele nebo přenášen prostřednictvím URL.
- **Použití v Projektu**: Projekt využívá `$_SESSION` k ukládání a správě dat jako obsah nákupního košíku a uživatelských detailů napříč různými stránkami. To umožňuje uchovávat uživatelská data, jako jsou položky v košíku, i když uživatel prochází různými stránkami aplikace.

Shrnutí, `$_GET`, `$_POST` a `$_SESSION` hrají zásadní roli v načítání dat, zpracování dat z formulářů a udržování stavu uživatelského sezení. Jejich vhodné použití je základem pro funkcionalitu a bezpečnost aplikace PHP pizzerie.

## Implementace v Poskytnutých Souborech

Z poskytnutých PHP souborů, pokud se regex používá, bude se typicky nacházet v souborech zpracovávajících odeslání formulářů nebo zpracování dat, jako jsou `process_order.php`, `orderForm.php` nebo ve skriptech pro validaci. Bez explicitních kódových segmentů z těchto souborů však zůstávají detaily implementace spekulativní.

## Závěr
Projekt online pizzerie v PHP efektivně demonstruje použití PHP při vývoji dynamické webové aplikace. Modulární struktura aplikace zvyšuje její udržovatelnost, zatímco strategické využití PHP superglobálních proměnných (`$_GET`, `$_POST`, `$_SESSION`) hraje klíčovou roli v manipulaci s daty a správě uživatelských sezení, čímž zajišťuje plynulý a interaktivní uživatelský zážitek. Tento projekt slouží jako komplexní příklad implementace plně funkčního systému pro online objednávky s využitím PHP.

## Odkazy
- Oficiální dokumentace PHP: Pro vysvětlení syntaxe PHP, superglobálních proměnných a správy sezení.
- Nejlepší postupy ve vývoji webových aplikací: Pro strukturování a organizaci kódu v webové aplikaci.
