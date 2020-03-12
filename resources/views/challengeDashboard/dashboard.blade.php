@extends('layout.Layout')
   
@section('content')

<head>
<script>
window.onload = function () {

//Better to construct options first and then pass it as a parameter
var options = {
	title: {
		text: "Challenges Chart"              
	},
	data: [              
	{
		// Change type to "doughnut", "line", "splineArea", etc.
		type: "column",
		dataPoints: [
			{ label: "ch1",  y: 25 },
			{ label: "ch2", y: 50  },
			{ label: "ch3", y:75  },
			{ label: "ch4",  y: 80  },
			{ label: "ch5",  y: 30  }
		]
	}
	]
};

$("#chartContainer").CanvasJSChart(options);
}
</script>
</head>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

<div class="row">
  <div class="col-sm-6">
    <h4>Challenge List</h4>
  </div>
 
</div>
 
 <div class="row">
      <div class="col-12">          
        <table class="table table-bordered" id="laravel_crud">
         <thead>
            <tr>
              
               <th class="text-center">Title</th>
               <th class="text-center">Description</th>
               <th class="text-center">Status</th>
               <th class="text-center">Participant List</th>
               <th class="text-center">Winner</th>
               <th class="text-center">Winner Code</th>
               <th class="text-center">Comments List</th>
               
            </tr>
         </thead>
         <tbody>
            @foreach($challenges as $challenge)
            <tr class="text-center">
               
               <td>{{ $challenge->title }}</td>
               <td>{{ $challenge->description }}</td>
               @if( $current > $challenge->endDate )
               <td><font size="3" color="red">Closed</font>
               <i style='font-size:24px;color:red' class='far'>&#xf119;</i></td>
               @else
               <td>
               <font size="3"  color="green">Ongoing</font>
               <i style='font-size:24px;color:green'  class='fas'>&#xf581;</i></td>
               @endif
               <td class="text-center">
                <a href="" >Participant Listit</a></td>
               <td></td>
               <td class="text-center">
                <a href="" >winner code Git Link</a></td>

               <td class="text-center">
             
               <a href="" >Comments List</a></td>
           
              </td>
             
            </tr>
            @endforeach
 
            @if(count($challenges) < 1)
              <tr>
               <td colspan="10" class="text-center">There are no challenge available yet!</td>
              </td>
            </tr>
            @endif
         </tbody>
        </table>
        {!! $challenges->links() !!}
     </div> 
 </div>


 @endsection  