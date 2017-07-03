@extends('layouts.app')
@section('content')
	<style type="text/css">
		.active{
			color: green;

		}
	</style>
	<h1>Список новостей</h1>
	<a href="{{route('news.create')}}" class="btn btn-info">
		Створити новину
	</a>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>
					title
				</th>
				<th>
					Desc
				</th>
				<th>
					published
				</th>
				<th>
					published date
				</th>
				<th>
					Actions
				</th>	
			</tr>
		</thead>
		<tbody>
				<tr>
					<td>
						title1		
					</td>
					<td>
						desc1
					</td>
					<td>
						man1
					</td>
					<td>
						publish
					</td>
				</tr>	
				<tr class='active'>
					<td>
						title2		
					</td>
					<td>
						desc12
					</td>
					<td>
						man12
					</td>
					<td>
						publish2
					</td>
				</tr>	

				<tr>
					<td>
						title1		
					</td>
					<td>
						desc1
					</td>
					<td>
						man1
					</td>
					<td>
						publish
					</td>
				</tr>	

		</tbody>
		
	</table>
<script type="text/javascript">
	var promise = new Promise(function(resolve, reject){
	
			
			setTimeout(function(){
				try{
					throw 500;
					$('tr').toggleClass('active');
					resolve();
				}
				catch(err){
					reject(err);
				}
				
				
			},1000)    
		
	})
	
	function test(test){ 
		if(test) 
			{ 
				console.log(test)
			}else{
				console.log('without test')
			}
		} 

	promise.then(function(arr){
		$('tr').toggleClass('active');
	}, function(){console.log('dsadsadasds')})	
	


</script>

@endsection
