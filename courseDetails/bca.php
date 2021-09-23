<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school management system</title>

    <link rel="stylesheet" href="../css/style.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/f7e50e2bfa.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>
<?php include('../navbar.php') ?>
<section>
    <div class="container-fluid pt-5 bg-light">
        <h4 class="pt-3"><i class="fas fa-home"></i> / COURSE DETAILS</h4>
    </div>
</section>
    
<section class="mt-5 py-5" id="about-us">
  <div class="text-center mb-5">
    <h2>BCA(Bachelor of Computer Application)</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 pb-2">
        <img src="../images/demo.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h4 class="pb-2">About BCA</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia corrupti aspernatur dolores sint, ipsum totam commodi velit nisi, animi, perferendis possimus quo doloribus incidunt neque aut asperiores omnis quam quia?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quasi veritatis excepturi distinctio earum laborum nulla accusamus? Officiis possimus quidem dolore </p>
      </div>
    </div>
  </div>
</section>


<section class="py-3">
  <div class="container">
    <h4 class="text-center font-weight-bold mb-5">Syallabus <hr></h4>

    <div class="row">

      <div class="col-12 mb-4">
        <h5 class="text-center">First Semester</h5>
        <table class="table">

          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Lecture Hrs.</th>
              <th scope="col">Tutorial Hrs.</th>
              <th scope="col">Lab Hrs.</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CACS101</td>
              <td>Computer Fundamentals & Applications</td>
              <td>4</td>
              <td>4</td>
              <td>-</td>
              <td>4</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CACO102</td>
              <td>Society and Technology</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>-</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CAEN103</td>
              <td>English I</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>-</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>CAMT104</td>
              <td>Mathematics I</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>CACS105</td>
              <td>Digital Logic</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>2</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">16</th>
              <th scope="row">16</th>
              <th scope="row">2</th>
              <th scope="row">7</th>
            </tr>
        
          </tbody> 

        </table>
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Second Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Lecture Hrs.</th>
              <th scope="col">Tutorial Hrs.</th>
              <th scope="col">Lab Hrs.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CACS151</td>
              <td>C Programming</td>
              <td>4</td>
              <td>4</td>
              <td>1</td>
              <td>3</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CAAC152</td>
              <td>Financial Accounting</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CAEN153</td>
              <td>English II</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>-</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>CAMT154</td>
              <td>Mathematics II</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>CACS155</td>
              <td>Microprocessor and Computer Architecture</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>2</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">16</th>
              <th scope="row">16</th>
              <th scope="row">5</th>
              <th scope="row">7</th>
            </tr>
    
          </tbody>
        </table>
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Third Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Lecture Hrs.</th>
              <th scope="col">Tutorial Hrs.</th>
              <th scope="col">Lab Hrs.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CACS201</td>
              <td>Data Structure and Algorithm</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>3</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>CAST202</td>
                <td>Probability and Statistics</td>
                <td>3</td>
                <td>3</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CACS203</td>
              <td>System Analysis and Design</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>-</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>CACS204</td>
              <td>OOP in Java</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>CACS205</td>
              <td>Web Technology</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>3</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">15</th>
              <th scope="row">15</th>
              <th scope="row">3</th>
              <th scope="row">9</th>
            </tr>
    
          </tbody>
        </table>           
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Forth Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Lecture Hrs.</th>
              <th scope="col">Tutorial Hrs.</th>
              <th scope="col">Lab Hrs.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CACS251</td>
              <td>Operating System</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CACS252</td>
              <td>Numerical Methods</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CACS253</td>
              <td>Software Engineering</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>-</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>CACS254</td>
              <td>Scripting Language</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>3</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>CACS255</td>
              <td>Database Management System</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>CAPJ256</td>
              <td>Project I</td>
              <td>2</td>
              <td>-</td>
              <td>-</td>
              <td>4</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">17</th>
              <th scope="row">15</th>
              <th scope="row">4</th>
              <th scope="row">13</th>
            </tr>
          </tbody>
        </table>             
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Fifth Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Lecture Hrs.</th>
              <th scope="col">Tutorial Hrs.</th>
              <th scope="col">Lab Hrs.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CACS301</td>
              <td>MIS and E-Business</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CACS302</td>
              <td>DotNet Technology</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CACS303</td>
              <td>Computer Networking</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>CAMG304</td>
              <td>Introduction to Management</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>-</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>CACS305</td>
              <td>Computer Graphics and Animation</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>2</td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">15</th>
              <th scope="row">15</th>
              <th scope="row">2</th>
              <th scope="row">9</th>
            </tr>
          </tbody>
        </table> 
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Sixth Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Lecture Hrs.</th>
              <th scope="col">Tutorial Hrs.</th>
              <th scope="col">Lab Hrs.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CACS351</td>
              <td>Mobile Programming</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>3</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CACS352</td>
              <td>Distributed System</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>-</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CAEC353</td>
              <td>Applied Economics</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>-</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>CACS354</td>
              <td>Advanced Java Programming</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>3</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>CACS355</td>
              <td>Network Programming</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td></td>
              <td>Project II</td>
              <td>2</td>
              <td>-</td>
              <td>-</td>
              <td>4</td>
            </tr>
            
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">17</th>
              <th scope="row">15</th>
              <th scope="row">2</th>
              <th scope="row">12</th>
            </tr>
          </tbody>
        </table> 
      </div>

      <div class="col-12 mb-4">
        <h5 class="text-center">Seventh Semester</h5>
        <table class="table ">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Lecture Hrs.</th>
              <th scope="col">Tutorial Hrs.</th>
              <th scope="col">Lab Hrs.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CACS401</td>
              <td>Cyber Law and Professional Ethics</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>-</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CACS402</td>
              <td>Cloud Computing</td>
              <td>3</td>
              <td>3</td>
              <td>-</td>
              <td>3</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>CAIN403</td>
              <td>Internship</td>
              <td>3</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td></td>
              <td>Elective I</td>
              <td>3</td>
              <td>3</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td></td>
              <td>Elective II</td>
              <td>3</td>
              <td>3</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">15</th>
              <th scope="row">12</th>
              <th scope="row">1</th>
              <th scope="row">3</th>
            </tr>
          </tbody>
        </table> 
      </div>
          
      <div class="col-12 mb-4">
        <h5 class="text-center">Eight Semester</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit Hrs.</th>
              <th scope="col">Lecture Hrs.</th>
              <th scope="col">Tutorial Hrs.</th>
              <th scope="col">Lab Hrs.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CAOR451</td>
              <td>Operations Research</td>
              <td>3</td>
              <td>3</td>
              <td>1</td>
              <td>-</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>CAPJ452</td>
              <td>Project III</td>
              <td>6</td>
              <td>-</td>
              <td>-</td>
              <td>12</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td></td>
              <td>Elective III</td>
              <td>3</td>
              <td>3</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td></td>
              <td>Elective IV</td>
              <td>3</td>
              <td>3</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th  colspan="3" scope="col">Total</th>
              <th scope="row">15</th>
              <th scope="row">9</th>
              <th scope="row">1</th>
              <th scope="row">12</th>
            </tr>

            <tr>
              <th  colspan="7" scope="col">List if Electives</th>
            </tr>

              <tr>
                <th scope="col">SN</th>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">SN</th>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>CAPS476</td>
                <td>Applied Psychology</td>
                <th scope="row">6</th>
                <td>CACS482</td>
                <td>Knowledge Engineering</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>CACS477</td>
                <td>Geographical Information System</td>
                <th scope="row">7</th>
                <td>CACS483</td>
                <td>DotNet Technology</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>CACS478</td>
                <td>IT in Banking</td>
                <th scope="row">8</th>
                <td>CACS484</td>
                <td>Database Programming</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>CACS479</td>
                <td>Hotel Information System</td>
                <th scope="row">9</th>
                <td>CACS485</td>
                <td>Database Administration</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>CAER480</td>
                <td>Enterprise Resource Planning</td>
                <th scope="row">10</th>
                <td>CACS486</td>
                <td>Network Administration</td>
              </tr>
              
          </tbody>
        </table> 
      </div>

    </div>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h4 class="text-center p-3 font-weight-bold">Fee Structure</h4>

  </div>
</section>



<div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2021. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>



</body>
</html>