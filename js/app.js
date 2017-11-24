(function() {
var app = angular.module('partnerzy',[ ]);

app.controller('partnersController', function(){
    this.partners = lists;
});    
    
var lists = [
{
    brand: 'Biuro Karier Uniwersytetu Gdańskiego',
    logo: './images/partnerzy/BK_UG_logo.jpg',
    link: 'https://biurokarier.ug.edu.pl/index.web',
    description1: 'Biuro Karier udostępnia informacje o ofertach pracy, praktykach oraz warsztatach i szkoleniach dla studentów i absolwentów Uniwersytetu Gdańskiego.',
    description2: 'Zadaniem Biura Karier UG jest wspieranie studentów i absolwentów w stawianiu pierwszych kroków na rynku pracy, organizowanie licznych warsztatów z zakresu planowania kariery zawodowej, poruszania się po rynku pracy i doskonalenia umiejętności miękkich.',
    description3: 'BK UG angażuje się także w organizację targów pracy oraz spotkań z pracodawcami.'
},
    
{
    brand: 'Black Pearls VC',
    logo: './images/partnerzy/BlackPearls_logo.png',
    link: 'http://www.blackpearls.vc/pl/',
    description1: 'Black Pearls VC jest obecnie największym funduszem kapitałowym w Polsce północnej. Wspierając rozwój polskich innowacji, stawia na ścisłą współpracę nauki z biznesem. Kluczowy zespół funduszu stanowią polscy oraz zagraniczni eksperci o interdyscyplinarnych kompetencjach. Black Pearls VC wspierany jest polskim kapitałem oraz unikalną wiedzą i doświadczeniem aniołów biznesu.',
    description2: 'Fundusz specjalizuje się w zarządzaniu kapitałem poprzez inwestycje w przedsiębiorstwa we wczesnej fazie rozwoju. Prowadzi również działalność doradczą, wspierając wiedzą i doświadczeniem przedsiębiorstwa na każdym etapie rozwoju, administrację publiczną oraz sektor nauki. Zapewnia potencjał na szybki, międzynarodowy wzrost, kapitał prywatny oraz niezbędne know-how.'
},

{
    brand: 'Fundacja Gospodarcza',
    logo: './images/partnerzy/fund_gos_logo.png',
    link: 'http://fungo.com.pl/',
    description1: 'Fundacja istnieje od 1990 r. Jej działalność koncentruje się wokół wspierania przedsiębiorczości i podnoszenia kwalifikacji zawodowych. Fundacja Gospodarcza w 2015 roku oddała do użytku i prowadzi Gdyński Inkubator Przedsiębiorczości. W jego ramach oferuje innowacyjnym podmiotom gospodarczym istniejącym na rynku nie dłużej niż 2 lata usługi wspierające ich rozwój (szkolenia, doradztwo) oraz preferencyjne warunki najmu powierzchni biurowych.',
    description2: 'Fundacja Gospodarcza świadczy biznesowe usługi doradcze dla osób przygotowujących się do rozpoczęcia działalności gospodarczej i dla przedsiębiorców. Realizuje poradnictwo zawodowe i  poradnictwo związane z rozwojem osobistym dla uczniów, studentów, absolwentów oraz osób bezrobotnych i poszukujących pracy.'
},
    
{
    brand: 'Olivia Business Centre – O4',
    logo: './images/partnerzy/O4_logo.jpg',
    link: 'http://o4.olivia.biz/',
    description1: 'Olivia Business Centre to jedno z największych centrów biznesowych w Polsce. Swoje biura ma tu wiele dużych polskich i międzynarodowych przedsiębiorstw.',
    description2: 'Przestrzeń O4 to mieszczący się na dwóch piętrach budynku Olivia Four starter, dedykowany małym firmom. Mogą one tu uzyskać wsparcie z zakresu finansowania pomysłu, rozwoju na rynkach międzynarodowych, edukacji oraz obsługi administracyjnej.',
    description3: 'O4 powstało z myślą o kluczowej roli współpracy nauki, biznesu i administracji publicznej w tworzeniu innowacyjnej gospodarki. To kreatywna przestrzeń, w której można rozwijać nowy biznes, nawiązywać kontakty oraz podnosić kwalifikacje zawodowe.'
},
    
{
    brand: 'Pomorski Park Naukowo-Technologiczny – Strefa Startup Gdynia',
    logo: './images/partnerzy/StrefaSturtup_Logo.jpg',
    link: 'http://ppnt.pl/pl',
    description1: 'Pomorski Park Naukowo-Technologiczny pomaga rozwinąć skrzydła w innowacyjnym biznesie, skupia pasjonatów nowych technologii i idei. Tu swoje pomysły realizują studenci, absolwenci uczelni, naukowcy, jak i doświadczeni przedsiębiorcy. Otrzymują wsparcie w postaci przestrzeni biurowej, laboratoriów, strefy coworkingu, szkoleń czy networkingu.',
    description2: 'Strefa Startup Gdynia w PPNT to miejsce pełne inspiracji. Można tu poszerzać horyzonty podczas warsztatów i weryfikować pomysły podczas rozmów przy filiżance aromatycznej kawy. Misją Strefy Startup jest zapewnienie optymalnych warunków rozwoju innowacyjnych pomysłów biznesowych w początkowej fazie rozwoju.'
},
    
{
    brand: 'State Street Bank Polska',
    logo: './images/partnerzy/StateStreet_logo.png',
    link: 'http://www.statestreet.com/about/office-locations/poland-polishversion.html',
    description1: 'State Street to wiodący na świecie dostawca usług finansowych dla inwestorów instytucjonalnych, z siedzibą w Bostonie. ',
    description2: 'Od 2007 r. w pierwszym w Polsce, krakowskim biurze State Street, świadczona jest kompleksowa obsługa inwestycji finansowych – kompletna księgowość funduszy inwestycyjnych, obsługa instrumentów pochodnych, wycena papierów wartościowych, sporządzanie sprawozdań finansowych oraz administracja funduszami hedgingowymi.',
     description3: 'W 2015 r. podjęto decyzję o otwarciu nowego biura w Polsce, w Gdańsku, które będzie wspierać europejskich klientów State Street. Bank niezmiennie stawia na ciągłe doskonalenie oraz rozwój działalności w Polsce, poszukując utalentowanych pracowników oraz mocno angażując się w szeroką współpracę z miejscowymi uczelniami.'
}
];
    
})();

//705 x 619