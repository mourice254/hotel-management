<?php
// Optional: Start session if needed
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $mobile = $_POST['mob'] ?? '';
    $id_proof = $_POST['id_proof'] ?? '';
    $id_number = $_POST['id_number'] ?? '';
    $days = $_POST['days'] ?? '';
    $persons = $_POST['persons'] ?? '';

    // Here you can save to database, send email, etc.
    // Example: echo "Billing info received!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Billing</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/683b4b40e3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="billing.css" />
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-6 bg-bill"></div>
      <div class="col-1"></div>
      <div class="col-5">
        <div class="bill"><u>Billing</u></div>
        
        <form method="POST" name="billData">
          <div class="form-row">
            <div class="form-group col-12">
              <label class="details">Name</label>
              <input type="text" class="form-control" name="name" required />
            </div>
            <div class="form-group col-12">
              <label class="details">Email</label>
              <input type="email" class="form-control" name="email" required />
            </div>
            <div class="form-group col-12">
              <label class="details">Mobile Number</label>
              <input type="text" class="form-control" name="mob" required />
            </div>
            <div class="form-group col-6">
              <label class="details">ID Proof</label>
              <select class="form-control" name="id_proof" required>
                <option value="">Select</option>
                <option>Aadhar Card</option>
                <option>Pan Card</option>
                <option>Driving License</option>
                <option>Voter ID</option>
              </select>
            </div>
            <div class="form-group col-6">
              <label class="details">ID Number</label>
              <input type="text" class="form-control" name="id_number" required />
            </div>
            <div class="form-group col-6">
              <label class="details">No. of Days</label>
              <select class="form-control" name="days" required>
                <option value="">Select</option>
                <?php for ($i = 1; $i <= 7; $i++): ?>
                  <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
              </select>
            </div>
            <div class="form-group col-6">
              <label class="details">No. of Persons</label>
              <select class="form-control" name="persons" required>
                <option value="">Select</option>
                <?php for ($i = 1; $i <= 5; $i++): ?>
                  <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
              </select>
            </div>

            <button type="submit" class="btn btn-info btn-block mt-4 pay" data-toggle="modal" data-target="#exampleModalCenter">
              Pay
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content heightOfModal">
                  <div class="modal-header gradient">
                    <h5 class="modal-title"><i class="fab fa-pied-piper"></i> <span class="hirato pl-2">Hirato</span></h5>
                    <button type="button" class="close" data-dismiss="modal">
                      <span>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body display">
                    <p>Thank you for your billing submission.</p>
                    <!-- You can dynamically show billing summary here -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Print Receipt</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
  <div style="height: 50px;"></div>

  <script type="text/javascript" src="billing.js"></script>
</body>
</html>
