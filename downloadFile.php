<?Php
//Susunan Struktur File :> $File = 'File/501-862-1-SM.Pdf';
$img = $_GET['url'];

If (File_exists($img)) {
    Header('Content-Description: File Transfer');
    Header('Content-Type: Application/Octet-Stream');
    Header('Content-Disposition: Attachment; Filename="'.Basename($img).'"');
    Header('Expires: 0');
    Header('Cache-Control: Must-Revalidate');
    Header('Pragma: Public');
    Header('Content-Length: ' . Filesize($img));
    Readfile($img);
    exit;
}
?>