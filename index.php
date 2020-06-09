<!DOCTYPE HTML>
<html>
<head>
  <style>
    #body_bg
    {
      background-color:#fffee5;
    }

    #reg_form{

      background:#9a1115;
      border: 20 px solid;
      <! -- padding:9px 9px;-->
      align="center"
      width:90vh;
      border-radius:20px;
    }
    #nameInput{
      background-image:url('name-icon.jpg');
      position: relative;
      display: block;
      margin-right: auto;
      margin-left: auto;
      padding-left: 40px;
      background-size: 40px;
      height:40px;
      background-repeat: no-repeat;
      border-radius: 15px;
      background-color: #ffffff;
      font-size:13pt;
      min-width: 80vw;
      outline: none;

    }
    #DOB{
      background-image:url('date-icon.png');
      position: relative;
      display: block;
      margin-right: auto;
      margin-left: auto;
      padding-left: 40px;
      background-size: 40px;
      height:40px;
      background-repeat: no-repeat;
      border-radius: 15px;
      background-color: #ffffff;
      font-size:13pt;
      min-width: 80vw;
      outline: none;

    }
    #weight{
      background-image:url('weight-icon.png');
      position: relative;
      display: block;
      margin-right: auto;
      margin-left: auto;
      padding-left: 40px;
      background-size: 40px;
      height:40px;
      background-repeat: no-repeat;
      border-radius: 15px;
      background-color: #ffffff;
      font-size:13pt;
      min-width: 80vw;
      outline: none;

    }
    #height{
      background-image:url('height-icon.png');
      position: relative;
      display: block;
      margin-right: auto;
      margin-left: auto;
      padding-left: 40px;
      background-size: 40px;
      height:40px;
      background-repeat: no-repeat;
      border-radius: 15px;
      background-color: #ffffff;
      font-size:13pt;
      min-width: 80vw;
      outline: none;

    }
    #bloodGroup{
      background-image:url('blood-icon.png');
      position: relative;
      display: block;
      margin-right: auto;
      margin-left: auto;
      padding-left: 40px;
      background-size: 40px;
      height:45px;
      background-repeat: no-repeat;
      border-radius: 15px;
      background-color: #ffffff;
      font-size:13pt;
      min-width: 63.5vw;
      outline: none;
    }
    #contactNumber{
      background-image:url('contact-icon.jpg');
      position: relative;
      display: block;
      margin-right: auto;
      margin-left: auto;
      padding-left: 40px;
      background-size: 40px;
      height:40px;
      background-repeat: no-repeat;
      border-radius: 15px;
      background-color: #ffffff;
      font-size:13pt;
      min-width: 80vw;
      outline: none;

    }
    #contactAddress{
      background-image:url('address-icon.png');
      position: relative;
      display: block;
      margin-right: auto;
      margin-left: auto;
      padding-left: 40px;
      background-size: 40px;
      height:40px;
      background-repeat: no-repeat;
      border-radius: 15px;
      background-color: #ffffff;
      font-size:13pt;
      min-width: 80vw;
      outline: none;

    }
    #zone{
      background-image:url('zone-icon.png');
      position: relative;
      display: block;
      margin-right: auto;
      margin-left: auto;
      padding-left: 40px;
      background-size: 40px;
      height:45px;
      background-repeat: no-repeat;
      border-radius: 15px;
      background-color: #ffffff;
      font-size:13pt;
      min-width: 63.5vw;
      outline: none;
    }
    #lastDonated{
      background-image:url('date-icon.png');
      position: relative;
      display: block;
      margin-right: auto;
      margin-left: auto;
      padding-left: 40px;
      background-size: 40px;
      height:40px;
      background-repeat: no-repeat;
      border-radius: 15px;
      background-color: #ffffff;
      font-size:13pt;
      min-width: 80vw;
      outline: none;

    }
    .registerButton {
      color:#ffffff;
      background-color: #9a1115;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: 2px solid #9a1115;border-radius: 30px;
      cursor: pointer;
      width: 40%;
      margin-left: 30%;
      font-size:13pt;
      outline: none;

    }

    .registerButton:hover {
      color:#9a1115;
      background-color: #ffffff;
      border: 2px solid #9a1115;border-radius: 30px;;
      opacity:1;
      font-size:13pt;
      outline: none;
    }


  </style>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>Volunteer Registration</title>
</head>
<body id="body_bg">

  <h3 style="color:#9a1115" align=center><b><u>Blood Donor's Registration Form</u></b></h3>

  <form method="post" action="registration.php">
    <div id="reg_form">
    <table>
      <tr><br></tr>
      <tr>
        <input name="name" type="text" id="nameInput" required placeholder="Name"/>
      </tr>
      <tr><br></tr>
      <tr>
        <input name="dob" type="text" onfocus="(this.type='date')" id="DOB"  required placeholder="Date of birth" min="1930-01-01" max="2030-01-01" />
      </tr>
      <tr><br></tr>
      <tr>
        <input name="weight" type="number" id="weight" min="0" max="200" required placeholder="Weight in Kg"/>
      </tr>
      <tr><br></tr>
      <tr>
        <input name="height" type="number" id="height" min="0" max="250" required placeholder="Height in Cm"/>
      </tr>

      <tr style="transform: translateY(-10px)">
        <td  width="30%" align="center">
          <p style="color:#ffffff;"><b>Blood Group:</b></p>
        </td>
        <td width="70%">
          <select name="blood_group" id="bloodGroup" >
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="Others">Others</option>
          </select>
        </td>
      </tr>
      <tr><br></tr>
    </table><table>
      <tr>
        <input name="telephone" type="tel" id="contactNumber"  pattern="[0-9]{10}" required placeholder="Contact Number"/>
      </tr>
      <tr><br></tr>
      <tr>
        <input name="address" type="text"  id="contactAddress" required placeholder="Address"/>
      </tr>
      <tr><br></tr>
      <tr style="transform: translateY(-20px)">
        <td  width="30%" align="center">
          <p style="color:#ffffff;"><b>Zone:</b></p>
        </td>
        <td width="70%">
          <select name="zone" id="zone" >
              <option value="Kannur">Kannur</option>
              <option value="Iritty">Iritty</option>
              <option value="Taliparamba">Taliparamba</option>

              <option value="Thalassery">Thalassery</option>
              <option value="Payyannur">Payyannur</option>

          </select>
        </td>
      </tr>
      <tr><br></tr>
    </table><table>
      <tr>
        <input name="last_donated" type="text" onfocus="(this.type='date')" id="lastDonated"  placeholder="Last donated date" min="1930-01-01" max="2030-01-01" />
      </tr>
      <tr><br></tr>
    </table>
  </div>
  <br>
  <button type="submit" class="registerButton"><b>Register</b></button>
  </form>

  <br><br><br><br>
</body>
</html>
