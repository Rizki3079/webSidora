@extends('template_home')

@section('container_section')
<h1>Selamat Datang </h1><br>
<table class="table table-bordered table-striped" id="example1">
<thead>
    
    <tr>
        <th>JENIS DARAH</th>
        
        <th align="center">A</th>
        <th>B</th>
        <th>AB</th>
        <th>O</th>
        <th></th>                
        
    </tr>
    <tr>
        <th>WHOLE BLOOD</th>
        <th align="center">11</th>
        <th>12</th>
        <th>11</th>
        <th>10</th>
    </tr>
    <tr>
        <th>PACKAGE RED CELL</th>
        <th align="center">10</th>
        <th>11</th>
        <th>13</th>
        <th>15</th>
    </tr>
    <tr>
        <th>TROMBOCYTE</th>
        <th align="center">20</th>
        <th>10</th>
        <th>18</th>
        <th>12</th>
    </tr>
    <tr>
        <th>FRESH FROZEN PLASMA</th>
        <th align="center">25</th>
        <th>15</th>
        <th>10</th>
        <th>12</th>
    </tr>
    
</thead>
</table><br>
<h1>Salam Kemanusiaan</h1>
@endsection