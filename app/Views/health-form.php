<?php include("shared/top-mobile.php"); ?>

<div class="main-container d-flex">

  <div class="bg-white m-4 rounded">
  
  <form method="post">
        <div class="page page-1 terms-text index active">
          <h4>-Please read before proceeding-</h4>
          <p>
            In compliance with
            <span>RA 10173 or Data Privacy Act of the Philippines</span>, the
            personal information you will be providing below shall not be used for
            other purposes except for
            <span>COVID-19 contact-tracing</span> activities.
          </p>
      <div class="col-md-8 offset-md-2">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="flexCheckDefault" checked />
          <label class="form-check-label" for="flexCheckDefault">
            I agree to the <a href="#">terms &amp; conditions</a> and <a href="#">privacy policy</a>.
          </label>
        </div>
      </div>
          <button type="button" class="btn nextBtn" >
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
        <div class="page page-2 ">
          <span>Fill-up form as?</span>
          <button type = "button" class="btn col nextBtn" id="visitorBtn">Visitor</button>
          <button type = "button" class="btn col nextBtn" id ="employeeBtn"> Employee</button>
        </div>

        <div class="page page-3 step " id="step1">
          <div class="container ">
          <header class= "personalHeader">-Personal information-</header>
            <div class="input-field row" >
              <label> First Name</label>
              <!-- <input type="text" id ="firsName"  name="firstName" placeholder="Enter your First name"/> -->
              <input type="text" class="form-control" placeholder="Enter your First name" aria-label="First name" id ="firsName"  name="firstName">
             
            </div>
            <div class="input-field row">
              <label> Middle Name (Optional)</label>
              <!-- <input type="text" name="middleName" placeholder="Enter your Middle name"  /> -->
              <input type="text" name="middleName" id ="middleName" class="form-control" placeholder="Enter your Middle name" aria-label="Last name">
            </div>
            <div class="input-field row">
              <label> Last Name</label>
              <!-- <input type="text" id ="lastName" name="lastName" placeholder="Enter your Last name"  /> -->
              <input type="text" class="form-control" placeholder="Enter your Last name" aria-label="First name" id ="lastName"  name="lastName">
            </div>
            <div class="input-field row">
              <div class="input-field col">
                <label class="row"> Birth date</label>
                <input class="input-field" type="date" name="birthDate" id = "birthDate"  />
              </div>
              <div class="input-field col">
                <label class="row"> Sex</label>
                <select class="form-select" id= "sex" name="sex">
                  <option value="" selected>Please select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>

          
            <button type = "button" class="btn backBtn" >
              <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button type = "button" class="btn nextBtn" id = "step1NextButton" disabled >
              <i class="fa-solid fa-chevron-right"></i>
            </button>
          </div>
        </div>

        <div class="page page-4 step " id="step2" >
        <div class="container">
          <header class= "personalHeader">-Personal information-</header>
          <div class="input-field row">
            <label for=""> Address</label>
            <textarea
              name="address"
              cols="30" 
              rows="5"
              class="form-control"
              placeholder="Enter Street name and house number"
            ></textarea>
          </div>
          <div class="input-field row">
            <label class="row" for="">Country</label>
            <select class="form-select" name="picountry">
              <option value="" selected>Select Country</option>
              <option value="Philippines">Philippines</option>
            </select>
          </div>
          <div class="input-field row">
            <label class="row">Province</label>
            <select class="form-select" id="provinceSelector" name = "province" > 
              <!-- onChange="Test()" -->
              <option value="" selected>Select Province</option>
              <option value="Province 1">Province 1</option>
              <option value="Province 2">Province 2</option>
              
              <!-- php
              while ($row = mysqli_fetch_assoc($province_query)) :?> 
                <option value= "php echo $row ['id']; ?>"> php echo $row['provinceName'];?></option>
                php endwhile;?> -->
              </option>
            </select>
          </div>
          <div class="input-field row">
            <label class="row" for=""> City</label>
            <select class="form-select" id ="citySelector" name= "city" >
            <!-- onChange = "Test2()" -->
              <option value="" selected>Select City</option>
              <option value="City 1">City 1</option>
              <option value="City 2">City 2</option>
              
            </select>
          </div>
          
          <div class="input-field row">
            <label class="row" for="">Barangay</label>
            <select class="form-select" id="barangay" name = "barangay" >
              <option value="" selected>Select Barangay</option>
              <option value="Barangay 1">Barangay 1</option>
              <option value="Barangay 2">Barangay 2</option>

              </option>
            </select>
          </div>
          
          <button type = "button" class="btn backBtn">
            <i class="fa-solid fa-chevron-left"></i>
          </button>
          <button type = "button" class="btn nextBtn" id = "step2NextButton" disabled>
            <i class="fa-solid fa-chevron-right"></i>
          </button>
          
        </div>
      </div>

      <div class="page page-5 step" id="step3">
        <div class="container">
          <header class= "personalHeader">-Personal information-</header>
          <div class="input-group row">
          <label>Body Temperature</label>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="temperature" class="form-control" placeholder="Enter your Temperature" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <span class="input-group-text">°C</span>
        </div>
        <div class = "input-group" name="natureOfVisit">
          <label class="col-7" for="">Nature of Visit</label>
          <div class="form-check form-check-inline" >
             <input
                class="form-check-input"
                type="radio"
                name="natureOfVisit"
                id="group10Radios1"
                value="consultation"
                checked="checked"
              />
              <label class="form-check-label" for="group2Radios1">Consultation</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="natureOfVisit"
              id="group10Radios2"
              value="personal"
            />
            <label class="form-check-label" for="group2Radios2">Personal</label>
          </div>
        </div>
        <br>
        <label><i style>For Consultation</i></label>
        <hr class="solid"/>
        <div class="input-field row">
          <label>Name of Physician to visit</label>
          <input type="text" class="form-control" placeholder="Enter Physician name" aria-label="Physician name" id ="physicianname"  name="physicianName">
        </div>
        <div class="input-field row">
          <label>Date and time of Consultation</label>
          <input
            class="col-8"
            type="date"
            name="timeOfConsultation"
          />
        </div>
        <label><i>For Visit</i></label>
        <hr class="solid" />
        <div class="input-field row">
          <label>Name of Patient to visit</label>
          <input
            class="col-8"
            type="text"
            name="patientName"
            placeholder="Enter Patient name"
          />
        </div>
        <div class="input-field row">
          <label>Date and time of Visitation</label>
          <input
            class="col-8"
            type="date"
          />
        </div>
        <button type = "button" class="btn backBtn">
          <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button type = "button" class="btn nextBtn" id="step3NextButton" disabled>
          <i class="fa-solid fa-chevron-right"></i>
        </button>
        </div>
      </div>
      
      <div class="page page-6 step " id="step4">
        <div class="container">
          <header>Travel History</header>
          <div class="form-group">
            <div class="input-field row">
              <label
                >1. Have you ever been to other country in the last 14
                days?</label
              >
            </div>

            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="travelHistory"
                id="group1Radios1"
                value="1"
                
              />
              <label class="form-check-label" for="flexRadioDefault1">
                Yes
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="travelHistory"
                id="group1Radios2"
                value="0"
                checked
                
              />
              <label class="form-check-label" for="flexRadioDefault2">
                No
              </label>
            </div>
          </div>
          <div class="input-field">
            <label>if yes, which country?</label>
            <select class="form-select" id ="city" name = "country">
              <option selected value= "">Select Country</option>
              <option value="country 1">Country1</option>
              <option value="country 2">Country2</option>
            </select>
          </div>

          <div class="input-field">
            <label>2. Date of Arrival in the Philippines</label>
            <input
              class="col-8"
              type="date"
              name="dateOfArrival"
            />
          </div>
          <div class="input-field">
            <label
              >3. Have you ever been in contact with someone suspected/ or with
              someone who has Covid 19 Virus?</label
            >
          </div>
          <div class="form-group">
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="personalContact"
                id="group2Radios1"
                value="Yes"
              />
              <label class="form-check-label" for="flexRadioDefault1">
                Yes
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="personalContact"
                id="group2Radios2"
                value="No"
                checked
              />
              <label class="form-check-label" for="flexRadioDefault2">
                No
              </label>
            </div>
          </div>
          <button type = "button" class="btn backBtn">
            <i class="fa-solid fa-chevron-left"></i>
          </button>
          <button type = "button" class="btn nextBtn" id = "step4NextButton" disabled>
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <div class="page page-7 step " id="step5">
        <div class="container">
          <label>Do you experience the following symptom/s?</label>
          <table class="table table-striped">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <label>1. Fever (Lagnat)</label>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q1"
                      id="group1Radios1"
                      value="1"
                      checked
                    />
                    <label class="form-check-label" for="group2Radios1"
                      >Yes</label
                    >
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q1"
                      id="group1Radios2"
                      value="0"
                      checked
                    />
                    <label class="form-check-label" for="group2Radios2"
                      >No</label
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label>2. Cold (Sipon)</label>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q2"
                      id="group2Radios1"
                      value="1"
                    />
                    <label class="form-check-label" for="group2Radios1"
                      >Yes</label
                    >
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q2"
                      id="group2Radios2"
                      value="0"
                      checked
                    />
                    <label class="form-check-label" for="group2Radios2"
                      >No</label
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label>3. Cough (Ubo)</label>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q3"
                      id="group3Radios1"
                      value="1"
                    />
                    <label class="form-check-label" for="group2Radios1"
                      >Yes</label
                    >
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q3"
                      id="group3Radios2"
                      value="0"
                      checked
                    />
                    <label class="form-check-label" for="group2Radios2"
                      >No</label
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label>4. Sorethroat (Pamamaga ng lalamunan)</label>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q4"
                      id="group3Radios1"
                      value="1"
                    />
                    <label class="form-check-label" for="group2Radios1"
                      >Yes</label
                    >
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q4"
                      id="group4Radios2"
                      value="0"
                      checked
                    />
                    <label class="form-check-label" for="group2Radios2"
                      >No</label
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label>5. Tiredness (Labis na pagkapagod)</label>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q5"
                      id="group5Radios1"
                      value="1"
                    />
                    <label class="form-check-label" for="group2Radios1"
                      >Yes</label
                    >
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q5"
                      id="group5Radios2"
                      value="0"
                      checked
                    />
                    <label class="form-check-label" for="group2Radios2"
                      >No</label
                    >
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <label>6. Muscle pain (Pananakit ng katawan)</label>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q6"
                      id="group6Radios1"
                      value="1"
                    />
                    <label class="form-check-label" for="group2Radios1"
                      >Yes</label
                    >
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q6"
                      id="group6Radios2"
                      value="0"
                      checked
                    />
                    <label class="form-check-label" for="group2Radios2"
                      >No</label
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label
                    >7. Difficulty breathing or shortness of breath (Hirap sa
                    paghinga)</label
                  >
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q7"
                      id="group7Radios1"
                      value="1"
                    />
                    <label class="form-check-label" for="group2Radios1"
                      >Yes</label
                    >
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q7"
                      id="group7Radios2"
                      value="0"
                      checked
                    />
                    <label class="form-check-label" for="group2Radios2"
                      >No</label
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label>8. Loss of taste (Pagkawala ng panlasa)</label>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q8"
                      id="group8Radios1"
                      value="1"
                    />
                    <label class="form-check-label" for="group2Radios1"
                      >Yes</label
                    >
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q8"
                      id="group8Radios2"
                      value="0"
                      checked
                    />
                    <label class="form-check-label" for="group2Radios2"
                      >No</label
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label>9. Loss of smell (Pagkawala ng pang-amoy)</label>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q9"
                      id="group9Radios1"
                      value="1"
                    />
                    <label class="form-check-label" for="group2Radios1"
                      >Yes</label
                    >
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q9"
                      id="group9Radios2"
                      value="0"
                      checked
                    />
                    <label class="form-check-label" for="group2Radios2"
                      >No</label
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label>10. Diarrhoea (Pagtatae)</label>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q10"
                      id="group10Radios1"
                      value="1"
                    />
                    <label class="form-check-label" for="group2Radios1"
                      >Yes</label
                    >
                  </div>
                </td>
                <td>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="q10"
                      id="group10Radios2"
                      value="0"
                      checked
                    />
                    <label class="form-check-label" for="group2Radios2"
                      >No</label
                    >
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <button type="button" class="btn backBtn">
            <i class="fa-solid fa-chevron-left"></i>
          </button>
          <button class="btn nextBtn submit" type= "submit" name= "submit" id = "step5NextButton">
            <i >SUBMIT</i>
          </button>
        </div>
      </div>
      <div class="page page-8">
        <div class="form-group">
          <div class="employeeId input-field">
            <header>Employee ID Number</header>
            <input type="text" placeholder="Enter your ID number"  />
            <button class="btn nextBtn">
            <i class="fa-solid fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </form>
    
  </div>


<?php include("shared/bottom.php"); ?>