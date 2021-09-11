<!DOCTYPE html>
<html>
<head>
<title>ABOUT US</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js">

<style type="text/css">

      *{
          box-sizing: border-box;
        }

        html {
          margin:0;
          padding:0;}

       body{
	        position: relative;
          width: 100%;
          height: 100vh;
          overflow: hidden;
          background:linear-gradient(-120deg,#E73C7E,#23A6D5,#23D5AB);
        }
        .quote{
          align:right;
        }

        button{
          font-family: sans-serif;
          border-top-width:0px;
          border-left-width:0px;
          border-right-width:0px;
          border-bottom-width:0px;
          padding: 1px 30px 1px 30px;
          outline: none;
          background:transparent;
          float: left;
          color: white;
          background:;
          -webkit-transition-duration:1s;
	         transition-duration:1s;

          }

           button:hover{
      color:;
      background:#7989D1;
     }

        h1,h2,h3{
          color: white;
          font-weight: normal;
        }

        p{color: white;
        font-size: 20px;}

        .online{
          float: left;
          width: 70%;
          padding: 10px;
          height: 300px;
        }

        a:link{
	          text-decoration:none;
            color: white;

           }
           a:visited{
	            text-decoration:none;
              color: white;
            }
            a:active{
	             text-decoration:none;
               color: white;
             }

    </style>

  <body>

    <div class="innovator">
    <table>

      <tr> <td colspan="5"><h1> &nbsp&nbsp&nbsp&nbsp&nbsp INNOVATOR
      </h1></td>
      <td style="text-align: right;"><h3>Your Dream & Job is Waiting</h3></td>
    </tr>

        <tr>
        <td><button><h4><a href="userhome.php">HOME</a><h4></button></td>
        <td><button><h4><a href="aboutus.php">ABOUT US</a><h4></button></td>
        <td><button><h4><a href="allcompany.php">ALL COMPANY</a><h4></button></td>
        <td><button><h4><a href="alljobs.php">ALL JOBS</a><h4></button></td>
        <td><button><h4><a href="logout.php">LOGOUT</a><h4></button></td>
        <td><button><h4><a href="contactus.php">CONTACT US</a><h4></button></td>

      </tr>
      </table>
      <hr>

    </div>
      <div class="online">
    <h2>ABOUT ONLINE JOB PORTAL<hr></h2>
      <?php
        echo "<p>INNOVATOR- an online job portal which provides the candidates,
        ability to register this application and search for jobs , manage their accounts
        Each candidates have their account with their home page.</p>";

        echo "<p>On the other hand those who are willing to publish the jobs for their
        company to candidates, can register to the job portal and get their own account
        created and can post jobs to portal's datebase.</p>";

        echo "<p>Registered Employees can add and remove jobs and these jobs can be seen
        by various candidates and they can contact the concern person for the job. Main
        aim of this web application to make an user friendly platform where,applicant can
        search jobs easily and is accesible to everyone who are interested.</p> ";

        echo "<p>The purpose of application is to provide job portal for the job seekers ,
        to submit their CV and apply for job, where Employer can select best Employees
        from available candidate profile. </p>";
      ?>

      </div>
  </body>
  </head>
</html>
