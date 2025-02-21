<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body>
    <p>{{ $course->activity }}</p>
    <form method="post" action="/reservation">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900"></h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Timeslot</label>
                        <div class="mt-2">
                            <select name="timeslot_id" id="timeslot" class="form-control">
                                @foreach ($timeslots as $timeslot)
                                    <option value="{{ $timeslot->id }}">
                                        {{ $timeslot->start_time }} - {{ $timeslot->end_time }}
                                    </option>
                                @endforeach
                            </select>
                            @error('title')
                                <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- @if($errors->any())--}}
                {{-- <ul>--}}
                    {{-- @foreach($errors->all() as $error)--}}
                    {{-- <li class="text-red-500 italic">{{ $error }}</li>--}}
                    {{-- @endforeach--}}
                    {{-- </ul>--}}
                {{-- @endif--}}
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>


</body>

</html>