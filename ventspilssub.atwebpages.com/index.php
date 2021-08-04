<!DOCTYPE html>
<html>
<head>
<title>Latvijas Daba</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f27c}

th {
  background-color: #9b9b9b96;
  color: rgb(162, 252, 240);
}

td {
    background-color: #9b9b9b96;
    color: rgb(162, 252, 240);
}

#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-image: url("https://www.rensvandeschoot.com/wp-content/uploads/2018/06/Rectangle-Contacts-Background-Nested-Contact-Points-2326124.jpg");
  background-color: rgb(205, 248, 255);
  margin-top: 20px;
}
.print {
  background-color: #465c2a;
  border: none;
  color: rgb(255, 255, 255);
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.parbaude {
  background-color: #465c2a;
  border: none;
  color: rgb(0, 0 , 0);
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.db {
  background-color: #1276da;
  border: none;
  color: rgb(0, 0, 0);
  padding: 6px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.poga {
  background-color: #4CAF50;
  border: none;
  color: rgb(77, 77, 77);
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.sidenav {
  width: 130px;
  position: fixed;
  z-index: 1;
  top: 20px;
  left: 10px;
  background: #3d3d3d96;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: rgb(162, 252, 240);
  display: block;
}

.sidenav a:hover {
  color: #ffffff;
}

.main {
  margin-left: 140px; /* Same width as the sidebar + left position in px */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="http://majasdatubaze.atwebpages.com/#">Sakums</a>
  <a href="http://kristsip18.atwebpages.com/">Sparkle♥</a>
  <a onclick="myFunction()">Kontakti</a>
</div>

<div class="row print-container">
  <div class="main">
  <h2>Ventspils Gaismas Tornis</h2>
<p>Kādreiz bijusi Hanzas savienības pilsēta, Ventspils ir viens no aizraujošākajiem piejūras galamērķiem Latvijā. Tā atradās valsts ziemeļrietumu daļā un bija vadošā Kurzemes un Zemgales hercogistes osta, kā arī padomju militārā bāze.</p>
<img src="https://i.imgur.com/4OKCqmI.png" alt="Ventspils Lighthouse" width="634" height="357"> <br>
  </div>  
</div>

<input type="text" placeholder="dd/mm/yyyy Date formātā" id="txtDate" onblur="ValidateDOB()" />
    <span class="error" id="lblError"></span>
    <br />
    <br />
    <input class="parbaude" type="button" id="btnValidate" value="Parbaudīt" onclick="return ValidateDOB()" />
    <script type="text/javascript">
        function ValidateDOB() {
            var lblError = document.getElementById("lblError");

            //Get the date from the TextBox.
            var dateString = document.getElementById("txtDate").value;
            var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;

            //Check whether valid dd/MM/yyyy Date Format.
            if (regex.test(dateString)) {
                var parts = dateString.split("/");
                var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
                var dtCurrent = new Date();
                lblError.innerHTML = "Pieeja mājaslapai tikai no 18 gadiem."
                if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
                    return false;
                }

                if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {

                    //CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
                    if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                        return false;
                    }
                    if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                        //CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
                        if (dtCurrent.getDate() < dtDOB.getDate()) {
                            return false;
                        }
                    }
                }
                lblError.innerHTML = "Paldies, kad apstiprināji savu vecumu.";
                return true;
            } else {
                lblError.innerHTML = "Ievadi datumu tikai dd/MM/yyyy formātā!"
                return false;
            }
        }
    </script>

<style>
    @media print {
  body * {
    visibility: hidden;
  }
  .print-container, .print-container * {
    visibility: visible;
  }
}
</style>

<button   class="print" onClick="window.print()">Izprintēt lapas saturu 
</button>
<div>
<a href="https://edition.cnn.com/travel/article/latvia-beautiful-places/index.html" class="button">Izm. Literatura I</a> <a href="https://www.w3schools.com/html/default.asp" class="button">Izm. Literatura II</a>
</div>
<br><button class="poga" onclick="myFunction()">Kontactinformācija</button> </br>

<div class="row print-container"> 
<div id="myDIV">
    <table>
        <tr>
          <th>Vards</th>
          <th>Uzvards</th>
          <th>Tel.Nr</th>
          <th>E-pasts</th>
        </tr>
        <tr>
          <td>Kristians</td>
          <td>Brikmanis</td>
          <td>29466475</td>
          <td><a href="mailto:brikmaniskristians@gmail.com"><span style="text-decoration: underline;">BrikmanisKristians@gmail.com</span></a></td>
        </tr>
        <tr>
          <td>Nauris</td>
          <td>Gruzdins</td>
          <td>24205454</td>
          <td><a href="mailto:naurisgruzdins@gmail.com"><span style="text-decoration: underline;">NaurisGruzdins@gmail.com</span></a></td>
        </tr>
        <tr>
          <td>Niks</td>
          <td>Berzins</td>
          <td>28642556</td>
          <td><a href="mailto:niksberzins@gmail.com"><span style="text-decoration: underline;">NiksBerzins@gmail.com</span></a></td>
        </tr>
        <tr>
          <td>Sandis</td>
          <td>Brikmanis</td>
          <td>25046346</td>
          <td><a href="mailto:SandisBrikmanis@gmail.com"><span style="text-decoration: underline;">SandisBrikmanis@gmail.com</span></a></td>
      </tr>
      </table>
    </div>
</div>

<script>
    function myFunction() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    </script>
    
    <script src="//code.jquery.com/jquery-1.9.1.js"></script> 
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {

$("#display").click(function() {                

  $.ajax({    //create an ajax request to display.php
    type: "GET",
    url: "display.php",             
    dataType: "html",   //expect html to be returned                
    success: function(response){                    
        $("#responsecontainer").html(response); 
        //alert(response);
    }

});
});
});

</script>

<body>
<h3 align="center">Kontaktinformācija no datubāzes</h3>
<table border="1" align="center">
<tr>
   <td> <input class="db" type="button" id="display" value="Radit datus" /> </td>
</tr>
</table>
<div id="responsecontainer" align="center">

</div>

</body>
</html> 
