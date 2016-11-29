<html>
<head><title>Demo Operator</title></head>
<body>
<form action="prosess.php" method="post">
<h1>Demo Operator</h1>
<h4>Arithmetic</h4>
<table cellpadding='2' border='2'>
  <tr>
    <th>Operand Kiri</th>
    <th>Operator</th> 
    <th>Operand Kanan</th>
	<th></th>
  </tr>
  <tr>
    <td><input type="text" name="operandkiri"></td>
    <td><select name="operator">
	<option value="+"> + </option>
	<option value="-"> - </option>
	<option value="*"> * </option>
	<option value="/"> / </option>
	<option value="%"> % </option>
	</td> 
	<td><input type="text" name="operandkanan"></td>
    <td><input type="submit" value="Submit"></td>
  </tr>
 </table>
 </form>
 </body>
 </html>
