<!--
 * Student Info: Name=Han Wu, ID=16327
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Han 
 * Filename: index.php 
 * Date and Time: 2016-11-21 21:24:10 
 * Project Name: CS556_Team_Project 
 -->
 
<?php
include_once 'primary_contact_profiles.php';
include_once 'primary_contact_profiles_repository.php';
include_once 'signin_records.php';
include_once 'signin_records_repository.php';
require '../db/db_connect.php';

$primarycontacttestin= new PrimaryContactProfiles('','father','peter','li','hahaha','40','Chinese','teacher','NPU','9527@gmail.com',' ','1234567890',' ',' ',' ');
//$primarycontactprofileid=PrimaryContactProfilesRepository::addPrimaryContactProfile($primarycontacttestin);
$primarycontacttestout=  PrimaryContactProfilesRepository::getPrimaryContactProfiles();
//$result=insert($primarycontacttestout);
//if($result==false){
    //echo "$primarycontacttestout";
    //exit();
//}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Primary.and.Signin Test</title>
    </head>
    <body>
    
    <b1>Test DB</b1>
    <?php 
    echo '<pre>';
    print_r($primarycontacttestout);
    echo '</pre>';
    foreach($primarycontacttestout as $o) :
        if($o->getId()!=null){
            echo $o->getId().'<br>';
        }
        if($o->getRelationship()!=null){
            echo $o->getRelationship().'<br>';
        }            
        if($o->getFirst_name()!=null){
            echo $o->getFirst_name().'<br>';
        }
        if($o->getlast_name()!=null){
            echo $o->getlast_name().'<br>';
        }
        if($o->getChinese_name()!=null){
            echo $o->getChinese_name().'<br>';
        }
        if($o->getAge()!=null){
            echo $o->getAge().'<br>';
        }
        if($o->getLanguage_spoken()!=null){
            echo $o->getLanguage_spoken().'<br>';
        }
        if($o->getOccupation()!=null){
            echo $o->getOccupation().'<br>';
        }
        if($o->getEmployer()!=null){
            echo $o->getEmployer().'<br>';
        }
        if($o->getPrimary_email()!=null){
            echo $o->getPrimary_email().'<br>';
        }
        if($o->getAdditional_email()!=null){
            echo $o->getAdditional_email().'<br>';
        }
        if($o->getCell_phone_number()!=null){
            echo $o->getCell_phone_number().'<br>';
        }
        if($o->getWork_phone_number()!=null){
            echo $o->getWork_phone_number().'<br>';
        }
        if($o->getNote()!=null){
            echo $o->getNote().'<br>';
        }
        endforeach
        ?>
        
</body>
    
</html>
