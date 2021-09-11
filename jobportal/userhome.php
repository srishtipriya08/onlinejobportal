<!DOCTYPE html>
<html>
<head>
<title>USER HOME</title>
<link  rel="stylesheet" href="C:\Users\DELL\Desktop\jobportal\swiper.min.css"/>
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
          height: 100%;

          background:linear-gradient(-140deg,#E73C7E,#23A6D5,#23D5AB);
        }

        .swiper-slide{
          width: 250px !important;
        }

      .sliderbox{
        height: 140px;
        width: 250px;
        position: relative;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        margin: 10px;
        justify-content: center;
      }
      .imgbox{
        height: 150px;
      }

      .imgbox img{
        height: 250;
        max-width: 100%;
        max-height:100%;
      }

      .sliderbox:hover{
        box-shadow: 2px 2px 12px rgba(47,47,47,0.40);
      }
      .sliderbox:hover .imgbox img{
        transform: scale(1.03);
        transition: all ease 0.3s;
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

        h1,h2{
          color: white;
          font-weight: normal;
        }

        .online{
          float: left;
          width: 60%;
          padding: 10px;
          height: 300px;
        }

        .adver{
          float: right;
          width: 40%;
          padding: 10px;
          height: 300px;

        }

       .para:after{
          content: "";
          display: table;
          clear: both;

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

             .image1{
               height: 230px;
               width: 380px;
             }

             .image2{
               height: 230px;
               width: 290px;
             }
</style>

<body>

    <div class="innovator">
    <table>
      <br>
      <tr> <h1> &nbsp&nbsp&nbsp&nbsp&nbsp INNOVATOR </h1></tr>

        <tr>
        <hr>
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

    <div class="heading">
      <CENTER><h2>JOB &nbspRECRUITMENT</h2></CENTER>
    </div>

    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">

    <div class="sliderbox">
      <div class="imgbox">
        <img src="C:\Users\DELL\Desktop\jobportal\21.jpg">
      </div>
    </div>
  </div>
      <div class="swiper-slide">
        <div class="sliderbox">
      <div class="imgbox">
        <img src="C:\Users\DELL\Desktop\jobportal\5.png">
      </div>
    </div>
  </div>
      <div class="swiper-slide">
        <div class="sliderbox">
      <div class="imgbox">
        <img src="C:\Users\DELL\Desktop\jobportal\12.jpg">
      </div>
    </div>
  </div>
      <div class="swiper-slide">
        <div class="sliderbox">
      <div class="imgbox">
        <img src="C:\Users\DELL\Desktop\jobportal\13.png">
      </div>
    </div>
  </div>
      <div class="swiper-slide">
        <div class="sliderbox">
      <div class="imgbox">
        <img src="C:\Users\DELL\Desktop\jobportal\14.png">
      </div>
    </div>
  </div>
      <div class="swiper-slide">
        <div class="sliderbox">
      <div class="imgbox">
        <img src="C:\Users\DELL\Desktop\jobportal\15.png">
      </div>
    </div>
  </div>
      <div class="swiper-slide">
        <div class="sliderbox">
      <div class="imgbox">
        <img src="C:\Users\DELL\Desktop\jobportal\16.png">
      </div>
    </div>
  </div>
      <div class="swiper-slide">
        <div class="sliderbox">
      <div class="imgbox">
        <img src="C:\Users\DELL\Desktop\jobportal\17.png">
      </div>
    </div>
  </div>
      <div class="swiper-slide">
        <div class="sliderbox">
      <div class="imgbox">
        <img src="C:\Users\DELL\Desktop\jobportal\18.png">
      </div>
    </div>
  </div>
      <div class="swiper-slide">
        <div class="sliderbox">
      <div class="imgbox">
        <img src="C:\Users\DELL\Desktop\jobportal\19.png">
      </div>
    </div>
  </div>
      <div class="swiper-slide">
        <div class="sliderbox">
      <div class="imgbox">
        <img src="C:\Users\DELL\Desktop\jobportal\20.png">
      </div>
    </div>
  </div>

    </div>
  </div>
</div>


    <div class="para">
      <div class="online">

    <h2>ONLINE JOB PORTAL<hr></h2>
    <?php
    echo "<p>Job degrees in this field may be available as Job of Philosophy,
      Job of Business or Job of Management degrees. Concentration options
      at the studental level include computer science,information technology,
      management information system or network management. The program concludes
      with the presentation and defence of dissertation based on original research.</p>

      <p>An Job is a company that provides air transport services for traveling passengers
      and freight. Job utilize aircraft to supply these services and may form partnership
      or alliances with other student for codeshare agreements. Generally, Job companies
      are recognized with an air operating certificate or license issued by a governmental
      aviation body.</p>

      <p>Job vary in size from small domastic student to full- service international student
        with double decker airplanes. Airline services can be categorized as being
        interconditional, domastic, regional, or international, and may be operated as scheduled
        services or charters. The largest job currently is American Job Group.</p>" ;
        ?>
       </div>

      <div class="adver">
        <h2>ADVERTISEMENT<hr></h2>
        <img class="image1"  src="C:\Users\DELL\Desktop\jobportal\11.png" />
        <img class="image2" src="C:\Users\DELL\Desktop\jobportal\10.jpg"/>
      </div>

        </div>

    <script type="text/javascript" src="C:\Users\DELL\Desktop\jobportal\swiper.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container',{
      slidesPerView: 4,
      spaceBetween:30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    </script>

  </body>
  </head>
</html>
