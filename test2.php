<!DOCTYPE html>
<html>
<head>
	<title>Student Crud Operation</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
<a href="http://125.17.181.198/" target="_blank"><img src="data:image/jpeg;base64,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" alt="" width="350px" ></a><br><hr>

        <main>
            <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Student Id.</label>
            <input type="text" class="form-control" name="card_no" placeholder="Enter 12-digit Student Id." maxlength="12" required>
            </div>
            </div>

            <div class="form-group col-md-6">
<label for="inputPassword4">Mobile No.</label>
<input type="phone" class="form-control" name="user_phone" placeholder="Enter 10-digit Mobile no." maxlength="10" required>
</div>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="firstname">First Name</label>
<input type="text" class="form-control" name="user_first_name" placeholder="Enter First Name">
</div>
<div class="form-group col-md-6">
<label for="lastname">Last Name</label>
<input type="text" class="form-control" name="user_last_name" placeholder="Enter Last Name">
</div>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="fathername">Father's Name</label>
<input type="text" class="form-control" name="user_father" placeholder="Enter First Name">
</div>
<div class="form-group col-md-6">
<label for="mothername">Mother's Name</label>
<input type="text" class="form-control" name="user_mother" placeholder="Enter Last Name">
</div>
</div>


<div class="form-row" style="color: skyblue;">
<div class="form-group col-md-6">
<label for="email">Email Id</label>
<input type="email" class="form-control" name="user_email" placeholder="Enter Email id">
</div>
<div class="form-group col-md-6">
<label for="aadharno">Aadhar No.</label>
<input type="text" class="form-control" name="user_aadhar" maxlength="12" placeholder="Enter 12-digit Aadhar no. ">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputState">Gender</label>
<select id="inputState" name="user_gender" class="form-control">
  <option selected>Choose...</option>
  <option>Male</option>
  <option>Female</option>
  <option>Other</option>
</select>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Date of Birth</label>
<input type="date" class="form-control" name="user_dob" placeholder="Date of Birth">
</div>
</div>


<div class="form-group">
<label for="family">Family Member's</label>
    <textarea class="form-control" name="family" rows="3"></textarea>
</div>



<div class="form-group">
<label for="inputAddress">Village</label>
<input type="text" class="form-control" name="village" placeholder="1234 Main St">
</div>
<div class="form-group">
<label for="inputAddress2">Police Station</label>
<input type="text" class="form-control" name="police_station" placeholder="Enter police station">
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputCity">District</label>
<input type="text" class="form-control" name="dist">
</div>
<div class="form-group col-md-4">
<label for="inputState">State</label>
<select name="state" class="form-control">
  <option selected>Choose...</option>
  <option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Puducherry">Puducherry</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="West Bengal">West Bengal</option>
</select>
</div>
<div class="form-group col-md-2">
<label for="inputZip">Zip</label>
<input type="text" class="form-control" name="pincode">
</div>
</div>


<div class="form-group">
<label for="inputAddress">Staff Id one who add this Student.</label>
<input type="text" class="form-control" name="staff_id" maxlength="12" placeholder="Enter 12-digit Staff Id">
</div>

<div class="form-group">
<label for="inputAddress">test text</label>
<input type="text" class="form-control" name="test" maxlength="12" placeholder="Enter test text">
</div>

<div class="form-group">
<label for="inputAddress">Initial</label>
<input type="text" class="form-control" name="Intial" maxlength="12" placeholder="Enter Initial">
</div>

<div class="form-group">
<label for="inputAddress">Name</label>
<input type="text" class="form-control" name="Name" maxlength="12" placeholder="Enter Name">
</div>
			
<div class="form-group">
<label for="inputState">Course</label>
<select name="Course" class="form-control">
  <option selected>Choose...</option>
  <option value="B.E">B.E</option>
  <option value="B.Tech">B.Tech</option>
  <option value="M.E">M.E</option>
  <option value="M.Tech">M.Tech</option>
  <option value="MBA">MBA</option>
  <option value="MBA(Integrated 5 Yrs)">MBA(Integrated 5 Yrs)</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Department</label>
<input type="text" class="form-control" name="Department" maxlength="40" placeholder="Enter Department Name">
</div>

<div class="form-group">
<label for="inputAddress">Batch</label>
<input type="text" class="form-control" name="Batch" maxlength="12" placeholder="Enter Batch">
</div>

<div class="form-group">
<label for="inputAddress">Roll No</label>
<input type="text" class="form-control" name="Roll No" maxlength="12" placeholder="Enter Roll No">
</div>

<div class="form-group">
<label for="inputAddress">A U Reg. No.</label>
<input type="text" class="form-control" name="A U Reg. No." maxlength="12" placeholder="Enter A U Reg. No.">
</div>

<div class="form-group">
<label for="inputState">Section</label>
<select name="Section" class="form-control">
  <option selected>Choose...</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Gender</label>
<select name="Gender" class="form-control">
  <option selected>Choose...</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Food</label>
<select name="Food" class="form-control">
  <option selected>Choose...</option>
  <option value="Veg">Veg</option>
  <option value="Non-Veg">Non-Veg</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Blood Group</label>
<input type="text" class="form-control" name="Blood Group" maxlength="12" placeholder="Enter Blood Group">
</div>

<div class="form-group col-md-6">
<label for="inputPassword4">Date of Birth</label>
<input type="date" class="form-control" name="Date of Birth" placeholder="Date of Birth">
</div>

<div class="form-group col-md-6">
<label for="inputPassword4">Date of Admission</label>
<input type="date" class="form-control" name="Date Of Admission" placeholder="Date of Admission">
</div>

<div class="form-group">
<label for="inputAddress">Aadhaar No.</label>
<input type="text" class="form-control" name="Aadhaar No." maxlength="12" placeholder="Enter Aadhaar No.">
</div>

<div class="form-group">
<label for="email">Student's Mail-ID</label>
<input type="email" class="form-control" name="Student's Mail-ID" maxlength="30" placeholder="Enter Student's Mail-ID">
</div>

<div class="form-group">
<label for="inputState">Community</label>
<select name="Community" class="form-control">
  <option selected>Choose...</option>
  <option value="OC">OC</option>
  <option value="BC">BC</option>
  <option value="BCM">BCM</option>
  <option value="MBC & DNC">MBC & DNC</option>
  <option value="SC">SC</option>
  <option value="SCA">SCA</option>
  <option value="ST">ST</option>
  <option value="Others">Others</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Community (Others)</label>
<input type="text" class="form-control" name="Community" maxlength="12" placeholder="Enter Community">
</div>

<div class="form-group">
<label for="inputState">Admission Allotment</label>
<select name="Admission Allotment" class="form-control">
  <option selected>Choose...</option>
  <option value="Regular">Regular</option>
  <option value="Vocational">Vocational</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Type</label>
<select name="Sports Admission" class="form-control">
  <option selected>Choose...</option>
  <option value="Government - General">Government - General</option>
  <option value="Special Reservation">Special Reservation</option>
  <option value="(Eminent Sports/Ex-servicemen/PH)">(Eminent Sports/Ex-servicemen/PH)</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Parent Annual Income</label>
<input type="text" class="form-control" name="Parent Annual Income" maxlength="12" placeholder="Enter Parent Annual Income">
</div>

<div class="form-group">
<label for="inputAddress">Religion</label>
<input type="text" class="form-control" name="Religion" maxlength="12" placeholder="Enter Religion">
</div>

<div class="form-group">
<label for="inputAddress">Nationality</label>
<input type="text" class="form-control" name="Nationality" maxlength="12" placeholder="Enter Nationality">
</div>

<div class="form-group">
<label for="inputAddress">Mother Tongue</label>
<input type="text" class="form-control" name="Mother Tongue" maxlength="12" placeholder="Enter Mother Tongue">
</div>

<div class="form-group">
<label for="inputAddress">Overall Rank</label>
<input type="text" class="form-control" name="Overall Rank" maxlength="12" placeholder="Enter Overall Rank">
</div>

<div class="form-group">
<label for="inputAddress">Community Rank</label>
<input type="text" class="form-control" name="Community Rank" maxlength="12" placeholder="Enter Community Rank">
</div>

<div class="form-group">
<label for="inputState">Sports Admission</label>
<select name="Sports Admission" class="form-control">
  <option selected>Choose...</option>
  <option value="Yes">Yes(Govt/Mgmt)</option>
  <option value="No">No</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">If Yes, Specify the Game</label>
<input type="text" class="form-control" name="If Yes, Specify the Game" maxlength="12" placeholder="Enter Name Of The Game">
</div>

<div class="form-group">
<label for="inputState">Medium Of Instruction</label>
<select name="Medium Of Instruction" class="form-control">
  <option selected>Choose...</option>
  <option value="Tamil">Tamil</option>
  <option value="English">English</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Member Of</label>
<select name="Menber Of" class="form-control">
  <option selected>Choose...</option>
  <option value="NCC">NCC</option>
  <option value="NSS">NSS</option>
  <option value="YRC">YRC</option>
  <option value="Others">Others</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Father's Name</label>
<input type="text" class="form-control" name="Father's Name" maxlength="40" placeholder="Enter Father's Name">
</div>

<div class="form-group">
<label for="inputAddress">Father's Qualification</label>
<input type="text" class="form-control" name="Father's Qualification" maxlength="12" placeholder="Enter Father's Qualification">
</div>

<div class="form-group">
<label for="inputAddress">Father's Occupation</label>
<input type="text" class="form-control" name="Father's Occupation" maxlength="12" placeholder="Enter Father's Occupation">
</div>

<div class="form-group">
<label for="inputAddress">Father's Address Of Firm/Company</label>
<input type="text" class="form-control" name="Father's Address Of Firm/Company" maxlength="100" placeholder="Enter Father's Address Of Firm/Company">
</div>

<div class="form-group">
<label for="inputAddress">Father's Designation</label>
<input type="text" class="form-control" name="Father's Designation" maxlength="12" placeholder="Enter Father's Designation">
</div>

<div class="form-group">
<label for="email">Father's Mail-ID</label>
<input type="email" class="form-control" name="Father's Mail-ID" maxlength="30" placeholder="Enter Father's Mail-ID">
</div>

<div class="form-group">
<label for="inputAddress">Country Code</label>
<input type="text" class="form-control" name="Country Code" maxlength="12" placeholder="Enter Country Code">
</div>

<div class="form-group">
<label for="inputAddress">STD Code</label>
<input type="text" class="form-control" name="STD Code" maxlength="12" placeholder="Enter STD Code">
</div>

<div class="form-group">
<label for="inputAddress">Land Line Number</label>
<input type="text" class="form-control" name="Land Line Number" maxlength="12" placeholder="Enter Land Line Number">
</div>

<div class="form-group">
<label for="inputAddress">Mobile Number</label>
<input type="text" class="form-control" name="Mobile Number" maxlength="12" placeholder="Enter Mobile Number">
</div>

<div class="form-group">
<label for="inputAddress">Mother's Name</label>
<input type="text" class="form-control" name="Mother's Name" maxlength="40" placeholder="Enter Mother's Name">
</div>

<div class="form-group">
<label for="inputAddress">Mother's Qualification</label>
<input type="text" class="form-control" name="Mother's Qualification" maxlength="12" placeholder="Enter Mother's Qualification">
</div>

<div class="form-group">
<label for="inputAddress">Mother's Occupation</label>
<input type="text" class="form-control" name="Mother's Occupation" maxlength="12" placeholder="Enter Mother's Occupation">
</div>

<div class="form-group">
<label for="inputAddress">Mother's Address Of Firm/Company</label>
<input type="text" class="form-control" name="Mother's Address Of Firm/Company" maxlength="100" placeholder="Enter Mother's Address Of Firm/Company">
</div>

<div class="form-group">
<label for="inputAddress">Mother's Designation</label>
<input type="text" class="form-control" name="Mother's Designation" maxlength="12" placeholder="Enter Mother's Designation">
</div>

<div class="form-group">
<label for="email">Mother's Mail-ID</label>
<input type="email" class="form-control" name="Mother's Mail-ID" maxlength="30" placeholder="Mother's Mail-ID">
</div>

<div class="form-group">
<label for="inputAddress">Country Code</label>
<input type="text" class="form-control" name="Country Code" maxlength="12" placeholder="Enter Country Code">
</div>

<div class="form-group">
<label for="inputAddress">STD Code</label>
<input type="text" class="form-control" name="STD Code" maxlength="12" placeholder="Enter STD Code">
</div>

<div class="form-group">
<label for="inputAddress">Land Line Number</label>
<input type="text" class="form-control" name="Land Line Number" maxlength="12" placeholder="Enter Land Line Number">
</div>

<div class="form-group">
<label for="inputAddress">Mobile Number</label>
<input type="text" class="form-control" name="Mobile Number" maxlength="12" placeholder="Enter Mobile Number">
</div>

<div class="container">
 <div class="row">
   <div class="col-sm-4">
    <h3 class="text-primary">Permanent Address</h3>
    <p>Enter permanent address as your Identity card</p>
      
    <!--=== Permanent address=== -->
     <div class="form-group">
        <input type="text" class="form-control" placeholder="Address Line 1" id="pAddressLine1">
     </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Address Line 2" id="pAddressLine2">
      </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Landmark" id="pLandmark">
       </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Zip Code" id="pZipcode">
       </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="City" id="pCity">
       </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="State" id="pState">
       </div>
       <div class="form-group">
          <input type="text" class="form-control" placeholder="country" id="pCountry">
        </div>
    <!--=== Permanent address=== -->
   </div>
   <div class="col-sm-4">
   <h3 class="text-primary">Current Address</h3>
       <div class="form-group">
          <input type="checkbox" id="checkBox"  onclick="autoFilAddress()"> Same as permanent address
       </div>
  
         
     
    <!--=== current address=== -->
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Address Line 1" id="curAddressLine1">
       </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Address Line 2" id="curAddressLine2">
       </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Landmark" id="curLandmark">
       </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Zip Code" id="curZipcode">
       </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="City" id="curCity">
       </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="State" id="curState">
       </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="country" id="curCountry">
       </div>
    <!--=== current address=== -->
   </div>
   <div class="col-sm-4"></div>
</div>
</div>

<div class="form-group">
<label for="inputAddress">Area / Bus Name</label>
<input type="text" class="form-control" name="Area / Bus Name" maxlength="12" placeholder="Enter Area / Bus Name">
</div>

<div class="form-group">
<label for="inputAddress">Aadhaar No.</label>
<input type="text" class="form-control" name="Aadhaar No." maxlength="12" placeholder="Enter Aadhaar No.">
</div>

        	<div class="form-group">
        		<label>Student Photo</label>
        		<input type="file" name="Student Photo" class="form-control" >
        	</div>

			<div class="form-group">
        		<label>Father's Photo</label>
        		<input type="file" name="Father's Photo" class="form-control" >
        	</div>

			<div class="form-group">
        		<label>Mother's Photo</label>
        		<input type="file" name="Mother's Photo" class="form-control" >
        	</div>
        	
        	 <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
        	
        	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

        </main>
    </body>
</html>