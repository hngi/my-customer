
@extends('layout.base')
@section("custom_css")
	<link href="/backend/assets/css/complaintlog.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
@stop

  @section('content')
    <div class="table-responsive">
      <table class="table complaintlog-table">
        <thead>
          <tr>
              <th>S/N</th>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
              <th>Store</th>
              <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Alan Jellybean</td>
            <td>alan@gmail.com</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</td>
            <td>abc123</td>
            <td>Closed</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Alvin Eclair</td>
            <td>eclair@gmail.com</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</td>
            <td>abc123</td>
            <td>Open</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Elvis Mooney</td>
            <td>mooney@gmail.com</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</td>
            <td>xyz456</td>
            <td>Closed</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Jonathan Lollipop</td>
            <td>jonathan@gmail.com</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut.</td>
            <td>xyz456</td>
            <td>Closed</td>
          </tr>
        </tbody>
      </table>
    </div>
  @endsection
