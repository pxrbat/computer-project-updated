function validate() {
  let user = document.querySelector("#user").value;
  let pass = document.querySelector("#pass").value;

  if (user === "admin" && pass === "admin") {
    window.location.href = "index.php";
    return false;
  } else {
    document.getElementById("alert").innerText = "* Please try again";
    return false;
  }
}
