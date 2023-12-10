<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('img/pic1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Sign in to <strong>Kedai Kopi Erky</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="/registeruser" method="post">
                @csrf
                <div class="form-group first">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" required>
                    <div id="name" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="form-group first">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="form-group first">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="form-group first" style="margin-top: 7px">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                    <label class="form-check-label" for="exampleCheck1" >Check me out</label>
                </div>

                <input type="submit" value="Sign In" class="btn btn-dark" style="margin-top: 7px">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>


    </section>
    <!-- <h1 class="text-center mb-4">Registered</h1>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="/registeruser" method="POST" >
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" required>
                            <div id="name" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                        <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div> -->
</body>

</html>