<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Json extends CI_Controller 
{
	
	public function test(){
//      $tablenames=$this->db->query("SELECT * FROM `table` WHERE `project`='7'")->result();
// // AUTOLOAD STARTS
//        $arrayformodels="";
//            foreach($tablenames as $key=>$value)
//            {
//                if($key==0)
//                {
//                    $arrayformodels.="'".$value->tablename."_model'";
//                }
//                else
//                {
//                    $arrayformodels.=","."'".$value->tablename."_model'";
//                }
//            }
//            $arrayformodels.=");";
//        $databasename='demo';
//        //        // get uri
//           $urlforautoload=$_SERVER["SCRIPT_FILENAME"];
//        // C:/xampp/htdocs/createOBackend/index.php
//        $urlforautoload=substr($urlforautoload,0,-9);
//        //C:/xampp/htdocs/createOBackend/    
//        $autoloadurl=$urlforautoload.'admins/'.$databasename.'/application/config/autoload.php';
//              // C:/xampp/htdocs/createOBackend/admins//application/config/autoload.php
//       
//              $autoloadurl = read_file($autoloadurl);
//                    $threeparts = explode('/* start */', $autoloadurl);
//        $threepartsmain=substr($threeparts[1],0,-4);
//        echo $threepartsmain;
//         $autoloadline = $threepartsmain.",".$arrayformodels;
//          $autoloadline =$threeparts[0]."\n".$autoloadline."\n".$threeparts[2];
////                    if (write_file($urlforautoload.'admins/'.$databasename.'/application/config/autoload.php', $autoloadline)) {
////                         echo 'File written!';
////                    }
////                    else{
////                         echo 'Unable to write the file';
////                    }
//        // AUTOLOAD ENDS
    }
 
}
?>