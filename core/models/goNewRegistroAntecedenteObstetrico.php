<?php

print_r($_POST);
if ($_POST["parasitosis"]!=="SI") {
	$parasito="N/A";
}else{
	$parasito=$_POST["parasitosis"];
}
if ($_POST["paludismo"]!=="SI") {
	$palud="N/A";
}else{
	$palud=$_POST["paludismo"];
}
if ($_POST["reuma"]!=="SI") {
	$reumat="N/A";
}else{
	$reumat=$_POST["reuma"];
}
if ($_POST["fractura"]!=="SI") {
	$fract="N/A";
}else{
	$fract=$_POST["fractura"];
}
if ($_POST["bubas"]!=="SI") {
	$buba="N/A";
}else{
	$buba=$_POST["bubas"];
}
if ($_POST["venerea"]!=="SI") {
	$venereas="N/A";
}else{
	$venereas=$_POST["venerea"];
}
if ($_POST["diabete"]!=="SI") {
	$diabet="N/A";
}else{
	$diabet=$_POST["diabete"];
}
if ($_POST["cardiopata"]!=="SI") {
	$cardiop="N/A";
}else{
	$cardiop=$_POST["cardiopata"];
}
if ($_POST["tbcp"]!=="SI") {
	$tbcp="N/A";
}else{
	$tbcp=$_POST["tbcp"];
}
if ($_POST["alergia"]!=="SI") {
	$alerg="N/A";
}else{
	$alerg=$_POST["alergia"];
}
if ($_POST["tiroide"]!=="SI") {
	$tiroide="N/A";
}else{
	$tiroide=$_POST["tiroide"];
}
if ($_POST["toxemia"]!=="SI") {
	$toxem="N/A";
}else{
	$toxem=$_POST["toxemia"];
}
if ($_POST["leucorrea"]!=="SI") {
	$leucorrea="N/A";
}else{
	$leucorrea=$_POST["leucorrea"];
}
if ($_POST["cistitis"]!=="SI") {
	$cistiti="N/A";
}else{
	$cistiti=$_POST["cistitis"];
}
if ($_POST["nefropatia"]!=="SI") {
	$nefrop="N/A";
}else{
	$nefrop=$_POST["nefropatia"];
}
if ($_POST["flebitis"]!=="SI") {
	$fleb="N/A";
}else{
	$fleb=$_POST["flebitis"];
}
if ($_POST["varices"]!=="SI") {
	$varice="N/A";
}else{
	$varice=$_POST["varices"];
}
if ($_POST["hemorroide"]!=="SI") {
	$hemorroide="N/A";
}else{
	$hemorroide=$_POST["hemorroide"];
}
if ($_POST["checkedOtros"]!=="SI") {
	$checOtro="N/A";
}else{
	$checOtro=$_POST["checkedOtros"];
}
if (empty($_POST['tipAntec'])){
    $tipoAnteceden = "N/A";
}else{
    $tipoAnteceden = $_POST['tipAntec'];
}
if ($_POST["checkPrenatal"]!=="SI") {
	$prenatal="N/A";
}else{
	$prenatal=$_POST["checkPrenatal"];
}
if (empty($_POST['institucion'])){
   	$instit = "N/A";
}else{
    $instit = $_POST['institucion'];
}
if (empty($_POST['conHecha'])){
    $conHechas = "N/A";
}else{
    $conHechas = $_POST['conHecha'];
}
if ($_POST["checkMaternidad"]!=="SI") {
	$maternal="N/A";
}else{
	$maternal=$_POST["checkMaternidad"];
}
if (empty($_POST['maternidad'])){
    $nombMat = "N/A";
}else{
    $nombMat = $_POST['maternidad'];
}
if (empty($_POST['numHistoria'])){
    $numeroHist = "N/A";
}else{
    $numeroHist = $_POST['numHistoria'];
}
if (empty($_POST['consultaHechas'])){
    $consultaHecha = "N/A";
}else{
    $consultaHecha = $_POST['consultaHechas'];
}
if (empty($_POST['resumen'])){
    $resumen = "N/A";
}else{
    $resumen = $_POST['resumen'];
}


       $queryobstetricia="INSERT INTO    VALUES (null,'".$parasito."','".$palud."','".$reumat."',
'".$fract."','".$buba."','".$venereas."','".$diabet."','".$cardiop."','".$tbcp."','".$alerg."',
'".$tiroide."','".$toxem."','".$leucorrea."','".$cistiti."','".$nefrop."','".$fleb."',
'".$varice."','".$hemorroide."','".$checOtro."','".$tipoAnteceden."','".$prenatal."',
'".$instit."','".$conHechas."','".$maternal."','".$nombMat."','".$numeroHist."',
'".$consultaHecha."','".$resumen."','N')";

    
