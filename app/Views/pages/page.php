<!DOCTYPE html>
<html>
    <head><title>sign</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/bootstrap-responsive.css" rel="stylesheet">
      <script src="/js/bootstrap.js"></script>
      <script src="/js/bootstrap-responsive.js"></script>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

 
body{
    background-image: url(http://res.cloudinary.com/arbor1221/image/upload/v1498121383/Travel_Lifestyle_Recreation_n4aq8s.jpg);
}
h1{
    color:crimson;
    text-align: center;
    font-family: 'shrikhand', cursive;
}
.form-holder {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 100vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 60px;
}

.form-content .form-items {
    border: 3px solid white;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color:white;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: white;
    font-size: 15px;
    font-weight: 300;
    color: grey;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}


.btn-primary{
    background-color:aqua;
    outline: none;
    border: 0px;
     box-shadow: none;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color:grey;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color:white;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: grey;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up{
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}
      </style>
      <script>
        (function () {
'use strict'
const forms = document.querySelectorAll('.requires-validation')
Array.from(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

      </script>
    <body>
        <h1>It's Time To Travel</h1>
      <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 style="color:brown">Sign Up</h3>
                      
                        <form class="requires-validation" novalidate>

                            <div class="col-md-10">
                               <input class="form-control" type="text" name="name" placeholder="UserName" required>
                            </div>

                            <div class="col-md-10">
                                <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                            </div>
                           <div class="col-md-10">
                              <input class="form-control" type="password" name="password" placeholder="Password" required>  
                           </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">confirm</label>
      
                        </div>
                     <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary"><a href="file:///C:/Users/hp/Desktop/myproject.html">Login</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
