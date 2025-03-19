@extends('layouts.dashBoard')
@section('content')

<style>
    .form-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 80%;
        align-content: center ;
        margin: auto;
    }
    h2 {
        text-align: center;
        color: #333;
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        font-weight: bold;
        color: #555;
    }
    input, select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    .error {
        color: red;
        font-size: 14px;
    }
    textarea{
        width: 100%;
    }
</style>
</head>
<body>

<div class="form-container">
<h2>ADD NEW PRODUCT</h2>
<form action="{{url('createProduct')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">NAME</label>
        <input type="text" id="name" name="name" required >
    </div>
    <div class="form-group">
        <label for="number">PRICE</label>
        <input type="number" id="number" name="price" required >
    </div>
    <div class="form-group">
        <label for="number">QUANTITY</label>
        <input type="number" id="number" name="quantity" required >
    </div>
    <div class="form-group">
        <label for="number">DESCRIPTION</label>
        <textarea name="des" id=""  rows="2"></textarea>
    </div>

    <div class="form-group">
        <label for="select">CATEGORY</label>

        <select id="select" name="category" required>
            <option value="">Select Category</option>
            @foreach ($allCat as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
@endforeach
        </select>
    </div>

    <div class="form-group">
        <input type="submit" value="ADD">
    </div>
</form>
</div>

@endsection
