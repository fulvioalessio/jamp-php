<?php
/**
* File language EN
* @author	Alyx Association <info@alyx.it>
* @version	Factory
* @package	Class
* @copyright	Alyx Association 2008-2010
* @license GNU Public License
* You can find documentation and sourcecode on the JAMP official website
* http://jamp.alyx.it/
*/

LANG::$package = array(
"STORE001" 	=> "Invalid file!",
"STORE002" 	=> "File size is null!",
"STORE003" 	=> "The format is not accepted <b>".'$$0$$'."</b>!",
"STORE004" 	=> "The file: <b>".'$$0$$'."</b> is already!",
"STORE005" 	=> "Copy_of_",
"STORE006" 	=> "Error creating file <b>".'$$0$$'."</b>!",
"STORE007" 	=> "Upload function disabled!",
"UNDEFINED" => "\n<b>".'$$0$$'."</b> - Message undefined",
"OBJ000" 	=> "\nError duplicate name object: <b>".'$$0$$'."</b>",
"OBJ001"	=> "\nThe object attribute <b>".'$$0$$'."</b> not exist or is not valid.",
"OBJ002"	=> "\nUnable to create a child object in an object container.",
"OBJ003"	=> "\nObject to instantiate the type unspecified.",
"OBJ004"	=> "\nObject: <b>".'$$0$$'."</b> to instantiate is not valid!",
"OBJ005"	=> "\nThe Object: contains the value as dsitem \"".'$$0$$'."\"!\ndsitem Fields may not have the value \"".'$$0$$'."\" and why of a tag system and could cause errors in the rescue. Change the name of the field to continue.",
"OBJ006"	=> "\nYou can instantiate a single object: <b>header</b> and therefore need to be named foo <b>\"header\"</b> and not \"".'$$0$$'."\"",
"OBJ007"	=> "\nYou can instantiate a single object: <b>footer</b> and therefore need to be named foo <b>\"footer\"</b> and not \"".'$$0$$'."\"",
"OBJ008"	=> "\nObject reference not found.",
"OBJ009"	=> "\nThe Object: \"".'$$0$$'."\" contains the value as dsitem \"".'$$1$$'."\"!\ndsitem fields allowed only alphanumeric, minus(-) and underscore(_) characters. Change the name of the field to continue.",
"DS00"		=> "\n\"".'$$0$$'."\" package is not installed.",
"DS000"		=> "\nThe name of the connection is not preconfigured 'valid.",
"DS001"		=> "\nImpossible connect to the Database Server.",
"DS002"		=> "\nImpossible select the Database, database name not correct or user have not grant to selection.",
"DS003"		=> "\nImpossible run the query:<br>\n<font color=\"red\"><b>".'$$0$$'."</b></font><br><br>\nError n:<b>".'$$1$$'."</b>: ".'$$2$$',
"DS004"		=> "\nImpossible find the selected row.",
"DS005"		=> "\nThis should be an array.",
"DS006"		=> "\nAttention, the value: <b>".'$$0$$'."</b><br>\nis already present in the datasource!",
"DS007"		=> "\nAttention, we could not use the method 'row' with no keys' auto_increment '. Use the 'table' mode!",
"DS008"		=> "\nThe fieldname was wrong \"".'$$0$$'."\"!\nfieldname allowed only alphanumeric, minus(-) and underscore(_) characters. Change the name of the field to continue.",
"DS009"		=> "\nDatabase not selected, you should check the connection string.",
"DS010"		=> "The data have been modified by another user, you want to force the save?",
"DS011"		=> "DATA NOT SAVED!",
"DS012"		=> "The data have been modified by another user!",
"LDAP000"	=> "\nLDAP package is not installed.",
"LDAP001"	=>	"\nUnable to connect to LDAP.",
"LDAP002"	=> "\nError setting the version of LDAP protocol.",
"LDAP003"	=> "\nError during the authentication to LDAP.",
"LDAP004"	=> "\nAn error occurred during the search operation on LDAP.",
"LDAP005"	=> "\nMethods of research on LDAP invalid.",
"LDAP006"	=> "\nError recovery information entries.",
"LDAP007"	=> "\nError deleting.",
"LDAP008"	=> "\nError moving node.",
"SSH000"	=> "\nSSH package not installed.",
"SSH001"	=> "\nImpossible Connect to Server.",
"SSH002"	=> "\nError SSH authentication.",
"SSH003"	=> "\nError during read operation.",
"SSH004"	=> "\nSearch mode is invalid.",
"SSH005"	=> "\nError deleting.",
"SSH006"	=> "\nError creating directory.",
"FTP000"	=> "\nFTP package not installed.",
"FTP001"	=> "\nCan not Connect to Server.",
"FTP002"	=> "\nError FTP authentication.",
"FTP003"	=> "\nError during read operation.",
"FTP004"	=> "\nSearch mode is invalid.",
"FTP005"	> "\nError deleting.",
"FTP006"	=> "\nError creating directory.",
"FTP007"	=> "\nFile type not recognized.",
"XML000"	=> "\nInput type xml is invalid.",
"XML001"	=> "\nUnable to read the xml file.",
"XML002"	=> "\nScope attribute is not defined.",
"XML003"	=> "\nNode not found error.",
"XML004"	=> "\nSearch mode is invalid.",
"XML005"	=> "\nError deleting.",
"FILE000" 	=> "\nzlib package not installed.",
"FILE001" 	=> "\nUnable to read file or directory.",
"FILE002"	=> "\nAn error occurred during the move operation.",
"FILE003"	=> "\nError deleting file.",
"FILE004"	=> "\nSearch mode is invalid.",
"FILE005"	=> "\nError deleting.",
"FILE006"	=> "\nError creating directory.",
"FILE007"	=> "\nFormat not recognized.",
"GRAPH000"	=> "\nGD libraries not installed.",
"GRAPH001"	=> "\nError retrieving data.",
"DSNAV001"	=> "New",
"DSNAV002"	=> "Save",
"DSNAV003"	=> "Delete",
"DSNAV004"	=> "Cancel",
"DSNAV005"	=> "Go to first row",
"DSNAV006"	=> "Go to the previous row",
"DSNAV007"	=> "Go to the next row",
"DSNAV008"	=> "Go to the last row",
"DSNAV009"	=> "Page:",
"DSNAV010"	=> "Search",
"DSNAV011"	=> "Reload",
"DSNAV012"	=> "Print",
"DSCOMB001"	=> "Press enter to search.",
"IMAP000" 	=> "\nIMAP package not installed.",
"IMAP001" 	=> "\nImpossibile Connect to Server.",
"IMAP002"	=> "\nAn error occurred during the move operation.",
"IMAP003"	=> "\nError deleting.",
"IMAP004"	=> "\nSearch mode is invalid.",
"VIDEO001"	=> "\nInvalid extension.",
"MSG1HOST"	=> "Updated successfully!",
"MSG1HOSTD"	=> "The modified data were properly updated by the user.",
"MSG2HOST"	=> "Insert successfully!",
"MSG2HOSTD"	=> "The new user-created data have been entered correctly.",
"MSG3HOST"	=> "Delete successfully!",
"MSG3HOSTD"	=> "The data selected by the user was successfully deleted."
);
?>
