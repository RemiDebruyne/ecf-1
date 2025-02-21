<x-layout>
  @slot('content')
    @foreach ($courses as $course)
      <x-course.card href="/courses/{$course->id}/reservation" :course="$course"></x-course.card>
    @endforeach
  @endslot
    @slot('nav')
    {{ $courses->links() }}
    @endslot
</x-layout>