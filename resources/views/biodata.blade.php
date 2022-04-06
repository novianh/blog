<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <h1>
      BIODATA send data
   </h1>
   <p>Nama: {{ $nama }}</p>
   <p>Mata Pelajaran</p>
	<ul>

		@foreach($matkul as $m)

		<li>{{ $m }}</li>

		@endforeach 
		{{-- karena dalam blade.php tidak perlu menggunakan awalan tag php untuk penggunaan sintax php --}}
	</ul>
</body>
</html>