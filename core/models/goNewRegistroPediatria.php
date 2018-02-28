<?php
    error_reporting(0);
    require_once('conexion.php');  
    $cod_pacci_r = $_POST['cod_pacci'];
    $mtvadmin_r = $_POST['mtvadmin']; 
    $enfactual_r = $_POST['enfactual'];
    $diag_r = $_POST['diag'];
    $diagclin_r = $_POST['diagclin'];
    $otrosdiag_r = $_POST['otrosdiag'];
    $interprincipal_r = $_POST['interPrincipal'];
    $otrosdiag2_r = $_POST['otrosdiag2'];
    
    
    //asi se registara el radio
  
    $radio_r = $_POST['radio'];
    if ($radio_r =='lactante') {
        $fecha_nac=$_POST['theDate'];
    }else if ($radio_r =='infante') {
        $fecha_nac=$_POST['theDate'];
    }
    
    //asi se registraran los inputs
    
    if (empty($_POST['inptrespirar'])) {
       $inptrespirar_r="N/A";        
    }else{
        $inptrespirar_r = $_POST['inptrespirar'];
    }
    
   
    if (empty($_POST['inptcianosis'])){
        $inptcianosis_r = "N/A";
    }else{
        $inptcianosis_r = $_POST['inptcianosis'];
    }

   

    if (empty($_POST['inptfiebre'])){
        $inptfiebre_r = "N/A";
    }else{
        $inptfiebre_r = $_POST['inptfiebre'];
    }

   

    if (empty($_POST['inptvomitos'])){
        $inptvomitos_r = "N/A";
    }else{
        $inptvomitos_r = $_POST['inptvomitos'];
    }

   

    if (empty($_POST['inptictericia'])){
        $inptictericia_r = "N/A";
    }else{
        $inptictericia_r = $_POST['inptictericia'];
    }
    
  
    
    if (empty($_POST['inpthemorragia'])){
        $inpthemorragia_r = "N/A";
    }else{
        $inpthemorragia_r = $_POST['inpthemorragia'];
    }
    

    
    if (empty($_POST['inptconvulsion'])){
        $inptconvulsion_r = "N/A";
    }else{
        $inptconvulsion_r = $_POST['inptconvulsion'];
    }
    

     
    if (empty($_POST['inptmalformacion'])){
        $inptmalformacion_r = "N/A";
    }else{
        $inptmalformacion_r = $_POST['inptmalformacion'];       
    }
    

     
    if (empty($_POST['inptoftalmia'])){
        $inptoftalmia_r = "N/A";
    }else{
        $inptoftalmia_r = $_POST['inptoftalmia'];
    }
    

     
    if (empty($_POST['inptcoricia'])){
        $inptcoricia_r = "N/A";
    }else{
        $inptcoricia_r = $_POST['inptcoricia'];
    }
    
     
    if (empty($_POST['inptotros'])){
        $inptotros_r = "N/A";
    }else{
        $inptotros_r = $_POST['inptotros'];
    }
    
    

    

     
    if (empty($_POST['inptCabeza'])){
        $inptCabeza_r = "N/A";
    }else{
        $inptCabeza_r = $_POST['inptCabeza'];
    }
     
    if (empty($_POST['inptsentar'])){
        $inptsentar_r = "N/A";
    }else{
        $inptsentar_r = $_POST['inptsentar'];
    }
         
    if (empty($_POST['inptpararse'])){
        $inptpararse_r = "N/A";
    }else{
        $inptpararse_r = $_POST['inptpararse'];
    }

     
    if (empty($_POST['inptCamino'])){
        $inptCamino_r = "N/A";
    }else{
        $inptCamino_r = $_POST['inptCamino'];
    }
    
    
     
    if (empty($_POST['inptPalabras'])){
        $inptPalabras_r = "N/A";
    }else{
        $inptPalabras_r = $_POST['inptPalabras'];
    }
    

     
    if (empty($_POST['inptControl'])){
        $inptEsfinter_r = "N/A";
    }else{
        $inptEsfinter_r = $_POST['inptControl'];
    }
    
     
    if (empty($_POST['inptpDiente'])){
        $inptpDiente_r = "N/A";
    }else{
        $inptpDiente_r = $_POST['inptpDiente'];
    }
        
    if (empty($_POST['inptEscuela'])){
        $inptEscuela_r = "N/A";
    }else{
        $inptEscuela_r = $_POST['inptEscuela'];
    }
    

     
    if (empty($_POST['inptProgreso'])){
        $inptProgreso_r = "N/A";
    }else{
        $inptProgreso_r = $_POST['inptProgreso'];
    }
    
  
     
    if (empty($_POST['inptProgPeso'])){
        $inptProgpeso_r = "N/A";
    }else{
        $inptProgpeso_r = $_POST['inptProgPeso'];
    }
    
    

    
    
    //asi se registraran los checkboxs
    if ($_POST['natural']!=='SI' || empty($_POST['natural'])) {
        $natural1_r = 'N/A';
    }else{
        $natural1_r = $_POST['natural'];
    }
    
     
    if ($_POST['artificial']=='SI') {
        $artificial_r = $_POST['artificial'];
    }else{
        $artificial_r = "N/A";
    }
    
    $destete_r = $_POST['destete'];
     
    if ($destete_r=="SI"){
        $destete_r = $_POST['destete'];

    }else{
        $destete_r = "N/A";     
    }
    
    $cereales_r = $_POST['cereales'];
     
    if ($cereales_r=="SI"){
        $cereales_r = $_POST['cereales'];
    }else{
        $cereales_r = "N/A";
    }
    
    $sopas_r = $_POST['sopas'];
     
    if ($sopas_r=="SI"){
        $sopas_r = $_POST['sopas'];
    }else{
        $sopas_r = "N/A";
    }
    

    if ($_POST['huevos']=="SI"){
        $huevos_r = $_POST['huevos'];
    }else{
        $huevos_r = "N/A";
    }
    
    $carnes_r = $_POST['carnes'];
     
    if ($carnes_r=="SI"){
        $carnes_r = $_POST['carnes'];
    }else{
        $carnes_r = "N/A";    
    }
    
    $vitaminas_r = $_POST['vitaminas'];
     
    if ($vitaminas_r=="SI"){
        $vitaminas_r = $_POST['vitaminas'];
    }else{
        $vitaminas_r = "N/A";
        
    }
    
    $frutas_r = $_POST['frutas'];
     
    if ($frutas_r=="SI"){
        $frutas_r = $_POST['frutas'];
    }else{
        $frutas_r = "N/A";
        
    }
    
    $vegetales_r = $_POST['vegetales'];
     
    if ($vegetales_r=="SI"){
        $vegetales_r = $_POST['vegetales'];
    }else{
        $vegetales_r = "N/A";
        
    }
    
    $mixta_r = $_POST['mixta'];  
     
    if ($mixta_r=="SI"){
        $mixta_r = $_POST['mixta'];
    }else{
        $mixta_r = "N/A";
        
    }
    
     $dieta_r = $_POST['dieta'];
     
    if ($dieta_r=="SI"){
        $dieta_r = $_POST['dieta'];
    }else{
        $dieta_r = "N/A";
    }

    if (empty($_POST['inptdieta'])){
        $inptdieta_r="N/A";
    }else{
        $inptdieta_r = $_POST['inptdieta'];
    }    



    if (empty($_POST['inptsuenio'])){
        $inptsuenio_r = "N/A";
    }else{
        $inptsuenio_r = $_POST['inptsuenio'];
    }

    if (empty($_POST['inptsiesta'])){
        $inptsiesta_r = "N/A";
    }else{
        $inptsiesta_r = $_POST['inptsiesta'];
    }



    if (empty($_POST['inptjuego'])){
        $inptjuego_r = "N/A";
    }else{
        $inptjuego_r = $_POST['inptjuego'];
    }



    if (empty($_POST['inptsexo'])){
        $inptsexo_r = "N/A";
    }else{
        $inptsexo_r = $_POST['inptsexo'];
    }



    if (empty($_POST['inptChupaDedos'])){
        $inptChupaDedos_r = "N/A";
    }else{
        $inptChupaDedos_r = $_POST['inptChupaDedos'];
    }
    


    if (empty($_POST['inptComeUnia'])){
        $inptComeUnia_r = "N/A";
    }else{
        $inptComeUnia_r = $_POST['inptComeUnia'];
    }
    


    if (empty($_POST['inptRasgos'])){
        $inptRasgos_r = "N/A";
    }else{
        $inptRasgos_r = $_POST['inptRasgos'];
    }
    


    if (empty($_POST['inptRecreacion'])){
        $inptRecreacion_r = "N/A";
    }else{
        $inptRecreacion_r = $_POST['inptRecreacion'];
    }
    


    if (empty($_POST['inptOcupacion'])){
        $inptOcupacion_r = "N/A";
    }else{
        $inptOcupacion_r = $_POST['inptOcupacion'];
    }
    

    
    if (empty($_POST['inptHabOtros'])){
        $inptHabOtros_r = "N/A";
    }else{
        $inptHabOtros_r = $_POST['inptHabOtros'];
    }
    
    




    if (empty($_POST['inptViruela'])){
        $inptViruela_r = "N/A";
    }else{
        $inptViruela_r = $_POST['inptViruela'];
    }
    


    if (empty($_POST['inptTos'])){
        $inptTos_r = "N/A";
    }else{
        $inptTos_r = $_POST['inptTos'];
    }
    


    if (empty($_POST['inptDiafteria'])){
        $inptDiafteria_r = "N/A";
    }else{
        $inptDiafteria_r = $_POST['inptDiafteria'];
    }


    if (empty($_POST['inptTetano'])){
        $inptTetano_r = "N/A";
    }else{
        $inptTetano_r = $_POST['inptTetano'];
    }


    if (empty($_POST['inptTifica'])){
        $inptTifica_r = "N/A";
    }else{
        $inptTifica_r = $_POST['inptTifica'];
    }


    if (empty($_POST['inptBCG'])){
        $inptBCG_r = "N/A";
    }else{
        $inptBCG_r = $_POST['inptBCG'];
    }


    if (empty($_POST['inptPolio'])){
        $inptPolio_r = "N/A";
    }else{
        $inptPolio_r = $_POST['inptPolio'];
    }


    if (empty($_POST['inptTuber'])){
        $inptTuber_r = "N/A";
    }else{
        $inptTuber_r = $_POST['inptTuber'];
    }

      
    if (empty($_POST['inptOtras'])){
        $inptOtras_r = "N/A";
    }else{
        $inptOtras_r = $_POST['inptOtras'];
    }
    
    
    


    if ($_POST['sarampion']=="SI"){
        $sarampion_r = $_POST['sarampion'];
    }else{
        $sarampion_r = "N/A";
        
    }
    
    $ferina_r = $_POST['ferina'];

    if ($ferina_r=="SI"){
            $ferina_r = $_POST['ferina'];
    }else{
        $ferina_r = "N/A";
    }
    
    $rubeola_r = $_POST['rubeola'];

    if ($rubeola_r=="SI"){
        $rubeola_r = $_POST['rubeola'];     
    }else{
        $rubeola_r = "N/A";
    }
    
    $parotiditis_r = $_POST['parotiditis'];

    if ($parotiditis_r=="SI"){
        $parotiditis_r = $_POST['parotiditis'];
    }else{
        $parotiditis_r = "N/A";
    }
    
    $varicela_r = $_POST['varicela'];

    if ($varicela_r=="SI"){
        $varicela_r = $_POST['varicela'];
    }else{
        $varicela_r = "N/A";
        
    }
    
    $difteria_r = $_POST['difteria'];

    if ($difteria_r=="SI"){
        $difteria_r = $_POST['difteria'];
    }else{
        $difteria_r = "N/A";
        
    }
    
    $amigdalitis_r = $_POST['amigdalitis'];

    if ($amigdalitis_r=="SI"){
        $amigdalitis_r = $_POST['amigdalitis'];
    }else{
        $amigdalitis_r = "N/A";
        
    }
    
    $tifoidea_r = $_POST['tifoidea'];

    if ($tifoidea_r=="SI"){
        $tifoidea_r = $_POST['tifoidea'];
    }else{
        $tifoidea_r = "N/A";
        
    }
    
    $otitis_r = $_POST['otitis'];

    if ($otitis_r=="SI"){
        $otitis_r = $_POST['otitis'];
    }else{
        $otitis_r = "N/A";
        
    }
    
    $bronquitis_r = $_POST['bronquitis'];

    if ($bronquitis_r=="SI"){
        $bronquitis_r = $_POST['bronquitis'];
    }else{
        $bronquitis_r = "N/A";
        
    }
    
    $neumonia_r = $_POST['neumonia'];

    if ($neumonia_r=="SI"){
        $neumonia_r = $_POST['neumonia'];
    }else{
        $neumonia_r = "N/A";
        
    }
    
    $alergia_r = $_POST['alergia'];

    if ($alergia_r=="SI"){
        $alergia_r = $_POST['alergia'];
    }else{
        $alergia_r = "N/A";
        
    }
    
    $pleuseria_r = $_POST['pleuseria'];

    if ($pleuseria_r=="SI"){
        $pleuseria_r = $_POST['pleuseria'];
    }else{
        $pleuseria_r = "N/A";
        
    }
    
    $influenza_r = $_POST['influenza'];

    if ($influenza_r=="SI"){
        $influenza_r = $_POST['influenza'];
    }else{
        $influenza_r = "N/A";
        
    }
    
    $malaria_r = $_POST['malaria'];

    if ($malaria_r=="SI"){
        $malaria_r = $_POST['malaria'];
    }else{
        $malaria_r = "N/A";
        
    }
    
    $bilhar_r = $_POST['bilhar'];

    if ($bilhar_r=="SI"){
        $bilhar_r = $_POST['bilhar'];
    }else{
        $bilhar_r = "N/A";
        
    }
    
    $artritis_r = $_POST['artritis'];

    if ($artritis_r=="SI"){
        $artritis_r = $_POST['artritis'];
    }else{
        $artritis_r = "N/A";
        
    }
    
    $rinofaring_r = $_POST['rinofaring'];

    if ($rinofaring_r=="SI"){
        $rinofaring_r = $_POST['rinofaring'];
    }else{
        $rinofaring_r = "N/A";
        
    }
    
    $fiebresProlong_r = $_POST['fiebresProlong'];

    if ($fiebresProlong_r=="SI"){
        $fiebresProlong_r = $_POST['fiebresProlong'];
    }else{
        $fiebresProlong_r = "N/A";
        
    }
    



    if ($_POST['cancer']=="SI"){
        $cancer_r = $_POST['cancer'];
    }else{
        $cancer_r = "N/A";
    }


    if ($_POST['diabete']=="SI"){
        $diabete_r = $_POST['diabete'];
    }else{
        $diabete_r = "N/A";
    }


    if ($_POST['discracia']=="SI"){
        $discracia_r = $_POST['discracia'];
    }else{
        $discracia_r = "N/A";
    }

    if ($_POST['enfRenal']=="SI"){
        $enfRenal_r = $_POST['enfRenal'];
    }else{
        $enfRenal_r = "N/A";
        
    }


    if ($_POST['enfCard']=="SI"){
        $enfCard_r = $_POST['enfCard'];
    }else{
        $enfCard_r = "N/A";
        
    }


    if ($_POST['antAlergia']=="SI"){
        $antAlergia_r = $_POST['antAlergia'];
    }else{
        $antAlergia_r = "N/A";
        
    }

    if ($_POST['antArtritis']=="SI"){
        $antArtritis_r = $_POST['antArtritis'];
    }else{
        $antArtritis_r = "N/A";
        
    }

    if ($_POST['sifilis']=="SI"){
        $sifilis_r = $_POST['sifilis'];
    }else{
        $sifilis_r = "N/A";
        
    }


    if ($_POST['tuberculosis']=="SI"){
        $tuberculosis_r = $_POST['tuberculosis'];
    }else{
        $tuberculosis_r = "N/A";
        
    }


    if ($_POST['enfDigest']=="SI"){
        $enfDigest_r = $_POST['enfDigest'];
    }else{
        $enfDigest_r = "N/A";
        
    }


    if ($_POST['intoxicacion']=="SI"){
        $intoxicacion_r = $_POST['intoxicacion'];
    }else{
        $intoxicacion_r = "N/A";
        
    }

    if ($_POST['histFamOtros']=="SI"){
        $histFamOtros_r = $_POST['histFamOtros'];
    }else{
        $histFamOtros_r = "N/A";
        
    }
    
    $inptHistFam_r = $_POST['inptHistFam'];
    
    if (empty($_POST['inptHistFam'])){
        $inptHistFam_r = "N/A";        
    }else{
        $inptHistFam_r = $_POST['inptHistFam'];
    }
    
    
    
    //examen fisico//
    $condGeneral_r = $_POST['condGeneral'];

    if (empty($_POST['condGeneral'])){
        $condGeneral_r = "N/A";
    }else{
        $condGeneral_r = $_POST['condGeneral'];
    }
    
    $nutricion_r = $_POST['nutricion'];

    if (empty($_POST['nutricion'])){
        $nutricion_r = "N/A";
    }else{
        $nutricion_r = $_POST['nutricion'];
    }
    
    
    if (empty($_POST['condOtros'])){
        $condOtros_r = "N/A";
    }else{
        $condOtros_r = $_POST['condOtros'];
    }
    

    

    if (empty($_POST['inptColor'])){
        $inptColor_r = "N/A";
    }else{
        $inptColor_r = $_POST['inptColor'];
    }
    
    if (empty( $_POST['inptHumedad'])){
        $inptHumedad_r = "N/A";
    }else{
        $inptHumedad_r = $_POST['inptHumedad'];
    }
    

    if (empty($_POST['inptContext'])){
        $inptContext_r = "N/A";
    }else{
        $inptContext_r = $_POST['inptContext'];
    }


    if (empty($_POST['inptPigmento'])){
        $inptPigmento_r = "N/A";
    }else{
        $inptPigmento_r = $_POST['inptPigmento'];
    }


    if (empty($_POST['inptHidrata'])){
        $inptHidrata_r = "N/A";
    }else{
        $inptHidrata_r = $_POST['inptHidrata'];
    }
    

    if (empty($_POST['inptEquismo'])){
        $inptEquismo_r = "N/A";
    }else{
        $inptEquismo_r = $_POST['inptEquismo'];
    }

    if (empty($_POST['inptPete'])){
        $inptPete_r = "N/A";
    }else{
        $inptPete_r = $_POST['inptPete'];
    }
    

    if (empty($_POST['inptCia'])){
        $inptCia_r = "N/A";
    }else{
        $inptCia_r = $_POST['inptCia'];
    }
    

    if (empty($_POST['inptErup'])){
        $inptErup_r = "N/A";
    }else{
        $inptErup_r = $_POST['inptErup'];
    }
    

    if (empty($_POST['inptPanic'])){
        $inptPanic_r = "N/A";
    }else{
        $inptPanic_r = $_POST['inptPanic'];
    }
    
    if (empty($_POST['inptTurgor'])){
        $inptTurgor_r = "N/A";
    }else{
        $inptTurgor_r = $_POST['inptTurgor'];
    }
    
    if (empty($_POST['inptEdema'])){
        $inptEdema_r = "N/A";
    }else{
        $inptEdema_r = $_POST['inptEdema'];
    }
    

    if (empty($_POST['inptUnias'])){
        $inptUnias_r = "N/A";
    }else{
        $inptUnias_r = $_POST['inptUnias'];
    }

    if (empty($_POST['inptNod'])){
        $inptNod_r = "N/A";
    }else{
        $inptNod_r = $_POST['inptNod'];
    }
    

    if (empty($_POST['inptPeles'])){
        $inptPelos_r = "N/A";
    }else{
        $inptPelos_r = $_POST['inptPeles'];
    }
    
    if (empty($_POST['inptVascula'])){
        $inptVascula_r = "N/A";
    }else{
        $inptVascula_r = $_POST['inptVascula'];
    }
    
    if (empty($_POST['inptCicatris'])){
        $inptCicatris_r = "N/A";
    }else{
        $inptCicatris_r = $_POST['inptCicatris'];
    }
    

    if (empty($_POST['inptUlcera'])){
        $inptUlcera_r = "N/A";
    }else{
        $inptUlcera_r = $_POST['inptUlcera'];
    }
    

    if (empty($_POST['inptFistula'])){
        $inptFistula_r = "N/A";
    }else{
        $inptFistula_r = $_POST['inptFistula'];
    }
    
    
    if (empty($_POST['inptOtros'])){
        $inpOtros_r = "N/A";
    }else{
        $inpOtros_r = $_POST['inptOtros'];
    }
    



    if (empty($_POST['inptConf'])){
        $inptConf_r = "N/A";
    }else{
        $inptConf_r = $_POST['inptConf'];
    }
   

    if (empty($_POST['inptFront'])){
        $inptFront_r = "N/A";
    }else{
        $inptFront_r = $_POST['inptFront'];
    }


    if (empty($_POST['inptSutura'])){
        $inptSutura_r = "N/A";
    }else{
        $inptSutura_r = $_POST['inptSutura'];
    }


    if (empty($_POST['inptCircunf'])){
        $inptCircunf_r = "N/A";
    }else{
        $inptCircunf_r = $_POST['inptCircunf'];
    }


    if (empty($_POST['inptCraneo'])){
        $inptCraneo_r = "N/A";
    }else{
        $inptCraneo_r = $_POST['inptCraneo'];
    }


    if (empty($_POST['inptCabello'])){
        $inptCabello_r = "N/A";
    }else{
        $inptCabello_r = $_POST['inptCabello'];
    }

    
    if (empty($_POST['inptOtroscabe'])){
        $inptOtroscabe_r = "N/A";
    }else{
        $inptOtroscabe_r = $_POST['inptOtroscabe'];
    }
    



    if (empty($_POST['inptConjunti'])){
        $inptConjunti_r = "N/A";
    }else{
        $inptConjunti_r = $_POST['inptConjunti'];
    }


    if (empty($_POST['inptEsclero'])){
        $inptEsclero_r = "N/A";
    }else{
        $inptEsclero_r = $_POST['inptEsclero'];
    }


    if (empty($_POST['inptCornea'])){
        $inptCornea_r = "N/A";
    }else{
        $inptCornea_r = $_POST['inptCornea'];
    }


    if (empty($_POST['inptPupila'])){
        $inptPupila_r = "N/A";
    }else{
        $inptPupila_r = $_POST['inptPupila'];
    }


    if (empty($_POST['inptMovie'])){
        $inptMovie_r = "N/A";
    }else{
        $inptMovie_r = $_POST['inptMovie'];
    }
    

    if (empty($_POST['inptDesvia'])){
        $inptDesvia_r = "N/A";
    }else{
        $inptDesvia_r = $_POST['inptDesvia'];
    }


    if (empty($_POST['inptNistag'])){
        $inptNistag_r = "N/A";
    }else{
        $inptNistag_r = $_POST['inptNistag'];
    }


    if (empty($_POST['inptPtosis'])){
        $inptPtosis_r = "N/A";
    }else{
        $inptPtosis_r = $_POST['inptPtosis'];
    }


    if (empty($_POST['inptExostalmo'])){
        $inptExostalmo_r = "N/A";
    }else{
        $inptExostalmo_r = $_POST['inptExostalmo'];
    }


    if (empty($_POST['inptOftalmo'])){
        $inptOftalmo_r = "N/A";
    }else{
        $inptOftalmo_r = $_POST['inptOftalmo'];
    }
    //fin examen fisico//
    
    if (empty($_POST['inptOjo'])){
        $inptOjo_r = "N/A";
    }else{
        $inptOjo_r = $_POST['inptOjo'];
    }
    



    if (empty($_POST['inptPabellon'])){
        $inptPabellon_r = "N/A";
    }else{
        $inptPabellon_r = $_POST['inptPabellon'];
    }
    

    if (empty($_POST['inptCanal_r'])){
        $inptCanal_r = "N/A";
    }else{
        $inptCanal_r = $_POST['inptCanal_r'];
    }
    


    if (empty($_POST['inptTimpano'])){
        $inptTimpano_r = "N/A";
    }else{
        $inptTimpano_r = $_POST['inptTimpano'];
    }
    


    if (empty($_POST['inptAudicion'])){
        $inptAudicion_r = "N/A";
    }else{
        $inptAudicion_r = $_POST['inptAudicion'];
    }
    


    if (empty($_POST['inptSecre'])){
        $inptSecre_r = "N/A";
    }else{
        $inptSecre_r = $_POST['inptSecre'];
    }
    


    if (empty($_POST['inptMastoide'])){
        $inptMastoide_r = "N/A";
    }else{
        $inptMastoide_r = $_POST['inptMastoide'];
    }

    if (empty($_POST['inptDolor'])){
        $inptDolor_r = "N/A";
    }else{
        $inptDolor_r = $_POST['inptDolor'];
    }

    
    if (empty($_POST['selectInpOtro'])){
        $selectInpOtro_r = "N/A";
    }else{
        $selectInpOtro_r = $_POST['selectInpOtro'];
    }



    if (empty($_POST['inptFosas'])){
        $inptFosas_r = "N/A";
    }else{
        $inptFosas_r = $_POST['inptFosas'];
    }


    if (empty($_POST['inptMucosa'])){
        $inptMucosa_r = "N/A";
    }else{
        $inptMucosa_r = $_POST['inptMucosa'];
    }


    if (empty($_POST['inptSecrecion'])){
        $inptSecrecion_r = "N/A";
    }else{
        $inptSecrecion_r = $_POST['inptSecrecion'];
    }


    if (empty($_POST['inptTabique'])){
        $inptTabique_r = "N/A";
    }else{
        $inptTabique_r = $_POST['inptTabique'];
    }


    if (empty($_POST['inptAcceso'])){
        $inptAcceso_r = "N/A";
    }else{
        $inptAcceso_r = $_POST['inptAcceso'];
    }


    if (empty($_POST['inptDiasfa'])){
        $inptDiasfa_r = "N/A";
    }else{
        $inptDiasfa_r = $_POST['inptDiasfa'];
    }


    if (empty($_POST['inptAmigdala'])){
        $inptAmigdala_r = "N/A";
    }else{
        $inptAmigdala_r = $_POST['inptAmigdala'];
    }


    if (empty($_POST['inptFaringe'])){
        $inptFaringe_r = "N/A";
    }else{
        $inptFaringe_r = $_POST['inptFaringe'];
    }


    if (empty($_POST['inptAdenoide'])){
        $inptAdenoide_r = "N/A";
    }else{
        $inptAdenoide_r = $_POST['inptAdenoide'];
    }


    if (empty($_POST['inptPosnasal'])){
        $inptPosnasal_r = "N/A";
    }else{
        $inptPosnasal_r = $_POST['inptPosnasal'];
    }


    if (empty($_POST['inptDisfagia'])){
        $inptDisfagia_r = "N/A";
    }else{
        $inptDisfagia_r = $_POST['inptDisfagia'];
    }

    
    if (empty($_POST['inptFaOtro'])){
        $inFaOtro_r = "N/A";
    }else{
        $inFaOtro_r = $_POST['inptFaOtro'];
    }
    

    
    

    if (empty($_POST['inptAliento'])){
        $inptAliento_r = "N/A";
    }else{
        $inptAliento_r = $_POST['inptAliento'];
    }
    


    if (empty($_POST['inptLabios'])){
        $inptLabios_r = "N/A";
    }else{
        $inptLabios_r = $_POST['inptLabios'];
    }
    


    if (empty($_POST['inptDiente'])){
        $inptDiente_r = "N/A";
    }else{
        $inptDiente_r = $_POST['inptDiente'];
    }
    


    if (empty($_POST['inptEncia'])){
        $inptEncia_r = "N/A";
    }else{
        $inptEncia_r = $_POST['inptEncia'];
    }
    


    if (empty($_POST['inptBmucosa'])){
        $inptBmucosa_r = "N/A";
    }else{
        $inptBmucosa_r = $_POST['inptBmucosa'];
    }
    


    if (empty($_POST['inptLengua'])){
        $inptLengua_r = "N/A";
    }else{
        $inptLengua_r = $_POST['inptLengua'];
    }
    


    if (empty($_POST['inptConducto'])){
        $inptConducto_r = "N/A";
    }else{
        $inptConducto_r = $_POST['inptConducto'];
    }
    


    if (empty($_POST['inptParalisis'])){
        $inptParalisis_r = "N/A";
    }else{
        $inptParalisis_r = $_POST['inptParalisis'];
    }
    

    
    if (empty($_POST['inptBotros'])){
        $inptBotros_r = "N/A";
    }else{
        $inptBotros_r = $_POST['inptBotros'];
    }
    

    


    if (empty($_POST['inptMovilidad'])){
        $inptMovilidad_r = "N/A";
    }else{
        $inptMovilidad_r = $_POST['inptMovilidad'];
    }
    


    if (empty($_POST['inptTumoracion'])){
        $inptTumoracion_r = "N/A";
    }else{
        $inptTumoracion_r = $_POST['inptTumoracion'];
    }
    


    if (empty($_POST['inptTiroide'])){
        $inptTiroide_r = "N/A";
    }else{
        $inptTiroide_r = $_POST['inptTiroide'];
    }
    


    if (empty($_POST['inptVasos'])){
        $inptVasos_r = "N/A";
    }else{
        $inptVasos_r = $_POST['inptVasos'];
    }
    


    if (empty($_POST['inptTraquea'])){
        $inptTraquea_r = "N/A";
    }else{
        $inptTraquea_r = $_POST['inptTraquea'];
    }
    

    
    if (empty($_POST['inptCuello'])){
        $inptCuello_r = "N/A";
    }else{
        $inptCuello_r = $_POST['inptCuello'];
    }
    

    


    if (empty($_POST['inptCervical'])){
        $inptCervical_r = "N/A";
    }else{
        $inptCervical_r = $_POST['inptCervical'];
    }
    


    if (empty($_POST['inptOccipital'])){
        $inptOccipital_r = "N/A";
    }else{
        $inptOccipital_r = $_POST['inptOccipital'];
    }
    


    if (empty($_POST['inptSupra'])){
        $inptSupra_r = "N/A";
    }else{
        $inptSupra_r = $_POST['inptSupra'];
    }
    


    if (empty($_POST['inptAxilar'])){
        $inptAxilar_r = "N/A";
    }else{
        $inptAxilar_r = $_POST['inptAxilar'];
    }
    


    if (empty($_POST['inptInguinal'])){
        $inptInguinal_r = "N/A";
    }else{
        $inptInguinal_r = $_POST['inptInguinal'];
    }
    

    if (empty($_POST['inptEpi'])){
        $inptEpi_r = "N/A";
    }else{
        $inptEpi_r = $_POST['inptEpi'];
    }
    
    
    if (empty($_POST['inptGotros'])){
        $inptGotros_r = "N/A";
    }else{
        $inptGotros_r = $_POST['inptGotros'];
    }


    if (empty($_POST['inptForma'])){
        $inptForma_r = "N/A";
    }else{
        $inptForma_r = $_POST['inptForma'];
    }
    
    if (empty($_POST['inptSimetria'])){
        $inptSimetria_r = "N/A";
    }else{
        $inptSimetria_r = $_POST['inptSimetria'];
    }

    if (empty($_POST['inptExpansion'])){
        $inptExpansion_r = "N/A";
    }else{
        $inptExpansion_r = $_POST['inptExpansion'];
    }

    if (empty($_POST['inptPercusion'])){
        $inptPercusion_r = "N/A";
    }else{
        $inptPercusion_r = $_POST['inptPercusion'];
    }

    if (empty($_POST['inptRuido'])){
        $inptRuido_r = "N/A";
    }else{
        $inptRuido_r = $_POST['inptRuido'];
    }

    if (empty($_POST['inptPapitacion'])){
        $inptPapitacion_r = "N/A";
    }else{
        $inptPapitacion_r = $_POST['inptPapitacion'];
    }

    if (empty($_POST['inptRespcion'])){
        $inptRespcion_r = "N/A";
    }else{
        $inptRespcion_r = $_POST['inptRespcion'];
    }

    if (empty($_POST['inptRespcion_min'])){
        $inptRespcion_min_r = "N/A";
    }else{
        $inptRespcion_min_r = $_POST['inptRespcion_min'];
    }
    
    if (empty($_POST['inptToraxOtro'])){
        $inptToraxOtro_r = "N/A";
    }else{
        $inptToraxOtro_r = $_POST['inptToraxOtro'];
    }
    
    

    $fecha_reg = date("Y-m-d");
    $hora_reg = date("H:i:s");
    session_start();
    $usuario = $_SESSION['user_id'];

    $c_cedula=$_POST['cedulaPac'];

    $c_queryPac="SELECT * FROM paciente WHERE cedula_paciente ='".$c_cedula."'";

    $resultadoPac= $mysqli->query($c_queryPac);
    foreach ($resultadoPac as $pac) {
        $c_pac=$pac['cod_paciente'];
    }
     $c_queryDoctor="SELECT * FROM doctor WHERE cod_usuario = '".$usuario."'";
     
     $resultado = $mysqli->query($c_queryDoctor);

     foreach ( $resultado as $doc) {
         $c_doctor=$doc['cod_doc'];
     }
     //echo $c_doctor;
     //echo "|".$c_pac;

   $queryAdmision="INSERT INTO admision  VALUES (null,'".$mtvadmin_r."','".$enfactual_r."','".$diag_r."','".$diagclin_r."',
'".$otrosdiag_r."','".$interprincipal_r."','".$otrosdiag2_r."','N')";
    
    $queryDesarrollo="INSERT INTO desarrollo  VALUES (null,'".$inptrespirar_r."','".$inptcianosis_r."','".$inptfiebre_r."','".$inptvomitos_r."','".$inptictericia_r."','".$inpthemorragia_r."',
'".$inptconvulsion_r."','".$inptmalformacion_r."','".$inptoftalmia_r."','".$inptcoricia_r."','".$inptotros_r."','".$inptCabeza_r."','".$inptsentar_r."','".$inptpararse_r."',
'".$inptCamino_r."','".$inptPalabras_r."','".$inptEsfinter_r."','".$inptpDiente_r."','".$inptEscuela_r."','".$inptProgreso_r."','".$inptProgpeso_r."','N')";
    
    $queryAlimentacion="INSERT INTO alimentacion VALUES (null,'".$natural1_r."','".$artificial_r."','".$destete_r."','".$cereales_r."','".$sopas_r."','".$huevos_r."','".$carnes_r."','".$vitaminas_r."','".$frutas_r."','".$vegetales_r."','".$mixta_r."','".$dieta_r."','".$inptdieta_r."','N')";
    
   $queryHab="INSERT INTO habitos_psicologicos VALUES (null,'".$inptsuenio_r."','".$inptsiesta_r."','".$inptjuego_r."',
'".$inptsexo_r."','".$inptChupaDedos_r."','".$inptComeUnia_r."','".$inptRasgos_r."','".$inptRecreacion_r."','".$inptOcupacion_r."','".$inptHabOtros_r."','N')";
    
   $queryInmu="INSERT INTO inmunizantes_pruebas VALUES (null,'".$inptViruela_r."','".$inptTos_r."','".$inptDiafteria_r."','".$inptTetano_r."','".$inptTifica_r."','".$inptBCG_r."','".$inptPolio_r."','".$inptTuber_r."','".$inptOtras_r."','N')";
   
   $queryAntPer="INSERT INTO antecedentes_personales VALUES (null,'".$sarampion_r."','".$ferina_r."','".$rubeola_r."','".$parotiditis_r."','".$varicela_r."','".$difteria_r."','".$amigdalitis_r."','".$tifoidea_r."','".$otitis_r."','".$bronquitis_r."','".$neumonia_r."','".$alergia_r."','".$pleuseria_r."','".$influenza_r."','".$malaria_r."','".$bilhar_r."','".$artritis_r."','".$rinofaring_r."','".$fiebresProlong_r."','N')";
   
   $queryHistFam="INSERT INTO historia_familiar VALUES (null,'".$cancer_r."','".$diabete_r."','".$discracia_r."','".$enfRenal_r."','".$enfCard_r."','".$antAlergia_r."','".$antArtritis_r."','".$sifilis_r."','".$tuberculosis_r."','".$enfDigest_r."','".$intoxicacion_r."','".$histfamotros_r."','".$inptHistFam_r."','N')";

   $queryExmf="INSERT INTO examen_fisico VALUES (null,'".$condGeneral_r."','".$nutricion_r."','".$condOtros_r."', '".$inptColor_r."','".$inptHumedad_r."','".$inptContext_r."','".$inptPigmento_r."','".$inptHidrata_r."',
'".$inptEquismo_r."','".$inptPete_r."','".$inptCia_r."','".$inptErup_r."','".$inptPanic_r."','".$inptTurgor_r."','".$inptEdema_r."','".$inptUnias_r."',
'".$inptNod_r."','".$inptPelos_r."','".$inptVascula_r."','".$inptCicatris_r."','".$inptUlcera_r."','".$inptFistula_r."','".$inpOtros_r."',
'".$inptConf_r."','".$inptFront_r."','".$inptSutura_r."','".$inptCircunf_r."','".$inptCraneo_r."','".$inptCabello_r."','".$inptOtroscabe_r."',
'".$inptConjunti_r."','".$inptEsclero_r."','".$inptCornea_r."','".$inptPupila_r."','".$inptMovie_r."','".$inptDesvia_r."','".$inptNistag_r."',
'".$inptPtosis_r."','".$inptExostalmo_r."','".$inptOftalmo_r."','".$inptOjo_r."','".$inptPabellon_r."','".$inptCanal_r."','".$inptTimpano_r."',
'".$inptAudicion_r."','".$inptSecre_r."','".$inptMastoide_r."','".$inptDolor_r."','".$selectInpOtro_r."','".$inptFosas_r."','".$inptMucosa_r."',
'".$inptSecrecion_r."','".$inptTabique_r."','".$inptAcceso_r."','".$inptDiasfa_r."','".$inptAmigdala_r."','".$inptFaringe_r."','".$inptAdenoide_r."',
'".$inptPosnasal_r."','".$inptDisfagia_r."','".$inFaOtro_r."','".$inptAliento_r."','".$inptLabios_r."','".$inptDiente_r."','".$inptEncia_r."',
'".$inptBmucosa_r."','".$inptLengua_r."','".$inptConducto_r."','".$inptParalisis_r."','".$inptBotros_r."','".$inptMovilidad_r."','".$inptTumoracion_r."',
'".$inptTiroide_r."','".$inptVasos_r."','".$inptTraquea_r."','".$inptCuello_r."','".$inptCervical_r."','".$inptOccipital_r."','".$inptSupra_r."',
'".$inptAxilar_r."','".$inptInguinal_r."','".$inptEpi_r."','".$inptGotros_r."','".$inptForma_r."','".$inptSimetria_r."','".$inptExpansion_r."','".$inptPercusion_r."','".$inptRuido_r."','".$inptPapitacion_r."','".$inptRespcion_r."','".$inptRespcion_min_r."','".$inptToraxOtro_r."','N')";
    $medicamento=$_POST['inptMedicamento'];
    $dosis=$_POST['inptDosis'];
    $duracion=$_POST['inptDuracion'];
    $queryTra="INSERT INTO tratamiento VALUES (null,'".$medicamento."','".$dosis."','".$duracion."','N')";
    

    if (mysqli_query($mysqli, $queryAdmision)) {
        $c_queryAdmin="SELECT MAX(cod_admision) as cod_admision FROM admision WHERE status ='N'";
        $resultQueryAdmin= $mysqli->query($c_queryAdmin);
        foreach ($resultQueryAdmin as $c_codAdmin) {
            $admin=$c_codAdmin['cod_admision'];
        }
        if (mysqli_query($mysqli, $queryDesarrollo)) {
            $c_queryDesarrollo ="SELECT MAX(cod_desarrollo) as cod_desarrollo FROM desarrollo WHERE status ='N'";
            $resulDesarrollo = $mysqli->query($c_queryDesarrollo);
            foreach ($resulDesarrollo as $desarrollo) {
               $c_des = $desarrollo['cod_desarrollo'];
            }
            if (mysqli_query($mysqli, $queryAlimentacion)) {
                $c_queryAliment ="SELECT MAX(cod_alimentacion) as cod_alimentacion FROM alimentacion WHERE status='N'";
                $resulAliment = $mysqli->query($c_queryAliment);
                foreach ($resulAliment as $aliment) {
                   $c_aliment = $aliment['cod_alimentacion'];
                }
                if (mysqli_query($mysqli, $queryHab)) {
                    $c_queryHab ="SELECT MAX(cod_habit_psico) as cod_habit_psico FROM habitos_psicologicos WHERE status='N'";
                    $resultHab = $mysqli->query($c_queryHab);
                    foreach ($resultHab as $habitos) {
                        $c_habitos = $habitos['cod_habit_psico'];
                    }
                    if (mysqli_query($mysqli, $queryInmu)) {
                        $c_queryInmu="SELECT MAX(cod_inmu_pruebas) as cod_inmu_pruebas FROM inmunizantes_pruebas WHERE status='N'";
                       $resultInmu =$mysqli->query($c_queryInmu);
                       foreach ($resultInmu as $inmu) {
                           $c_inmunizante = $inmu['cod_inmu_pruebas'];
                       }
                        if (mysqli_query($mysqli, $queryAntPer)) {
                            $c_queryAntecedente ="SELECT MAX(cod_ant_per) as cod_ant_per FROM antecedentes_personales WHERE status='N'";
                           $resultAntecedente = $mysqli->query($c_queryAntecedente);
                           foreach ($resultAntecedente as $ant) {
                               $c_ant = $ant['cod_ant_per'];
                           }
                            if (mysqli_query($mysqli, $queryHistFam)) {
                                $c_queryHist ="SELECT MAX(cod_historia_fam) as cod_historia_fam FROM historia_familiar WHERE status='N'";
                                   $resultHist =$mysqli->query($c_queryHist);
                                   foreach ($resultHist as $histFam) {
                                       $c_histFam = $histFam['cod_historia_fam'];
                                   }
                               if (mysqli_query($mysqli, $queryExmf)) {
                                   $c_queryExamen ="SELECT MAX(cod_examen_fisico) as cod_examen_fisico FROM examen_fisico WHERE status='N'";
                                    $resultExam =$mysqli->query($c_queryExamen);
                                    foreach ($resultExam as $examen_fisico) {
                                        $c_examen = $examen_fisico['cod_examen_fisico'];
                                    }
                                    if (mysqli_query($mysqli, $queryTra)) {
                                        $c_queryTrata ="SELECT MAX(cod_tratamiento) as cod_tratamiento FROM tratamiento WHERE status='N'";
                                        $resultTrata =$mysqli->query($c_queryTrata);
                                        foreach ($resultTrata as $tratamiento) {
                                            $c_tratamiento= $tratamiento['cod_tratamiento'];
                                        }
                                        $queryPed="INSERT INTO pediatria  VALUES ('','".$c_pac."','".$c_doctor."','".$admin."','".$c_des."','".$c_aliment."','".$c_habitos."','".$c_inmunizante."','".$c_ant."','".$c_histFam."','".$c_examen."','".$radio_r."','".$fecha_nac."','".$fecha_reg."','".$hora_reg."','".$c_tratamiento."')";
                                        echo $queryPed;
                                       if (mysqli_query($mysqli,$queryPed)) {
                                         $updateAdm =$mysqli->query("UPDATE `admision` SET `status`='C' WHERE cod_admision ='".$admin."'");
                                         $updateDesa =$mysqli->query("UPDATE `desarrollo` SET `status`='C' WHERE cod_desarrollo ='".$c_des."'");
                                         $updateAli =$mysqli->query("UPDATE `alimentacion` SET `status`='C' WHERE cod_alimentacion ='".$c_aliment."'");
                                         $updateHab =$mysqli->query("UPDATE `habitos_psicologicos` SET `status`='C' WHERE cod_habit_psico ='".$c_habitos."'");
                                         $updateInmu =$mysqli->query("UPDATE `inmunizantes_pruebas` SET `status`='C' WHERE cod_inmu_pruebas ='".$c_inmunizante."'");
                                         $updateAnt =$mysqli->query("UPDATE `antecedentes_personales` SET `status`='C' WHERE cod_ant_per ='".$c_ant."'");
                                         $updateHistFam =$mysqli->query("UPDATE `historia_familiar` SET `status`='C' WHERE cod_historia_fam ='".$c_histFam."'");
                                         $updateExam =$mysqli->query("UPDATE `examen_fisico` SET `status`='C' WHERE cod_examen_fisico ='".$c_examen."'");
                                         $updateTrata =$mysqli->query("UPDATE `tratamiento` SET `status`='C' WHERE cod_tratamiento ='".$c_tratamiento."'");
                                         //echo "bien";
                                         echo '<script>alert("Enhorabuena, el registro fue exitoso")</script>';
                                         echo "<script>location.href='?view=vistas&action=tratamiento'</script>";
                                         
                                        }else{
                                            //echo "mal";
                                            echo '<script>alert("Ha ocurrido un error en el registro")</script>';
                                            echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
                                            }
                                    }else{
                                        //echo "error al registrar tratamiento";
                                    }
                               }
                            }
                        }
                    }
                }
            }
        }
    }
?>    