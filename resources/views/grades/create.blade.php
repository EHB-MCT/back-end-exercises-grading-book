<x-app-layout>
    <x-slot name="header">
        Header
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (\Session::has('success'))
                        <p>{!! \Session::get('success') !!}</p>
                    @endif

                    <a href="{{ route('grades.create') }}">Grade students</a>
                    <form action="" method="post">
                        <label for="student">Student</label>
                        <input type="text" id="student" name="student">

                        <label for="grade">Score</label>
                        <input type="text" id="grade" name="grade">

                        @csrf

                        <input type="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
