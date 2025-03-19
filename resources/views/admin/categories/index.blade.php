@extends('layouts.dashBoard')
@section('content')
<style>
    .container {
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    th, td {
      padding: 12px;
      text-align: center;
      border: 1px solid #ddd;
    }
    th {
      background-color: #007bff;
      color: white;
      font-size: 18px;
    }
    td {
      background-color: #f9f9f9;
    }
    tr:nth-child(even) td {
      background-color: #f1f1f1;
    }
    tr:hover td {
      background-color: #f1f1f1;
    }
    .action-btn {
      padding: 8px 15px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .action-btn:hover {
      background-color: #218838;
    }
    .action-btn.delete {
      background-color: #dc3545;
    }
    .action-btn.delete:hover {
      background-color: #c82333;
    }
    .procces{
      display: flex ; 
      justify-content: center;
      gap: 20px;
    }
  </style>
<div class="container">
    <table>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NAME</th>
          <th scope="col">PROCCES</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($AllCategories as $category)
        <tr>
            <th scope="row">{{$category -> id}}</th>
            <td>{{$category -> name}}</td>
            <td >
              <div class="procces">
                <form action="/editCategory/{{$category->id}}" method="get">
                  <button class="action-btn">edit</button>
                </form>
                <form action="/removeCategory/{{$category->id}}">
                  <button class="action-btn delete">delete</button>
                </form>
              </div>
              
            </td>
          </tr> 
        @endforeach

      </tbody>
    </table>
  </div>
@endsection
