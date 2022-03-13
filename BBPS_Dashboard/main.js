// FETCH DATA
fetch("check.php")
  .then((res) => res.json())
  .then((response) => {
    console.log(response);
    let output = "";
    for (let i in response) {
      output += `<tr>
			<td>${response[i].CustomerID}</td>
			<td>${response[i].Name}</td>
			<td>${response[i].PhoneNumber}</td>
			<td>${response[i].AmountDue}</td>
			<td>${response[i].AmountPaid}</td>
		</tr>`;
    }

    document.querySelector(".tbody").innerHTML = output;
  })
  .catch((error) => console.log(error));

// DATA TABLES
$(document).ready(function () {
  $(".table").DataTable();
});
