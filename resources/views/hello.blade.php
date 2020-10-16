<h1>Name:{{ $name }} Age:{{$age}} Year  </h1>
<h1>Books:</h1>
@foreach($books as $book)
{{$book}}
@endforeach
