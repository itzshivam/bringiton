@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
        
                    {{$user->name}}
                    {{$info->email}}
                    You are logged in!
                   <table> 
                  <tr> <td> 
                       <img src="saf">     
                       <br>
                        hey there          



                   
                   </td> 
                    <td>
                     
                        <img src="saf">     
                       <br>
                        hey there          



                   
                  </td>  </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

