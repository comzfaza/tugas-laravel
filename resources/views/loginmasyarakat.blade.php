<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="login.css"> 
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   </head>
   <body>
      @include('layout.navbar')
    <br>
    <br>
    <h3 style="text-algin:center;">{{$loginmasyarakat}}</h3>
        <form action="regis" method="POST" enctype="multipart/form-data">
        <div class="container">
            @method("POST")
            @csrf
      <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">nik</label>
         <input type="email" class="form-control" id="exampleFormControlInput1">
       </div>

       <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">nama</label>
         <input type="email" class="form-control" id="exampleFormControlInput1">
       </div>

       <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">username</label>
         <input type="email" class="form-control" id="exampleFormControlInput1">
       </div>

       <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">password</label>
         <input type="email" class="form-control" id="exampleFormControlInput1">
       </div>

       <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">No_tlp</label>
         <input type="email" class="form-control" id="exampleFormControlInput1">
       </div>
   </body>
</html>