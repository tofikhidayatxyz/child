/*
<h1>operasi hitung</h1>
	<p id="demo"></p>
	<input type="number" name="" id="num1">
	<br>

	<input type="number" name="" id="num2">
	<br>
	
	<button id="hasil"></button>
	<br>

	<h1 id="hasil">hasil</h1>

*/

var action = document.getElementById('calc')
var input1 = document.getElementById('num1')
var input1 = document.getElementById('num2')
var terget = document.getElementById('hasil')
/* belajar perseInt */

action.addEventListener('click',function(e)) {
	var jumlah = perseInt(input1.value) * perseInt(input2.value);
	target.innerHTML = jumlah;
}