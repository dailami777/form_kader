<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Form</title>
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
 
  <form action="/sendform.php" class="bg-light text-dark"><!-- you can use mailto:-->

    <div class="form-group">
      <label for="name">Name <font color="red">*</font></label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email<font color="red">*</font></label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="subject">Subject<font color="red">*</font></label>
      <input type="text" class="form-control" id="subject" name="subject" required>
    </div>

    <div class="form-group">
      <label for="Message">Message<font color="red">*</font></label>
      <textarea class="form-control" id="message" name="message" rows="10" cols="30" required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Send message</button>
    <button type="submit" formaction="/preview.php" class="btn btn-primary">Preview</button>
  </form>
