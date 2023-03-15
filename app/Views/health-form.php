<?php include("shared/top-mobile.php"); ?>

<div class="main-container d-flex">

  <div class="bg-white m-4 rounded">
  <form>
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
          <button class="btn nextBtn" >
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
        <div class="page page-2 ">
          <span>Fill-up form as?</span>
          <button type = "button" class="btn col nextBtn">Visitor</button>
          <button type = "button" class="btn col nextBtn" id ="employeeBtn" onclick = "empl()"> Employee</button>
        </div>

        <div class="page page-3 step" id="step1">
          <div class="container ">
            <header>-Personal information-</header>
            <div class="input-field row" >
              <label> First Name</label>
              <input type="text" id ="firsName"  name="firstName" placeholder="Enter your First name"/>
            </div>
            <div class="input-field row">
              <label> Middle Name (Optional)</label>
              <input type="text" name="middleName" placeholder="Enter your Middle name"  />
            </div>
            <div class="input-field row">
              <label> Last Name</label>
              <input type="text" id ="lastName" name="lastName" placeholder="Enter your Last name"  />
            </div>
            <div class="input-field row">
              <div class="input-field col">
                <label class="row"> Birth date</label>
                <input type="date" name="birthDate" id = "birthDate"  />
              </div>
              <div class="input-field col">
                <label class="row"> Sex</label>
                <select class="form-select" id= "sex" name="sex" required>
                  <option selected>Please select</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
              </div>
            </div>
            <button class="btn backBtn" >
              <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button type = "button" class="btn nextBtn" id = "step1NextButton" disabled>
              <i class="fa-solid fa-chevron-right"></i>
            </button>
          </div>
        </div>

        <div class="page page-4 step" id="step2">
        <div class="container">
          <div class="input-field">
            <label for=""> Address</label>

            <textarea
              name="msg"
              id=""
              msg
              cols="30" 
              rows="5"
              class="form-control"
              placeholder="Enter Street name and house number"
            ></textarea>
          </div>
          <div class="input-field">
            <label class="row" for="">Country</label>
            <select class="form-select">
              <option selected>Select Country</option>
              <option value="1">Philippines</option>
              
            </select>
          </div>
          <div class="input-field">
            <label class="row" for="">Province</label>
            <select class="form-select" id="provinceSelector" name = "province" onChange="Test()">
              <option selected disabled >Select Province</option>
              <option value="1">Province 1</option>
              <option value="2">Province 2</option>
              
              <!-- php
              while ($row = mysqli_fetch_assoc($province_query)) :?> 
                <option value= "php echo $row ['id']; ?>"> php echo $row['provinceName'];?></option>
                php endwhile;?> -->
              </option>
            </select>
          </div>
          <div class="input-field">
            <label class="row" for=""> City</label>
            <select class="form-select" id ="citySelector" name= "city" onChange = "Test2()">
              <option selected disabled>Select City</option>
              <option value="1">City 1</option>
              <option value="2">City 2</option>
              
            </select>
          </div>
          
          <div class="input-field">
            <label class="row" for="">Barangay</label>
          
            <select class="form-select" id="barangay" name = "barangay" >
              <option selected disabled >Select Barangay</option>
              <option value="1">Barangay 1</option>
              <option value="2">Barangay 2</option>

              </option>
            </select>
          </div>
          
          <button class="btn backBtn">
            <i class="fa-solid fa-chevron-left"></i>
          </button>
          <button class="btn nextBtn" id = "step2NextButton">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <div class="page page-5 step" id="step3">
        <div class="container">
          <div class="form-group">
            <div class="input-field row">
              <label class="col" for="">Body Temp</label>
              <label class="col-7" for="">Nature of Visit</label>
              <!-- <input  type="text" placeholder="°C" required /> -->
            </div>

            <div class="input-field row">
              <input class="col-8" type="text" placeholder="°C"  />
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="group10Radios"
                id="group10Radios1"
                value="option1"
              />
              <label class="form-check-label" for="group2Radios1">Consultation</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="group10Radios"
                id="group10Radios2"
                value="option2"
                checked
              />
              <label class="form-check-label" for="group2Radios2">Personal</label>
            </div>
          </div>

          <label>For Consultation</label>
          <hr class="solid" />
          <label>Name of Physician to visit</label>
          <div class="input-field row">
            <input
              class="col-8"
              type="text"
              placeholder="Enter Physician name"
              
            />
          </div>
          <label>Date and time of Consultation</label>
          <div class="input-field row">
            <input
              class="col-8"
              type="date"
              placeholder="Enter Physician name"
              
            />
          </div>
          <label>For Consultation</label>
          <hr class="solid" />
          <label>Name of Patient to visit</label>
          <div class="input-field row">
            <input
              class="col-8"
              type="text"
              placeholder="Enter Physician name"
              
            />
          </div>
          <label>Date and time of Visitation</label>
          <div class="input-field row">
            <input
              class="col-8"
              type="date"
              placeholder="Enter Physician name"
              
            />
          </div>
          <button class="btn backBtn">
            <i class="fa-solid fa-chevron-left"></i>
          </button>
          <button class="btn nextBtn" id = "step3NextButton">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
      </div>
      <div class="page page-6 step" id="step4">
        <div class="container">
          <header>Travel History</header>
          <div class="form-group">
            <div class="input-field">
              <label
                >1. Have you ever been to other country in the last 14
                days?</label
              >
            </div>

            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="group1Radios"
                id="group1Radios1"
                value="option1"
                checked
              />
              <label class="form-check-label" for="flexRadioDefault1">
                Yes
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="group1Radios"
                id="group1Radios2"
                value="option2"
                checked
              />
              <label class="form-check-label" for="flexRadioDefault2">
                No
              </label>
            </div>
          </div>
          <div class="input-field">
            <label>if yes, which country?</label>
            <select class="form-select" id ="city" name = "city">
              <option selected disab>Select Country</option>
              <option value="1">Country1</option>
              <option value="2">Country2</option>
            </select>
          </div>

          <div class="input-field">
            <label>2. Date of Arrival in the Philippines</label>
            <input
              class="col-8"
              type="date"
              placeholder="Enter Physician name"
              required
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
                name="group2Radios"
                id="group2Radios1"
                value="option1"
              />
              <label class="form-check-label" for="flexRadioDefault1">
                Yes
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="group2Radios"
                id="group2Radios2"
                value="option2"
                checked
              />
              <label class="form-check-label" for="flexRadioDefault2">
                No
              </label>
            </div>
          </div>
          <button class="btn backBtn">
            <i class="fa-solid fa-chevron-left"></i>
          </button>
          <button class="btn nextBtn" id = "step4NextButton">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
      </div>
      <div class="page page-7 step" id="step5">
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
                      name="group1Radios"
                      id="group1Radios1"
                      value="option1"
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
                      name="group1Radios"
                      id="group1Radios2"
                      value="option2"
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
                      name="group2Radios"
                      id="group2Radios1"
                      value="option1"
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
                      name="group2Radios"
                      id="group2Radios2"
                      value="option2"
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
                      name="group3Radios"
                      id="group3Radios1"
                      value="option1"
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
                      name="group3Radios"
                      id="group3Radios2"
                      value="option2"
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
                      name="group3Radios"
                      id="group3Radios1"
                      value="option1"
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
                      name="group4Radios"
                      id="group4Radios2"
                      value="option2"
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
                      name="group5Radios"
                      id="group5Radios1"
                      value="option1"
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
                      name="group5Radios"
                      id="group5Radios2"
                      value="option2"
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
                      name="group6Radios"
                      id="group6Radios1"
                      value="option1"
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
                      name="group6Radios"
                      id="group6Radios2"
                      value="option2"
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
                      name="group7Radios"
                      id="group7Radios1"
                      value="option1"
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
                      name="group7Radios"
                      id="group7Radios2"
                      value="option2"
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
                      name="group8Radios"
                      id="group8Radios1"
                      value="option1"
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
                      name="group8Radios"
                      id="group8Radios2"
                      value="option2"
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
                      name="group9Radios"
                      id="group9Radios1"
                      value="option1"
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
                      name="group9Radios"
                      id="group9Radios2"
                      value="option2"
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
                      name="group10Radios"
                      id="group10Radios1"
                      value="option1"
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
                      name="group10Radios"
                      id="group10Radios2"
                      value="option2"
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
          <button class="btn backBtn">
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