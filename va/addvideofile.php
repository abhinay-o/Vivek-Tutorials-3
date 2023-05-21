<style>
.container {
  display: flex;
  justify-content: center;
}
button{
  margin-left:22px;
}
</style>
<div class="container">
<select id="myDropdown" >
  <option value="">SELECT CLASS</option>
  <option value="addvideo9.php">Class IX</option>
  <option value="addvideo10.php">Class X</option>
  <option value="addvideo11.php">Class XI</option>
  <option value="addvideo12.php">Class XII</option>
 
</select>
<button onclick="goToPage()">Go</button>
</div>
<script>
function goToPage() {
  var dropdown = document.getElementById("myDropdown");
  var selectedValue = dropdown.options[dropdown.selectedIndex].value;
  if (selectedValue != "") {
    window.location.href = selectedValue;
  }
}
</script>
