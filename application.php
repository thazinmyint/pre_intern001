<!DOCTYPE html>
<html>
<head>
<title> University Admission Systm</title>
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script> -->

        <link rel="stylesheet" type="text/css" href="bootstrapproject/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.css">

<link rel="stylesheet" href="bootstrapproject/bootstrap/js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.css">

<script type="text/javascript" src="bootstrapproject/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrapproject/bootstrap/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
        
</head>
<body class="d-flex flex-column">
    <?php
    include 'db.php';

    
   
    ?>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-primary navbar-custom fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="image/logo.jpeg" width="30%"></a>
    </div>
    <div class="navbar-collapse collapse">

        <ul  id="top-menu" class="nav navbar-nav navbar-right ">
			<li><a href="index.php" class="navbar-text">Home</a></li>
		    <li><a href="application.php" class="navbar-text pl-5">Online Application</a></li>
            <li><a href="login.php" class="navbar-text pl-5">Login</a></li>
		</ul>
			
    </div>
  </div>
</nav>
<div class="container pt-0">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active" >
                <img src="img/oxbanner.jpg"  id="imageslider">
                
            </div>
            <div class="carousel-item">
                <img src="img/oxbanner.jpg" id="imageslider">
                
            </div>
            <div class="carousel-item">
                <img src="img/oxbanner.jpg" id="imageslider">
                
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</header>
<?php
$valid=true;
// to validate inputs
if(!empty($_POST))
{
    $title=$_POST['title'];
    
    if(empty($title))
    {
        $titleError='Please choose title';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $engerror=$_POST['eng_name'];
    
    if(empty($engerror))
    {
        $engerror='Please fill English name';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $mmerror=$_POST['mm_name'];
    
    if(empty($mmerror))
    {
        $mmerror='Please fill Myanmar name';
        $valid=false;
    }
}


if(!empty($_POST))
{
    $emailerror=$_POST['email'];
    
    if(empty($emailerror))
    {
        $emailerror='Please fill Email';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $syllabuserror=$_POST['syllabus'];
    
    if(empty($syllabuserror))
    {
        $syllabuserror='Please fill Syllabus';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $schoolerror=$_POST['school'];
    
    if(empty($schoolerror))
    {
        $schoolerror='Please fill School';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $levelerror=$_POST['level'];
    
    if(empty($levelerror))
    {
        $levelerror='Please fill Level of Completion';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $majorerror=$_POST['major'];
    
    if(empty($majorerror))
    {
        $majorerror='Please fill Major of Completion';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $markerror=$_POST['marks'];
    
    if(empty($markerror))
    {
        $markerror='Please fill Marks';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $birthdateerror=$_POST['birthdate'];
    
    if(empty($birthdateerror))
    {
        $birthdateerror='Please fill Birthdate';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $nationalityerror=$_POST['nationality'];
     $citizenerror=$_POST['citizen'];
    if(empty($nationalityerror || $citizenerror))
    {
        $national_city_error='Please fill Nationality or Citizenship';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $religionerror=$_POST['religion'];
    
    if(empty($religionerror))
    {
        $religionerror='Please fill Religion';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $blooderror=$_POST['bloodtype'];
    
    if(empty($blooderror))
    {
        $blooderror='Please fill Blood type';
        $valid=false;
    }
}
if(!empty($_POST))
{
    $citizeniderror=$_POST['citizenid'];
    $passporterror=$_POST['passport'];
     
    if(empty($passporterror || $citizeniderror))
    {
        $citizen_passport_error='Please fill Citizenid or Passport number';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $townshiperror=$_POST['township'];
     $cityerror=$_POST['city'];
    if(empty($townshiperror || $cityerror))
    {
        $township_city_error='Please fill Township or City';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $zipcodeerror=$_POST['zipcode'];
    
    if(empty($zipcodeerror))
    {
        $zipcodeerror='Please fill Zip Code';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $telephoneerror=$_POST['telephone'];
     $mobileerror=$_POST['mobile'];
    if(empty($telephoneerror || $mobileerror))
    {
        $telephone_mobile_error='Please fill Telephone or Mobile';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $facebookerror=$_POST['facebook'];
    
    if(empty($facebookerror))
    {
        $facebookerror='Please fill Facebook';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $fnameerror=$_POST['fname'];
    
    if(empty($fnameerror))
    {
        $fnameerror='Please fill Father name';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $fnationalityerror=$_POST['fnationality'];
     $fcitizenerror=$_POST['fcitizen'];
    if(empty($fnationalityerror || $fcitizenerror))
    {
        $fnationality_citizen_error="Please fill Father's Nationality or Citizenship";
        $valid=false;
    }
}
     
if(!empty($_POST))
{
    $mnameerror=$_POST['mname'];
    
    if(empty($mnameerror))
    {
        $mnameerror='Please fill Mother name';
        $valid=false;
    }
}

if(!empty($_POST))
{
    $mnationalityerror=$_POST['mnationality'];
     $mcitizenerror=$_POST['mcitizen'];
    if(empty($mnationalityerror || $mcitizenerror))
    {
        $mnationality_citizen_error="Please fill Mother's Nationality or Citizenship";
        $valid=false;
    }
}




//to connect database
/* if ($valid) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO applicant(ename,mmname,major) values('$name','$position','$major')";
    $q = $pdo->prepare($sql); 
    $q->execute(array($name,$position,$major));
    Database::disconnect();
    header("Location: application.php");
}*/
?>
<script type="text/javascript">
    $(function () {
        $("input[name='fstatus']").click(function () {
            if ($("#fliving").is(":checked")) {
                $("#fage").removeAttr("disabled");
                $("#foccupation").removeAttr("disabled");
                $("#fposition").removeAttr("disabled");
                $("#faddress").removeAttr("disabled");
                $("#fstreet").removeAttr("disabled");
                $("#ftownship").removeAttr("disabled");
                $("#fcity").removeAttr("disabled");
                $("#fzipcode").removeAttr("disabled");
                $("#ftelephone").removeAttr("disabled");
                $("#fmobile").removeAttr("disabled");
                
                //$("#fage").focus();
            } else {
                $("#fage").attr("disabled", "disabled");
                $("#foccupation").attr("disabled", "disabled");
                $("#fposition").attr("disabled", "disabled");
                $("#faddress").attr("disabled", "disabled");
                $("#fstreet").attr("disabled", "disabled");
                $("#ftownship").attr("disabled", "disabled");
                $("#fcity").attr("disabled", "disabled");
                $("#fzipcode").attr("disabled", "disabled");
                $("#ftelephone").attr("disabled", "disabled");
                $("#fmobile").attr("disabled", "disabled");
                

            }
        });
    });

    $(function () {
        $("input[name='mstatus']").click(function () {
            if ($("#mliving").is(":checked")) {
                $("#mage").removeAttr("disabled");
                $("#moccupation").removeAttr("disabled");
                $("#mposition").removeAttr("disabled");
                $("#maddress").removeAttr("disabled");
                $("#mstreet").removeAttr("disabled");
                $("#mtownship").removeAttr("disabled");
                $("#mcity").removeAttr("disabled");
                $("#mzipcode").removeAttr("disabled");
                $("#mtelephone").removeAttr("disabled");
                $("#mmobile").removeAttr("disabled");
                
                //$("#fage").focus();
            } else {
                $("#mage").attr("disabled", "disabled");
                $("#moccupation").attr("disabled", "disabled");
                $("#mposition").attr("disabled", "disabled");
                $("#maddress").attr("disabled", "disabled");
                $("#mstreet").attr("disabled", "disabled");
                $("#mtownship").attr("disabled", "disabled");
                $("#mcity").attr("disabled", "disabled");
                $("#mzipcode").attr("disabled", "disabled");
                $("#mtelephone").attr("disabled", "disabled");
                $("#mmobile").attr("disabled", "disabled");
                

            }
        });
    });
</script>
<div class="container maincontent">
    <fieldset class="adminform">
    <legend>Admission Progress</legend>
      <table width="100%">
        <tr>
          <td width="20%"><b>1. Fill in Application</b></td>
          <td width="15%">2. Verify Data</td>
          <td width="32%">3. Print Application Form</td>
          <td width="12%">4. Login</td>
        </tr>
      </table>
      <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
       </div>
    </fieldset>
    <form class="form-horizontal" action="application.php" method="post">
      <div class="col-md-12 button mt-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
    <div class="container" >
    <div class="row">
      <h4> Applicant's Information </h4>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="title">Title</label>
           <div class="controls col-md-4">
                <select name="title" id="title" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="Mr" >Mr</option>
                  <option value="Ms" >Ms</option>
                  <option value="Mrs">Mrs</option>
                </select>
                <?php if (!empty($titleError)): ?>
                <span class="help-inline text-danger"><?php echo $titleError;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="eng_name">Name (Eng)</label>
            <div class="controls col-md-4">
               <input name="eng_name" type="text" id="eng_name" class="form-control form-control-inline col-md-4" placeholder="Name in English" >
               <?php if (!empty($engerror)): ?>
                <span class="help-inline text-danger"><?php echo $engerror;?></span>
                <?php endif; ?>
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mm_name">Name (MM)</label>
            <div class="controls col-md-4">
               <input name="mm_name" type="text" id="mm_name" class="form-control form-control-inline col-md-4" placeholder="Name in Myanmar" >

               <?php if (!empty($mmerror)): ?>
                <span class="help-inline text-danger"><?php echo $mmerror;?></span>
                <?php endif; ?>
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="gender">Gender</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="gender" id="male" checked>Male</label>
            <label class="radio-inline"><input type="radio" name="gender" id="female">Female</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
         <label class="control-label col-md-2" for="email">Email</label>
            <div class="controls col-md-4">
              
               <input name="email" type="text" id="email" class="form-control form-control-inline col-md-4">

               <?php if (!empty($emailerror)): ?>
                <span class="help-inline text-danger"><?php echo $emailerror;?></span>
                <?php endif; ?>
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="syllabus">Syllabus</label>
           <div class="controls col-md-4">
                <select name="syllabus" id="syllabus" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="civil" >Civil Engineering/option>
                  <option value="it" >IT Engineering</option>
                  <option value="electrical">Electrical Engineering</option>
                </select>
                <?php if (!empty($syllabuserror)): ?>
                <span class="help-inline text-danger"><?php echo $syllabuserror;?></span>
                <?php endif; ?>
            </div>
    </div>
    </div>
    <br><hr>

  <div class="container" >
    <div class="row">
      <h4>Education </h4>
    </div>
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="gender">Study in</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="studyin" id="myanmar" checked>Myanmar</label>
            <label class="radio-inline"><input type="radio" name="studyin" id="abroad ">Abroad</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="school">School</label>
            <div class="controls col-md-4">
               <input name="school" type="text" id="school" class="form-control form-control-inline col-md-4"  >

               <?php if (!empty($schoolerror)): ?>
                <span class="help-inline text-danger"><?php echo $schoolerror;?></span>
                <?php endif; ?>
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Level of Completion</label>
           <div class="controls col-md-4">
                <select name="level" id="level" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="gce_o" >GCE O Level</option>
                  <option value="gce_a" >GCE A Level</option>
                  <option value="grade11">Grade 11</option>
                  <option value="grade11">IGCSE</option>
                </select>
                <?php if (!empty($levelerror)): ?>
                <span class="help-inline text-danger"><?php echo $levelerror;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Major of Completion</label>
           <div class="controls col-md-4">
                <select name="major" id="level" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="gce_o" >Science (Biology)</option>
                  <option value="gce_a" >Arts</option>
                  <option value="grade11">Science and Arts</option>
                  <option value="grade11">other</option>
                </select>
                <?php if (!empty($majorerror)): ?>
                <span class="help-inline text-danger"><?php echo $majorerror;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="marks">Marks</label>
            <div class="controls col-md-4">
               <input name="marks" type="text" id="marks" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($markerror)): ?>
                <span class="help-inline text-danger"><?php echo $markerror;?></span>
                <?php endif; ?>
                            
            </div>
    </div>
  </div>
  <br><hr>

  <div class="container" >
    <div class="row">
      <h4>Personal Details </h4>
    </div>
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="birthdate">Birthdate</label>
            <div class="controls col-md-4">
            <input type="date" id="birthdate" name="birthdate">
            <?php if (!empty($birthdateerror)): ?>
                <span class="help-inline text-danger"><?php echo $birthdateerror;?></span>
                <?php endif; ?>
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="nationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="nationality" type="text" id="nationality" class="form-control form-control-inline col-md-4"  >

               
                            
            </div>
            <label class="control-label col-md-2" for="nationality">Citizenship</label>
            <div class="controls col-md-4">
               <input name="citizen" type="text" id="citizen" class="form-control form-control-inline col-md-4"  >

               
                            
            </div>
            <?php if (!empty($national_city_error)): ?>
                <span class="help-inline text-danger"><?php echo $national_city_error;?></span>
                <?php endif; ?>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Regligion</label>
           <div class="controls col-md-4">
                <select name="religion" id="religion" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="buddhism" >Buddhism</option>
                  <option value="chirstian" >Christian</option>
                  <option value="islam">Islam</option>
                  <option value="hindu">Hindu</option>
                  <option value="other">Other</option>
                </select>

                <?php if (!empty($religionerror)): ?>
                <span class="help-inline text-danger"><?php echo $religionerror;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="bloodtype">Blood Group</label>
           <div class="controls col-md-4">
                <select name="bloodtype" id="bloodtype" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="A" >A</option>
                  <option value="B" >B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
                <?php if (!empty($blooderror)): ?>
                <span class="help-inline text-danger"><?php echo $blooderror;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="citizenid">Citizen ID</label>
            <div class="controls col-md-4">
               <input name="citizenid" type="text" id="citizenid" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            <label class="control-label col-md-2" for="passport">If not Myanmar Citizen,enter passport number</label>
            <div class="controls col-md-4">
               <input name="passport" type="text" id="passport" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            <?php if (!empty($citizen_passport_error)): ?>
                <span class="help-inline text-danger"><?php echo $citizen_passport_error;?></span>
                <?php endif; ?>
    </div>
  </div>
  <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Mailing Address </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="address">Address No:</label>
            <div class="controls col-md-4">
               <input name="address" type="text" id="address" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street</label>
        <div class="controls col-md-4">
               <input name="street" type="text" id="street" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township</label>
        <div class="controls col-md-4">
               <input name="township" type="text" id="township" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="city">City</label>
        <div class="controls col-md-4">
               <input name="city" type="text" id="city" class="form-control form-control-inline col-md-4"  >
                            
        </div> 
        <?php if (!empty($township_city_error)): ?>
                <span class="help-inline text-danger"><?php echo $township_city_error;?></span>
                <?php endif; ?> 
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="zipcode" type="text" id="zipcode" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($zipcodeerror)): ?>
                <span class="help-inline text-danger"><?php echo $zipcodeerror;?></span>
            <?php endif; ?>
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Telephone</label>
        <div class="controls col-md-4">
               <input name="telephone" type="text" id="telephone" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="mobile">Mobile</label>
        <div class="controls col-md-4">
               <input name="mobile" type="text" id="mobile" class="form-control form-control-inline col-md-4"  >
                            
        </div> 
         <?php if (!empty($telephone_mobile_error)): ?>
                <span class="help-inline text-danger"><?php echo $telephone_mobile_error;?></span>
                <?php endif; ?>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="facebook">Facebook</label>
            <div class="controls col-md-4">
               <input name="facebook" type="text" id="facebook" class="form-control form-control-inline col-md-4"  >

               <?php if (!empty($facebookerror)): ?>
                <span class="help-inline text-danger"><?php echo $facebookerror;?></span>
                <?php endif; ?>
                            
            </div>
            
    </div>
  </div>
  <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Father's Information </h4>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fname">Name</label>
            <div class="controls col-md-4">
               <input name="fname" type="text" id="fname" class="form-control form-control-inline col-md-4"  >

               <?php if (!empty($fnameerror)): ?>
                <span class="help-inline text-danger"><?php echo $fnameerror;?></span>
                <?php endif; ?>
                            
            </div>
            
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="fnationality" type="text" id="fnationality" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            <label class="control-label col-md-2" for="fcitizen">Citizenship</label>
            <div class="controls col-md-4">
               <input name="fcitizen" type="text" id="fcitizen" class="form-control form-control-inline col-md-4"  >

               <?php if (!empty($fnationality_citizen_error)): ?>
                <span class="help-inline text-danger"><?php echo $fnationality_citizen_error;?></span>
                <?php endif; ?>  
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fstatus">Status</label>
            <div class="controls col-md-4">
          <label class="radio-inline"><input type="radio" name="fstatus" id="fliving" value="living" checked>Living</label>
            <label class="radio-inline"><input type="radio" name="fstatus" id="fdecease" value="decese">Decese</label>

           
                <!-- <span class="help-inline text-danger"><?php  $fstatus;?></span> -->
                
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="fage">Age</label>
        <div class="controls col-md-4">
         
                <input name="fage" type="text" id="fage" class="form-control form-control-inline col-md-4">
               
                 
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="foccupation">Occuputation</label>
        <div class="controls col-md-4">
               <input name="foccupation" type="text" id="foccupation" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
            <label class="control-label col-md-2" for="fposition">Position</label>
        <div class="controls col-md-4">
               <input name="fposition" type="text" id="fposition" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="faddress">Father's address</label>
        <div class="controls col-md-4">
               <input name="faddress" type="checkbox" id="faddress" class="form-check-input form-control-inline col-md-4"  >
               <label class="form-check-label" for="faddress">Same as applicant's address</label>           
        </div>  
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street</label>
        <div class="controls col-md-4">
               <input name="street" type="text" id="fstreet" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township</label>
        <div class="controls col-md-4">
               <input name="township" type="text" id="ftownship" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="city">City</label>
        <div class="controls col-md-4">
               <input name="city" type="text" id="fcity" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="zipcode" type="text" id="fzipcode" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Telephone</label>
        <div class="controls col-md-4">
               <input name="telephone" type="text" id="ftelephone" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="mobile">Mobile</label>
        <div class="controls col-md-4">
               <input name="mobile" type="text" id="fmobile" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>    <br>
    
  
  </div>
  <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Mother's Information </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fname">Name</label>
            <div class="controls col-md-4">
               <input name="mname" type="text" id="mname" class="form-control form-control-inline col-md-4"  >
               <?php if (!empty($mnameerror)): ?>
                <span class="help-inline text-danger"><?php echo $mnameerror;?></span>
                <?php endif; ?>     
            </div>
            
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="mnationality" type="text" id="mnationality" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            <label class="control-label col-md-2" for="fcitizen">Citizenship</label>
            <div class="controls col-md-4">
               <input name="mcitizen" type="text" id="mcitizen" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            <?php if (!empty($mnationality_citizen_error)): ?>
                <span class="help-inline text-danger"><?php echo $mnationality_citizen_error;?></span>
                <?php endif; ?>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="status">Status</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="mstatus" id="mliving" checked>Living</label>
            <label class="radio-inline"><input type="radio" name="mstatus" id="mdecese">Decese</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="fage">Age</label>
        <div class="controls col-md-4">

               <input name="mage" type="text" id="mage" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="foccupation">Occuputation</label>
        <div class="controls col-md-4">
               <input name="moccupation" type="text" id="moccupation" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
            <label class="control-label col-md-2" for="fposition">Position</label>
        <div class="controls col-md-4">
               <input name="mposition" type="text" id="mposition" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="faddress">Mother's address</label>
        <div class="controls col-md-4">
               <input name="maddress" type="checkbox" id="maddress" class="form-check-input form-control-inline col-md-4"  >
               <label class="form-check-label" for="faddress">Same as applicant's address</label>           
        </div>  
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street</label>
        <div class="controls col-md-4">
               <input name="street" type="text" id="mstreet" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township</label>
        <div class="controls col-md-4">
               <input name="township" type="text" id="mtownship" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="city">City</label>
        <div class="controls col-md-4">
               <input name="city" type="text" id="mcity" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="zipcode" type="text" id="mzipcode" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Telephone</label>
        <div class="controls col-md-4">
               <input name="telephone" type="text" id="mtelephone" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="mobile">Mobile</label>
        <div class="controls col-md-4">
               <input name="mobile" type="text" id="mmobile" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>    <br>
    
  
  </div>
  <br><hr>
    <div class="col-md-12 button">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form>
</div>


</body>
</html>