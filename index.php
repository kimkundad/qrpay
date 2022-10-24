<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:100px">
  <!-- Content here -->
  <div class="row justify-content-md-center">
    <div class="col-8">

        <form action="https://api.gbprimepay.com/gbp/gateway/qrcode" method="POST"> 
            <input type="hidden" name="token" value="ULzRWyv2b8kQwB8nkh1HyDFu2kRqrMjV2mW1NBny55Y4bQ7N9b3Cfo+j0PEEbuSWQwKDdWsG5XwtOGmkk+cXtrGS67O+vmxtlEVTaLi88s/7uuhnqqgMNkscSh86Vw3n9EQL923Fpj3UeJgEVCIDPjuxJkaww3sm1zEa+o5S24gKmTls">
            <input type="hidden" name="referenceNo" value="201711280011">
            <input type="hidden" name="backgroundUrl" value="http://localhost/qr_code/hook.php">
            <div class="form-group">
            <input type="number" class="form-control" name="amount" maxlength="13" placeholder="Amount" value="1.00">
            </div>
            <button type="submit" id="button" class="btn btn-primary">Pay Now</button>
        </form>

    </div>
  </div>

</div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>