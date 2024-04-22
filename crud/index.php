 
  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
  </head>
  <body>  
    <div class="container">
        <div class="row my-5">
             
            <div class="col-lg-6 mx-auto">
                <h1>Registration Form</h1>    
                <form action="./insert.php" method="POST">
                    <div class="form-group mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name='fullname'>
                    </div>                
                    <div class="form-group mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name='email'>
                    </div>                
                    <div class="form-group mb-3">
                        <label for="">Phone</label>
                        <input type="number" class="form-control" name="phone">
                    </div>                
                    <div class="form-group mb-3">
                        <label for="">Birth Day</label>
                        <input type="date" class="form-control" name="bday">
                    </div>                
                    <div class="form-group mb-3">
                        <label for="">Gender</label>
                        Male <input type="radio" name="gender" value="male" id="">
                        Female<input type="radio" name="gender" value="female" id=""> 
                    </div>                
                    <div class="form-group mb-3">
                        <label for="">Favourite Game</label>
                        <div class="d-flex gap-2">
                            <div>
                           <input type ="checkbox" name="game" class="form-check-input" value="Cricket" id=""> Cricket 
                            </div>
                            <div>
                           <input type="checkbox" name="game" class="form-check-input" value="football" id=""> football
                            </div> 
                        </div>
                    </div>                
                    <div class="form-group mb-3">
                        <label for="">District</label>
                        <select name="district" class="form-control" >
                            <option >choose district</option>
                            <option value="jashore">jashore</option>
                            <option value="khulna">khulna</option>
                        </select>
                    </div>                
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-success" name='submit' value="submit"> 

                        <input type="reset" class="btn btn-warning" value="reset"> 
                    </div>                
                </form>
            </div>
        </div>
    </div>


    
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>