<?php
/**
 * Note that the salt here is randomly generated.
 * Never use a static salt or one that is not randomly generated.
 *
 * For the VAST majority of use-cases, let password_hash generate the salt randomly for you
 */
$options = [
    'cost' => 11
];
$password = password_hash("password", PASSWORD_DEFAULT, $options)."\n";
echo $password;
$hash='$2y$11$HecBCcrVGeGJZevwtFk2iuN.CSWqcAbPgH79DphFPdiuxzmNaFT6.';
if (password_verify("password",$hash)){
  echo 'ellah!';
}else{
  echo 'keliya!';
}
?>
