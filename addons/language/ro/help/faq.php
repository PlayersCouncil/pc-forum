<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Fiecare administrator de forum poate permite sau restricţiona anumite tipuri de fişiere ataşate. Dacă nu sunteţi sigur ce este permis sâ încărcaţi, contactaţi administratorul forumului pentru asistenţă.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Ce fişiere ataşate sunt permise pe acest forum?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Pentru a găsi lista fişierelor ataşate încărcate de dumneavoastră, mergeţi în Panoul utilizatorului şi folosiţi legăturile către secţiunea de fişiere ataşate.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Cum pot găsi toate fişierele ataşate de mine?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Fişiere ataşate',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Însemnarea şi înscrierea la subiecte',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Formatări şi tipuri de subiecte',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Prieteni şi persoane neagreate',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Niveluri de utilizatori şi grupuri',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'Întrebări despre phpBB',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Probleme de autentificare şi înregistrare',
	'HELP_FAQ_BLOCK_PMS'	=> 'Mesaje private',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Probleme de scriere/publicare a mesajelor',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Căutând în forumuri',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Setările şi preferinţele utilizatorului',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'În phpBB 3.0 însemnarea era foarte asemănătoare cu însemnarea în browser-ul web. Nu eraţi notificat când era publicat un răspuns. În phpBB 3.1, însemnarea este asemănătoarea înscrierii la un subiect. Puteți fi notificat când un subiect este actualizat. Înscriindu-vă, veţi fi notificat când va fi publicat un răspuns în subiectul sau în forum. Opțiunile de notificare pentru însemnare și înscriere pot fi configurate în Panoul utilizatorului, sub “Preferințe forum”.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Care este diferenţa dintre a însemna şi a înscrie?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Pentru a vă înscrie la un anumit forum, folosiți legătura “Înscriere forum”, din partea de jos a paginii, la intrarea în forum.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Cum pot să mă înscriu la un anumit forum?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'To remove your subscriptions, go to your User Control Panel and follow the links to your subscriptions.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'How do I remove my subscriptions?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Pentru a însemna sau pentru a vă înscrie la un anumit subiect, folosiţi link-ul corspunzător din meniul "Utilitare subiect", aplasat convenabil atât aproape de începutul paginii cât și jos la finalul subiectului.<br />De asemenea, răspunzând într-un subiect cu marcarea opțiunii “Anunță-mă când un răspuns este scris” vă va înscrie la acel subiect.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Cum pot însemna sau cum mă pot înscrie la anumite subiecte?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Anunţurile deseori conţin informaţii importante referitoare la forumul pe care îl parcurgeţi şi ar trebui citite cât de curând posibil. Anunţurile apar în partea de sus a fiecărei pagini în forumul de care aparţin. La fel ca anunţurile globale, permisiunea de a publica anunţuri este acordată de către administratorul forumului.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Ce sunt anunţurile?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'Codul BB este o implementare specială a HTML-ului ce oferă un control mărit al formatării pe anumite obiecte din cadrul unui mesaj. Posibilitatea de a folosi codul BB este dată de decizia administratorului dar poate fi dezactivat acest cod de la mesaj la mesaj din formularul de publicare. Codul BB este similar ca stil cu HTML-ul dar balizele (tag-urile) sunt închise în paranteze pătrate [ şi ] mai degrabă decât &lt; şi &gt;. Pentru mai multe informaţii despre codul BB, consultaţi ghidul care poate fi accesat din pagina de publicare.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Ce este codul BB?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Anunţurile globale conţin informaţii importante şi este indicat să le citiţi cât de curând posibil. Anunţurile globale vor apărea în partea de sus a fiecărei pagini de forum şi în interiorul panoului de control al utilizatorului. Permisiunea de a publica anunţuri globale este acordată de către administratorul forumului.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Ce sunt anunţurile globale?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Nu. Nu se poate folosi cod HTML care să fie trimis la browser ca şi fiind cod HTML. Majoritatea formatărilor întreţinute de HTML sunt posibile folosind cod BB.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Pot folosi HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Aceste iconiţe sunt imagini de mici dimensiuni asociate cu mesaje pentru a indica conţinutul acestora. Posibilitatea de a folosi aceste imagini depinde de permisiunile setate de către administrator.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Ce sunt iconiţele de subiect?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Da, imaginile pot fi afişate în mesajele dumneavoastră. Dacă administratorul a permis fişierele ataşate, puteţi să încărcaţi imaginile direct pe forum. Altfel, puteţi folosi o legatură către o imagine stocată pe un server accesibil publicului, cum ar fi http://www.exemplu.com/imaginea-mea.gif. Nu puteţi să creaţi legături cu imagini din calculatorul dumneavoastră (doar dacă este un server public), nici cu imagini stocate în spatele unui mecanism de autentificare, cum ar fi căsuţele de email, site-uri protejate cu parolă, etc. Pentru a afişa imaginea, folosiţi eticheta codului BB [img].',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Pot publica imagini?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Subiectele blocate sunt subiectele unde utilizatorii nu mai pot răspunde şi orice sondaj conţinut s-a închis automat. Subiectele pot fi închise din mai multe motive şi au fost setate astfel de către moderatorii sau administratorii forumului. De asemenea, aţi putea să vă închideţi propriile subiecte doar dacă administratorul forumului v-a acordat această permisiune.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Ce sunt subiectele blocate/închise?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Zâmbetele sau iconiţele emotive sunt imagini mici care pot fi folosite pentru a exprima anumite sentimente folosind un cod scurt. Spre exemplu :) înseamnă vesel , :( înseamnă trist. Lista completă a iconiţelor emotive poate fi consultată în formularul de publicare. Încercaţi totuşi să nu folosiţi prea multe iconiţe emotive pentru că pot face un mesaj greu de citit şi un moderator s-ar putea hotărî să le scoată din mesaj sau să şteargă mesajul cu totul. De asemenea, administratorul forumului poate să specifice o limită a numărului de zâmbete ce se pot folosi în cadrul unui mesaj.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Ce sunt Zâmbetele?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Subiectele importante apar sub anunţuri în forum şi doar pe prima pagină. Deseori, sunt destul de importante şi ar trebui să le citiţi cât de curând posibil. Ca şi cu anunţurile, permisiunea de a publica subiecte importante este acordată de către administratorul forumului.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Ce sunt subiectele importante?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Puteţi folosi aceste liste pentru a organiza ceilalţi membri de pe forum. Utilizatorii adăugaţi listei de prieteni vor fi afişaţi în panoul dumneavoastră de control pentru acces rapid la trimiterea mesajelor private şi vizualizarea statutului lor (Conectat/Neconectat). Depinzând de stilul folosit, mesajele lor pot fi scoase în evidenţă. Dacă adăugaţi un utilizator în lista cu persoane neagreate, mesajele acestuia vor fi ascunse.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Ce este lista de prieteni şi persoane neagreate?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Puteţi adăuga utilizatori în două moduri. În cadrul fiecărui profil al utilizatorului, există un link pentru a-l adăuga în lista de prieteni sau persoane neagreate. Alternativ, puteţi adăuga direct prin introducerea numelor de utilizatori din Panoul utilizatorului. Din aceeaşi pagină puteţi să şi ştergeţi nume din liste.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Cum pot adăuga/şterge utilizatori în listele mele de prieteni sau persoane neagreate?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Administratorii sunt membrii asociaţi cu cel mai mare nivel de control asupra întregului forum. Aceşti utilizatori pot controla toate operaţiunile forumului incluzând permisiunile de acces, excluderea utilizatorilor, crearea grupurilor sau a moderatorilor, etc. în funcţie de permisiunile primite de la fondatorul forumului. De asemenea, au capacitatea de moderare completă în toate forumurile în funcţie de permisiunile primite de la fondatorul forumului.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Cine sunt administratorii?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Este posibil ca administratorul să asocieze o culoare membrilor unui grup pentru a face mai uşoară identificarea acestora.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'De ce grupurile de utilizatori apar în culori diferite?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Dacă sunteţi membrul mai multor grupuri, grupul implicit este folosit pentru a determina culoarea şi rangul grupului ce ar trebui să vi se afişeze. Administratorul forumului vă poate da permisiunea să schimbaţi grupul implicit în panoul dumneavoastră de administrare.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Ce este un „Grup implicit”?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Moderatorii sunt persoane (sau grupuri de persoane) a căror menire este să aibă grijă de forumuri în mod constant. Aceştia au autoritatea de a modifica sau şterge mesajele şi de a bloca, debloca, muta, şterge şi împărţi subiectele în forumurile pe care le moderează. În mod general, moderatorii există pentru a avea grijă ca utilizatorii să nu scrie pe lângă subiect sau să publice mesaje abuzive sau ofensatoare.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Cine sunt moderatorii?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Această pagină vă furnizează o listă cu conducerea forumului, incluzând administratorii şi moderatorii şi alte detalii ca de exemplu forumurile pe care le moderează.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Ce este pagina "Echipa"?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Grupurile de utilizatori sunt grupări de utilizatori ce împart comunitatea în secţiuni ce pot fi controlate de către administratorii forumului. Fiecare utilizator poate aparţine mai multor grupuri şi fiecare grup are drepturi de acces individuale. Acest lucru uşurează munca administratorilor dacă doresc să schimbe permisiunile pentru mai mulţi utilizatori deodată ca de exemplu: schimbarea permisiunilor de moderare sau acordarea accesului utilizatorilor la un forum privat.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Puteţi vedea toate grupurile de utilizatori folosind link-ul „Grupuri de utilizatori” din cadrul Panoului de control al utilizatorului. Pentru a vă asocia unui grup, folosiţi butonul corespunzător. Nu toate grupurile sunt deschise. Unele necesită aprobare pentru a vă alătura grupului, unele sunt închise şi altele pot fi chiar ascunse. Dacă grupul este deschis, puteţi să vă înscrieţi apăsând butonul adecvat. Dacă grupul necesită aprobare pentru înscriere, puteţi cere acest lucru apăsând butonul adecvat. Moderatorul grupului va trebui să aprobe cererea dumneavoastră şi este posibil să fiţi întrebat care sunt motivele pentru care doriţi să vă alăturaţi grupului. Vă rugăm să nu hărţuiţi un moderator de grup dacă vă respinge cererea pentru că are motive întemeiate.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Unde pot fi găsite grupurile de utilizatori şi cum pot să mă asociez unuia?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'De obicei un lider al unui grup de utilizatori este numit când grupul este creat de către un administrator al forumului. Dacă doriţi să creaţi un grup de utilizatori, atunci primul lucru pe care trebuie să îl faceţi este să luaţi legătura cu un administrator; încercaţi să-i trimiteţi un mesaj privat.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Cum pot deveni liderul unui grup de utilizatori?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Ce sunt grupurile de utilizatori?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Toți utilizatorii forumului pot folosi formularul “Contactați-ne”, dacă facilitatea este activată de administratorul forumului.<br />Membrii forumului pot de asemenea folosi legătura “Echipa”.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Cum pot contacta administratorul forumului?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Acest program a fost scris şi licenţiat de către phpBB Limited. În cazul în care consideraţi că o facilitate trebuie să fie adaugată, vă rugăm să vizitaţi <a href="https://www.phpbb.com/ideas/">Centrul de idei phpBB</a> unde veți putea vota ideile existente sau propune facilități noi.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'De ce facilitatea X nu este disponibilă?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Oricare din administratorii afişaţi în secţiunea „Echipa” ar trebui să fie un punct de contact potrivit pentru reclamaţiile dumneavoastră. Dacă nu primiţi răspuns, ar trebui să luaţi legătura cu posesorul domeniului (efectuaţi o <a href="http://www.google.com/search?q=whois">interogare whois</a>) sau, dacă acesta este pe un domeniu gratuit (de exemplu: Yahoo!, free.fr, f2s.com, etc.), cu conducerea sau departamentul pentru abuzuri al serviciului respectiv. Vă rugăm să reţineţi că phpBB Limited <strong>nu are absolut niciun fel de control</strong> şi nu poate fi tras la răspundere pentru cum, unde sau de către cine este folosit acest program. Nu luaţi legătura cu phpBB Limited pentru probleme juridice (mesaje defăimătoare, insulte sau jigniri, răspunderea pentru mesajele scrise, etc.) care <strong>nu sunt legate direct</strong> de site-ul phpBB.com sau de program în sine. Dacă trimiteţi un email către phpBB Limited <strong>despre orice folosire a unei terţe persoane</strong> a acestui program, ar trebui să aşteptaţi un terţ răspuns sau niciun răspuns.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Cu cine iau legătura pentru probleme juridice şi/sau abuzuri legate de acest program?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Acest program (în forma sa nemodificată) este produs, lansat şi aflat sub copyright-ul <a href="https://www.phpbb.com/">phpBB Limited</a>. Este disponibil sub Licenţa Generală Publică GNU, versiunea 2 (GPL-2.0) şi poate fi distribuit gratuit. Vedeți <a href="https://www.phpbb.com/about/">Despre phpBB</a> pentru mai multe detalii.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Cine a scris acest program?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Dacă nu activaţi opţiunea <em>Autentifică-mă automat la fiecare vizită</em> atunci când vă autentificaţi, veţi fi autentificat doar pentru o perioadă de timp prestabilită. Această măsură previne ca altcineva să se folosească de contul dumneavoastră. Pentru a rămâne autentificat tot timpul, bifaţi opţiunea <em>Autentifică-mă automat la fiecare vizită</em> la autentificare. Acest lucru nu este recomandat dacă accesaţi forumul de la un calculator public, cum ar fi de la o bibliotecă, internet cafe, laborator de calculatoare (la liceu/universitate etc.). Dacă nu vedeţi această opţiune, înseamnă că a fost dezactivată de către un adminstrator al forumului.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'De ce sunt scos afară din forum automat?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Sunt mai multe motive ce pot genera această situație. În primul rând verificaţi dacă aţi specificat corect numele de utilizator şi parola. Dacă da, contactaţi un administrator al forumului ca să fiţi sigur că nu aveţi interdicţie pe forum. De asemenea, este posibil ca proprietarul site-ului să aibă o eroare de configurare ce trebuie reparată.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Este posibil ca un administrator să fi dezactivat sau să fi şters contul dumneavoastră dintr-un motiv sau altul. De asemenea, multe forumuri şterg periodic utilizatorii ce nu au fost activi o perioadă lungă de timp pentru a reduce dimensiunea bazei de date. Dacă s-a întâmplat acest lucru, încercaţi să vă înregistraţi din nou şi să vă implicaţi mai mult în discuţii.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'M-am înregistrat cu ceva timp în urmă dar acum nu mă mai pot autentifica?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'De ce nu mă pot autentifica?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Este posibil ca administratorul forumului să fi dezactivat înregistrarea de noi utilizatori. Este posibil ca administratorul să fi interzis adresa IP ori să fi dezactivat numele de utilizator pe care încercaţi să-l înregistraţi. Contactați administratorul forumului pentru ajutor.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'De ce nu mă pot înregistra?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA, sau Children’s Online Privacy Protection Act of 1998 (Actul pentru protecţia copiilor pe internet din 1998) este o lege din Statele Unite care solicită site-urilor ce pot colecta informaţii personale de la minorii sub vârsta 13 ani să obţină acordul scris al părinţilor sau altă metodă legală prin care tutorele legal îşi dă acordul pentru colectarea informaţiilor personale de la minorul cu vârsta sub 13 ani. Dacă nu sunteţi sigur dacă acest lucru este aplicabil dumneavoastră - ca un utilizator ce se înregistrează - sau acestui site pe care încercaţi să vă înregistraţi, contactaţi un consilier legal pentru asistenţă. Reţineţi că echipa phpBB nu poate furniza sfaturi juridice şi nu este un punct de contact pentru implicaţii legale de orice fel cu excepţia celor specificate în "Cu cine iau legatura pentru probleme legate de abuzuri si/sau aspecte juridice legate de acest program?".',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Ce este COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '„Şterge toate cookie-urile forumului” va şterge toate cookie-urile create de phpBB care vă menţin autentificat pe forum. Cookie permite de asemenea funcţionalităţi cum sunt urmărirea citirii dacă acest lucru a fost activat de administratorul forumului. Dacă aveţi probleme cu conectarea sau deconectarea în/din forum, ştergerea cookie-urilor poate fi de ajutor.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Ce face opţiunea „Şterge toate cookie-urile forumului”?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Nu intraţi în panică! Parola dumneavoastră nu poate fi refăcută, dar poate fi resetată uşor. Pentru a realiza acest lucru, mergeţi la pagina de autentificare şi folosiţi legătura <em>Am uitat parola</em>. Urmaţi instrucţiunile şi în scurt timp ar trebui să vă puteţi autentifica..<br />Totuși dacă nu reușiți să vă resetați parola, contactați administratorul forumului.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Mi-am pierdut parola!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'S-ar putea să nu fie nevoie, depinde de administratorul forumului dacă e nevoie să vă înregistraţi sau nu pentru a scrie mesaje. Oricum, înregistrarea vă va oferi acces la opţiuni care nu sunt disponibile vizitatorilor cum ar fi imagini asociate, mesaje private, trimiterea de email-uri altor utilizatori, înscrierea în grupuri etc. Durează doar câteva momente, aşa că vă recomandăm să vă înregistraţi.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Mai întâi verificaţi dacă aţi specificat corect numele de utilizator şi parola. Dacă acestea sunt corecte, atunci autentificarea nu este posibilă din două motive.Este activată opţiunea COPPA şi aţi specificat la înregistrare că aveţi sub 13 ani, fiind necesar să urmaţi instrucţiunile primite. Unele forumuri solicită ca utilizatorii noi să fie activaţi; contul poate fi activat fie de către dumneavoastră personal, fie de către un administrator înainte de a vă putea autentifica, aceste informații au fost oferite în timpul înregistrării. Dacă a fost trimis un email, urmați instrucțiunile. Dacă nu ați primit un email, e posibil să fi furnizat o adresă de email invalidă sau mesajul a fost considerat nesolicitat de filtru spam. Daca sunteţi sigur că adresa de email folosită este corectă, atunci contactaţi un administrator.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Sunt înregistrat dar nu mă pot autentifica!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'De ce trebuie să mă înregistrez?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Există trei posibile motive: nu sunteţi înregistrat ori autentificat, administratorul forumului a dezactivat mesageria privată pentru toţi utilizatorii sau administratorul forumului v-a restricţionat folosirea mesajelor private. Contactaţi un administrator al forumului pentru mai multe informaţii.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Nu pot trimite mesaje private!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Ne pare rău să auzim acest lucru. Opţiunea de trimitere a unui mesaj electronic include măsuri de siguranţă pentru a observa care utilizatori trimit astfel de mesaje. Ar trebui să trimiteţi administratorului o copie completă a mesajului primit. Este foarte important ca acesta să includă antetul ce conţine detalii despre utilizatorul care a trimis mesajul. Astfel, administratorul forumului poate acţiona în consecinţă.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Am primit spam-uri sau mesaje abuzive de la cineva din forum!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Puteţi bloca un utilizator să vă mai trimită mesaje private folosind regulile de mesagerie din Panoul utilizatorului. Dacă primiţi mesaje private abuzive de la un anumit utilizator, contactaţi un administrator al forumului; el are puterea de a restricţiona folosirea mesajelor private pentru anumiţi utilizatori.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Tot primesc mesaje private nedorite!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'În momentul vizualizării, apăsând pe legătura „Ridică acest subiect” puteţi "promova" subiectul curent în partea superioară a forumului pe prima pagină. Dacă nu vedeţi această opţiune, înseamnă că promovarea subiectelor poate fi dezactivată sau timpul permis între promovări nu a fost atins. De asemenea, puteţi promova subiectul respectiv, mai simplu, prin adăugarea unui răspuns. Totuşi, asiguraţi-vă că respectaţi regulile forumului când procedaţi astfel.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Cum îmi promovez subiectul?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Pentru a deschide un nou subiect în forum, apăsaţi butonul "Subiect nou". Pentru a scrie un răspuns, apăsați butonul "Scrie răspuns".Este posibil să vi se ceară să vă înregistraţi înainte de a scrie un mesaj. O listă a facilităţilor disponibile în fiecare forum sunt trecute în partea de jos a forumului sau a subiectului. Exemplu: Puteţi crea subiecte noi, Puteți atașa fișiere, etc.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Cum pot crea un nou subiect sau să scriu un răspuns în forum?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Această opţiune vă dă posibilitatea să salvaţi unele pasaje în vederea finalizării şi publicării lor în viitor. Pentru a reîncărca un pasaj salvat, folosiţi Panoul utilizatorului.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Pentru ce este butonul "Salvare" la deschiderea unui subiect?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'În afara cazului în care sunteţi administratorul sau moderatorul forumului, puteţi modifica sau şterge doar propriile mesaje. Puteţi modifica un mesaj - uneori doar pentru o perioadă scurtă după publicare - apăsând butonul de modificare asociat mesajulului respectiv. Dacă cineva a răspuns la mesaj, veţi observa o mică secţiune de text sub mesaj când reveniţi la subiect care arată de câte ori aţi modificat acel mesaj împreună cu data şi ora modificării. Aceasta va apărea doar dacă cineva a răspuns la subiect; nu va apărea dacă un moderator sau administrator a modificat mesajul, aceştia ar trebui să lase un mesaj în care să spună ce şi de ce au modificat. Reţineţi că utilizatorii obișnuiți nu pot şterge un mesaj odată ce un alt utilizator a răspuns.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Cum pot modifica sau şterge un mesaj?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Unele forumuri pot avea acces limitat pentru anumiţi utilizatori sau grupuri de utilizatori. Pentru a vedea, citi, publica, etc. este nevoie de permisiuni speciale. Contactaţi un moderator sau administrator pentru a vă da acces.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'De ce nu pot să accesez un forum?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Abilitatea de a adăuga fişiere ataşate se poate face pe bază de forum, grup, sau utilizator. Administratorul forumului poate a dezactivat ataşarea fişierelor în forumul în care vreţi să scrieţi, sau poate doar anumite grupuri pot ataşa fişiere. Contactaţi administratorul forumului dacă nu ştiţi sigur de ce nu puteţi adăuga fişiere ataşate.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'De ce nu pot adăuga fişiere ataşate?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Limita pentru opţiunile sondajului este specificată de către administratorul forumului. Dacă simțiţi că trebuie să adăugaţi opţiuni suplimentare sondajului peste limita permisă, atunci contactaţi administratorul forumului.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'De ce nu pot adăuga mai multe opţiuni la sondaj?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Când creaţi un subiect nou sau modificaţi primul mesaj al unui subiect, folosiți legătura “Creare sondaj” din tab-ul aflat sub zona principală de publicare; dacă nu vedeţi acest tab, probabil nu aveţi permisiunea de a crea sondaje. Introduceţi un titlu şi cel puţin două opţiuni în câmpurile corespunzătoare, având grijă să specificaţi o opţiune pe rânduri separate. Puteţi să specificaţi numărul de opţiuni pe care utilizatorul le poate selecta în timpul votării folosind „Opţiuni per utilizator”, durata în zile a sondajului (0 înseamnă un sondaj permanent) şi în cele din urmă opţiunea ce permite utilizatorilor să-şi schimbe voturile.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Cum pot crea un sondaj?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Ca şi în cazul mesajelor, sondajele pot fi modificate doar de către autorul acestora, un moderator sau de către un administrator. Pentru a modifica un sondaj, efectuaţi un click pe primul mesaj din subiect; acesta este întotdeauna asociat cu sondajul. Dacă nimeni nu a votat, atunci utilizatorii pot şterge sau modifica orice opţiuni ale sondajului. Dacă membrii şi-au exprimat opţiunile deja, doar moderatorii sau administratorii îl pot modifica sau şterge. Acest lucru previne schimbarea opţiunilor sondajului înainte de finalizarea acestuia.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Cum modific sau şterg un sondaj?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Administratorul forumului poate a decis că mesajele din forumul în care scrieţi trebuiesc verificate înaintea publicării. De asemenea, este posibil ca administratorul să vă fi adăugat într-un grup de utilizatori ale căror mesaje recesită o revizuire înainte de a fi publicate. Vă rugăm să contactaţi administratorul pentru mai multe detalii.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'De ce mesajul meu trebuie să fie aprobat?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Dacă administratorul a permis această facilitate, mesajul cu pricina ar trebui să includă un buton pentru raportarea lui. Dând click pe acest buton, veţi fi îndrumat cu paşii necesari pentru raportarea mesajului.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Cum pot raporta mesaje unui moderator?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Pentru a adăuga o semnătură trebuie întâi să vă creaţi una folosind Panoul utilizatorului. Odată ce semnătura este creată, puteţi să bifaţi opţiunea <em>Ataşează o semnătură</em> din formularul de publicare pentru a vă adăuga semnătura. Puteţi, de asemenea, să vă adăugaţi automat semnătura la toate mesajele bifând opţiunea corespunzătoare din profil. Dacă procedaţi astfel, puteţi să preveniţi adăugarea semnăturii unor anumite mesaje debifând caseta respectivă din formularul de publicare.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Cum pot să îmi adaug semnătură la mesaj?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Fiecare administrator are propriile reguli pentru forumul său. Dacă aţi încălcat o regulă, vi se poate da un avertisment. Reţineţi că aceasta este decizia administratorului şi phpBB Limited nu are nimic de-a face cu avertismentele acordate pe site-ul în cauză. Contactaţi administratorul forumului dacă nu ştiţi sigur de ce aţi primit un avertisment.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'De ce am primit un avertisment?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Căutarea efectuată a returnat prea multe rezultate pentru a le prelucra webserver-ul. Folosiţi “Căutare avansată” şi fiţi mai specific în termenii folosiţi şi forumurile în care se efectuează căutarea.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'De ce căutarea mea returnează o pagină goală!?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Această acțiune poate fi efectuată prin introducerea termenului căutat în căsuţa de căutare aflată pe prima pagină, în pagina unui forum sau a unui subiect. Căutarea avansată poate fi accesată folosind link-ul “Căutare avansată” localizat pe toate paginile forumului.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Cum pot să caut într-un forum sau forumuri?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Duceţi-vă la memberlist şi folosiţi legătura “Caută un membru”.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Cum pot căuta utilizatori?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Căutarea efectuată a fost probabil prea vagă şi a inclus mulţi termeni comuni care nu sunt indexaţi de phpBB3. Fiţi mai specific şi folosiţi opţiunile disponibile în formularul de căutare avansată.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'De ce căutarea mea nu returnează niciun rezultat?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Pentru a afişa mesajele dumneavoastră folosiţi legătura “Căută mesajele utilizatorului” din Panoul utilizatorului sau din pagina de profil. Pentru a vă căuta subiectele proprii, folosiţi pagina de căutare avansată şi introduceţi opţiunile adecvate.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Cum pot găsi mesajele şi subiectele mele?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Sunt două imagini ce pot apărea lângă numele de utilizator când vizualizaţi mesaje. Una dintre ele poate fi o imagine asociată cu rangul dumneavoastră, în general acestea luând forma de stele, blocuri sau puncte indicând câte mesaje aţi scris sau statutul dumneavoastră pe forum. Cealaltă, de obicei o imagine mai mare, este cunoscută sub numele de avatar (imagine asociată) şi este, în general, unică sau personală fiecărui utilizator.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'În Panoul utilizatorului, în secțiunea “Profil” vă puteți adăuga o imagine asociată (avatar) folosind următoarele metode: Gravatar, Galerie, La distanță sau Încărcare. Administratorul forumului decide dacă să activeze imaginile asociate şi are posibilitatea de a alege modalitatea prin care imaginile asociate pot fi folosite. Dacă nu puteţi folosi imaginile asociate, atunci contactaţi un administrator al forumului şi întrebaţi-l despre motivele care au dus la această decizie.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Cum pot afișa o imagine asociată (avatar)?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Cum pot afişa o imagine lângă numele meu de utilizator?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Toate setările dumneavoastră (dacă sunteţi înregistrat) sunt păstrate în baza de date. Pentru a le modifica, folosiţi Panoul utilizatorului; în general un link poate fi găsit în partea superioară a paginilor forumului. Acest lucru vă va permite să vă schimbaţi toate setările şi preferinţele.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Cum îmi schimb setările?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Doar utilizatorii înregistraţi pot trimite mesaje altor utilizatori prin formularul încorporat de mail şi doar dacă administratorul a activat această facilitate. Acest lucru se întâmplă pentru a preveni folosirea maliţioasă a sistemului de mesagerie de către utilizatorii anonimi.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'De ce când folosesc legătura de email a unui utilizator îmi cere să mă autentific?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'În Panoul utilizatorului, în secțiunea “Preferinţe forum”, veți găsi opțiunea <em>Ascunde indicatorul de conectare</em>. Activați această opțiune și veți apărea conectat doar pentru administratori, moderatori și dumneavoastră. Veți fi contorizat ca utilizator ascuns.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Cum îmi ascund prezența în lista de utilizatori conectați?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Fie administratorul nu a instalat limba dumneavoastră sau nimeni nu a tradus încă acest forum în limba dumneavoastră. Încercaţi să-l întrebaţi pe administratorul forumului dacă poate instala limba de care aveţi nevoie. Dacă pachetul de limbă nu există, sunteţi liber să creaţi o nouă traducere. Mai multe informaţii pot fi gasite pe site-ul grupului phpBB (folosiţi link-ul din partea inferioară a paginilor forumului)',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Limba mea nu este în listă!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Rangurile, care apar sub numele dumneavoastră de utilizator, indică numărul de mesaje pe care le-aţi scris sau identifică anumiţi utilizatori (de exemplu moderatorii şi administratorii). În general, nu puteţi schimba direct denumirea rangurilor forumului faţă de cum au fost specificate de către administratorul forumului. Vă rugăm, să nu abuzaţi de forum scriind mesaje inutile doar pentru a vă creşte rangul. Majoritatea forumurilor nu vor tolera acest lucru şi moderatorii sau administratorii vă vor scădea pur şi simplu numărul de mesaje scrise.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Care este rangul meu şi cum il pot schimba?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Dacă sunteţi sigur că aţi setat zona de fus orar şi ora de vară/DST corect dar ora înca este încă incorectă, atunci tipul setat pe ceasul serverului este incorect. Vă rugăm să contactaţi un administrator pentru a corecta problema.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Am schimbat zona de fus orar, dar ora tot este greşită!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'S-ar putea ca dumneavoastră să vedeţi orele afişate dintr-o zonă cu fus orar diferit faţă de cea în care sunteţi. Dacă este aşa, folosiţi Panoul utilizatorului pentru a modifica fusul orar în concordanţă cu zona în care vă aflaţi, cum ar fi Bucureşti, Londra, Paris, etc. Reţineţi că schimbarea zonei de fus orar, ca majoritatea setărilor, poate fi făcută doar de către utilizatorii înregistraţi. Dacă nu sunteţi înregistrat, acesta este un moment bun să o faceţi.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Ora nu este corectă!',
));
