@extends('doctor.doctor-generics')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Patient Information</h3>
  </div>
  <div class="card-body">
    <p><strong>Name:</strong> John Doe</p>
    <p><strong>Date of Birth:</strong> 01/01/1990</p>
    <p><strong>Medical Conditions:</strong></p>
    <ul>
      <li>Cardiovascular Intervention <i class="fas fa-check text-success"></i></li>
      <li>Congestive Heart Failure <i class="fas fa-exclamation-triangle text-danger"></i></li>
      <li>Hypertension</li>
      <li>Diabetes</li>
      <li>Smoking</li>
    </ul>
  </div>
</div>
@endsection  