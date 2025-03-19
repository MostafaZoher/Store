@extends('layouts.dashBoard')
@section('content')

  <style>
    .form-container {
      background-color: #fff;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      width: 85%;
      margin: auto;
      box-sizing: border-box;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .input-field {
      width: 100%;
      padding: 12px;
      margin: 15px 0;
      border-radius: 5px;
      border: 1px solid #ddd;
      font-size: 16px;
      color: #333;
    }

    .input-field:focus {
      border-color: #007bff;
      outline: none;
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .submit-btn:hover {
      background-color: #0056b3;
    }

    .submit-btn:active {
      background-color: #004085;
    }

    .submit-btn:focus {
      outline: none;
    }
  </style>

  <div class="form-container">
    <h2>Add New Category</h2>
    <form action="{{url('createCategory')}}" method="post">
        @csrf
      <input type="text" name="name" class="input-field" placeholder="Enter category name"  required>
      <button type="submit" class="submit-btn">Confirm</button>
    </form>
  </div>

@endsection
