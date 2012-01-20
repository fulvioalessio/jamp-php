<?php
/**
* File language IT
* @author	Alyx Association <info@alyx.it>
* @version	2.1.0_factory
* @package	Class
* @copyright	Alyx Association 2008-2010
* @license GNU Public License
* You can find documentation and sourcecode on the JAMP official website
* http://jamp.alyx.it/
*/

LANG::$package = array(
"STORE001" => "De fişier nevalid!",
"STORE002" => "Filesize nimic!",
"STORE003" => "Format invalid <b>".'$$0$$'."</b>!",
"STORE004" => "Fişierul: <b>".'$$0$$'."</b> este deja prezent!",
"STORE005" => "Copie_din_",
"STORE006" => "Eroare la crearea fişierului <b>".'$$0$$'."</b>!",
"STORE007" => "Incarca funcţia cu handicap!",
"UNDEFINED" => "\n<b>".'$$0$$'."</b> - Mesaj nedefinit",
"OBJ000" 	=> "\nEroare nume duplicat obiect: <b>".'$$0$$'."</b>",
"OBJ001"		=> "\nObiectul atribut <b>".'$$0$$'."</b> nu există sau este invalid.",
"OBJ002"		=> "\nNu poate crea un obiect de copil într-un container obiect.",
"OBJ003"		=> "\nPentru a instantia tipul de obiect nu este specificată.",
"OBJ004"		=> "\nSubiect: <b>".'$$0$$'."</b> nu a fost găsit pentru a instantia!",
"OBJ005"		=> "\nObiectul: conţine valoarea ca dsitem \"".'$$0$$'."\"!\nDomenii dsitem nu poate avea valoare \"".'$$0$$'."\" deoarece este un sistem de etichetă şi ar putea provoca erori în salvare. Modificarea numelui de domeniu pentru a continua.",
"OBJ006"		=> "\nAveţi posibilitatea să instantia un singur obiect: <b>header</b> şi, prin urmare, trebuie să fie numit <b>\"header\"</b> şi \"".'$$0$$'."\"",
"OBJ007"		=> "\nAveţi posibilitatea să instantia un singur obiect: <b>footer</b> şi, prin urmare, trebuie să fie numit <b>\"footer\"</b> şi \"".'$$0$$'."\"",
"OBJ008"	=> "\nReferinţă la obiect nu a fost găsit.",
"OBJ009"		=> "\nObiect: \"".'$$0$$'."\" conţine valoarea ca dsitem \"".'$$1$$'."\"!\nCâmpuri Dsitem pot permite doar caractere alfanumerice, minus (-) şi sublinieri (_). Modificarea numelui de domeniu pentru a continua.",
"DS00"		=> "\n\"".'$$0$$'."\" pachet nu este instalat.",
"DS000"		=> "\nNumele de conectare preconfigurate este invalid.",
"DS001"		=> "\nNu se poate conecta la Database server.",
"DS002"		=> "\nImposibil pentru a selecta numele Database, incorecte sau ghidul nu este activat pe selecţia dumneavoastră.",
"DS003"		=> "\nNu se poate executa interogarea:<br>\n<font color=\"red\"><b>".'$$0$$'."</b></font><br><br>\nEroare n:<b>".'$$1$$'."</b>: ".'$$2$$',
"DS004"		=> "\nNu găsiţi rândul selectat.",
"DS005"		=> "\nAcest câmp ar trebui să fie o matrice.",
"DS006"		=> "\nAtenţie: Valoare: <b>".'$$0$$'."</b><br>\n&#232; gi&#224; în sursa de date!",
"DS007"		=> "\nAtenţie, în imposibilitatea de a utiliza \"row\", cu modul de a \"auto_increment\" nu chei.",
"DS008"		=> "\nNumele domeniului este greşit \"".'$$0$$'."\"!\nNumele domeniului sunt permise numai caractere alfanumerice, inclusiv minus (-) şi sublinieri (_). Modificaţi numele de fişier pentru a continua.",
"DS009"		=> "\nDatabase nu este selectată, verificaţi şirul de conexiune.",
"OBJ008"		=> "\nDomeniul are o valoare ilegal \"".'$$0$$'."\"!\nNumele domeniului sunt permise numai caractere alfanumerice, inclusiv minus (-) şi sublinieri (_). Modificaţi numele de fişier pentru a continua.",
"LDAP000"	=> "\nPachet LDAP nu este instalat.",
"LDAP001"	=> "\nImposibil de conectat la LDAP.",
"LDAP002"	=> "\nEroare în timp ce stabilirea versiunea protocolului LDAP.",
"LDAP003"	=> "\nEroare in timpul autentificare LDAP.",
"LDAP004"	=> "\nEroare pe operaţiune de căutare LDAP.",
"LDAP005"	=> "\nMod de căutare LDAP nu este valabil.",
"LDAP006"	=> "\nInformaţii eroare la preluarea de entry",
"LDAP007"	=> "\nEroare în timpul ştergerii.",
"LDAP008"	=> "\nEroare la schimbare nod.",
"SSH000"	=> "\nPachet SSH nu este instalat.",
"SSH001"	=> "\nImposibil de conectat la server.",
"SSH002"	=> "\nEroare de autentificare SSH.",
"SSH003"	=> "\nEroare în timpul funcţionării citit.",
"SSH004"	=> "\nMod de căutare nu este valid.",
"SSH005"	=> "\nEroare în timpul ştergerii.",
"SSH006"	=> "\nEroare la crearea directorului.",
"FTP000"	=> "\nPachet FTP instalat.",
"FTP001"	=> "\nImposibil de conectat la server.",
"FTP002"	=> "\nEroare de autentificare FTP.",
"FTP003"	=> "\nEroare în timpul funcţionării citit.",
"FTP004"	=> "\nMod de căutare nu este valid.",
"FTP005"	=> "\nEroare în timpul ştergerii.",
"FTP006"	=> "\nEroare la crearea directorului.",
"FTP007"	=> "\nTip de sistem de fişiere nu este recunoscut.",
"XML000"	=> "\nDe intrare de tip xml este nevalid.",
"XML001"	=> "\nNu poate citi fisierul xml.",
"XML002"	=> "\nScope atribut nedefinit.",
"XML003"	=> "\nNodul nu a fost găsit de eroare.",
"XML004"	=> "\nMod de căutare nu este valid.",
"XML005"	=> "\nEroare în timpul ştergerii.",
"FILE000"	=> "\nPachet nu zlib instalat.",
"FILE001" 	=> "\nImposibil pentru a citi fişier sau director.",
"FILE002"	=> "\nEroare în timpul operaţiei de mutare.",
"FILE003"	=> "\nEroare la ştergerea fişierului.",
"FILE004"	=> "\nMod de căutare nu este valid.",
"FILE005"	=> "\nEroare în timpul ştergerii.",
"FILE006"	=> "\nEroare la crearea directorului.",
"FILE007"	=> "\nNerecunoscut format de fişier.",
"GRAPH000"	=> "\nGD nu este instalat.",
"GRAPH001"	=> "\nEroare la regăsirea datelor.",
"DSNAV001"	=> "Nou",
"DSNAV002"	=> "Salva",
"DSNAV003"	=> "Ştergere",
"DSNAV004"	=> "Anula",
"DSNAV005"	=> "Du-te la prima linie",
"DSNAV006"	=> "Du-te la linia anterioară",
"DSNAV007"	=> "Du-te la linia următoare",
"DSNAV008"	=> "Du-te la ultima linie",
"DSNAV009"	=> "Pagină:",
"DSNAV010"	=> "Căutare",
"DSNAV011"	=> "Reîncărcare",
"DSNAV012"	=> "Imprimare",
"DSCOMB001"	=> "Apăsaţi pe Enter pentru a căuta.",
"IMAP000" 	=> "\nIMAP Pachet instalat.",
"IMAP001" 	=> "\nImposibil de conectat la server.",
"IMAP002"	=> "\nEroare în timpul operaţiei de mutare.",
"IMAP003"	=> "\nEroare la ştergerea fişierului",
"IMAP004"	=> "\nMod de căutare nu este valid.",
"VIDEO001"	=> "\nExtensia nu este valabil.",
"MSG1HOST"	=> "Actualizat!",
"MSG1HOSTD"	=> "Datele revizuite au fost corect actualizate de către utilizator.",
"MSG2HOST"	=> "Introducerea făcut!",
"MSG2HOSTD"	=> "Noile date create de utilizator au fost introduse corect.",
"MSG3HOST"	=> "Sterge-l!",
"MSG3HOSTD"	=> "Datele selectate de utilizator au fost şterse în mod corespunzător."
);
?>