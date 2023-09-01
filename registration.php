<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
    

    <div class="d-flex justify-content-center align-items-center p-5 ">
        <form class="needs-validation justify-content-center" novalidate action="" method="post">

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>

            <div class="invalid-feedback">
              Mention your name!.
            </div>
            <div class="valid-feedback">
              looks good!
            </div>
          </div>


          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Enter email" aria-label="Email" aria-describedby="basic-addon1" required>
            <span class="input-group-text" id="basic-addon1">@gmail.com</span>

            <div class="invalid-feedback">
              Mention your email!.
            </div>
            <div class="valid-feedback">
              looks good!
            </div>
          </div>

          
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Enter password" aria-label="password" aria-describedby="basic-addon1" required>
            <div class="invalid-feedback">
              Mention a strong passord.
            </div>
            <div class="valid-feedback">
              looks good!
            </div>
          </div>

         

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div><br>
          <button class="btn btn-success" type="submit">Submit form</button>
        </form>
      </div>
    
           
          </div>     
          

      <script>       
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>
</body>
</html>