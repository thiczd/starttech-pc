

<?php 


require_once "config.php";

        $query = "SELECT * from items";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$items = [];
while ($row = mysqli_fetch_assoc($result)) {
    $items[] = $row;
}
echo json_encode($items);
mysqli_close($link);







?>










<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Inventory</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div id="nav-placeholder"></div>

    <script>
      fetch("nav.html")
        .then((response) => response.text())
        .then((data) => {
          document.getElementById("nav-placeholder").innerHTML = data;
        });
     items.forEach((item) => {
        container.innerHTML += `
          <div class="row border justify-content-center mt-4">
            <div class="col-md-4 border p-3">
              <p class="h5 text-center">${item.name}</p>
              <hr />
              <img
                src="${item.image || 'images/placeholder.svg'}"
                height="200"
                width="200"
                class="mx-auto d-block img-fluid"
              />
              <hr />
              <p class="text-center mt-4">${item.description}</p>
            </div>
          </div>
        `;
      });
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
