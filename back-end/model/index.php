<!--
 * Student Info: Name=Han Wu, ID=16327
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Han 
 * Filename: index.php 
 * Date and Time: 2016-11-21 21:24:10 
 * Project Name: CS556_Team_Project 
 -->
 <!--
 
Warning: Missing argument 13 for PrimaryContactProfiles::__construct(), 
 called in /Applications/XAMPP/xamppfiles/htdocs/CS556_Team_Project/model/index.php on line 15 
 and defined in /Applications/XAMPP/xamppfiles/htdocs/CS556_Team_Project/model/primary_contact_profiles.php on line 17

Warning: Missing argument 14 for PrimaryContactProfiles::__construct(), 
 called in /Applications/XAMPP/xamppfiles/htdocs/CS556_Team_Project/model/index.php on line 15 
 and defined in /Applications/XAMPP/xamppfiles/htdocs/CS556_Team_Project/model/primary_contact_profiles.php on line 17

Notice: Undefined variable: work_phone_number in /Applications/XAMPP/xamppfiles/htdocs/CS556_Team_Project/model/primary_contact_profiles.php on line 30
Notice: Undefined variable: note in /Applications/XAMPP/xamppfiles/htdocs/CS556_Team_Project/model/primary_contact_profiles.php on line 31
Notice: Undefined variable: primaryContactProfile in /Applications/XAMPP/xamppfiles/htdocs/CS556_Team_Project/model/index.php on line 16
Fatal error: Uncaught Error: Call to a member function getRelationship() on null in /Applications/XAMPP/xamppfiles/htdocs/CS556_Team_Project/model/primary_contact_profiles_repository.php:76 Stack trace: #0 /Applications/XAMPP/xamppfiles/htdocs/CS556_Team_Project/model/index.php(16): PrimaryContactProfilesRepository::addPrimaryContactProfile(NULL) #1 {main} thrown in /Applications/XAMPP/xamppfiles/htdocs/CS556_Team_Project/model/primary_contact_profiles_repository.php on line 76
 -->
<?php
include_once 'primary_contact_profiles.php';
include_once 'primary_contact_profiles_repository.php';
include_once 'signin_records.php';
include_once 'signin_records_repository.php';

$primarycontacttestin=new PrimaryContactProfiles('Dad_son','Peter','Li','PeterLi','40'.'Chinese','teacher','NPU','9527@gmail.com','','1234567890','','Just do it');
$primarycontacttestmid=  PrimaryContactProfilesRepository::addPrimaryContactProfile($primaryContactProfile);
$primarycontacttestout=  PrimaryContactProfilesRepository::getPrimaryContactProfiles();
$result=insert($primarycontacttestout);
if($result==false){
    echo "$primarycontacttestout";
    exit();
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Primary.and.Signin Test</title>
    </head>
    <body>
    
    <b1>Test DB</b1>
    <?php 
    foreach($primarycontacttestout as $primarycontacttestin) :
        if($primarycontacttestin->getRelationship()!=null){
            echo TRUE;
        }            
        if($primarycontacttestin->getFirst_name()!=null){
            echo TRUE;
        }
        if($primarycontacttestin->getlast_name()!=null){
            echo TRUE;
        }
        if($primarycontacttestin->getChinese_name()!=null){
            echo TRUE;
        }
        if($primarycontacttestin->getAge()!=null){
            echo TRUE;
        }
        if($primarycontacttestin->getLanguage_spoken()!=null){
            echo TRUE;
        }
        if($primarycontacttestin->getOccupation()!=null){
            echo TRUE;
        }
        if($primarycontacttestin->getEmployer()!=null){
            echo TRUE;
        }
        if($primarycontacttestin->getPrimary_email()!=null){
            echo TRUE;
        }
        if($primarycontacttestin->getAdditional_email()!=null){
            echo TRUE;
        }
        if($primarycontacttestin->getCell_phone_number()!=null){
            echo TRUE;
        }
        if($primarycontacttestin->getWork_phone_number()!=null){
            echo TRUE;
        }
        if($primarycontacttestin->getNote()!=null){
            echo TRUE;
        }
        else
        {
            echo "Please check your db connection";
        }
        
        endforeach
        ?>
        
</body>
    
</html>
