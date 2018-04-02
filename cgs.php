<?php

require("DBCredentials.php");
/**
 *
 */
class CGS extends DBCredentials
{
  private $myconn = "";
  private $myerr = 0;

  function __construct()
  {
    $this->myconn = new mysqli($this->getHost(),$this->getUser(),$this->getPass());

    if (mysqli_connect_errno()) {
      $this->myerr = mysqli_connect_errno();
    }

  }


  public function getPurpose(){
    $purpose = array();
    if($this->myerr==0 && !empty($this->myconn)){
      if ($stmt = $this->myconn->prepare("SELECT `reason` FROM  st_details.purpose")) {
           if($stmt->execute()){
            $stmt->bind_result($purposes);
            $i = 0;
            while ($stmt->fetch()) {
              $purpose[$i] = $purposes;
              $i++;
            }
           }
       }
    }
    return $purpose;
  }


  private function getCourse($htnoc){
    $course = "";
    if($this->myerr==0 && !empty($this->myconn)){
      $cr = substr($htnoc,5,1);
      if ($stmt = $this->myconn->prepare("SELECT longname FROM  st_details.coursenames WHERE  `coursecodes`=?")) {
          $stmt->bind_param("s",$cr);

           if($stmt->execute()){

            $stmt->bind_result($courses);
            while ($stmt->fetch()) {
              $course = $courses;
            }
           }
       }
    }
    return $course;
  }


  private function getSpec($htnos){
    $spec = "";
    if($this->myerr==0 && !empty($this->myconn)){
      $cr = substr($htnos,5,1);
      $sp = substr($htnos,6,2);
      if ($stmt = $this->myconn->prepare("SELECT `spec` FROM  st_details.specializations WHERE  `spec_code`=? AND  `cr_code`=?")) {
          $stmt->bind_param("ss",$sp,$cr);

           if($stmt->execute()){

            $stmt->bind_result($specs);
            while ($stmt->fetch()) {
              $spec = $specs;
            }
           }
       }
    }
    return $spec;
  }


  public function getStDetails($htnoa){
    $htnoa = strtoupper($htnoa);
    $res = array();
    $res['status'] = 0;

    if($this->myerr==0 && !empty($this->myconn)){
      $course = $this->getCourse($htnoa);
      $spec = $this->getSpec($htnoa);
      $yr = substr($htnoa,0,2);
      $query = "SELECT `stname`, `gender`, `fname`, `mname`, `year`, `sem`, `doj`, `dob` FROM st_details.year".$yr." WHERE `htno`=?";
      if ($stmt = $this->myconn->prepare($query)) {
          $stmt->bind_param("s",$htnoa);

           if($stmt->execute()){
            /* bind result variables */
            $stmt->bind_result($stname1,$gender1,$fname1,$mname1,$year1,$sem1,$doj1,$dob1);
            while ($stmt->fetch()) {
              $res['htno'] = strtoupper($htnoa);
              $res['stname'] = strtoupper($stname1);
              $res['fname'] = strtoupper($fname1);
              $res['mname'] = strtoupper($mname1);
              $res['gender'] = strtoupper($gender1);
              $res['year'] = strtoupper($year1);
              $res['sem'] = strtoupper($sem1);
              $res['doj'] = strtoupper($doj1);
              $res['dob'] = strtoupper($dob1);
              if(!empty($course) && !empty($spec)){
                $res['status'] = 1;
                $res['course'] = $course;
                $res['spec'] = $spec;
              }
            }/*while loop close*/
           }
           else{
             $res['status'] = 0;
             $res['error'] = "Data Error";
           }
       }
       else{
         $res['status'] = 0;
         $res['error'] = "Query Error";
       }
    }
    else{
      $res['status'] = 0;
      $res['error'] = "Error";
    }

    return $res;
  }


  public function studyCert($htnos,$stnames,$fnames,$genders,$classs,$periods,$purposes,$bywhoms){
    $insres = 0;
    if($this->myerr==0 && !empty($this->myconn)){
      $classs = preg_replace('/–-+/', '-', $classs);//str_replace('–',"-",$classs);
      $yr = substr($htnos,0,2);

      if ($stmt = $this->myconn->prepare("INSERT INTO study.`year10`(`htno`, `stname`, `gender`, `fname`, `class`, `period`, `purpose`, `bywhom`) VALUES (?,?,?,?,?,?,?,?)")) {
          $stmt->bind_param("ssssssss",$htnos,$stnames,$genders,$fnames,$classs,$periods,$purposes,$bywhoms);

           if($stmt->execute()){
             $insres = 1;
           }
       }
    }
    return $insres;
  }


  public function bonafideCert($htnob,$stnameb,$fnameb,$genderb,$classb,$periodb,$purposeb,$bywhomb){
    $insres = 0;
    if($this->myerr==0 && !empty($this->myconn)){
      $yr = substr($htnob,0,2);
      $query = "INSERT INTO bonafide.year".$yr." (`htno`, `stname`, `gender`, `fname`, `class`, `period`, `purpose`, `bywhom`) VALUES (?,?,?,?,?,?,?,?)";
      if ($stmt = $this->myconn->prepare($query)) {
          $stmt->bind_param("ssssssss",$htnob,$stnameb,$genderb,$fnameb,$classb,$periodb,$purposeb,$bywhomb);

           if($stmt->execute()){
             $insres = 1;
           }
       }
    }
    return $insres;
  }


  function __destruct(){
    if(!empty($this->myconn)){
      $this->myconn->close();
    }
  }

}

 ?>
