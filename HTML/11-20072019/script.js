// var elementButton = document.createElement('button');
// elementButton.innerHTML = 'Click Di';
// document.body.appendChild(elementButton);

var data = {
    "users": [{
        "id": 10,
        "name": "Ethyl Medhurst",
        "email": "noah.hand@example.org",
        "password": "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
        "created_at": "2019-03-26 04:55:04",
        "updated_at": "2019-03-26 04:55:04"
      },
      {
        "id": 9,
        "name": "Eula Lebsack PhD",
        "email": "schroeder.sylvan@example.org",
        "password": "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
        "created_at": "2019-03-26 04:55:03",
        "updated_at": "2019-03-26 04:55:03"
      },
      {
        "id": 8,
        "name": "Mrs. Kathlyn Parisian DDS",
        "email": "ggrimes@example.net",
        "password": "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
        "created_at": "2019-03-26 04:55:03",
        "updated_at": "2019-03-26 04:55:03"
      }
    ]
  };

var tableBody =document.getElementById('table-body');

function duLieu(){

for (var i = 0; i < data.users.length; i++) {
    var user = data.users[i];

    var tableRow =document.createElement('tr');
    tableBody.appendChild(tableRow);

    var tableData = document.createElement('td');
    tableData.innerHTML = user.id;
    tableRow.appendChild(tableData);

    var tableData = document.createElement('td');
    tableData.innerHTML = user.name;
    tableRow.appendChild(tableData);

    var tableData = document.createElement('td');
    tableData.innerHTML = user.email;
    tableRow.appendChild(tableData);

    var tableData = document.createElement('td');
    tableData.innerHTML = user.password;
    tableRow.appendChild(tableData);

    var tableData = document.createElement('td');
    tableData.innerHTML = user.created_at;
    tableRow.appendChild(tableData);

    var tableData = document.createElement('td');
    tableData.innerHTML = user.updated_at;
    tableRow.appendChild(tableData);
}
}