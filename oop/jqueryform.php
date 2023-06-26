<html>

<head>
  <style>
    .error {
      color: red;
    }
  </style>
</head>

<body>
  <form id="myForm" method="post" action="#">
    <div>
      <label for="firstName">First Name:</label><br>
      <input type="text" id="firstName" name="firstName">
      <span class="error" id="firstNameError"></span>
    </div>
    <div>
      <label for="lastName">Last Name:</label><br>
      <input type="text" id="lastName" name="lastName">
      <span class="error" id="lastNameError"></span>
    </div>
    <div>
      <label for="email">Email:</label><br>
      <input type="text" id="email" name="email">
      <span class="error" id="emailError"></span>
    </div>
    <div>
      <label for="phone">Phone:</label><br>
      <input type="phone" id="phone" name="phone">
      <span class="error" id="phoneError"></span>
    </div>
    <div>
      <label for="gender">Gender:</label>
      <input class="radio" type="radio" id="male" name="gender" value="male" checked="checked">
      <label for="male">Male</label>
      <input class="radio" type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label>
    </div>
    <div>
      <label for="hobby">Hobby:</label>
      <input class="check" type="checkbox" id="hobby1" name="hobby" value="reading">Reading
      <input class="check" type="checkbox" id="hobby2" name="hobby" value="sports">Sports
      <input class="check" type="checkbox" id="hobby3" name="hobby" value="music">Music
    </div>
    <div>
      <label for="address">Address:</label><br>
      <textarea id="address" name="address"></textarea>
      <span class="error" id="addressError"></span>
    </div>
    <div>
      <button type="submit">Submit</button>
      <button type="reset">Reset</button>
    </div><br>
    <table border="1">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Gender</th>
          <th>Hobby</th>
          <th>Address</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="displayArea"></tbody>
    </table>
  </form>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $("#reset").click(function() {
      $("#myForm")[0].reset();
    });
    $(document).on("click", ".btn-delete", function() {
      $(this).parents("tr").remove();
    });
    var index = false;

    $(document).on("click", ".btn-edit", function(e) {
      e.preventDefault();
      var row = $(this).closest("tr");
      var cols = row.find("td");
      var firstName = $(cols[0]).text();
      var lastName = $(cols[1]).text();
      var email = $(cols[2]).text();
      var phone = $(cols[3]).text();
      var gender = $(cols[4]).text();
      // console.log(gender);
      var hobby = $(cols[5]).text().split(",");
      // console.log(hobby);
      var address = $(cols[6]).text();

      $('#firstName').val(firstName);
      $('#lastName').val(lastName);
      $('#email').val(email);
      $('#phone').val(phone);
      $('#'+ gender).prop("checked", true);
      // $('input[name="hobby"]').prop("checked", false);
      $.each(hobby, function(index, value) {
        $('input[name="hobby"][value="' + value + '"]').prop("checked", true);
      });

      $('#address').val(address);
      var data = $('#displayArea').data("row", row);
      console.log(data);
      index = true;
    });

    $(document).on('submit', '#myForm', function(event) {
      event.preventDefault();
      $('.error').text('');
      var valid = false;

      var firstName = $('#firstName').val();
      if (firstName === '') {
        $('#firstNameError').text('First Name is required.');
        valid = true;
      }

      var lastName = $('#lastName').val();
      if (lastName === '') {
        $('#lastNameError').text('Last Name is required.');
        valid = true;
      }

      var email = $('#email').val();
      if (email == '') {
        $('#emailError').text('Email is required.');
        valid = true;
      }
      var regex = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);

      if (!email === '' && !regex.test(email)) {
        $('#emailError').text('Please Enter a valid Email.');
        valid = true;
      }

      var phone = $('#phone').val();
      if (phone == '') {
        $('#phoneError').text('Phone is required.');
        valid = true;
      }
      var regex = new RegExp(/^[0]?[789]\d{9}$/);

      if (!phone === '' && !regex.test(phone)) {
        $('#phoneError').text('Please Enter a valid phone number.');
        valid = true;
      }

      var address = $('#address').val();
      if (address === '') {
        $('#addressError').text('Address is required.');
        valid = true;
      }

      if (valid) {
        return false;
      }

      var gender = $(".radio:checked").val();

      var hobby = [];
      $.each($("input[name='hobby']:checked"), function() {
        hobby.push($(this).val());
      });


      if (index) {
        var row = $('#displayArea').data("row");
        console.log(row);
        row.find("td:eq(0)").text(firstName);
        row.find("td:eq(1)").text(lastName);
        row.find("td:eq(2)").text(email);
        row.find("td:eq(3)").text(phone);
        row.find("td:eq(4)").text(gender);
        row.find("td:eq(5)").text(hobby);
        row.find("td:eq(6)").text(address);
      } else {
        $('#displayArea').append(`<tr>
            <td>` + firstName + `</td>
            <td>` + lastName + `</td>
            <td>` + email + `</td>
            <td>` + phone + `</td>
            <td>` + gender + `</td>
            <td>` + hobby + `</td>
            <td>` + address + `</td>
            <td><button class='btn-delete'>Delete</button></td>
            <td><button class='btn-edit'>Edit</button></td>
        </tr>`);
      }
      index = false;
      $("#myForm")[0].reset();
    });
  </script>
</body>

</html>