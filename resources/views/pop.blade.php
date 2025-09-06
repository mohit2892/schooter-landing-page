<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking Form</title>
    <!-- <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #111;
      margin: 0;
      padding: 0;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.6);
    }

    .modal-content {
      background-color: #4caf50;
      margin: 10% auto;
      padding: 20px;
      border-radius: 8px;
      width: 600px;
      position: relative;
      color: #000;
    }

    .modal-content h2 {
      margin-top: 0;
    }

    .close {
      color: black;
      position: absolute;
      right: 20px;
      top: 15px;
      font-size: 24px;
      font-weight: bold;
      cursor: pointer;
    }

    input, select, textarea {
      width: 30%;
      padding: 10px;
      margin: 10px 10px 10px 0;
      border: none;
      border-radius: 4px;
      font-size: 14px;
    }

    textarea {
      width: 95%;
      height: 100px;
      resize: none;
    }

    .form-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .btn-submit {
      background-color: #000;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 15px;
    }

    .btn-submit:hover {
      background-color: #333;
    }
  </style> -->
</head>

<body>

    <!-- <div class="modal">
  @include('inc.form')
</div> -->



    <script>
        // Open modal automatically when page loads
        window.onload = function() {
            document.getElementById("bookingModal").style.display = "block";
        };

        function closeModal() {
            document.getElementById("bookingModal").style.display = "none";
        }

        // Close when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById("bookingModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
    </script>

</body>

</html>
