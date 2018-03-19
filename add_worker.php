<?php include_once("connect.php"); ?>
<?php

$error = "";
if(isset($_POST['submit'])){
    $sl_no = $_POST['sl_no'];
    $title 		 = $_POST['title'];
    $name_eng 	 = $_POST['name_eng'];
    $name_bng 	 = $_POST['name_bng'];
    $f_name_eng  = $_POST['f_name_eng'];
    $f_name_bng  = $_POST['f_name_bng'];
    $m_name_eng  = $_POST['m_name_eng'];
    $m_name_bng  = $_POST['m_name_bng'];
    $gender 	 = $_POST['gender'];
	$village_eng = $_POST['village_eng'];
    $village_bng = $_POST['village_bng'];
	$post_o_eng  = $_POST['post_o_eng'];
    $post_o_bng  = $_POST['post_o_bng'];
	$district 	 = $_POST['district'];
    $mobile 	 = $_POST['mobile'];
	$nid_no 	 = $_POST['nid_no'];
    $education   = $_POST['education'];
    $married 	 = $_POST['married'];
    $religion    = $_POST['religion'];
    $blood_g	 = $_POST['blood_g'];
    $weight		 = $_POST['weight'];
    $height		 = $_POST['height'];
    $country	 = $_POST['country'];
    $other 		 = $_POST['other'];
    $doa_eng 	 = $_POST['doa_eng'];
    $doa_cal	 = $_POST['doa_cal'];
    $doj_eng	 = $_POST['doj_eng'];
    $doj_cal	 = $_POST['doj_cal'];
    $salary_eng  = $_POST['salary_eng'];
    $salary_bng  = $_POST['salary_bng'];
    $grade       = $_POST['grade'];
    $designation = $_POST['designation'];
    $section 	 = $_POST['section'];
    $department  = $_POST['department'];
    $emp_id 	 = $_POST['emp_id'];
    $management  = $_POST['management'];
    $assign_cat  = $_POST['assign_cat'];
    $identity_assign 	 = $_POST['identity_assign'];
    
    if(strlen($sl_no) < 2){
        $error = "SL No is too short";
    }else{
        $insQuery = "INSERT INTO worker(sl_no, title, name_eng, name_bng, f_name_eng,f_name_bng, m_name_eng, gender, village_eng, village_bng, post_o_eng, post_o_bng, district, mobile, nid_no, education, married, religion, blood_g, weight, height, country, other, doa_eng, doa_cal, doj_eng, doj_cal, salary_eng, salary_bng, grade, designation, section, department, emp_id, management, assign_cat, identity_assign)  VALUES ('$sl_no', '$title', '$name_eng', '$name_bng', '$f_name_eng', '$f_name_bng', '$m_name_eng', '$gender', '$village_eng', '$village_bng', '$post_o_eng', '$post_o_bng', '$district', '$mobile', '$nid_no', '$education', '$married', '$religion', '$blood_g', '$weight', '$height', '$country', '$other', '$doa_eng', '$doa_cal', '$doj_eng', '$doj_cal', '$salary_eng', '$salary_bng', '$grade', '$designation', '$section', '$department', '$emp_id', '$management', '$assign_cat', 'identity_assign')";
        if(mysqli_query($con, $insQuery))
        {
            $error = "Worker Info Added successfully";
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css" >

        #wrapper{
            width: 1000px;
            margin: 0 auto;
            border: invisible;
        }

        #divID {
            line-height: 1.8em;
            text-align: justify;
        }

        #divID h1 {
            letter-spacing: 6px;
            font-size: 40px;
            font-style: italic;
            text-align: center;
        }

        #divID h2 {
            letter-spacing: 5px;
            font-size: 30px;
            font-style: italic;
            text-align: center;
        }

        #divID h4 {
            font-size: 20px;
        }

        #divID h3 {
            font-size: 20px;
        }

        input[type=text] {
            width: 35%;
        }

        #divLeft{
            width: 60%;
            float: left;
        }
        #divRight{
            width: 40%;
            float: right;
        }



        .BlackButton {
            background-color: green;
            border-radius: 10px;
            cursor: pointer;
            color: black;
            font-size: 20px;
            padding: 15px;
        }

        .BlackButton:hover {
            color: white;
            background-color: gold;
        }

    </style>
</head>

<body background="wwr.jpg">

<div id="wrapper">
    <div id="divID">
        <h1><font color="orange">Columbia Washing Plant LTD</font></h1>
        <h2><font color="orange">Worker Reqrutment Form</font></h2>
        <h3><span style="color:green; align:center;"><?php echo $error; ?></span></h3>
        <form method="POST" action="">
            <div id="divLeft">
                <h4> <font color="black">SL No. <input type="text" name="sl_no"></font> </h4>
                <h4><font color="black">
                        <label for="title">Title: </label>
                        <label> <input type="radio" name="title" value="0"/>Mr</label>
                        <label> <input type="radio" name="title" value="1"/>Mrs</label>
                        <label> <input type="radio" name="title" value="2"/>Miss</label>

                    </font></h4>
                <h4> <font color="black">Name: <input type="text" name="name_eng" placeholder="English"></font> </h4>
                <h4><input type="text" name="name_bng" placeholder="Bangla"> </h4>

                <h4> <font color="black">Father Name: <input type="text" name="f_name_eng" placeholder="English"></font> </h4>
                <h4><input type="text" name="f_name_bng" placeholder="Bangla"> </h4>

                <h4> <font color="black">Mother Name: <input type="text" name="m_name_eng" placeholder="English"></font> </h4>
                <h4><input type="text" name="m_name_bng" placeholder="Bangla"> </h4>

                <h4><font color="black">
                        <label for="title">Gender: </label>
                        <label> <input type="radio" name="gender" value="0"/>Male</label>
                        <label> <input type="radio" name="gender" value="1"/>Female</label>
                        <label> <input type="radio" name="gender" value="2"/>Other</label>
                    </font></h4>
                <h4> <font color="black">Vil: <input type="text" name="village_eng" placeholder="English"></font></h4>
                <h4><input type="text" name="village_bng" placeholder="Bangla"> </h4>

                <h4> <font color="black">P.O: <input type="text" name="post_o_eng" placeholder="English"></font></h4>
                <h4><input type="text" name="post_o_bng" placeholder="Bangla"> </h4>

                <h4> <font color="black">P.S: <input type="text" name="post_s_eng" placeholder="English"></font></h4>
                <h4><input type="text" name="post_s_bng" placeholder="Bangla"> </h4>

                <h4> <font color="black">Dist: <input type="text" name="district" placeholder="English"></font></h4>

                <h4> <font color="black">Mobile: <input type="number" name="mobile" placeholder="English"></font></h4>
                <h4> <font color="black">NID/BC: <input type="number" name="nid_no" placeholder="English"></font></h4>

            </div>

            <div id="divRight">
                <h4><font color="black">
                        <label for="title">Education: </label>
                        <label> <input type="radio" name="education" value="0"/>Yes</label>
                        <label> <input type="radio" name="education" value="1"/>No</label>
                    </font></h4>
                <h3><font color="black">
                        <label for="title">Married: </label>
                        <label> <input type="radio" name="married" value="0"/>Yes</label>
                        <label> <input type="radio" name="married" value="1"/>No</label>
                    </font></h3>
                <h3><font color="black">
                        <label for="title">Religion: </label>
                        <label> <input type="radio" name="religion" value="0"/>Islam</label>
                        <label> <input type="radio" name="religion" value="1"/>Hindu</label>
                        <label> <input type="radio" name="religion" value="2"/>Other</label>
                    </font></h3>
                <h3><font color="black">
                        <label for="title">Blood Group: </label>
                        <label> <input type="radio" name="blood_g" value="0"/>A+</label>
                        <label> <input type="radio" name="blood_g" value="1"/>A-</label>
                        <label> <input type="radio" name="blood_g" value="2"/>B+</label>
                    </font></h3>

                <h3> <font color="black">Weight(KG): <input type="text" name="weight" placeholder="English"></font></h3>
                <h3> <font color="black">Height(CM): <input type="text" name="height" placeholder="English"></font></h3>
                <h3> <font color="black">Country: Bangladesh<input type="checkbox" name="country" value="Bangladesh"> </font></h3>
                <h3> <font color="black">Other <input type="text" name="other" placeholder="English"></font></h3>
                <h3> <font color="black">DOA: <input type="text" name="doa_eng" placeholder="English"> <input type="text" name="doa_cal" placeholder="Calender"></font> </h3>
                <h3> <font color="black">DOJ: <input type="text" name="doj_eng" placeholder="English"> <input type="text" name="doj_cal" placeholder="Calender"></font></h3>
                <h3> <font color="black">Salary: <input type="text" name="salary_eng" placeholder="English"></font></h3>
                <h3> <font color="black">Salary: <input type="text" name="salary_bng" placeholder="In Bangla Word"></font></h3>
                <!--<h3> <font color="black">House Rent: <input type="text" placeholder="English"></font></h3>
                <h3> <font color="black">Electricity Bill: <input type="text" placeholder="English"></font></h3>
                <h3> <font color="black">Probation Period: <input type="text" placeholder="English"></font> </h3>-->
                <h3> <font color="black">Grade: <input type="text" name="grade" placeholder="English"></font></h3>
                <h3> <font color="black">Designation: <input type="text" name="designation" placeholder="English"></font> </h3>
                <h3> <font color="black">Section: <input type="text" name="section" placeholder="English"></font></h3>
                <h3> <font color="black">Department: <input type="text" name="department" placeholder="English"></font></h3>
                <h3> <font color="black">EMP ID: <input type="text" name="emp_id" placeholder="English"></font></h3>
                <h3><font color="black">
                        <label for="title">Action:</label>
                        <label> <input type="radio" name="management" value="0"/>Management</label>
                        <label> <input type="radio" name="management" value="1"/>Non-mgt</label>
                    </font></h3>
                <h3><font color="black">
                        <label for="title">Assign category:</label>
                        <label> <input type="radio" name="assign_cat" value="0"/>Local</label>
                        <label> <input type="radio" name="assign_cat" value="1"/>Regular</label>
                        <label> <input type="radio" name="assign_cat" value="2"/>Other</label>
                    </font></h3>
                <h3> <font color="black">Identity Assign:<input type="text" name="identity_assign" placeholder="Bangla"></font></h3>
            </div>

            <input type="submit" name="submit" class="BlackButton"/><br/>
        </form>

    </div>
</body
</html>