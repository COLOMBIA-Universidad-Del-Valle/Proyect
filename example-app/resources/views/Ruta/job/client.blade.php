<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Clients</title>
  <link rel="stylesheet" href="{{ asset('css/components/body.css') }}">
  <link rel="stylesheet" href="{{ asset('css/job/client.css') }}">
</head>

<body>
  <x-formt></x-formt>
  <div class="container" style="background-color: yellowgreen;">
    <h1 class="title">Client Management</h1>

    <form id="create-client-form" class="form">
      <div class="field">
        <label for="client-name">Client Name</label>
        <input type="text" id="client-name" placeholder="Enter client name" required>
      </div>
      <div class="field">
        <label for="client-email">Email Address</label>
        <input type="email" id="client-email" placeholder="Enter client email" required>
      </div>
      <button type="submit" class="btn create">Create Client</button>
    </form>


  </div>

  <div class="container" style="background-color:brown;">
    <h1 class="title">Clients</h1>

    <table class="table">
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Name</th>
          <th>Email Address</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="client-list">

      </tbody>
    </table>
  </div>





  <script>
    document.getElementById('create-client-form').addEventListener('submit', function(e) {
      e.preventDefault();

      const name = document.getElementById('client-name').value;
      const email = document.getElementById('client-email').value;

      if (name && email) {
        const table = document.getElementById('client-list');
        const row = table.insertRow();
        const idCell = row.insertCell(0);
        const nameCell = row.insertCell(1);
        const emailCell = row.insertCell(2);
        const actionCell = row.insertCell(3);

        idCell.textContent = table.rows.length;
        nameCell.textContent = name;
        emailCell.textContent = email;

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.className = 'btn delete';
        deleteButton.onclick = function() {
          table.deleteRow(row.rowIndex - 1);
        };

        actionCell.appendChild(deleteButton);

        document.getElementById('client-name').value = '';
        document.getElementById('client-email').value = '';
      }
    });
  </script>

</body>

</html>