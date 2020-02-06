<?php

$document = file_get_contents("pernyataan 2.rtf");
// isi dokumen dinyatakan dalam bentuk string
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=pernyataan 2.doc");
header("Content-length: ".strlen($document));
echo $document;
?>