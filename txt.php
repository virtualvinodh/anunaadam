<?PHP

header('Content-type: text/plain');
header('Content-disposition: attachment; filename="Aaravam - TamiltoIPA.txt"');

session_start ();

echo $_SESSION['text'];

?>