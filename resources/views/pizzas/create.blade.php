@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h1>Placement for Home VAccination</h1>
  <form action="/pizzas" method="POST">
  @csrf
    <label for="address">Your Address:</label>
    <input type="text" name="address" id="address" required>
    <label for="type">Choose type of Vaccine:</label>
    <select name="type" id="type">
      <option value="Pfizer">Pfizer</option>
      <option value="SinoVac">SinoVac</option>
      <option value="Morderna">Morderna</option>
      <option value="Johnson&Johnson">Johnson&Johnson</option>
    </select>
    <label for="shotno">Vaccine Shot:</label>
    <select name="shotno" id="shotno">
      <option value="First Vaccine shot">First Vaccine Shot</option>
      <option value="Second Vaccine shot">Second Vaccine Shot</option>
    </select>
    <fieldset>
<label>Covid Necessisities</label><br/>
<input type="checkbox" name="extras[]" value="Hand Sanitizer" > Hand Sanitizer <br/>
<input type="checkbox" name="extras[]" value="Masks" > 20 pcs mask box <br/>
<input type="checkbox" name="extras[]" value="Wipes" > Wipes <br/>
<input type="checkbox" name="extras[]" value="Disinfectant" > Disinfectants <br/>
    </fieldset>
    <input type="submit" value="Send info">
  </form>
  @endsection
</div>
