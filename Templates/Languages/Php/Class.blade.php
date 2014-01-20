@dockblock
@if($class->hasBaseClass())
class {{ $name }} extends {{ $baseClass }} {
@else
class {{ $name }} {
@endif

	{{ $properties }}

	{{ $methods }}

}
