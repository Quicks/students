@extends('layouts.app')
@section('content')
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
			@foreach($news as $oneNews)
				<tr>
					<td>
						{{ $oneNews->title }}		
					</td>
					<td>
						{{ $oneNews->desc }}		
					</td>
					<td>
						{{ $oneNews->published }}		
					</td>
					<td>
						{{ $oneNews->publidshedDate }}		
					</td>
					<td>
						<a href="{{route('news.show', $oneNews->id)}}">		dsadsa
						</a>
					</td>
				</tr>	

				

			@endforeach		
		</tbody>
		
	</table>


@endsection
